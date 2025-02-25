<!DOCTYPE html>
<!-- saved from url=(0038)http://218.244.142.3/game/14/game.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=GBK">
    <meta charset="gb2312">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
     <script src="http://www.v918.cn/vgames/games/kuaipao/jquery.js"></script>
    <script src="http://www.v918.cn/vgames/games/kuaipao/crafty.js"></script>
    <script src="http://www.v918.cn/vgames/games/kuaipao/openjs.js"></script>
    <title>OLA快跑</title>
    <style>
    body,div,ol,ul,h1,h2,h3,h4,h5,h6,p,th,td,dl,dd,form,iframe,input,textarea,select,label,article,aside,footer,header,menu,nav,section,time,audio,video {
      margin:0;
      padding:0;
    }
    article,aside,footer,header,hgroup,nav,section,audio,canvas,video,img {
        display: block;
    }
    body {
        font-size: 100%; 
        font-family:Helvetica,STHeiti,Droid Sans Fallback;
        -webkit-text-size-adjust: 100%;
        -ms-text-size-adjust: 100%;
        -webkit-tap-highlight-color:rgba(0,0,0,0);
    }
    textarea {
        resize: none;
    }
    iframe,img {
        border:0;
    }
    ul,ol {
        list-style:none;
    }
    input,
    select,
    textarea {
        outline: 0;
        -webkit-user-modify: read-write-plaintext-only;
    }
    input {
        -webkit-appearance: none;
    }
    a{
        text-decoration: none;
    }
    body,html{
        width: 100%; 
        height: 100%; 
        position: relative;
        overflow: hidden;
        margin: 0; padding: 0;
        /*background: #000;*/
        background: #13a438;
    }
    #gamestart{
        width: 100%;
        position: absolute;
        top: 0; bottom: 0; 
        z-index: 11;
    }
    .start_bg {
        position: absolute;
        top: -44px; left: 0; z-index: -1;
        width: 100%;
        background: url(http://www.v918.cn/vgames/games/kuaipao/jz.gif) no-repeat center center;
    }
    #gamestart .btn,.zhiyin .btn {
        width: 80%;
        height: 40px;
        border-radius: 5px;
        text-align: center;
        line-height: 40px;
        color: #333;
        box-shadow: 0 5px 0px #07942c;
        box-shadow: 0 5px 0px rgba(0,0,0,0.17);
        position: absolute;
        left: 50%; margin: 0 0 0 -40%;
    }
    #gamestart .rule{
        background: #fff;
        bottom: 100px;
    }
    #gamestart .start,.zhiyin .start{
        background: #ffff00;
        bottom: 40px;
    }
    .zhiyin .start {
        bottom:20px !important;
    }
    .IOS #gamestart .rule{
        bottom: 140px;
    }
    .IOS #gamestart .start,.zhiyin .start{
        bottom: 80px;
    }
    .athour {
        width: 100%; text-align: center; padding: 10px 0;
        position: absolute;
        left: 0; bottom: 0;
    }
    .IOS .athour{
        bottom: 44px;
    }
    .athour span{
        font-size: 11px;
        color: #1c5b35;
    }
    .athour span:nth-of-type(1){
        padding-right: 10px;
    }

#interface .life{display:none}
    .ruleshadow{
        position: absolute;
        top: 0; right: 0; bottom: 0; left: 0;
        background:rgba(0,0,0,0.8);
        z-index: 10;
    }
    
    .rulebox{
        width: 250px; height: 280px;
        padding: 10px 15px;
        position: absolute;
        left: 50%; top: 50%;
        margin: -150px 0 0 -140px;
        background: #13a438;
        border-radius: 5px;
        opacity: 0; z-index: -1;
        -webkit-transform: translate3d(0,0,0);
        -webkit-transform-style: preserve-3d;
        -webkit-backface-visibility: hidden;
    }
    .x_rulebox{
        width: 55px; height: 55px;
        display: block;
        position: absolute;
        right: -15px;
        top: -20px;
        background: url(http://www.v918.cn/vgames/games/kuaipao/x_rulebox.png) no-repeat left top;
        background-size: 100%;
    }
    .rulebox h3{
        color: #ffff00;
        font-size: 18px;
        font-weight: normal;
        padding: 10px 0;
        margin: 0;
    }
    .rulebox p{
        color: #fff;
        font-size: 13px;
        line-height: 24px;
        margin: 0;
    }
    .daoju_1{
        display: inline;
        float: left;
        width: 40px; height: 40px;
        background: url(http://www.v918.cn/vgames/games/kuaipao/daoju_1.png) no-repeat left top;
        background-size: 100%;
    }
    .daoju_2{
        display: inline;
        float: left;
        width: 42px; height: 47px;
        background: url(http://www.v918.cn/vgames/games/kuaipao/daoju_2.png) no-repeat left top;
        background-size: 100%;
    }
     .daoju_3{
        display: inline;
        float: left;
        width: 34px; height: 46px;
        background: url(http://www.v918.cn/vgames/games/kuaipao/daoju_3.png) no-repeat left top;
        background-size: 100%;
    }
    .daoju_item{
        padding: 8px 0
    }
    .daoju_item p{
        line-height: 20px;
        padding-left: 50px;
    }
    @-webkit-keyframes bounceIn {
  0% {
    opacity: 0;
    -webkit-transform: scale(.3);
    transform: scale(.3);
  }

  50% {
    opacity: 1;
    -webkit-transform: scale(1.05);
    transform: scale(1.05);
  }

  70% {
    -webkit-transform: scale(.9);
    transform: scale(.9);
  }

  100% {
    opacity: 1;
    -webkit-transform: scale(1);
    transform: scale(1);
  }
}

@keyframes bounceIn {
  0% {
    opacity: 0;
    -webkit-transform: scale(.3);
    -ms-transform: scale(.3);
    transform: scale(.3);
  }

  50% {
    opacity: 1;
    -webkit-transform: scale(1.05);
    -ms-transform: scale(1.05);
    transform: scale(1.05);
  }

  70% {
    -webkit-transform: scale(.9);
    -ms-transform: scale(.9);
    transform: scale(.9);
  }

  100% {
    opacity: 1;
    -webkit-transform: scale(1);
    -ms-transform: scale(1);
    transform: scale(1);
  }
}
.animated {
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}
.bounceIn {
  -webkit-animation-name: bounceIn;
  animation-name: bounceIn;
}

@-webkit-keyframes bounceOut {
  0% {
    -webkit-transform: scale(1);
    transform: scale(1);
  }

  25% {
    -webkit-transform: scale(.95);
    transform: scale(.95);
  }

  50% {
    opacity: 1;
    -webkit-transform: scale(1.1);
    transform: scale(1.1);
  }

  100% {
    opacity: 0;
    -webkit-transform: scale(.3);
    transform: scale(.3);
  }
}

@keyframes bounceOut {
  0% {
    -webkit-transform: scale(1);
    -ms-transform: scale(1);
    transform: scale(1);
  }

  25% {
    -webkit-transform: scale(.95);
    -ms-transform: scale(.95);
    transform: scale(.95);
  }

  50% {
    opacity: 1;
    -webkit-transform: scale(1.1);
    -ms-transform: scale(1.1);
    transform: scale(1.1);
  }

  100% {
    opacity: 0;
    -webkit-transform: scale(.3);
    -ms-transform: scale(.3);
    transform: scale(.3);
  }
}

.bounceOut {
  -webkit-animation-name: bounceOut;
  animation-name: bounceOut;
}

.opacity{
    opacity: 1;
}
.r_index{
        z-index: 11;
    }
.ruleshadow{
    display: none;
}


.daojishi {
    position: absolute;
    width: 100%;
    top: 0;
    bottom: 0; display: none;
    z-index: 11;
    background: url(http://www.v918.cn/vgames/games/kuaipao/daojishu_bg.png) repeat left top;
    background-size: 100%;
}
.daojishiline{
    width: 100%;
    height: 95px;
    position: absolute;
    top: 109px;
    left: 0;
    background: #ffe400;
    z-index: 1;
}
.daojishibox{
    width: 180px;
    height: 180px;
    position: absolute;
    left: 50%; top: 71px;
    margin: 0 0 0 -90px;
    background: url(http://www.v918.cn/vgames/games/kuaipao/daojishibox.png) no-repeat left top;
    background-size: 100%;
    z-index: 2;
}
.daojishipangzi {
    width: 111px;
    height: 102px;
    position: absolute;
    left: 50%; bottom: 50px;
    margin: 0 0 0 -55px;
    background: url(http://www.v918.cn/vgames/games/kuaipao/daojishipangzi.png) no-repeat left top;
    background-size: 100%;
    z-index: -1;
}
.daojishinum{
    width: 100%; text-align: center;
    font-size: 80px; color: #00a944;
    padding: 70px 0 0 0; line-height: normal;
}

.gameend{
    position: absolute;
    width: 100%;
    top: 0; bottom: 0;z-index: 11;
    background: #08b134 url(http://www.v918.cn/vgames/games/kuaipao/game_end.jpg) no-repeat center top;
    background-size: 100%;
    display:none;
}
.game_fenshu {
    width: 100%; text-align: center;
    padding: 40px 0 0;
    font-size: 36px; color: #ffff00;
}
.game_fenshu span {
    font-size: 70px;
}
.game_paiming {
    color: #ffff00;
    font-size: 18px;
    text-align: center;
display:none
}
#jiantou{ display: none;}

.game_ogain{
    width: 80%;
    height: 40px;
    border-radius: 5px;
    text-align: center;
    line-height: 40px;
    background: #ffff00;
    color: #333;
    box-shadow: 0 5px 0px #07942c;
    box-shadow: 0 5px 0px rgba(0,0,0,0.17);
    position: absolute;
    left: 50%; bottom: 92px;
    margin: 0 0 0 -40%;
}
.game_chakan{
    width: 36%;
    height: 40px;
    border-radius: 5px;
    text-align: center;
    line-height: 40px;
    background: #0047c5;
    color: #fff;
    box-shadow: 0 5px 0px #07942c;
    box-shadow: 0 5px 0px rgba(0,0,0,0.17);
    position: absolute;
    left: 10%; bottom: 36px;
}
.game_share{
    width: 36%;
    height: 40px;
    border-radius: 5px;
    text-align: center;
    line-height: 40px;
    background: #f8317c;
    color: #fff;
    box-shadow: 0 5px 0px #07942c;
    box-shadow: 0 5px 0px rgba(0,0,0,0.17);
    position: absolute;
    right: 10%; bottom: 36px;
}
.IOS .game_ogain{
    bottom: 112px;
}
.IOS .game_chakan{
    bottom: 56px;
}
.IOS .game_share{
    bottom: 56px;
}

.listwarp{
    background: #0b9f31;
    position: absolute;
    top: 0; bottom: 0;
    width: 100%;
    z-index: 11;
    display:none;
}
.listcent{
    width:290px;
    position: absolute;
    left: 50%; top: 15px; bottom: 0;
    margin: 0 0 0 -145px;
}
.listtab{
    width: 100%;
    height: 35px;
}
.listtab li {
    width: 50%;
    display: inline; float: left;
    height: 35px; line-height: 35px;
    text-align: center;
    color: #fff; font-size: 15px;
}
.listtab li.current{
    color: #0b9f31;
    background: #d1f8db;
}
.listbox{
    overflow: hidden;
    display: none;
} 
.listbox ul{
    margin-top: -1px;
    /*background: #d1f8db;*/
} 
.show{
    display: block;
}
.listbox li {
    height: 40px; line-height: 40px;
    border-top:  1px solid #fff;
    border-bottom:  1px solid #a5ddb3;
} 
.listbox li i{
    font-size: 16px;
    display: inline; float: left;
    color: #ff4e00;
    font-style: normal;
    width: 50px; text-align: center;
    padding: 0 5px;
} 
.listbox li img{
    width: 32px; height: 32px;
    display: inline; float: left;
    margin:  4px 5px 0;
}
.listbox li strong{
    padding: 0 5px;
    font-weight: 400;
    font-size: 15px;
    color: #333;
    width: 110px; line-height: 40px; overflow: hidden;
    display: inline; float: left;
}
.listbox li span{
    color: #0b9f31;
    font-size: 18px;
    display: inline; float: left;
    width: 58px; padding: 0 5px; text-align: left;
}
.listbox li.current{
    background: #88e5a0;
    border: none;
}
#huojiang_list li img{
    margin: 4px 10px 0;
}
#huojiang_list li strong{
    width: 110px;
}
#huojiang_list li span{
    width: 108px;
}
.guizetxt{
    font-size: 13px;
    color: #fff; padding: 5px 0; line-height: 20px;
    position: absolute;
    bottom: 0; width: 100%;
    left: 0;
}
.share_1{
    width: 40%;
    height: 40px;
    border-radius: 5px;
    text-align: center;
    line-height: 40px;
    background: #f8317c;
    color: #fff;
    box-shadow: 0 5px 0px #07942c;
    box-shadow: 0 5px 0px rgba(0,0,0,0.17);
    position: absolute;
    left: 0%; bottom: 36px;
}
.again_1{
    width: 40%;
    height: 40px;
    border-radius: 5px;
    text-align: center;
    line-height: 40px;
    background: #ffff00;
    color: #333;
    box-shadow: 0 5px 0px #07942c;
    box-shadow: 0 5px 0px rgba(0,0,0,0.17);
    position: absolute;
    right: 0%; bottom: 36px;
}
.IOS .share_1{
    bottom: 56px
}
.IOS .again_1{
    bottom: 56px
}


.QQloading{
    width: 46px; height: 46px;
    position: absolute;
    left: 50%; top: 50%;
    margin: -23px 0 0 -23px;display:inline-block;
    background-position: left top;
}
.QQloading,.QQloading i{
    background-image:url(http://www.v918.cn/vgames/games/kuaipao/loading.png);
    background-repeat:no-repeat;display:inline-block;
    -webkit-background-size:92px 46px;
    -moz-background-size:92px 46px;
    -o-background-size:92px 46px;
    background-size:92px 46px;
}
.QQloading i {
    width: 46px; height: 46px;
    background-position: right top;
    -webkit-animation-name: rotateRight;
    -webkit-animation-duration:2s;
    -webkit-animation-iteration-count:infinite;
    -webkit-animation-timing-function:linear;
}
@-webkit-keyframes rotateRight {
   from {-webkit-transform:rotate(360deg);}
   to {-webkit-transform:rotate(0deg);}
}
.listbox li .QQloading i{
    width: 46px;
    padding: 0;
    float: none;
    display: block;
}
.listinner{
    position: absolute;
    top: 35px; bottom: 80px;
    width: 100%;
}
#paihang_list,#huojiang_list{
    position: absolute;
    overflow: hidden;
    top: 0; bottom: 50px;
    width: 100%;
    background: #d1f8db;
}
.scroll{
    position: absolute;
    width: 100%;

}
.weblogin{
    width: 100%; height: 100%;
    position: absolute;
    min-height: 400px;
    top: 0; bottom: 0;
    display: none;
    z-index: 15;
}
.weblogin span {
    position: absolute;
    right: 10px; top: 10px;
    color: #246183;
}
.weixin_layer{
    display: none;
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    width: 100%;
    height: 100%;
    background: url(http://www.v918.cn/vgames/games/kuaipao/weinxin_share.png) no-repeat right top rgba(0, 0, 0, 0.6);
    -webkit-background-size:320px 150px;
    -moz-background-size: 320px 150px;
    -o-background-size: 320px 150px;
    background-size: 320px 150px;
    z-index: 999999;
}
.sharebox{
    background: #f6f6f6;
    height: 132px; overflow: hidden;
    width: 100%;
    position: absolute;
    top: -132px;
    /*display: none;*/
    z-index: 13;
}
.sharebox ul{
    height: 33px;
    padding: 30px 0;
    width: 160px;
    margin: 0 auto; overflow: hidden;
    text-align:center;
}
.sharebox ul li {
    /*display: inline; float: left;*/
    display:inline-block;
    width: 33px; height: 33px; overflow: hidden;
    margin: 0 10px;
    background: url(http://www.v918.cn/vgames/games/kuaipao/sheraicon.png);
    background-repeat: no-repeat;
    -webkit-background-size: 165px 33px;
    -moz-background-size: 165px 33px;
    -o-background-size: 165px 33px;
    background-size: 165px 33px;
}
.sharebox p {
    width: 100%; font-size: 14px;
    height:38px; line-height:38px;
    border-top:solid 1px #c2c2c2;
    background:#dadada; 
    text-align:center; 
    color: #333;
}
.sharebox ul li.sharet {
background-position: 0 0;
}
.sharebox ul li.shareqzone {
background-position: -33px 0;
}
.sharebox ul li.sharewb {
background-position: -66px 0;
}
.chenghao {
    width: 100%;
    position: absolute;
    left: 0;
    bottom: 172px;
    font-size: 18px;
    text-align: center;
    color: #ffff00;
    text-shadow:0 0 5px rgba(0,0,0,0.8);
}
.chenghao p {
    font-size: 32px;
    text-align: center;
}
.IOS .chenghao{
    bottom: 192px;
}

.control{
    width: 110px; height: 110px;
    background: url(http://www.v918.cn/vgames/games/kuaipao/img_contorl.png) no-repeat left top;
    background-size: 100%;
    position: absolute;
    bottom: 0; left: 50%;
    margin-left: -55px;
    z-index: 999;
    display: none;
}
.control div{
    display: inline-block;
    position: absolute;
}
.control .top{
    width: 33px; height: 39px;
    top: 0; left:50%;margin: 0 0 0 -16px;
}
.control .right{
    width: 39px; height: 33px;
    right: 0; top:50%; margin: -16px 0 0 0;
}
.control .bottom{
    width: 33px; height: 39px;
    bottom: 0; left:50%;margin: 0 0 0 -16px;
}
.control .left{
    width: 39px; height: 33px;
    left: 0; top:50%; margin: -16px 0 0 0;
}


#interface {display: none; position: relative; z-index: 2;}
#interface .life {position: absolute; right: 5px; top: 15px; font: 900 24px/36px '微软雅黑'; text-indent: 45px; background: url(http://www.v918.cn/vgames/games/kuaipao/life_s.png) no-repeat; color: 

#ffea00; z-index:11;}
#gamescore {font:900 15px/20px '微软雅黑'; color:#FF0; text-align: center; margin-top:30%;display:none}
#gamescore span {display: block; font-size:40px; line-height: 60px !important;}

#cr-stage{
    position: absolute;
    top: 50%;
    left: 50%;
    margin: -240px 0 0 -160px;
}
.zhiyin {
    position: absolute;
    display: none;
    width: 100%;
    top: 0;
    bottom: 0;
    z-index: 11;
    background: #03250c url(http://www.v918.cn/vgames/games/kuaipao/zhiyin_m.png) no-repeat left top;
    background-size: 100%;
}

.gameoverbox{
    width:320px;
    height:85px;
    background:url(http://www.v918.cn/vgames/games/kuaipao/gameover.png) no-repeat center center;
    position:absolute;
    left:50%;
    top:50%;
    background-size:100%;
    margin: -42px 0 0 -160px;
    display:none;
    z-index:13;
}   
.fenshubox{
    position: absolute;
    width:100%;
    top:50px;
    left:0;
    z-index:13;
    display: none;
}
.fenshubox h3{
    text-align:center;
    font-size: 15px;
    color: #ffff00;
}
.fenshubox p{
    text-align:center;
    font-size: 48px;
    color: #ffff00;
}
.listtab li.hide,.hide{
    display:none;
}
</style>
</head>
<body>
<!-- 游戏启动界面/S -->
    <div id="gamestart" style="">
        <img src="http://www.v918.cn/vgames/games/kuaipao/game_start.jpg" class="start_bg" style="top: 0px; ">
        <div class="btn rule" id="_gamerule">查看规则</div>
        <div class="btn start" id="_gamestart">开始游戏</div>
        <div class="athour">
            <span>www.v918.cn/vgames</span>
        </div>
        <div class="ruleshadow"></div>
        <div class="rulebox">
            <span class="x_rulebox"></span>
            <h3>操作方法：</h3>
            <p>手指拖动控制人物带球奔跑的方向和速度。</p>
            <h3>道具说明：</h3>
            <div class="daoju">
                <div class="daoju_item">
                    <span class="daoju_1"></span>
                    <p>每收集一个，生命值+1；触碰障碍物，生命可再复活。</p>
                </div>
                <div class="daoju_item">
                    <span class="daoju_2"></span>
                    <p>每收集一个，能力值+1；扫除面前一切障碍，加速前进。</p>
                </div>
                <div class="daoju_item">
                    <span class="daoju_3"></span>
                    <p>触碰锥桶，生命值-1；成功绕过一次分数+1。</p>
                </div>
                
            </div>
        </div>
    </div>
<!-- 游戏启动界面/E -->
<!--规则说明/S-->
<div class="zhiyin">
    <div class="btn start" id="_gamestart2">继续游戏</div>
</div>  
<!--规则说明/E-->
<!-- 倒计时/S -->
    <div class="daojishi">
        <div class="daojishiline"></div>
        <div class="daojishibox">
            <div class="daojishinum">3</div>
        </div>
        <div class="daojishipangzi"></div>
    </div>
<!-- 倒计时/E -->
<div class="gameoverbox"></div>
<!-- 游戏结束/S -->
<div class="gameend">
    <div class="game_fenshu">
        <span></span>分
    </div>
   
    <div class="chenghao">恭喜你获得称号<p></p></div>
    <div class="game_ogain" id="game_ogain" onClick="document.location.reload();">再次游戏</div>
    <div class="game_chakan" onClick="document.location.href = 'http://www.v918.cn/vgames'">更多游戏</div>
    <div class="game_share" onClick="share();">分享战绩</div>
</div>

<div class="weixin_layer"></div>

<div class="sharebox">
    <ul>
        <li class="sharet"></li>
        <li class="sharewb"></li>
    </ul>
    <p>取消</p>
</div>
<div class="control">
    <div class="top"></div>
    <div class="right"></div>
    <div class="bottom"></div>
    <div class="left"></div>
</div>
<div class="fenshubox" id="fenshubox">
    <h3>当前得分</h3>
    <p></p>
</div>
    <div id="cr-stage" style="width: 320px; height: 480px; overflow: hidden; position: relative; ">
            <div id="interface"><div class="life"></div></div>
            <div id="gamescore">本次得分<span>0</span></div>
            <div id="gametest"></div>
    <div style="position: absolute; z-index: 10; -webkit-transform: scale(1, 1); left: 0px; top: 0px; "></div><canvas width="320" height="480" style="position: absolute; left: 0px; top: 0px; z-index: 10; "></canvas></div>

 <script>
 document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
		WeixinJSBridge.call('showOptionMenu');
	});
	new Image().src = '/game/action.php?id=15';
var path = 'http://2014.qq.com/ola'  // 域名
var game_path = 'http://www.v918.cn/vgames/games/kuaipao/';    // 游戏载入路径

Crafty.config = {
    speed: 6,               // 移动速度
    score: 0,               // 初始化分数
    level: 0,               // 关卡数
    addemeny: true,        // 障碍开关
    supertime: 0,           // 无敌距离(可连续增加)
    acceleration:1.9,          // 加速度
    gamestart: false        // 游戏是否已经开始
}

$(function() {
    $.map(['_olagame','_olaviewW','_olaviewH'],function(n){
        if(window[n]){
            Crafty.GameError = true;
            return false;
        }
    })

    if(!Crafty.GameError){
        window._olagame = null;
        window._olaviewW = 320;
        window._olaviewH = 480;
        Crafty.init(window._olaviewW, window._olaviewH);
        Crafty.canvas.init();
        Crafty.canvas._canvas.style.zIndex = '10';
        Crafty.scene("Loading");
    }

});

Crafty.extend({
    startScore: function(){
        // 坚持1秒得5分
        window._olagame = setInterval(function(){
            Crafty.config.score ++;
            $("#gamescore span").text(Crafty.config.score);
        },200);
    },
    stopScore: function(){
       clearInterval(window._olagame); 
    }
})
Crafty.c("Player", {
    hp: {
        current: 3, // 初始3条生命
        max: 5 // 最多3条生命
    },
    movementSpeed: Crafty.config.speed + Math.ceil(Crafty.config.level / 2),
    super: false,
    archer: false,
    lives: 3,
    ship: "Qiuyuan",
    supership: "Qiuyuan_Super_Pic",
    shootship: "Qiuyuan_Shoot_Pic",
    collisionship: "Qiuyuan_Collision_Pic",
    init: function() {
        var stage = $('#cr-stage');
        this.requires("2D,DOM,SpriteAnimation,"+this.ship+",Multiway,Keyboard,Tween,Collision")
        .attr({
            x: Crafty.viewport.width/2-this.w/2,
            y: Crafty.viewport.height - this.h - 35,
            z:9,
            dynamic: true
        })
        .collision(new Crafty.polygon([13,58],[27,58],[33,69],[40,69],[43,47],[33,23],[54,9],[77,14],[77,42],[81,67],[83,74],[65,84],[33,72],[24,85],[12,85],[4,70]))
        .reel('PlayerMovingLeft', 450, [[0,0],[0,1],[0,2],[0,3]])
        .reel('PlayerMovingRight',  450, [[1,0],[1,1],[1,2],[1,3]])
        .animate('PlayerMovingLeft', -1)
        .multiway(this.movementSpeed, {UP_ARROW: -90, DOWN_ARROW: 90, RIGHT_ARROW: 0, LEFT_ARROW: 180});    // 角度
        this.bind('Moved',function(from) {
            if(this.x+this.w > Crafty.viewport.width ||
                this.x+this.w < this.w || 
                this.y+this.h-15 < this.h || 
                this.y+this.h+15 > Crafty.viewport.height){
                this.attr({
                    x:from.x, 
                    y:from.y
                });
            }
        }).bind("KeyDown",function(e){
            if(this.has(this.shootship)){
                if(e.keyCode == 38 || e.keyCode == 32){
                    var ball = Crafty('Ball');
                    ball.animate("Running",-1);
                    ball.shooting = true;
                    return false;
                }
            }
        }).bind("EnterFrame",function(frame) {
            // 当发现草皮停止滚动的时候
            // 认为球员到达球门前，准备开始射门
            if(Crafty.config.GoalBackGround && this.archer){
                if(!this.has(this.shootship)){
                    this.initArcher();
                }
            }
            // 实时更新血量
            Crafty.trigger("UpdateStats", this.hp);
        }).bind("Interaction",function(e) {
            if(this.has(this.shootship)){
                if(e.keyCode == 38 || e.keyCode == 32){
                    var ball = Crafty('Ball');
                    ball.animate("Running",-1);
                    ball.shooting = true;
                    return false;
                }
            }
        }).bind("Hurt",function(that) {
            var self = this;
            // 销毁一切触碰的障碍物
            that.destroy();
            if (that.gettype() == 'jersey') {
                if (this.hp.current < this.hp.max && this.hp.current >= 0) {
                    this.hp.current++;
                }
            } else if (that.gettype() == 'broom' && !this.super) {
                this.toggleComponent(this.ship, this.supership);
                this.css("background","url('"+game_path+"QiuyuanSuper.png')")
                Crafty.config.backtime = Crafty.config.acceleration;
                Crafty.config.acceleration = 10;
                this.super = true;
                window._olatimerout = setTimeout(function(){
                    Crafty.config.acceleration = Crafty.config.backtime;
                    self.toggleComponent(self.ship, self.supership);
                    self.css("background","url('"+game_path+"Qiuyuan.png')");
                    Crafty.config.backtime = undefined;
                    self.super = false;
                },3000);
            } else if (that.gettype() == 'pile' && !this.super) {
                var that = this;
                that.hp.current--;
                if(that.has(that.ship)){
                    that.toggleComponent(that.ship, that.collisionship);
                    that.css("background","url('"+game_path+"QiuyuanCollision.png')")
                }
                setTimeout(function(){
                    if(that.has(that.collisionship)){
                        that.toggleComponent(that.collisionship, that.ship);
                        that.css("background","url('"+game_path+"Qiuyuan.png')")
                    }
                },618)
            }

            if (this.hp.current <= 0) {
                Crafty.trigger("UpdateStats", this.hp);
                this.die();
            }
        })
        return this;
    },
    // 射手
    initArcher: function(){
        var that = this,
            ball;
        if(Crafty.config.GoalBackGround){
            this.addComponent(this.shootship);
            this.css("background","url('"+game_path+"QiuyuanShooting.png')")
            this.pauseAnimation();
            ball = Crafty.e('Ball');
            ball.attr({
                x:that.x + that.w/2 - ball.w/2,
                y:that.y - ball.h/2,
                z:3
            })
            .bind("EnterFrame",function(){
                this.x = that.x + that.w/2 - ball.w/2;
            });
        }
    },
    die: function() {
        Crafty.stopScore();
        Crafty.pause(true);
        Crafty.trigger('GameOver', Crafty.config.score);
    }
});

Crafty.c("Gameover",{
    init: function(){
        this.requires("2D,DOM,Image").attr({x: 0, y: window._olaviewH * 0.382, z: 9}).image(game_path+"Gameover.png", "no-repeat");
    }
});

Crafty.c("Enemy", {
    init: function() {
        var player = Crafty("Player");
        //所必须的模块
        this.requires("2D,DOM,Collision")
        //超出视窗的时候则销毁
        .bind("EnterFrame",function() {
            if (this.x > Crafty.viewport.width + this.w || this.x < -this.w || this.y < -this.h || this.y > Crafty.viewport.height + this.h) {
                this.destroy();
            }
        }).onHit("Player",function(ent) {
            Crafty(player[0]).trigger("Hurt", this);
        });
    },
    gettype: function() {
        return this.type;
    }
});

// 球桩可以阻碍球员前进，触碰到球员会闪动
Crafty.c("Pile", {
    type: "pile",
    init: function() {
        this.requires("Enemy,Pile_pic").attr({
            y: -this.h,
            x: Crafty.math.randomInt(this.w, Crafty.viewport.width - this.w),
            dynamic: true
        })
        .collision(new Crafty.polygon([0,39], [16, 0], [33, 39]))
        .bind("EnterFrame",function() {
            this.y += 2 * Crafty.config.acceleration;
        });
    }
});

// 会主动攻击球员的球桩，跟随球员轨迹移动
Crafty.c("Pile_attack", {
    type: "pile",
    init: function() {
        var player = Crafty("Player");
        this.requires("Enemy,Pile_pic").attr({
            y: -this.h,
            x: player.x,
            dynamic: true
        }).bind("EnterFrame",function() {
            player = Crafty(player[0]);
            if (this.y < 0) {
                this.y++;
            }

            if (this.x < player.x) {
                this.x++;
            }

            if (this.x > player.x) {
                this.x--;
            }

            this.y += 4 * Crafty.config.acceleration;
        });
    }
});

// 球衣能让用户再增加一条生命
Crafty.c("Jersey", {
    type: "jersey",
    init: function() {
        var player = Crafty("Player");
        this.requires("Enemy,Jersey_pic").attr({
            y: -this.h,
            x: Crafty.math.randomInt(0, Crafty.viewport.width - this.w),
            dynamic: true
        }).bind("EnterFrame",function() {
            this.y += 8;
        });
    }
});

// 扫把可以在300帧内让球员无敌
Crafty.c("Broom", {
    type: "broom",
    init: function() {
        var player = Crafty("Player");
        this.requires("Enemy,Broom_pic").attr({
            y: -this.h,
            x: Crafty.math.randomInt(0, Crafty.viewport.width - this.w),
            dynamic: true
        }).bind("EnterFrame",function() {
            this.y += 12;
        });
    }
});

// 球门线1
Crafty.c("Line",{
    init: function() {
        this.requires("2D, DOM, Line_pic")
        .attr({
            x: 0,
            y: -this.h - 150
        })
        .bind("EnterFrame",function() {
            if(this.y < Crafty.viewport.height + this.h - 150){
                this.y += 1 * Crafty.config.acceleration;
            }
        });
    }
});

// 球门线2
Crafty.c("Line2",{
    init: function() {
        this.requires("2D, DOM, Line2_pic")
        .attr({
            x: 0,
            y: -this.h
        })
        .bind("EnterFrame",function() {
            if(this.y < Crafty.viewport.height - this.h){
                this.y += 1 * Crafty.config.acceleration;
            }else{
                if(!Crafty.config.GoalBackGround){
                    // 球门线到底的时候，停止草皮滚动
                    Crafty.config.GoalBackGround = true;
                }
            }
        });
    }
});

// 球门背景
Crafty.c("GoalBackGround",{
    init: function() {
        this.requires("2D, DOM, Collision, GoalBackGround_pic")
        .attr({
            x: 0,
            y: - Crafty.viewport.height - 20,
            z:2
        })
        .bind("EnterFrame",function() {
            if(this.y < - 14){
                this.y += 1 * Crafty.config.acceleration;
            }else{
                this.y = -14;
            }
        }).onHit("Ball",function() {
            Crafty("Ball").trigger("Hurt", this);
        });;
    }
});

// 球门
Crafty.c("Goal",{
    type: "Goal",
    init: function() {
        this.requires("2D, DOM, Collision, Goal_pic")
        .attr({
            x: Crafty.viewport.width/2-this.w/2,
            y: - Crafty.viewport.height + 16,
            z:3
        })
        .bind("EnterFrame",function() {
            if(this.y < 16){
                this.y += 1 * Crafty.config.acceleration;
            }else{
                this.y = 16;
            }
        })
        .collision(new Crafty.polygon([30,110],[30,21],[228,21],[228,110]))
        .onHit("Ball",function() {
            Crafty("Ball").trigger("Hurt", this);
        });
    }
});

// 守门员
Crafty.c("Goalkeeper",{
    type:"Goalkeeper",
    turnleft: true,
    runing: false,
    init: function() {
        var ball = Crafty("Ball");
        this.requires("2D, DOM, SpriteAnimation, Collision, Goalkeeper_pic")
        .attr({
            x: Crafty.viewport.width/2-this.w/2,
            y: - Crafty.viewport.height + 65,
            z:4
        })
        .reel('Running', 600, [[0, 0], [1, 0]]) // setup animation
        .bind("EnterFrame",function() {
            if(this.y < 65){
                this.y += 1 * Crafty.config.acceleration;
            }else{
                this.y = 65;
                if(!this.runing){
                    this.runing = true;
                    this.animate('Running', -1)
                }
                var _half_w = (Crafty.viewport.width - Crafty("Goal").w) / 2;
                if(this.turnleft){
                    if(this.x > (_half_w + 5)){
                        this.x -= 2 * Crafty.config.acceleration;
                    }else{
                       this.turnleft = false; 
                       this.x = _half_w + 5;
                    }
                }else{
                    if(this.x < (_half_w + Crafty("Goal").w - this.w - 5)){
                        this.x += 2 * Crafty.config.acceleration;
                    }else{
                       this.turnleft = true; 
                       this.x = _half_w + Crafty("Goal").w - this.w - 5;
                    }
                }
            }
        }).onHit("Ball",function(ent) {
            Crafty("Ball").trigger("Hurt", this);
        });
    }
});

// 足球
Crafty.c("Ball",{
    type: "ball",
    shooting: false,
    init: function() {
        this.requires("2D, DOM, SpriteAnimation, Collision, Ball_pic")
        .reel('Running', 200, [[0, 0], [1, 0]])
        .bind("EnterFrame",function() {
            if(this.shooting){
                this.y -= window._olaviewH / 20;
                if(this.y >= Crafty.viewport.height){
                    //this.destroy();
                }
            }
        })
        .bind("Hurt", function(that){
            this.destroy();

            if(that.type == "Goal"){
                // console.log('命中球门');
                Crafty.config.score += 3;
                setPoints()
            }else{
                if(--(Crafty("Player").hp.current) <= 0){
                    Crafty("Player").die();
                }else{
                    Crafty.config.score += 1;
                    setPoints() 
                }
            }
        })
    }
});

// 球员
Crafty.sprite(92.5, 92.5, game_path + "Qiuyuan.png", {
    Qiuyuan: [0, 0]
});

// 球员变身超人
Crafty.sprite(92.5, 92.5, game_path + "QiuyuanSuper.png", {
    Qiuyuan_Super_Pic: [0, 0]
});

// 球员变身射手
Crafty.sprite(74, 80, game_path + "QiuyuanShooting.png", {
    Qiuyuan_Shoot_Pic: [0, 0],
});

// 球员被撞击
Crafty.sprite(92.5, 92.5, game_path + "QiuyuanCollision.png", {
    Qiuyuan_Collision_Pic: [0, 0],
});

// 木桩
Crafty.sprite(34, 47, game_path + "Pile.png", {
    Pile_pic: [0, 0]
});

// 球衣
Crafty.sprite(79, 79, game_path + "Jersey.png", {
    Jersey_pic: [0, 0]
});

// 扫把
Crafty.sprite(151, 150, game_path + "Broom.png", {
    Broom_pic: [0, 0]
});

// 球门线1
Crafty.sprite(320, 1, game_path + "Line.png", {
    Line_pic: [0, 0]
});

// 球门线2
Crafty.sprite(320, 42, game_path + "Line2.png", {
    Line2_pic: [0, 0]
});

// 球门
Crafty.sprite(216, 96, game_path + "Goal.png", {
    Goal_pic: [0, 0]
});

// 球门背景
Crafty.sprite(320, 103, game_path + "GoalBackGround.png", {
    GoalBackGround_pic: [0, 0]
});

// 守门员
Crafty.sprite(55, 56, game_path + "Goalkeeper.png", {
    Goalkeeper_pic: [0, 0]
});

// 足球
Crafty.sprite(31, 31, game_path + "Ball.png", {
    Ball_pic: [0, 0]
});

// 游戏加载
Crafty.scene("Loading",function() {
    var toLoad = [
            game_path + "Caopi.png",
            game_path + "Qiuyuan.png",
            game_path + "QiuyuanSuper.png",
            game_path + "QiuyuanCollision.png",
            game_path + "QiuyuanShooting.png",
            game_path + "Pile.png",
            game_path + "Jersey.png",
            game_path + "Broom.png",
            game_path + "Goalkeeper.png",
            game_path + "Goal.png",
            game_path + "Ball.png",
            game_path + "Line.png",
            game_path + "Line2.png",
            game_path + "GoalBackGround.png",
            game_path + "Gameover.png"
        ];

    var ola_denglu = $(".ola_denglu");
    var button = $('#_gamestart'),
        curtain = $('#gamestart'),
        getrule = $('#_gamerule'),
        load = $('#_gameload'),
        begin =$("#_gamestart2"),
        guide = $('.zhiyin');

    $("#gamestart").show();

    $(".game_ogain").click(function(){
        window.location.reload();
    })

    $(".again_1").click(function(){
        window.location.reload();
    })

    getrule.on('click',function() { // 查看游戏规则
        // 规则弹出窗口动画
        $(".ruleshadow").show();
        $(".rulebox").addClass("bounceIn animated r_index");
        setTimeout(function(){
            $(".rulebox").addClass("opacity").removeClass("bounceIn animated")
        },800)
        // 关闭弹出窗口动画
        $(".x_rulebox").click(function(){
            $(".rulebox").addClass("bounceOut animated");
            setTimeout(function(){
                $(".ruleshadow").hide();
                $(".rulebox").removeClass("opacity bounceOut animated r_index")
            },800)
        });
    })

    Crafty.load(toLoad, function() {
        load.remove();
        button.on('click', function(){
            curtain.hide();
            guide.show(0,function(){
                begin.on('click', function() {
                    var begintime,num = 3;
                    guide.hide();
                    $(".daojishi").show();
                    $(".daojishinum").text(num);
                    begintime = setInterval(function(){
                        if(num <= 1){
                            clearInterval(begintime);
                            $(".daojishi,.zhiyin").remove(); //删掉倒计时
                            setPoints();
                        }else{
                            $(".daojishinum").text(--num);
                        }
                    },1000);
                });
            });
        });
    },function(e) {
        var src = e.src ||"";
        load.find("span").text(~~e.percent+"%");
    },function(e) {
        load.text("游戏加载失败，请刷新页面重试");
    });
},function() {
    $('#loading').hide();
});

function setPoints(x,y){
    var backgroundBg,
        backgroundBg = "url(" + game_path + "Caopi.png)",
        levelname = "Level"+ (++Crafty.config.level),
        player;
        _oldPlayer = Crafty("Player");

    Crafty.config.gamestart = true;
    $("#gamescore").show();
    Crafty.defineScene(levelname,function() {
        //Setup background of level
        Crafty.background(backgroundBg);

        //Bind Gameloop to the Scene
        Crafty.unbind("EnterFrame");
        Crafty.bind("EnterFrame",function(frame) {
            // 奇数关卡的设置
            if(Crafty.config.level % 2 != 0){
                $('#cr-stage .life').show();
                spotObject(frame.frame);
            }else{
                $('#cr-stage .life').hide();
            }

            Crafty.trigger("setBackGround", frame.frame);
        })

        if(Crafty.config.level % 2 != 0){
            Crafty.startScore();
            Crafty.config.addemeny = true;
            player = Crafty.e("Player");
            Crafty("Player").archer = false;
            // 奇数关卡跑动时，加速度+0.5
            Crafty.config.acceleration += 0.5;
            Crafty.config.GoalBackGround = false;
            $('#interface,#gamescore').fadeIn();
        }else{
            player = Crafty.e("Player");

            player.attr({
                x:_oldPlayer.x,
                y:_oldPlayer.y
            }).tween({
                x: Crafty.viewport.width/2 - player.w/2,
                y: Crafty.viewport.height - player.h - 35
            }, 600)

            player.archer = true;
            player.addComponent("Twoway");
            player.twoway(player.movementSpeed);
            var line1 = Crafty.e("Line");
            var line2 = Crafty.e("Line2");
            var goalkeeper = Crafty.e("Goalkeeper");
            var goal = Crafty.e("Goal");
            var goalbg = Crafty.e("GoalBackGround");
            $('#interface,#gamescore').fadeOut();
        }
        
    });
    
    //_oldPlayer = undefined;
    Crafty.config.changeing = false;
    Crafty.enterScene(levelname);
}

Crafty.config.changeing = false;

// 变更射门关卡
function changeScene(){
    Crafty.stopScore();
    Crafty.config.changeing = true;
    Crafty.config.addemeny = false;
    if(Crafty("Player").super){
        Crafty.config.acceleration = Crafty.config.backtime;
        Crafty("Player").toggleComponent(Crafty("Player").ship, Crafty("Player").supership);
        Crafty("Player").css("background","url('"+game_path+"Qiuyuan.png')");
        Crafty.config.backtime = undefined;
        Crafty("Player").super = false;
        clearTimeout(window._olatimerout);
    }
    if(Crafty("Jersey").length <= 0 && Crafty("Pile").length <= 0  && Crafty("Pile_attack").length <= 0 && Crafty("Broom").length <= 0){
        setPoints();
    }else{
        // 通过计算障碍物的数量，保证人物到球门前没有任何障碍物
        clearTimeout(Crafty.config.changeing)
        Crafty.config.changeing = setTimeout(function(){
            changeScene();
        },50)
    }
}

// 活动障碍物对象
function spotObject(frame) {
    if(Crafty.config.score % 200 == 0 && Crafty.config.score != 0 && !Crafty.config.changeing){
        changeScene();
        return false;
    }

    if(Crafty.config.addemeny){
        if (frame % (38 * Math.ceil(Crafty.config.level / 2)) == 0 && Crafty("Jersey").length < 1) {
            Crafty.e("Jersey");
        }

        if (frame % Math.floor(61 / Math.ceil(Crafty.config.level / 2)) == 0 && Crafty("Pile").length < Crafty.config.level) {
            Crafty.e("Pile");
        }

        if (frame % Math.floor(122 / Math.ceil(Crafty.config.level / 2)) == 0 && Crafty("Pile_attack").length < Crafty.config.level && Crafty.config.acceleration > 7) {
            Crafty.e("Pile_attack");
        }

        if (frame % Math.floor(800 / Math.ceil(Crafty.config.level / 2)) == 0 && Crafty("Broom").length < 1 && Crafty.config.acceleration > 5) {
            Crafty.e("Broom");
        } 
    }
};

Crafty.bind("setBackGround",function(frame) {
    if(!Crafty.config.GoalBackGround){
        Crafty.stage.elem.style.backgroundPosition = "0px " + frame * Crafty.config.acceleration + "px";
    }
})

Crafty.bind("UpdateStats",function(player) {
    $('#cr-stage .life').text(player.current);
});

// 游戏结束场景
Crafty.bind("GameOver",function(score) {
    Crafty.e("Gameover");
    Crafty.config.gamestart = false;
    setTimeout(function(){
        $(".gameend").show();
        $(".game_fenshu span").text(score)
        $('.chenghao p').text(window.ola_title(score))
        $(".fenshubox").hide();
        $(".gameoverbox").hide();
    },2000)
});
</script>

<script type="text/javascript">
        
    if ($(window).height() > 480) {
        $(".start_bg").css({'top':'0px'})
    };
    if ($(window).height() < 481) {
        $(".gameend").css({
            'background':'#08b134 url(http://www.v918.cn/vgames/games/kuaipao/game_end.jpg) no-repeat center -32px',
            'background-size': '100%'
        })
        $(".chenghao").css({
            'bottom':'136px'
        })
    };
    if($(window).height() <= 372 && CheckSystem.isWeixin()){
        $("#interface .life").css({
            'top':'50px'
        })
    }
        // 规则弹出窗口动画
        $("#_gamerule").bind('touchstart',function(){
            
            $(".ruleshadow").show();
            $(".rulebox").addClass("bounceIn animated r_index");
            setTimeout(function(){
                $(".rulebox").addClass("opacity").removeClass("bounceIn animated")
            },800)
            
        });
        $(".x_rulebox").bind('touchstart',function(){
            $(".rulebox").addClass("bounceOut animated");
            setTimeout(function(){
                $(".ruleshadow").hide();
                $(".rulebox").removeClass("opacity bounceOut animated r_index")
            },800)
        });

 /**
 * iTouch
 */
var iTouch = function(){
    this.startX = 0;
    this.startY = 0;
    this.curX = 0;
    this.curY = 0;
    this.endX = 0;
    this.endY = 0;
    this.distance =1;
    this.init();
}
iTouch.prototype = {
    moveTop: function(){},
    moveBottom: function(){},
    moveLeft: function(){},
    moveRight: function(){},
    touchStart: function (event) {
        this.curY = Crafty("Player").y;
        this.curX = Crafty("Player").x;
        this.startX = event.touches[0].pageX;
        this.startY = event.touches[0].pageY;
    },
    touchEnd: function(event, _this) {
        if(Crafty("Player").archer){
                var e = {
                    key:38,
                    keyCode:38,
                    type:"keydown"
                }
            Crafty("Player").trigger('Interaction',e);
        }
    },
    touchMove: function (event, _this) {
        event.preventDefault();
        this.curX = event.targetTouches[0].pageX;
        this.curY = event.targetTouches[0].pageY-Crafty("Player").h;

        if(this.curX + Crafty("Player").w - 30 > 92.5 && this.curX - 30 + Crafty("Player").w <= 320 && this.curY + Crafty("Player").h + 10> 92.5 && this.curY + Crafty("Player").h < 480+10){
            if(!Crafty("Player").archer){
                Crafty("Player").tween({x:this.curX - 30,y:this.curY + 10},60);
            }else{
                Crafty("Player").tween({x:this.curX - 30},60);
            }
        }


    },
    init: function(){
        var _this = this;
        var dombox = document.getElementById('cr-stage');
        dombox.addEventListener("touchmove", function(){
            _this.touchMove(event, _this);
        }, false);
        dombox.addEventListener("touchstart", function(){
            _this.touchStart(event, _this);
        }, false);
        dombox.addEventListener("touchend", function(){
            _this.touchEnd(event, _this);
        }, false);
    }
}

new iTouch();


//榜单
$(".listtab li").each(function(i){
    $(this).click(function(){
       $(this).addClass("current").siblings().removeClass("current");
       $(".listinner > .listbox").eq(i).addClass("show").siblings().removeClass("show")
    });
});


//Cookie    
var Cookie = {
    set: function(e, t, n, r, i) {
        typeof n == "undefined" && (n = new Date((new Date).getTime() + 36e5)),
        document.cookie = e + "=" + escape(t) + (n ? "; expires=" + n.toGMTString() : "") + (r ? "; path=" + r : "; path=/") + (i ? ";domain=" + i : "")
    },
    get: function(e) {
        var t = document.cookie.match(new RegExp("(^| )" + e + "=([^;]*)(;|$)"));
        return t != null ? unescape(t[2]) : null
    },
    clear: function(e, t, n) {
        this.get(e) && (document.cookie = e + "=" + (t ? "; path=" + t : "; path=/") + (n ? "; domain=" + n : "") + ";expires=Fri, 02-Jan-1970 00:00:00 GMT")
    }
};


//检测系统新闻app/微信/浏览器
var CheckSystem = {
    UA : navigator.userAgent.toLowerCase(),
    isNewsApp : function() {
        try{
            if(CheckSystem.UA.match(/qqnews/i) == 'qqnews'){
                return true;
            }else{
                return fasle;
            }
        }catch(e){}
    },
    isWeixin : function() {
        try{
            if(CheckSystem.UA.match(/MicroMessenger/i) == 'micromessenger'){
                return true;
            }else{
                return fasle;
            }
        }catch(e){}
    },
    isiPhone : function() {
        try{
            if(CheckSystem.UA.match(/iphone/i) == 'iphone'){
                return true;
            }else{
                return fasle;
            }
        }catch(e){}
    }
}
var shareimg = '';

//称号
var ola_title = function(i){
    var level = 50;
    var title = ['球童','学徒','青训队员','梯队主力','职业球员','希望之星','豪门主力','超级巨星','一代球王','宇宙队传奇'];
    if (level >= i) {
        shareimg ='http://www.v918.cn/vgames/games/kuaipao/'+1+'.png'
        return title[0]
    }else if(level*2 >= i){
        shareimg ='http://www.v918.cn/vgames/games/kuaipao/'+2+'.png'
        return title[1]
    }else if(level*3 >= i){
        shareimg ='http://www.v918.cn/vgames/games/kuaipao/'+3+'.png'
        return title[2]
    }else if(level*4 >= i){
        shareimg ='http://www.v918.cn/vgames/games/kuaipao/'+4+'.png'
        return title[3]
    }else if(level*5 >= i){
        shareimg ='http://www.v918.cn/vgames/games/kuaipao/'+5+'.png'
        return title[4]
    }else if(level*6 >= i){
        shareimg ='http://www.v918.cn/vgames/games/kuaipao/'+6+'.png'
        return title[5]
    }else if(level*7 >= i){
        shareimg ='http://www.v918.cn/vgames/games/kuaipao/'+7+'.png'
        return title[6]
    }else if(level*8 >= i){
        shareimg ='http://www.v918.cn/vgames/games/kuaipao/'+8+'.png'
        return title[7]
    }else if(level*9 >= i){
        shareimg ='http://www.v918.cn/vgames/games/kuaipao/'+9+'.png'
        return title[8]
    }else if(level*10 >= i || i < level*11){
        shareimg ='http://www.v918.cn/vgames/games/kuaipao/'+10+'.png'
        return title[9]
    }else if(i >= level*11){
        shareimg ='http://www.v918.cn/vgames/games/kuaipao/'+10+'.png'
        return '宇宙队传奇'
    };
}

var share = function() {
    var title = 'ola!快跑!_2014巴西世界杯';
    var url = "http://www.v918.cn/vgames/games/kuaipao/";
    var desc = '我正在玩OLA快跑，获得了“'+ola_title(Crafty.config.score)+'”称号，小伙伴快来参与，看看你是啥称号吧！';
    var pic = shareimg;
        
       $(".weixin_layer").show();
       $(".weixin_layer").bind('touchstart',function(){
           $('.weixin_layer').fadeOut();
       })
}


//取URL参数

function getUrlParam(name){
	var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)"); //构造一个含有目标参数的正则表达式对象
	var r = window.location.search.substr(1).match(reg);  //匹配目标参数
	if (r!=null) return unescape(r[2]); return null; //返回参数值
} 



var onBridgeReady = function () {
	
        // 分享到朋友圈;
    WeixinJSBridge.on('menu:share:timeline', function (argv) {
        WeixinJSBridge.invoke('shareTimeline', {
            "img_url": shareimg,
            "img_width": "120",
            "img_height": "120",
            "link": "http://www.v918.cn/vgames/games/kuaipao/",
            "desc": ola_title(Crafty.config.score)?"我正在玩OLA快跑，获得了'"+ola_title(Crafty.config.score)+"'称号，小伙伴快来参与，看看你是啥称号吧！":"我正在玩OLA快跑，小伙伴快来参与，看看你是啥称号吧！",
            "title": ola_title(Crafty.config.score)?"我正在玩OLA快跑，获得了'"+ola_title(Crafty.config.score)+"'称号，小伙伴快来参与，看看你是啥称号吧！":"我正在玩OLA快跑，小伙伴快来参与，看看你是啥称号吧！"
        },function () { });
})
WeixinJSBridge.on('menu:share:appmessage', function(argv){
WeixinJSBridge.invoke('sendAppMessage',{
     "img_url":shareimg,
     "link":"http://www.v918.cn/vgames/games/kuaipao/",
     "desc":ola_title(Crafty.config.score)?"我正在玩OLA快跑，获得了'"+ola_title(Crafty.config.score)+"'称号，小伙伴快来参与，看看你是啥称号吧！":"我正在玩OLA快跑，小伙伴快来参与，看看你是啥称号吧！",
     "title":ola_title(Crafty.config.score)?"我正在玩OLA快跑，获得了'"+ola_title(Crafty.config.score)+"'称号，小伙伴快来参与，看看你是啥称号吧！":"我正在玩OLA快跑，小伙伴快来参与，看看你是啥称号吧！"
     }, function() {})
})

}

    
document.addEventListener('touchmove', function (e) { e.preventDefault(); }, false);
$(function(){
    
    if (document.addEventListener) {
        document.addEventListener('WeixinJSBridgeReady', onBridgeReady, false);
    } else if (document.attachEvent) {
        document.attachEvent('WeixinJSBridgeReady', onBridgeReady);
        document.attachEvent('onWeixinJSBridgeReady', onBridgeReady);
    }
})


</script>
</iframe></body></html>