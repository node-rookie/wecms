<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0035)http://www.v918.cn/vgames/game/fcl/ -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

 <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="target-densitydpi=320,width=640,user-scalable=no">
<title>测测你下半年的发财关键！</title>
<script type="text/javascript" src="./images/jquery.min.js"></script>
<script src="./images/jQueryRotateCompressed.js"></script>
<script type="text/javascript">
             var tit = "";
             var DFW = {
                 appId: "",
                 TLImg: "http://www.v918.cn/vgames/icon/fcl.jpg",
                 url: "http://www.v918.cn/vgames/games/fcl",
                 title: "测测你下半年的发财关键",
                 desc: "知道你是怎么发财的吗？测测就知道了"
             };
			 var mebtnopenurl = 'http://mp.weixin.qq.com/s?__biz=MjM5MTYzNTg1MA==&mid=200926016&idx=1&sn=e48ddb1d423728fd30cf174f382dd932#rd';
			 function goHome(){
			window.location=mebtnopenurl;
		}
             var onBridgeReady = function () {
                 WeixinJSBridge.on('menu:share:appmessage', function (argv) {
                     WeixinJSBridge.invoke('sendAppMessage', {
                         "appid": DFW.appId,
                         "img_url": DFW.TLImg,
                         "img_width": "120",
                         "img_height": "120",
                         "link": DFW.url,
                         "title": DFW.title + tit,
                         "desc": DFW.desc
                     });
                 });
                 WeixinJSBridge.on('menu:share:timeline', function (argv) {
                     WeixinJSBridge.invoke('shareTimeline', {
                         "appid": DFW.appId,
                         "img_url": DFW.TLImg,
                         "img_width": "120",
                         "img_height": "120",
                         "link": DFW.url,
                         "title": DFW.title + tit,
                         "desc": DFW.desc
                     });
                 });
             };
             if (document.addEventListener) {
                 document.addEventListener('WeixinJSBridgeReady', onBridgeReady, false);
             } else if (document.attachEvent) {
                 document.attachEvent('WeixinJSBridgeReady', onBridgeReady);
                 document.attachEvent('onWeixinJSBridgeReady', onBridgeReady);
             }
             </script>
<script type="text/javascript">
  $(document).ready(function(){
          var result=0;
          var result_message;
		   var result_messages;
		  $("#beginG").click(function(){
			$("#toptop").hide();
			$("#toptops").hide();
			$("#firstQ").removeAttr("class");
			$("#firstQ").attr("class", "question current");
		  });
          $(".options ul li").click(function(){
              var  node = $(this).parent().parent().parent();
              var next_node = $(node).next();

              $(this).parent().find("li").removeClass("selected");
              $(this).addClass("selected");

              if(next_node.hasClass("question")){
                  $(node).hide();
                  $(next_node).show();
              }else{
                  $(node).hide();
                  $.each($("li.selected"), function(index, value){
                      result = result + parseInt($(value).attr("data-score"));
                  });

                  if(result >= 10 && result <= 15){
                      result_message = "经测试您的发财关键是中乐透一夕致富。";
					  result_messages = "经测试我的发财关键是中乐透一夕致富。";
                  }

                  if(result >= 16 && result <= 20){
                      result_message = "经测试您的发财关键是购买理财产品。";
					  result_messages = "经测试我的发财关键是购买理财产品。";
                  }

                  if(result >= 21 && result <= 25){
                      result_message = "经测试您的发财关键是继续努力上班。";
					   result_messages = "经测试我的发财关键是继续努力上班。";
                  }

                  if(result >= 26 && result <= 30){
                      result_message = "经测试您的发财关键是找个有钱对象。";
					   result_messages = "经测试我的发财关键是找个有钱对象。";
                  }
				  
				  if(result >= 31 && result <= 35){
                      result_message = "经测试您的发财关键是遇上贵人。";
					  result_messages = "经测试我的发财关键是遇上贵人。";
                  }
				  
				  if(result >= 36 && result <= 40){
                      result_message = "经测试您的发财关键是回收外债。";
					  result_messages = "经测试我的发财关键是回收外债。";
                  }
				  
				  if(result >= 41 && result <= 45){
                      result_message = "经测试您的发财关键是加盟店盈利。";
					   result_messages = "经测试我的发财关键是加盟店盈利。";
                  }
				  
				  if(result >= 46 && result <= 50){
                      result_message = "经测试您的发财关键是收藏品买卖。";
					   result_messages = "经测试我的发财关键是收藏品买卖。";
                  }
				  
				  if(result >= 51 && result <= 55){
                      result_message = "经测试您的发财关键是开源节流。";
					  result_messages = "经测试我的发财关键是开源节流。";
                  }
				  
				  if(result >= 56 && result <= 60){
                      result_message = "经测试您的发财关键是股票获利。";
					  result_messages = "经测试我的发财关键是股票获利。";
                  }
				  
				  if(result >= 61 && result <= 65){
                      result_message = "经测试您的发财关键是投资房地产。";
					  result_messages = "经测试我的发财关键是投资房地产。";
                  }
				  
				  if(result >= 66 && result <= 70){
                      result_message = "经测试您的发财关键是自行创业。";
					   result_messages = "经测试我的发财关键是自行创业。";
                  }
				  result_message = result_message+"好牛<img src='img/1.gif' _moz_resizing='true'>";
                  $(".aside").append(result_message);
				  $("#infos").html(result_messages);
                  $(".header-title").hide();
                  $(".result").show();
              }
          });

          $(".prev a").click(function(){
              var node = $(this).parent().parent();
              var prev_node = $(node).prev();

              if(prev_node.hasClass("question")){
                  $(node).hide();
                  $(prev_node).show();
              }
          });
      });
	  var mask = function () {
                if (document.getElementById('mask').style.display == 'inline') {
                    document.getElementById('mask').style.display = 'none';
                    document.getElementById('tip').style.display = 'none';
                } else {
                    document.getElementById('mask').style.display = 'inline';
                    document.getElementById('tip').style.display = 'inline';
                }
            }

            var share = function () {
                mask();
            }
      </script>
	          <style type="text/css">
 body{
		padding:0;
          background: #000;

          background: url("img/bg.png") no-repeat #09080d;
          background-size: cover;
          margin: 0 auto;
          height: 100%;
      }

#ad {
    margin: 0 auto;
    text-align: center;
	overflow: hidden;
}
      .title{
          margin: 0 auto;
          width: 80%;
      }

      .title h2{
        background: #90ab8b;
        color: #fff;
        padding: 10px 0;
        text-align: center;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
        font-size: 24px;
        font-weight: normal;
          margin-bottom: 0;
		  margin-top: 10px;
      }

      .title-sub{
          padding: 10px 20px;
          color: #fff;
          text-align: center;
          /*border: 1px solid #b374b1;*/
          border-top: 0;
          border-bottom-left-radius: 10px;
          border-bottom-right-radius: 10px;
          margin: 0 auto;
          background: rgba(231, 231, 231, 0.2) none repeat scroll 0 0 !important;
          background: #e7e7e7;
          filter:Alpha(opacity=20);
		  font-size:24px;
      }
		.aside{
			padding: 50px 20px;
		}
      .question{
          width: 80%;
          margin: 0 auto;
          margin-top: 20px;
          display: none;
		  font-size:24px;
      }
		.box{
			width:80%;
			margin:20px auto;
			overflow:hidden;
			display: none;
		}
		.box ul{
          padding: 0;
		  margin:20px auto 0;
		  width: 138px;
		  overflow:hidden;
      }
      .box li{
          padding: 5px 15px;
          list-style-type: none;
      }

      .box li div{
          padding-left: 20px;
          padding-right: 20px;
		  font-size:24px;
      }
      .box li{
          border: 1px solid #8760a3;
          border-bottom-left-radius: 10px;
          border-bottom-right-radius: 10px;
          border-top-left-radius: 10px;
          border-top-right-radius: 10px;float: left;
          color: white;
          background:rgba(142, 99, 167, 0.6) none repeat scroll 0 0 !important;

          background:#8e63a7;
          filter:Alpha(opacity=60);
      }

      .box li{
          padding: 5px 0;
      }

      .box li.selected{
          background: #cf6271 !important;
      }
      .question-title{
          text-align: center;
          color: #fff;
      }

      .question:first-child, .question.current,.box.current{
          display: block;
      }
      .result{
          display:none;
      }

      .options ul{
          padding: 0;
      }
      .options li{
          margin: 20px 0;
          padding: 5px 15px;
          list-style-type: none;
      }

      .options li div{
          padding-left: 20px;
      }
      .options.button li{
          border: 1px solid #8760a3;
          border-bottom-left-radius: 10px;
          border-bottom-right-radius: 10px;
          border-top-left-radius: 10px;
          border-top-right-radius: 10px;
          width: 100%;
          color: white;
          background:rgba(142, 99, 167, 0.6) none repeat scroll 0 0 !important;

          background:#8e63a7;
          filter:Alpha(opacity=60);
      }

      .options.button li{
          padding: 5px 0;
      }

      .options li.selected{
          background: #cf6271 !important;
      }
      .prev{
          margin-top: 0;
          font-weight: 300;
          font-size: 12px;
          float: right;
          padding-bottom: 20px;
      }
      .prev a:link{
          color: #fff;
		  font-size:20px;
      }

      .tools-button{
          padding: 10px 0;
          color: #fff;
          text-align: center;
          margin: 0 auto;
          width: 80%;
          background:rgba(159, 66, 61, 0.3) none repeat scroll 0 0;
          background: #9f423d;
          filter:Alpha(opacity=30);
		  font-size:24px;
          border-bottom-left-radius: 10px;
          border-bottom-right-radius: 10px;
          border-top-left-radius: 10px;
          border-top-right-radius: 10px;

          margin-top: 30px;
          margin-bottom: 30px;

      }

      .share{
          background:rgba(49, 126, 172, 0.6) none repeat scroll 0 0;
          background: #317eac;
          filter:Alpha(opacity=60);
      }
            #tip {
                display: none;
                position: absolute;
                top: 0;
                left: 0;
            }
		 #tip img{width:100%;display: inline;}	
	#mask {
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		display: none;
		background-color: #333;
		-moz-opacity: 0.9;
		opacity: 0.9;
	}
.game{
display:inlineblock; 
margin:5px 0px; 
padding-left:20px;width:100%; 
font-size:30px; 
overflow:hidden; 
border-bottom:1px solid #fff; 
text-align:left;
}
</style>
</head>
 <body style="">
<div id="ceshuResult"></div>


 <div class="title header-title">
  <h2>测测你今年下半年的发财关键？</h2>
  <div class="title-sub" id="toptops">
尽管金钱不是衡量一个人成功与否的唯一标准，但在现今社会中，成功人士的口袋中缺钱的为数不多，也就是说，有钱在一定程度上已经与有作为画上了等号。也许你目前正处于锻炼自我、提高能力的阶段，虽有壮志，却无钱财，那你也不必着急嘛,来看一下您发财的关键是什么?
  </div>
</div>
<div class="box current" id="toptop">
	<img width="100%" src="./images/wenyao.jpg">
	<ul>
		<li id="beginG">
		  <div>开始测试</div>
		</li>
	</ul>
</div>
<div class="question " id="firstQ">
  <div class="question-title">
	  1.下面三种早餐组合，你更喜欢哪一种?
  </div>
  <div class="options button">
	<ul>
		<li data-score="1">
		  <div>A 煎蛋和火腿</div>
		</li>
		<li data-score="5">
		  <div>B 土司和橙汁</div>
		</li>
		<li data-score="7">
		  <div>C 鱼片粥和咸菜</div>
		</li>
	</ul>
  </div>
  <div class="prev">
	<!--{<a href="javascript:void(0)">返回上一题</a>}-->
  </div>
</div>
<div class="question ">
  <div class="question-title">
	  2.你平时跟谁打电话比较频繁?
  </div>
  <div class="options button">
	<ul>
		<li data-score="7">
		  <div>A 同事</div>
		</li>
		<li data-score="5">
		  <div>B 朋友</div>
		</li>
		<li data-score="1">
		  <div>C 恋人</div>
		</li>
	</ul>
  </div>
  <div class="prev">
	<a href="javascript:void(0)">返回上一题</a>
  </div>
</div>
<div class="question ">
  <div class="question-title">
	  3.你的休闲时间都在干什么?
  </div>
  <div class="options button">
	<ul>
		<li data-score="7">
		  <div>A  宅在家里</div>
		</li>
		<li data-score="5">
		  <div>B 出去跟朋友玩</div>
		</li>
		<li data-score="1">
		  <div>C 苦逼的在加班</div>
		</li>
	</ul>
  </div>
  <div class="prev">
	<a href="javascript:void(0)">返回上一题</a>
  </div>
</div>
<div class="question ">
  <div class="question-title">
	  4.如果在地上看到一枚壹圆硬币，你会怎么做？
  </div>
  <div class="options button">
	<ul>
		<li data-score="5">
		  <div>A  捡起来放在口袋里，但是怀疑这一块钱能干什么</div>
		</li>
		<li data-score="7">
		  <div>B 捡起来，并且对上天带来的幸运充满感激</div>
		</li>
		<li data-score="1">
		  <div>C 视若无睹地走过去</div>
		</li>
	</ul>
  </div>
  <div class="prev">
	<a href="javascript:void(0)">返回上一题</a>
  </div>
</div>
<div class="question ">
  <div class="question-title">
	  5.下面三种度过周末的方式，你更喜欢哪一种?
  </div>
  <div class="options button">
	<ul>
		<li data-score="1">
		  <div>A 看电视吃火锅</div>
		</li>
		<li data-score="7">
		  <div>B 和朋友去郊野公园玩</div>
		</li>
		<li data-score="5">
		  <div>C 睡觉看书自己做晚餐</div>
		</li>
	</ul>
  </div>
  <div class="prev">
	<a href="javascript:void(0)">返回上一题</a>
  </div>
</div>
<div class="question ">
  <div class="question-title">
	  6.下面几种沙发，你更喜欢哪一种?
  </div>
  <div class="options button">
	<ul>
		<li data-score="1">
		  <div>A 皮质沙发</div>
		</li>
		<li data-score="5">
		  <div>B 布艺沙发</div>
		</li>
		<li data-score="7">
		  <div>C 木质沙发</div>
		</li>
	</ul>
  </div>
  <div class="prev">
	<a href="javascript:void(0)">返回上一题</a>
  </div>
</div>
<div class="question ">
  <div class="question-title">
	  7.深夜，你发现自己家的浴室常经常会有流水声，你觉得是?
  </div>
  <div class="options button">
	<ul>
		<li data-score="5">
		  <div>A 有鬼</div>
		</li>
		<li data-score="1">
		  <div>B 水管坏了</div>
		</li>
		<li data-score="7">
		  <div>C 自己忘记关水龙头</div>
		</li>
	</ul>
  </div>
  <div class="prev">
	<a href="javascript:void(0)">返回上一题</a>
  </div>
</div>
<div class="question ">
  <div class="question-title">
	  8.一个人住很宽敞的别墅，晚上睡觉害怕，你会?
  </div>
  <div class="options button">
	<ul>
		<li data-score="7">
		  <div>A 开着灯睡</div>
		</li>
		<li data-score="5">
		  <div>B 开着电视睡</div>
		</li>
		<li data-score="1">
		  <div>C 带上眼罩睡</div>
		</li>
	</ul>
  </div>
  <div class="prev">
	<a href="javascript:void(0)">返回上一题</a>
  </div>
</div>
<div class="question ">
  <div class="question-title">
	  9.下面三种房子，你最不喜欢哪种?
  </div>
  <div class="options button">
	<ul>
		<li data-score="7">
		  <div>A 欧式蜗居</div>
		</li>
		<li data-score="1">
		  <div>B 海滨别墅</div>
		</li>
		<li data-score="5">
		  <div>C 日式小楼</div>
		</li>
	</ul>
  </div>
  <div class="prev">
	<a href="javascript:void(0)">返回上一题</a>
  </div>
</div>
<div class="question ">
  <div class="question-title">
	  10.你喜欢什么样的茶具?
  </div>
  <div class="options button">
	<ul>
		<li data-score="1">
		  <div>A 紫砂茶壶</div>
		</li>
		<li data-score="5">
		  <div>B 雕花瓷器茶壶</div>
		</li>
		<li data-score="7">
		  <div>C 透明玻璃茶壶</div>
		</li>
	</ul>
  </div>
  <div class="prev">
	<a href="javascript:void(0)">返回上一题</a>
  </div>
</div>

<div class="result">
    <div class="title">
      <h2>
        测试结果
      </h2>
      <div class="title-sub aside">

      </div>
    </div>
    <div class="share tools-button" onclick="mask();">分享</div>
</div>

<div id="mask" onclick="mask();"></div>
<div id="tip" onclick="mask();"><img src="./images/tip-share.jpg"></div>

<div id="infos" style="display:none"></div>

<div style="margin-top:5px;" align="center" id="bai">
	<div style="display: inline;float: center;"><br>
		<script language="javascript" src="./images/bottom.js"></script>
</div>
</div>
<div style="display:none">
这里可以放统计代码
</div>
<script type="text/javascript" src="./images/stats" charset="UTF-8"></script> 


</body></html>