
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<head> 
	<meta charset="UTF-8" />
	<title>植物大战僵尸</title>
	<script src="js/jquery.js"></script>
	<script type="text/javascript" src="js/phaser.min.js"></script>
    <style type="text/css">
       body {
	background-image: url(assets/background.png);
	background-size: cover;
	background-repeat: no-repeat;
	color:white;
	padding: 0;
	margin: 0;
	font-family: 微软雅黑,Calibri, Candara, Segoe, "Segoe UI", Optima, Arial, sans-serif;
}
canvas {
	border: 0;
	margin: auto;	
}

a {
	color: white;
}

body {
	font-size: 12px;
}
#game {
	position: absolute;
	top:0;
	left: 0;
	width: 100%;
	height: 100%;
}

.info {
	position: absolute;
	padding: 10px;
	margin: 5px;
	background: #0a0a11;
	opacity: 0.5;
	z-index: 999;
	border-radius: 15px;
	overflow-y:auto;        
}

#loading {
	position: fixed;
	width: 90%;
	border-radius: 15px;
	z-index: 999;
	text-align: center;
	vertical-align: middle;
	line-height: 50px; 
}

#test1{
	width: 250px;
	height: 250px;
	background: #fff;
	color: #000;
	position: relative;
}

#test1 p{
	height: 25%;
	text-align: center;
	margin: 0px;
}

#test1 .cdkey a{
	color: #000;
	text-decoration: none;
	color: blue;
}

#test1 .dia-close{
	position: absolute;
	top: 0px;
	display: block;
	text-align: center;
	text-decoration: none;
	color: #000;
	background: #ccc;
}

</style>
</head>
<body>
	<div id="loading" style="display:none">
		<img width ="100%" src="assets/shuoming.png">
	</div>
	<div id="game"></div>
<script type="text/javascript">

var lastTime = 0;

$('body').css('background-size', document.documentElement.clientWidth + 'px' + ' ' +  document.documentElement.clientHeight + 'px');



//radio为宽高比率
var ratio = 1.59;

//游戏高为屏幕高-20px
var height = document.documentElement.clientHeight;

// 游戏宽为屏幕高的1.6倍
var width = height / ratio;

//scale为分割高的最小单位
var scale = height / 720;

//导入游戏画布
var game = new Phaser.Game(document.documentElement.clientWidth, height, Phaser.CANVAS, 'game', { preload: preload, create: create, update: update });

//预导入内容
function preload() {
	//添加背景
	game.load.image('background', 'assets/gamebackground.jpg');
	//引入坚果
	game.load.image('ball','assets/bowlingball.png');
	//左边按键
	game.load.spritesheet('leftbtn', 'assets/btn-left.png',192,720);
	//右边按键
	game.load.spritesheet('rightbtn', 'assets/btn-right.png',192,720);
	// //添加基础僵尸
	game.load.spritesheet('zombie-normal', 'assets/zombie-normal.png', 126, 133);
	 //添加太阳僵尸
	game.load.spritesheet('zombie-sun', 'assets/zombie-sun.png', 130, 150);
	 //添加旗子僵尸
	game.load.spritesheet('zombie-flag', 'assets/zombie-flag.png', 155, 150);
	 //添加大僵尸
	game.load.spritesheet('zombie-snow', 'assets/zombie-snow.png', 230,180);
	//添加水沟
	game.load.image('ditchleft', 'assets/ditchleft.jpg');
	game.load.image('ditchright', 'assets/ditchright.jpg');

	//添加按钮
	game.load.image('button', 'assets/btnreplay.png');
	//添加按钮
	game.load.image('btnmore', 'assets/btnmore.png');
	//添加按钮
	game.load.image('btnshare', 'assets/btnshare.png');
	//说明按钮
	game.load.image('instruction','assets/shuomingchakan.png');
	//添加图片
	game.load.image('backgroundblack', 'assets/bb.jpg');
	game.load.image('gameover', 'assets/over1.png');
}


//背景
var bg1;
var bg2;

//背景滚动速率
var scrollSpeed = 5 ;																								

//基础速度
const baseVelocity = 10 * scale;

//加入基础僵尸
var zombies;
var zombie = null;
//引入基础僵尸函数
var timer1;
var timer2;
var timer3;
var timer4;
//分数
var score = 0;
var scoreText;
var middletext;
var addscoreText = 0;
//连击数
var comboText;
var maxcomboText;
var combo = 0;
var maxcombo = 0;
var combaddscoreText = 0;
//僵尸身体碰撞基数
var zombieBodySize = 0.5;

var button2 = null;
var encouragetext = null;
var encouragetext2 = null;
var keyvalue = null;


//创建游戏背景
function createBackground() {
	bg1 = game.add.sprite(0, 0, 'background');
	bg2 = game.add.sprite(0, -bg1.height * scale, 'background');
	bg1.width = document.documentElement.clientWidth;
    bg2.width = document.documentElement.clientWidth;
	bg1.scale.y = scale;
	//	bg2.scale.x = scale;
    bg2.scale.y = scale;	
}
//创建保龄球
function createBall(){
	ball = game.add.sprite(game.world.centerX,game.world.height-200*scale, 'ball');
	ball.scale.setTo(0.1*scale,0.1*scale);
	ball.anchor.setTo(0.5, 0.5);
	game.physics.arcade.enable(ball);
}
//添加基础僵尸
function addZombie(){
	var zombie = zombies.create(30*scale+(game.world.width-156*scale)*Math.random(),-133*scale, 'zombie-normal');
	zombie.scale.setTo(scale,scale);
	zombie.animations.add('alive', [0,1,2,3,2,1],5, true);
	zombie.animations.add('dead', [7,8,9,10,11,12,13],15, true);
	zombie.animations.play('alive');
	zombie.outOfBoundsKill = true;
	zombie.body.setSize(zombie.body.width*zombieBodySize,zombie.body.height*zombieBodySize,38*scale,0);
	zombie.body.velocity.y = 300*scale;
}
//添加太阳僵尸
function addSunZombie(){
	var sunZombie = sunZombies.create(30*scale+(game.world.width-160*scale)*Math.random(),-150*scale, 'zombie-sun');
	sunZombie.scale.setTo(scale,scale);
	sunZombie.animations.add('alive', [0,1,2,3,4,5,6,7,8,9,8,7,6,5,4,3,2,1],5, true);
	sunZombie.animations.add('dead', [10,11,12,13,14,15,16,17],15, true);
	sunZombie.animations.play('alive');
	sunZombie.outOfBoundsKill = true;
	sunZombie.body.setSize(sunZombie.body.width*zombieBodySize,sunZombie.body.height*zombieBodySize,39*scale,0);
	sunZombie.body.velocity.y = 300*scale;
}
//添加旗子僵尸
function addFlagZombie(){
	var flagZombie = flagZombies.create(30*scale+(game.world.width-185*scale)*Math.random(),-150*scale, 'zombie-flag');
	flagZombie.scale.setTo(scale,scale);
	flagZombie.animations.add('alive', [0,1,2,3,4,3,2,1],5, true);
	flagZombie.animations.add('dead', [5,6,7,8,9,10,11,12,13],15, true);
	flagZombie.animations.play('alive');
	flagZombie.outOfBoundsKill = true;
	flagZombie.body.setSize(flagZombie.body.width*zombieBodySize,flagZombie.body.height*zombieBodySize,55.5*scale,0);
	flagZombie.body.velocity.y = 300*scale;
}

//添加大僵尸
function addBigZombie(){
	var bigzombie = bigZombies.create(5*scale+(game.world.width-230*scale)*Math.random(),-180*scale, 'zombie-snow');
	bigzombie.scale.setTo(scale,scale);
	bigzombie.animations.add('alive', [0,1,2,3,4,5,4,3,2,1],5, true);
	bigzombie.animations.add('dead', [6,7,8,9,10,11,12],15, true);
	bigzombie.animations.play('alive');
	bigzombie.outOfBoundsKill = true;
	bigzombie.body.setSize(bigzombie.body.width*zombieBodySize, bigzombie.body.height*zombieBodySize,0);
	bigzombie.body.velocity.y = 300*scale;
}
function create() {
	game.physics.startSystem(Phaser.Physics.ARCADE);
	
	//引入背景
    createBackground();
	
	//加入水沟
	ditchleft = game.add.sprite(0, 0, 'ditchleft');
	ditchleft.scale.setTo(scale, scale);
	game.physics.arcade.enable(ditchleft);
	ditchright = game.add.sprite(game.world.width, 0, 'ditchright');
	ditchright.scale.setTo(scale, scale);
	ditchright.anchor.setTo(1,0);
	game.physics.arcade.enable(ditchright);
	
	//加入僵尸
	zombies = game.add.group();
	zombies.enableBody = true;
	timer1 = game.time.events.loop(400+600*Math.random(), addZombie, this);
	//加入太阳僵尸
	sunZombies = game.add.group();
	sunZombies.enableBody = true;
	timer3 = game.time.events.loop(2000+3000*Math.random(), addSunZombie, this);
	//加入旗子僵尸
	flagZombies = game.add.group();
	flagZombies.enableBody = true;
	timer4 = game.time.events.loop(2000+3000*Math.random(), addFlagZombie, this);
	//加入大僵尸
	bigZombies = game.add.group();
	bigZombies.enableBody = true;
	timer2 = game.time.events.loop(4000+2000*Math.random(), addBigZombie, this);
	
	//添加分数
	scoreText = game.add.text(0, game.world.centerY-285*scale, 'score: 0');
	addscoreText = game.add.text(0,game.world.centerY-220*scale,'加分:0');
	scoreText.setStyle({stroke:'#1d492f',fill:'white', strokeThickness:10,font:'bold ' + width/10 + 'px' + ' 微软雅黑'});
	addscoreText.setStyle({stroke:'#1d492f',fill:'white', strokeThickness:10,font:'bold ' + width/10 + 'px' + ' 微软雅黑'});
	addscoreText.visible = false;
	//添加连击数
	comboText = game.add.text(0,game.world.centerY-270*scale,'Combo:0');
	comboText.setStyle({stroke:'#ff6600',fill:'#ffea89', strokeThickness:10,font:'bold ' + width/10 + 'px' + ' 微软雅黑'});
	comboText.anchor.setTo(0,1);
	combaddscoreText = game.add.text(0,game.world.centerY-150*scale,'连击奖励:0' )
	combaddscoreText.setStyle({stroke:'#5d1f1f',fill:'#ff6600', strokeThickness:10,font:'bold ' + width/10 + 'px' + ' 微软雅黑'});
	combaddscoreText.visible = false;
		
	//引入保龄球
	createBall();
	
	//以下是引入关联
	//引入向左走按钮
	buttonleft = game.add.button(0,game.world.height-20*scale, 'leftbtn', actionMoveleft, this, 0, 0, 1,0);
	buttonleft.anchor.setTo(0, 1);
	buttonleft.scale.setTo(scale, scale);

	//引入向右走按钮
	buttonright = game.add.button(game.world.width,game.world.height-20*scale, 'rightbtn', actionMoveright, this, 0, 0, 1,0);
	buttonright.anchor.setTo(1, 1);
	buttonright.scale.setTo(scale, scale);
	
	//添加说明按钮
	buttoninstruction = game.add.button(game.world.width,0, 'instruction', actionInstruction, this, 0, 0, 0);
	buttoninstruction.anchor.setTo(1,0);
	buttoninstruction.scale.setTo(1.1*scale, 1.1*scale);
}


//背景动态函数
function updateBackground() {

	bg1.y = bg1.y + scrollSpeed * scale;
	bg2.y = bg2.y + scrollSpeed * scale;

	if (bg1.y >= height) {
		bg1.y = bg2.y - bg1.height;
	}
	if (bg2.y >= height) {
		bg2.y = bg1.y - bg2.height;
	}
}

var moveSpeed = 0;
var nowtime = 0;

function update() {

	//使背景变成动态
	updateBackground();
	//使保龄球转动
	ball.angle = ball.angle+4;
	//球碰到僵尸后杀死僵尸
	game.physics.arcade.overlap(ball, zombies, killZombie, null, this);
	game.physics.arcade.overlap(ball, bigZombies, killbigZombie, null, this);
	game.physics.arcade.overlap(ball, sunZombies, killsunZombie, null, this);
	game.physics.arcade.overlap(ball, flagZombies, killflagZombie, null, this);
	//球碰到左右边缘，游戏结束
	game.physics.arcade.overlap(ball, ditchleft, leftkillball, null, this);
	game.physics.arcade.overlap(ball, ditchright, rightkillball, null, this);

	lastTime = Date.now();
	nowtime++;
	if (nowtime > 10)
	{
		moveSpeed++;
		nowtime = 0;
	};
	
}


//杀死僵尸
function killZombie(ball,zombie){
	zombie.animations.play('dead',null,false,true);
	if(ball.x<=zombie.x+zombie.body.width/2){
		ball.body.velocity.x-=(zombie.x+zombie.body.width/2-ball.x)*scale/90;
		zombie.angle = zombie.angle-0.5;
		if(zombie.angle==-2){
			beadcombo();
			score += 200;
			scoreText.text = 'score: ' + score;
			addscoreText.visible = true;
			addscoreText.text = '加分:+' + 200;
		}
	}else{
		ball.body.velocity.x+=(ball.x-zombie.x-zombie.body.width/2)*scale/90;
		zombie.angle = zombie.angle+0.5;
		if(zombie.angle==2){
			beadcombo();
			score += 200;
			scoreText.text = 'score: ' + score;
			addscoreText.visible = true;
			addscoreText.text = '加分:+' + 200;
		}
	}
	 
}
//杀死太阳僵尸
function killsunZombie(ball,sunZombie){
	sunZombie.animations.play('dead',null,false,true);
	sunZombie.angle = sunZombie.angle+0.5;
	if(sunZombie.angle==2){
		beadcombo();
		score += 300;
		scoreText.text = 'score: ' + score;
		addscoreText.visible = true;
		addscoreText.text = '加分:+' + 300;
		//zombie.exists = false;
	}
}


//杀死旗子僵尸
function killflagZombie(ball,flagZombie){

	flagZombie.animations.play('dead',null,false,true);
	flagZombie.angle = flagZombie.angle+0.5;
	if(flagZombie.angle==2){
		beadcombo();
		score += 300;
		scoreText.text = 'score: ' + score;
		addscoreText.visible = true;
		addscoreText.text = '加分:+' + 300;
		//zombie.exists = false;
	}
}
//杀死大僵尸
function killbigZombie(ball,bigZombie){

	bigZombie.animations.play('dead',null,false,true);
	if(ball.x<=bigZombie.x+bigZombie.body.width/2){
		ball.body.velocity.x-=(bigZombie.x+bigZombie.body.width/2-ball.x)*scale/30;
		bigZombie.angle = bigZombie.angle-0.5;
		if(bigZombie.angle==-2){
			beadcombo();
			score += 400;
			scoreText.text = 'score: ' + score;
			addscoreText.visible = true;
			addscoreText.text = '加分:+' + 400;
		}
	}else{
		ball.body.velocity.x+=(ball.x-bigZombie.x-bigZombie.body.width/2)*scale/30;
		bigZombie.angle = bigZombie.angle+0.5;
		if(bigZombie.angle==2){
			beadcombo();
			score += 400;
			scoreText.text = 'score: ' + score;
			addscoreText.visible = true;
			addscoreText.text = '加分:+' + 400;
		}
	}
	 
}
var combotime
function beadcombo(){
	if(combo==0){
		combotime = Date.now();
		combo += 1;
		comboText.text = 'Combo:' + combo;
	}else if(Date.now()-combotime<=800){
		combo += 1;
		comboText.text = 'Combo:' + combo;
		if(combo>5){
			score += 5*combo;
			scoreText.text = 'score: ' + score;
			combaddscoreText.text='连击奖励:+'+ 50*combo;
			combaddscoreText.visible = true;
		}
		combotime = Date.now();
	}else{
		if(maxcombo<combo){
			maxcombo = combo;
		}
		combo = 1;
		comboText.text = 'Combo:' + combo;
		combotime = Date.now();
		combaddscoreText.visible =false;
	}
}
function leftkillball(ball,ditchleft){
	gameover();
}

function rightkillball(ball,ditchright){
	gameover();
}


//游戏结束
function gameover(){
	ball.kill();
	if(maxcombo<combo){
		maxcombo = combo;
	}
	backgroundblack = game.add.button(0,0,"backgroundblack");
	backgroundblack.alpha=0.7;
	backgroundblack.scale.setTo(10*scale,20*scale);
	backgroundblack.width = document.documentElement.clientWidth;
			//Score
			finalscore = game.add.text(width/2 - width/3,game.world.centerY-280*scale, scoreText.text);
			finalscore.anchor.setTo(0, 0.5);
			finalscore.setStyle({stroke:'#111',fill:'white', strokeThickness:10,font:'bold ' + width/14 + 'px' + ' 微软雅黑'});

			//最大连击数
			maxcomboText = game.add.text(width/2 - width/3,game.world.centerY-235*scale, '最大连击数:'+maxcombo);
			maxcomboText.setStyle({stroke:'#111',fill:'white', strokeThickness:10, font:'bold ' + width/14 + 'px' + ' 微软雅黑'});
			maxcomboText.anchor.setTo(0, 0.5);

			encouragetext = game.add.text(width/2 - width/3, game.world.centerY-190*scale, '恭喜你成功碾压僵尸！');
			encouragetext.anchor.setTo(0, 0.5);
			encouragetext.setStyle({stroke:'#111',fill:'white', strokeThickness:10,font:'bold ' + width/14 + 'px' + ' 微软雅黑'});


			copy = game.add.button(game.world.centerX,game.world.centerY-10*scale, 'button', restar, this, 2, 1, 0);
			copy.scale.setTo(0.5*scale,0.6*scale);
			copy.anchor.setTo(0.5,0.5);
			
			button3602 = game.add.button(game.world.centerX-width/4,game.world.centerY+160*scale, 'btnshare', dp_share, this, 2, 1, 0);
			button3602.scale.setTo(0.5*scale,0.6*scale);
			button3602.anchor.setTo(0.5,0.5);

			button = game.add.button(game.world.centerX+width/4,game.world.centerY+160*scale, 'btnmore', clickMore, this, 2, 1, 0);
			button.scale.setTo(0.5*scale,0.6*scale);
			button.anchor.setTo(0.5,0.5);
			dp_submitScore(score);
	


	game.time.events.pause();
	game.time.events.remove();
}
//游戏重新开始
function restar(){
	
		score = 0;
		combo = 0;
		maxcombo = 0;
		addscoreText.text = '加分:+' + 0;
		scoreText.text = 'score: ' + score;
		comboText.text = 'Combo:' + 0;
		backgroundblack.kill();

		if (typeof maxcomboText != 'undefined') {
			maxcomboText.visible = false;
		};

		if (typeof finalscore != 'undefined') {
			finalscore.visible = false;
		};

		if (typeof middletext != 'undefined') {
			middletext.visible = false;
		};

		if (typeof addscoreText != 'undefined') {
			addscoreText.visible = false;
		};

		if (typeof combaddscoreText != 'undefined') {
			combaddscoreText.visible = false;
		};

		if (typeof encouragetextbtm1 != 'undefined') {
			encouragetextbtm1.visible = false;
		};

		if (typeof encouragetextbtm2 != 'undefined') {
			encouragetextbtm2.visible = false;
		};

	   	if (encouragetext!=null) {
			encouragetext.visible = false;
		}

		if (encouragetext2!=null) {
			encouragetext2.visible = false;
		}

		if (typeof combaddscoreText != 'undefined') {
			combaddscoreText.visible = false;
		};

		if (typeof button != 'undefined') {
			button.kill();
		}

		if (typeof button360 != 'undefined') {
			button360.kill();
		}

		////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		if (typeof button3602 != 'undefined') {
			button3602.kill();
		}
		///////////////////////////////////////////////////////////////////////////////////////////////////////////////

		if (button2!=null) {
			button2.kill();
		}

		if (typeof key != 'undefined') {
			key.visible = false;
		};

		if (typeof copy != 'undefined') {
			copy.visible = false;
		};

		if (keyvalue != null) {
			keyvalue.visible = false;
		};

		zombies.destroy(true,true);
		sunZombies.destroy(true,true);
		flagZombies.destroy(true,true);
		bigZombies.destroy(true,true);
		game.time.events.resume();
		timer1;
		timer2;
		timer3;
		timer4;

		ball.reset(game.world.centerX,game.world.height-200*scale);
		ball.revive();

		moveSpeed = 0;
		nowtime = 0;
}



//游戏重新开始
function restar1(){
	buttonshare.kill();	
	backgroundblack2.kill();	

}



var leftSpeed = 4;
var rightSpeed = 4;


//以下是action函数
//向左移动
function actionMoveleft() {

	if(leftSpeed < 14) leftSpeed++;
	if(rightSpeed > 0) rightSpeed --;
	var deltaVel = baseVelocity * leftSpeed;
	ball.body.velocity.x-=deltaVel + moveSpeed;
}

//向右移动
function actionMoveright() {

	if(rightSpeed < 14) rightSpeed++;
	if(leftSpeed > 0)   leftSpeed--;
	var deltaVel = baseVelocity * rightSpeed;
	ball.body.velocity.x+=deltaVel + moveSpeed;
	
}

function actionInstruction(){

	$('#loading').css({

		'width' : document.documentElement.clientWidth + 'px',
		'height' : height + 'px',
		'left' : (document.documentElement.clientWidth - document.documentElement.clientWidth) / 2 + 'px',
	});

	$('#loading img').css('height', height + 'px');

	$("#loading").toggle();

	window.setTimeout(function(){
		$('#loading').css('font-size', '100px');
	},600);
}
$("#loading").click(function(){
	if ($('#loading').css('font-size') != '100px') {
		return;
	};
	$("#loading").toggle();
	$('#loading').css('font-size', '0px');
});

function deleteScore(str)
{
	var start = str.indexOf(':');
	var end = str.length;
	str = str.substr(start+1, end);
	return str;
}


//弹窗 + 设置cdkey的值 
function setCDKey(val)
{
	$('#cdkey').html(val);
}

function TGDialogS(e){

	var w = document.documentElement.clientWidth;
	var h = document.documentElement.clientHeight;

	//设置test1的宽高
	$('#test1').css({
		'width' : w / 1.1 + 'px',
		'height' : h / 3 + 'px'
	});

	//设置p的字体大小
	$('#test1 p').eq(0).css('font-size' , h*0.07/2 + 'px').css('margin-top' , deletePX( $('#test1').css('height') ) / 3 );
	$('#test1 p').eq(1).css('font-size' , h*0.05/2 + 'px');

	//设置关闭按钮
	$('#test1 .dia-close').css({
		'width' : h / 10 + 'px',
		'height' : h / 15 + 'px',
		'left' : deletePX( $('#test1').css('width') ) - h / 10 + 'px',
	});
	var closeH = deletePX ( $('#test1 .dia-close').css('height') );
	$('#test1 .dia-close').css('font-size', closeH/2 + 'px').css('line-height', closeH + 'px');

	need("biz.dialog-min",function(Dialog){
		Dialog.show({
			id:e,
			bgcolor:'#000', //弹出“遮罩”的颜色，格式为"#FF6600"，可修改，默认为"#fff"
			opacity:50      //弹出“遮罩”的透明度，格式为｛10-100｝，可选
		});
	});
}

function closeDialog(){
	need("biz.dialog-min",function(Dialog){
		Dialog.hide();
	});
}

function deletePX(str)
{
  if (typeof str == 'undefined') return ;
  str = str.substr(0, str.length-2);
  return parseInt(str);
}
</script>
<script language=javascript>
		var mebtnopenurl = 'http://www.v918.cn/vgames/index.html';
var thegameurl ="http://www.v918.cn/vgames/games/zwdzjs/"; 
var guanzhuurl ="http://mp.weixin.qq.com/s?__biz=MjM5MTYzNTg1MA==&mid=200926016&idx=1&sn=e48ddb1d423728fd30cf174f382dd932#rd";
		var is9gUser=false;
		window.shareData = {
		        "imgUrl": "http://www.v918.cn/vgames/games/zwdzjs/icon.png",
		        "timeLineLink": thegameurl,
		        "tTitle": "植物大战僵尸",
		        "tContent": "植物大战僵尸"
		};
				
		function goHome(){
			window.location=mebtnopenurl;
		}
		function clickMore(){
			if((window.location+"").indexOf("zf",1)>0){
				window.location =mebtnopenurl;
			 }
			 else{
				goHome();
			 }
		}
		function dp_share(){
			document.getElementById("share").style.display="";
			
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
			<img width=100% src="share.png"
				style="position: fixed; z-index: 9999; top: 0; left: 0; display: "
				ontouchstart="document.getElementById('share').style.display='none';" />
		</div>
		<div style="display: none;">
			<script type="text/javascript">
            var myData = { gameid: "zwdzjs" };
			
			function dp_submitScore(score){
				myData.score = parseInt(score);
				myData.scoreName = "获得"+score+"分";
					document.title ="我一举消灭了入侵的丧尸获得了"+score+"分，丧尸已现世，快来一起消灭他们吧！";
					window.shareData.tTitle = document.title;
			}
			function onShareComplete(res) {
                if (localStorage.myuid && myData.score>0) {
                    setTimeout(function(){
                        if (confirm("？")) {
                            window.location =mebtnopenurl;
                        }
                        else {
                            document.location.href = mebtnopenurl;
                        }
                    }, 500);
                }
				else {
		        	document.location.href = guanzhuurl ;
				}
	        }	 
			</script>
			<div style="display: none;">
				
			</div>
			 <script type="text/javascript" src="js/game9g.utils.js?r="+Math.rand()></script>
</body>
</html>