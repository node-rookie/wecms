﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />  
<link rel="stylesheet" type="text/css" href="css/css3.css?v=20140614"/>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/createjs.min.js"></script>
<script type="text/javascript" src="js/common.js?v=20140714"></script>
<title>大力射手  微信朋友圈在线游戏</title>
<script type="text/javascript">
		var _config = {}; _config['isSite'] = 'http://www.v918.cn/vgames/';_config["isCount"] = "http://www.v918.cn/vgames/";_config["isSites"] = "http://www.v918.cn/vgames/";
</script>
<style type="text/css">
#share-wx{
	background:rgba(0,0,0,0.8);
	position:absolute;top:0px;
	left:0px;
	width:100%;
	height:100%;
	z-index:10000;
	display:none;
}
#wx-qr{
	background:rgba(0,0,0,0.8);
	position:absolute;top:0px;
	left:0px;
	width:100%;
	height:100%;
	z-index:10000;
	display:none;
}
.lis{overflow: hidden;width: 100%;z-index: 99999;position: absolute;top:0;}
	.lis a{display: block;width:99.9%;color:#ffffff;font-size:14px;text-decoration: none;background:#606783;text-align: center;opacity: 0.8;line-height:30px;font-weight: bold;font-family:"微软雅黑"；}
	.lis a img{position: relative;top: 1px;}
</style>
</head>
<body>
<div class="lis">
		<div style="float: left;width:33.2%;"><a style="border-bottom: 3px solid #fd6766;" href="http://www.v918.cn/vgames/">游戏列表</a></div>
		<div style="float: left;width:34%;"><a style="border-bottom: 3px solid #04fece;" href="http://www.v918.cn/vgames/games/zuqiu">关卡版滚滚足球</a></div>
		<div style="float: left;width:33.2%;"><a style="width:100%;margin:0;border-bottom: 3px solid #fdcd01;" onclick="location.href=location.href;"><img width="15" src="http://www.v918.cn/vgames/games/sheqiu/wxgame/dlss/images/4.png">重玩</a></div>
	</div> 
<script type="text/javascript" src="js/code.js"></script>
<div class="wrap">
    <div class="P_layer start">
        <div class="P_layer loading" id="loading"><div class="f"></div><div class="P_layer fs"></div><div class="P_layer ft">0%</div></div>
    	<div class="box zoom">
            <img src="http://www.v918.cn/vgames/games/sheqiu/wxgame/dlss/images/bg.jpg" width="100%"/>
            <div class="P_layer footballtarget"></div>
            <div class="P_layer logo"></div>
            <div class="P_layer txt-star"></div>
            <div class="P_layer txt-1"></div>
            <div class="P_layer txt-2"></div>
            <div class="P_layer prize"></div>
        </div>
        <div class="P_layer cbox zoom">
                <div class="P_layer selecttype" id="selecttype">
                    <div class="P_layer t1"></div>
                    <div class="P_layer t2"></div>
                    <div class="P_layer t3"></div>
                </div>
                <div class="P_layer tip" style="zoom:0.99">开始游戏</div>
                <div class="P_layer hand"></div>
                <div class="P_layer halo"></div>
                <div class="P_layer football"></div>
                
                <div class="P_layer speedup">
                    <div class="P_layer txt"></div>
                    <div class="P_layer txt-s"><div class="num" style="zoom:0.99">5</div><div class="go" style="zoom:0.99">GO!</div><div class="ready" style="zoom:0.99">Ready!</div></div>
                    <div class="P_layer prosess1">
                        <span class="b"><span style="width:0%;"></span></span>
                    </div>
                    <div class="P_layer hand1"></div>
                </div>
        </div>
    </div>
    <div class="gaming">
        <div class="sky"></div>
    	<div class="P_layer box zoom">
            <div class="P_layer footballflightnum" style="zoom:0.99"><span class="num" style="zoom:0.99">0</span>km</div>
            <div class="P_layer football">
                <div class="shock"></div>
                <div class="shock-1"></div>
                <div class="shock-2"></div>
                <div class="ball"></div>
                <div class="fire"></div>
                <div class="P_layer condoms"></div>
            </div>
            <div class="P_layer superman"></div>
        </div>
    </div>
    <div class="P_layer gend">
    	<div class="box zoomh">
        	<div class="P_layer yuan"></div>
        	<div class="P_layer football"></div>
        	<div class="P_layer xh"></div>
            <div class="P_layer t1"></div>
            <div class="P_layer t2">
            	<div class="txt"><span style="zoom:0.99">你创造了</span><b style="zoom:0.99">3200km</b></div>
            </div>
            <div class="P_layer t3"></div>
            
            <div class="P_layer c2" onclick="goHome();"></div>            
            <div class="P_layer b3"></div>
        </div>
    </div>
</div>
<audio src="audio/2.mp3" preload="auto"></audio>
<div class="sceentip" style="zoom:0.99">为了给您提供最佳游戏体验，请竖屏体验吧！~</div>
<script type="text/javascript">
var _smq = _smq || [];
_smq.push([new Date()]);
_smq.push(['pageview']);
</script>
<script type="text/javascript">
  var _gaq = _gaq || [];
 // _gaq.push(['_setAccount', 'UA-29156015-1']);
  _gaq.push(['_addOrganic', 'soso', 'w']);
  _gaq.push(['_addOrganic', 'sogou', 'query']);
  _gaq.push(['_addOrganic', 'yodao', 'q']);
  _gaq.push(['_trackPageview']);
</script>
<script language=javascript>
		var mebtnopenurl = 'http://www.v918.cn/vgames/';
		function goHome(){
			window.location=mebtnopenurl;
		}
		function dp_share(){
			document.title = "简直不敢相信，我一下射出"+myscore+"km，你敢来挑战吗？";
			document.getElementById("share").style.display="";
			$("#infos").html(document.title);
		}
		function dp_Ranking(){
			window.location=mebtnopenurl;
		}
		</script>
	 		<div id=share style="display: none">
			<img width=100% src="http://www.v918.cn/vgames/games/sheqiu/wxgame/dlss/images/share.png" style="position: fixed;z-index:9999; top: 0; left: 0; display: " ontouchstart="document.getElementById('share').style.display='none';"/>
		</div>
		<div style="display: none;">
		<script type="text/javascript">
		var myData = {};
		function dp_submitScore(score){
			myscore=score;
			myData.score = score;
			myData.scoreName = score+"km";
			if(score>1000){
				dp_share();
				if (confirm("哇塞，这一射"+score+"km！要不要通知下小伙伴们呢？")){
					
				}
			}
		}
		</script>
		<div id="infos" style="display:none"></div>
<div style="display:none"><img src="http://img.tongji.linezing.com/3455448/tongji.gif"></div>
<script type="text/javascript" src="http://tajs.qq.com/stats?sId=36313548" charset="UTF-8"></script></body>
</html>