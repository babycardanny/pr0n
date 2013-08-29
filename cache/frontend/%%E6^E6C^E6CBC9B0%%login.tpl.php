<?php /* Smarty version 2.6.20, created on 2013-08-29 02:01:34
         compiled from C:%5Cxampp%5Chtdocs%5Cpr0n/plugins/index_login/login.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 't', 'C:\\xampp\\htdocs\\pr0n/plugins/index_login/login.tpl', 3, false),)), $this); ?>
<?php if (! isset ( $_SESSION['uid'] )): ?>
<div class="box">
	<div class="btitle"><h2><?php echo smarty_function_t(array('c' => 'signup.login'), $this);?>
</h2></div>
	<div class="bcontent">
		<form name="login_form" method="post" action="<?php echo $this->_tpl_vars['relative']; ?>
/login">
			<label for="login_username"><?php echo smarty_function_t(array('c' => 'global.username'), $this);?>
:</label><br />
			<input name="username" type="text" value="" id="login_username" class="login" /><br />
			<label for="login_password"><?php echo smarty_function_t(array('c' => "global.password"), $this);?>
:</label><br />
            <input name="password" type="password" value="" id="login_password" class="login" /><br /><br />
			<a class="smaller" href="<?php echo $this->_tpl_vars['relative']; ?>
/lost" rel="nofollow" id="lost_password"><?php echo smarty_function_t(array('c' => 'global.forgot'), $this);?>
</a><br />
			<a class="smaller" href="<?php echo $this->_tpl_vars['relative']; ?>
/confirm" rel="nofollow" id="confirmation_email"><?php echo smarty_function_t(array('c' => 'global.confirm'), $this);?>
</a><br /><br />			
			<input name="submit_login" type="submit" value="<?php echo smarty_function_t(array('c' => 'global.login'), $this);?>
" id="login_submit" class="button" />
		</form>
	</div>
</div>
<?php endif; ?>