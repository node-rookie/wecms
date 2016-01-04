<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
		<title>收货信息</title>
		<meta content="app-id=518966501" name="apple-itunes-app" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=no, maximum-scale=1.0"/>
		<meta content="yes" name="apple-mobile-web-app-capable" />
		<meta content="black" name="apple-mobile-web-app-status-bar-style" />
		<meta content="telephone=no" name="format-detection" />
		<link href="<?php echo ($staticPath); ?>/tpl/static/unitary/css/comm.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo ($staticPath); ?>/tpl/static/unitary/css/login.css" rel="stylesheet" type="text/css" />
		<style>
		.registerCon li textarea {
			padding: 15px;
			width: 100%;
			height: 90px;
			color: #333;
			border: 1px solid #dedede;
			border-radius: 5px;
			margin-top: -1px;
			font-size: 16px;
			-webkit-box-sizing: border-box;
		}
		.registerCon li input {
			padding: 15px;
			width: 100%;
			height: 45px;
			color: #333;
			border: 1px solid #dedede;
			border-radius: 5px;
			margin-top: -1px;
			font-size: 16px;
			-webkit-box-sizing: border-box;
		}
		</style>
	</head>
	<body>
		<script src="<?php echo ($staticPath); ?>/tpl/static/unitary/js/jquery-2.1.3.min.js" language="javascript" type="text/javascript"></script>
		<div class="wrapper">
			<div class="registerCon">
				<ul>
					<li class="accAndPwd">
						<dl>
							名称：
							<input id="name" maxlength="11" type="text" placeholder="请输入您的名称" value="<?php echo ($userinfo["wechaname"]); ?>"/>
						</dl>
					</li>
					<li class="accAndPwd">
						<dl>
							手机号码：
							<input id="phone" maxlength="11" type="tel" placeholder="请输入您的手机号码" value="<?php echo ($userinfo["tel"]); ?>"/>
						</dl>
					</li>
					<li class="accAndPwd">
						<dl>
							确认收货地址：
							<textarea id="address" placeholder="请填写您的收货地址"><?php echo ($userinfo["address"]); ?></textarea>
						</dl>
					</li>
					<li><a id="btnNext" class="orangeBtn loginBtn" style="background:#ff7900">下一步</a></li>
				</ul>
			</div>
		</div>
		<script type="text/javascript">
			$(function(){
				$("#btnNext").click(function(){
					var address = $("#address").val();
					var phone = $("#phone").val();
					var phone_length = phone.length;
					var phone_str = phone.substr(0,1);
					var name = $("#name").val();
					if(address == ""){
						alert("请填写您的收货地址");
					}else if(phone == ""){
						alert("请填写您的手机号码");
					}else if(name == ""){
						alert("请填写您的名称");
					}else if(phone_length != 11 || phone_str != '1'){
						alert("请填写正确的手机号码");
					}else{
						window.location.href="<?php echo U('Bargain/dobuy',array('token'=>$token,'orderid'=>$order['orderid']));?>&address="+address+"&phone="+phone+"&name="+name;
					}
				})
			})
			
		</script>
		
		
<script type="text/javascript">
window.shareData = {  
            "moduleName":"Bargain",
            "moduleID":"<?php echo $bargain['pigcms_id']?>",
            "imgUrl": "<?php echo $bargain['logoimg1']?>", 
            "sendFriendLink": "<?php echo ($f_siteUrl); echo U('Bargain/index',array('token'=>$token,'id'=>$_GET['id']));?>",
            "tTitle": "<?php echo $bargain['wxtitle']?>",
            "tContent": "<?php echo $bargain['wxinfo']?>"
        };
</script>
<?php echo ($shareScript); ?>
	</body>
</html>