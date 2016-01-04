<!doctype html><html><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,minimal-ui"><meta http-equiv="pragma" content="no-cache"><meta http-equiv="Cache-Control" content="no-cache, must-revalidate"><link rel="shortcut icon" href="assets/img/favicon.ico?ver=1.1.61"><link rel="icon" href="assets/img/favicon.ico?ver=1.1.61"><meta http-equiv="expires" content="-1"><title>微信找你妹</title><link rel="stylesheet" type="text/css" href="assets/css/m.min.css?v=201408011050"><script>var _hmt=_hmt||[];!function(){var e=document.createElement("script");e.src='';var t=document.getElementsByTagName("script")[0];t.parentNode.insertBefore(e,t)}();</script></head><body>



</body></html>


<script id="tpl" type="text/html">

<div class="grid">
        <div class="page hide" id="loading">
            <div class="loading-txt"><%=loading%></div>
        </div>
        <div class="page hide" id="index">
            <h1><%=title%></h1>

            <div id="help"><%=help_txt%></div>
            <div class="btns">
                <button data-type="color" class="btn play-btn">
                    <%=btn_start%>
                </button>
            </div>
        </div>
        <div class="page hide" id="room">
            <header>
                <span class="lv">
                    <%=score%>
                    <em>
                        1
                    </em>
                </span>
                <span class="time">
                </span>
                <span class="btn btn-pause">
                    <%=btn_pause%>
                </span>
            </header>
            <div id="box" class="lv1">
            </div>
        </div>
        <div class="page hide" id="dialog">
   <!-- <div id="share-wx" style=""><p style="text-align: right; padding-left: 10px;"><img src="./share.png" id="share-wx-img" style="max-width: 280px; padding-right: 25px;"></p></div>-->
            <div class="inner">
                <div class="content gameover">
                    <div class="inner-content">
                       
                        <h3></h3>
                        <div class="btn-wrap">
                            <button class="btn btn-restart">
                                <%=btn_reTry%>
                            </button>
                            <a href="http://www.v918.cn/vgames/" target="_blank" class="btn btn-boyaa">
                                <%=btn_more_game%>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="content pause">
                    <div class="inner-content">
                      
                        <h3>
                            <%=game_pause%>
                        </h3>
                        <div class="btn-wrap">
                            <button class="btn btn-resume">
                                <%=btn_resume%>
                            </button>
                            <a href="http://www.v918.cn/vgames/" target="_blank" class="btn btn-boyaa">
                                <%=btn_more_game%>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
    </ins>
        </div>
    </div>
 
   
</script><script src="assets/js/libs.min.js"></script>
    <script src="assets/js/wx4syt.js"></script>
    <script src="assets/js/main.min3.js?v=201408011050"></script>
 
