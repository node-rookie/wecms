﻿
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>围住神经猫2-升级版</title>
    <meta name="viewport"
          content="width=device-width,initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>

    <meta name="full-screen" content="true"/>
    <meta name="screen-orientation" content="portrait"/>
    <meta name="x5-fullscreen" content="true"/>
    <meta name="360-fullscreen" content="true"/>
    

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
        .sbgshow .arron{ position:absolute;top:8px;right:8px;width:100px;height:100px;background:url(static/images/arron.png) no-repeat; background-size:100px 100px;}
        .sbgshow p{padding-top:78px;}
        .sbg{display:none;position:fixed;top:0;left:0;width:100%;height:100%;text-align:center;color:#fff;font-size:26px;line-height:1.7em;background:rgba(0,0,0,0.85);}
        .sbg .arron{ position:absolute;top:8px;right:8px;width:100px;height:100px;background:url(static/images/arron.png) no-repeat; background-size:100px 100px;}
        .sbg p{padding-top:78px;}
        #myfav{display: none;}
    </style>

    <style type="text/css">.app2{position:fixed;z-index:1000;left:0;top:0; width:100%;padding:5px 12px;color:#fff;background:rgba(0,0,0,0.5);}.app2 .a{font-size:18px;font-weight:bold;padding-bottom:4px;}.app2 .b{font-size:10px;}.app2 .load{float:left;background:#f66;color:#fff;font-size:16px;margin-top:4px;padding:7px 14px;border-radius:5px;}
    </style>

</head>
<body>
<div style="display:inline-block;width:100%; height:100%;margin: 0 auto; background: black; position:relative;"
     id="gameDiv">
    <canvas id="gameCanvas" width="480" height="800" style="background-color: #000000"></canvas>
</div>
<div id="myfav">
</div>
<div id="sbg" class="sbg">
    <div class="arron"></div>
    <p id="msg">请点击右上角<br />点击【分享到朋友圈】<br />神经猫和他的好基友邀请你。</p>
</div>


<script>var document_class = "GameApp";</script><!--这部分内容在编译时会被替换，要修改文档类，请到工程目录下的egretProperties.json内编辑。-->
<script src="static/js/jquery.min.js?v=34234"></script>
<script src="static/js/egret_loader.js"></script>
<script src="static/js/game-min-07263.js"></script>

<script>
    window.shareData = {
        "imgUrl": "./static/images/icon.png",  //分享给好友时的图标地址
        "timeLineLink": "http://www.v918.cn/vgames/shenjingmao2/", //分享时的url
        "tTitle": "围住神经猫2-升级版-围住神经猫和他的好基友，臣妾做不到啊，一步装逼的大神你们过时了！",
        "tContent":"神经猫和他的好基友邀请你。"
    };
    function showme(){
        window.location.href="http://www.v918.cn/vgames/";    //点击更多跳转地址
    }
    function share(n , m){
        if(m == 0){
            document.title = window.shareData.tTitle = "围住神经猫2-升级版-围住神经猫和他的好基友，你不来看看？"
        }
        if(m == 1){
            document.title = window.shareData.tTitle = "我用了"+n+"步围住神经猫和他的好基友！击败"+(100-n)+"%的人，你能超过我吗？"
        }
        if(m == 2){
            document.title = window.shareData.tTitle = "围住神经猫2-升级版-围住神经猫和他的好基友，臣妾做不到啊，一步装逼的大神你们过时了！"
        }
        document.getElementById("sbg").className="sbgshow";
        window.setTimeout(hiddenMe, 5000);
        $("#myfav").css("display","none");
    }

    function hiddenMe(){
        document.getElementById("sbg").className="sbg";
    }

    var mebtnopenurl = 'http://www.v918.cn/vgames';


		document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
		    
		    WeixinJSBridge.on('menu:share:appmessage', function(argv) {
		        WeixinJSBridge.invoke('sendAppMessage', {
		            "img_url": window.shareData.imgUrl,
		            "link": window.shareData.timeLineLink,
		            "desc": window.shareData.tContent,
		            "title": window.shareData.tTitle
		        }, onShareComplete);
		    });

		    WeixinJSBridge.on('menu:share:timeline', function(argv) {
		        WeixinJSBridge.invoke('shareTimeline', {
		            "img_url": window.shareData.imgUrl,
		            "img_width": "640",
		            "img_height": "640",
		            "link": window.shareData.timeLineLink,
		            "desc": window.shareData.tContent,
		            "title": window.shareData.tTitle
		        }, onShareComplete);
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
			if(confirm("是不是被神经猫搞的快神经了？现在给你一次机会，关注我们并回复【神经猫怎么过】可以获得攻略，要不要现在就去看看？")){
				window.location="http://www.v918.cn/vgames/";
			}
		}
	}

	function dp_share(score){
		if(myscore>0){
			document.title = "抓住一只，又来一只，我用了"+score+"步围住神经猫和他的基友，玩过之后我整个人都精神了！你能超过我吗？"
		}
		else{
			document.title = "围住神经猫2-升级版-根本停不下来，玩过之后我整个人都精神了！"
		}
		document.getElementById("share").style.display="";
		window.shareData.tTitle = document.title;
	}

</script>
		<div id=share style="display: none">
			<img width=100% src="static/images/share.png" style="position: fixed;z-index:9999; top: 0; left: 0; display: " ontouchstart="document.getElementById('share').style.display='none';">
		</div>

		<div style="display: none;">
			<script type="text/javascript">
			var myCRdata = {};
			var myCR = new CommonRank("sjm2");
			myCR.order="asc";
			if (myCR.isWeixin()) {
				if (myCR.check()) {
					if (myCR.is9Guser) {
						window.shareData.timeLineLink += ((window.shareData.timeLineLink.indexOf("?") == -1 ? "?" : "&") + "uid=" + myCR.myuid);
					}
				}
			}
			function dp_submitScore(score){
				myscore=score;
				
			}
			function onShareComplete(res) {
				
	        }
			</script>
<div style="display:none">
<!--这里填写统计代码-->
<script language="javascript" type="text/javascript" src="http://js.users.51.la/17197170.js"></script>
<noscript><a href="http://www.51.la/?17197170" target="_blank"><img alt="&#x6211;&#x8981;&#x5566;&#x514D;&#x8D39;&#x7EDF;&#x8BA1;" src="http://img.users.51.la/17197170.asp" style="border:none" /></a></noscript>
</div>
<script type="text/javascript" src="http://tajs.qq.com/stats?sId=36313548" charset="UTF-8"></script></body>
</html>