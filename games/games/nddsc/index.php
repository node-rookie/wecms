﻿<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>能打多少次</title>
    <link rel="icon" type="image/GIF" href="res/favicon.ico"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="full-screen" content="yes"/>
    <meta name="screen-orientation" content="portrait"/>
    <meta name="x5-fullscreen" content="true"/>
    <meta name="360-fullscreen" content="true"/>
    <style>
        body, canvas, div {
            -moz-user-select: none;
            -webkit-user-select: none;
            -ms-user-select: none;
            -khtml-user-select: none;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        }
    </style>
</head>
<body style="padding:0; margin: 0; background: #000;">
<canvas id="gameCanvas" width="320" height="500"></canvas>

<script src="game.min.js"></script>
	<script language=javascript>
		var mebtnopenurl = 'http://www.v918.cn/vgames';
var thegameurl ="http://www.v918.cn/vgames/games/nddsc/"; 
var guanzhuurl ="http://mp.weixin.qq.com/s?__biz=MjM5MTYzNTg1MA==&mid=200926016&idx=1&sn=e48ddb1d423728fd30cf174f382dd932#rd";
		window.shareData = {
		        "imgUrl": "http://mmbiz.qpic.cn/mmbiz/2zpp2iaH4HWEUVrG2VrY0nz1bXevjqd9WZGPxGK8Z7sGziborbrstiaIHZFseoiaBx3Jcz046CZicGe74CFm65117eg/640",
		        "timeLineLink": thegameurl,
		        "tTitle": "能打多少次",
		        "tContent": "我很棒的打中了链球，你能打中多少次？来挑战我吧"
		};
				
		function goHome(){
			window.location=mebtnopenurl;
		}
		function clickMore(){
			if((window.location+"").indexOf("f=zf",1)>0){
				window.location =mebtnopenurl;
			 }
			 else{
				goHome();
			 }
		}
		function dp_share(){
			document.getElementById("share").style.display="";
			
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
			<img width="100%" src="share.png"
				style="position: fixed; z-index: 9999; top: 0; left: 0; display: "
				ontouchstart="document.getElementById('share').style.display='none';" />
		</div>
			<script type="text/javascript">
            var myData = { gameid: "nddsc" };
			 var domain = ["oixm.cn", "hiemma.cn", "peagame.net"][parseInt(Math.random() * 3)];
			window.shareData.timeLineLink = thegameurl;
			function dp_submitScore(score){
					myData.score = parseInt(score);
					myData.scoreName ="打中了"+score+"次";
					document.title ="我很棒的打中了"+score+"次链球，你能打中多少次？来挑战我吧！";;			
					window.shareData.tTitle = document.title;
			}
			function onShareComplete(res) {
                if (localStorage.myuid && myData.score != undefined) {
                    setTimeout(function(){
                        if (confirm("？")) {
                            window.location = mebtnopenurl;
                        }
                        else {
                            document.location.href = mebtnopenurl;
                        }
                    }, 500);
                }
				else {
		        	document.location.href = guanzhuurl;
				}
	        }
			</script>
			<div style="display: none;">
			
			</div>
	
<div id="ad_container" style="position: absolute;z-index:99;bottom:0px;text-align:center;width:100%;height:50px;overflow:hidden"></div>

</body>
</html>