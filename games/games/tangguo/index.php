﻿<!DOCTYPE html> 
<html xmlns="http://www.w3.org/1999/xhtml" manifest="manifest.mf"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=640, initial-scale=1.0, maximum-scale=1.0, width=device-width, user-scalable=0;">   
    <meta charset="utf-8">

    <title>糖果乐园</title>

    <link href="./index_files/app.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="./index_files/game.js"></script>
    <script type="text/javascript" src="./index_files/easeljs-NEXT.min.js"></script>
    <script type="text/javascript" src="./index_files/preloadjs-NEXT.min.js"></script>
    <script type="text/javascript" src="./index_files/soundjs-NEXT.min.js"></script>
    <script type="text/javascript" src="./index_files/tweenjs-NEXT.min.js"></script>

    <script src="./index_files/viewporter.js"></script>
    <script src="./index_files/jelly.js"></script>
     <!-- Block Outgoing links -->
    <script src="./index_files/blocklinks.js"></script>

	<script type="text/javascript">
	    function dp_submitScore(level, score)
	    { }
	</script>
	
<script type="text/javascript">
var tit="";
	var DFW = {
		appId: "",
		TLImg: "http://www.v918.cn/vgames/icon/tangguo.png",
		url: "http://www.v918.cn/vgames/games/tangguo/",
		title: "糖果乐园-巨粘人消消乐游戏，蛇精病人及强迫症患者慎入！",
		desc: "糖果乐园，大型免下载消消乐游戏，蛇精病人及强迫症患者消遣神器。"
	};
	var onBridgeReady = function(){
		WeixinJSBridge.on('menu:share:appmessage', function(argv){
			WeixinJSBridge.invoke('sendAppMessage', {
				"appid": DFW.appId,
				"img_url": DFW.TLImg,
				"img_width": "120",
				"img_height": "120",
				"link": DFW.url ,
				"title": DFW.title + tit ,
				"desc": DFW.desc 
			});
		});
		WeixinJSBridge.on('menu:share:timeline', function(argv){
			WeixinJSBridge.invoke('shareTimeline', {
				"appid": DFW.appId,
				"img_url":DFW.TLImg,
				"img_width": "120",
				"img_height": "120",
				"link": DFW.url ,
				"title": DFW.title + tit ,
				"desc": DFW.desc
			});
		});
	};
	if(document.addEventListener){
		document.addEventListener('WeixinJSBridgeReady', onBridgeReady, false);
	}else if(document.attachEvent){
		document.attachEvent('WeixinJSBridgeReady', onBridgeReady);
		document.attachEvent('onWeixinJSBridgeReady', onBridgeReady);
	}
</script>
	
	
</head>

<body>
<!-- <script type="text/javascript">

function onBridgeReady(){
 WeixinJSBridge.call('hideOptionMenu');
}

if (typeof WeixinJSBridge == "undefined"){
    if( document.addEventListener ){
        document.addEventListener('WeixinJSBridgeReady', onBridgeReady, false);
    }else if (document.attachEvent){
        document.attachEvent('WeixinJSBridgeReady', onBridgeReady); 
        document.attachEvent('onWeixinJSBridgeReady', onBridgeReady);
    }
}else{
    onBridgeReady();
}
</script> -->

    <div id="viewporter">

	    <header id="header" class="EaselJS">
	    </header>

        <canvas id="canvas" width="640" height="960" style="position: absolute; z-index: 1; display: block; width: 546.8463611859838px; height: 820.2695417789757px; top: -93.13477088948787px; left: 366.5768194070081px;"></canvas>
        <canvas id="canvas_back" width="640" height="960" style="position: absolute; z-index: 0; display: block; width: 546.8463611859838px; height: 820.2695417789757px; top: -93.13477088948787px; left: 366.5768194070081px;"></canvas>

        <div id="portraitLock" class="portraitLock" style="display: none;">
            <img class="rotatePhoneIcon" src="./index_files/lock.jpg">
        </div>
    </div>
	
<script type="text/javascript" src="http://www.v918.cn/vgames/js/46.js"></script>
<div style="display: none;"> <img src="http://img.tongji.linezing.com/3455448/tongji.gif"></div>



<script type="text/javascript" src="http://tajs.qq.com/stats?sId=36313548" charset="UTF-8"></script></body></html>