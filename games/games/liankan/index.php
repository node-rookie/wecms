<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="target-densitydpi=320,width=640,user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <title>连圈圈大作战</title>
 
	<link rel="stylesheet" href="css/53/main.css" />
	<script type="text/javascript" src="js/jquery.min.js"></script>
    <style>
		#share-wx{
			background:rgba(0,0,0,0.8);
			position:absolute;top:0px;
			left:0px;
			width:100%;
			height:100%;
			z-index:10000;
			display:none;
		}
		#wx-qr{
			background:rgba(0,0,0,0.8);
			position:absolute;top:0px;
			left:0px;
			width:100%;
			height:100%;
			z-index:10000;
			display:none;
		}
.lis{overflow: hidden;width: 100%;z-index: 99999;position: absolute;top:0;}
.lis a{display: block;width:99.9%;color:#ffffff;font-size:14px;text-decoration: none;background:#606783;text-align: center;opacity: 0.5;line-height:30px;font-weight: bold;font-family:"微软雅黑"}
.lis a img{position: relative;top: 1px;}
    </style>
	
</head>
<body style="padding: 0px; border: 0px; margin: 0px;position: relative;">
	<script type="text/javascript" src="js/code.js"></script>
	<div class="lis">
		<div style="float: left;width:33%;"><a style="border-bottom: 3px solid #fd6766;" href="/">游戏列表</a></div>
		<div style="float: left;width:34%;"><a style="border-bottom: 3px solid #04fece;" href="/">关注收藏</a></div>
		<div style="float: left;width:33%;"><a style="width:100%;margin:0;border-bottom: 3px solid #fdcd01;" onclick="location.href=location.href;" href="javascript:;" ><img width="15" src="vapp/4.png">重玩</a></div>
	</div>
<div id="gameContainer" style="position: absolute;"> </div>
		<div id="share_cover" style="display: none">
			<img width="100%" src="vapp/shares.png" style="position: fixed; z-index: 9999; top: 0; left: 0;" ontouchstart="document.getElementById('share_cover').style.display='none';">
		</div>
        <script>
		var mebtnopenurl = 'http://www.v918.cn/vgames/';
        var oDiv = document.getElementById("gameContainer");
        oDiv.style.width = document.body.clientWidth;
        window.onscroll = window.onresize = window.onload = function(){
            var sTop = document.documentElement.scrollTop || document.body.scrollTop;
            var sLeft = document.documentElement.scrollLeft || document.body.scrollLeft;
            var cHeight= document.documentElement.clientHeight || document.body.clientHeight;
            var cWidth = document.documentElement.clientWidth || document.body.clientWidth;
            var mHeight = (cHeight - oDiv.offsetHeight) / 2;
            var mWidth = (cWidth - oDiv.offsetWidth) / 2;
            if(navigator.appVersion.indexOf("MSIE 6")> -1){
                oDiv.style.top = parseInt(sTop + mHeight) + "px"; 
                oDiv.style.left = parseInt(sLeft + mWidth) + "px";
            }else{
                oDiv.style.top = mHeight + "px";
                oDiv.style.left = mWidth + "px";
            }
        }

       dataForWeixin = {
			"appId": "",
			"imgUrl": "http://www.v918.cn/vgames/icon/liankan.png",
			"url": "http://www.v918.cn/vgames/games/liankan/",
			"tTitle": "连圈圈大作战-用你的手指连接同色色的圈圈",
			"tContent": "一次连的点越多，得分倍数越高！不是所有人都能随随便便得高分的"
		};	
       document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
		
		WeixinJSBridge.on('menu:share:appmessage', function(argv) {
				WeixinJSBridge.invoke('sendAppMessage', {
				   "appid": dataForWeixin.appId,
					"img_url": dataForWeixin.imgUrl,
					"link": dataForWeixin.url,
					"desc": dataForWeixin.tContent,
					"title": dataForWeixin.tTitle
				});
				 setTimeout(function () {location.href = mebtnopenurl;}, 1500); 
			});

			WeixinJSBridge.on('menu:share:timeline', function(argv) {
				WeixinJSBridge.invoke('shareTimeline', {
				   "appid": dataForWeixin.appId,
					"img_url": dataForWeixin.imgUrl,
					"img_width": "640",
					"img_height": "640",
					"link": dataForWeixin.url,
					"desc": dataForWeixin.tContent,
					"title": dataForWeixin.tTitle
				});
				 setTimeout(function () {location.href = mebtnopenurl;}, 1500); 
			});
		}, false);
        </script>
        <script type="text/javascript" src="js/phaser.min.js"></script>
        <script type="text/javascript" src="js/load.js"></script>
        <script type="text/javascript" src="js/menu.js"></script>
        <script type="text/javascript" src="js/play.js"></script>
        <script type="text/javascript" src="js/end.js"></script>
        <script type="text/javascript" src="js/game.js"></script>
		<script type="text/javascript" src="js/config.main.js"></script>
	<div>
 
	</div>
	<div style="display:none;">
	<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?fa356a94bf5ae253b76fefa953bb56e4";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>

 </div>
</body>
</html>