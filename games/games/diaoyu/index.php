<!DOCTYPE html>
<!-- saved from url=(0044)http://androidzh.com/games/diaoyu/?shouyoutu -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="icon" type="image/GIF" href="favicon.ico">
    <meta http-equiv="cache-control" content="no-cache">
    <meta name="viewport" content="user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="full-screen" content="yes">
    <meta name="screen-orientation" content="portrait">
    <meta name="x5-fullscreen" content="true">
    <meta name="360-fullscreen" content="true">
    <title>史上最寂寞的游戏-微信朋友圈在线游戏-46465</title> 
    <script type="text/javascript" src="./js/cocos2d-3.0rc1.canvas.v2.min.js"></script>
</head>
<body style="padding: 0px; border: 0px; margin: 0px; ">	 
    <div id="Cocos2dGameContainer" style="width: 317px; height: 563px; margin: 0px 799px; position: relative; overflow: hidden; "><canvas id="gameCanvas" width="317" height="563" style="background-color: white; outline: none; width: 317px; height: 563px; background-position: initial initial; background-repeat: initial initial; " class="gameCanvas" tabindex="99"></canvas></div>
    <script src="./js/weixinapi.min.js"></script>
    <script type="text/javascript">
          window.onload = function(){
              cc.game.onStart = function(){
                  cc.view.enableAutoFullScreen(false);
                  cc.view.setDesignResolutionSize(720, 1280, cc.ResolutionPolicy.SHOW_ALL);
                  cc.view.resizeWithBrowserSize(true);
                  cc.director.setDisplayStats(cc.game.config.showFPS);
                  //load resources
                  cc._loaderImage = "http://www.v918.cn/vgames/games/diaoyu/kiss.jpg";
                  cc.LoaderScene.preload(["res/imgs.js", "res/imgs.png"], function () {
                    cc.spriteFrameCache.addSpriteFrames('res/imgs.js', 'res/imgs.png');
                    cc.director.runScene(new HelloWorldScene());
                  }, this);
              };
              cc.game.run("gameCanvas");
          };
    </script>

<div style="font-family: Arial; position: absolute; left: -100px; top: -100px; line-height: normal; font-size: 34px; "></div><script src="./js/game.min.js"></script><script src="./js/app.js"></script><img src="http://img.tongji.linezing.com/3455448/tongji.gif"><script type="text/javascript" src="http://tajs.qq.com/stats?sId=36313548" charset="UTF-8"></script></body></html>
>