<!DOCTYPE html>
<html>
    <head>
        <title>名字大作战</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport"content="width=device-width,target-densitydpi=320,initial-scale=0.5, minimum-scale=0.5,maximum-scale=0.5,user-scalable=no"/>
        <meta name="viewport"content="width=device-width,initial-scale=0.5, minimum-scale=0.5, maximum-scale=0.5, user-scalable=no"/>
        <meta name="apple-mobile-web-app-capable"content="yes"/><meta name="full-screen"content="true"/>
        <meta name="screen-orientation"content="portrait"/><meta name="x5-fullscreen"content="true"/>
        <meta name="360-fullscreen"content="true"/>
        <style type="text/css">
            body{padding:0;margin:0}#win{width:100%;height:100%;margin:auto;max-width:640px}#bg2{float:left;height:100%;background-image:url(img/bg2.jpg);background-position:center top;background-repeat:no-repeat;background-size:100%}#pbox{float:left;padding-top:80px;margin:0 8px}.player{width:46%;float:left}.head{width:80px;height:80px;float:left}.hpnum{float:left;height:24px;font-size:22px}.blood{float:left;height:28px;background-color:#0F0}.HP{float:left;height:28px;background-color:#F00;width:0px}.name{float:left;height:28px;font-size:22px}.attribute{float:left;width:250px;margin-top:12px}.attribute div{float:left;width:33.3%;height:30px;font-size:20px}.title{float:left;width:50%;text-align:center;color:#F90}.num{float:left;width:50%;text-align:center}.selfname{color:#0034ff}.matchname{color:#F3F}.gmspan{color:#ff8500}#process div{margin:5px 0}.ahurt{color:#F00}.dhurt{color:#0F0}#processbox{float:left;width:100%}#process{margin:10px;margin-top:40px;overflow-y:auto;font-size:24px}#start{width:640px;height:876px;position:absolute;top:0;background-color:white;z-index:1002;overflow:auto;background-image:url(img/bg1.jpg);background-position:center top;background-repeat:no-repeat;background-size:100%}#result{display:none;width:640px;height:440px;max-height:100%;position:absolute;background-color:white;z-index:1002;overflow:auto;border-bottom:outset}
        </style>
    </head>
    <body>
        <div id="win">
            <div id="bg2">
                <div id="pbox">
                    <div id="self" class="player">
                        <div class="head"></div>
                        <div class="hpnum"style="text-align:left">
                            <span class="hp">100</span>/<span class="maxhp">100</span>
                        </div>
                        <div class="blood">
                            <div class="HP" style="float:right"></div>
                        </div>
                        <div class="name">猪头1</div>
                        <div class="attribute" style="margin-left:36px">
                            <div class="att"><span class="title">攻击</span><span class="num">100</span></div>
                            <div class="def"><span class="title">防御</span><span class="num">100</span></div>
                            <div class="hit"><span class="title">命中</span><span class="num">100</span></div>
                            <div class="miss"><span class="title">闪避</span><span class="num">100</span></div>
                            <div class="crit"><span class="title">暴击</span><span class="num">100</span></div>
                            <div class="tenacity"><span class="title">韧性</span><span class="num">100</span></div>
                            <div class="speed"><span class="title">速度</span><span class="num">100</span></div>
                            <div class="rp"><span class="title">RP</span><span class="num">100</span></div>
                            <div class="iq"><span class="title">IQ</span><span class="num">100</span></div>
                        </div>
                    </div>
                    <div id="match" class="player" style="float:right">
                        <div class="head" style="float:right"></div>
                        <div class="hpnum" style="text-align:right"><span class="hp">100</span>/<span class="maxhp">100</span></div>
                        <div class="blood"><div class="HP" style="float:left"></div></div>
                        <div class="name" style="text-align:right">猪头2</div>
                        <div class="attribute">
                            <div class="att"><span class="title">攻击</span><span class="num">100</span></div>
                            <div class="def"><span class="title">防御</span><span class="num">100</span></div>
                            <div class="hit"><span class="title">命中</span><span class="num">100</span></div>
                            <div class="miss"><span class="title">闪避</span><span class="num">100</span></div>
                            <div class="crit"><span class="title">暴击</span><span class="num">100</span></div>
                            <div class="tenacity"><span class="title">韧性</span><span class="num">100</span></div>
                            <div class="speed"><span class="title">速度</span><span class="num">100</span></div>
                            <div class="rp"><span class="title">RP</span><span class="num">100</span></div>
                            <div class="iq"><span class="title">IQ</span><span class="num">100</span></div>
                        </div>
                    </div>
                </div>
                <div id="processbox"><div id="process"></div></div>
                <div id="bg"></div>
                <div id="start">
                    <div style="margin-left:264px;margin-top:398px;"><input id="aname" value="" style="margin:0;padding:0;width:160px;background-color:transparent;border:none;font-size:24px;"/></div>
                    <div style="margin-left:284px;margin-top:50px"><input id="dname" value="" style="margin:0;padding:0;width:140px;background-color:transparent;border:none;font-size:24px"/></div>
                    <input type="button" onclick="startGame();" style="display:block;margin:0 auto;margin-top:40px;width:180px;height:180px;border:none;background-color:transparent"/>
                </div>
                <div id="result">
                    <div id="resultbg" style="width:100%;height:277px;background-image:url(img/win.jpg);background-position:center top;background-repeat:no-repeat;background-size:100%;margin-top:20px"><div id="endtitle"style="height:80px;width:390px;float:left;font-size:28px;margin-top:106px;margin-left:130px;text-align:center;word-wrap:break-word;"></div></div>
                    <div style="float:left;margin-left:40px">
                        <input type="button" onclick="javascript:window.location.href = 'http://www.v918.cn/vgames/'" style="margin-left:10px;width:80px;height:80px;background-image:url(dog/assets/logo.png);background-size:100%"/>
                        <div style="font-size:24px">更多游戏</div>

                    </div>
                    <div style="float:left;margin-left:60px">
                        <input type="button"onclick="restart();"style="margin-left:10px;width:80px;height:80px;background-image:url(img/restart.jpg);background-size:100%"/>
                        <div style="font-size:24px">重新选择</div>
                    </div>
                    <div style="float:left;margin-left:60px">
                        <input type="button"onclick="WeiXinShareBtn();"style="margin-left:10px;width:80px;height:80px;background-image:url(img/wx.jpg);background-size:100%"/>
                        <div style="font-size:24px">炫耀分享</div>
                    </div>
                    <div style="float:left;margin-left:60px">
                        <a type="button" id="rancat22" href='http://www.v918.cn/vgames' style="display:block;border:none;margin-left:10px;width:80px;height:80px;background-image:url(img/rc.jpg);background-size:100%"></a>
                        <div style="font-size:24px">领红包</div>
                    </div>

                </div>

            </div>

        </div>
        <script src="jquery.min.js"></script>
        <script src="nf.min.js"></script>

    </body>
</html>