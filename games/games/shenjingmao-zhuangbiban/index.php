﻿
<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


    <meta charset="utf-8">
    <title>围住神经猫2 装逼版</title>
    <meta name="viewport" content="width=device-width,initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <meta name="full-screen" content="true">
    <meta name="screen-orientation" content="portrait">
    <meta name="x5-fullscreen" content="true">
    <meta name="360-fullscreen" content="true">
    

    <style>
        body {
            text-align: center;
            background: #000000;
            padding: 0;
            border: 0;
            margin: 0;
            height: 100%;
        }

        html {
            -ms-touch-action: none; /* Direct all pointer events to JavaScript code. */
        }
        .sbgshow{display:block;position:fixed;top:0;left:0;width:100%;height:100%;text-align:center;color:#fff;font-size:30px;line-height:1.7em;background:rgba(0,0,0,0.85);}
        .sbgshow .arron{ position:absolute;top:8px;right:8px;width:100px;height:100px;background:url(img/arron.png) no-repeat; background-size:100px 100px;}
        .sbgshow p{padding-top:78px;}
        .sbg{display:none;position:fixed;top:0;left:0;width:100%;height:100%;text-align:center;color:#fff;font-size:26px;line-height:1.7em;background:rgba(0,0,0,0.85);}
        .sbg .arron{ position:absolute;top:8px;right:8px;width:100px;height:100px;background:url(img/arron.png) no-repeat; background-size:100px 100px;}
        .sbg p{padding-top:78px;}
        #myfav{display: none;}
    </style>

    <style type="text/css">.app2{position:fixed;z-index:1000;left:0;top:0; width:100%;padding:5px 12px;color:#fff;background:rgba(0,0,0,0.5);}.app2 .a{font-size:18px;font-weight:bold;padding-bottom:4px;}.app2 .b{font-size:10px;}.app2 .load{float:left;background:#f66;color:#fff;font-size:16px;margin-top:4px;padding:7px 14px;border-radius:5px;}
    </style>
    <style>
        .fn-clear{zoom:1}.fn-clear:after{visibility:hidden;display:block;font-size:0;content:" ";clear:both;height:0}
 .img-responsive {
			display: block;
			width: 45px;
			height: 45px;
			margin-right: 5px;
			float: left;
		}
 #J-banner{
        	  position: fixed;
        	  line-height: 50 px;
        	  top:0;
        	  width: 100%;
        	  border-bottom: 1px solid #262932;
box-shadow: 0px 0 3px rgba(0,0,0,0.5);
background: #3e444e;
opacity: 0.88;
background: -webkit-linear-gradient(top,#454B56,#393F48);
background: -moz-linear-gradient(top,#454B56,#393F48);
background: -o-linear-gradient(top,#454B56,#393F48);
background-image: -ms-linear-gradient(#454B56,#393F48);
padding: 5px;
        }
        #J-banner p{
        	color: #fff;
        	font-size: 14 px;
        	line-height: 1.5;
        	float: left;
        	margin: 0;
        }
        #J-downBtn{
        	float: right;
        	display: block;
margin-right: 5px;
margin-bottom: 0;
font-weight: normal;
text-align: center;
vertical-align: middle;
cursor: pointer;
background-image: none;
border: 1px solid transparent;
white-space: nowrap;
padding: 12px;
font-size: 14px;
line-height: 1.5;
border-radius: 2px;
-webkit-user-select: none;
-moz-user-select: none;
-ms-user-select: none;
user-select: none;
box-shadow: inset 0 -2px 0 rgba(0,0,0,0.15);
transition: background .3s ease-in-out 0s;
color: white;
background-color: #ff5f5f;
border-color: #ff4545;
        }</style>

</head>
<body style="padding: 0px; border: 0px; margin: 0px;">
<div style="display:inline-block;width:100%; height:100%;margin: 0 auto; background: black; position:relative;" id="gameDiv">
    <canvas id="gameCanvas" width="480" height="800" style="width: 480px; height: 800px; background-color: rgb(0, 0, 0);"></canvas>
</div>
<div id="myfav">
</div>
<div id="sbg" class="sbg">
    <div class="arron"></div>
    <p id="msg">请点击右上角<br>点击【分享到朋友圈】<br>神经猫和他的好基友邀请你。</p>
</div>

<div style="display: none">
</div>


<script>var document_class = "GameApp";</script><!--这部分内容在编译时会被替换，要修改文档类，请到工程目录下的egretProperties.json内编辑。-->
<script src="http://www.v918.cn/vgames/games/shenjingmao-zhuangbiban/jquery.min.js"></script>
<script src="http://www.v918.cn/vgames/games/shenjingmao-zhuangbiban/egret_loader.js"></script>
<script src="http://www.v918.cn/vgames/games/shenjingmao-zhuangbiban/game-min-07263.js"></script>

    
<script>
    window.shareData = {
        "imgUrl": "http://www.v918.cn/vgames/games/shenjingmao-zhuangbiban/logo.png",
        "timeLineLink": "http://www.v918.cn/vgames/games/shenjingmao-zhuangbiban/",
        "tTitle": "围住神经猫和他的好基友，臣妾做不到啊，一步装逼的大神你们过时了！",
        "tContent": "神经猫和他的好基友邀请你。"
    };
    function showme(){
        window.location.href="http://www.v918.cn/vgames/";
    }
    function share(n , m){
        if(m == 0){
            document.title = window.shareData.tTitle = "围住神经猫2-围住神经猫和他的好基友，你不来看看？"
        }
        if(m == 1){
            document.title = window.shareData.tTitle = "我用了"+n+"步围住神经猫和他的好基友！击败"+(100-n)+"%的人，你能超过我吗？"
        }
        if(m == 2){
            document.title = window.shareData.tTitle = "围住神经猫和他的好基友，臣妾做不到啊，一步装逼的大神你们过时了！"
        }
        document.getElementById("sbg").className="sbgshow";
        window.setTimeout(hiddenMe, 5000);
        $("#myfav").css("display","none");
        _hmt.push(['_trackEvent', 'SHARE', 'wechat']);

        ga('send', 'event', 'sns', 'share', 'wechat-sjm2-zb');

    }

    function hiddenMe(){
        document.getElementById("sbg").className="sbg";
    }

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
		
    egret_h5.startGame();


    function entergame(){
        // 原来显示广告的代码
        // $("#myfav").css("display","block");
    }
	
	var helptime=0;
	function help(){
		helptime++;
		if(helptime==2||helptime==5){
            /*
			if(confirm("是不是被神经猫搞的快神经了？现在给你一次机会，关注软灵通并回复【神经猫怎么过】可以获得攻略，要不要现在就去看看？")){
				window.location="";
			}*/
		}
	}

	function dp_share(score){
		if(myscore>0){
			document.title = "抓住一只，又来一只，我用了"+score+"步围住神经猫和他的基友，玩过之后我整个人都精神了！你能超过我吗？"
		}
		else{
			document.title = "围住神经猫-根本停不下来，玩过之后我整个人都精神了！"
		}
		document.getElementById("share").style.display="";
		window.shareData.tTitle = document.title;
	}

</script>


		<div id="share" style="display: none">
			<img width="100%" src="http://www.v918.cn/vgames/games/shenjingmao-zhuangbiban/share.png" style="position: fixed;z-index:9999; top: 0; left: 0; display: " ontouchstart="document.getElementById(&#39;share&#39;).style.display=&#39;none&#39;;">
		</div>

		<div style="display: none;">
			<script type="text/javascript">
			function dp_submitScore(score){
				myscore=score;
				if(score<40){
					if (confirm("你花了"+score+"步围住神经猫和他的好基友！是不是和好基友分享下呢？")){
						dp_share(score);
					}
				}
			}
			function onShareComplete(res) {
                document.location.href = mebtnopenurl;
	        }
			</script>

<script>
function client_type(){
 var sUserAgent = navigator.userAgent.toLowerCase();

 var bIsIpad = sUserAgent.match(/ipad/i) == "ipad";  
 var bIsIphoneOs = sUserAgent.match(/iphone/i) == "iphone";
  var bIsAndroid = sUserAgent.match(/android/i) == "android";
  var bIsMidp = sUserAgent.match(/midp/i) == "midp";  
 var bIsUc7 = sUserAgent.match(/rv:1.2.3.4/i) == "rv:1.2.3.4";  
 var bIsUc = sUserAgent.match(/ucweb/i) == "ucweb";  
 var bIsAndroid = sUserAgent.match(/android/i) == "android";  
 var bIsKD = sUserAgent.match(/kindle/i) == 'kindle';
 var bIsBB = sUserAgent.match(/blackberry/i) == 'blackberry';
 var bIsWX = sUserAgent.match(/MicroMessenger/i)=='micromessenger';

 if (bIsWX){
 	return 'wechat';
 }else{
 	if (bIsIpad || bIsIphoneOs){
 	return 'ios';
 	}else{
 		if (bIsUc7 || bIsUc || bIsAndroid|| bIsKD || bIsBB){
 			return 'android';
 		}else{
 			return 'pc';
 		}
 	}
 }
}
ga('set', 'dimension1', client_type());
              ga('send', 'event', 'app', 'open', 'sjm2_zb');
ga('send', 'pageview');
</script>

<div style="display:none;">

</div>

<script type="text/javascript">
 var sUserAgent = navigator.userAgent.toLowerCase();  
 var bIsIpad = sUserAgent.match(/ipad/i) == "ipad";  
 var bIsIphoneOs = sUserAgent.match(/iphone/i) == "iphone";  
 var bIsMidp = sUserAgent.match(/midp/i) == "midp";  
 var bIsUc7 = sUserAgent.match(/rv:1.2.3.4/i) == "rv:1.2.3.4";  
 var bIsUc = sUserAgent.match(/ucweb/i) == "ucweb";  
 var bIsAndroid = sUserAgent.match(/android/i) == "android";  
 var bIsCE = sUserAgent.match(/windows ce/i) == "windows ce";  
 var bIsWM = sUserAgent.match(/windows mobile/i) == "windows mobile";
 var bIsKD = sUserAgent.match(/kindle/i) == 'kindle';
 var bIsBB = sUserAgent.match(/blackberry/i) == 'blackberry';
/*
function ios_launch(url){
	var url = encodeURIComponent(url);
 	window.location.href="itms-services://?action=download-manifest&url="+url;
}
*/
    if (!(bIsIpad || bIsIphoneOs || bIsMidp || bIsUc7 || bIsUc || bIsAndroid || bIsCE || bIsWM || bIsKD || bIsBB )){
              var imgs=[];
               var urls=[];
               var titles=[];
               var descs=[];
        }else{
            if(bIsIpad || bIsIphoneOs){
               //ios
              var imgs=['http://www.v918.cn/vgames/games/shenjingmao-zhuangbiban/cat_logo.png'];
               var urls=['http://www.v918.cn/vgames/'];
               var titles=['神经猫'];
               var descs=['根本停不下来-围住神经猫'];

//              var imgs=[];
//               var urls=[];
//               var titles=[];
//               var descs=[];
            }else{
               //other mobile
               var imgs=['http://www.v918.cn/vgames/games/shenjingmao-zhuangbiban/cat_logo.png'];
               var urls=['http://www.v918.cn/vgames/'];
               var titles=['神经猫'];
               var descs=['根本停不下来-围住神经猫'];
            }
    }

</script>


<script>
    var lang = navigator.language || navigator.userLanguage;
if (lang.substr(0, 3)== "en-"){
    window.location.href = 'http://www.v918.cn/vgames/games/shenjingmao-zhuangbiban/';
}
</script>

<div style="display: none">

</div>
<img src="http://img.tongji.linezing.com/3455448/tongji.gif">

</div></div><script type="text/javascript" src="http://tajs.qq.com/stats?sId=36313548" charset="UTF-8"></script></body></html>