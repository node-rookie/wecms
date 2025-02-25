

<!DOCTYPE html>
<html>
<head>
	<title>微时代管家</title>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
	<link rel="prerender" href="img/start_page.jpg">
	<link rel="prerender" href="img/game_bg.jpg">
	<link rel="prerender" href="img/score_bg.png">
	<link rel="prerender" href="img/lovers_0.png">
	<link rel="prerender" href="img/lovers_1.png">
	<link rel="prerender" href="img/lovers_2.png">
	<link rel="prerender" href="img/lovers_3.png">
	<link rel="prerender" href="img/blood.png">
	<link rel="prerender" href="img/single_0.png">
	<link rel="prerender" href="img/single_1.png">
	<link rel="prerender" href="img/single_2.png">
	<link rel="prerender" href="img/single_3.png">
	<link rel="prerender" href="img/time_over.png">
	<link rel="prerender" href="img/share.png">
	<link rel="prerender" href="audio/music.mp3">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/createjs.js"></script>
    <script type="text/javascript">
		var isDesktop = navigator['userAgent'].match(/(ipad|iphone|ipod|android|windows phone)/i) ? false : true;
    	var fontunit        = isDesktop ? 20 : ((window.innerWidth>window.innerHeight?window.innerHeight:window.innerWidth)/320)*10;
    	document.write('<style type="text/css">'+
    		'html,body {font-size:'+(fontunit<30?fontunit:'30')+'px;}'+
    		(isDesktop?'#welcome,#GameLayerBG,#GameScoreLayer.SHADE{position: absolute;}':
    		'#welcome,#GameTimeLayer,#GameLayerBG,#GameScoreLayer.SHADE{position:fixed;}')+
    		'</style>');
    </script>
    <style type="text/css">
    body {font-family: "微软雅黑"; margin: 0; padding: 0;max-width:640px;margin:0 auto;position: relative;}
    @media screen and (min-width:640px)
	{
		body{font-size: 36px;}
	}
	@media screen and (min-width:540px) and (max-width:639px)
	{
		body{font-size: 32px;}
	}
	@media screen and (min-width:480px) and (max-width:539px)
	{
		body{font-size: 28px;}
	}
	@media screen and (min-width:320px) and (max-width:479px)
	{
		body{font-size: 20px;}
	}

	#ready-btn,.loading{height:12.5%;bottom:0;width:58%;left:22%;position: absolute;z-index: 5;color:#b67f76;display: box;display: -webkit-box;display: -moz-box;display: -ms-flexbox;box-align: center;box-pack: center;-webkit-box-align: center;-webkit-box-pack: center;-ms-flex-align: center;-ms-flex-pack: center;letter-spacing:6px;}
    .SHADE {top: 0; left:0; width:100%; height: 100%; bottom:0; z-index: 11;}
	.movegame{height:12.5%!important;bottom:0;width:25%;left:50%;font-size:20px;position: absolute;z-index: 5;color:#b67f76;display: box;display: -webkit-box;display: -moz-box;display: -ms-flexbox;box-align: center;box-pack: center;-webkit-box-align: center;-webkit-box-pack: center;-ms-flex-align: center;-ms-flex-pack: center;letter-spacing:6px;}
    #welcome {background:url(img/start_page.jpg?2) no-repeat;overflow: hidden;background-size: 100% 100%;}
    .welcome-bg {position:absolute;top:0;left:0;right:0;bottom:0;}
	#GameLayerBG {top:0;left:0;right:0;bottom:0;overflow:hidden;background:url(img/game_bg.jpg) no-repeat;background-size:100% 100%;}
    .GameLayer {position:absolute;bottom:0;left:5%;height:100%;width:91%;}
    .block{position:absolute; background-repeat: no-repeat; background-position: center bottom;background-size: auto 90%;background-image: none;}
    .t0{background-image:url(img/lovers_0.png);}
    .t1{background-image:url(img/lovers_1.png);}
    .t2{background-image:url(img/lovers_2.png);}
    .t3{background-image:url(img/lovers_3.png);}
     .s0{background-image:url(img/single_0.png);}
    .s1{background-image:url(img/single_1.png);}
    .s2{background-image:url(img/single_2.png);}
    .s3{background-image:url(img/single_3.png);}
    .tt0{ background-image:url(img/blood.png);background-size:100% auto;}
    @-ms-keyframes flash {
    	0% { opacity: 1; }
    	50% { opacity: 0; }
    	100% { opacity: 1; }
    }
    @-webkit-keyframes flash {
    	0% { opacity: 1; } 
    	50% { opacity: 0; }
    	100% { opacity: 1; }
    }
  	.flash {-webkit-animation: flash .2s 3;animation: flash .2s 3;}
    .bad {-webkit-animation: flash .2s 3;animation: flash .2s 3;background-image:url(img/blood.png);background-size:100% auto;}
    *    {-webkit-tap-highlight-color: rgba(0,0,0,0);-ms-tap-highlight-color: rgba(0,0,0,0); tap-highlight-color: rgba(0,0,0,0); -ms-user-select: none;}
    #GameScoreLayer {background-position:center .5em; background-size: auto 4em; font-weight: bold; color:#fff; text-align: center;overflow: hidden;background:url(img/score_bg.png?2) no-repeat #191a1e;background-size:100% 100%;}

	#GameScoreLayer-btn{position: absolute;bottom:3%;height:20.5%;width:85%;left:7.5%;color:#b67f76;overflow: hidden;}
    .btn{display: box; display: -webkit-box; display: -moz-box; display: -ms-flexbox;box-align: center;box-pack: center; -webkit-box-align: center; -webkit-box-pack: center; -ms-flex-align:center; -ms-flex-pack:center;width:46%;height:100%;float:left;font-weight: normal;cursor: pointer;}
	.btn:nth-child(2){float:right;}
    #landscape {display: none;}

	#gameBody {position: relative; width:100%; margin: 0 auto; height: 100%;}
	#share-wx {background:#191a1e;position: absolute;top: 0px;left: 0px;width: 100%;height: 100%;z-index: 10000;display: none;}
	#share-wx-img{width:100%;}
	#scoreTotal{max-width:640px;padding-left:4%;position:fixed;top:0;height:50px;width:100%;overflow: hidden;background:#000;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;display:none;}
	#titleBg{float:left;margin-right:20px;height:40px;z-index: 3;margin-top:5px;}
	#number,#GameTimeLayer{line-height:50px;font-size: 24px;color:#850101;height:100%;}
	#number{float:left;}
	#GameTimeLayer {text-shadow:0 0 3px #fff,0 0 3px #fff,0 0 3px #fff;position: absolute;right:85px;}
	#photo{height:100%;float:right;border: none;display:block;}
	#GameScoreLayer-text{color:#191a1e;text-align: center;font-size: 20px;font-weight: bold;padding:20px 5%;display:none;}
	#scoreLoading{height:232px;line-height: 232px;text-align: center;font-size: 28px;letter-spacing:6px;color:#b67f76;}
	#GameScoreLayer-text p{padding:0;margin:0;}
	#GameScoreLayer-text .text0{text-align: left;}
	#GameScoreLayer-text .text1{position: relative;width:100%;}
	#GameScoreLayer-text .text2{font-size: 20px;}
	#scoreAll{color:#b12813;font-size: 74px;}
	.positonP{position: absolute;right:0;bottom:16px;}
	#timeOver{width:60%;position: absolute;height:17.5%;left:20%;top:16%;display:none;background:url(img/time_over.png) no-repeat;background-size: 100% 100%}
    </style>
</head>
<body onLoad="init()">
	<script type="text/javascript">
	if (isDesktop)
		document.write('<div id="gameBody">');
	var body, blockSize, GameLayer = [], GameLayerBG, touchArea = [], GameTimeLayer;
	var transform, transitionDuration;
	function init (argument) {
		showWelcomeLayer();
		body = document.getElementById('gameBody') || document.body;
		body.style.height = window.innerHeight+'px';
		transform = typeof(body.style.webkitTransform) != 'undefined' ? 'webkitTransform' : (typeof(body.style.msTransform) != 'undefined'?'msTransform':'transform');
		transitionDuration = transform.replace(/ransform/g, 'ransitionDuration');

		GameTimeLayer = document.getElementById('GameTimeLayer');
		GameLayer.push( document.getElementById('GameLayer1') );
		GameLayer[0].children = GameLayer[0].querySelectorAll('div');
		GameLayer.push( document.getElementById( 'GameLayer2' ) );
		GameLayer[1].children = GameLayer[1].querySelectorAll('div');
		GameLayerBG = document.getElementById( 'GameLayerBG' );
		if( GameLayerBG.ontouchstart === null ){
			GameLayerBG.ontouchstart = gameTapEvent;
		}else{
			GameLayerBG.onmousedown = gameTapEvent;
		}
		gameInit();
		window.addEventListener('resize', refreshSize, false);

		var rtnMsg = "true";	
				
		setTimeout(function(){
			if(rtnMsg){
				var btn = document.getElementById('ready-btn');
				btn.className = 'btn';
				btn.innerHTML = '点击开始游戏'
				btn.onclick = function(){
					closeWelcomeLayer();
				} 
			}					
		}, 500);
	}
	var refreshSizeTime;
	function refreshSize(){
		clearTimeout(refreshSizeTime);
		refreshSizeTime = setTimeout(_refreshSize, 200);
	}
	function _refreshSize(){
		countBlockSize();
		for( var i=0; i<GameLayer.length; i++ ){
			var box = GameLayer[i];
			for( var j=0; j<box.children.length; j++){
				var r = box.children[j],
					rstyle = r.style;
				rstyle.left = (j%4)*blockSize+'px';
				rstyle.bottom = Math.floor(j/4)*blockSize+'px';
				rstyle.width = blockSize+'px';
				rstyle.height = blockSize+'px';
			}
		}
		var f, a;
		if( GameLayer[0].y > GameLayer[1].y ){
			f = GameLayer[0];
			a = GameLayer[1];
		}else{
			f = GameLayer[1];
			a = GameLayer[0];
		}
		var y = (_gameBBListIndex%10)*blockSize;
		f.y = y;
		f.style[transform] = 'translate3D(0,'+f.y+'px,0)';

		a.y = -blockSize*Math.floor(f.children.length/4)+y;
		a.style[transform] = 'translate3D(0,'+a.y+'px,0)';

	}
	function countBlockSize(){
		blockSize = body.offsetWidth*0.91/4;
		body.style.height = window.innerHeight+'px';
		GameLayerBG.style.height = window.innerHeight+'px';
		touchArea[0] = window.innerHeight-blockSize*1;
		touchArea[1] = window.innerHeight-blockSize*2;
	}
	var _gameBBList = [], _gameBBListIndex = 0, _gameOver = false, _gameStart = false, _gameTime, _gameTimeNum, _gameScore;
	function gameInit(){
        createjs.Sound.registerSound( {src:"audio/music.mp3", id:"tap"} );
		gameRestart();
	}
	function gameRestart(){
		_gameBBList = [];
		_gameBBListIndex = 0;
		_gameScore = 0;
		_gameOver = false;
		_gameStart = false;
		_gameTimeNum = 2000;
		GameTimeLayer.innerHTML = creatTimeText(_gameTimeNum);
		countBlockSize();
		refreshGameLayer(GameLayer[0]);
		refreshGameLayer(GameLayer[1], 1);
	}
	function gameStart(){
		_gameStart = true;
		_gameTime = setInterval(gameTime, 10);
	}
	function gameOver(){
		_gameOver = true;
		clearInterval(_gameTime);
		setTimeout(function(){
			GameLayerBG.className = '';
			showGameScoreLayer();
			dp_submitScore(_gameScore);
		}, 1000);
	}
	function gameTime(){
		_gameTimeNum --;
		if( _gameTimeNum <= 0){
			GameTimeLayer.innerHTML = "0'00''";
			$('#timeOver').show();
			gameOver();
			GameLayerBG.className += ' flash';
			createjs.Sound.play("tap");
		}else{
			GameTimeLayer.innerHTML = creatTimeText(_gameTimeNum);
		}
	}
	function creatTimeText( n ){
		var text = (100000+n+'').substr(-4,4);
		text = '&nbsp;&nbsp;'+text.substr(0,2)+"'"+text.substr(2)+"''"
		return text;
	}
	var _ttreg = / t{1,2}(\d+)/, _clearttClsReg = / t{1,2}\d+| bad/,_clears1ClsReg = / s\d/;
	function refreshGameLayer( box, loop, offset ){
		var i = Math.floor(Math.random()*1234)%4+(loop?0:4);
		for( var j=0; j<box.children.length; j++){
			var r = box.children[j],
				rstyle = r.style;
			rstyle.left = (j%4)*blockSize+'px';
			rstyle.bottom = Math.floor(j/4)*blockSize+'px';
			rstyle.width = blockSize+'px';
			rstyle.height = blockSize+'px';
			r.className = r.className.replace(_clearttClsReg, '');
			r.className = r.className.replace(_clears1ClsReg, '');
			if( i == j ){
				_gameBBList.push( {cell:i%4, id:r.id} );
				var random=Math.floor((Math.random()*1234)%4);
				r.className += ' t'+random;
				
				var random1=Math.floor((Math.random()*1234)%4);

				if( loop ){
					var x=j%4;
					if(random1!=x)
					{
						var endNum=Math.floor(j/4)*4+random1;
						box.children[endNum].className = box.children[endNum].className+' s'+Math.floor((Math.random()*1234)%4);
					}
				}else{
					if(j>7){
						var x=j%4;
						if(random1!=x)
						{
							var endNum=Math.floor(j/4)*4+random1;
							box.children[endNum].className = box.children[endNum].className+' s'+Math.floor((Math.random()*1234)%4);
						}
					}
				}
				r.notEmpty = true;
				i = ( Math.floor(j/4)+1)*4+Math.floor((Math.random()*1234)%4);

			}else{
				r.notEmpty = false;
			}
		}
		if( loop ){
			box.style.webkitTransitionDuration = '0ms';
			box.style.display          = 'none';
			box.y                      = -blockSize*(Math.floor(box.children.length/4)+(offset||0))*loop;
			setTimeout(function(){
				box.style[transform] = 'translate3D(0,'+box.y+'px,0)';
				setTimeout( function(){
					box.style.display     = 'block';
				}, 100 );
			}, 200 );
		} else {
			box.y = 0;
			box.style[transform] = 'translate3D(0,'+box.y+'px,0)';
		}
		box.style[transitionDuration] = '150ms';
	}
	function gameLayerMoveNextRow(){
		for(var i=0; i<GameLayer.length; i++){
			var g = GameLayer[i];
			g.y += blockSize;
			if( g.y > blockSize*(Math.floor(g.children.length/4)) ){
				refreshGameLayer(g, 1, -1);
			}else{
				g.style[transform] = 'translate3D(0,'+parseInt(g.y)+'px,0)';
			}
		}
	}
	function gameTapEvent(e){
		if (_gameOver) {
			return false;
		}
		var tar = e.target;
		var y = e.clientY || e.targetTouches[0].clientY,
			x = (e.clientX || e.targetTouches[0].clientX)-body.offsetLeft,
			cha=body.offsetWidth*0.95;
			x=x+cha;
			p = _gameBBList[_gameBBListIndex];
		if ( y > touchArea[0] || y < touchArea[1]) {
			return false;
		}
		if( (p.id==tar.id&&tar.notEmpty) || (p.cell==0&&x<blockSize+cha) || (p.cell==1&&x>blockSize+cha&&x<2*blockSize+cha) || (p.cell==2&&x>2*blockSize+cha&&x<3*blockSize+cha) || (p.cell==3&&x>3*blockSize+cha) ){
			if( !_gameStart ){
				gameStart();
			}
        	createjs.Sound.play("tap");
			tar = document.getElementById(p.id);
			tar.className = tar.className.replace(_ttreg, ' tt0');
			_gameBBListIndex++;
			_gameScore ++; 
			$('#number span').html(_gameScore);
			gameLayerMoveNextRow();
		}else if( _gameStart && !tar.notEmpty && / s\d/.test(tar.className)){
			createjs.Sound.play("tap");
			tar.className += ' bad';
			gameOver();
		}
		return false;
	}
	function createGameLayer(){
		var html = '<div id="GameLayerBG">';
		for(var i=1; i<=2; i++){
			var id = 'GameLayer'+i;
			html += '<div id="'+id+'" class="GameLayer">';
			for(var j=0; j<10; j++ ){
				for(var k=0; k<4; k++){ 
					html += '<div id="'+id+'-'+(k+j*4)+'" num="'+(k+j*4)+'" class="block"></div>';
				}
			}
			html += '</div>';
		}
		html += '</div>';

		return html;
	}
	function closeWelcomeLayer(){
		var l = document.getElementById('welcome');
		l.style.display = 'none';
		$('#scoreTotal').show();
	}
	function showWelcomeLayer(){
		var l = document.getElementById('welcome');
		l.style.display = 'block';
	}
	function showGameScoreLayer(){
		$('#scoreLoading').hide();
		$('#GameScoreLayer-text').html(shareText(0,_gameScore)).show();
		var l = document.getElementById('GameScoreLayer');
		l.style.display = 'block';
	}
	function hideGameScoreLayer(){
		var l = document.getElementById('GameScoreLayer');
		l.style.display = 'none';
		$('#timeOver').hide();
		$('#score').html('0');
		$('#scoreLoading').show();
        $('#GameScoreLayer-text').html('').hide();
	}
	function replayBtn(){
		gameRestart();
		hideGameScoreLayer();
	}
	function backBtn(){
		gameRestart();
		hideGameScoreLayer();
		showWelcomeLayer();
	}
	function shareText( data,score){
			return "<p class='text0'>人艰不拆，放开小房子！你</p><p class='text1'><span id='scoreAll'>"+score+"</span><span class='positonP'>次将小房子从柯少身边带走。要不要让好友也来试试？</span></p>";
		
	}
	
	function toStr(obj) {
		if ( typeof obj == 'object' ) {
			return JSON.stringify(obj);
		} else {
			return obj;
		}
		return '';
	}
	document.write(createGameLayer());
</script>

	<div id="GameScoreLayer" class="BBOX SHADE" style="display:none;">
		<div id="GameScoreLayer-text"></div>
		<div id='scoreLoading'>加载中...</div>
		<div id="GameScoreLayer-btn">
			<div class="btn" onClick="replayBtn()">再来一次</div>
			<div class="btn" onClick="clickMore();">更多游戏</div>
		</div>	
	</div>
	<div id='scoreTotal'><img src='img/title_bg.png' id='titleBg'><span id='number'>=&nbsp;<span id='score'>0</span></span><img src='img/photo_bg.png' id='photo'><div id="GameTimeLayer"></div></div>
	<div id="welcome" class="SHADE BOX-M">
		<div class="welcome-bg FILL"></div>
		<div id="ready-btn" class="btn loading">加载中...</div>
		<!-- <div onclick="goHome();" class="btn movegame">更多游戏</div> -->
	</div>
	<div id='timeOver'></div>
	<div id="share-wx"><img src="img/share.png" id="share-wx-img"></div>
<script type="text/javascript">
	if (isDesktop)
		document.write('</div>');
</script>
<script language=javascript>
		var mebtnopenurl = 'http://www.v918.cn/vgames';
		window.shareData = {
		        "imgUrl": "http://www.v918.cn/vgames/icon/fkfzm.png",
		        "timeLineLink": "http://www.v918.cn/vgames/games/fkfzm/index.html",
		        "tTitle": "放开房祖名-软灵通",
		        "tContent": "放开房祖名-软灵通"
		};
				
		function goHome(){
			window.location=mebtnopenurl;
		}
		function clickMore(){
			// if((window.location+"").indexOf("zf",1)>0){
			// 	window.location = "http://www.v918.cn/vgames/games/fkfzm";
			//  }
			//  else{
			// 	goHome();
			//  }
			if (Math.random() > 0.5) {
				window.location = "http://www.v918.cn/vgames/games/fkfzm";
			}
			else {
				goHome();
			}
		}
		function dp_share(){
			document.title ="人艰不拆，放开小房子！我"+myData.score+"次将小房子从柯少身边带走。你也来试试？";
			document.getElementById("share").style.display="";
			window.shareData.tTitle = document.title;
		}
		function dp_Ranking(){
			window.location=mebtnopenurl;
		}

		function showAd(){
		}
		function hideAd(){
		}
		document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
		    
		    WeixinJSBridge.on('menu:share:appmessage', function(argv) {
		        WeixinJSBridge.invoke('sendAppMessage', {
		            "img_url": window.shareData.imgUrl,
		            "link": window.shareData.timeLineLink,
		            "desc": window.shareData.tContent,
		            "title": window.shareData.tTitle
		        }, onShareComplete);
		    });

		    WeixinJSBridge.on('menu:share:timeline', function(argv) {
		        WeixinJSBridge.invoke('shareTimeline', {
		            "img_url": window.shareData.imgUrl,
		            "img_width": "640",
		            "img_height": "640",
		            "link": window.shareData.timeLineLink,
		            "desc": window.shareData.tContent,
		            "title": window.shareData.tTitle
		        }, onShareComplete);
		    });
		}, false);
		</script>
		<div id=share style="display: none">
			<img width=100% src="http://www.v918.cn/vgames/games/fkfzm/share.png"
				style="position: fixed; z-index: 9999; top: 0; left: 0; display: "
				ontouchstart="document.getElementById('share').style.display='none';" />
		</div>
		<div style="display: none;">
			<script type="text/javascript">
            var myData = { gameid: "fkfzm" };
			var domain = ["oixm.cn", "hiemma.cn", "peagame.net"][parseInt(Math.random() * 3)];
			window.shareData.timeLineLink = "http://www.v918.cn/vgames/games/fkfzm";
			function dp_submitScore(score){
				myData.score = score;
				myData.scoreName = "带走房祖名"+score+"次";
				if(score>1){
					if (confirm("想从柯少身边带走小房子绝非易事，可我竟然"+score+"次做到了，朋友们快看看你的才能！")){
						dp_share();
					}
				}
			}
			function onShareComplete(res) {
                if (localStorage.myuid && myData.score != undefined) {
                    setTimeout(function(){
                        if (confirm("要将成绩提交到软灵通排行榜吗？")) {
                            window.location = "http://www.v918.cn/vgames/";
                        }
                        else {
                            document.location.href = mebtnopenurl;
                        }
                    }, 500);
                }
				else {
		        	document.location.href = mebtnopenurl;
				}
	        }
			</script>
			<div style="display: none;">
				<script type="text/javascript">var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F0ae524064813b8dc07ece5ce724a7b04' type='text/javascript'%3E%3C/script%3E"));</script>
				<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_2947366'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s5.cnzz.com/stat.php%3Fid%3D2947366' type='text/javascript'%3E%3C/script%3E"));</script>
			</div>	
</body>
</html>
