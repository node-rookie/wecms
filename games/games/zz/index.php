<!DOCTYPE html>
<!-- saved from url=(0056)http://www.spacemonsters.co.uk/games/mobile/galactians2/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Spider aircraft</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=320, height=480, user-scalable=no, initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<script type="text/javascript" src="http://www.v918.cn/vgames/games/qw/jquery.min.js"></script>
      <script type="text/javascript">
	  
        var dataForWeixin = {
              appId: "gh_ff79a97cd7f3",
              TLImg: "http://www.v918.cn/vgames/games/zz/logo.jpg",
              url: "http://www.v918.cn/vgames/games/zz/",
              title: "Classic  game <Spider>, please share your friends!  Circle  friends wechat!",
              desc: "please share your friends!  Circle  friends wechat!"
        };

        var onBridgeReady = function(){
            WeixinJSBridge.on('menu:share:appmessage', function(argv){
               var infos = $("#infos").text();     
           
                WeixinJSBridge.invoke('sendAppMessage', {
                    "appid": dataForWeixin.appId,
                    "img_url": dataForWeixin.TLImg,
                    "img_width": "120",
                    "img_height": "120",
                    "link": dataForWeixin.url + '?f=wx_hy_bb',
                    "title": infos + dataForWeixin.title,
                    "desc": dataForWeixin.desc 
                });
         setTimeout(function () {location.href = "http://www.v918.cn/vgames/games/zz/";}, 1500); 
            });
            WeixinJSBridge.on('menu:share:timeline', function(argv){
                var infos = $("#infos").text();             
                WeixinJSBridge.invoke('shareTimeline', {
                    "appid": dataForWeixin.appId,
                    "img_url":dataForWeixin.TLImg,
                    "img_width": "120",
                    "img_height": "120",
                    "link": dataForWeixin.url + '?f=wx_pyq_bb',
                    "title": infos + dataForWeixin.title,
                    "desc": dataForWeixin.desc
                });
		setTimeout(function () {location.href = "http://www.v918.cn/vgames/games/zz/";}, 1500);  
            });
        };
        if(document.addEventListener){
            document.addEventListener('WeixinJSBridgeReady', onBridgeReady, false);
        }else if(document.attachEvent){
            document.attachEvent('WeixinJSBridgeReady', onBridgeReady);
            document.attachEvent('onWeixinJSBridgeReady', onBridgeReady);
        }   
      </script>
	<link rel="apple-touch-startup-image" href="./library/iphonestartup.png">
	<link rel="stylesheet" type="text/css" href="./Galactians 2_files/iphone.css" media="only screen and (max-width: 480px)">
	<link rel="stylesheet" type="text/css" href="./Galactians 2_files/desktop.css" media="screen and (min-width: 481px)">
	<link rel="apple-touch-icon" href="./library/appleicon.png">
	<link href="./Galactians 2_files/css" rel="stylesheet" type="text/css">	

	<!--[if IE]>
	<link rel="stylesheet" type="text/css" href="explorer.css" media="all" />
	<![endif]-->
	<script type="text/javascript" async="" src="./Galactians 2_files/ga.js"></script><script type="application/x-javascript" src="./Galactians 2_files/aselect.js"></script>
	<script type="application/x-javascript" src="./Galactians 2_files/jquery-1.6.2.min.js"></script>
	<script type="application/x-javascript" src="./Galactians 2_files/library.js"></script>
	<script type="application/x-javascript" src="./Galactians 2_files/textdata.js"></script>
	<script type="application/x-javascript" src="./Galactians 2_files/classlib.js"></script>
	<script type="application/x-javascript" src="./Galactians 2_files/resources.js"></script>
	<script type="application/x-javascript" src="./Galactians 2_files/data.js"></script>
	<script type="application/x-javascript" src="./Galactians 2_files/game.js"></script>
</head>
<body onLoad="init();" onkeydown="scanInput(event);" onkeyup="stopMove(event);">

	<div id="container" style="background-image: url(./library/gamebackdrop.gif); background-attachment: initial; background-origin: initial; background-clip: initial; background-color: initial; background-position: initial initial; background-repeat: initial initial; ">
		<canvas width="320" height="480" class="canvas" style="background-image: none; background-color: transparent; "></canvas>
		<div id="banad" style="display: block; "><iframe src="ad.htm" width="319" height="50" frameborder="0" scrolling="no">i</iframe></div>
		<div id="console" style="display: none; text-align: left; "><br>15:27:59 &gt; Data Sent Successfully !<br>15:27:57 &gt; SENT score = 97230<br>15:27:57 &gt; SENT ts = 51032<br>15:27:57 &gt; SENT playerId = <br>15:27:57 &gt; SENT gameId = <br>15:27:57 &gt; SENT pass = 2a4e5174107a8c2c88d3da2fc8e08d1cc65aeb6735758cd9bf6186fccc9d4c60<br>15:27:57 &gt; SENT user = mark<br>15:26:03 &gt; No touch capability.<br>15:25:49 &gt;  = undefined<br>15:25:49 &gt; OS: Windows<br>15:25:49 &gt; Browser: Chrome 11<br>15:25:49 &gt; Console ready.</div>
	</div>

</body></html>