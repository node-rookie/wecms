﻿<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<title>挑战梦想！- 微信朋友圈在线游戏</title>
<link href="css/main.css" rel="stylesheet" type="text/css">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="HandheldFriendly" content="True">
<meta name="MobileOptimized" content="320">
<meta name="viewport" content="width=device-width, target-densitydpi=160dpi, initial-scale=1.0, maximum-scale=1, user-scalable=no, minimal-ui">
</head>
<body>
<div class="container">
<div class="heading">
<h1 class="title " style="width:200px;"><div class="linear_gradient_square"><span class="zg_great">挑战梦想！</span></div></h1>
<div class="scores-container">
<div id="score" class="score-container">0</div>
<div class="best-container">0</div></div></div>
<div class="above-game"><p class="game-intro">滑动屏幕，合并相同“文字” <strong>直到获得“梦想成真”!</strong><span style="font-size:8px; padding-left:10px;">@微管家:</span></p><a class="restart-button">重新开始</a></div><div class="game-container"><div class="game-message"><p></p><div class="lower"><a class="keep-playing-button">分享到朋友圈炫耀一下</a></div></div><div class="grid-container"><div class="grid-row"><div class="grid-cell"></div><div class="grid-cell"></div>
<div class="grid-cell"></div>
<div class="grid-cell"></div>
</div><div class="grid-row">
<div class="grid-cell"></div>
<div class="grid-cell"></div>
<div class="grid-cell"></div>
<div class="grid-cell"></div></div>
<div class="grid-row"><div class="grid-cell"></div>
<div class="grid-cell"></div><div class="grid-cell"></div><div class="grid-cell"></div></div><div class="grid-row"><div class="grid-cell"></div><div class="grid-cell"></div><div class="grid-cell"></div><div class="grid-cell"></div></div></div><div class="tile-container"><div class="tile tile-2 tile-position-1-1 tile-new"><div class="tile-inner">单身公寓</div></div><div class="tile tile-2 tile-position-1-3 tile-new"><div class="tile-inner">单身公寓</div></div></div></div></div>

<script src="css/bind_polyfill.js"></script>
<script src="css/classlist_polyfill.js"></script>
<script src="css/animframe_polyfill.js"></script>
<script src="css/keyboard_input_manager.js"></script>
<script src="css/html_actuator.js"></script>
<script src="css/grid.js"></script>
<script src="css/tile.js"></script>
<script src="css/local_storage_manager.js"></script>
<script src="css/game_manager.js"></script>
<script src="css/application.js"></script>
<style>
.pageOverlayTip {
	position: fixed;
	top: 0;
	left: 0;
	z-index: 1987;
	width: 100%;
	height: 100%;
	background: #000;
	filter: alpha(opacity = 85);
	opacity: 0.85;
	visibility: hidden;


}
.pageOverlayTipSlip {
	position: fixed;
	top: 0;
	left: 0;
	z-index: 1987;
	width: 100%;
	height: 100%;
	background: #000;
	filter: alpha(opacity = 85);
	opacity: 0.85;
	padding-top:100px;
}
.linear_gradient_square { 
display: block;
 
background: -o-linear-gradient(left,#0000ff 0%,#00ff00 50%,#ff0000 100%); 
background: -ms-linear-gradient(left,#0000ff 0%,#00ff00 50%,#ff0000 100%); 
background: linear-gradient(left,#0000ff 0%,#00ff00 50%,#ff0000 100%);
-ms-color:transparent;
-moz-background-clip: texts;
  -webkit-background-clip: texts;
  -o-background-clip: texts;
  background-clip: texts;
}

</style>
<div id="pageOverlayShare" class="pageOverlayTip" onClick="this.style.visibility = 'hidden'"><img src="images/tip.gif" width="100%"></div>
<script>var share_score = 2000;
var _host = "http://" + window.location.host;
document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
WeixinJSBridge.call('hideToolbar');
});
function attention_wx()
{
	alert("更多精彩，请关注46465.COM：apiwck");
	location.href='#'
}
function is_zero()
{
	if(share_score == 0)
	{
		share_score = 2000;
	}
}
var dataForWeixin = {
    appId: "",
    MsgImg: "http://www.v918.cn/vgames/games/mxcz/images/mlylogo.jpg",
    TLImg: "http://www.v918.cn/vgames/games/mxcz/images/mlylogo.jpg",
    url:  "http://www.v918.cn/vgames/games/mxcz/",
	title:  "我挑战梦想获得了" + share_score + "分的好成绩！你也来试试吧！",
	desc: "我挑战梦想获得了" + share_score + "分的好成绩！你也来试试吧！",
    fakeid: "",
    callback: function() {
		setTimeout(function(){
          attention_wx();
		 },2000);		}
}; (function() {
    var onBridgeReady = function() {
        WeixinJSBridge.on('menu:share:appmessage',
        function(argv) {
			is_zero();
            WeixinJSBridge.invoke('sendAppMessage', {
                "appid": dataForWeixin.appId,
                "img_url": dataForWeixin.MsgImg,
                "img_width": "120",
                "img_height": "120",
                "link": dataForWeixin.url,
                "desc": " 我挑战梦想获得了" + share_score + "分的好成绩！你也来试试吧！",
                "title": "我挑战梦想获得了" + share_score + "分的好成绩！你也来试试吧!"
            },
            function(res) { (dataForWeixin.callback)();
            });
        });
        WeixinJSBridge.on('menu:share:timeline',
        function(argv) { (dataForWeixin.callback)();
		is_zero();
            WeixinJSBridge.invoke('shareTimeline', {
                "img_url": dataForWeixin.TLImg,
                "img_width": "120",
                "img_height": "120",
                "link": dataForWeixin.url,
                "desc": "我挑战梦想获得了" + share_score + "分的好成绩！你也来试试吧！",
                "title": "我挑战梦想获得了" + share_score + "分的好成绩！你也来试试吧！"
            },
            function(res) {});
        });
        WeixinJSBridge.on('menu:share:weibo',
        function(argv) {
            WeixinJSBridge.invoke('shareWeibo', {
                "content": dataForWeixin.title,
                "url": dataForWeixin.url
            },
            function(res) { (dataForWeixin.callback)();
            });
        });
        WeixinJSBridge.on('menu:share:facebook',
        function(argv) { (dataForWeixin.callback)();
            WeixinJSBridge.invoke('shareFB', {
                "img_url": dataForWeixin.TLImg,
                "img_width": "120",
                "img_height": "120",
                "link": dataForWeixin.url,
                "desc": dataForWeixin.desc,
                "title": dataForWeixin.title
            },
            function(res) {});
        });
    };
    if (document.addEventListener) {
        document.addEventListener('WeixinJSBridgeReady', onBridgeReady, false);
    } else if (document.attachEvent) {
        document.attachEvent('WeixinJSBridgeReady', onBridgeReady);
        document.attachEvent('onWeixinJSBridgeReady', onBridgeReady);
    }
})();

</script>

<div id=share style="display:none"><img src="http://img.tongji.linezing.com/3455448/tongji.gif"></div>
</body>
</html>
