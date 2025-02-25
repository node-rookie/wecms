
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8"></meta>
        <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1"></meta>
        <title>微赢冰桶挑战</title>
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <style type="text/css">
            html{color:#545454;background-color:#94DAF3;-webkit-text-size-adjust:100%;-webkit-touch-callout:none;-webkit-user-select:none;-webkit-tap-highlight-color:transparent}blockquote,body,button,dd,dl,dt,fieldset,form,h1,h2,h3,h4,h5,h6,hr,html,img,input,legend,li,ol,p,pre,td,textarea,th,ul{margin:0;padding:0}body,button,input,select,textarea{font:14px/1.5 "Helvetica neue",Helvetica,Tahoma,Arial,"\5FAE\8F6F\96C5\9ED1","\5B8B\4F53",sans-serif}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{margin:0;padding:0;display:block}audio,canvas,video{display:inline-block}img{border:0;max-width:100%;height:auto}table{border-collapse:collapse;border-spacing:0}h1,h2,h3,h4,h5,h6{font-size:100%}em,i{font-style:normal}ol,ul{list-style:none}button{cursor:pointer;border:0}a:link,a:visited{text-decoration:none;-webkit-tap-highlight-color:transparent}a:active,a:hover{text-decoration:none}.hide{display:none}body{background-color:#94DAF3;position:absolute;height:90%;width:100%}.btn{height:50px;line-height:50px;color:#fff;font-size:20px;font-weight:700;background-color:#E6735B;display:block;max-width:300px;width:100%;margin:0 auto 10px}.btn.btn-sub{background-color:#B36C5E;color:#FDB7A9}.grid{position:absolute;height:100%;width:100%;max-width:800px;top:0;left:0;right:0;bottom:0;margin:auto;margin-top: 20px;}.page{position:absolute;height:100%;width:100%}.page p{padding:15px;line-height:25px}#loading{text-align:center;font-size:20px}#loading p{color:#fff;padding-top:100px}#index{text-align:center}#index .logo{width:360px;height:220px;background:url(vapp/logo.png);margin:20px auto 10px}#index .txt{color:#AD2F19;font-size:14px;padding:0}#index .btn-wrap{position:absolute;bottom:30px;left:50%;margin-left:-140px;width:280px;height:180px}#room{background-color:#94DAF3}#room:after{display:block;content:'';height:200px;width:100%;background-color:#418096;position:absolute;bottom:0;left:0}#room .dialog{position:absolute;height:100%;width:100%;background-color:rgba(0,0,0,.3);z-index:100}#room .dialog .inner{border-radius:10px;position:absolute;top:0;left:0;bottom:0;right:0;margin:auto;box-shadow:2px 0 5px rgba(0,0,0,.4);padding:10px;background-color:#fff}#room .dialog .d-sex{height:250px;width:280px;text-align:center}#room .dialog .d-sex p{padding:0;margin-bottom:10px}#room .dialog .d-sex div{height:200px;width:100px;float:left;cursor:pointer;margin:0 18px;background-color:#ddd;border:2px solid #C9C9C9;border-radius:10px}#room .dialog .d-sex div img{display:block;min-width:100%}#room .dialog .d-over{height:360px;width:280px;bottom:auto;top:40px}#room .dialog .d-over p{padding:5px}#room .dialog .d-over .t1,#room .dialog .d-over .t2{text-align:center;font-size:25px;font-weight:700}#room .dialog .d-over .t1 em{color:#00B4FF}#room .dialog .d-over .t2{color:red}#room .dialog .d-over .body{margin-top:10px}#room .dialog .d-over .r{float:left;width:110px;height:270px}#room .dialog .d-over .r img{display:block;max-width:100%}#room .dialog .d-over .input-area{float:left;width:160px;text-align:center}#room .dialog .d-over .input-area input{border:1px solid #bbb;display:block;width:156px;height:30px;line-height:30px;margin-bottom:10px}#room .dialog .share-arrow{width:90px;height:75px;background:url(vapp/share-tips.png) 0 0/90px 75px;position:absolute;top:0;right:0;-webkit-background-size:90px 75px;display:none;z-index:100}#room .main header{height:50px;line-height:50px;width:100%;font-size:14px;position:absolute;top:0;left:0}#room .main header span{padding:0 10px}#room .main header span em{font-weight:700}#room .main header #time{float:right}#room .main header #score{float:left}#room .main #btn-click{width:200px;height:50px;line-height:50px;text-align:center;background-color:#fff;border:2px solid #000;position:absolute;bottom:30px;left:50%;margin-left:-100px;z-index:10;font-size:16px;color:#000}#room .main #btn-click:active{bottom:28px}#room .main .role{height:680px;width:330px;position:absolute;left:50%;margin-left:-165px;bottom:65px;z-index:2}#room .main .role.role-m{background:url(vapp/m.png)}#room .main .role.role-f{background:url(vapp/f.png)}#bucket{height:890px;width:470px;display:none;position:absolute;top:0;left:50%;margin-left:-235px;background:url(vapp/b1.png) right top no-repeat;z-index:3}#room .water-wrap{height:270px;overflow:hidden;width:15px;position:absolute;left:28px;top:40px;background-color:#f0f0f0;border:1px solid #000;z-index:2}#room .water-wrap #water{display:block;position:absolute;bottom:0;left:0;width:15px;height:0;background-color:#FF9B9B}#room .d-over a{font-weight:400;text-decoration:underline;color:#E6735B;font-size:16px;padding:0 5px}.copyright{position:fixed;bottom:0;left:0;text-align:center;color:#fff;font-size:12px;width:100%;height:30px;line-height:30px}#detail,#images{overflow-y:scroll;padding-bottom:50px}#detail .btn.btn-back,#images .btn.btn-back{position:fixed;bottom:10px;width:100%;z-index:101;left:50%;margin-left:-150px;margin-bottom:50px;}#images img{max-width:100%;display:block;margin:0 auto;border-radius:10px}#images{text-align:center}@media all and (max-width:480px){#index .logo{width:180px;height:110px;-webkit-background-size:180px 110px;background-size:180px 110px}#room:after{height:100px}#room .main #btn-click{height:40px;line-height:40px}#bucket{height:445px;width:235px;margin-left:-118px;-webkit-background-size:235px 445px;background-size:235px 445px;top:auto;bottom:20px}#room .main .role{height:340px;width:165px;margin-left:-82.5px;bottom:35px}#room .main .role.role-f,#room .main .role.role-m{-webkit-background-size:165px 340px;background-size:165px 340px}}
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
            .lis{overflow: hidden;width: 100%;z-index: 99999;position: absolute;top:0px;}
            .lis a{display: block;width:99.9%;color:#ffffff;font-size:14px;text-decoration: none;background:#606783;text-align: center;opacity: 0.5;line-height:30px;font-weight: bold;font-family:"微软雅黑"}
            .lis a img{position: relative;top: 1px;}
        </style>
    </head>
    <body>
        <div class="hide">
            <img src="vapp/b1.png"/>
            <img src="vapp/b2.png"/>
            <img src="vapp/b3.png"/>
            <img src="vapp/b4.png"/>
            <img src="vapp/b5.png"/>
            <img src="vapp/f.png"/>
            <img src="vapp/m.png"/>
            <img src="vapp/share-tips.png?t=1"/>
        </div>
        <div class="grid">
            <div class="page" id="loading">
                <p>游戏加载中...</p>
                <p>关注ALS疾病，从你我开始！</p>
            </div>
            <div class="page hide" id="index">
                <div class="logo"></div>
                <p class="txt"><font color="#FF0000">【微赢】</font>挑战冰桶，并点名三位好友来挑战。
                    <br>关怀渐冻人，支持弱势公益。</p>
                <div class="btn-wrap">
                    <button id="btn-play" class="btn btn-main">我要挑战</button>
                    <button id="btn-detail" class="btn btn-sub">活动详情</button>
                    <button id="btn-images" class="btn btn-sub">明星湿身照</button>
                </div>
            </div>
            <div class="page hide" id="detail">
                <p>朋友们，当你们品尝美食的时候，你是否知道有一群人只能看着津液流淌不止，等待身边的亲人一口一口地喂下；朋友，当你和别人沟通且开怀大笑的时候，是否知道有一群人有口难开，用眼睛一眨一眨交流，眼睛里浸满泪花；朋友，当你们游走古迹美景的时候，是否知道有一群人全身僵硬躺在病床上不能翻身，不能表达苦楚，不能抓挠痛痒，有时就快要不能呼吸……正是这样一群人，他们拥有炙热的灵魂，他们拥有不屈的脊梁，他们拥有聪明的头脑，但他们需要你，需要你的爱和关怀。朋友，你听见他们的呼唤了吗？他们拥有同一个名字叫“渐冻人”（ALS）。我相信在爱的光芒下，他们会慢慢融化，我相信只要坚持就会重生。</p>
                <p>“冰桶挑战”，由美国棒球运动员Peter　Frates发起，旨在帮助那些患有“渐冻人症”(ALS)的群体。当前已经在全球流行，国内外部分娱乐巨星、运动员以及IT行业部分大佬均积极参与的同时，并献出爱心捐款。</p>
                <p>本游戏旨在：通过游戏虚拟参与冰桶挑战，并点名邀请三个好友将爱心接力！关注渐冻人，从你我开始！</p>
                <button class="btn btn-back">返回</button>
            </div>
            <div class="page hide" id="images">
                <p>
                    <img  data-src="vapp/p10.png" alt="周杰伦">周杰伦
                </p>
                <p>
                    <img  data-src="vapp/p2.png" alt="邓紫棋">邓紫棋
                </p>
                <p>
                    <img  data-src="vapp/p1.png" alt="陈奕迅">陈奕迅
                </p>
                <p>
                    <img  data-src="vapp/p6.png" alt="刘德华">刘德华
                </p>
                <p>
                    <img  data-src="vapp/p4.png" alt="李冰冰">李冰冰
                </p>
                <p>
                    <img data-src="vapp/p5.png" alt="李彦宏">李彦宏
                </p>
                <p>
                    <img  data-src="vapp/p3.png" alt="雷军">雷军
                </p>
                <p>
                    <img  data-src="vapp/p11.png" alt="詹姆斯">詹姆斯
                </p>
                <p>
                    <img  data-src="vapp/p7.png" alt="谢霆锋">谢霆锋
                </p>
                <p>
                    <img  data-src="vapp/p8.png" alt="章子怡">章子怡
                </p>
                <p>
                    <img  data-src="vapp/p9.png" alt="周鸿祎">周鸿祎
                </p>
                <p>
                    <img  data-src="vapp/p12.png" alt="奥尼尔">奥尼尔
                </p>
                <button class="btn btn-back">返回</button>
            </div>
            <div class="page hide" id="room">
                <div id="d-sex" class="dialog hide">
                    <div class="inner d-sex">
                        <p>选择您的形象</p>
                        <div class="m" data-sex="m">
                            <img src="vapp/m.png">
                        </div>
                        <div class="f" data-sex="f">
                            <img src="vapp/f.png">
                        </div>
                    </div>
                </div>
                <div id="d-over" class="dialog d-over hide">
                    <div class="share-arrow"></div>
                    <div class="inner d-over">
                        <p class="t1"><em id="final-score">100升</em>冰水桶</p>
                        <p class="t2">挑战成功</p>
                        <div class="body clearfix">
                            <div class="r" id="d-over-role">
                                <img src="">
                            </div>
                            <div class="input-area">
                                <p>输入你要邀请挑战的
                                    <br>3名好友名字</p>
                                <input type="text"/>
                                <input type="text"/>
                                <input type="text"/>
                                <button id="btn-ok" class="btn btn-ok">分享至朋友圈</button> <a href="javascript:;" id="btn-retry">重新挑战</a>  <a href="http://www.v918.cn/vgames">更多游戏</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main">
                    <header><span id="score">水量：<em>0</em></span>  <span id="time">时间：<em>10</em></span>
                    </header>
                    <div class="water-wrap"><span id="water"></span>
                    </div>
                    <div id="bucket"></div>
                    <div class="role"></div><a href="javascript:;" id="btn-click">快速点击增加水量</a>
                </div>
            </div>
        </div>
        <script src="js/main.js"></script>
        <script src="js/libs.js"></script>
        <script src="js/tt.js"></script>
        <script language=javascript>
            var mebtnopenurl = 'http://www.v918.cn/vgames';
            dataForWeixin = {
                "appId": "",
                "imgUrl": "http://www.v918.cn/vgames/games/qmbttz/vapp/640.jpg",
                "url": "http://www.v918.cn/vgames/games/qmbttz/",
                "tTitle": "冰桶挑战-微时代游戏",
                "tContent": "冰桶挑战，等你来战！"
            };

            document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
                WeixinJSBridge.on('menu:share:appmessage', function(argv) {
                    WeixinJSBridge.invoke('sendAppMessage', {
                        "appid": dataForWeixin.appId,
                        "img_url": dataForWeixin.imgUrl,
                        "link": dataForWeixin.url,
                        "desc": dataForWeixin.tContent,
                        "title": dataForWeixin.tTitle
                    });
                    setTimeout(function() {
                        location.href = mebtnopenurl;
                    }, 1500);
                });

                WeixinJSBridge.on('menu:share:timeline', function(argv) {
                    WeixinJSBridge.invoke('shareTimeline', {
                        "appid": dataForWeixin.appId,
                        "img_url": dataForWeixin.imgUrl,
                        "img_width": "640",
                        "img_height": "640",
                        "link": dataForWeixin.url,
                        "desc": dataForWeixin.tContent,
                        "title": dataForWeixin.tTitle
                    });
                    setTimeout(function() {
                        location.href = "http://www.v918.cn/vgames";
                    }, 1500);
                });
            }, false);
        </script>
        <div>
        </div>
    </body>
</html>
