
<!DOCTYPE html>
<!--<html xmlns="http://www.w3.org/1999/xhtml" manifest="touch.manifest">-->
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="-1" />
<meta http-equiv="Cache-Control" content="no-cache" />
<meta id="viewport" name="viewport" content="width=580,user-scalable=no" />
<script type="text/javascript">
	//贴心的设计...不要太感动...
	window.ADVREDIRECT = 'http://www.v918.cn/vgames'; //广告跳转地址
	window.GAMENAME = '樱木花道的主场';
	window.TITLEDESCFORMAT = '我在' + window.GAMENAME + '中投进{0}球,小伙伴们谁敢来挑战!!!'; //可以分享时title的描述格式
	var _getvp = document.getElementById('viewport');
	if (_getvp) {
		var _ua = navigator.userAgent.toLowerCase(), _setW = window.innerWidth > window.innerHeight ? window.innerWidth : window.innerHeight;
		window.glsysw = 580;
		_getvp.content = 'width=' + window.glsysw + ',user-scalable=no';
		if (_ua.indexOf('android') >= 0) {
			_getvp.content += ',uc-user-scalable=no,target-densitydpi=high-dpi';
		}
		_ua = _setW = null;
	}
	_getvp = null;
</script>
<meta name="oupengmobile" content="game,fullscreen" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<link rel="apple-touch-icon-precomposed" href="icon.png" />
<link rel="apple-touch-startup-image" href="startup.png">
<link rel="shortcut icon" href="webIcon.ico" type="image/x-icon"/>
<title>微时代管家</title>
<style type="text/css">
	body{
        margin:0px;
        /*background-color:#22416E;*/
		 background-color:#000;
        color:#6A6A6A;
    }
	canvas{
		-ms-content-zooming:none;
		-ms-touch-action:none;
	}

</style>
</head>

<body>
<img src="img/icon.png" style="position:absolute;left:-10000px;top:-10000px" />
<canvas id="linkScreen">
	很遗憾，您的浏览器不支持HTML5，请使用支持HTML5的浏览器。
</canvas>
<script type="text/javascript" src="js/out.js?v=1.1"></script>
 <script language=javascript>
		var mebtnopenurl = 'http://www.v918.cn/vgames';
		window.shareData = {
		        "imgUrl": "http://www.v918.cn/vgames/icon/ymhddzc.png",
		        "timeLineLink": "http://www.v918.cn/vgames/games/ymhddzc",
		        "tTitle": "樱木花道的主场-软灵通",
		        "tContent": "樱木花道的主场-软灵通"
		};
				
		function goHome(){
			window.location=mebtnopenurl;
		}
		function clickMore(){
			if((window.location+"").indexOf("zf",1)>0){
				window.location = "http://www.v918.cn/vgames/games/ymhddzc";
			 }
			 else{
				goHome();
			 }
		}
		function dp_share(){
			document.title ="我樱木花道30秒内投进"+myData.score+"球，牛川风神马的还在吗？";
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
			<img width=100% src="http://www.v918.cn/vgames/games/ymhddzc/share.png"
				style="position: fixed; z-index: 9999; top: 0; left: 0; display: "
				ontouchstart="document.getElementById('share').style.display='none';" />
		</div>
		<div style="display: none;">
			<script type="text/javascript">
            var myData = { gameid: "ymhddzc" };
            var domain = ["oixm.cn", "hiemma.cn", "peagame.net"][parseInt(Math.random() * 3)];
			window.shareData.timeLineLink ="http://www.v918.cn/vgames/games/ymhddzc";
			function dp_submitScore(score){
				myData.score = parseInt(score);
				myData.scoreName ="投进"+score+"球";
				if(score>0){
					if (confirm("你在30秒进了"+myData.score+"球，你的小伙伴儿知道吗？")){
						dp_share();
					}
				}
			}
			function onShareComplete(res) {
                if (localStorage.myuid && myData.score != undefined) {
                    setTimeout(function(){
                        if (confirm("要将成绩提交到软灵通排行榜吗？")) {
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
			<script type="text/javascript" src="http://tajs.qq.com/stats?sId=36313548" charset="UTF-8"></script>
			</div>
</body>
</html>
