<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<title>奇葩连连看-微时代管家</title>
<link type="text/css" href="js/game_base.css" rel="stylesheet" />
<script type="text/javascript" src="js/jquery-2.1.0.min.js"></script>
<script type="text/javascript">
var GID = "link";
var SCORE_LIMIT = 30;
</script>
<script type="text/javascript" src="js/game_base.js"></script>
<script type="text/javascript" src="js/createjs-2013.12.12.min.js"></script>
<script type="text/javascript" src="js/createjs_game.js"></script>
<script type="text/javascript" src="js/jquery.cookie.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript">
gjQipa.onGameStarted = function() {
	if (IS_REFFER) {
		$(".follow").animate({left:"-500px", opacity:0}, 500);
	}
	$(".moreGames").animate({bottom:"-100px", opacity:0}, 500);
}
gjQipa.onGameOver = function() {
	if (IS_REFFER) {
		$(".follow").animate({left:"0px", opacity:1}, 500);
	}
	$(".moreGames").animate({bottom:"10px", opacity:1}, 500);
}
</script>
<style type="text/css">
.follow {z-index:100; position:absolute; left:-500px; bottom:0px; width:20%; opacity:0;}
.follow img {width:100%}

.moreGames {
z-index:100;
position:absolute;
bottom:10px;
margin-left:auto;
margin-right:auto;
width:100%;
text-align:center;}

.moreGames a {
font: 11px Arial;
text-decoration: none;
background-color: #C0C0C0;
color: #FFFFFF;
padding: 2px 10px 2px 10px;
border-radius:8px;
-webkit-border-radius:8px;
}
</style>
</head>
<body>
<canvas id="stage">
奇葩连连看，有比你更奇葩的角色吗？如果你看到这行字，那建议你用苹果或者安卓手机在微信中玩。
</canvas>
<iframe id="lbFrame"></iframe>
<span class="closeIframe">X</span>
<script type="text/javascript">
if (IS_REFFER) {
	document.write("<div class='follow'><a href='" + FOLLOW_URL + "'><img src='img/follow.gif'></a></div>");
}
document.write("<div class='moreGames'><a href='" + GAME_LIST_URL + "'>更多游戏</a></div>");

</script>

 <div style="display:none">
<div style="display: none;"><script type="text/javascript" src="http://tajs.qq.com/stats?sId=36313548" charset="UTF-8"></script></div>

</body>
</html>