<?php /* Smarty version 2.6.20, created on 2013-08-29 02:04:16
         compiled from login.tpl */ ?>
    <div id="login_errors" align="center">
		<?php if ($this->_tpl_vars['err']): ?><div id="errorbox"><?php echo $this->_tpl_vars['err']; ?>
</div><?php endif; ?>
		<?php if ($this->_tpl_vars['msg']): ?><div id="messagebox"><?php echo $this->_tpl_vars['msg']; ?>
</div><?php endif; ?>
	</div>

    <div id="login" align="center">
        <div id="simpleForm">
        <form name="logig" method="POST" action="login.php">
        <label for="username">Username: </label>
        <input name="username" type="text" class="large"><br>
        <label for="password">Password: </label>
        <input name="password" type="password" class="large">

		<label></label>
        <input type="submit" name="submit_login" value="Login" class="button" style="margin-left: 10px; margin-top: 10px; margin-bottom: 5px;">
        <input type="submit" name="submit_forgot" value="Forgot Password" class="button">

        </form>
        </div>
    </div>
    </div>
</div>