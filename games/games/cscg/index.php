

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
 <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="target-densitydpi=320,width=640,user-scalable=no"/>
<title>且行且珍惜，测出轨有多易？</title>
<script type="text/javascript" src="http://www.v918.cn/vgames/games/cscg/auth/jquery.min.js"></script>
<script src="js/jQueryRotateCompressed.js"></script>
<script type="text/javascript">
  var resrand=parseInt(Math.random()*50);
  function getParameter(name) {
	var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");
	var r = window.location.search.substr(1).match(reg);
	if (r != null) return r[2]; return null;
}
	var result;
	 var result_message;
	 var result_messages;
  $(document).ready(function(){
         result=parseInt(getParameter("result"));
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




          if(result){
                          if(result >= 0 && result <= 13){
                              result_message = "经测试您的出轨概率是 0% 您若出轨美人鱼都会劈腿，希望您且行且珍惜。";
                    result_messages = "经测试我的出轨概率是 0% 我若出轨美人鱼都会劈腿。";
                          }

                          if(result >= 14 && result <= 17){
                              result_message = "经测试您的出轨概率是 "+result+"% 您不出轨是因为很懒甚至都懒得出轨，希望您且行且珍惜。";
                    result_messages = "经测试我的出轨概率是 "+result+"% 我不出轨是因为很懒甚至都懒得出轨。";
                          }

                          if(result >= 18 && result <= 20){
                              result_message = "经测试您的出轨概率是 "+result+"% 您是小火车，除非轨道没了，否则不会出轨，希望您且行且珍惜。";
                    result_messages = "经测试我的出轨概率是 "+result+"% 我是小火车，不会出轨。";
                          }

                          if(result >= 21 && result <= 25){
                              result_message = "经测试您的出轨概率是 "+result+"% 您有想法也没勇气这么做，希望您且行且珍惜。";
                    result_messages = "经测试我的出轨概率是 "+result+"% ……";
                          }
                  
                  if(result >= 26 && result <= 30){
                              result_message = "经测试您的出轨概率是 "+result+"% 您重感情又自律，除非那个人很特别，希望您且行且珍惜。";
                    result_messages = "经测试我的出轨概率是 "+result+"% ……";
                          }
                  
                  if(result >= 31 && result <= 35){
                              result_message = "经测试您的出轨概率是 "+result+"% 您只是幻想会有那么一天，希望您且行且珍惜。";
                    result_messages = "经测试我的出轨概率是 "+result+"%  ……";
                          }
                  
                  if(result >= 36 && result <= 40){
                              result_message = "经测试您的出轨概率是 "+(result+10)+"% 您身边诱惑可能有点多，希望您且行且珍惜。";
                    result_messages = "经测试我的出轨概率是 "+(result+10)+"%  ……";
                          }
                  
                  if(result >= 41 && result <= 45){
                              result_message = "经测试您的出轨概率是 "+(result+20)+"% 希望您能处理好几个情人的关系，希望您且行且珍惜。";
                    result_messages = "经测试我的出轨概率是 "+(result+20)+"% ……";
                          }
                  
                  if(result >= 46 && result <= 50){
                              result_message = "经测试您的出轨概率是 "+(result+30)+"% 您这么花心你另一半知道吗，希望您且行且珍惜。";
                    result_messages = "经测试我的出轨概率是 "+(result+30)+"% 。。。。。";
                          }
                  $("#infos").html(result_messages); 
                  $(".aside").append(result_message);
                  $(".header-title").hide();
                  $("#toptop").hide();
                  $(".result").show();
                  // document.title=result_messages;
          }

      });
    var mask = function () {
              document.getElementById('sharediv').style.display = '';
            }
resultPath='http://www.v918.cn/vgames/games/cscg'+resrand;
var mebtnopenurl = 'http://www.v918.cn/vgames';
window.shareData = {
    "imgUrl": "http://www.v918.cn/vgames/icon/cscg.png",
    "timeLineLink": "http://www.v918.cn/vgames/games/cscg",
    "tTitle": "我刚刚测了我的出轨率，你想知道吗？点击查看！",
    "tContent": "我刚刚测了我的出轨率，你想知道吗？点击查看！"
};
///// share ////
var domain = ["oixm.cn", "hiemma.cn", "peagame.net"][parseInt(Math.random() * 3)];
window.shareData.timeLineLink = "http://www.v918.cn/vgames/games/cscg";
///////////////
	function goHome(){
			window.location=mebtnopenurl;
		}
		function clickMore(){
			if((window.location+"").indexOf("zf",1)>0){
				window.location = "http://www.v918.cn/vgames/games/cscg";
			 }
			 else{
				goHome();
			 }
		}
    document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
        
        WeixinJSBridge.on('menu:share:appmessage', function(argv) {
            WeixinJSBridge.invoke('sendAppMessage', {
                "img_url": window.shareData.imgUrl,
                "link": window.shareData.timeLineLink,
                "desc": window.shareData.tContent,
                "title": window.shareData.tTitle
            }, function(res) {
              document.location.href = resultPath;
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
              document.location.href = resultPath;
            });
        });
    }, false);

</script>
<style type="text/css">
 body{
    padding:0;
          background: #000;

          background: url("vapp/16/bg.png") no-repeat #09080d;
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
  <h2>测测你出轨的几率有多少？</h2>
  <div class="title-sub" id="toptops">
恋爱是一场战争，就算对方向你说尽甜言蜜语，同样的话他可以跟第三者说。外遇是感情危机处理上最难的事情，稍一不留意后果就会不堪设想，在恋爱争夺战中，你有能力让自己专情于一个人，还是会受不了诱惑而出轨呢？
  </div>
</div>
<div class="box current" id="toptop">
  <ul>
    <li id="beginG">
      <div>开始测试</div>
    </li>
  </ul>
     <a href="#" onclick="clickMore();" style="text-decoration:none;font-size: 25px;color: #f00;font-weight: bold;display: block;margin-top:10px;">更多测试</a>


    <a href="#" onclick="clickMore();" style="display: block;margin-top:80px;text-decoration:none"><img width="100%" src="http://www.v918.cn/vgames/games/cscg/more.jpg"></a>

    <a style="font-size: 30px;color: #f00;font-weight: bold;display: block;margin-top:35px;text-decoration:none" href="#" onclick="clickMore();">猛戳我，奥巴马和金正恩都惊呆了！！！</a>
</div>
<div class="question " id="firstQ">
  <div class="question-title">
    1.一个人在房间，百无聊赖地打开电脑时，你会最先考虑在线观看什么类型的电影？
  </div>
  <div class="options button">
  <ul>
    <li data-score="1">
      <div>A 悬疑片</div>
    </li>
    <li data-score="3">
      <div>B 爱情片</div>
    </li>
    <li data-score="5">
      <div>C 情色片</div>
    </li>
  </ul>
  </div>
  <div class="prev">
  <!--{<a href="javascript:void(0)">返回上一题</a>}-->
  </div>
     <a href="#" onclick="clickMore();" style="text-decoration:none;font-size: 25px;color: #f00;font-weight: bold;display: block;margin-top:20px;">更多测试</a>


    <a href="#" onclick="clickMore();" style="display: block;margin-top:80px;text-decoration:none"><img width="100%" src="http://www.v918.cn/vgames/games/cscg/more.jpg"></a>

    <a style="font-size: 30px;color: #f00;font-weight: bold;display: block;margin-top:35px;text-decoration:none" href="#" onclick="clickMore();">猛戳我，奥巴马和金正恩都惊呆了！！！</a>
</div>
<div class="question ">
  <div class="question-title">
    2.上班时发现办公桌上有一个匿名的礼物盒，你会？
  </div>
  <div class="options button">
  <ul>
    <li data-score="5">
      <div>A 先打开看看是什么</div>
    </li>
    <li data-score="3">
      <div>B 先弄清楚是不是给自己的</div>
    </li>
    <li data-score="1">
      <div>C 先放着，看看等会有没有人认领</div>
    </li>
  </ul>
  </div>
  <div class="prev">
  <a href="javascript:void(0)">返回上一题</a>
  </div>
     <a href="#" onclick="clickMore();" style="text-decoration:none;font-size: 25px;color: #f00;font-weight: bold;display: block;margin-top:30px;">更多测试</a>

      <a style="font-size: 25px;color: #f00;font-weight: bold;display: block;margin-top:20px;text-decoration:none" href="http://app100620636.qzone.qzoneapp.com/wap_hly/weixinyouxi.html">狙击手专用眼力测试，你能闯到第几关？</a> -->

    <a href="#" onclick="clickMore();" style="display: block;margin-top:80px;text-decoration:none"><img width="100%" src="http://www.v918.cn/vgames/games/cscg/more.jpg"></a>

    <a style="font-size: 30px;color: #f00;font-weight: bold;display: block;margin-top:35px;text-decoration:none" href="#" onclick="clickMore();">猛戳我，奥巴马和金正恩都惊呆了！！！</a>
</div>
<div class="question ">
  <div class="question-title">
    3.在地铁里，你会选择以下哪一个位置坐？
  </div>
  <div class="options button">
  <ul>
    <li data-score="5">
      <div>A  坐在漂亮的异性旁</div>
    </li>
    <li data-score="3">
      <div>B 坐在跟自己差不多年龄的同性旁</div>
    </li>
    <li data-score="1">
      <div>C 坐在中年男人旁</div>
    </li>
  </ul>
  </div>
  <div class="prev">
  <a href="javascript:void(0)">返回上一题</a>
  </div>
      <a href="#" onclick="clickMore();" style="text-decoration:none;font-size: 25px;color: #f00;font-weight: bold;display: block;margin-top:30px;">更多测试</a>

    <a href="#" onclick="clickMore();" style="display: block;margin-top:80px;text-decoration:none"><img width="100%" src="http://www.v918.cn/vgames/games/cscg/more.jpg"></a>

    <a style="font-size: 30px;color: #f00;font-weight: bold;display: block;margin-top:35px;text-decoration:none" href="#" onclick="clickMore();">猛戳我，奥巴马和金正恩都惊呆了！！！</a>
</div>
<div class="question ">
  <div class="question-title">
    4.用单位发的购物卡去超市购物，在收银柜买单时，你通常是？
  </div>
  <div class="options button">
  <ul>
    <li data-score="3">
      <div>A  刚好接近卡内的金额</div>
    </li>
    <li data-score="5">
      <div>B 将卡刷暴</div>
    </li>
    <li data-score="1">
      <div>C 会剩很多</div>
    </li>
  </ul>
  </div>
  <div class="prev">
  <a href="javascript:void(0)">返回上一题</a>
  </div>
     <a href="#" onclick="clickMore();" style="text-decoration:none;font-size: 25px;color: #f00;font-weight: bold;display: block;margin-top:30px;">更多测试</a>

    <a href="#" onclick="clickMore();" style="display: block;margin-top:80px;text-decoration:none"><img width="100%" src="http://www.v918.cn/vgames/games/cscg/more.jpg"></a>

    <a style="font-size: 30px;color: #f00;font-weight: bold;display: block;margin-top:35px;text-decoration:none" href="#" onclick="clickMore();">猛戳我，奥巴马和金正恩都惊呆了！！！</a>
</div>
<div class="question ">
  <div class="question-title">
    5.出差两个礼拜回家后，你最期望另一半怎样给你放松的感觉？
  </div>
  <div class="options button">
  <ul>
    <li data-score="1">
      <div>A 带你去吃顿丰盛的晚餐</div>
    </li>
    <li data-score="5">
      <div>B 耐心地听你讲述出差途中的奇闻轶事</div>
    </li>
    <li data-score="3">
      <div>C 给你一个深情的长吻</div>
    </li>
  </ul>
  </div>
  <div class="prev">
  <a href="javascript:void(0)">返回上一题</a>
  </div>
     <a href="#" onclick="clickMore();" style="text-decoration:none;font-size: 25px;color: #f00;font-weight: bold;display: block;margin-top:30px;">更多测试</a>


    <a href="#" onclick="clickMore();" style="display: block;margin-top:80px;text-decoration:none"><img width="100%" src="http://www.v918.cn/vgames/games/cscg/more.jpg"></a>

    <a style="font-size: 30px;color: #f00;font-weight: bold;display: block;margin-top:35px;text-decoration:none" href="#" onclick="clickMore();">猛戳我，奥巴马和金正恩都惊呆了！！！</a>
</div>
<div class="question ">
  <div class="question-title">
    6.撞见另一半和陌生异性在西餐厅吃饭，你会做出如何回应？
  </div>
  <div class="options button">
  <ul>
    <li data-score="1">
      <div>A 怒气冲冲地上前质问</div>
    </li>
    <li data-score="3">
      <div>B 悄悄躲起来观察</div>
    </li>
    <li data-score="5">
      <div>C 大方地让另一半介绍你们认识</div>
    </li>
  </ul>
  </div>
  <div class="prev">
  <a href="javascript:void(0)">返回上一题</a>
  </div>
     <a href="#" onclick="clickMore();" style="text-decoration:none;font-size: 25px;color: #f00;font-weight: bold;display: block;margin-top:30px;">更多测试</a>


    <a href="#" onclick="clickMore();" style="display: block;margin-top:60px;text-decoration:none"><img width="100%" src="http://www.v918.cn/vgames/games/cscg/more.jpg"></a>

    <a style="font-size: 30px;color: #f00;font-weight: bold;display: block;margin-top:35px;text-decoration:none" href="#" onclick="clickMore();">猛戳我，奥巴马和金正恩都惊呆了！！！</a>
</div>
<div class="question ">
  <div class="question-title">
    7.从公司回家，打算继续加班，但同时有一部不错的电视剧在播出，你会？
  </div>
  <div class="options button">
  <ul>
    <li data-score="3">
      <div>A 心无旁骛地继续加班</div>
    </li>
    <li data-score="1">
      <div>B 放下公务看电视</div>
    </li>
    <li data-score="5">
      <div>C 一边加班一边看电视</div>
    </li>
  </ul>
  </div>
  <div class="prev">
  <a href="javascript:void(0)">返回上一题</a>
  </div>
     <a href="#" onclick="clickMore();" style="text-decoration:none;font-size: 25px;color: #f00;font-weight: bold;display: block;margin-top:30px;">更多测试</a>


    <a href="#" onclick="clickMore();" style="display: block;margin-top:80px;text-decoration:none"><img width="100%" src="http://www.v918.cn/vgames/games/cscg/more.jpg"></a>

    <a style="font-size: 30px;color: #f00;font-weight: bold;display: block;margin-top:35px;text-decoration:none" href="#" onclick="clickMore();">猛戳我，奥巴马和金正恩都惊呆了！！！</a>
</div>
<div class="question ">
  <div class="question-title">
    8.和暂时不太熟悉的异性一起看电影，当萤幕上演情欲镜头时，你会？
  </div>
  <div class="options button">
  <ul>
    <li data-score="5">
      <div>A 偷偷去看他(她)</div>
    </li>
    <li data-score="3">
      <div>B 假装心不在焉</div>
    </li>
    <li data-score="1">
      <div>C 目不转睛地盯着屏幕</div>
    </li>
  </ul>
  </div>
  <div class="prev">
  <a href="javascript:void(0)">返回上一题</a>
  </div>
     <a href="#" onclick="clickMore();" style="text-decoration:none;font-size: 25px;color: #f00;font-weight: bold;display: block;margin-top:30px;">更多测试</a>


    <a href="#" onclick="clickMore();" style="display: block;margin-top:80px;text-decoration:none"><img width="100%" src="http://www.v918.cn/vgames/games/cscg/more.jpg"></a>

    <a style="font-size: 30px;color: #f00;font-weight: bold;display: block;margin-top:35px;text-decoration:none" href="#" onclick="clickMore();">猛戳我，奥巴马和金正恩都惊呆了！！！</a>
</div>
<div class="question ">
  <div class="question-title">
    9.你觉得以下哪种是最佳的男女约会场所？
  </div>
  <div class="options button">
  <ul>
    <li data-score="5">
      <div>A 热闹的大街</div>
    </li>
    <li data-score="1">
      <div>B 浪漫咖啡厅</div>
    </li>
    <li data-score="3">
      <div>C 城市僻静处，如江滨幽林</div>
    </li>
  </ul>
  </div>
  <div class="prev">
  <a href="javascript:void(0)">返回上一题</a>
  </div>
     <a href="#" onclick="clickMore();" style="text-decoration:none;font-size: 25px;color: #f00;font-weight: bold;display: block;margin-top:30px;">更多测试</a>

    <a href="#" onclick="clickMore();" style="display: block;margin-top:80px;text-decoration:none"><img width="100%" src="http://www.v918.cn/vgames/games/cscg/more.jpg"></a>

    <a style="font-size: 30px;color: #f00;font-weight: bold;display: block;margin-top:35px;text-decoration:none" href="#" onclick="clickMore();">猛戳我，奥巴马和金正恩都惊呆了！！！</a>
</div>
<div class="question ">
  <div class="question-title">
    10.接到一个手机电话，是完全陌生的声音，而对方又能准确说出你的名字，你会认为？
  </div>
  <div class="options button">
  <ul>
    <li data-score="1">
      <div>A 巧合而已</div>
    </li>
    <li data-score="3">
      <div>B 是自己忘记的某个朋友</div>
    </li>
    <li data-score="5">
      <div>C 有意套近乎的追求者</div>
    </li>
  </ul>
  </div>
  <div class="prev">
  <a href="javascript:void(0)">返回上一题</a>
  </div>
     <a href="#" onclick="clickMore();" style="text-decoration:none;font-size: 25px;color: #f00;font-weight: bold;display: block;margin-top:30px;">更多测试</a>

    <a href="#" onclick="clickMore();" style="display: block;margin-top:80px;text-decoration:none"><img width="100%" src="http://www.v918.cn/vgames/games/cscg/more.jpg"></a>

    <a style="font-size: 30px;color: #f00;font-weight: bold;display: block;margin-top:35px;text-decoration:none" href="#" onclick="clickMore();">猛戳我，奥巴马和金正恩都惊呆了！！！</a>
</div>

<div class="question ">
  <div class="question-title">
  
  </div>
  <div class="options button">
  <ul>
    <li data-score="1" onclick="mask();">
      <div class="share tools-button" >分享查看测试结果</div>
    </li>
  </ul>
  </div>
     <div class="title-sub">
        <a href="ceshiti.php" style="text-decoration:none"><button style="font-size:25px">重新测试</button></a>
      </div>
     <a href="#" onclick="clickMore();" style="text-decoration:none;font-size: 25px;color: #f00;font-weight: bold;display: block;margin-top:30px;">更多测试</a>

    <a href="#" onclick="clickMore();" style="display: block;margin-top:80px;text-decoration:none"><img width="100%" src="http://www.v918.cn/vgames/games/cscg/more.jpg"></a>

    <a style="font-size: 30px;color: #f00;font-weight: bold;display: block;margin-top:35px;text-decoration:none" href="#" onclick="clickMore();">猛戳我，奥巴马和金正恩都惊呆了！！！</a>
</div>

<div class="result">
    <div class="title">
      <h2>
        测试结果
      </h2>
      <div class="title-sub aside">

      </div>
      <div class="title-sub">
        <a href="game.html" style="text-decoration:none"><button style="font-size:25px">测测我的出轨率</button></a>&nbsp;&nbsp;&nbsp;<a href="#" onclick="clickMore();" style="text-decoration:none"><button style="font-size:25px">更多测试</button></a>
      </div>
     <a href="#" onclick="clickMore();" style="text-decoration:none;font-size: 25px;color: #f00;font-weight: bold;display: block;margin-top:30px;">更多测试</a>


    <a href="#" onclick="clickMore();" style="display: block;margin-top:80px;text-decoration:none"><img width="100%" src="http://www.v918.cn/vgames/games/cscg/more.jpg"></a>

    <a style="font-size: 30px;color: #f00;font-weight: bold;display: block;margin-top:35px;text-decoration:none" href="#" onclick="clickMore();">猛戳我，奥巴马和金正恩都惊呆了！！！</a>
    </div>

    <!-- <div class="share tools-button" onclick="mask();">分享</div> -->
</div>
<div id="infos" style="display:none"></div>
<div style="margin-top:5px;" align="center" id="bai">
  <div style="display: inline;float: center;"><br/>
</div>
</div>
<div id="sharediv" style="display: none">
			<img width=100% src="http://www.v918.cn/vgames/games/cscg/share.png"
				style="position: fixed; z-index: 9999; top: 0; left: 0; display: "
				ontouchstart="document.getElementById('sharediv').style.display='none';" />
		</div>
	<div style="display: none;">
				<script type="text/javascript">var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F0ae524064813b8dc07ece5ce724a7b04' type='text/javascript'%3E%3C/script%3E"));</script>
				<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_2947366'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s5.cnzz.com/stat.php%3Fid%3D2947366' type='text/javascript'%3E%3C/script%3E"));</script>
			</div>	
</body>
</html>