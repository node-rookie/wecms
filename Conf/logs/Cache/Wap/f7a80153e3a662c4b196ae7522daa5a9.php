<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="<?php echo ($staticPath); ?>/tpl/static/autumns/css/reset.css" media="all">
<link rel="stylesheet" type="text/css" href="<?php echo ($staticPath); ?>/tpl/static/autumns/css/common.css" media="all">
<link rel="stylesheet" type="text/css" href="<?php echo ($staticPath); ?>/tpl/static/autumns/css/choosePrize.css" media="all">
<script type="text/javascript" async="" src="<?php echo ($staticPath); ?>/tpl/static/autumns/js/wtj.js"></script><script type="text/javascript" src="<?php echo ($staticPath); ?>/tpl/static/autumns/js/zepto_min.js"></script>
<script type="text/javascript" src="<?php echo ($staticPath); ?>/tpl/static/vhouse/jQuery.js"></script>
<title><?php echo ($linfo["title"]); ?></title>
        
		<meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">

        <!-- Mobile Devices Support @begin -->
            
            <meta content="telephone=no, address=no" name="format-detection">
            <meta name="apple-mobile-web-app-capable" content="yes"> <!-- apple devices fullscreen -->
            <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
        <!-- Mobile Devices Support @end -->
        <link rel="shortcut icon" href="">
        <style>
            img{max-width:100%!important;}
        </style>
    </head>
    <body onselectstart="return true;" ondragstart="return false;" background="<?php echo ($linfo["hpic"]); ?>">

        <script type="text/javascript">
            (function(){
                window.config_custom = {
                                            NEEDREGISTER:true,
                        
                    PATH:{
                        MUSIC:"./tpl/static/autumns/mp3/"
                    },
                }   
            })();
        </script>
        <script src="<?php echo ($staticPath); ?>/tpl/static/autumns/js/zepto_min(1).js"></script>
        <script src="<?php echo ($staticPath); ?>/tpl/static/autumns/js/common.js"></script>
        <script src="<?php echo ($staticPath); ?>/tpl/static/autumns/js/sound.js"></script>
        <script src="<?php echo ($staticPath); ?>/tpl/static/autumns/js/soundjs_min.js"></script>
        <script src="<?php echo ($staticPath); ?>/tpl/static/autumns/js/soundmanager.js"></script>
        <script src="<?php echo ($staticPath); ?>/tpl/static/autumns/js/iscroll.js"></script>
        <script src="<?php echo ($staticPath); ?>/tpl/static/autumns/js/choosePrize.js"></script>
        <div data-role="container" class="container">
            <header data-role="header"><!----></header>
            <section data-role="body" class="body">
                <div class="text-swing"></div>
                <div class="choose-content-bg"></div>
                <div class="choose-content" style="overflow: hidden;">
                    <ul style="width: 1850px; transition: transform 0ms; -webkit-transition: transform 0ms; transform-origin: 0px 0px 0px; transform: translate(0px, 0px) translateZ(0px);">
                            <li class="prize1" data-music="1" id="1"></li>
                            <li class="prize2" data-music="2" id="2"></li>
                            <li class="prize3" data-music="3" id="3"></li>
                            <li class="prize4" data-music="4" id="4"></li>
                            <li class="prize5" data-music="5" id="5"></li>
                    </ul>
                </div>
                <ul class="choose-content-identifier"></ul>
                <?php if($data['tel'] == null && $linfo['needreg'] == 1): ?><a href="#memberNoticeBox" id="modaltrigger_notice" class="btn-cho"></a>
                <?php else: ?>
                    <a href="javascript:void();" class="btn-choosee" ></a><?php endif; ?>
                <p class="choose-num"></p>
            </section>

        </div>
                <div class="ads show">
                        <div class="btn-close-ad"></div>
        </div>
                <div class="panel-register" style="height: 568px;">
            <div class="panel-register-content">
                <div class="btn-close"></div>
                <p class="msg-ps">为了将礼盒更快、更准确的送达您手中，请留下您的个人信息，谢谢!</p>
                <hr class="common-hr">
                <form action="" method="post" data-role="info-form" style="overflow: hidden;">
                    <div style="transition: transform 0ms; -webkit-transition: transform 0ms; transform-origin: 0px 0px 0px; transform: translate(0px, 0px) translateZ(0px);">
                                        <label for="info-name">姓名</label><input type="text" name="info-name">
                                        <label for="info-tel">手机</label><input type="tel" name="info-tel">
                                        <div class="input-box">
                                            <label for="info-pass">验证码</label><input type="text" name="info-pass">
                        <a href="javascript:void(0);" class="btn-pass">获取验证码</a>
                                        </div>
                    </div>
                    
                    <input type="hidden" value="22" name="info-prize">
                    <input type="hidden" value="1071" name="pid">
                    <input type="hidden" value="10" name="id">
                    <input type="hidden" value="osXr8jpSn2EPrI2lGMDSgmqRsZFM" name="wechatid">
                    <input type="hidden" value="ff31431c9d656c0d1905fdbac5648a04" name="v">
                    <input type="submit" class="btn-send" value="立即领取">
                    
                    
                </form>
                <div class="submit-tip"></div>
            </div>
        </div>
<script>
    $(function(){
        $('.btn-choosee').click(function(){
            var box     = $('.current').index()+1;
            $.getJSON("<?php echo U('Autumns/box_add',array('token'=>$token,'wecha_id'=>$wecha_id,'id'=>$_GET['id']));?>",{box:box},function(data){
                if(data.err == 0){
                    var url = "<?php echo U('Autumns/mybox',array('token'=>$token,'wecha_id'=>$wecha_id,'id'=>$_GET['id']));?>";
                    window.location.href=url;
                }else{
                    alert(data.info);
                }
            });
        });
    });

</script>
<script type="text/javascript" src="<?php echo ($staticPath); ?>/tpl/static/autumns/js/ChatFloat.js"></script>

</div><style type="text/css">.choose-content li{width:320px;}</style><div class="loading-box" style="line-height: 628px;"></div>
<script type="text/javascript">
window.shareData = {  
            "moduleName":"Autumns",
            "moduleID":"<?php echo (intval($_GET['id'])); ?>",
            "imgUrl": "<?php echo ($linfo["starpicurl"]); ?>",
            "timeLineLink":"<?php echo ($f_siteUrl); echo U('Autumns/index',array('token'=>$_GET['token'],'id'=>intval($_GET['id'])));?>",
            "sendFriendLink":"<?php echo ($f_siteUrl); echo U('Autumns/index',array('token'=>$_GET['token'],'id'=>intval($_GET['id'])));?>",
            "weiboLink": "<?php echo ($f_siteUrl); echo U('Autumns/index',array('token'=>$_GET['token'],'id'=>intval($_GET['id'])));?>",
            "tTitle": "<?php echo ($linfo["title"]); ?>",
            "tContent": "<?php echo ($linfo["info"]); ?>"
        };
</script>
<?php echo ($shareScript); ?>
</body></html>