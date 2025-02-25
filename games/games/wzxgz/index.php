<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>围住小鬼子</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1, maximum-scale=1,user-scalable=no,target-densitydpi=device-dpi"/>
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
        .shareGuide {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            text-align: center;
            color: #fff;
            font-size: 26px;
            line-height: 1.7em;
            background: rgba(0, 0, 0, 0.85);
        }

        .shareGuide .arrow {
            position: absolute;
            top: 8px;
            right: 8px;
            width: 100px;
            height: 100px;
            background: url(http://baby.ci123.com/yunqi/m/weixin/images/arron.png) no-repeat;
            background-size: 100px 100px;
        }

        #bdShareGuide .arrow {
            top: auto;
            bottom: 8px;
            transform: rotateX(180deg);
            -webkit-transform: rotateX(180deg);
        }

        .shareGuide p {
            position: absolute;
            left: 0;
            top: 90px;
            height: 140px;
            width: 100%;
        }

        .shareGuide .closeSG {
            position: absolute;
            top: 8px;
            left: 8px;
            font-size: 50px;
            color: #fff;
            text-decoration: none;
            outline: none;
        }

        #bdShareGuide p {
            top: auto;
            bottom: 90px;
        }
    </style>

    <script src="./js/jquery.min.js"></script>
</head>

<body>
<div style="display:inline-block;width:100%; height:100%;margin: 0 auto; background: black; position:relative;"
     id="gameDiv">
    <canvas id="gameCanvas" width="480" height="800" style="background-color: #000000"></canvas>
</div>

<div id="wxShareGuide" class="shareGuide">
    <div class="arrow"></div>
    <p>请点击右上角<br/>点击【分享到朋友圈】<br/>和好朋友一起去打小鬼子吧</p>
    <a href="javascript:" class="closeSG">×</a>
</div>

<div id="bdShareGuide" class="shareGuide">
    <div class="arrow"></div>
    <p>请点击右下角<br>点击【分享】<br>邀请好友去打小鬼子吧</p>
    <a href="javascript:" class="closeSG" onClick="$('#bdShareGuide').fadeOut(200)">×</a>
</div>

<script>var document_class = "GameApp";</script><!--这部分内容在编译时会被替换，要修改文档类，请到工程目录下的egretProperties.json内编辑。-->
<script src="./js/egret_loader.js"></script>
<script src="./js/game-min.js"></script>

<script type="text/javascript">
    var browser = {
        versions: function () {
            var u = navigator.userAgent, app = navigator.appVersion;
            return {
                trident: u.indexOf('Trident') > -1, //IE内核
                presto : u.indexOf('Presto') > -1, //opera内核
                webKit : u.indexOf('AppleWebKit') > -1, //苹果、谷歌内核
                gecko  : u.indexOf('Gecko') > -1 && u.indexOf('KHTML') == -1,//火狐内核
                mobile : !!u.match(/AppleWebKit.*Mobile.*/), //是否为移动终端
                iOS    : !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/), //ios终端
                Android: u.indexOf('Android') > -1 || u.indexOf('Linux') > -1, //android终端或者uc浏览器
                iPhone : u.indexOf('iPhone') > -1, //是否为iPhone或者QQHD浏览器
                iPad   : u.indexOf('iPad') > -1, //是否iPad
                webApp : u.indexOf('Safari') == -1, //是否web应该程序，没有头部与底部
                baidu  : u.indexOf('baidu') > -1,
                weixin : u.indexOf('MicroMessenger') > -1
            };
        }(),
        language: (navigator.browserLanguage || navigator.language).toLowerCase()
    };
    window.shareData = {
        "imgUrl"      : "http://www.v918.cn/vgames/icon/wzxgz.png",
        "timeLineLink": "http://www.v918.cn/vgames/game/wzxgz",
        "tTitle"      : "围住小鬼子，你抓住了几个战犯！",
        "tContent"    : "壮志饥餐胡虏肉，笑谈渴饮匈奴血！"
    };

    function share(n, m ,tag,txt) {
        if (m == 0) {
            document.title = window.shareData.tTitle = "围住小鬼子，你抓住了几个战犯！-新华社发布"
        }
        if (m == 1) {
            document.title = window.shareData.tTitle = "我用了" + n + "步抓住了鬼子" + txt + "，领先全国" + (99 - n) + "%的抗日英雄，小伙伴要加油哦！-新华社发布"
        }
        if (m == 2) {
            document.title = window.shareData.tTitle = "又让小鬼子" + txt + "给跑了，小伙伴快来帮我抓住战犯！-新华社发布"
        }
        
        window.setTimeout(hiddenMe, 5000);
        $("#wxShareGuide").css("display","block");        
    }

    function hiddenMe(){
        $("#wxShareGuide").css("display","none"); 
    }

    var xhurl = "http://www.v918.cn/vgames";

    function showme(){
        window.location.href = xhurl;     
    };

    var mebtnopenurl = "http://www.v918.cn/vgames";
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
</script>

<div style="display:none;">
 <script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?fa356a94bf5ae253b76fefa953bb56e4";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>

</div>

</body>
</html>