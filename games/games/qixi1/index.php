﻿
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta id="viewport" name="viewport" content="width=480,user-scalable=no,target-densitydpi=high-dpi" />
<script data-main="js/main2" src="js/require.js"></script>
<title>坚持住，牛郎！织女靠你了！</title>
<style type="text/css">
body{
margin:0px;
padding:0px;
overflow: hidden;
}
</style>
<script>
var product = 'other', ua = navigator.userAgent.toLowerCase();
if(ua.indexOf('micromessenger') != -1) {
    product = 'micromessenger';
}
var isbaidu = ua.match(/baidubrowser\/([\w\.]+)\s\(Baidu;\s(P\d)\s([\w\.]+)\)$/i);
if(isbaidu && isbaidu[2] != 'p2') {
    product = 'baidubrowser';
}
function submitScore(m,t){
    //console.log(['提交分数',m,t])
}

window.shareData = {
    "imgUrl": "http://www.v918.cn/vgames/games/qixi1/images/logo.png",
    "timeLineLink": "http://www.v918.cn/vgames/games/qixi1/",
    "tTitle": "坚持住，牛郎！织女靠你了！",
    "tContent": "帮助牛郎织女越过重重障碍。"
};

function shareGame(t){
    dp_share(t);
}

    var mebtnopenurl = 'http://http://www.v918.cn/vgames/';

    function goHome()
    {
      window.location =
        "http://www.v918.cn/vgames/games/qixi1/";
    }

    function onShareComplete(res)
    {
      // document.location.href = mebtnopenurl;
      document.getElementById("share").style.display="none";
    }


    document.addEventListener('WeixinJSBridgeReady', function onBridgeReady()
      {
        WeixinJSBridge.on('menu:share:appmessage', function(argv)
        {
          WeixinJSBridge.invoke('sendAppMessage',
          {
            "img_url": window.shareData.imgUrl,
            "link": window.shareData.timeLineLink,
            "desc": window.shareData.tContent,
            "title": window.shareData.tTitle
          }, onShareComplete);
        });

        WeixinJSBridge.on('menu:share:timeline',
          function(argv)
          {
            WeixinJSBridge.invoke('shareTimeline',
              {
                "img_url": window.shareData.imgUrl,
                "img_width": "640",
                "img_height": "640",
                "link": window.shareData.timeLineLink,
                "desc": window.shareData.tContent,
                "title": window.shareData.tTitle
              },
              onShareComplete);
          });
      },
      false);


    function dp_share(score)
    {
      if (score > 0)
      {
        
        text = "我帮牛郎坚持了" + score + "秒，织女没见到…你能超过我吗？";
      }
      else
      {
        document.title = "坚持住，牛郎！织女靠你了！"
      }
      document.getElementById("share").style.display="";
      window.shareData.tTitle = document.title;
    }



function showAd(){}
function hideAd(){}
</script>
</head>
<body>
<div style="text-align:center;" >
<canvas id="linkScreen">很遗憾，您的浏览器不支持HTML5，请使用支持HTML5的浏览器。</canvas>
</div>

<div id="share" style="display: none;">
    <img width=100% src="images/share.png" style="position: fixed;z-index:9999; top: 0; left: 0; display: " ontouchstart="document.getElementById('share').style.display='none';">
</div><img src="http://img.tongji.linezing.com/3455448/tongji.gif">
<script type="text/javascript" src="http://tajs.qq.com/stats?sId=36313548" charset="UTF-8"></script></body>
</html>