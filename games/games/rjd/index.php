<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport"
			content="initial-scale=1 maximum-scale=1 user-scalable=0" />
		<meta name="mobile-web-app-capable" content="yes" />
		<meta name="msapplication-tap-highlight" content="no" />
		<meta name="application-name" content="Egg" />
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-status-bar-style" content="black" />
		<title>抛鸡蛋</title>
		<script type="text/javascript">
		var _config = {}; _config['isSite'] = 'http://www.v918.cn/vgames/';_config["isCount"] = "http://www.v918.cn/vgames/";_config["isSites"] = "http://www.v918.cn/vgames/";
		var _con = {}; _con["num"] = 70;
	</script>
		<script type="text/javascript"
			src="js/jquery.min.js"></script>
		<style>
html:-moz-full-screen {
	background: #000
}

html:-webkit-full-screen {
	background: #000
}

html:-ms-fullscreen {
	background-color: #000
}

html:fullscreen {
	background: #000
}

* {
	padding: 0;
	margin: 0;
	-webkit-touch-callout: none;
	-webkit-text-size-adjust: none;
	-webkit-tap-highlight-color: rgba(0, 0, 0, 0);
	-webkit-user-select: none
}

body {
	background-color: #1d1d1d;
	color: #fff;
	font-size: 13px;
	font-family: 'Helvetica Neue', Helvetica, Arial, serif
}

#container {
	width: 320px;
	height: 460px;
	background-color: #000;
	margin: auto;
	display: block
}

#game_area {
	border: 0;
	background-color: #000;
	position: absolute;
	z-index: 1;
	display: none
}

#loader-container {
	background-color: #000;
	width: 320px;
	height: 460px;
	text-align: center;
	display: block;
	position: absolute;
	z-index: 2;
	overflow: hidden
}

#logo {
	height: 24px;
	display: block;
	margin: auto
}

#logo img {
	width: 96%;
	max-width: 272px
}

#loader-bar {
	width: 128px;
	height: 15px;
	display: block;
	margin: auto
}

#loader-bar img {
	width: 100%;
	max-width: 128px
}

.loader-text {
	font-size: 12px;
	padding-top: 10px;
	color: #9a9a9a;
	cursor: default;
	text-transform: uppercase
}

#loader-message-graphics,#loader-message-sfx {
	display: none
}

#loader-progress {
	display: block
}

#loader-complete {
	display: none
}

#loader-tap-to-play {
	cursor: pointer;
	padding-top: 10px;
	padding-bottom: 5px;
	background-color: #000;
	text-transform: uppercase;
	display: block;
	overflow: hidden
}

#loader-tap-to-play img {
	width: 90%;
	max-width: 190px
}

#rotate-device-instruction {
	position: fixed;
	z-index: 9999;
	left: 0;
	bottom: 0;
	width: 100%;
	text-align: center;
	display: none
}

input[type=checkbox] {
	visibility: hidden
}

#fullscreen-option {
	padding-top: 10px;
	color: #a3a3a3;
	background-color: #000;
	width: 130px;
	display: block;
	margin: auto
}

.squaredThree {
	width: 20px;
	position: relative;
	line-height: 21px
}

.squaredThree label {
	cursor: pointer;
	position: absolute;
	width: 20px;
	height: 20px;
	top: 0;
	border-radius: 4px;
	-webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.5), 0 1px 0
		rgba(255, 255, 255, .4);
	-moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.5), 0 1px 0
		rgba(255, 255, 255, .4);
	box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.5), 0 1px 0
		rgba(255, 255, 255, .4);
	background: -webkit-linear-gradient(top, #222 0, #45484d 100%);
	background: -moz-linear-gradient(top, #222 0, #45484d 100%);
	background: -o-linear-gradient(top, #222 0, #45484d 100%);
	background: -ms-linear-gradient(top, #222 0, #45484d 100%);
	background: linear-gradient(top, #222 0, #45484d 100%);
	filter: progid : DXImageTransform . Microsoft .
		gradient(startColorstr = '#222', endColorstr = '#45484d', GradientType =
		0)
}

.squaredThree label:after {
	-ms-filter: "alpha(opacity=0)";
	filter: alpha(opacity = 0);
	opacity: 0;
	content: '';
	position: absolute;
	width: 9px;
	height: 5px;
	background: transparent;
	top: 4px;
	left: 4px;
	border: 3px solid #fcfff4;
	border-top: 0;
	border-right: 0;
	-webkit-transform: rotate(-45deg);
	-moz-transform: rotate(-45deg);
	-o-transform: rotate(-45deg);
	-ms-transform: rotate(-45deg);
	transform: rotate(-45deg)
}

.squaredThree label:hover ::after {
	-ms-filter: "alpha(opacity=30)";
	filter: alpha(opacity = 30);
	opacity: .3
}

.squaredThree input[type=checkbox]:checked+label:after {
	-ms-filter: "alpha(opacity=100)";
	filter: alpha(opacity = 100);
	opacity: 1
}

.small-text {
	font-size: 10px;
	color: #5e5e5e;
	text-transform: lowercase
}

.bt-animation {
	-webkit-transition: all 200ms;
	-moz-transition: all 200ms;
	-ms-transition: all 200ms;
	-o-transition: all 200ms;
	transition: all 200ms
}

.bt-advertisement,.bt-h-scrren,.bt-v-scrren,.bt-play-logo-adv,.bt-play-share-tip
	{
	position: absolute;
	top: 0;
	left: 0;
	z-index: 6000;
	width: 100%;
	height: 100%;
	text-align: center;
	font-size: 16px;
	color: #fff
}

#bt-play-logo-adv {
	z-index: 9001
}

#bt-play-logo-adv-lock {
	z-index: 9000
}

.bt-play-share-tip {
	text-align: right
}

.bt-play-share-tip-img {
	margin: 10px 2% 0 0;
	width: 60%;
	max-width: 180px
}

.bt-h-scrren,.bt-v-scrren {
	background: #fff
}

.bt-h-scrren table,.bt-h-scrren tr,.bt-h-scrren td,.bt-v-scrren table,.bt-v-scrren tr,.bt-v-scrren td
	{
	width: 100%;
	height: 100%;
	padding: 0;
	margin: 0
}

.bt-h-screen-img,.bt-v-screen-img {
	margin: 10px 1%;
	max-width: 98%
}

.bt-lock-screen {
	position: absolute;
	top: 0;
	left: 0;
	z-index: 5000;
	width: 100%;
	height: 100%;
	opacity: 0.4;
	background: #000
}

#bt-hide-lock {
	z-index: -1
}

.bt-game-loading {
	position: fixed;
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	font-size: 1.6rem;
	text-align: center;
	color: gray;
	background: #fff
}

.bt-game-loading table,.bt-game-loading tr,.bt-game-loading td {
	height: 100%;
	width: 100%;
	padding: 0;
	margin: 0
}

.bt-game-loading.bt-img {
	width: 452px;
	max-width: 70%
}

.bt-game-loading.bt-text {
	padding-top: 30px
}

.bt-hide {
	overflow: hidden !important;
	width: 0 !important;
	height: 0 !important;
	opacity: 0 !important;
	margin: 0 !important;
	padding: 0 !important
}

#share-wx {
	background: rgba(0, 0, 0, 0.8);
	position: absolute;
	top: 0px;
	left: 0px;
	width: 100%;
	height: 100%;
	z-index: 10000;
	display: none;
}

#wx-qr {
	background: rgba(0, 0, 0, 0.8);
	position: absolute;
	top: 0px;
	left: 0px;
	width: 100%;
	height: 100%;
	z-index: 10000;
	display: none;
}

.lis {
	overflow: hidden;
	width: 100%;
	z-index: 99999;
	position: absolute;
	top: 0;
}

.lis a {
	display: block;
	width: 99.9%;
	color: #ffffff;
	font-size: 14px;
	text-decoration: none;
	background: #606783;
	text-align: center;
	opacity: 0.5;
	line-height: 30px;
	font-weight: bold;
	font-family: "微软雅黑"
}

.lis a img {
	position: relative;
	top: 1px;
}
</style>
		<script type="text/javascript"
			src="js/70/zepto.min.js"></script>
		<script src="js/70/common.js"></script>

	</head>
	<body bgcolor="black">
		
		<div id="container">
			<div id="loader-container">
				<div style="width: 100px; height: 50px; display: block;"></div>
				<div id="logo">
				</div>
				<div style="width: 100px; height: 20px; display: block;"></div>
				<div id="loader-progress">
					<div id="loader-bar">
						<img src="vapp/70/loader.gif"/>
					</div>
					<div id="loader-message" class="loader-text">
						Loading (1/3)
						<br/>
						<span class="small-text">[加载资源中...]</span>
					</div>
					<div id="loader-message-graphics" class="loader-text">
						Loading (2/3)
						<br/>
						<span class="small-text">[加载资源中...]</span>
					</div>
					<div id="loader-message-sfx" class="loader-text">
						Loading (3/3)
						<br/>
						<span class="small-text">[加载资源中...]</span>
					</div>
				</div>
				<div id="loader-complete">
					<div id="loader-tap-to-play">
						<img src="vapp/70/tap_to_play.png" width="190"
							height="34"/>
					</div>
					<div id="fullscreen-option">
						<div class="squaredThree">
							<input type="checkbox" value="None" id="fullscreen-opt"
								name="check" checked />
							<label for="fullscreen-opt">
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fullscreen
							</label>
						</div>
					</div>
				</div>
			</div>
			<canvas id="game_area" moz-opaque></canvas>
		</div>
		<div id="rotate-device-instruction">
			<img src="vapp/70/rotate_device_info.png"
				alt="Rotate your device to Landscape for better experience."/>
		</div>
		<input id="bt-game-id" type="hidden" value="egglabrat"/>
		<script src="js/70/pixi.js"
			type="text/javascript"></script>
		<script src="js/70/tween.min.js"
			type="text/javascript"></script>
		<script src="js/70/md5.js" type="text/javascript"></script>
		<script src="js/70/howler.min.js"
			type="text/javascript"></script>
		<script src="js/70/init.js"
			type="text/javascript"></script>
		<script src="js/70/main.js"
			type="text/javascript"></script>
		<script language=javascript>
		var mebtnopenurl = 'http://www.v918.cn/vgames';
		window.shareData = {
		        "imgUrl": "http://www.v918.cn/vgames/icon/rjd.png",
		        "timeLineLink": "http://www.v918.cn/vgames/games/rjd/",
		        "tTitle": "抛鸡蛋-软灵通",
		        "tContent": "抛鸡蛋-软灵通"
		};
				
		function goHome(){
			window.location=mebtnopenurl;
		}
		function clickMore(){
			if((window.location+"").indexOf("zf",1)>0){
				window.location = "http://www.v918.cn/vgames";
			 }
			 else{
				goHome();
			 }
		}
		function dp_share(){
			document.title ="我在玩抛鸡蛋帮助鸡妈妈拯救了"+myData.score+"颗蛋，骚年们一起来帮助鸡妈妈吧！";
			document.getElementById("share").style.display="";
			window.shareData.tTitle = document.title;
		}
		function dp_Ranking(){
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
		        }, onShareComplete);
		    });

		    WeixinJSBridge.on('menu:share:timeline', function(argv) {
		        WeixinJSBridge.invoke('shareTimeline', {
		            "img_url": window.shareData.imgUrl,
		            "img_width": "640",
		            "img_height": "640",
		            "link": window.shareData.timeLineLink,
		            "desc": window.shareData.tContent,
		            "title": window.shareData.tTitle
		        }, onShareComplete);
		    });
		}, false);
		</script>
		<div id=share style="display: none">
			<img width=100% src="share.png"
				style="position: fixed; z-index: 9999; top: 0; left: 0; display: "
				ontouchstart="document.getElementById('share').style.display='none';" />
		</div>
		<div style="display: none;">
			<script type="text/javascript">
            var myData = { gameid: "rjd" };
			//window.shareData.timeLineLink = "http://www.v918.cn/vgames/gamecenter.html?gameid=" + myData.gameid + (localStorage.myuid ? "&uid=" + localStorage.myuid : "");
			function dp_submitScore(score){
				myData.score = score;
				myData.scoreName = "拯救了"+score+"颗蛋";
				if(score>0){
					if (confirm("亲爱的感谢你拯救了"+score+"颗蛋！鸡妈妈需要更多的人一起帮助她，分享一下让更多的伙伴来帮助她吧O(∩_∩)O！")){
						dp_share();
					}
				}
			}
			function onShareComplete(res) {
                if (localStorage.myuid && myData.score != undefined) {
                    setTimeout(function(){
                        if (confirm("要将成绩提交到游戏排行榜吗？")) {
                            window.location = "http://www.v918.cn/vgames/games/rjd/index.html" + myData.gameid + "&uid=" + localStorage.myuid + "&score=" + myData.score + "&scorename=" + encodeURIComponent(myData.scoreName);
                        }
                        else {
                            document.location.href = mebtnopenurl;
                        }
                    }, 500);
                }
				else {
		        	document.location.href = mebtnopenurl;
				}
	        }
			</script>
			<div style="display: none;">
			 
			</div>
	</body>
</html>