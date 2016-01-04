﻿<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>路边的野花不要采</title>
    <link rel="icon" type="image/GIF" href="res/favicon.ico"/>
    <meta name="viewport" content="width=device-width, user-scalable=no">
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
<canvas id="gameCanvas" width="640" height="1000"></canvas>
<script src="js/game.min.js?20140825"></script>
<script language=javascript>
		var mebtnopenurl = 'http://www.v918.cn/vgames';
var thegameurl ="http://www.v918.cn/vgames/games/lbyhbyc/"; 
var guanzhuurl ="http://mp.weixin.qq.com/s?__biz=MjM5MTYzNTg1MA==&mid=200926016&idx=1&sn=e48ddb1d423728fd30cf174f382dd932#rd";
		window.shareData = {
		        "imgUrl": "http://mmbiz.qpic.cn/mmbiz/2zpp2iaH4HWFX6tke5uPDQdhox50ehxKfkhXc6UibYO4Kd62Z8Gan6NGUtAIODUFuC0P1HViaf2Vmv24d9VmHgEDA/640",
		        "timeLineLink": thegameurl,
		        "tTitle": "路边的野花不要采",
		        "tContent": "路边的野花真呀真漂亮～～～"
		};
				
		function goHome(){
			window.location=mebtnopenurl;
		}
		function clickMore(){
			 if((window.location+"").indexOf("zf",1)>0){
			 	window.location = mebtnopenurl;
			  }
			  else{
			 	goHome();
			  }
		}
		function dp_share(){
			document.title ="我一共采了"+myData.score+"朵小野花，获得了“"+myData.title+"”称号，你也来试试吧！";
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
            var myData = { gameid: "lbyhbyc" };
			var domain = ["oixm.cn", "hiemma.cn", "peagame.net"][parseInt(Math.random() * 3)];
			window.shareData.timeLineLink =thegameurl;
			function dp_submitScore(score,title){
				myData.score =parseInt(score);
				myData.title=title;
				myData.scoreName = "采了"+score+"朵";
				if(score>0){
					if (confirm("你不错哟，采了"+score+"朵小野花，快告诉你的小伙伴们吧！")){
						dp_share();
					}
				}
			}
			function onShareComplete(res) {
                if (localStorage.myuid && myData.score != undefined) {
                    setTimeout(function(){
                        if (confirm("要将成绩提交到微时代游戏排行榜吗？")) {
                            window.location =mebtnopenurl;
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
</body>
</html>
