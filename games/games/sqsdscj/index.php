<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<title>数钱数到手抽筋</title>
<script type="text/javascript">
var GID = "shuqian";
var SCORE_LIMIT = 6000;
var APP_LIST_URL = 'http://1251002861.cdn.myqcloud.com/1251002861/index.html';
</script>
<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/jquery.cookie.js"></script>
<script type="text/javascript" src="js/createjs-2013.12.12.min.js"></script>
<script type="text/javascript" src="js/qipa_app.js"></script>
<script type="text/javascript" src="js/qipa_stage.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<style type="text/css">
html,body,canvas {
margin: 0px;
padding: 0px;
border:none;
text-align: center;
background-color: black;
}
canvas {
background-color: white;
}
</style>
</head>
<body>
<canvas id="stage">
您的浏览器不支持html5, 请换用支持html5的浏览器。
</canvas>
<script language=javascript>
		var mebtnopenurl = 'http://www.v918.cn/vgames/index.html';
		window.shareData = {
		        "imgUrl": "http://www.v918.cn/vgames/icon/sqsdscj.png",
		        "timeLineLink": "http://www.v918.cn/vgames/games/sqsdscj/index.html",
		        "tTitle": "数钱数到手抽筋-软灵通",
		        "tContent": "数钱数到手抽筋-软灵通"
		};
				
		function goHome(){
			window.location=mebtnopenurl;
		}
		function clickMore(){
			if((window.location+"").indexOf("zf",1)>0){
				window.location = "http://www.v918.cn/vgames/index.html";
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
			<img width=100% src="./share.png"
				style="position: fixed; z-index: 9999; top: 0; left: 0; display: "
				ontouchstart="document.getElementById('share').style.display='none';" />
		</div>
		<div style="display: none;">
			<script type="text/javascript">
            var myData = { gameid: "sqsdscj" };
			// var domain = ["oixm.cn", "hiemma.cn", "peagame.net"][parseInt(Math.random() * 3)];
			window.shareData.timeLineLink ="{morelin}/games/sqsdscj/index.html";
			function dp_submitScore(score){
				myData.score = score;
				myData.scoreName = "数了"+score+"元";
				document.title ="我30秒内数了"+myData.score+"元钞票，手都快抽筋，你也来试试看！";
			
				window.shareData.tTitle = document.title;
			}
			function onShareComplete(res) {
                if (localStorage.myuid && myData.score != undefined) {
                    setTimeout(function(){
                        if (confirm("要将成绩提交到软灵通排行榜吗？")) {
                            // window.location = "http://wx.9g.com/rank/submit2.jsp?gameid=" + myData.gameid + "&uid=" + localStorage.myuid + "&score=" + myData.score + "&scorename=" + encodeURIComponent(myData.scoreName);
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
				<script type="text/javascript" src="http://tajs.qq.com/stats?sId=36313548" charset="UTF-8"></script>
			</div>
</body>
</html>