<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
		<title>购物车</title>
		<meta content="app-id=518966501" name="apple-itunes-app" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=no, maximum-scale=1.0"/>
		<meta content="yes" name="apple-mobile-web-app-capable" />
		<meta content="black" name="apple-mobile-web-app-status-bar-style" />
		<meta content="telephone=no" name="format-detection" />
		<link href="<?php echo ($staticPath); ?>/tpl/static/unitary/css/comm.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo ($staticPath); ?>/tpl/static/unitary/css/cartList.css" rel="stylesheet" type="text/css" />
		<style>
			.cerror{
				width: 256px;
				height: 46px;
				position: absolute;
				left: 50%;
				margin-left:-128px;
				top: -5px;
				display: none;
			}
			.error{
				width: 256px;
				height: 46px;
				position: fixed;
				left: 50%;
				margin-left:-128px;
				top: 50%;
				margin-top:-23px;
				display: none;
			}
			.cart_del{
				width: 256px;
				height: 126px;
				position: fixed;
				left: 50%;
				margin-left:-128px;
				top: 50%;
				margin-top:-63px;
				display: none;
				z-index:102;
			}
		</style>
	</head>
	<body>
		<script src="<?php echo ($staticPath); ?>/tpl/static/unitary/js/jquery-2.1.3.min.js" language="javascript" type="text/javascript"></script>
		<div id="loadingPicBlock">
			<div class="wrapper">
				<div class="g-Cart-list marginB">
					<ul id="cartBody">
						<?php if(is_array($cart_list)): $i = 0; $__LIST__ = $cart_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="unitary_cart" unitaryid="<?php echo ($vo["unitary_id"]); ?>" id="unitary_cart<?php echo ($vo["id"]); ?>" style="position:relative;">
							<a class="fl u-Cart-img">
								<img src="<?php echo $unitary[$vo['id']]['logopic']?>" border="0" alt="">
							</a>
							<div class="u-Cart-r">
								<a class="gray6"><?php echo $unitary[$vo['id']]['name']?></a>
								<span class="gray9">剩余<em id="ycount<?php echo ($vo["id"]); ?>"><?php echo $ycount[$vo['id']]?></em>人次 </span>
								<input cid="<?php echo ($vo["id"]); ?>" name="" maxlength="7" type="number" id="cart_count<?php echo ($vo["id"]); ?>" class="gray6 cart_count" value="<?php echo ($vo["count"]); ?>"/>
								<a cid="<?php echo ($vo["id"]); ?>" class="z-del"><s></s></a>
							</div>
							<div class="cerror" id="cerror<?php echo ($vo["id"]); ?>">
								<div class="Prompt"></div>
							</div>
						</li><?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
					<div id="divNone" class="empty" style="display: none;">
						<s></s>
						购物车为空
					</div>
				</div>
				
				<div id="mycartpay" class="g-Total-bt" style="bottom: 0px;">
					<dl>
						<dt class="gray6"><span>共<em class="orange" id="sum"><?php echo ($sum); ?></em>个商品</span>合计<em class="orange" id="total"><?php echo ($total); ?>.00</em>元</dt>
						<dd><a href="javascript:buy();" class="orangeBtn w_account">去结算</a></dd>
					</dl>
				</div>
				
				<div class="footer" style="display:none;">
					<ul>
						<li class="f_whole"><a href="<?php echo U('Unitary/index',array('token'=>$token));?>" title="所有商品"><i></i>所有商品</a></li>
						<li class="f_car"><a id="btnCart" href="<?php echo U('Unitary/cart',array('token'=>$token));?>" class="hover" title="购物车"><i></i>购物车</a></li>
						<li class="f_personal"><a href="<?php echo U('Unitary/my',array('token'=>$token));?>"  title="我的"><i></i>我的</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div id="pageDialogBG" class="pageDialogBG"></div>
		<div id="cart_del" class="cart_del">
			<div class="clearfix m-round u-tipsEject">
				<div class="u-tips-txt">您确定要删除吗？</div>
				<div class="u-Btn">
					<div class="u-Btn-li">
						<a id="btnMsgCancel" class="z-CloseBtn">取消</a>
					</div>
					<div class="u-Btn-li">
						<a id="btnMsgOK" class="z-DefineBtn">确定</a>
					</div>
				</div>
			</div>
		</div>
		<div id="error" class="error">
			<div class="Prompt"></div>
		</div>
		<script type="text/javascript">
			$(function(){
				delorder();
				var cnum = $(".unitary_cart").length;
				if(cnum == 0){
					$("#mycartpay").hide();
					$(".footer").show();
					$("#divNone").show();
				}
				$(".unitary_cart").click(function(){
					var id = $(this).attr("unitaryid");
					window.location.href="<?php echo U('Unitary/goodswhere',array('token'=>$token));?>&unitaryid="+id;
				});
				$(".cart_count").click(function(){
					event.stopPropagation();
					var id = $(this).attr("cid");
					$.ajax({
						type:"POST",
						url:"<?php echo U('Unitary/cartajax',array('token'=>$token));?>",
						dataType:"json",
						data:{
							type:'click_cart_count',
							token:"<?php echo ($token); ?>",
							wecha_id:"<?php echo ($wecha_id); ?>",
							cid:id
						},
						success:function(data){
							if(data.error == 1){
								cerror(id,data.text);
								setTimeout(function(){
									location.reload();
								},1000);
							}else{
								$("#ycount"+id).html(data.ycount);
							}
						}
					});
					$(this).bind("input propertychange",function(){
						var cart_count = $(this).val();
						$.ajax({
							type:"POST",
							url:"<?php echo U('Unitary/cartajax',array('token'=>$token));?>",
							dataType:"json",
							data:{
								type:'cart_count_change',
								token:"<?php echo ($token); ?>",
								wecha_id:"<?php echo ($wecha_id); ?>",
								cid:id,
								cart_count:cart_count
							},
							success:function(data){
								if(data.error == 2){
									cerror(id,data.text);
									setTimeout(function(){
										location.reload();
									},1000);
								}else{
									if(data.error == 1){
										cerror(id,data.text);
									}
									$("#cart_count"+id).val(data.cart_count);
									$("#ycount"+id).html(data.ycount);
									$("#total").html(data.total+".00");
								}
							}
						});
					});
				});
				$(".z-del").click(function(){
					event.stopPropagation();
					var id = $(this).attr("cid");
					$("#pageDialogBG").show();
					$("#cart_del").show();
					$("#btnMsgCancel").click(function(){
						$("#pageDialogBG").hide();
						$("#cart_del").hide();
					});
					$("#btnMsgOK").click(function(){
						$.ajax({
							type:"POST",
							url:"<?php echo U('Unitary/cartajax',array('token'=>$token));?>",
							dataType:"json",
							data:{
								type:'cart_del',
								token:"<?php echo ($token); ?>",
								wecha_id:"<?php echo ($wecha_id); ?>",
								cid:id
							},
							success:function(data){
								if(data.error == 1){
									location.reload();
								}else{
									$("#pageDialogBG").hide();
									$("#cart_del").hide();
									$("#total").html(data.total+".00");
									$("#sum").html(data.sum);
									$("#unitary_cart"+id).hide();
									if(data.total == 0 && data.sum == 0){
										$("#mycartpay").hide();
										$(".footer").show();
										$("#divNone").show();
									}
								}
							}
						});
					})
				});
				
			})
			function delorder(){
				$.ajax({
					type:"POST",
					url:"<?php echo U('Unitary/cartajax',array('token'=>$token));?>",
					dataType:"json",
					data:{
						type:'delorder',
						token:"<?php echo ($token); ?>",
						wecha_id:"<?php echo ($wecha_id); ?>"
					},
					success:function(data){
						if(data.error == 1){
							location.reload();
						}
					}
				});
				//setTimeout("delorder()",3000);
			}
			function cerror(id,text){
				$("#cerror"+id+" .Prompt").html(text);
				$("#cerror"+id).fadeIn();
				setTimeout(function(){
					$("#cerror"+id).fadeOut();
				},1000)
			}
			function error(text){
				$("#error .Prompt").html(text);
				$("#error").fadeIn();
				setTimeout(function(){
					$("#error").fadeOut();
				},1000)
			}
			function buy(){
				var cnum = $(".unitary_cart").length;
				$.ajax({
					type:"POST",
					url:"<?php echo U('Unitary/cartajax',array('token'=>$token));?>",
					dataType:"json",
					data:{
						type:'buy',
						token:"<?php echo ($token); ?>",
						wecha_id:"<?php echo ($wecha_id); ?>",
						cnum:cnum
					},
					success:function(data){
						if(data.error == 2){
							window.location.href="<?php echo U('Unitary/address',array('token'=>$token));?>";
						}else if(data.error == 1){
							error(data.text);
							setTimeout(function(){
								location.reload();
							},1000);
						}else if(data.error == 0){
							window.location.href="<?php echo U('Unitary/address',array('token'=>$token));?>";
						}
					}
				});
			}
		</script>

<?php if($unitary == ''): ?><script type="text/javascript">
window.shareData = {  
            "moduleName":"Unitary",
            "moduleID":"0",
            "imgUrl": "<?php echo ($staticPath); ?>/tpl/static/unitary/images/wxnewspic.jpg", 
            "sendFriendLink": "<?php echo ($f_siteUrl); echo U('Unitary/index',array('token'=>$token));?>",
            "tTitle": "一元夺宝",
            "tContent": ""
        };
</script>
<?php else: ?>
<script type="text/javascript">
window.shareData = {  
            "moduleName":"Unitary",
            "moduleID":"0",
            "imgUrl": "<?php echo ($unitary['wxpic']); ?>", 
            "sendFriendLink": "<?php echo ($f_siteUrl); echo U('Unitary/goodswhere',array('token'=>$token,'unitaryid'=>$_GET['unitaryid']));?>",
            "tTitle": "<?php echo ($unitary['name']); ?>",
            "tContent": "<?php echo ($unitary['wxinfo']); ?>"
        };
</script><?php endif; ?>
<?php echo ($shareScript); ?>
	</body>
</html>