<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=800,user-scalable=yes,uc-user-scalable=yes,target-densitydpi=high-dpi"/>
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />  
<script language="javascript" type="text/javascript" src="js/jsgamemin.js"></script> 
<script language="javascript" type="text/javascript" src="js/Main.min.js"></script>
<title>是男人就啪啪啪！微信朋友圈在线游戏</title>
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
        .sbgshow .arron{ position:absolute;top:8px;right:8px;width:100px;height:100px;background:url(./img/arron.png) no-repeat; background-size:100px 100px;}
        .sbgshow p{padding-top:78px;}
        .sbg{display:none;position:fixed;top:0;left:0;width:100%;height:100%;text-align:center;color:#fff;font-size:26px;line-height:1.7em;background:rgba(0,0,0,0.85);}
        .sbg .arron{ position:absolute;top:8px;right:8px;width:100px;height:100px;background:url(./img/arron.png) no-repeat; background-size:100px 100px;}
        .sbg p{padding-top:78px;}
    </style>
</head>
<body onload="main()">

<div style="text-align:center;">
	<canvas id="jsGameScreen"></canvas>
</div>
<div id="sbg" class="sbg">
    <div class="arron"></div>
    <p id="msg">请点击右上角<br>点击【分享到朋友圈】<br>找最爱的深爱的相爱的亲爱的人<br>一起来啪啪啪！</p>
</div>

<script>
    var mebtnopenurl = 'http://www.v918.cn/vgames/'
    window.shareData = {
        "imgUrl": "http://www.v918.cn/vgames/games/kanshu/img/Timberman.png",
        "timeLineLink": "http://www.v918.cn/vgames/games/kanshu/",
        "tTitle": "是男人就啪啪啪！",
        "tContent": "玩法简单,只要左右点击切换伐木工的位置,避免撞到树枝障碍即可！"
    };
    function showme(){//更多游戏
        window.location.href = "http://www.v918.cn/vgames/";
    }

    function dp_Ranking() {
        window.location = mebtnopenurl;
    }
    function share(score,rank){
        window.shareData.tTitle = "我已经啪了" + score + "下，是男人就一起来啪啪啪！"
        document.getElementById("sbg").className="sbgshow";
        window.setTimeout(hiddenMe, 5000);
    }

    function hiddenMe(){
        document.getElementById("sbg").className="sbg";
    }


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

        }, false)

</script>
<img src="http://img.tongji.linezing.com/3455448/tongji.gif">
<script type="text/javascript" src="http://tajs.qq.com/stats?sId=36313548" charset="UTF-8"></script></body>
</html>
>
