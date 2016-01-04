
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>微时代管家</title>
    <link rel="icon" type="image/GIF" href="res/favicon.ico"/>
    <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1,  initial-scale=1, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <style>
        body, canvas, div {
            -moz-user-select: none;
            -webkit-user-select: none;
            -ms-user-select: none;
            -khtml-user-select: none;
            -webkit-tap-highlight-color: rgba(255, 255, 255, 255);
        }
        #sharebtn{
        	text-align:center;
        	position:absolute;
        	bottom:60px;
        	left:30%;
        	width:120px;
        	margin:auto;
        	z-index:999;
        	display:none;
        }
    </style>
</head>
<body style="padding:0; margin: 0; background: #FFF;">
<canvas id="gameCanvas" width="640" height="960"></canvas>
<div id="sharebtn">
	<a href="#" onClick="dp_share();">炫耀一下</a>
</div>
<script src="game.min.js"></script>
<script language=javascript>
		var mebtnopenurl = 'http://www.v918.cn/vgames/index.html';
		window.shareData = {
		        "imgUrl": "http://www.v918.cn/vgames/icon/wbk.png",
		        "timeLineLink": "http://www.v918.cn/vgames/games/wbk/index.html",
		        "tTitle": "挖鼻孔-软灵通",
		        "tContent": "挖鼻孔-软灵通，请关注软灵通:v918_cn"
		};
				
		function goHome(){
			window.location=mebtnopenurl;
		}
		function clickMore(){
			if((window.location+"").indexOf("f=zf",1)>0){
				window.location = "http://www.v918.cn/vgames/";
			 }
			 else{
				goHome();
			 }
		}
		function dp_share(){
			document.title ="神手啊，我居然挖中"+myData.score+"个鼻孔，来挑战我的极限吧！";
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
			<img width=100% src="http://www.v918.cn/vgames/games/wbk/share.png"
				style="position: fixed; z-index: 9999; top: 0; left: 0; display: "
				ontouchstart="document.getElementById('share').style.display='none';" />
		</div>
			<script type="text/javascript">
            var myData = { gameid: "wbk" };
			// var domain = ["oixm.cn", "hiemma.cn", "peagame.net"][parseInt(Math.random() * 3)];
			window.shareData.timeLineLink = "http://www.v918.cn/vgames";
			function dp_submitScore(score){
				myData.score = parseInt(score);
				myData.scoreName ="挖了"+score+"个鼻孔";
				if(score>0){
					if (confirm("你挖了"+score+"个鼻孔！敢不敢小伙伴们瞧瞧你的实力？请关注软灵通:v918_cn")){
						dp_share();
					}
				}
			}
			function onShareComplete(res) {
                if (localStorage.myuid && myData.score != undefined) {
                    setTimeout(function(){
                        // if (confirm("要将成绩提交到软灵通排行榜吗？")) {
                        //     window.location = "http://wx.9g.com/rank/submit2.jsp?gameid=" + myData.gameid + "&uid=" + localStorage.myuid + "&score=" + myData.score + "&scorename=" + encodeURIComponent(myData.scoreName);
                        // }
                        // else {
                            document.location.href = mebtnopenurl;
                        // }
                    }, 500);
                }
				else {
		        	document.location.href = mebtnopenurl;
				}
	        }
			</script>
			
<div id="ad_container" style="position: absolute;z-index:99;bottom:0px;text-align:center;width:100%;height:50px;overflow:hidden"></div>
</body>
</html>