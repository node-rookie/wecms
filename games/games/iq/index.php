<!DOCTYPE html>

<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>古埃及对称填图智商测试，太邪门了</title>
<meta charset="utf-8">
<script src="http://www.v918.cn/vgames/games/iq/jquery.js"></script>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="target-densitydpi=320,width=640,user-scalable=no">
<script>

$(document).ready(function(){
  $("div.select").click(function(){
	var id = $(this).attr("id");
	var value = "";
	var cval = $("div#question").attr("class");
	if(cval === "first") {
	  $("div#question").attr("class", "second");
	  $("h1#answer1").text(id);
	} else if(cval === "second"){
	  $("div#question").attr("class", "third");
	  $("h1#answer2").text(id);
	  } else if(cval === "third"){
	  $("div#question").attr("class", "four");
	  $("h1#answer3").text(id);
	} else if(cval === "four"){
	  $("div#question").attr("class", "five");
	  $("h1#answer4").text(id);
	} else if(cval === "five"){
	  $("div#question").attr("class", "six");
	  $("h1#answer5").text(id);
	} else if (cval === "six"){
	  if($("h1#answer6").text().length > 0) {
		alert("请提交您的答案！");
		return false;
	  }
	  $("h1#answer6").text(id);
	  $("div#submit").show();
	  $("a#link").click();
	}
	return false;
 });
 $("a#link").click(function(){
   var text = $("h1.answer").text();
   var aws = "BDCHAF";
   var count = 0;
   if(text[0] == aws[0]){
	 count += 1;
   }
   if(text[1] == aws[1]){
	 count += 1;
   }
   if(text[2] == aws[2]){
	 count += 1;
   }
   if(text[3] == aws[3]){
	   count += 1;
   }
   if(text[4] == aws[4]){
	   count += 1;
   }
   if(text[5] == aws[5]){
	   count += 1;
   }
   var fen = Math.round(count/6 * 100)+52;
   $("div#question").attr("class", "iq_level");
   $("span#iq_val").text(fen);
   $("div#iq_level").show();
   $("div#submit").hide();
   $("div#share").show();
   return false;
 });
 $("#share").click(function(){
	$("#mask").show();
	$("#tip").show();
	
	return false;
 });
 $("#mask").click(function(){
	if($("#mask").is(":visible")){
	  $("#mask").hide();
	  $("#tip").hide();
	}
	return false;
 });
});
var mebtnopenurl = 'http://www.v918.cn/vgames';

document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
	var domains = ['www.v918.cn/vgames','www.v918.cn/vgames','www.v918.cn/vgames','www.v918.cn/vgames'];
	var domain = domains[new Date().getTime()%4];
    window.shareData = {
        "imgUrl": "http://www.v918.cn/vgames/games/iq/logo.png",
        "timeLineLink": "http://www.v918.cn/vgames/games/iq/index.html",
        "tTitle": "准到爆的古埃及智商测试，太邪门了",
        "tContent": "通过空间知觉能力、观察能力、记忆力、思考能力、理解能力、注意力、判断力、推理能力、数的概念、语言能力、分析能力等丰富多样的智商测试，来充分了解你自己。来测测吧！"
    };
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
            "url": window.shareData.timeLineLink,
        }, function(res) {
       	 document.location.href = mebtnopenurl;
        });
    });
	
}, false)
</script>
<style type="text/css">
html, body { margin: 0; padding: 0; height: 100%; }
#wrapper { margin: 0 auto 0 auto; width: 640px; min-height: 90%; background: url(http://www.v918.cn/vgames/games/iq/0.png) repeat left top; font-family: "Microsoft YaHei", "WenQuanYi Micro Hei", sans-serif; }
#answer { background: url(http://www.v918.cn/vgames/games/iq/1.png) no-repeat left top; margin: 0 auto; width: 600px; height: 44px; margin-bottom: 50px; }
.first { background: url(http://www.v918.cn/vgames/games/iq/2.png) no-repeat left top; margin: 0 auto; width: 556px; height: 589px; }
.second { background: url(http://www.v918.cn/vgames/games/iq/3.png) no-repeat left top; margin: 0 auto; width: 556px; height: 589px; }
.third { background: url(http://www.v918.cn/vgames/games/iq/4.png) no-repeat left top; margin: 0 auto; width: 556px; height: 589px; }
.four { background: url(http://www.v918.cn/vgames/games/iq/5.png) no-repeat left top; margin: 0 auto; width: 556px; height: 589px; }
.five { background: url(http://www.v918.cn/vgames/games/iq/6.png) no-repeat left top; margin: 0 auto; width: 556px; height: 589px; }
.six { background: url(http://www.v918.cn/vgames/games/iq/7.png) no-repeat left top; margin: 0 auto; width: 556px; height: 589px; }
.iq_level { background: url(http://www.v918.cn/vgames/games/iq/8.png) no-repeat left top; margin: 0 auto; width: 556px; height: 589px; }
#hope { position: absolute; top: 280px; left: 50px; }
#content { width: 510px; height: 260px; margin: 0; padding: 10px; background-color: #e1e1e1; border: solid 2px; border-radius: 2px; font-size: 30px; font-weight: 600; color: #9a9a9a; }
#button { position: absolute; top: 540px; left: 100px; }
#button1 { position: absolute; top: 640px; left: 100px; }
#mask { position: absolute; top: 0; left: 0; width: 100%; height: 100%; display: none; background-color: #333; filter: alpha(Opacity=90); -moz-opacity: 0.9; opacity: 0.9; }
#tip { display: none; position: absolute; top: 10px; left: 10px; }
#name { height: 40px; font-size: 32px; }
.ys { color: #FF0; }
</style>
</head>
<body style="zoom: 1; ">
  <div id="wrapper">
      <div style="padding-top:50px;">
        <div id="answer">
          <h1 id="answer1" class="answer" style="color:white; margin-left:36px; margin-top: 2px; float:left;"></h1>
          <h1 id="answer2" class="answer" style="color:white; margin-left:60px; margin-top: 2px;float:left;"></h1>
          <h1 id="answer3" class="answer" style="color:white; margin-left:63px; margin-top: 2px;float:left;"></h1>
          <h1 id="answer4" class="answer" style="color:white; margin-left:63px; margin-top: 2px;float:left;"></h1>
          <h1 id="answer5" class="answer" style="color:white; margin-left:63px; margin-top: 2px; float:left;"></h1>
          <h1 id="answer6" class="answer" style="color:white; margin-left:63px; margin-top: 2px;float:left;"></h1>
        </div>
        <div style="clear:both;"></div>
      </div>
      <div id="question" class="first">
        <div id="" style="height:339px;">
          <div id="iq_level" style="display:none; margin: 0 auto 0 auto; width:420px; text-align: center;">
            <h1 style="color:white;">你的IQ智商测试结果是 <span id="iq_val"></span> 分</h1>
            <br>
               <h2>
                    <a style="color:#fff;font-size:40px;" href="http://www.v918.cn/vgames/"> 千万别点这里，万万不能点啊 </a>      
               </h2> 
          </div>
        </div> 
       
        <div style="margin: 0 auto; width:424px;">
            <div id="A" class="select" style="height:55px; width:90px; margin-right: 16px; margin-bottom: 53px; cursor:pointer; float:left;"></div>
            <div id="B" class="select" style="height:55px; width:90px; margin-right: 16px; margin-bottom: 53px; cursor:pointer; float:left;"></div>
            <div id="C" class="select" style="height:55px; width:90px; margin-right: 16px; margin-bottom: 53px; cursor:pointer; float:left;"></div>
            <div id="D" class="select" style="height:55px; width:90px; margin-right: 16px; margin-bottom: 53px; cursor:pointer; float:left;"></div>
            <div id="E" class="select" style="height:55px; width:90px; margin-right: 16px; margin-bottom: 53px; cursor:pointer; float:left;"></div>
            <div id="F" class="select" style="height:55px; width:90px; margin-right: 16px; margin-bottom: 53px; cursor:pointer; float:left;"></div>
            <div id="G" class="select" style="height:55px; width:90px; margin-right: 16px; margin-bottom: 53px; cursor:pointer; float:left;"></div>
            <div id="H" class="select" style="height:55px; width:90px; margin-right: 16px; margin-bottom: 53px; cursor:pointer; float:left;"></div>
            <div style="clear:both;"></div>
        </div>
      </div>
      <div id="submit" style="margin:0 auto; width:200px; display:none;"><a id="link" style="cursor:pointer;"><img src="./准到爆的古埃及智商测试，太邪门了_files/460" alt="submit"></a></div>
      <div id="hope"></div>  
      <div id="share" style="margin: 0 auto; width:416px; display:none;"><img src="http://www.v918.cn/vgames/games/iq/2000.png"></div>
      <div id="mask"></div>
      <div id="tip"><img src="http://www.v918.cn/vgames/games/iq/py.png"></div>
  </div>
<img src="http://img.tongji.linezing.com/3455448/tongji.gif">
</body></html>