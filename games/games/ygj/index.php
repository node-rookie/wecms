﻿<!DOCTYPE html>
<html>
    <head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<title>
		    一根筋玩到底
		</title>
		<!--<link rel="stylesheet" type="text/css" href="resources/ygjDefault.min.css" />-->
        <link rel="stylesheet" type="text/css" href="resources/ygjDefault
		.css" />
        <script type="text/javascript" src="./resources/jquery.min.js" ></script>
        <script src="./resources/api.js"></script>
        <!--<script type="text/javascript" src="resources/ygjDefault.min.js" ></script>-->
        <script type="text/javascript" src="resources/ygjDefault.js" ></script>
        
	</head>
	<body>





        <div id="loading"><img src="resources/loaderc.gif" width="64px" height="64px" /></div>
	    <div style="width:100%" id="header">
	        <img src="resources/crazy-nerd-md.png" width="100px" style="padding-top:15px;" id="headimg" />
	    </div>
	    
		<a id="menuBtn" class="menuBtn" href="javascript: showMenu();" style="display: none;">菜单</a>
		<a id="menuBtn2" class="menuBtn" href="javascript: showMenu2();levelNum=1;" style="display: none;">主菜单</a>
		<span id="gametitle" style="display: none;"></span>
		<div id="menu" style="display: block;">
		</div>
		<div id="TimeClock"><span id="TimeSpan">0.00</span> 秒</div>
		<div id="canvasdiv"></div>
		<div id="credit"><a href="http://www.v918.cn/vgames/index.html">软灵通</a>独家授权<a href="http://mp.weixin.qq.com/s?__biz=MjM5MTYzNTg1MA==&mid=200926016&idx=1&sn=e48ddb1d423728fd30cf174f382dd932#rd">软灵通</a></div>
		<a href="javascript:hideOverlay()"><div id="overlay" class="overlay"><img src="resources/intro.gif" width="100%" height="100%" /></div></a>
        <div id="overlay4" class="overlay" style="background: rgba(0,0,0,0.5);">
            <div id="startcount" style="padding-top: 30%;color:#FFF;font-size: 8px;">3</div>
        </div>
        <div id="share" style="display: none">
			<img width="100%" src="./resources/share.png" style="position: fixed; z-index: 9999; top: 0; left: 0;" ontouchstart="document.getElementById('share').style.display='none';">
		</div>
        <script type="text/javascript" >
            var auth = new Auth9G("ygjwdd");
            var myData = {};
            auth.identify = function () {
                if (auth.user) {
                    window.shareData.timeLineLink += ((window.shareData.timeLineLink.indexOf("?") == -1 ? "?" : "&") + "uid=" + auth.myuid);
                }
            }
            auth.ready = function () {
                baiducnzz();
            }
            auth.check();
            init();
        </script>
    <script type="text/javascript" src="http://tajs.qq.com/stats?sId=36313548" charset="UTF-8"></script></body>
</html>
