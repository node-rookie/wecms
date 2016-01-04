
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
<meta charset="utf-8" />
<title>99%的人都被逼疯了，制作新消息头像，一起逼死强迫症！</title>
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0, maximum-scale=1.0,user-scalable=no"/>
<meta name="format-detection" content="telephone=no">
<link rel="stylesheet" href="figuremsg/base.css" />
</head>
<body>
<div class="wrapper">

	<div class="title"></div>

	<div class="upload"><input type="file" accept="image/*" capture="camera" id="file" /><i>添加图片</i></div>
	
	<div id="error"></div>

	<div class="selects">
		<div class="clear">选择右上角要显示的消息数
			<select class="vallist">
			<option value="傻">傻</option>
			<option value="王">王</option>
			<option value="笨">笨</option>
			<option value="呆">呆</option>
			<option value="2B">2B</option>
			<option value="SB">SB</option>
			<option value="SB">NB</option>
				<option value="1">1</option>
				<option value="2B">2B</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>

				<option value="11">11</option>
				<option value="12">12</option>
				<option value="13">13</option>
				<option value="14">14</option>
				<option value="15">15</option>
				<option value="16">16</option>
				<option value="17">17</option>
				<option value="18">18</option>
				<option value="19">19</option>
				<option value="20">20</option>

				<option value="21">21</option>
				<option value="22">22</option>
				<option value="23">23</option>
				<option value="24">24</option>
				<option value="25">25</option>
				<option value="26">26</option>
				<option value="27">27</option>
				<option value="28">28</option>
				<option value="29">29</option>
				<option value="30">30</option>

				<option value="31">31</option>
				<option value="32">32</option>
				<option value="33">33</option>
				<option value="34">34</option>
				<option value="35">35</option>
				<option value="36">36</option>
				<option value="37">37</option>
				<option value="38">38</option>
				<option value="39">39</option>
				<option value="40">40</option>

				<option value="41">41</option>
				<option value="42">42</option>
				<option value="43">43</option>
				<option value="44">44</option>
				<option value="45">45</option>
				<option value="46">46</option>
				<option value="47">47</option>
				<option value="48">48</option>
				<option value="49">49</option>
				<option value="50">50</option>

				<option value="51">51</option>
				<option value="52">52</option>
				<option value="53">53</option>
				<option value="54">54</option>
				<option value="55">55</option>
				<option value="56">56</option>
				<option value="57">57</option>
				<option value="58">58</option>
				<option value="59">59</option>
				<option value="60">60</option>

				<option value="61">61</option>
				<option value="62">62</option>
				<option value="63">63</option>
				<option value="64">64</option>
				<option value="65">65</option>
				<option value="66">66</option>
				<option value="67">67</option>
				<option value="68">68</option>
				<option value="69">69</option>
				<option value="70">70</option>

				<option value="71">71</option>
				<option value="72">72</option>
				<option value="73">73</option>
				<option value="74">74</option>
				<option value="75">75</option>
				<option value="76">76</option>
				<option value="77">77</option>
				<option value="78">78</option>
				<option value="79">79</option>
				<option value="80">80</option>

				<option value="81">81</option>
				<option value="82">82</option>
				<option value="83">83</option>
				<option value="84">84</option>
				<option value="85">85</option>
				<option value="86">86</option>
				<option value="87">87</option>
				<option value="88">88</option>
				<option value="89">89</option>
				<option value="90">90</option>

				<option value="91">91</option>
				<option value="92">92</option>
				<option value="93">93</option>
				<option value="94">94</option>
				<option value="95">95</option>
				<option value="96">96</option>
				<option value="97">97</option>
				<option value="98">98</option>
				<option value="99">99</option>

				<option value="99+">99+</option>				
			</select>	
		</div>
		<p>没有照片？试试下面头像</p>
	</div>
	<br>

	<div class="img-list clear">
		<ul id="imgList"></ul>
	</div>

	<a href="javascript:;" class="bingo">生成头像</a>
	
</div><!-- wrapper end -->

 

<div class="share" style="display:none;">
	<p><a href="javascript:;" class="reset-link"></a><a href="javascript:;" class="share-link"></a></p>
	<img src="" class="new-pic" />
</div><!-- share end -->

<div class="mask1" style="display:none;"></div>
<div class="mask2" style="display:none;"></div>

<div class="toast_tip" style="display:none;">上传图片不能大于1MB</div>

<script src="figuremsg/zepto.min.js"></script>
<script>


$(function(){
	var WIN = window,
	UA = WIN.navigator.userAgent,
	IsAndroid = (/Android|HTC/i.test(UA) || !!(WIN.navigator['platform'] + '').match(/Linux/i)), /* HTC Flyer平板的UA字符串中不包含Android关键词 */
	IsIPad = !IsAndroid && /iPad/i.test(UA),
	IsIPhone = !IsAndroid && /iPod|iPhone/i.test(UA),
	IsIOS =  IsIPad || IsIPhone;
	
	var upload = $('.upload'); //上传容器
	var canvas = null; //canvas画布
	var newPic = null; //图片对象
	var flag = true; //确认是否选择图片
	var num = 1; //选择数字
	var mark = false; //
	var uploadImg = ''; //缓存生成的图片
	var mainImgUrl = '';
	//var mainImgUrl = 'http://www.ijinshan.com/game/figuremsg/face.png';
	if (IsIOS) {
		mainImgUrl = 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJYAAACWCAMAAAAL34HQAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyFpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDE0IDc5LjE1MTQ4MSwgMjAxMy8wMy8xMy0xMjowOToxNSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIChXaW5kb3dzKSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDo3MjgxQTZCQzJEMDAxMUU0QjcwN0UzQTEwRkIxNDA4RCIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDo3MjgxQTZCRDJEMDAxMUU0QjcwN0UzQTEwRkIxNDA4RCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjcyODFBNkJBMkQwMDExRTRCNzA3RTNBMTBGQjE0MDhEIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjcyODFBNkJCMkQwMDExRTRCNzA3RTNBMTBGQjE0MDhEIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+wF7OIwAAAwBQTFRFFVyx2vj/FGO7VZXl/gMLx9jxTZb02Oz80+7///r5CVeyrMThs8fdm2SF4+z98Pv+6/b/8/b90uX9/evnweH9pr7lz9XgiLLZh7ny2OLs//799P///QAB8f//HF2tGmGt9///ImCr//74/v7/FWGzIl6w+f3/HF6yU5jh+v////36//r/UJjsG2Gz+v/3HGGn///0eKXme6vcFV6sTpXvSJrkTZbj/f/6//v9+/7/X5Hm/f/3TZjr6/7/kMDx/Pz/RZfpHGG5l7TZX4jC5vH/mr74+v/84O33HFykFGStV4rBHWWz//z3I2S1kLPbvdTw9fv/KmGt9gEBW4a1I1ynnLTUKFuZI2Ci/QYC/v7vk7XTF1mrKmCjHV27+vj+I2ataIy15P3///vw/vn1F2W0/fz8GmaruNbt9f/4H1it+vn5E125WIjL/P32MWGZHGe6FWGlHFmZ+vv/Llum9//7/Pz6+f/yFFqiImGb//X+9gIIIViimrnfaJHD+f/4wtDoOWWgXJDGS2+fL2elDmGswtbnJmWj+/36DVqqGGTD4/T/+Pz6vdvt+fv1DGK7K2mvl6/T/vnoj7nc9fr4YYfN+3p76/P4lbjlS4C98P/59gkB//TwO26mGmaiQHS2qrjPk7HjnLrVt9Tyyub9udX7iqzXdZ/Uo8ry+gMXnLPJsdL8NmizXJfh6wMDtsznsdXoMW2q+ScwpdP9tdnyd5vBYpjUkLjRr831+WFqT5TbiLjlVpXb8/Tz8/7yxs7WnKzN/qCe8Bovvdn+KXC7aqPZg6/gW5rr9ERP+fnw/rm4zN30TJDiTIzS/RIcNlqGElGhTaHxRpPk9hAK++/87P33iKTIaZ/mzvf/s9v9jbLMH1KygZSw5C8xEGmp6xcb4vL16ggTzODt/+3S6+/36ebrw8/75RII/f//UJ364ef0+sa9nqq00Rw/3RkVsc36nMfzVozlQJvl0uXz+/3///z47PD+/dbR5vD4uD1rr1R15fHt/P/////6//3/////////3DdAHgAAAQB0Uk5T////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////AFP3ByUAACQfSURBVHja7JwHeBpXuvfHWIqD7WskJ7G9M5oCw0AAIyYmMezFBCN9S5AACQQCIwTqsorVu1WsZlWrWO5x7y1xb3Fc0nvvdbO7d3u5W277vm9KvoMseWPZ2ngfKbn7Pc/9nxlZAzL8nve85z3ve6ZAX/9DCvofrP/PsITCfzQs4aun34xYvXr1e6cvvfrv/yhY91169icrVqRExMTErPjlkdOvCv8RsP590xerU2JSABfYYwBcysuv/vdjCS8dWQ2sFHNjBz8B2rOv/ndj3XcamGpF2FpPRqz+ccooWkrKe6cnwfq3yuj/+hegx74rzZs3a9Z//NfPT/8kYkXMioiII0eeffmZ354Gv8dEgO58c9MdsGY98NDSpUsfXPbgsqUzvyM99fQ/v/Onpz//36uffByQHDm96Zn7crav/+KXYWsBrid/+epErFkvPr344YeXLVu2fHl4/4708OvL71n6T78HvZeyYvUXP8tpoAeQ7GcjRt0LGDDltPBWrH994vXly9996ukHH5wZ/vEd6YkHl77+Utvvn1zxZLjXvvjZM5subdpuPx0TMQoWAdxt0zexfhX59MO/Xvzg+SUvLno0rB99R2p69HDTnH86smLF408+DsDejFnxh01F608/fnNExrwp/AbWH19a+u4b5w/3MSRpMplIEvmOxGzbJqNfBr0Vk/I4MNGTMTGPb6rNOf1kTErMqL1iIlJe/QbWzNffeXDJx5YGu5IFUn5nUjkbWn52ZHXKH2IigLVS3gP7JVbybJgpImywFSk/fvkm1q8eumdx4kgfx1fzkwjWcyoTbHiF5DiOJDkTN6YQOCLB+/2MjgFG5r5NjBAVPhPxeMxNrY7ZxCtP//UYoN7Eivrontdf+ETB5RGTYVksDMNUb6jWAbG3qqREIpHAMA/4uCL2W8TA1TnPrF5xC5aeffbmYXgaEo5j/evT97xx2EgKJ8dqUKnAplLpGAuQjhn/mhqlsgb0u8SUlxfufsm3Yln02zetjrnVWpLT38CKOXLf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';
	} else {
		mainImgUrl = 'http://mmbiz.qpic.cn/mmbiz/2zpp2iaH4HWFokcxP1RNheFgMB3UtGvYjPR3AfmKHnzgYDAYCJT5cpynUg55bTiaia2TkibXHORlemg82xJo3z3icoQ/640';
	}
	var timer = null; //选择图片延迟
	var androidPic = '';
	
	var tempArr = []; //临时图片数组
	var tempHtmlArr = []; //临时HTML片段数组
	var tempLock = false; //循环锁
	var isOver = false; //判断循环是否结束
	
	while(!isOver){
		var ram = Math.round(Math.random()*18);
		for(var i=0; i<4; i++){
			if(ram===tempArr[i]){
				tempLock = true;
			}
		}
		if(!tempLock){
			tempArr.push(ram);
			tempHtmlArr.push('<li><img src="item'+ram+'.jpg" /></li>');
		}
		if(tempArr.length===4){
			isOver = true;
		}
		tempLock = false;
	}
	
	$("#imgList").append(tempHtmlArr.join(''));
	
	//选择推荐图片
	$(".img-list li").on('click', function(){
		timer && clearTimeout(timer);
		mark = false;
		num = $('.vallist option:selected').val();
		$(this).addClass('cur').siblings().removeClass('cur');
		timer = setTimeout(function(){
			drawImage($(this).find('img').attr('src'));
		}.bind(this),300);
		//_hmt.push(['_trackEvent', 'add', 'click', 'recommend pic', 0]); //埋点
	});
	//选择数字
	$(".vallist").on('change', function(){
		num = $(this).val();
		if(!mark){
			drawImage($(".img-list li.cur").find('img').attr('src'));		
		}else{
			drawImage(uploadImg);
		}
		//_hmt.push(['_trackEvent', 'add', 'click', 'select number', 0]); //埋点
	});
	//确定保存
	$(".bingo").on('click', function(){
		if(flag){
			alert('请选择添加图片');
			return false;
		}
		$(".mask1").css('display','block');
		$(".share").css('display','block');
		
		newPic = new Image();

		if(!IsAndroid){
			newPic.src = canvas.toDataURL("image/png");
			newPic.className = "new-pic";
			$(".share").append(newPic);		
			mainImgUrl = newPic.src;
		}else{
			var url = 'http://www.v918.cn/vgames/index.html';
			$.ajax({
				type: 'post',
				url: url,
				data: {
					'userfile': canvas.toDataURL("image/png")
				},
				success:function(result){
					var result = result;
					if (typeof result == 'string') {
						result = eval('('+ result +')');
					}
					mainImgUrl = result.data;
					$(".share").find('img').attr('src',mainImgUrl);
				},
				error:function(){
				}
			});	
		}
		//_hmt.push(['_trackEvent', 'submit', 'click', 'confirm submit', 0]); //埋点
	});
	//重做按钮
	$(".reset-link").on('click', function(){
		flag = true;
		upload.find('canvas').remove();
		
		$(".share").css('display','none');
		$(".mask1").css('display','none');
		//_hmt.push(['_trackEvent', 'reset', 'click', 'reset pic', 0]); //埋点
	});
	//分享按钮
	$(".share-link").on('click', function(){
		$(".mask2").css('display','block');
		//_hmt.push(['_trackEvent', 'share', 'click', 'share pic', 0]); //埋点
	});
	//mask隐藏
	$(".mask2").on('click', function(){
		$(".mask2").css('display','none');
	});
	//生成canvas
	function drawImage(src){
		//标记
		flag = false;
	
		canvas = document.createElement('canvas');
		canvas.width = 100;  
		canvas.height = 100; 
		
		var canvasCtx = canvas.getContext('2d');
		var image = new Image();
		var _x = 62;
		var _fn = 28;
		var _y = 30;
		
		if(num == '99+'){
			_x = 62;
			_fn = 20;
			_y = 28;
		}else if(num == '2B'){
			_x = 64;
			_fn = 26;
		}else if(parseInt(num) < 10){
			_x = 70;
			_fn = 30;
		}else if(parseInt(num) >= 10){
			_x = 63;
			_fn = 28;
		}
		
		image.onload = function () {
			if(this.width > this.height && this.width > 1280){
				if (IsAndroid) {
					canvasCtx.drawImage(this, 0, 0, this.width, this.height, 0, 0, 100, 100);
				} else {
					canvasCtx.drawImage(this, 0, 0, this.width, 1000, 0, 0, 100, 100);
				}
				
			}else{
				canvasCtx.drawImage(this, 0, 0, this.width, this.height, 0, 0, 100, 100);
			}
	
			canvasCtx.beginPath();
			canvasCtx.arc(80,22,20,0,2*Math.PI);
			canvasCtx.fillStyle="#f00";
			canvasCtx.fill();
			canvasCtx.font=_fn+"px arial";
			canvasCtx.fillStyle="#fff";
			canvasCtx.fillText(num,_x,_y);
		}
		
		image.src = src;
		//canvas.toDataURL("image/png");
		if($('.upload').find('canvas').length > 0){
			$('.upload').find('canvas').remove();
		}
		$('.upload')[0].appendChild(canvas);
	}
	//读取file图像
    function readAsDataURL(){
        //检验是否为图像文件  
        var file = document.getElementById("file").files[0];
        var reader = new FileReader();  
		
        //将文件以Data URL形式读入页面  
        reader.readAsDataURL(file);
        reader.onload=function(e){
			if($("#fileNewPic").find('img').length > 0){
				$("#fileNewPic").find('img').remove();
			}
			if(IsAndroid){
				drawImage("data:application/octet-stream;"+e.target.result.substr(e.target.result.indexOf("base64,")));
				uploadImg = "data:application/octet-stream;"+e.target.result.substr(e.target.result.indexOf("base64,"));
			}else{
				drawImage(this.result);
				uploadImg = this.result;			
			}
        }
		reader.onerror = function(e) {
			alert('图片读取失败，请换一张再试！');
			return false;
		}
    }
	//上传图片
	$("#file").on('change', function(){
		mark = true;
		readAsDataURL();
		//_hmt.push(['_trackEvent', 'add', 'click', 'add location pic', 0]); //埋点
	});
	function onBridgeReady() {
		try{
			var mainTitle="99%的人都被逼疯了，制作新消息头像，一起逼死强迫症！",
				mainDesc="99%的人都被逼疯了",
				mainURL= "http://www.v918.cn/vgames/games/bsqpz/";
			
			//转发朋友圈
			WeixinJSBridge.on("menu:share:timeline", function(e) {
				WeixinJSBridge.invoke("shareTimeline", {
					img_url:mainImgUrl,
					img_width: "120",
					img_height: "120",
					link: mainURL,
					desc: mainDesc,
					title: mainTitle				
				}, function(res) {
					dialog();
					$(".mask2").css('display','none');
				});
			});
			//同步到微博
			WeixinJSBridge.on("menu:share:weibo", function() {
				WeixinJSBridge.invoke("shareWeibo", {
					"content": mainDesc,
					"url": mainURL
				}, function(res) {
					dialog();
					$(".mask2").css('display','none');
				});
			});
			//分享给朋友
			WeixinJSBridge.on('menu:share:appmessage', function(argv) {
				WeixinJSBridge.invoke("sendAppMessage", {
					img_url: mainImgUrl,
					img_width: "120",
					img_height: "120",
					link: mainURL,
					desc: mainDesc,
					title: mainTitle
				}, function(res) {
					setTimeout(function(){
						dialog();
						$(".mask2").css('display','none');
					},1);
				});
			});
		}catch(e){
			alert(e);
		}
	};
	//执行
	document.addEventListener('WeixinJSBridgeReady', function() {
		onBridgeReady();
	},false);
	//分享弹出框
	function dialog(){
		if(URL.getQueryString('f') == 'fans'){
			return false;
		}
		var t = confirm('组团逼死强迫症，快来关注我!软灵通:v918_cn');
		if(t){
			window.location.href = 'http://mp.weixin.qq.com/s?__biz=MjM5MTYzNTg1MA==&mid=200926016&idx=1&sn=e48ddb1d423728fd30cf174f382dd932#rd';
		}
	}
	
});

var URL = {
	/**
	 * 根据传入的query字符串返回键值对形式的对象
	 * @param {String} queryString query字符串
	 * @return {KeyValueObject}
	 */
	getQueryData: function(queryString) {
		
		/* 去掉字符串前面的"?"，并把&amp;转换为& */
		queryString = queryString.replace(/^\?+/, '').replace(/&amp;/, '&');
		var querys = queryString.split('&'),
			i = querys.length,
			_URLParms = {};
		
		while (i--) {
			item = querys[i].split('=');
			if (item[0]) {
				var value = item[1] || '';
				try {
					value = decodeURIComponent(value);
				} catch(e) {
					value = unescape(value);
				}
				_URLParms[decodeURIComponent(item[0])] =  value;
			}
		}
		return _URLParms;
	},

	/**
	 * 获取当前页面或者指定DOM对象的URL中的指定的GET参数的值
	 * @param {String} key 要获取的GET参数的键
	 * @param {DOM} el 如此传递此参数，则获取这个DOM对象的url，如果不传则获取当前页面的url
	 * @return {String|null}
	 */
	getQueryString: function(key, el) {
		var parms,
			queryString = el ? URL.getElSearchString(el) : window.location.search.substring(1);

		parms = URL.getQueryData(queryString);
		return (key in parms) ? parms[key] : null;
	},

	/**
	 * 获取指定DOM对象的链接地址的queryString
	 * @param {DOM} el 要获取参数的DOM对象
	 * @return {String}
	 */
	getElSearchString: function(el) {
		/* 在某些Android下获取不到el.search的值，要使用自定义方法从url中截取 */
		var el = $(el).get(0),
			searchString = el.search || '';
		if (!searchString) {
			var hrefString = ('FORM' == el.nodeName ? el.getAttribute('action') : el.getAttribute('href')),
				pos = hrefString.indexOf('?');	
			if (-1 !== pos) {
				searchString = hrefString.slice(pos);
			}
		}
		return searchString;
	},

	/**
	 * 设置指定DOM对象或者页面的URL中的指定的GET参数的值
	 * @param {DOM} el 设置这个DOM对象的url
	 * @param {Object} data 要设置的GET参数，以键值对的方式提供
	 */
	setQueryString: function(el, data) {
		var el = $(el),
			elTag = el.get(0),
			elSearch = elTag.search,
			_searchString = elSearch || '',
			_key,
			_value;
		/* 非<A>对象没有search属性 */
		if (!elSearch) {
			var hrefString,
				nodeName = elTag.nodeName;
			if ('FORM' == nodeName) {
				if ('post' == elTag['method'].toLowerCase()) {
					hrefString = el.attr('action') || (location + ''); /* 如果action为空则取当前页面的url */
				} else {
					/* 如果使用GET方式提交的表单，要把GET参数以HIDDEN表单字段的方式附加到表单中去 */
					for (_key in data) {
						_value = data[_key];
						var inputEl = $('input[name="' + _key + '"]', el);
						if  (inputEl) {
							inputEl.val(_value);
						} else {
							el.append($('<input type="hidden" name="' +  _key + '" value="' +  _value + '" />'));
						}
					}
					return;
				}
			} else {
				hrefString = el.attr('href') || (location + ''); /* 如果href为空则取当前页面的url */
			}
			var startPos = hrefString.indexOf('?'),
			endPos = hrefString.indexOf('#');
			if (-1 == endPos) endPos = hrefString.length;
			if (startPos < 0 || startPos > endPos) {
				_searchString = '';
				startPos = endPos; /* 用于下面设置searchString */
			} else {
				_searchString = hrefString.slice(startPos + 1, endPos);
			}
		}
		
		var URLParms = URL.getQueryData(_searchString), /* 获取对象原有的GET参数 */
			_result = [];

		/* 把新参数和对象原有的GET参数合并 */
		for (_key in data) {
			URLParms[_key] = data[_key];
		}
		
		for (_key in URLParms) {
			_value = URLParms[_key];
			_result.push(_key + (_value ? ('=' + encodeURIComponent(_value)) : ''));
		}
		if (_result.length < 1) return;
		
		var newSearchString = '?' + _result.join('&');
	
		if (elSearch) {
			elTag.search = newSearchString;
		} else {
			var attri = ('FORM' == nodeName) ? 'action' : 'href';
			el.attr(attri, hrefString.slice(0, startPos) + newSearchString + hrefString.slice(endPos));
		}
	},

	/**
	 * 参数对象转为查询字符串片段
	 */
	objToQueryString: function(obj) {
		var result = [], key, value, i;
		for (key in obj) {
			value = obj[key];
			if (value instanceof Array) {
				for (i = value.length; i--;) {
					result.push(key + '[]=' + encodeURIComponent(value[i]));
				}
			} else {
				result.push(key + ('' === value ? '' : ('=' + encodeURIComponent(value))));
			}
		}
		return result.join('&');
	}
};
</script>
</body>
</html>

