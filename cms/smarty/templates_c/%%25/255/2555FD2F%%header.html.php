<?php /* Smarty version 2.6.18, created on 2014-06-19 00:04:18
         compiled from 3/acqqmw1403106241/header.html */ ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
<meta content="yes" name="apple-mobile-web-app-capable" />
<meta content="telephone=no" name="format-detection" />
<link rel="Shortcut Icon" href="favicon.ico" />
<link rel="Bookmark Icon" href="favicon.ico" />
<link href="logo.png" sizes="114x114" rel="apple-touch-icon">
<meta name="Author" content="024" />

<meta name="keywords" content="<?php echo $this->_tpl_vars['metaKeywords']; ?>
" />
<meta name="description" content="<?php echo $this->_tpl_vars['metaDescription']; ?>
"/>
<LINK href="templates/v14/jquery.mobile.structure-1.2.0.min.css?<?php echo $this->_tpl_vars['rand']; ?>
" tppabs="/3g/css/jquery.mobile.structure-1.2.0.min.css?<?php echo $this->_tpl_vars['rand']; ?>
" rel=stylesheet>
<LINK href="<?php echo $this->_tpl_vars['cssdir']; ?>
/style.css?<?php echo $this->_tpl_vars['rand']; ?>
" rel=stylesheet>
<script language="JavaScript" type="text/javascript" src="smarty/templates/tpls/<?php echo $this->_tpl_vars['site']['template']; ?>
/jquery-1.6.4.min.js" tppabs="/3g/common/js/jquery-1.6.4.min.js"></script>
<script language="JavaScript" type="text/javascript" src="smarty/templates/tpls/<?php echo $this->_tpl_vars['site']['template']; ?>
/nav.js" tppabs="/3g/common/js/nav.js"></script>
<script language="JavaScript" type="text/javascript" src="smarty/templates/tpls/<?php echo $this->_tpl_vars['site']['template']; ?>
/search.js" tppabs="/3g/common/js/search.js"></script>
<script language="JavaScript" type="text/javascript" src="smarty/templates/tpls/tianlan/banner.js" tppabs="common/js/banner.js"></script>
<title><?php echo $this->_tpl_vars['metaTitle']; ?>
</title>
</head>
<body>
<div data-role="page" data-theme="f">
<div class="wrap">
<div class="header" data-role="header">
  <div class="logo"><a href="<?php echo $this->_tpl_vars['homeurl']; ?>
"  title="<?php echo $this->_tpl_vars['metaTitle']; ?>
" data-ajax="false" data-role="none"><img style="max-height:30px;" src="<?php echo $this->_tpl_vars['site']['logourl']; ?>
"  alt="<?php echo $this->_tpl_vars['metaTitle']; ?>
"/></a></div>
  <div class="menu_but"><img src="smarty/templates/tpls/<?php echo $this->_tpl_vars['site']['template']; ?>
/menu.png" tppabs="images/menu.png" alt="导航按钮" class="fr"/></div>

<ul class="nav">
  <li><a href="<?php echo $this->_tpl_vars['homeurl']; ?>
" tppabs="html/index.html" data-ajax="false">首页 </a></li>
  <?php if ($this->_tpl_vars['navChannels']): ?>
<?php $_from = $this->_tpl_vars['navChannels']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['n']):
?>
	<li><a href="<?php echo $this->_tpl_vars['n']['link']; ?>
" title="<?php echo $this->_tpl_vars['n']['name']; ?>
"><?php echo $this->_tpl_vars['n']['name']; ?>
</a></li>
	<?php endforeach; endif; unset($_from); ?>
	<?php endif; ?>
</ul></div>