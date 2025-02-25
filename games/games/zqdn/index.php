
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>最强大脑</title>
    <link rel="icon" type="image/GIF" href="res/favicon.ico"/>
    <meta name="viewport" content="width=device-width, user-scalable=no"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="full-screen" content="yes"/>
    <meta name="screen-orientation" content="portrait"/>
    <meta name="x5-fullscreen" content="true"/>
    <meta name="360-fullscreen" content="true"/>
    <style>
        body, canvas, div {
            -moz-user-select: none;
            -webkit-user-select: none;
            -ms-user-select: none;
            -khtml-user-select: none;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        }
    </style>
</head>
<body style="padding:0; margin: 0; background: #F1C238;" >
<canvas id="gameCanvas" width="420" height="600"></canvas>

<script src="game.min.js"></script>
<script>
var VER = 9;
var PREFIX = 10;
function getDesc(score){
	var lineOne;
    if(score > 120*PREFIX)
        lineOne = "神啊！还能更高吗？！";
    else if(score > 90*PREFIX)
        lineOne = "牛人啊，你是传说中的专家吗？";
    else if(score > 70*PREFIX)
        lineOne = "哇塞！你已经逼近天才的水平了！";
    else if(score > 40*PREFIX)
        lineOne = "厉害！你已经超过大部分人了～";
    else if(score > 25*PREFIX)
        lineOne = "加油！你已经超过不少朋友了～";
    else if(score > 10*PREFIX)
        lineOne = "不错！你这么快就掌握技巧了！";
    else
        lineOne = "深呼吸，放松一下大脑，再来一次！";

	return lineOne;// + "\n据说真正的飞行员能拿到" + 200*PREFIX + "分";
}
</script>
<script language=javascript>
		var mebtnopenurl = 'http://www.v918.cn/vgames';
		window.shareData = {
		        "imgUrl": "http://www.v918.cn/vgames/icon/zqdn.png",
		        "timeLineLink": "http://www.v918.cn/vgames/games/zqdn/",
		        "tTitle": "最强大脑-软灵通",
		        "tContent": "最强大脑-软灵通"
		};
				
		function goHome(){
			window.location=mebtnopenurl;
		}
		function clickMore(){
			if((window.location+"").indexOf("f=zf",1)>0){
				window.location = "http://www.v918.cn/vgames";
			 }
			 else{
				goHome();
			 }
		}
		function dp_share(){
			document.title ="你了解自己的左右脑协调指数吗?我是"+myData.score+"分，你来试试吧!"
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
			<img width=100% src="share.png"
				style="position: fixed; z-index: 9999; top: 0; left: 0; display: "
				ontouchstart="document.getElementById('share').style.display='none';" />
		</div>
		<div style="display: none;">
			<script type="text/javascript">
            var myData = { gameid: "zqdn",score:0 };
			 var domain = ["", "", ""][parseInt(Math.random() * 3)];
			//window.shareData.timeLineLink = "http://"+ parseInt(Math.random()*100000) +"."+ myData.gameid +"."+domain+"/gamecenter.html?gameid=" + myData.gameid + (localStorage.myuid ? "&uid=" + localStorage.myuid : "");
			function dp_submitScore(score){
				myData.score = score;
				myData.scoreName ="获得"+score+"分";
				if(score>0){
					if (confirm("经测试你获得了"+score+"分！看看小伙伴的大脑能力如何？")){
						dp_share();
					}
				}
			}
			function onShareComplete(res) {
                if (localStorage.myuid && myData.score>0) {
                    setTimeout(function(){
                        if (confirm("要将成绩提交到软灵通排行榜吗？")) {
                          // window.location = "http://wx.9g.com/rank/submit2.jsp?gameid=" + myData.gameid + "&uid=" + localStorage.myuid + "&score=" + myData.score + "&scorename=" + encodeURIComponent(myData.scoreName);
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
			 
			</div>
</body>
</html>
