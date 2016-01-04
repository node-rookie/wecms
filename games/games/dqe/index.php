<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<title>火爆朋友圈</title>
<!--jQuery-->
<script type="text/javascript" src="js/createjs.min.js"></script>
<script type="text/javascript" src="js/zepto.min.js"></script>
<script src="js/common.js"></script>
<link type="text/css" href="js/common.css" rel="stylesheet" />
<style>
	body,html{padding:0;margin:0;width:100%;height:100%;background:#000;-webkit-tap-highlight-color: transparent;}
	canvas{width:100%;height:100%;}
	#container{
		position:absolute;
		bottom:0;left:0;width:100%;height:100%;
	}
</style>
</head>

<body>

<div id="container">
	<canvas id="canvas"></canvas>
</div>

<div style="display: none;">
</div>
<script src="js/index.js"></script>
<script src="js/flyline.js"></script>
<script language=javascript>
		var mebtnopenurl = 'http://www.v918.cn/vgames/';
		window.shareData = {
		        "imgUrl": "http://www.v918.cn/vgames/games/dqe/img/icon.png",
		        "timeLineLink": "http://www.v918.cn/vgames/games/dqe",
		        "tTitle": "打企鹅-火爆朋友圈",
		        "tContent": "打企鹅-火爆朋友圈"
		};
				
		function goHome(){
			window.location=mebtnopenurl;
		}
		function clickMore(){
			if((window.location+"").indexOf("zf",1)>0){
				window.location = "http://www.v918.cn/vgames/";
			 }
			 else{
				goHome();
			 }
		}
		function dp_share(){
			document.title ="你把企鹅击飞出"+myData.scoreName+"，谁还能超越我？-玄元南山郡";
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
			<img width=100% src="http://www.v918.cn/vgames/games/dqe/share.png"
				style="position: fixed; z-index: 9999; top: 0; left: 0; display: "
				ontouchstart="document.getElementById('share').style.display='none';" />
		</div>
		<div style="display: none;">
			<script type="text/javascript">
            var myData = { gameid: "dqe" };
			window.shareData.timeLineLink = "http://www.v918.cn/vgames/games/dqe/index.html?gameid=" + myData.gameid + (localStorage.myuid ? "&uid=" + localStorage.myuid : "");
			function dp_submitScore(score){
				myData.score = score*10;
				myData.scoreName = score+"米";
				if(score>0){
					if (confirm("你太猛了，大力出奇迹，一下把伦家击飞"+score+"米！要不要通知一下小伙伴")){
						dp_share();
					}
				}
			}
			function onShareComplete(res) {
                if (localStorage.myuid && myData.score != undefined) {
                    setTimeout(function(){
                        if (confirm("要将成绩提交到火爆朋友圈排行榜吗？")) {
                            window.location = "http://www.v918.cn/vgames/games/dqe/index.html?gameid=" + myData.gameid + "&uid=" + localStorage.myuid + "&score=" + myData.score + "&scorename=" + encodeURIComponent(myData.scoreName);
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