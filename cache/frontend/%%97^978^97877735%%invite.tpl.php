<?php /* Smarty version 2.6.20, created on 2013-09-23 00:14:45
         compiled from invite.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 't', 'invite.tpl', 14, false),)), $this); ?>
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
            <div class="btitle"><h2><?php echo smarty_function_t(array('c' => 'invite.title'), $this);?>
</h2></div>
            <div class="bexpl">
                <strong><?php echo smarty_function_t(array('c' => 'invite.expl'), $this);?>
</strong>
                <div id="simple_form">
                    <form name="inviteFriendsForm" id="inviteFriendsForm" method="post" action="<?php echo $this->_tpl_vars['relative']; ?>
/invite">
                    <div class="separator">
                        <label for="friend_1"><?php echo smarty_function_t(array('c' => 'global.friend'), $this);?>
 <?php echo smarty_function_t(array('c' => 'global.one'), $this);?>
:</label>
                        <input name="friend_1" type="text" value="<?php echo $this->_tpl_vars['emails'][0]; ?>
" id="friend_1" class="large" />
                    </div>
                    <div class="separator">
                        <label for="friend_2"><?php echo smarty_function_t(array('c' => 'global.friend'), $this);?>
 <?php echo smarty_function_t(array('c' => 'global.two'), $this);?>
:</label>
                        <input name="friend_2" type="text" value="<?php echo $this->_tpl_vars['emails'][1]; ?>
" id="friend_2" class="large" />
                    </div>
                    <div class="separator">
                        <label for="friend_3"><?php echo smarty_function_t(array('c' => 'global.friend'), $this);?>
 <?php echo smarty_function_t(array('c' => 'global.three'), $this);?>
:</label>
                        <input name="friend_3" type="text" value="<?php echo $this->_tpl_vars['emails'][2]; ?>
" id="friend_3" class="large" />
                    </div>
                    <div class="separator">
                        <label for="friend_4"><?php echo smarty_function_t(array('c' => 'global.friend'), $this);?>
 <?php echo smarty_function_t(array('c' => 'global.four'), $this);?>
:</label>
                        <input name="friend_4" type="text" value="<?php echo $this->_tpl_vars['emails'][3]; ?>
" id="friend_4" class="large" />
                    </div>
                    <div class="separator">
                        <label for="friend_5"><?php echo smarty_function_t(array('c' => 'global.friend'), $this);?>
 <?php echo smarty_function_t(array('c' => 'global.five'), $this);?>
:</label>
                        <input name="friend_5" type="text" value="<?php echo $this->_tpl_vars['emails'][4]; ?>
" id="friend_5" class="large" />
                    </div>
                    <div class="separator">
                        <label for="invite_name"><?php echo smarty_function_t(array('c' => 'global.name'), $this);?>
:</label>
                        <input name="name" type="text" value="<?php echo $this->_tpl_vars['invite']['name']; ?>
" id="invite_name" class="large" />
                    </div>
                    <div class="separator">
                        <label for="invite_friends_message"><?php echo smarty_function_t(array('c' => 'global.message'), $this);?>
:</label>
                        <textarea name="message" id="invite_friends_message" rows="5" cols="40"><?php echo $this->_tpl_vars['invite']['message']; ?>
</textarea>
                    </div>
                    <br />
                    <div class="separator">
                        <label for="invite_verification"><?php echo smarty_function_t(array('c' => 'global.verification'), $this);?>
:</label>
                        <input name="verification" type="text" value="" id="invite_verification" />
                        <span class="font-9"><?php echo smarty_function_t(array('c' => 'global.verif_expl'), $this);?>
</span><br />
                        <img src="<?php echo $this->_tpl_vars['relative']; ?>
/captcha" id="captcha_image" alt="Are you human?" /><br />
                        <span class="reload_contact"><a href="#reload_captcha" id="captcha_reload"><?php echo smarty_function_t(array('c' => 'global.verif_reload'), $this);?>
</a></span>
                    </div>
                    <br />
                    <div class="separator">
                        <label for="invite_submit">&nbsp;</label>
                        <input name="submit_invite" type="submit" value=" <?php echo smarty_function_t(array('c' => 'invite.send'), $this);?>
 " id="invite_submit" class="button" />
                    </div>
                    </form>
                </div>
            </div>
            <br />
        </div>
    </div>
    <div class="right span-350">
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