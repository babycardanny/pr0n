<?php /* Smarty version 2.6.20, created on 2013-08-29 02:04:32
         compiled from index.tpl */ ?>
     <div id="rightcontent">
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "errmsg.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <div id="right">
        <div align="center">
        <h2>System Settings</h2>
        <div id="simpleForm">
        <form name="system_settings" method="POST" action="index.php?m=main">
        <fieldset>
        <legend>Site Settings</legend>
            <label for="site_name">Site Name: </label>
            <input type="text" name="site_name" value="<?php echo $this->_tpl_vars['site_name']; ?>
" class="large"><br>
            <label for="site_title">Site Title: </label>
            <input type="text" name="site_title" value="<?php echo $this->_tpl_vars['site_title']; ?>
" class="large"><br>
            <label for="meta_description">Meta Description: </label>
            <input type="text" name="meta_description" value="<?php echo $this->_tpl_vars['meta_description']; ?>
" class="large"><br>
            <label for="meta_keywords">Meta Keywords: </label>
            <input type="text" name="meta_keywords" value="<?php echo $this->_tpl_vars['meta_keywords']; ?>
" class="large"><br>
        </fieldset>
        <fieldset>
        <legend>Admin Settings</legend>
            <label for="admin_name">Admin Username: </label>
            <input type="text" name="admin_name" value="<?php echo $this->_tpl_vars['admin_name']; ?>
" class="large"><br>
            <label for="admin_pass">Admin Password: </label>
            <input type="password" name="admin_pass" value="<?php echo $this->_tpl_vars['admin_pass']; ?>
" class="large"><br>
            <label for="admin_email">Admin Email: </label>
            <input type="text" name="admin_email" value="<?php echo $this->_tpl_vars['admin_email']; ?>
" class="large"><br>
            <label for="noreply_email">Admin NoReply Email: </label>
            <input type="text" name="noreply_email" value="<?php echo $this->_tpl_vars['noreply_email']; ?>
" class="large"><br>            
        </fieldset>
		<fieldset>
		<legend>Template Settings</legend>
			<label for="template">Template: </label>
			<select name="template">
			<?php $_from = $this->_tpl_vars['templates']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
			<option value="<?php echo $this->_tpl_vars['k']; ?>
"<?php if ($this->_tpl_vars['k'] == $this->_tpl_vars['template']): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['v']; ?>
</option>
			<?php endforeach; endif; unset($_from); ?>
			</select><br />			
		</fieldset>
        <fieldset>
        <legend>Embed Settings</legend>
            <label for="video_embed">Embed Videos: </label>
            <select name="video_embed">
            <option value="1"<?php if ($this->_tpl_vars['video_embed'] == '1'): ?> selected="selected"<?php endif; ?>>Enabled</option>            
            <option value="0"<?php if ($this->_tpl_vars['video_embed'] == '0'): ?> selected="selected"<?php endif; ?>>Disabled</option>
            </select><br />
        </fieldset>
		<fieldset>
		<legend>Language Settings</legend>
			<label for="language">Language:</label>
			<select name="language">
			<?php $_from = $this->_tpl_vars['languages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['v']):
?>
			<option value="<?php echo $this->_tpl_vars['k']; ?>
"<?php if ($this->_tpl_vars['k'] == $this->_tpl_vars['language']): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['v']['name']; ?>
</option>
			<?php endforeach; endif; unset($_from); ?>
			</select><br />
			<label for="multi_language">Multi Language:</label>
			<select name="multi_language">
			<option value="0"<?php if ($this->_tpl_vars['multi_language'] == '0'): ?> selected="selected"<?php endif; ?>>Disabled</option>
			<option value="1"<?php if ($this->_tpl_vars['multi_language'] == '1'): ?> selected="selected"<?php endif; ?>>Enabled</option>
			</select>
		</fieldset>
		<fieldset>
		<legend>Enter Page Settings</legend>
			<label for="splash">Enter page:</label>
			<select name="splash">
			<option value="0"<?php if ($this->_tpl_vars['splash'] == '0'): ?> selected="selected"<?php endif; ?>>Disabled</option>
			<option value="1"<?php if ($this->_tpl_vars['splash'] == '1'): ?> selected="selected"<?php endif; ?>>Enabled</option>
			</select>
			<br /><br /><small>Please note that if the Enter Page is Enabled, search engine spiders won't be able to index your website.</small>
		</fieldset>
        <fieldset>
        <legend>Advertising Settings</legend>
            <label for="ads">Ads: </label>
            <select name="ads">
            <option value="1"<?php if ($this->_tpl_vars['ads'] == '1'): ?> selected="selected"<?php endif; ?>>Enabled</option>
            <option value="0"<?php if ($this->_tpl_vars['ads'] == '0'): ?> selected="selected"<?php endif; ?>>Disabled</option>
            </select><br />
        </fieldset>
        <fieldset>
        <legend>System Settings</legend>
            <label for="gzip_encoding">Gzip Encoding: </label>
            <select name="gzip_encoding">
            <option value="1"<?php if ($this->_tpl_vars['gzip_encoding'] == '1'): ?> selected="selected"<?php endif; ?>>Yes</option>
            <option value="0"<?php if ($this->_tpl_vars['gzip_encoding'] == '0'): ?> selected="selected"<?php endif; ?>>No</option>
            </select><small>Please make sure that your server supports this.</small><br>
            <label for="captcha">Signup Captcha: </label>
            <select name="captcha">
            <option value="1"<?php if ($this->_tpl_vars['captcha'] == '1'): ?> selected="selected"<?php endif; ?>>Yes</option>
            <option value="0"<?php if ($this->_tpl_vars['captcha'] == '0'): ?> selected="selected"<?php endif; ?>>No</option>
            </select><br>
            <label for="downloads">Videos Downloads: </label>
            <select name="downloads">
            <option value="1"<?php if ($this->_tpl_vars['downloads'] == '1'): ?> selected="selected"<?php endif; ?>>Yes</option>
            <option value="0"<?php if ($this->_tpl_vars['downloads'] == '0'): ?> selected="selected"<?php endif; ?>>No</option>
            </select><br>
            <label for="del_original_video">Delete Original Video: </label>
            <select name="del_original_video">
            <option value="1"<?php if ($this->_tpl_vars['del_original_video'] == '1'): ?> selected="selected"<?php endif; ?>>Yes</option>
            <option value="0"<?php if ($this->_tpl_vars['del_original_video'] == '0'): ?> selected="selected"<?php endif; ?>>No</option>
            </select><br>
            <label for="approve">Approve Videos: </label>
            <select name="approve">
            <option value="1"<?php if ($this->_tpl_vars['approve'] == '1'): ?> selected="selected"<?php endif; ?>>Yes</option>
            <option value="0"<?php if ($this->_tpl_vars['approve'] == '0'): ?> selected="selected"<?php endif; ?>>No</option>
            </select><br>
            <label for="approve_photos">Approve Photos: </label>
            <select name="approve_photos">
            <option value="1"<?php if ($this->_tpl_vars['approve_photos'] == '1'): ?> selected="selected"<?php endif; ?>>Yes</option>
            <option value="0"<?php if ($this->_tpl_vars['approve_photos'] == '0'): ?> selected="selected"<?php endif; ?>>No</option>
            </select><br>
            <label for="approve_games">Approve Games: </label>
            <select name="approve_games">
            <option value="1"<?php if ($this->_tpl_vars['approve_games'] == '1'): ?> selected="selected"<?php endif; ?>>Yes</option>
            <option value="0"<?php if ($this->_tpl_vars['approve_games'] == '0'): ?> selected="selected"<?php endif; ?>>No</option>
            </select><br>
            <label for="approve_blogs">Approve Blogs: </label>
            <select name="approve_blogs">
            <option value="1"<?php if ($this->_tpl_vars['approve_blogs'] == '1'): ?> selected="selected"<?php endif; ?>>Yes</option>
            <option value="0"<?php if ($this->_tpl_vars['approve_blogs'] == '0'): ?> selected="selected"<?php endif; ?>>No</option>
            </select><br>
        </fieldset>
        <fieldset>
        <legend>Paging Settings</legend>
            <label for="videos_per_page">Videos Per Page: </label>
            <input type="text" name="videos_per_page" value="<?php echo $this->_tpl_vars['videos_per_page']; ?>
" class="small"><br>
            <label for="albums_per_page">Albums Per Page: </label>
            <input type="text" name="albums_per_page" value="<?php echo $this->_tpl_vars['albums_per_page']; ?>
" class="small"><br>
            <label for="games_per_page">Games Per Page: </label>
            <input type="text" name="games_per_page" value="<?php echo $this->_tpl_vars['games_per_page']; ?>
" class="small"><br>
            <label for="blogs_per_page">Blogs Per Page: </label>
            <input type="text" name="blogs_per_page" value="<?php echo $this->_tpl_vars['blogs_per_page']; ?>
" class="small"><br>
            <label for="users_per_page">Users Per Page: </label>
            <input type="text" name="users_per_page" value="<?php echo $this->_tpl_vars['users_per_page']; ?>
" class="small"><br>
            <label for="watched_per_page">Watched Per Page: </label>
            <input type="text" name="watched_per_page" value="<?php echo $this->_tpl_vars['watched_per_page']; ?>
" class="small"><br>
            <label for="recent_per_page">Recent Per Page: </label>
            <input type="text" name="recent_per_page" value="<?php echo $this->_tpl_vars['recent_per_page']; ?>
" class="small"><br>        
        </fieldset>
		<fieldset>
		<legend>Multi Server System</legend>
			<label for="multi_server">Multi Server: </label>
			<select name="multi_server">
			<option value="0"<?php if ($this->_tpl_vars['multi_server'] == '0'): ?> selected="selected"<?php endif; ?>>Disabled</option>
			<option value="1"<?php if ($this->_tpl_vars['multi_server'] == '1'): ?> selected="selected"<?php endif; ?>>Enabled</option>
			</select>
		</fieldset>
        <div style="text-align: center;">
            <input type="submit" name="submit_settings" value="Update System Settings" class="button">
        </div>
        </form>
        </div>
        </div>
        </div>
     </div>