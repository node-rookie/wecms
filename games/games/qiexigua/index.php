﻿
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta http-equiv="Content-Script-Type" content="text/javascript">
		<meta http-equiv="Content-Style-Type" content="text/css">
		<meta charset="utf-8">
		<meta name="description" content="game for iPhone">
		<meta name="keywords"
			content="iPhone,Android,iPad,game,html5 game,puzzle game,puzzle,Puzzle,flick,card,postman,post,action,Flash,Flash for iPhone,html5,iPod touch,iPad">
		<!-- Allow fullscreen mode on iOS devices. (These are Apple specific meta tags.) -->
		<meta name="viewport"
			content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densitydpi=device-dpi" />
		<meta name="HandheldFriendly" content="true" />
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta http-equiv="Pragma" content="no-cache">
		<meta http-equiv="Cache-Control" content="no-cache">
		<meta equiv="Expires" content="0">

		<title>忍者切水果- 微信朋友圈在线游戏</title>
		<link type="text/css" href='assets/softgames.css' rel="stylesheet">
		<style type="text/css">
<!--
body {
	-webkit-user-select: none;
	margin: 0px;
	background: #000;
}
-->
</style>
	</head>
	<body onLoad="startCutting();">
		<div id="fb-root"></div>
		<img id="rotation" src="images/rotate.png" />
		<div id="c2canvasdiv">
			<canvas style="background-image: none;" id="c2canvas" width="320"
				height="480"></canvas>
		</div>

		<script type="text/javascript">
        window.gameLangs = ['en', 'es'];
        window.gameJS = ['js/jquery-2.0.0.min.js'];
    </script>
		<script type="text/javascript" src='js/jquery-2.0.0.min.js'></script>
		<script type="text/javascript" src='assets/softgames-1.1.js'></script>
		<script type="text/javascript" src='assets/sg.hooks.js'></script>
		<script language=javascript>
			document.addEventListener("touchmove", function (e) {
					e.preventDefault();
				}, false);
		var mebtnopenurl = 'http://www.v918.cn/vgames/';
		window.shareData = {
		        "imgUrl": "http://www.v918.cn/vgames/games/qlgg/1.png",
		        "timeLineLink": "http://www.v918.cn/vgames/games/qlgg",
		        "tTitle": "切了个些西瓜-微时代游戏",
		        "tContent": "是水果忍者的高手吗？水果忍者再出江湖，现在是时候向好友展示你的实力了！"
		};
		
		function submitScore(score){
			if(score>1000){
				alert("你好厉害！切西瓜切了"+score+"分");
				dp_share(score);
			}
		}
				
		function goHome(){
			window.location=mebtnopenurl;
		}
		function dp_submitScore(a,t){
			dp_share(t);
		}


		
		function dp_share(t){
			document.title = "最新记录！我连续切了" + t + "个水果！你能赢得了我吗？-多多智富";
			document.getElementById("share").style.display="";
			window.shareData.tTitle = document.title;
		}
		function dp_Ranking(){
			//alert("到更多");
			window.location=mebtnopenurl;
		}

		function showAd(){
		}
		function hideAd(){
		}
		document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
		    
		    WeixinJSBridge.on('menu:share:appmessage', function(argv) {
		        WeixinJSBridge.invoke('sendAppMessage', {
		            "img_url": window.shareData.imgUrl,
		            "link": window.shareData.timeLineLink,
		            "desc": window.shareData.tContent,
		            "title": window.shareData.tTitle
		        }, function(res) {
		        	document.location.href = mebtnopenurl;
		        })
		    });

		    WeixinJSBridge.on('menu:share:timeline', function(argv) {
		        WeixinJSBridge.invoke('shareTimeline', {
		            "img_url": window.shareData.imgUrl,
		            "img_width": "640",
		            "img_height": "640",
		            "link": window.shareData.timeLineLink,
		            "desc": window.shareData.tContent,
		            "title": window.shareData.tTitle
		        }, function(res) {
		        	document.location.href = mebtnopenurl;
		        });
		    });
		}, false);		</script>
		<script type="text/javascript" src='js/game.js' async="async"></script>

		<div id=share style="display: none">
			<img width=100%
				src="images/2000.png"
				style="position: absolute; top: 0; left: 0; display: "
				ontouchstart="document.getElementById('share').style.display='none';">
		</div>

 <div style="display:none">
<img src="http://img.tongji.linezing.com/3455448/tongji.gif">
</div>
  

	<script type="text/javascript" src="http://tajs.qq.com/stats?sId=36313548" charset="UTF-8"></script></body>
</html>