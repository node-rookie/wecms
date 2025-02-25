<?php

function strExists($haystack, $needle)
{
	return !(strpos($haystack, $needle) === false);
}

class IndexAction extends WapAction
{
	private $tpl;
	private $info;
	public $wecha_id;
	public $copyright;
	public $company;
	public $weixinUser;
	public $homeInfo;
	private $randstr = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	public $R = '';

	public function _initialize()
	{
		parent::_initialize();
		$where['token'] = $this->token;
		$tpl = $this->wxuser;
		$this->weixinUser = $tpl;
		if (isset($_GET['wecha_id']) && $_GET['wecha_id']) {
			$_SESSION['wecha_id'] = $_GET['wecha_id'];
		}

		$allClasses = M('Classify')->where(array('token' => $this->_get('token'), 'status' => 1))->order('sorts desc')->select();
		$allClasses = $this->convertLinks($allClasses);
		$info = array();

		if ($allClasses) {
			$classByID = array();
			$firstGradeCatCount = 0;

			foreach ($allClasses as $c) {
				$classByID[$c['id']] = $c;

				if ($c['fid'] == 0) {
					$c['sub'] = array();
					$info[$c['id']] = $c;
					$firstGradeCatCount++;
				}
			}

			foreach ($allClasses as $c) {
				if ((0 < $c['fid']) && $info[$c['fid']]) {
					array_push($info[$c['fid']]['sub'], $c);
				}
			}

			if ($info) {
				foreach ($info as $c) {
					$info[$c['id']]['key'] = $firstGradeCatCount--;
				}
			}
		}

		$homeInfo = $this->homeInfo;
		$homeInfo['info'] = str_replace(array("\r\n", '"', '&quot;'), array(' ', '', ''), $homeInfo['info']);
		$this->homeInfo['info'] = $homeInfo['info'];
		$this->info = $info;
		$tpl['color_id'] = intval($tpl['color_id']);
		$this->tpl = $tpl;
		if (((C('site_url') . U('Index/memberReg', array('token' => $this->token))) != $_SERVER['HTTP_REFERER']) && ((C('site_url') . U('Index/memberLogin', array('token' => $this->token))) != $_SERVER['HTTP_REFERER'])) {
			session('R', $_SERVER['HTTP_REFERER']);
		}

		$this->R = session('R');
	}

	public function memberLogin()
	{
		if (IS_POST) {
			$username = (isset($_POST['username']) ? htmlspecialchars($_POST['username']) : '');
			$password = (isset($_POST['password']) ? htmlspecialchars($_POST['password']) : '');
			$userInfo = M('Userinfo')->where(array('username' => $username, 'token' => $this->token))->find();

			if (empty($userInfo)) {
				$this->error('用户不存在');
			}
			else if ($userInfo['password'] != md5($password)) {
				$this->error('密码不正确');
			}
			else {
				$session_openid_name = 'token_openid_' . $this->token;
				session($session_openid_name, $userInfo['wecha_id']);
				$this->success('登录成功', $this->R);
			}
		}
		else {
			$this->assign('R', $this->R);
			$this->display();
		}
	}

	public function memberReg()
	{
		$f = 0;

		if ($this->wecha_id) {
			$f = 1;
		}

		if (IS_POST) {
			$tele = (isset($_POST['tel']) ? htmlspecialchars($_POST['tel']) : '');
			$password = (isset($_POST['password']) ? htmlspecialchars($_POST['password']) : '');
			$password2 = (isset($_POST['password2']) ? htmlspecialchars($_POST['password2']) : '');
			$username = (isset($_POST['username']) ? htmlspecialchars($_POST['username']) : '');

			if (empty($username)) {
				$this->error('账号不能为空!');
			}

			if (empty($tele)) {
				$this->error('电话号码不能为空!');
			}

			if (empty($password)) {
				$this->error('密码不能为空!');
			}

			if ($password != $password2) {
				$this->error('密码不正确');
			}
			else {
				$_POST['password'] = md5($_POST['password']);
			}

			if (!empty($_POST['paypass'])) {
				$_POST['paypass'] = md5($_POST['paypass']);
			}

			$_POST['token'] = $this->token;
			$userInfo = M('Userinfo')->where(array('username' => $username, 'token' => $this->token))->find();
			$tel = M('Userinfo')->where(array('token' => $this->token, 'tel' => $_POST['tel']))->find();
			$flag = 1;
			if ($userInfo && ($tel['username'] != $username)) {
				$this->error('账号已存在');
			}
			else {
				if ($tel && ($userInfo['tel'] != $tele)) {
					$this->error('手机已被使用，请输入您之前用该手机号注册的账号，系统将为您自动合并。');
				}
				else {
					if ($userInfo && ($tel['username'] == $username)) {
						M('Userinfo')->where(array('username' => $username, 'token' => $this->token, 'tel' => $_POST['tel']))->save($_POST);
						$flag = NULL;
					}
				}
			}

			if ($flag) {
				$uid = M('Userinfo')->add($_POST);
				if ($uid && ($f == 0)) {
					$wecha_id = $this->randstr[rand(0, 51)] . $this->randstr[rand(0, 51)] . $this->randstr[rand(0, 51)] . $uid;
					M('Userinfo')->where(array('id' => $uid, 'token' => $this->token))->save(array('wecha_id' => $wecha_id));
				}
			}

			session('token_openid_' . $this->token, $wecha_id);
			S('fans_' . $this->token . '_' . $this->wecha_id, NULL);
			$this->success('注册成功', $this->R);
		}
		else {
			$custom = M('Member_card_custom')->where(array('token' => $this->token))->find();

			if (!$custom) {
				$customArr = array(
					array('wechaname', 0, '微信名', 'text', ''),
					array('truename', 0, '真实姓名', 'text', ''),
					array('qq', 0, 'QQ', 'text', ''),
					array('paypass', 0, '支付密码', 'password', ''),
					array('portrait', 0, '头像', 'text', ''),
					array('sex', 0, '性别', 'number', ''),
					array('bornyear', 0, '出生年', 'number', ''),
					array('bornmonth', 0, '出生月', 'number', ''),
					array('bornday', 0, '出生日', 'number', '')
					);
			}
			else {
				if ($this->wecha_id) {
					$UserInfo = M('Userinfo')->where(array('token' => $this->token, 'wecha_id' => $this->wecha_id))->find();
				}

				foreach ($custom as $key => $value) {
					switch ($key) {
					case 'wechaname':
						$name = '微信名';
						$Uvalue = $UserInfo[$key];
						break;

					case 'truename':
						$name = '真实姓名';
						$Uvalue = $UserInfo[$key];
						break;

					case 'qq':
						$name = 'QQ';
						$Uvalue = $UserInfo[$key];
						break;

					case 'paypass':
						$name = '支付密码';
						$Uvalue = $UserInfo[$key];
						break;

					case 'portrait':
						$name = '头像';
						$Uvalue = $UserInfo[$key];
						break;

					case 'sex':
						$name = '性别';
						$Uvalue = $UserInfo[$key];
						break;

					case 'bornyear':
						$name = '出生年';
						$Uvalue = $UserInfo[$key];
						break;

					case 'bornmonth':
						$name = '出生月';
						$Uvalue = $UserInfo[$key];
						break;

					case 'bornday':
						$name = '出生日';
						$Uvalue = $UserInfo[$key];
						break;
					}

					if (($key == 'id') || ($key == 'token') || ($key == 'tel')) {
					}
					else if ($key == 'paypass') {
						$type = 'password';
						$customArr[] = array($key, $value, $name, $type, '');
					}
					else {
						if (($key == 'sex') || ($key == 'bornmonth') || ($key == 'bornyear') || ($key == 'bornday')) {
							$type = 'number';
							$customArr[] = array($key, $value, $name, $type, $Uvalue);
						}
						else {
							$type = 'text';
							$customArr[] = array($key, $value, $name, $type, $Uvalue);
						}
					}
				}
			}

			$this->assign('UserInfo', $UserInfo);
			$this->assign('custom', $customArr);
			$this->assign('R', $this->R);
			$this->display('memberLogin');
		}
	}

	public function profile()
	{
		if (empty($_POST['tel'])) {
			$this->error('电话号码不能为空!');
		}

		if (empty($_POST['password'])) {
			unset($_POST['password']);
			unset($_POST['password2']);
		}
		else if ($_POST['password'] != $_POST['password2']) {
			$this->error('两次密码不一致');
		}
		else {
			$_POST['password'] = md5($_POST['password']);
		}

		if (!empty($_POST['paypass'])) {
			$_POST['paypass'] = md5($_POST['paypass']);
		}
		else {
			unset($_POST['paypass']);
		}

		$_POST['wecha_id'] = $this->wecha_id;
		$_POST['token'] = $this->token;
		$where = array('token' => $this->token, 'wecha_id' => $this->wecha_id);

		if (M('Userinfo')->where($where)->field('id')->find()) {
			$sql = M('Userinfo')->where($where)->save($_POST);
		}
		else {
			$sql = M('Userinfo')->add($_POST);
		}

		if ($sql) {
			S('fans_' . $this->token . '_' . $this->wecha_id, NULL);
			$this->success('保存成功', $this->R);
		}
		else {
			$this->error('保存失败，请重新尝试', $this->R);
		}
	}

	public function debug()
	{
	}

	public function classify()
	{
		$this->assign('info', $this->info);
		$this->display($this->tpl['tpltypename']);
	}

	public function index()
	{
		if ($this->homeInfo['advancetpl']) {
			echo '<script>window.location.href="/cms/index.php?token=' . $this->token . '&wecha_id=' . $this->wecha_id . '";</script>';
			exit();
		}

		if ($this->token == 'yicms') {
			$token = $this->token;
			$where1['token'] = $token;
			$allflash = M('Flash')->where($where1)->order('id DESC')->select();
			$allflash = $this->convertLinks($allflash);
			$flash = array();

			foreach ($allflash as $af) {
				if ($af['url'] == '') {
					$af['url'] = 'javascript:void(0)';
				}

				if ($af['tip'] == 1) {
					$af['img'] = preg_replace('/default\\/\\.\\.\\//i', '', $af['img']);
					array_push($flash, $af);
				}
			}

			$this->assign('flash', $flash);
			$db = D('Classify');
			$dbs = D('Img');
			$list = $db->where(array('token' => $token, 'fid' => 0))->order('sorts DESC')->limit(9)->field('name,id,info,img')->select();

			foreach ($list as $k => $v) {
				$id[] = $v['id'];
			}

			$caseID = $id[4];
			$functionID = $id[0];
			$afterSaleID = $id[3];
			$this->assign('afterSaleID', $afterSaleID);
			$advantageID = $id[5];
			$this->assign('advantageID', $advantageID);
			$newsID = $id[6];
			$this->assign('newsID', $newsID);
			$aboutID = $id[7];
			$this->assign('aboutID', $aboutID);
			$contactID = $id[8];
			$this->assign('contactID', $contactID);
			$industryFunctionID = 523692;
			$subCatsWhere['token'] = $token;
			$subCatsWhere['fid'] = array(
	'in',
	array($caseID, $functionID)
	);
			$subCats = $db->where($subCatsWhere)->order('sorts DESC')->select();
			$functionCats = array();
			$caseCats = array();
			$functionCatIDs = array();

			foreach ($subCats as $sc) {
				if ($sc['fid'] == $functionID) {
					array_push($functionCats, $sc);
					array_push($functionCatIDs, $sc['id']);
				}
				else if ($sc['fid'] == $caseID) {
					array_push($caseCats, $sc);
				}
			}

			$product = $functionCats;
			$product = $this->convertLinks($product);
			$where['classid'] = array('in', $functionCatIDs);
			$where['token'] = $token;
			$industryInfos = array();
			$function = $dbs->where($where)->field('id,title,classid,text,pic,url')->order('usort DESC')->select();
			$function = $this->convertLinks($function);

			if ($function) {
				foreach ($function as $f) {
					if (intval($f['classid']) == intval($industryFunctionID)) {
						array_push($industryInfos, $f);
					}
				}
			}

			$industryInfos = $this->convertLinks($industryInfos);
			$this->assign('industryInfos', $industryInfos);
			$info_id = array($afterSaleID, $caseID, $advantageID, $newsID, $aboutID, $contactID);
			$infoWhere['classid'] = array('in', $info_id);
			$infoWhere['token'] = $token;
			$info = $dbs->where($infoWhere)->field('id,title,classid,text,pic,url')->order('usort DESC')->select();
			$info = $this->convertLinks($info);
			$caseCats = $this->convertLinks($caseCats);
			$case = $caseCats;
			$time = date('Y', time());
			$this->assign('time', $time);
			$this->assign('tpl', $this->tpl);
			$this->assign('id', $id);
			$this->assign('list', $list);
			$this->assign('info_id', $info_id);
			$this->assign('product', $product);
			$this->assign('function', $function);
			$this->assign('case', $case);
			$this->assign('info', $info);
			$this->assign('name', $name);
			$this->assign('currentTab', $this->_get('current'));
			$this->display('099_index');
		}
		else {
			$where['token'] = $this->token;
			$allflash = M('Flash')->where($where)->order('id DESC')->select();
			$allflash = $this->convertLinks($allflash);
			$flash = array();
			$flashbg = array();

			foreach ($allflash as $af) {
				if ($af['url'] == '') {
					$af['url'] = 'javascript:void(0)';
				}

				if ($af['tip'] == 1) {
					$af['img'] = preg_replace('/default\\/\\.\\.\\//i', '', $af['img']);
					array_push($flash, $af);
				}
				else if ($af['tip'] == 2) {
					array_push($flashbg, $af);
				}
			}

			$this->assign('flashbg', $flashbg);
			if (!$flashbg && $this->homeInfo['homeurl']) {
				$flash_db = M('Flash');
				$arr = array();
				$arr['token'] = $this->token;
				$arr['img'] = $this->homeInfo['homeurl'];
				$arr['url'] = '';
				$arr['info'] = '';
				$arr['tip'] = 2;

				if ($arr['img']) {
					$flash_db->add($arr);
				}
			}

			$info = $this->info;
			$tpldata = $this->wxuser;
			$tpldata['color_id'] = intval($tpldata['color_id']);
			include './PigCms/Lib/ORG/index.Tpl.php';

			foreach ($tpl as $k => $v) {
				if ($v['tpltypeid'] == $tpldata['tpltypeid']) {
					$tplinfo = $v;
				}
			}

			$tpldata['tpltypeid'] = $tplinfo['tpltypeid'];
			$tpldata['tpltypename'] = $tplinfo['tpltypename'];

			foreach ($info as $k => $v) {
				if ($info[$k]['url'] == '') {
					$info[$k]['url'] = U('Index/lists', array('classid' => $v['id'], 'token' => $where['token'], 'wecha_id' => $this->wecha_id));
				}

				if ($v['sub'] != NULL) {
					foreach ($v['sub'] as $ke => $va) {
						if ($v['sub'][$ke]['url'] == '') {
							$info[$k]['sub'][$ke]['url'] = U('Index/lists', array('classid' => $v['sub'][$ke]['id'], 'token' => $where['token'], 'wecha_id' => $this->wecha_id));
						}
					}
				}
			}

			if (($tpldata['tpltypename'] == 'ktv_list') || ($tpldata['tpltypename'] == 'yl_list')) {
				foreach ($info as $key => $val) {
					$info[$key]['title'] = $val['name'];
					$info[$key]['pic'] = $val['img'];

					if ($info[$key]['url'] == '') {
						$info[$key]['url'] = U('Index/lists', array('classid' => $val['id'], 'token' => $where['token'], 'wecha_id' => $this->wecha_id));
					}

					$info[$key]['info'] = strip_tags(htmlspecialchars_decode($val['info']));
				}
			}

			$this->assign('home', $this->homeInfo);
			$zd = M('Zhida')->where(array('token' => $this->token))->find();
			$zd['code'] = htmlspecialchars_decode(base64_decode($zd['code']), ENT_QUOTES);
			$this->assign('zd', $zd);
			$count = count($flash);
			$this->assign('tplinfo', $tplinfo);
			$this->assign('flash', $flash);
			$this->assign('homeInfo', $this->homeInfo);
			$this->assign('info', $info);
			$this->assign('num', $count);
			$this->assign('flashbgcount', count($flashbg));
			$this->assign('tpl', $this->tpl);
			$this->assign('copyright', $this->copyright);
			$this->display($this->tpl['tpltypename']);
		}
	}

	public function lists()
	{
		$token = $this->token;
		$classid = $this->_get('classid', 'intval');
		$where['token'] = $this->_get('token', 'trim');
		$classify = M('classify');
		$this->assign('homes', $this->homeInfo['gzhurl']);
		$info = $classify->where('id = ' . $classid . ' AND token = \'' . $token . '\'')->find();
		$sub = $classify->where('fid = ' . $classid . ' AND token = \'' . $token . '\' AND status = 1')->order('sorts desc')->select();
		$sub = $this->convertLinks($sub);
		$tpldata = D('Wxuser')->where($where)->find();
		$tpldata['color_id'] = intval($tpldata['color_id']);
		include './PigCms/Lib/ORG/index.Tpl.php';

		foreach ($tpl as $k => $v) {
			if ($v['tpltypeid'] == $info['tpid']) {
				$tplinfo = $v;
			}
		}

		$tpldata['tpltypeid'] = $tplinfo['tpltypeid'];
		$tpldata['tpltypename'] = $tplinfo['tpltypename'];
		$imgdata = M('Img')->field('id')->where('classid = ' . $classid)->find();
		$allflash = M('Flash')->where($where)->order('id DESC')->select();
		$allflash = $this->convertLinks($allflash);
		$flash = array();
		$flashbg = array();
		$flashs = array();
		$flashsbg = array();
		if (!empty($sub) && empty($imgdata)) {
			foreach ($allflash as $af) {
				if ($af['url'] == '') {
					$af['url'] = 'javascript:void(0)';
				}

				if ($af['tip'] == 1) {
					array_push($flashs, $af);
				}

				if ($af['tip'] == 2) {
					array_push($flashsbg, $af);
				}

				if (($af['tip'] == 3) && ($af['did'] == $classid)) {
					$af['img'] = preg_replace('/default\\/\\.\\.\\//i', '', $af['img']);
					array_push($flash, $af);
				}
				else {
					if (($af['tip'] == 4) && ($af['did'] == $classid)) {
						array_push($flashbg, $af);
					}
				}
			}

			if (empty($flash)) {
				$flash = $flashs;
			}

			if (empty($flashbg)) {
				$flashbg = $flashsbg;
			}

			$this->assign('flashbg', $flashbg);
			if (!$flashbg && $this->homeInfo['homeurl']) {
				$flash_db = M('Flash');
				$arr = array();
				$arr['token'] = $this->token;
				$arr['img'] = $this->homeInfo['homeurl'];
				$arr['url'] = '';
				$arr['info'] = '';
				$arr['tip'] = 2;

				if ($arr['img']) {
					$flash_db->add($arr);
				}
			}

			if (($tpldata['tpltypename'] == 'ktv_list') || ($tpldata['tpltypename'] == 'yl_list')) {
				foreach ($sub as $key => $val) {
					$sub[$key]['title'] = $val['name'];
					$sub[$key]['pic'] = $val['img'];

					if ($sub[$key]['url'] == '') {
						$sub[$key]['url'] = U('Index/lists', array('classid' => $val['id'], 'token' => $where['token'], 'wecha_id' => $this->wecha_id));
					}

					$sub[$key]['info'] = strip_tags(htmlspecialchars_decode($val['info']));
				}
			}

			$j = count($sub);

			foreach ($sub as $ke => $va) {
				$subpid = $va['id'];
				$sub[$ke]['sub'] = M('Classify')->where('fid = ' . $subpid)->select();
				$sub[$ke]['sub'] = $this->convertLinks($sub[$ke]['sub']);

				if ($sub[$ke]['url'] == '') {
					$sub[$ke]['url'] = U('Index/lists', array('classid' => $va['id'], 'token' => $where['token'], 'wecha_id' => $this->wecha_id));
					$sub[$ke]['sub'] = $this->convertLinks($sub[$ke]['sub']);
				}

				$sub[$ke]['key'] = $j--;
			}

			$this->assign('info', $sub);
		}
		else {
			$db = D('Img');
			$where['classid'] = $classid;
			$res = $db->where($where)->order('usort DESC')->select();
			$res = $this->convertLinks($res);

			foreach ($res as $key => $val) {
				$res[$key]['name'] = $val['title'];
				$res[$key]['img'] = $val['pic'];

				if ($res[$key]['url'] == '') {
					$res[$key]['url'] = U('Index/content', array('id' => $val['id'], 'classid' => $val['classid'], 'token' => $where['token'], 'wecha_id' => $this->wecha_id));
				}

				$res[$key]['info'] = strip_tags(htmlspecialchars_decode(mb_substr($val['text'], 0, 10, 'utf-8')));
			}

			$listNum = count($res);

			if ($listNum == 1) {
				$contid = $res[0]['id'];
				$cid = $res[0]['classid'];
				$this->content($contid, $cid);
				exit();
			}

			foreach ($allflash as $af) {
				if ($af['url'] == '') {
					$af['url'] = 'javascript:void(0)';
				}

				if ($af['tip'] == 1) {
					array_push($flashs, $af);
				}

				if ($af['tip'] == 2) {
					array_push($flashsbg, $af);
				}

				if (($af['tip'] == 3) && ($af['did'] == $classid)) {
					array_push($flash, $af);
				}
				else {
					if (($af['tip'] == 4) && ($af['did'] == $classid)) {
						array_push($flashbg, $af);
					}
				}
			}

			if (empty($flash)) {
				$flash = $flashs;
			}

			if (empty($flashbg)) {
				$flashbg = $flashsbg;
			}

			$this->assign('flashbg', $flashbg);
			if (!$flashbg && $this->homeInfo['homeurl']) {
				$flash_db = M('Flash');
				$arr = array();
				$arr['token'] = $this->token;
				$arr['img'] = $this->homeInfo['homeurl'];
				$arr['url'] = '';
				$arr['info'] = '';
				$arr['tip'] = 2;

				if ($arr['img']) {
					$flash_db->add($arr);
				}
			}

			$this->assign('info', $res);
		}

		$count = count($flash);
		$this->assign('flash', $flash);
		$this->assign('num', $count);
		$this->assign('flashbgcount', count($flashbg));
		$this->assign('tpl', $tpldata);
		$this->assign('copyright', $this->copyright);
		$this->assign('thisClassInfo', $info);
		$this->display($tpldata['tpltypename']);
	}

	public function content($contid = '', $cid = '')
	{
		$token = $this->token;
		$class = M('Classify');
		$img = M('Img');
		$wecha_id = $this->wecha_id;
		if (($contid == '') && ($cid == '')) {
			$id = $this->_get('id', 'intval');
			$classid = $this->_get('classid', 'intval');
			$id = intval($id);
			$classid = intval($classid);
		}
		else {
			$id = intval($contid);
			$classid = intval($cid);
		}

		$this->assign('homes', $this->homeInfo['gzhurl']);
		$res = $img->where('id = ' . intval($id) . ' AND token = \'' . $token . '\'')->find();

		if ($classid == '') {
			$classid = $res['classid'];
		}

		$img->where('token = \'' . $token . '\' AND id = ' . intval($id))->setInc('click');
		$classinfo = $class->where('id = ' . intval($classid) . ' AND token = \'' . $token . '\'')->field('conttpid')->find();
		$tplinfo = D('Wxuser')->where('token = \'' . $token . '\'')->find();
		include './PigCms/Lib/ORG/cont.Tpl.php';

		foreach ($contTpl as $k => $v) {
			if ($v['tpltypeid'] == $classinfo['conttpid']) {
				$tpldata = $v;
			}
		}

		$tplinfo['tpltypeid'] = $tpldata['tpltypeid'];
		$tplinfo['tpltypename'] = $tpldata['tpltypename'];
		$lists = $img->where('classid = ' . intval($classid) . ' AND token = \'' . $token . '\' AND id != ' . intval($id))->limit(5)->order('uptatetime')->select();
		$lists = $this->convertLinks($lists);
		$this->assign('info', $this->info);
		$this->assign('copyright', $this->copyright);

		if (!$res['is_focus']) {
			$res['info'] = '<style>.is_hidden{display:none}</style>' . $res['info'];
		}

		$this->assign('res', $res);
		$this->assign('lists', $lists);
		$this->assign('tpl', $tplinfo);
		$this->display($tplinfo['tpltypename']);
	}

	public function flash()
	{
		$where['token'] = $this->_get('token', 'trim');
		$flash = M('Flash')->where($where)->select();
		$count = count($flash);
		$this->assign('flash', $flash);
		$this->assign('info', $this->info);
		$this->assign('num', $count);
		$this->display('ty_index');
	}

	public function getLink($url)
	{
		$url = ($url ? $url : 'javascript:void(0)');
		$urlArr = explode(' ', $url);
		$urlInfoCount = count($urlArr);

		if (1 < $urlInfoCount) {
			$itemid = intval($urlArr[1]);
		}

		if (strexists($url, '刮刮卡')) {
			$link = '/index.php?g=Wap&m=Guajiang&a=index&token=' . $this->token . '&wecha_id=' . $this->wecha_id;

			if ($itemid) {
				$link .= '&id=' . $itemid;
			}
		}
		else if (strexists($url, '大转盘')) {
			$link = '/index.php?g=Wap&m=Lottery&a=index&token=' . $this->token . '&wecha_id=' . $this->wecha_id;

			if ($itemid) {
				$link .= '&id=' . $itemid;
			}
		}
		else if (strexists($url, '优惠券')) {
			$link = '/index.php?g=Wap&m=Coupon&a=index&token=' . $this->token . '&wecha_id=' . $this->wecha_id;

			if ($itemid) {
				$link .= '&id=' . $itemid;
			}
		}
		else if (strexists($url, '刮刮卡')) {
			$link = '/index.php?g=Wap&m=Guajiang&a=index&token=' . $this->token . '&wecha_id=' . $this->wecha_id;

			if ($itemid) {
				$link .= '&id=' . $itemid;
			}
		}
		else if (strexists($url, '商家订单')) {
			if ($itemid) {
				$link = $link = '/index.php?g=Wap&m=Host&a=index&token=' . $this->token . '&wecha_id=' . $this->wecha_id . '&hid=' . $itemid;
			}
			else {
				$link = '/index.php?g=Wap&m=Host&a=Detail&token=' . $this->token . '&wecha_id=' . $this->wecha_id;
			}
		}
		else if (strexists($url, '万能表单')) {
			if ($itemid) {
				$link = $link = '/index.php?g=Wap&m=Selfform&a=index&token=' . $this->token . '&wecha_id=' . $this->wecha_id . '&id=' . $itemid;
			}
		}
		else if (strexists($url, '相册')) {
			$link = '/index.php?g=Wap&m=Photo&a=index&token=' . $this->token . '&wecha_id=' . $this->wecha_id;

			if ($itemid) {
				$link = '/index.php?g=Wap&m=Photo&a=plist&token=' . $this->token . '&wecha_id=' . $this->wecha_id . '&id=' . $itemid;
			}
		}
		else if (strexists($url, '全景')) {
			$link = '/index.php?g=Wap&m=Panorama&a=index&token=' . $this->token . '&wecha_id=' . $this->wecha_id;

			if ($itemid) {
				$link = '/index.php?g=Wap&m=Panorama&a=item&token=' . $this->token . '&wecha_id=' . $this->wecha_id . '&id=' . $itemid;
			}
		}
		else if (strexists($url, '会员卡')) {
			$link = '/index.php?g=Wap&m=Card&a=index&token=' . $this->token . '&wecha_id=' . $this->wecha_id;
		}
		else if (strexists($url, '商城')) {
			$link = '/index.php?g=Wap&m=Product&a=index&token=' . $this->token . '&wecha_id=' . $this->wecha_id;
		}
		else if (strexists($url, '订餐')) {
			$link = '/index.php?g=Wap&m=Product&a=dining&dining=1&token=' . $this->token . '&wecha_id=' . $this->wecha_id;
		}
		else if (strexists($url, '团购')) {
			$link = '/index.php?g=Wap&m=Groupon&a=grouponIndex&token=' . $this->token . '&wecha_id=' . $this->wecha_id;
		}
		else if (strexists($url, '首页')) {
			$link = '/index.php?g=Wap&m=Index&a=index&token=' . $this->token . '&wecha_id=' . $this->wecha_id;
		}
		else if (strexists($url, '网站分类')) {
			$link = '/index.php?g=Wap&m=Index&a=lists&token=' . $this->token . '&wecha_id=' . $this->wecha_id;

			if ($itemid) {
				$link = '/index.php?g=Wap&m=Index&a=lists&token=' . $this->token . '&wecha_id=' . $this->wecha_id . '&classid=' . $itemid;
			}
		}
		else if (strexists($url, '图文回复')) {
			if ($itemid) {
				$link = '/index.php?g=Wap&m=Index&a=index&token=' . $this->token . '&wecha_id=' . $this->wecha_id . '&id=' . $itemid;
			}
		}
		else if (strexists($url, 'LBS信息')) {
			$link = '/index.php?g=Wap&m=Company&a=map&token=' . $this->token . '&wecha_id=' . $this->wecha_id;

			if ($itemid) {
				$link = '/index.php?g=Wap&m=Company&a=map&token=' . $this->token . '&wecha_id=' . $this->wecha_id . '&companyid=' . $itemid;
			}
		}
		else if (strexists($url, 'DIY宣传页')) {
			$link = '/index.php/show/' . $this->token;
		}
		else if (strexists($url, '婚庆喜帖')) {
			if ($itemid) {
				$link = '/index.php?g=Wap&m=Wedding&a=index&token=' . $this->token . '&wecha_id=' . $this->wecha_id . '&id=' . $itemid;
			}
		}
		else if (strexists($url, '投票')) {
			if ($itemid) {
				$link = '/index.php?g=Wap&m=Vote&a=index&token=' . $this->token . '&wecha_id=' . $this->wecha_id . '&id=' . $itemid;
			}
		}
		else {
			$link = str_replace(array('{wechat_id}', '{siteUrl}', '&amp;', '{changjingUrl}'), array($this->wecha_id, $this->siteUrl, '&', 'http://www.weihubao.com'), $url);
			if (!!(strpos($url, 'tel') === false) && ($url != 'javascript:void(0)') && !strpos($url, 'wecha_id=')) {
				if (strpos($url, '?')) {
					$link = $link . '&wecha_id=' . $this->wecha_id;
				}
				else {
					$link = $link . '?wecha_id=' . $this->wecha_id;
				}
			}
		}

		return $link;
	}

	public function convertLinks($arr)
	{
		$i = 0;

		foreach ($arr as $a) {
			if ($a['url']) {
				$arr[$i]['url'] = $this->getLink($a['url']);
			}

			$i++;
		}

		return $arr;
	}

	public function _getPlugMenu()
	{
		$company_db = M('company');
		$this->company = $company_db->where(array('token' => $this->token, 'isbranch' => 0))->find();
		$plugmenu_db = M('site_plugmenu');
		$plugmenus = $plugmenu_db->where(array('token' => $this->token, 'display' => 1))->order('taxis ASC')->limit('0,4')->select();

		if ($plugmenus) {
			$i = 0;

			foreach ($plugmenus as $pm) {
				switch ($pm['name']) {
				case 'tel':
					if (!$pm['url']) {
						$pm['url'] = 'tel:/' . $this->company['tel'];
					}
					else {
						$pm['url'] = 'tel:/' . $pm['url'];
					}

					break;

				case 'memberinfo':
					if (!$pm['url']) {
						$pm['url'] = '/index.php?g=Wap&m=Userinfo&a=index&token=' . $this->token . '&wecha_id=' . $this->wecha_id;
					}

					break;

				case 'nav':
					if (!$pm['url']) {
						$pm['url'] = '/index.php?g=Wap&m=Company&a=map&token=' . $this->token . '&wecha_id=' . $this->wecha_id;
					}

					break;

				case 'message':
					break;

				case 'share':
					break;

				case 'home':
					if (!$pm['url']) {
						$pm['url'] = '/index.php?g=Wap&m=Index&a=index&token=' . $this->token . '&wecha_id=' . $this->wecha_id;
					}

					break;

				case 'album':
					if (!$pm['url']) {
						$pm['url'] = '/index.php?g=Wap&m=Photo&a=index&token=' . $this->token . '&wecha_id=' . $this->wecha_id;
					}

					break;

				case 'email':
					$pm['url'] = 'mailto:' . $pm['url'];
					break;

				case 'shopping':
					if (!$pm['url']) {
						$pm['url'] = '/index.php?g=Wap&m=Product&a=index&token=' . $this->token . '&wecha_id=' . $this->wecha_id;
					}

					break;

				case 'membercard':
					$card = M('member_card_create')->where(array('token' => $this->token, 'wecha_id' => $this->wecha_id))->find();

					if (!$pm['url']) {
						if ($card == false) {
							$pm['url'] = rtrim($this->siteUrl, '/') . U('Wap/Card/index', array('token' => $this->token, 'wecha_id' => $this->wecha_id));
						}
						else {
							$pm['url'] = rtrim($this->siteUrl, '/') . U('Wap/Card/index', array('token' => $this->token, 'wecha_id' => $this->wecha_id));
						}
					}

					break;

				case 'activity':
					$pm['url'] = $this->getLink($pm['url']);
					break;

				case 'weibo':
					break;

				case 'tencentweibo':
					break;

				case 'qqzone':
					break;

				case 'wechat':
					$pm['url'] = 'weixin://addfriend/' . $this->weixinUser['wxid'];
					break;

				case 'music':
					break;

				case 'video':
					break;

				case 'recommend':
					$pm['url'] = $this->getLink($pm['url']);
					break;

				case 'other':
					$pm['url'] = $this->getLink($pm['url']);
					break;
				}

				$plugmenus[$i] = $pm;
				$i++;
			}
		}
		else {
			$plugmenus = array();
		}

		return $plugmenus;
	}

	public function tel($tel = '')
	{
		$this->assign('tel', $tel);
		$this->display();
	}

	public function map()
	{
		$url = 'http://mo.amap.com/share/index/lnglat=' . $_GET['nav'] . '&name=' . $_GET['name'];
		redirect($url);
	}
}

?>
