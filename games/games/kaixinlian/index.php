﻿<!DOCTYPE html>
<html class="SG-game-show" style="background:none;background-color:transparent; width:100%;" manifest="manifest.mf">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta charset="UTF-8">
<script type="text/javascript">
	var SpilGamesBrandTimer = +new Date(),
	_SPTimer={w:{},start:function(a){this.w[(a||"_")]=+new Date()},end:function(a){window._gaq=window._gaq||[],a=a||"_";if(this.w[a]){ 
	}}};
	_SPTimer.start('pageLoad');
</script>

<meta http-equiv="Content-Type" content="text/html">
<meta name="apple-mobile-web-app-capable" content="yes"> 
<meta name="robots" content="index,follow"> 
<meta name="apple-touch-fullscreen" content="yes">
<meta name="description" content="">		
<title>开心消消乐-微时代管家</title>		
<style type="text/css"> * { padding: 0px; margin: 0px; cursor: default; } body { font: 12px/20px Palatino; }</style>
<!--<script type="text/javascript">document.write('<script type="text/javascript" src="../resource/js/resource_loader.js?ver='+Math.random()+'"><\/script>')</script>-->
	
</head>
<body>

<div id="spilgames-root"></div>
<script type="text/javascript" src="SeaTreasureMatch_files/game.min.js"></script>

    <script>
        function dp_Ranking() {
            document.location.href = "http://www.v918.cn/vgames/";
        }
    </script>

    <div id="share" style="display: none">
			<img width="100%" src="bitmap/share.png" style="position: fixed; z-index: 9999; top: 0; left: 0; display: " ontouchstart="document.getElementById(&#39;share&#39;).style.display=&#39;none&#39;;">
		</div>
    <script>
        var mebtnopenurl = "http://mp.weixin.qq.com/s?__biz=MjM5MTYzNTg1MA==&mid=200926016&idx=1&sn=e48ddb1d423728fd30cf174f382dd932#rd";
        var tit = "";
        var DFW = {
            appId: "",
            TLImg: "http://www.v918.cn/vgames/icon/kaixinlian.jpg",
            url: "http://www.v918.cn/vgames/games/kaixinlian/",
            title: "开心消消乐-多多游戏",
            desc: "我消，我消，我消...！"
        };
        var onBridgeReady = function () {
            WeixinJSBridge.on('menu:share:appmessage', function (argv) {
                WeixinJSBridge.invoke('sendAppMessage', {
                    "appid": DFW.appId,
                    "img_url": DFW.TLImg,
                    "img_width": "120",
                    "img_height": "120",
                    "link": DFW.url,
                    "title": DFW.title + tit,
                    "desc": DFW.desc
                }
                );
            });
            WeixinJSBridge.on('menu:share:timeline', function (argv) {
                WeixinJSBridge.invoke('shareTimeline', {
                    "appid": DFW.appId,
                    "img_url": DFW.TLImg,
                    "img_width": "120",
                    "img_height": "120",
                    "link": DFW.url,
                    "title": DFW.title + tit,
                    "desc": DFW.desc
                }
                );
            });
        };
        if (document.addEventListener) { 
            document.addEventListener('WeixinJSBridgeReady', onBridgeReady, false);
        } else if (document.attachEvent) {
            document.attachEvent('WeixinJSBridgeReady', onBridgeReady);
            document.attachEvent('onWeixinJSBridgeReady', onBridgeReady);
        }
        function do_share(score) {
            document.title = "我获得了" + score + "分，一起来消星星吧！";

            document.getElementById("share").style.display = "";
            window.DFW.title = document.title;
        }
        function dp_submitScore(level,score) {
            //alert("你获得" + score + "分");
            if (score > 5000) {
                if (confirm("你获得了" + score + " 要不要通知下小伙伴们呢？")) {
                    do_share(score);
                }
            }
        }
    </script>
<div style="display: none;"><script type="text/javascript" src="http://tajs.qq.com/stats?sId=36313548" charset="UTF-8"></script></div>
</body></html>