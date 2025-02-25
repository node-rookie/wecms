
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>每日游戏</title>
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
        .sbgshow .arron{ position:absolute;top:8px;right:8px;width:100px;height:100px;background:url(img/arron.png) no-repeat; background-size:100px 100px;}
        .sbgshow p{padding-top:78px;}
        .sbg{display:none;position:fixed;top:0;left:0;width:100%;height:100%;text-align:center;color:#fff;font-size:26px;line-height:1.7em;background:rgba(0,0,0,0.85);}
        .sbg .arron{ position:absolute;top:8px;right:8px;width:100px;height:100px;background:url(img/arron.png) no-repeat; background-size:100px 100px;}
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
<script>var document_class = "GameApp";</script><!--这部分内容在编译时会被替换，要修改文档类，请到工程目录下的egretProperties.json内编辑。-->
<script src="js/jquery.min.js"></script>
<script src="js/egret_loader.js"></script>
<script src="js/game-min-07263.js"></script>
<script type="text/javascript">

    egret_h5.startGame();
</script>
<script language=javascript>
		var mebtnopenurl = 'http://www.v918.cn/vgames';
		window.shareData = {
		        "imgUrl": "http://www.v918.cn/vgames/icon/blglez.png",
		        "timeLineLink": "http://www.v918.cn/vgames/games/blglez",
		        "tTitle": "帮龙叔捞儿子-每日游戏",
		        "tContent": "帮龙叔捞儿子-每日游戏"
		};
				
		function goHome(){
			window.location=mebtnopenurl;
		}
		function clickMore(){
			if((window.location+"").indexOf("zf",1)>0){
				window.location = "http://www.v918.cn/vgames/games/blglez";
			 }
			 else{
				goHome();
			 }
		}
		function dp_share(){
			if(myData.iswin==1){
				document.title ="我用"+myData.score+"颗药拯救了房祖名和柯震东！抵制毒品的决心超过了全国"+(100-myData.score)+"%的人！";
			}else{
				document.title ="捞儿子-拯救房祖名和柯震东！苦海无涯，回头是岸！"
			}
			document.getElementById("share").style.display="";
			window.shareData.tTitle = document.title;
		}
		function dp_Ranking(){
			window.location=mebtnopenurl;
		}

		function showAd(){
		}
		function hideAd(){
		}
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
		</script>
		<div id=share style="display: none">
			<img width=100% src="http://www.v918.cn/vgames/games/blglez/share.png"
				style="position: fixed; z-index: 9999; top: 0; left: 0; display: "
				ontouchstart="document.getElementById('share').style.display='none';" />
		</div>
		<div style="display: none;">
			<script type="text/javascript">
            var myData = { gameid: "blglez" };
			 var domain = ["oixm.cn", "hiemma.cn", "peagame.net"][parseInt(Math.random() * 3)];
			window.shareData.timeLineLink ="http://www.v918.cn/vgames/games/blglez";
			function dp_submitScore(score,iswin){
				myData.score = score;
				myData.iswin = iswin;
				myData.scoreName ="共同"+score+"颗药";
				if(iswin==1){
					if (confirm("你用了"+score+"颗药拯救了房祖名与柯震东,让小伙伴们也来拯救吧!")){
						dp_share();
					}
				}
			}
			function onShareComplete(res) {
                if (localStorage.myuid && myData.score != undefined&&myData.iswin==1) {
                    setTimeout(function(){
                        if (confirm("要将成绩提交到每日游戏排行榜吗？")) {
                            window.location = "http://www.v918.cn/vgames/";
                        }
                        else {
                            document.location.href = mebtnopenurl;
                        }
                    }, 500);
                }
				else {
		        	document.location.href = mebtnopenurl;
				}
	        }
			</script>
			<div style="display: none;">
				<script type="text/javascript">var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F0ae524064813b8dc07ece5ce724a7b04' type='text/javascript'%3E%3C/script%3E"));</script>
				<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_2947366'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s5.cnzz.com/stat.php%3Fid%3D2947366' type='text/javascript'%3E%3C/script%3E"));</script>
			</div>

</body>
</html>