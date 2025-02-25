﻿<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <link rel="icon" type="image/GIF" href="res/favicon.ico"/>
    <meta http-equiv="cache-control" content="no-cache">
    <meta name="viewport" content="user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="full-screen" content="yes"/>
    <meta name="screen-orientation" content="portrait"/>
    <meta name="x5-fullscreen" content="true"/>
    <meta name="360-fullscreen" content="true"/>
    <title>他是小三吗？</title> 
    <script type="text/javascript" src="static/cocos2d-3.0rc1.canvas.v2.min.js"></script>
    <style type="text/css">
    #promot {
      height: 50px;
      text-align: center;
      width: 100%;
      position:absolute;
      bottom:0px;
      z-index: 10;
      opacity: 0;
    }
    </style>
</head>
<body>	 
    <canvas id="gameCanvas" width="480" height="800" style="background:#fff"></canvas>
    <script src="static/weixinapi.min.js?1"></script>
    <script type="text/javascript">
          window.onload = function(){
              cc.game.onStart = function(){
                  cc.view.enableAutoFullScreen(false);
                  cc.view.setDesignResolutionSize(720, 1280, cc.ResolutionPolicy.SHOW_ALL);
                  cc.view.resizeWithBrowserSize(false);
                  cc.director.setDisplayStats(cc.game.config.showFPS);
                  //load resources
                  cc._loaderImage = "";
                  cc.LoaderScene.preload(['res/imgs.json', 'static/imgs.png'], function () {
                    cc.spriteFrameCache.addSpriteFrames('res/imgs.json', 'static/imgs.png');
                    cc.director.runScene(new HelloWorldScene());
                    document.getElementById('promot').style.opacity = 1;
                  }, this);
              };
              cc.game.run("gameCanvas");
          };
          
          window.shareData = {
                  "imgUrl": "http://t2.qpic.cn/mblogpic/a6296814b8456a310c90/80",
                  "timeLineLink": "http://www.v918.cn/vgames/games/xiaosan/",
                  "tTitle": "斗小三，打流氓，看你能消灭几个小三，一起来打吧！",
                  "tContent": "斗小三，打流氓，看你能消灭几个小三，一起来打吧！"
              };
              var mebtnopenurl = 'http://www.v918.cn/vgames';


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


                  WeixinJSBridge.on('menu:share:weibo', function(argv) {
                      WeixinJSBridge.invoke('shareWeibo', {
                          "content": window.shareData.tContent,
                          "url": window.shareData.timeLineLink
                      }, function(res) {
                          document.location.href = mebtnopenurl;
                      });
                  });

                  }, false);
    </script>
	
	
</body>
</html>