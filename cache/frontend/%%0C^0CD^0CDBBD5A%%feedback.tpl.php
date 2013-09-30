<?php /* Smarty version 2.6.20, created on 2013-10-01 00:29:05
         compiled from feedback.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 't', 'feedback.tpl', 14, false),)), $this); ?>
<div id="content">
    <?php echo '
    <script type="text/javascript">
        $(document).ready(function(){
            $("#captcha_reload").click(function(event){
                event.preventDefault();
                $("#captcha_image").attr(\'src\', "'; ?>
<?php echo $this->_tpl_vars['relative']; ?>
<?php echo '/captcha" + \'/\' + Math.random());
            });
        });
    </script>
    '; ?>
                                                    
    <div class="left span-600">
        <div class="box">            
            <div class="btitle"><h2><?php echo smarty_function_t(array('c' => 'feedback.title'), $this);?>
</h2></div>
            <div class="bexpl">
				<?php echo smarty_function_t(array('c' => 'feedback.expl','s' => $this->_tpl_vars['site_name']), $this);?>

                <div id="simple_form">
                    <form name="contactUsForm" id="contactUsForm" method="post" action="<?php echo $this->_tpl_vars['relative']; ?>
/feedback">
                    <div class="separator">
                        <label for="contact_option"><?php echo smarty_function_t(array('c' => 'feedback.department'), $this);?>
:</label>
                        <select name="department" id="contact_option">
                        <option value="General"<?php if ($this->_tpl_vars['feedback']['department'] == 'General'): ?> selected="selected"<?php endif; ?>><?php echo smarty_function_t(array('c' => 'feedback.general'), $this);?>
</option>
                        <option value="Violations"<?php if ($this->_tpl_vars['feedback']['department'] == 'Violations'): ?> selected="selected"<?php endif; ?>><?php echo smarty_function_t(array('c' => 'feedback.violations'), $this);?>
</option>
                        <option value="Advertising"<?php if ($this->_tpl_vars['feedback']['department'] == 'Advertising'): ?> selected="selected"<?php endif; ?>><?php echo smarty_function_t(array('c' => 'feedback.advertising'), $this);?>
</option>
                        </select>
                    </div>
                    <div class="separator">
                        <label for="contact_email"><?php echo smarty_function_t(array('c' => 'global.email'), $this);?>
:</label>
                        <input name="email" type="text" value="<?php echo $this->_tpl_vars['feedback']['email']; ?>
" maxlength="100" id="contact_email" class="large" />
                    </div>
                    <div class="separator">
                        <label for="contact_name"><?php echo smarty_function_t(array('c' => 'global.name'), $this);?>
:</label>
                        <input name="name" type="text" value="<?php echo $this->_tpl_vars['feedback']['name']; ?>
" maxlength="100" id="contact_name" class="large" />
                    </div>
                    <div class="separator">
                        <label for="contact_message"><?php echo smarty_function_t(array('c' => 'global.message'), $this);?>
:</label>
                        <textarea name="message" id="contact_message" rows="5" cols="40"><?php echo $this->_tpl_vars['feedback']['message']; ?>
</textarea>
                    </div>
                    <br />
                    <div class="separator">
                        <label for="feedback_verification"><?php echo smarty_function_t(array('c' => 'global.verification'), $this);?>
:</label>
                        <input name="verification" type="text" value="" id="feedback_verification" />
                        <span class="font-9"><?php echo smarty_function_t(array('c' => 'global.verif_expl'), $this);?>
</span><br />
                        <img src="<?php echo $this->_tpl_vars['relative']; ?>
/captcha" id="captcha_image" alt="Are you human?" /><br />
                        <span class="reload_contact"><a href="#reload_captcha" id="captcha_reload"><?php echo smarty_function_t(array('c' => 'global.verif_reload'), $this);?>
</a></span>
                    </div>
                    <br />
                    <div class="separator">
                        <label for="contact_submit">&nbsp;</label>
                        <input name="submit_feedback" type="submit" value=" <?php echo smarty_function_t(array('c' => 'global.send'), $this);?>
 " id="contact_submit" class="button" />
                    </div>
                    </form>
                </div>
            </div>
            <br />
        </div>
    </div>
    <div class="right span-350">
        <div class="box">           
            <div class="btitle"><h2><?php echo smarty_function_t(array('c' => 'faq.check'), $this);?>
</h2></div>
            <div class="binfo"><?php echo smarty_function_t(array('c' => 'faq.expl','s' => $this->_tpl_vars['relative']), $this);?>
</div>
            <br />
			<div class="clear"></div>
        </div>
        <div class="box">            
            <div class="btitle"><h2><?php echo smarty_function_t(array('c' => 'global.what_is','s' => $this->_tpl_vars['site_name']), $this);?>
</h2></div>
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'static/whatis.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        </div>
    </div>
    <div class="clear"></div>
</div>