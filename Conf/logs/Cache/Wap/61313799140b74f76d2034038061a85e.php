<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
		<meta content="telephone=no" name="format-detection">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<title>微砍价</title>
		<link href="<?php echo ($staticPath); ?>/tpl/static/bargain/css/global.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo ($staticPath); ?>/tpl/static/bargain/css/global2.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript" src="<?php echo ($staticPath); ?>/tpl/static/bargain/js/jquery-1.7.2.min.js"></script>
		<script type="text/javascript" src="<?php echo ($staticPath); ?>/tpl/static/bargain/js/global.js"></script>
		<link href="<?php echo ($staticPath); ?>/tpl/static/bargain/css/bargain.css" rel="stylesheet" type="text/css">
		<script type="text/javascript" src="<?php echo ($staticPath); ?>/tpl/static/bargain/js/bargain.js"></script>
		<link href="<?php echo ($staticPath); ?>/tpl/static/bargain/css/idangerous.swiper.css" rel="stylesheet" type="text/css">
		<script type="text/javascript" src="<?php echo ($staticPath); ?>/tpl/static/bargain/js/idangerous.swiper-1.9.1.min.js"></script>
		<style>
		.myhide{
			display:none;
		}
		.cover{
			position: absolute;
			position: fixed;
			width: 100%;
			height: 100%;
			background-color:rgba(55,55,55,0.7);
			overflow: hidden;
			opacity: 0.9;
			z-index: 99;
			top:0;
			left:0;
		}

		.cover_string{
			position: absolute;
			position: fixed;
			top: 10px;
			right: 10px;
			font-size: 20px;
			color: #ffffff;
			z-index: 100;
			text-align: center;
		}
		</style>
	</head>
	<?php if($type == 'my'){?>
		<?php if($type2 == 'noorder'){?>
		<body style="background: rgb(255, 255, 255);">
			<script language="javascript">$(function(){bargain_obj.detail_init()});</script>
			<script language="javascript">$(function(){bargain_obj.activity_init()});</script>
			<script language="javascript">
				$(function(){
					$("input[name=start]").click(function(){
						window.location.href="<?php echo U('Bargain/operate',array('token'=>$token,'type'=>'firstdao','id'=>$_GET['id']));?>";
					});
				});
			</script>
			<div class="product_banner">
				<div class="swiper-container">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<a href="<?php echo ($bargain["logourl1"]); ?>"><img src="<?php echo ($bargain["logoimg1"]); ?>" alt=""></a>
						</div>
						<?php if($bargain['logoimg2'] != ''){?>
						<div class="swiper-slide">
							<a href="<?php echo ($bargain["logourl2"]); ?>"><img src="<?php echo ($bargain["logoimg2"]); ?>" alt=""></a>
						</div>
						<?php }?>
						<?php if($bargain['logoimg3'] != ''){?>
						<div class="swiper-slide">
							<a href="<?php echo ($bargain["logourl3"]); ?>"><img src="<?php echo ($bargain["logoimg3"]); ?>" alt=""></a>
						</div>
						<?php }?>
					</div>
				</div>
			</div>
			<div id="countdown">我的活动倒计时：<span class="hour">00</span>时<span class="minute">00</span>分<span class="second">00</span>秒</div>
			<div class="activity">
				<div class="dear">亲爱的<span><?php echo $userinfo['wechaname']?></span>：</div>
				<div class="txt">快砍第一刀，让砍价活动走起，发动你的亲友团帮你砍价助威,越多人砍价，价格越优惠!</div>
				<div class="btn_bar">
					<ul>
						<li ret="start" class="" style="width: 100%;"><input type="button" name="start" value="第一刀" class="btn_orage"></li>
					</ul>
				</div>
			</div>
			<div class="join_bar_blank"></div>
			<div id="join_bar">
				<div class="price"><span>底价:￥<font><?php echo $bargain['minimum']?></font></span><span>现价:￥<font><?php echo $bargain['original'];?></font></span></div>
				<div class="btn"><a href="<?php echo U('Bargain/payuserinfo',array('token'=>$token,'id'=>$_GET['id']));?>">立即购买</a></div>
				<div class="clear"></div>
				
			</div>
			<script type="text/javascript">
			window.shareData = {  
				"moduleName":"Bargain",
				"moduleID":"<?php echo $bargain['pigcms_id'];?>",
				"imgUrl": "<?php echo $bargain['logoimg1'];?>",
				"sendFriendLink": "<?php echo ($f_siteUrl); echo U('Bargain/index',array('token'=>$token,'id'=>$bargain['pigcms_id']));?>",
				"tTitle": "<?php echo $bargain['wxtitle'];?>",
				"tContent": "<?php echo $bargain['wxinfo'];?>"
			};
			</script>
			<?php echo ($shareScript); ?>
		</body>
		<?php }else{?>
		<body style="background: rgb(255, 255, 255);">
			<script language="javascript">$(function(){bargain_obj.detail_init()});</script>
			<script language="javascript">$(function(){bargain_obj.activity_init()});</script>
			<script language="javascript">
				$(function(){
					$("input[name=start]").click(function(){
						$('.cover').show();
						$('.cover_string').show();
						$('.cover').click(function(){
							$('.cover').hide("slow");
							$('.cover_string').hide();
						})
					});
					<?php if($_GET['kanzhi'] != ''){?>
						$("#activity_show").show();
						setTimeout(function(){
							$("#activity_show").hide();
						},10000);
					<?php }?>
					<?php if($order['endtime'] > time()){?>
						daoshi();
					<?php }?>
				});
				<?php if($order['endtime'] > time()){?>
				<?php if($isday == 'yes'){?>
				var day = <?php echo $day;?>;
				var hour = <?php echo $hour;?>;
				var minute = <?php echo $minute;?>;
				var second = <?php echo $second;?>;
				function daoshi(){
					if(second < 0){
						second = 59;
						minute--;
					}
					if(minute < 0){
						minute = 59;
						hour--;
					}
					if(hour < 0){
						hour = 23;
						day--;
					}
					if(second < 10){
						$('.second').html('0'+second);
					}else{
						$('.second').html(second);
					}
					if(minute < 10){
						$('.minute').html('0'+minute);
					}else{
						$('.minute').html(minute);
					}
					if(hour < 10){
						$('.hour').html('0'+hour);
					}else{
						$('.hour').html(hour);
					}
					if(day < 10){
						$('.day').html('0'+day);
					}else{
						$('.day').html(day);
					}
					if(day < 2){
						location.reload();
					}else{
						second--;
						setTimeout("daoshi()",1000);
					}
				}
				<?php }else{?>
				var hour = <?php echo $hour;?>;
				var minute = <?php echo $minute;?>;
				var second = <?php echo $second;?>;
				function daoshi(){
					if(second < 0){
						second = 59;
						minute--;
					}
					if(minute < 0){
						minute = 59;
						hour--;
					}
					if(second < 10){
						$('.second').html('0'+second);
					}else{
						$('.second').html(second);
					}
					if(minute < 10){
						$('.minute').html('0'+minute);
					}else{
						$('.minute').html(minute);
					}
					if(hour < 10){
						$('.hour').html('0'+hour);
					}else{
						$('.hour').html(hour);
					}
					if(hour < 0){
						$('.second').html('00');
						$('.minute').html('00');
						$('.hour').html('00');
						location.reload();
					}else{
						second--;
						setTimeout("daoshi()",1000);
					}
				}
				<?php }?>
				<?php }?>
			</script>
			<div class="product_banner">
				<div class="swiper-container">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<a href="<?php echo ($bargain["logourl1"]); ?>"><img src="<?php echo ($bargain["logoimg1"]); ?>" alt=""></a>
						</div>
						<?php if($bargain['logoimg2'] != ''){?>
						<div class="swiper-slide">
							<a href="<?php echo ($bargain["logourl2"]); ?>"><img src="<?php echo ($bargain["logoimg2"]); ?>" alt=""></a>
						</div>
						<?php }?>
						<?php if($bargain['logoimg3'] != ''){?>
						<div class="swiper-slide">
							<a href="<?php echo ($bargain["logourl3"]); ?>"><img src="<?php echo ($bargain["logoimg3"]); ?>" alt=""></a>
						</div>
						<?php }?>
					</div>
				</div>
			</div>
			<?php if($order['endtime'] > time()){?>
				<?php if($isday == 'yes'){?>
				<div id="countdown">我的活动倒计时：<span class="day"><?php echo $day;?></span>天<span class="hour"><?php echo $hour;?></span>时<span class="minute"><?php echo $minute;?></span>分<span class="second" style="display:none"><?php echo $second;?></span></div>
				<?php }else{?>
				<div id="countdown">我的活动倒计时：<span class="hour"><?php echo $hour;?></span>时<span class="minute"><?php echo $minute;?></span>分<span class="second"><?php echo $second;?></span>秒</div>
				<?php }?>
			<?php }else{?>
			<div id="countdown">我的活动倒计时：<span class="hour">00</span>时<span class="minute">00</span>分<span class="second">00</span>秒</div>
			<?php }?>
			<div class="activity">
				<div class="dear">亲爱的<span><?php echo $userinfo['wechaname']?></span>：</div>
				<?php if($bargain['minimum'] == $order['bargain_nowprice']){?>
				<div class="txt">恭喜已成功砍至底价！</div>
				<?php }else{?>
				<?php if($order['endtime'] > time()){?>
					<?php if($order['paid'] == 0){?>
					<div class="txt">已有<span><?php echo $count;?></span>个好友帮你砍价了,共砍掉金额<span><?php echo $dao?>.00</span>元,让更多的亲友为您助力吧!</div>
					<div class="btn_bar">
						<ul>
							<li ret="start" class="" style="width: 100%;"><input type="button" name="start" value="找朋友帮砍" class="btn_orage"></li>
						</ul>
					</div>
					<?php }else{?>
					<div class="txt">已有<span><?php echo $count;?></span>个好友帮你砍价了,共砍掉金额<span><?php echo $dao?>.00</span>元,并已购买~</div>
					<?php }?>
				<?php }else{?>
				<div class="txt">您的砍价时间已结束。</div>
				<?php }?>
				<?php }?>
			</div>
			<div class="join_bar_blank"></div>
			<div id="rankings" class="">
				<h3>
					<span class="col_1">亲友团</span>
					<span class="col_3">砍掉金额</span>
				</h3>
				<?php foreach($kanuser_list as $vo){?>
				<div class="items">
					<ul>
						<li class="col_1">
							<span class="face"><img src="<?php echo $vo['portrait'];?>"></span>
							<span class="name"><?php echo $vo['wechaname'];?></span>
							<div class="clear"></div>
						</li>
						<li class="col_3">￥<?php echo $vo['dao'];?></li>
					</ul>
					<div class="clear"></div>
				</div>
				<?php }?>
			</div>
			<div class="join_bar_blank"></div>
			<div class="join_bar_blank"></div>
			<div id="join_bar">
				<div class="price"><span>底价:￥<font><?php echo $bargain['minimum']?></font></span><span>现价:￥<font><?php echo $order['bargain_nowprice'];?></font></span></div>
				<?php if($order['paid'] == 1){?>
				<div class="btn"><a href="<?php echo U('Bargain/myorder',array('token'=>$token));?>">已购买</a></div>
				<?php }else{?>
				<div class="btn"><a href="<?php echo U('Bargain/payuserinfo',array('token'=>$token,'id'=>$_GET['id'],'orderid'=>$order['pigcms_id']));?>">立即购买</a></div>
				<?php }?>
				<div class="clear"></div>
				
			</div>
			
			<div id="activity_show">
				<div class="img"><span <?php if($_GET['kanzhi'] > 999 && $_GET['kanzhi'] < 10000){?>style="font-size:52px"<?php }elseif($_GET['kanzhi'] > 9999 && $_GET['kanzhi'] < 100000){?>style="font-size:42px"<?php }elseif($_GET['kanzhi'] > 99999){?>style="font-size:32px"<?php }?>><i>￥</i><font id="price"><?php echo $_GET['kanzhi'];?></font></span></div>
				<div class="txt"></div>
				<div class="btn"><img src="<?php echo ($staticPath); ?>/tpl/static/bargain/images/bargain/close_btn.png"></div>
			</div>
			
			<div class="cover" hidden="hidden"></div>
			<div class="cover_string" hidden="hidden">点击右上角【发送给朋友】<br/>或者【分享到朋友圈】</div>
			
			<script type="text/javascript">
			window.shareData = {  
				"moduleName":"Bargain",
				"moduleID":"<?php echo $bargain['pigcms_id'];?>",
				"imgUrl": "<?php echo $bargain['logoimg1'];?>",
				"sendFriendLink": "<?php echo ($f_siteUrl); echo U('Bargain/dao',array('token'=>$token,'id'=>$bargain['pigcms_id'],'orderid'=>$order['pigcms_id']));?>",
				"tTitle": "<?php echo $bargain['wxtitle'];?>",
				"tContent": "<?php echo $bargain['wxinfo'];?>"
			};
			</script>
			<?php echo ($shareScript); ?>
		</body>
		<?php }?>
	<?php }else{?>
		<?php if($type2 == "nokan"){?>
		<body style="background: rgb(255, 255, 255);">
			<script language="javascript">$(function(){bargain_obj.detail_init()});</script>
			<script language="javascript">$(function(){bargain_obj.activity_init()});</script>
			<script language="javascript">
				$(function(){
					$("input[name=start]").click(function(){
						window.location.href="<?php echo U('Bargain/operate',array('token'=>$token,'type'=>'friendkan','id'=>$_GET['id'],'orderid'=>$_GET['orderid']));?>";
					});
					<?php if($order['endtime'] > time()){?>
						daoshi();
					<?php }?>
				});
				<?php if($order['endtime'] > time()){?>
				<?php if($isday == 'yes'){?>
				var day = <?php echo $day;?>;
				var hour = <?php echo $hour;?>;
				var minute = <?php echo $minute;?>;
				var second = <?php echo $second;?>;
				function daoshi(){
					if(second < 0){
						second = 59;
						minute--;
					}
					if(minute < 0){
						minute = 59;
						hour--;
					}
					if(hour < 0){
						hour = 23;
						day--;
					}
					if(second < 10){
						$('.second').html('0'+second);
					}else{
						$('.second').html(second);
					}
					if(minute < 10){
						$('.minute').html('0'+minute);
					}else{
						$('.minute').html(minute);
					}
					if(hour < 10){
						$('.hour').html('0'+hour);
					}else{
						$('.hour').html(hour);
					}
					if(day < 10){
						$('.day').html('0'+day);
					}else{
						$('.day').html(day);
					}
					if(day < 2){
						location.reload();
					}else{
						second--;
						setTimeout("daoshi()",1000);
					}
				}
				<?php }else{?>
				var hour = <?php echo $hour;?>;
				var minute = <?php echo $minute;?>;
				var second = <?php echo $second;?>;
				function daoshi(){
					if(second < 0){
						second = 59;
						minute--;
					}
					if(minute < 0){
						minute = 59;
						hour--;
					}
					if(second < 10){
						$('.second').html('0'+second);
					}else{
						$('.second').html(second);
					}
					if(minute < 10){
						$('.minute').html('0'+minute);
					}else{
						$('.minute').html(minute);
					}
					if(hour < 10){
						$('.hour').html('0'+hour);
					}else{
						$('.hour').html(hour);
					}
					if(hour < 0){
						$('.second').html('00');
						$('.minute').html('00');
						$('.hour').html('00');
						location.reload();
					}else{
						second--;
						setTimeout("daoshi()",1000);
					}
				}
				<?php }?>
				<?php }?>
			</script>
			<div class="product_banner">
				<div class="swiper-container">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<a href="<?php echo ($bargain["logourl1"]); ?>"><img src="<?php echo ($bargain["logoimg1"]); ?>" alt=""></a>
						</div>
						<?php if($bargain['logoimg2'] != ''){?>
						<div class="swiper-slide">
							<a href="<?php echo ($bargain["logourl2"]); ?>"><img src="<?php echo ($bargain["logoimg2"]); ?>" alt=""></a>
						</div>
						<?php }?>
						<?php if($bargain['logoimg3'] != ''){?>
						<div class="swiper-slide">
							<a href="<?php echo ($bargain["logourl3"]); ?>"><img src="<?php echo ($bargain["logoimg3"]); ?>" alt=""></a>
						</div>
						<?php }?>
					</div>
				</div>
			</div>
			<?php if($order['endtime'] > time()){?>
				<?php if($isday == 'yes'){?>
				<div id="countdown">我的活动倒计时：<span class="day"><?php echo $day;?></span>天<span class="hour"><?php echo $hour;?></span>时<span class="minute"><?php echo $minute;?></span>分<span class="second" style="display:none"><?php echo $second;?></span></div>
				<?php }else{?>
				<div id="countdown">我的活动倒计时：<span class="hour"><?php echo $hour;?></span>时<span class="minute"><?php echo $minute;?></span>分<span class="second"><?php echo $second;?></span>秒</div>
				<?php }?>
			<?php }else{?>
			<div id="countdown">TA的活动倒计时：<span class="hour">00</span>时<span class="minute">00</span>分<span class="second">00</span>秒</div>
			<?php }?>
			<div class="activity">
				<div class="dear">亲爱的<span><?php echo $userinfo['wechaname']?></span>：</div>
				<?php if($bargain['minimum'] == $order['bargain_nowprice']){?>
				<div class="txt"><span><?php echo $userinfo2['wechaname'];?></span>的【<?php echo $bargain['name'];?>】已成功砍至底价！谢谢您的参与。</div>
				<?php }else{?>
				<?php if($order['endtime'] > time()){?>
					<?php if($order['paid'] == 0){?>
					<div class="txt">已有<span><?php echo $count;?></span>个好友帮<span><?php echo $userinfo2['wechaname']?></span>砍价了,共砍掉金额<span><?php echo $dao?>.00</span>元,你也来帮<span><?php echo $userinfo2['wechaname']?></span>砍价吧！</div>
					<div class="btn_bar">
						<ul>
							<li ret="start" class="" style="width: 100%;"><input type="button" name="start" value="砍价" class="btn_orage"></li>
						</ul>
					</div>
					<?php }else{?>
					<div class="txt"><span><?php echo $userinfo2['wechaname']?></span>的砍价已购买。</div>
					<?php }?>
				<?php }else{?>
				<div class="txt"><span><?php echo $userinfo2['wechaname']?></span>的砍价时间已结束。</div>
				<?php }?>
				<?php }?>
			</div>
			<div class="join_bar_blank"></div>
			<div id="rankings" class="">
				<h3>
					<span class="col_1">亲友团</span>
					<span class="col_3">砍掉金额</span>
				</h3>
				<?php foreach($kanuser_list as $vo){?>
				<div class="items">
					<ul>
						<li class="col_1">
							<span class="face"><img src="<?php echo $vo['portrait'];?>"></span>
							<span class="name"><?php echo $vo['wechaname'];?></span>
							<div class="clear"></div>
						</li>
						<li class="col_3">￥<?php echo $vo['dao'];?></li>
					</ul>
					<div class="clear"></div>
				</div>
				<?php }?>
			</div>
			<div class="join_bar_blank"></div>
			<div class="join_bar_blank"></div>
			<div id="join_bar">
				<div class="price"><span>底价:￥<font><?php echo $bargain['minimum']?></font></span><span>现价:￥<font><?php echo $order['bargain_nowprice'];?></font></span></div>
				<div class="btn"><a href="<?php echo U('Bargain/index',array('token'=>$token,'id'=>$_GET['id']));?>">我也来玩</a></div>
				<div class="clear"></div>
				
			</div>
			<script type="text/javascript">
			window.shareData = {  
				"moduleName":"Bargain",
				"moduleID":"<?php echo $bargain['pigcms_id'];?>",
				"imgUrl": "<?php echo $bargain['logoimg1'];?>",
				"sendFriendLink": "<?php echo ($f_siteUrl); echo U('Bargain/index',array('token'=>$token,'id'=>$bargain['pigcms_id']));?>",
				"tTitle": "<?php echo $bargain['wxtitle'];?>",
				"tContent": "<?php echo $bargain['wxinfo'];?>"
			};
			</script>
			<?php echo ($shareScript); ?>
		</body>
		<?php }else{?>
		<body style="background: rgb(255, 255, 255);">
			<script language="javascript">$(function(){bargain_obj.detail_init()});</script>
			<script language="javascript">$(function(){bargain_obj.activity_init()});</script>
			<script language="javascript">
				$(function(){
					$("input[name=start]").click(function(){
						window.location.href="<?php echo U('Bargain/operate',array('token'=>$token,'type'=>'friendkan','id'=>$_GET['id'],'orderid'=>$_GET['orderid']));?>";
					});
					<?php if($_GET['kanzhi'] != ''){?>
						$("#activity_show").show();
						setTimeout(function(){
							$("#activity_show").hide();
						},10000);
					<?php }?>
					<?php if($order['endtime'] > time()){?>
						daoshi();
					<?php }?>
				});
				<?php if($order['endtime'] > time()){?>
				<?php if($isday == 'yes'){?>
				var day = <?php echo $day;?>;
				var hour = <?php echo $hour;?>;
				var minute = <?php echo $minute;?>;
				var second = <?php echo $second;?>;
				function daoshi(){
					if(second < 0){
						second = 59;
						minute--;
					}
					if(minute < 0){
						minute = 59;
						hour--;
					}
					if(hour < 0){
						hour = 23;
						day--;
					}
					if(second < 10){
						$('.second').html('0'+second);
					}else{
						$('.second').html(second);
					}
					if(minute < 10){
						$('.minute').html('0'+minute);
					}else{
						$('.minute').html(minute);
					}
					if(hour < 10){
						$('.hour').html('0'+hour);
					}else{
						$('.hour').html(hour);
					}
					if(day < 10){
						$('.day').html('0'+day);
					}else{
						$('.day').html(day);
					}
					if(day < 2){
						location.reload();
					}else{
						second--;
						setTimeout("daoshi()",1000);
					}
				}
				<?php }else{?>
				var hour = <?php echo $hour;?>;
				var minute = <?php echo $minute;?>;
				var second = <?php echo $second;?>;
				function daoshi(){
					if(second < 0){
						second = 59;
						minute--;
					}
					if(minute < 0){
						minute = 59;
						hour--;
					}
					if(second < 10){
						$('.second').html('0'+second);
					}else{
						$('.second').html(second);
					}
					if(minute < 10){
						$('.minute').html('0'+minute);
					}else{
						$('.minute').html(minute);
					}
					if(hour < 10){
						$('.hour').html('0'+hour);
					}else{
						$('.hour').html(hour);
					}
					if(hour < 0){
						$('.second').html('00');
						$('.minute').html('00');
						$('.hour').html('00');
						location.reload();
					}else{
						second--;
						setTimeout("daoshi()",1000);
					}
				}
				<?php }?>
				<?php }?>
			</script>
			<div class="product_banner">
				<div class="swiper-container">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<a href="<?php echo ($bargain["logourl1"]); ?>"><img src="<?php echo ($bargain["logoimg1"]); ?>" alt=""></a>
						</div>
						<?php if($bargain['logoimg2'] != ''){?>
						<div class="swiper-slide">
							<a href="<?php echo ($bargain["logourl2"]); ?>"><img src="<?php echo ($bargain["logoimg2"]); ?>" alt=""></a>
						</div>
						<?php }?>
						<?php if($bargain['logoimg3'] != ''){?>
						<div class="swiper-slide">
							<a href="<?php echo ($bargain["logourl3"]); ?>"><img src="<?php echo ($bargain["logoimg3"]); ?>" alt=""></a>
						</div>
						<?php }?>
					</div>
				</div>
			</div>
			<?php if($order['endtime'] > time()){?>
				<?php if($isday == 'yes'){?>
				<div id="countdown">我的活动倒计时：<span class="day"><?php echo $day;?></span>天<span class="hour"><?php echo $hour;?></span>时<span class="minute"><?php echo $minute;?></span>分<span class="second" style="display:none"><?php echo $second;?></span></div>
				<?php }else{?>
				<div id="countdown">我的活动倒计时：<span class="hour"><?php echo $hour;?></span>时<span class="minute"><?php echo $minute;?></span>分<span class="second"><?php echo $second;?></span>秒</div>
				<?php }?>
			<?php }else{?>
			<div id="countdown">TA的活动倒计时：<span class="hour">00</span>时<span class="minute">00</span>分<span class="second">00</span>秒</div>
			<?php }?>
			<div class="activity">
				<div class="dear">亲爱的<span><?php echo $userinfo['wechaname']?></span>：</div>
				<?php if($bargain['minimum'] == $order['bargain_nowprice']){?>
				<div class="txt"><span><?php echo $userinfo2['wechaname'];?></span>的【<?php echo $bargain['name'];?>】已成功砍至底价！感谢你帮忙砍下了<span><?php echo $kanuser['dao']?></span>元！</div>
				<?php }else{?>
				<?php if($order['endtime'] > time()){?>
				<div class="txt">已有<span><?php echo $count;?></span>个好友帮<span><?php echo $userinfo2['wechaname']?></span>砍价了,共砍掉金额<span><?php echo $dao?>.00</span>元,感谢你帮忙砍下了<span><?php echo $kanuser['dao']?></span>元！</div>
				
				<?php }else{?>
				<div class="txt"><span><?php echo $userinfo2['wechaname']?></span>的砍价时间已结束。</div>
				<?php }?>
				<?php }?>
			</div>
			<div class="join_bar_blank"></div>
			<div id="rankings" class="">
				<h3>
					<span class="col_1">亲友团</span>
					<span class="col_3">砍掉金额</span>
				</h3>
				<?php foreach($kanuser_list as $vo){?>
				<div class="items">
					<ul>
						<li class="col_1">
							<span class="face"><img src="<?php echo $vo['portrait'];?>"></span>
							<span class="name"><?php echo $vo['wechaname'];?></span>
							<div class="clear"></div>
						</li>
						<li class="col_3">￥<?php echo $vo['dao'];?></li>
					</ul>
					<div class="clear"></div>
				</div>
				<?php }?>
			</div>
			<div class="join_bar_blank"></div>
			<div class="join_bar_blank"></div>
			<div id="join_bar">
				<div class="price"><span>底价:￥<font><?php echo $bargain['minimum']?></font></span><span>现价:￥<font><?php echo $order['bargain_nowprice'];?></font></span></div>
				<div class="btn"><a href="<?php echo U('Bargain/index',array('token'=>$token,'id'=>$_GET['id']));?>">我也来玩</a></div>
				<div class="clear"></div>
				
			</div>
			
			<div id="activity_show">
				<div class="img"><span <?php if($_GET['kanzhi'] > 999 && $_GET['kanzhi'] < 10000){?>style="font-size:52px"<?php }elseif($_GET['kanzhi'] > 9999 && $_GET['kanzhi'] < 100000){?>style="font-size:42px"<?php }elseif($_GET['kanzhi'] > 99999){?>style="font-size:32px"<?php }?>><i>￥</i><font id="price"><?php echo $_GET['kanzhi'];?></font></span></div>
				<div class="txt"></div>
				<div class="btn"><img src="<?php echo ($staticPath); ?>/tpl/static/bargain/images/bargain/close_btn.png"></div>
			</div>
			<script type="text/javascript">
			window.shareData = {  
				"moduleName":"Bargain",
				"moduleID":"<?php echo $bargain['pigcms_id'];?>",
				"imgUrl": "<?php echo $bargain['logoimg1'];?>",
				"sendFriendLink": "<?php echo ($f_siteUrl); echo U('Bargain/index',array('token'=>$token,'id'=>$bargain['pigcms_id']));?>",
				"tTitle": "<?php echo $bargain['wxtitle'];?>",
				"tContent": "<?php echo $bargain['wxinfo'];?>"
			};
			</script>
			<?php echo ($shareScript); ?>
		</body>
		<?php }?>
	<?php }?>
</html>