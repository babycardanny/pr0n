<?php /* Smarty version 2.6.20, created on 2013-08-29 02:01:29
         compiled from enter.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'enter.tpl', 4, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><?php echo ((is_array($_tmp=$this->_tpl_vars['site_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<meta name="description" content="<?php echo ((is_array($_tmp=$this->_tpl_vars['meta_description'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" />
	<meta name="keywords" content="<?php echo ((is_array($_tmp=$this->_tpl_vars['meta_keywords'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" />
	<meta name="revisit-after" content="1" />
	<link rel="shortcut icon" href="<?php echo $this->_tpl_vars['relative']; ?>
/favicon.ico" />
<?php echo '
<style type="text/css">
	body { background-color: #070707; margin: 0 20px 0 20px; }
	.align-center {	text-align: center; }
	#container { width: 650px; margin-left: auto; margin-right: auto; }
	#logo {	margin: 100px 0 30px 0; }
	#logo img { border: none;}
	#warning { font: normal 26px "Lucida Sans Unicode", Arial; color: #999; letter-spacing: -1px; }
	#warning2 {	margin: 20px 0 0 0;	font: normal 16px "Lucida Sans Unicode", Arial;	color: #555; }
	#enter { float: left; margin: 50px 0 0 150px; }
	#leave { float: right; margin: 50px 150px 0 0; }
	#enter a, #leave a { display: block; width: 100px; height: 34px; background:transparent url('; ?>
<?php echo $this->_tpl_vars['baseurl']; ?>
<?php echo '/templates/frontend/default/images/enter_btn.png) no-repeat; font: normal 19px/30px "Lucida Sans Unicode", Arial; color: #ccc; text-decoration:none; text-align: center; }
</style>
'; ?>

</head>
<body>
<div id="container">
<div id="logo" class="align-center">
	<a href="/"><img src="<?php echo $this->_tpl_vars['baseurl']; ?>
/templates/frontend/default/images/logo.png" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['site_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
 Logo!" /></a>
</div>
<div id="warning" class="align-center">
	WARNING: This website contains explicit adult material.
</div>
<div id="warning2" class="align-center">
	You may only enter this Website if you are at least
	18 years of age, or at least the age of majority in the jurisdiction
	where you reside or from which you access this Website.  If you do not
	meet these requirements, then you do not have permission to use the
	Website.
</div>
<div id="enter">
	<a href="<?php echo $this->_tpl_vars['baseurl']; ?>
">Enter</a>
</div>
<div id="leave">
	<a href="http://www.google.com">Leave</a>
</div>
</body>
</html>