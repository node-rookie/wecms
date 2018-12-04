<!DOCTYPE html> 
<html lang="en"> 
<head> 
  <title>一笔画 </title>
<link rel="stylesheet" href="static/add2home.css" />
<script type="text/javascript">var addToHomeConfig = {touchIcon:true};</script>
<script type="text/javascript" src="static/add2home2.js"></script>   
    <meta charset="utf-8" />
    <meta name="viewport" content="user-scalable=no, width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0,target-densitydpi=device-dpi"/>     
    <meta name="apple-mobile-web-app-capable" content="yes" /> 
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" /> 
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1"/>    
    <meta name="description" content="一笔画 Pathuku 手机游戏，免下载，即点即玩。安卓手机游戏,苹果手机小游戏" /> 
    <meta name="keywords" content=""/>       
    <script type="text/javascript" src="main.js?4"></script>
    <script src="http://libs.baidu.com/jquery/1.10.2/jquery.min.js"></script>    
    <script type="text/javascript">
        (function() {
            //override main
            var fnload=window.onload;
            window.onload=function() {
                var pathukuSettings={
                    comp: 0,
                    dp: 'mb',
                    handle: {}
                };
                fnload(pathukuSettings);
                var dvAdd=document.getElementById('adds');


                pathukuSettings.handle.g.ds=function() {
                    pathukuSettings.comp++;
                    if(pathukuSettings.comp>3) {
                        this.u3();
                        document.location.href=document.location.href+'';

                        return false;
                    }
                    return true;
                };
                pathukuSettings.handle.g.de=function(bShowAdds) {
                    //.da
                    //alert('bShowAdds'+bShowAdds);
                    if(bShowAdds) {
                        dvAdd.style.display='block';
                    } else {
                        dvAdd.style.display='none';
                        if(Math.random()>0.5) {
                            pathukuSettings.handle.g.Y4.da=25;
                            dvAdd.style.top=pathukuSettings.handle.ut+'px';
                        } else {
                            pathukuSettings.handle.g.Y4.da= -25;
                            dvAdd.style.top=(window.innerHeight-50)+'px';
                        }
                    }

                };
                pathukuSettings.handle.g.Y4.da= -25;
                dvAdd.style.top=(window.innerHeight-50)+'px';
                //pathukuSettings.handle.g.du(99999);
            }
        })();
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-7161351-8']);
  _gaq.push(['_trackPageview']);
  
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
  
  
  window.shareData = {
	        "imgUrl": "http://www.v918.cn/vgames/games/yibihua/460.jpg",
	        "timeLineLink": "http://www.v918.cn/vgames/games/yibihua/index.html",
	        "tTitle": "一笔画，一款简单又考验平面逻辑思维的游戏！",
	        "tContent": "一款简单又考验平面逻辑思维的游戏，操作简单，不过画的时候要一笔呵成。"
	    };
	    var mebtnopenurl = 'http://www.v918.cn/vgames/';


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
    <link type="text/css" rel="StyleSheet" href="style.css" />

<img src="http://img.tongji.linezing.com/3455448/tongji.gif">
  </head>
  <body  scroll="no">
    <div id="content" class="clsConatiner">    
    </div>
    <div id="adds" class="clsAdd" style="background-color:#080808;position:absolute;width:100%;z-index:234;display:none;">    
    </div>
  </body>
</html>
