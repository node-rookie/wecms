
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<title>岛国么么答</title>
<link rel="shortcut icon" href="icon.png">
<link rel="icon" href="icon.png">
<link type="text/css" href="static/common.css?111" rel="stylesheet" />
<script type="text/javascript" src="static/zepto.min.js?11"></script>
<script src="static/common.js?122"></script>

<link type="text/css" href="static/index.css" rel="stylesheet" />
</head>

<body>

<div id="main">
    <div id="start" class="page animate ">
        <h1 class="title">岛国么么答</h1>
        <a href="javascript:;" class="guessPic">猜图模式</a>
        <a href="javascript:;" class="guessNam">猜名模式</a>
        <a href="" class="moreLink" target="_blank"></a>
        <div class="clear"></div>
    </div>
    <div id="play" class="page animate hide">
        <div class="header">
            <div class="wLevel">
                <span>Lv</span><span class="level">1</span>
            </div>
            <span class="time">10</span>
            <div class="heartList">
                <em class="heart"></em>
                <em class="heart"></em>
                <em class="heart"></em>
            </div>
        </div>
        <div class="clear"></div>
        <!-- 游戏区域 -->
        <div class="container">
            <!-- 内容是动态生成滴~ -->
        </div>
        <div class="logo"></div>
        <div id="prepare" class="animate">
            <div class="back"></div>
            <div class="text"></div>
            <div class="tip"></div>
        </div>
    </div>
    <div id="end" class="page animate hide">
        <p class="really">你获得称号</p>
        <p class="title">牛b</p>
        <p class="level">LV30</p>
        <div>
            <a href="javascript:;" class="again">再来一次</a>
            <a href="javascript:;" class="notify">通知好友</a>
        </div>
        <a href="" class="moreLink" target="_blank"></a>
    </div>
    
</div>
        <input id="bt-game-id" type="hidden" value="4-island">

<!-- 答案模版 -->
<script id="template_game_pic" type="text/html">
<div class="gameTip" data-key="${data.key}">
    ${data.name}
</div>
<div class="gameAnswer">
    <a data-key="${arr1.key}" href="javascript:;" class="answer1"><img src="${arr1.pic}" /><em class="tip1"></em></a>
    <a data-key="${arr2.key}" href="javascript:;" class="answer1"><img src="${arr2.pic}" /><em class="tip1"></em></a>
    <a data-key="${arr3.key}" href="javascript:;" class="answer1"><img src="${arr3.pic}" /><em class="tip1"></em></a>
    <a data-key="${arr4.key}" href="javascript:;" class="answer1"><img src="${arr4.pic}" /><em class="tip1"></em></a>
</div>
<div class="clear"></div>
</script>
<script id="template_game_nam" type="text/html">
    <div class="gameTip" data-key="${data.key}">
        <img src="${data.pic}" />
    </div>
    <div class="gameAnswer">
        <a data-key="${arr1.key}" href="javascript:;" class="answer2"><span class="atext">${arr1.name}</span><em class="tip2"></em></a>
        <a data-key="${arr2.key}" href="javascript:;" class="answer2"><span class="atext">${arr2.name}</span><em class="tip2"></em></a>
        <a data-key="${arr3.key}" href="javascript:;" class="answer2"><span class="atext">${arr3.name}</span><em class="tip2"></em></a>
        <a data-key="${arr4.key}" href="javascript:;" class="answer2"><span class="atext">${arr4.name}</span><em class="tip2"></em></a>
    </div>
    <div class="clear"></div>
</script>
<!-- END 答案模版 -->
</body>
<script src="static/index.js?v=1"></script>
<script type="text/javascript" src="static/dc.js"></script>

</html>