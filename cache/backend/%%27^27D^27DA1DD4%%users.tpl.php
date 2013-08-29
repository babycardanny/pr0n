<?php /* Smarty version 2.6.20, created on 2013-08-29 02:21:58
         compiled from users.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'users.tpl', 101, false),array('modifier', 'date_format', 'users.tpl', 110, false),array('insert', 'video_count', 'users.tpl', 114, false),)), $this); ?>
     <div id="rightcontent">
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "errmsg.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <div id="searchForm">
            <form name="search_videos" method="POST" action="users.php?m=<?php echo $this->_tpl_vars['module']; ?>
">
            <table width="100%" cellpadding="0" cellspacing="5" border="0">
            <tr>
                <td align="right">Username:</td><td><input type="text" name="username" value="<?php echo $this->_tpl_vars['option']['username']; ?>
"></td>
                <td align="right">Email:</td><td><input type="text" name="email" value="<?php echo $this->_tpl_vars['option']['email']; ?>
"></td>
                <td align="right">Country:</td><td><input type="text" name="country" value="<?php echo $this->_tpl_vars['option']['country']; ?>
"></td>
            </tr>
            <tr>
                <td align="right">Full Name:</td><td><input type="text" name="name" value="<?php echo $this->_tpl_vars['option']['name']; ?>
"></td>
                <td align="right">Gender:</td>
                <td>
                    <select name="gender">
                    <option value=""<?php if ($this->_tpl_vars['option']['gender'] == ''): ?> selected="selected"<?php endif; ?>>------</option>
                    <option value="male"<?php if ($this->_tpl_vars['option']['gender'] == 'male'): ?> selected="selected"<?php endif; ?>>Male</option>
                    <option value="female"<?php if ($this->_tpl_vars['option']['gender'] == 'female'): ?> selected="selected"<?php endif; ?>>Female</option>
                    </select>
                </td>
                <td align="right">Relation:</td>
                <td>
                    <select name="relation">
                    <option value=""<?php if ($this->_tpl_vars['option']['relation'] == ''): ?> selected="selected"<?php endif; ?>>--------</option>
                    <option value="Single"<?php if ($this->_tpl_vars['option']['relation'] == 'Single'): ?> selected="selected"<?php endif; ?>>Single</option>
                    <option value="Taken"<?php if ($this->_tpl_vars['option']['relation'] == 'Taken'): ?> selected="selected"<?php endif; ?>>Taken</option>
                    <option value="Open"<?php if ($this->_tpl_vars['option']['relation'] == 'Open'): ?> selected="selected"<?php endif; ?>>Open</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td align="right">Sort</td>
                <td>
                    <select name="sort">
                    <option value="UID"<?php if ($this->_tpl_vars['option']['sort'] == 'UID'): ?> selected="selected"<?php endif; ?>>UID</option>
                    <option value="username"<?php if ($this->_tpl_vars['option']['sort'] == 'username'): ?> selected="selected"<?php endif; ?>>Username</option>
                    <option value="email"<?php if ($this->_tpl_vars['option']['sort'] == 'email'): ?> selected="selected"<?php endif; ?>>Email</option>
                    <option value="addtime"<?php if ($this->_tpl_vars['option']['sort'] == 'addtime'): ?> selected="selected"<?php endif; ?>>Joined</option>
                    <option value="logintime"<?php if ($this->_tpl_vars['option']['sort'] == 'logintime'): ?> selected="selected"<?php endif; ?>>Last Login</option>
                    <option value="country"<?php if ($this->_tpl_vars['option']['sort'] == 'country'): ?> selected="selected"<?php endif; ?>>Country</option>
                    <option value="gender"<?php if ($this->_tpl_vars['option']['sort'] == 'gender'): ?> selected="selected"<?php endif; ?>>Gender</option>
                    <option value="video_viewed"<?php if ($this->_tpl_vars['option']['sort'] == 'video_viewed'): ?> selected="selected"<?php endif; ?>>Videos Viewed</option>
                    <option value="profile_viewed"<?php if ($this->_tpl_vars['option']['sort'] == 'profile_viewed'): ?> selected="selected"<?php endif; ?>>Profile Viewed</option>
                    <option value="watched_video"<?php if ($this->_tpl_vars['option']['sort'] == 'watched_video'): ?> selected="selected"<?php endif; ?>>Watched Videos</option>
                    </select>
                </td>
                <td align="right">Order</td>
                <td>
                    <select name="order">
                    <option value="DESC"<?php if ($this->_tpl_vars['option']['order'] == 'DESC'): ?> selected="selected"<?php endif; ?>>DESC</option>
                    <option value="ASC"<?php if ($this->_tpl_vars['option']['order'] == 'ASC'): ?> selected="selected"<?php endif; ?>>ASC</option>
                    </select>
                </td>
                <td align="right">Display</td>
                <td>
                    <select name="display">
                    <option value="10"<?php if ($this->_tpl_vars['option']['display'] == '10'): ?> selected="selected"<?php endif; ?>>10</option>
                    <option value="20"<?php if ($this->_tpl_vars['option']['display'] == '20'): ?> selected="selected"<?php endif; ?>>20</option>
                    <option value="30"<?php if ($this->_tpl_vars['option']['display'] == '30'): ?> selected="selected"<?php endif; ?>>30</option>
                    <option value="40"<?php if ($this->_tpl_vars['option']['display'] == '40'): ?> selected="selected"<?php endif; ?>>40</option>
                    <option value="50"<?php if ($this->_tpl_vars['option']['display'] == '50'): ?> selected="selected"<?php endif; ?>>50</option>
                    <option value="100"<?php if ($this->_tpl_vars['option']['display'] == '100'): ?> selected="selected"<?php endif; ?>>100</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="6" align="center" valign="bottom">
                    <input type="submit" name="search_videos" value=" -- Search -- " class="button">
                    <input type="reset" name="reset_search" value=" -- Clear -- " class="button">
                </td>
            </tr>
            </table>
            </form>
        </div>
        <?php if ($this->_tpl_vars['total_users'] >= 1): ?>
        <form name="user_select" method="post" id="user_select" action="">
        <div id="actions">
            <input type="submit" name="delete_selected_users" value="Delete" class="action_button" onClick="javascript:return confirm('Are you sure you want to delete all selected users?');">
            <input type="submit" name="suspend_selected_users" value="Suspend" class="action_button" onClick="javascript:return confirm('Are you sure you want to suspend all selected users?');">
            <input type="submit" name="approve_selected_users" value="Approve" class="action_button" onClick="javascript:return confirm('Are you sure you want to approve all selected users?');">
        </div>
        <div id="paging">
            <div class="pagingnav"><?php echo $this->_tpl_vars['paging']; ?>
</div>
        </div>
        <div class="pagingnav_clear"></div>
        <?php endif; ?>                                                            
        <div id="right">
            <table width="100%" cellspacing="1" cellpadding="3" border="0">
            <tr>
                <td align="center"><b><input name="check_all_users" type="checkbox" id="user_check_all"></b></td>
                <td align="center"><b>Id</b></td>
                <td align="center"><b>Username</b></td>
                <td align="center"><b>Country</b></td>
                <td align="center"><b>Join/Last Login Date</b></td>
                <td align="center"><b>Videos</b></td>
                <td align="center"><b>Status</b></td>
                <td align="center"><b>Actions</b></td>
            </tr>
            <?php if ($this->_tpl_vars['users']): ?>
            <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['users']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
            <tr bgcolor="<?php echo smarty_function_cycle(array('values' => "#F8F8F8,#F2F2F2"), $this);?>
">
                <td align="center" width="2%"><input name="user_id_checkbox_<?php echo $this->_tpl_vars['users'][$this->_sections['i']['index']]['UID']; ?>
" id="user_checkbox_<?php echo $this->_tpl_vars['users'][$this->_sections['i']['index']]['UID']; ?>
" type="checkbox"></td>
                <td align="center"><?php echo $this->_tpl_vars['users'][$this->_sections['i']['index']]['UID']; ?>
</td>
                <td align="center">
                    <a href="users.php?m=view&UID=<?php echo $this->_tpl_vars['users'][$this->_sections['i']['index']]['UID']; ?>
"><?php echo $this->_tpl_vars['users'][$this->_sections['i']['index']]['username']; ?>
<br><br>
                    <img src="../media/users/<?php if ($this->_tpl_vars['users'][$this->_sections['i']['index']]['photo'] == ''): ?>nopic-<?php echo $this->_tpl_vars['users'][$this->_sections['i']['index']]['gender']; ?>
.gif<?php else: ?><?php echo $this->_tpl_vars['users'][$this->_sections['i']['index']]['photo']; ?>
<?php endif; ?>" width="70"></a>
                </td>
                <td align="center"><?php echo $this->_tpl_vars['users'][$this->_sections['i']['index']]['country']; ?>
</td>
                <td align="center">
                    <?php echo ((is_array($_tmp=$this->_tpl_vars['users'][$this->_sections['i']['index']]['addtime'])) ? $this->_run_mod_handler('date_format', true, $_tmp) : smarty_modifier_date_format($_tmp)); ?>
<br>
                    <?php echo ((is_array($_tmp=$this->_tpl_vars['users'][$this->_sections['i']['index']]['logintime'])) ? $this->_run_mod_handler('date_format', true, $_tmp) : smarty_modifier_date_format($_tmp)); ?>

                </td>
                <td align="center">
                <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'video_count', 'assign' => 'vdo', 'UID' => $this->_tpl_vars['users'][$this->_sections['i']['index']]['UID'])), $this); ?>

                Owns: <a href="videos.php?m=all&UID=<?php echo $this->_tpl_vars['users'][$this->_sections['i']['index']]['UID']; ?>
"><?php echo $this->_tpl_vars['vdo']; ?>
</a><br>
                Viewed: <?php echo $this->_tpl_vars['users'][$this->_sections['i']['index']]['watched_video']; ?>
<br>
                Views: <?php echo $this->_tpl_vars['users'][$this->_sections['i']['index']]['video_viewed']; ?>
<br>
                </td>
                <td align="center"><?php echo $this->_tpl_vars['users'][$this->_sections['i']['index']]['account_status']; ?>
</td>
                <td align="center">
                    <a href="users.php?m=view&UID=<?php echo $this->_tpl_vars['users'][$this->_sections['i']['index']]['UID']; ?>
">View</a><br>
                    <a href="users.php?m=edit&UID=<?php echo $this->_tpl_vars['users'][$this->_sections['i']['index']]['UID']; ?>
">Edit</a><br>
                    <a href="users.php?m=<?php echo $this->_tpl_vars['module']; ?>
&a=delete&UID=<?php echo $this->_tpl_vars['users'][$this->_sections['i']['index']]['UID']; ?>
" onClick="javascript:return confirm('Are you sure you want to delete this user?');">Delete</a><br>
                    <?php if ($this->_tpl_vars['users'][$this->_sections['i']['index']]['account_status'] == 'Active'): ?>
                    <a href="users.php?m=<?php echo $this->_tpl_vars['module']; ?>
&a=suspend&UID=<?php echo $this->_tpl_vars['users'][$this->_sections['i']['index']]['UID']; ?>
" onClick="javascript:return confirm('Are you sure you want to suspend this user?');">Suspend</a>
                    <?php else: ?>
                    <a href="users.php?m=<?php echo $this->_tpl_vars['module']; ?>
&a=activate&UID=<?php echo $this->_tpl_vars['users'][$this->_sections['i']['index']]['UID']; ?>
" onClick="javascript:return confirm('Are you sure you want to activate this user?');">Activate</a>
                    <?php endif; ?>
                    <br>
                    <a href="users.php?m=mail&email=<?php echo $this->_tpl_vars['users'][$this->_sections['i']['index']]['email']; ?>
&username=<?php echo $this->_tpl_vars['users'][$this->_sections['i']['index']]['username']; ?>
">Email</a>
                </td>
            </tr>
            <?php endfor; endif; ?>
            <?php else: ?>
            <tr>
                <td colspan="8" align="center"><div class="missing">YOUR SEARCH DID NOT RETURN ANY RESULTS</div></td>
            </tr>
            <?php endif; ?>
            </table>
            </form>
        </div>
        <?php if ($this->_tpl_vars['total_users'] >= 1): ?>
        <div id="paging">
            <div class="pagingnav"><?php echo $this->_tpl_vars['paging']; ?>
</div>
        </div>
        <div class="pagingnav_clear"></div>
        <?php endif; ?>                                                            
     </div>