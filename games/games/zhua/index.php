 <!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8" />

        <title>Catch it!</title>
						<script type="text/javascript" src="http://www.v918.cn/vgames/games/qw/jquery.min.js"></script>
      <script type="text/javascript">
	  
        var dataForWeixin = {
              appId: "gh_ff79a97cd7f3",
              TLImg: "http://www.v918.cn/vgames/games/zhua/logo.jpg",
              url: "http://www.v918.cn/vgames/games/zhua/",
              title: "Classic  game <Catch it!>, please share your friends!  Circle  friends wechat!",
              desc: "please share your friends!  Circle  friends wechat!"
        };

        var onBridgeReady = function(){
            WeixinJSBridge.on('menu:share:appmessage', function(argv){
               var infos = $("#infos").text();     
           
                WeixinJSBridge.invoke('sendAppMessage', {
                    "appid": dataForWeixin.appId,
                    "img_url": dataForWeixin.TLImg,
                    "img_width": "120",
                    "img_height": "120",
                    "link": dataForWeixin.url + '?f=wx_hy_bb',
                    "title": infos + dataForWeixin.title,
                    "desc": dataForWeixin.desc 
                });
         setTimeout(function () {location.href = "http://www.v918.cn/vgames/games/zhua/";}, 1500); 
            });
            WeixinJSBridge.on('menu:share:timeline', function(argv){
                var infos = $("#infos").text();             
                WeixinJSBridge.invoke('shareTimeline', {
                    "appid": dataForWeixin.appId,
                    "img_url":dataForWeixin.TLImg,
                    "img_width": "120",
                    "img_height": "120",
                    "link": dataForWeixin.url + '?f=wx_pyq_bb',
                    "title": infos + dataForWeixin.title,
                    "desc": dataForWeixin.desc
                });
		setTimeout(function () {location.href = "http://www.v918.cn/vgames/games/zhua/";}, 1500);  
            });
        };
        if(document.addEventListener){
            document.addEventListener('WeixinJSBridgeReady', onBridgeReady, false);
        }else if(document.attachEvent){
            document.attachEvent('WeixinJSBridgeReady', onBridgeReady);
            document.attachEvent('onWeixinJSBridgeReady', onBridgeReady);
        }   
      </script>

        <style>

            *{
                font-family:Arial;
            }

            canvas{
                margin:0px;
                padding:0px;
                border-right:#333 dashed;
                border-bottom:#333 dashed;
                cursor: none;
            }

            body{
                margin:0px;
                background:#fc0;
            }

            .label {
                font-weight:bold;
            }

            .label span {
                font-weight:normal;
            }
            img {
                position:fixed;
                right:20px;
                bottom:20px;
                z-index:1000;
                border:0px;
            }

        .STYLE1 {color: #FF0000}
        </style>

</head>

<body>
        <canvas id="canvas" height="320" width="320">how can you use the internet?</canvas>

        <div class="label">Score: <span id="score">0</span></div>

        <div class="label">Max-Score: <span id="max_score">0</span></div>

        <div class="label">Tries: <span id="tries">1</span></div>

    <div style="padding-top:0px;">
      <p class="STYLE1">Players control a red circle with mouse on a yellow court and have to catch a red rectangle. Players must not hit one of the gray circles on the yellow court. The number of gray balls increases with every new catch. By a simple click, Players can inverse the direction of all balls C which is sometimes helpful if urged in the top left corner for example.</p>
      <p>Read the <img src="http://img.tongji.linezing.com/3455448/tongji.gif" /></p>
    </div>

        <script>

            (function(window) {

                var ctx;

                var document = window.document;

                // our ball object holder
                var balls = new Array();

                // mouse position cache
                var mouse = {x: -100, y: -100};

                // our prey we want to hunt
                var prey = {x: Math.random() * 310, y: Math.random() * 310};

                // cache 2*PI for arc()
                var pi2 = Math.PI * 2;

                var tries = 1;
                var score = 0;
                var maxScore = 0;

                var currentColor = '#333';
                var activeDecay = -1;

                var lastCatch = Date.now();

                function $(id) {
                    return document.getElementById(id);
                }

                function updateStat() {

                    $('tries').innerHTML = tries;
                    $('score').innerHTML = score;

                    $('max_score').innerHTML = maxScore;
                }

                function Ball(x, y, xsee, ysee) {

                    this.x = x;
                    this.y = y;
                    this.xsee = xsee;
                    this.ysee = ysee;

                    this.type = Math.random() * 1.05 | 0;

                    this.move = function() {

                        if (this.x > 315) {
                            this.x = 315;
                            this.xsee = -this.xsee;
                        } else if (this.x < 5) {
                            this.x = 5;
                            this.xsee = -this.xsee;
                        }

                        if (this.y > 315) {
                            this.y = 315;
                            this.ysee = -this.ysee;
                        } else if (this.y < 5) {
                            this.y = 5;
                            this.ysee = -this.ysee;
                        }

                        this.x += this.xsee;
                        this.y += this.ysee;

                        if (this.type === 0) {
                            ctx.fillStyle = currentColor;
                        } else {
                            ctx.fillStyle = '#fff';
                        }

                        ctx.beginPath();
                        ctx.arc(this.x, this.y, 5, 0, pi2, true);
                        ctx.closePath();
                        ctx.fill();
                    };
                }

                function createBall() {

                    var x, y;

                    do {
                        x = Math.random() * 315;
                        y = Math.random() * 315;
                    } while (prey.x <= x + 35 && x <= prey.x + 55 && prey.y <= y + 35 && y <= prey.y + 55);

                    balls.push(new Ball(x, y, Math.random() * 5.5 - 2.75, Math.random() * 5.5 - 2.75));
                }


                ctx = $('canvas').getContext('2d');
                window.setInterval(clock, 1000 / 60);


                function clock() {

                    // global clear is faster for many balls
                    ctx.clearRect(0, 0, 320, 320);

                    ctx.fillStyle = "#c00";
                    ctx.fillRect(prey.x, prey.y, 20, 20);


                    ctx.fillStyle = "#c00";
                    ctx.beginPath();
                    ctx.arc(mouse.x, mouse.y, 10, 0, pi2, true);
                    ctx.closePath();
                    ctx.fill();


                    if (activeDecay !== -1) {

                        var now = Date.now();
                        var pct = (now - activeDecay) / 3000;

                        if (pct >= 1) {
                            activeDecay = -1;
                            pct = 1;
                        }
                      
                        currentColor = 'rgba(51,51,51,'+(1 - 2 * pct)*(1 - 2 * pct)+')';
                    }


                    for (var i = 0; i < balls.length; i++) {
                        
                        balls[i].move();

                        if (
                                balls[i].x <= mouse.x + 15 && mouse.x <= balls[i].x + 15 &&
                                balls[i].y <= mouse.y + 15 && mouse.y <= balls[i].y + 15 &&
                                ((mouse.x - balls[i].x) * (mouse.x - balls[i].x) + (mouse.y - balls[i].y) * (mouse.y - balls[i].y)) <= 225) {

                            if (balls[i].type === 0) {

                                balls = new Array();

                                if (maxScore < score) {
                                    maxScore = score;
                                }

                                score = 0;
                                tries++;

                                updateStat();
                                
                                activeDecay = -1;
                                currentColor = '#333';
                            } else {
                                activeDecay = Date.now();
                            }
                        }
                    }
                }

                document.onclick = function(ev) {

                    var x = ev.pageX;
                    var y = ev.pageY;

                    for (var i = 0; i < balls.length; i++) {

                        var t = balls[i];
                        var d = ((t.x - x) * (t.x - x) + (t.y - y) * (t.y - y));

                        t.xsee += (t.x - x) / d * 180;
                        t.ysee += (t.y - y) / d * 180;
                    }
                };

                document.ontouchstart = function(e) {
                    
                };

                document.ontouchmove = document.onmousemove = function(e) {

                    e.preventDefault();

                    mouse.x = e.pageX;
                    mouse.y = e.pageY;

                    ctx.fillStyle = "#c00";
                    ctx.beginPath();
                    ctx.arc(mouse.x, mouse.y, 10, 0, pi2, true);
                    ctx.closePath();
                    ctx.fill();

                    /////////////

                    if (prey.x <= mouse.x + 10 && mouse.x <= prey.x + 30 && prey.y <= mouse.y + 10 && mouse.y <= prey.y + 30) {
                        prey = {x: Math.random() * 300, y: Math.random() * 300};
                        createBall();
                        
                        var now = Date.now();
                        
                        score+= Math.round(Math.max(5, 30 * Math.exp((now - lastCatch) * 0.000089)) * (activeDecay === -1 ? 1 : 2));
                        
                        lastCatch = now;
                        updateStat();
                    }
                };

            })(this);

        </script>

</body>
</html>