<?php /* Smarty version 2.6.20, created on 2013-08-29 02:18:20
         compiled from videos.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'videos.tpl', 101, false),array('modifier', 'escape', 'videos.tpl', 105, false),array('modifier', 'string_format', 'videos.tpl', 120, false),array('modifier', 'date_format', 'videos.tpl', 122, false),)), $this); ?>
     <div id="rightcontent">
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "errmsg.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <div id="searchForm">
            <form name="search_videos" method="POST" action="videos.php?m=<?php echo $this->_tpl_vars['module']; ?>
">
            <table width="100%" cellpadding="0" cellspacing="5" border="0">
            <tr>
                <td align="right">Username:</td><td><input type="text" name="username" value="<?php echo $this->_tpl_vars['option']['username']; ?>
"></td>
                <td align="right">Title:</td><td><input type="text" name="title" value="<?php echo $this->_tpl_vars['option']['title']; ?>
"></td>
                <td align="right">Description:</td><td><input type="text" name="description" value="<?php echo $this->_tpl_vars['option']['description']; ?>
"></td>
            </tr>
            <tr>
                <td align="right">Keyword:</td><td><input type="text" name="keyword" value="<?php echo $this->_tpl_vars['option']['keyword']; ?>
"></td>
                <td align="right">Channel:</td>
                <td>
                    <select name="channel">
                    <option value="">Select Channel</option>
                    <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['channels']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                    <option value="<?php echo $this->_tpl_vars['channels'][$this->_sections['i']['index']]['CHID']; ?>
"<?php if ($this->_tpl_vars['channels'][$this->_sections['i']['index']]['CHID'] == $this->_tpl_vars['option']['channel']): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['channels'][$this->_sections['i']['index']]['name']; ?>
</option>
                    <?php endfor; endif; ?>
                    </select>                                                                                            
                </td>
                <td align="right">Status:</td>
                <td>
                    <select name="active">
                    <option value="">---</option>
                    <option value="1"<?php if ($this->_tpl_vars['option']['active'] == '1'): ?> selected="selected"<?php endif; ?>>Active</option>
                    <option value="0"<?php if ($this->_tpl_vars['option']['active'] == '0'): ?> selected="selected"<?php endif; ?>>Suspended</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td align="right">Sort</td>
                <td>
                    <select name="sort">
                    <option value="v.VID"<?php if ($this->_tpl_vars['option']['sort'] == 'v.VID'): ?> selected="selected"<?php endif; ?>>VID</option>
                    <option value="v.title"<?php if ($this->_tpl_vars['option']['sort'] == 'v.title'): ?> selected="selected"<?php endif; ?>>Title</option>
                    <option value="v.type"<?php if ($this->_tpl_vars['option']['sort'] == 'v.type'): ?> selected="selected"<?php endif; ?>>Type</option>
                    <option value="v.duration"<?php if ($this->_tpl_vars['option']['sort'] == 'v.duration'): ?> selected="selected"<?php endif; ?>>Duration</option>
                    <option value="v.addate"<?php if ($this->_tpl_vars['option']['sort'] == 'v.addate'): ?> selected="selected"<?php endif; ?>>Date</option>
                    <option value="v.viewnumber"<?php if ($this->_tpl_vars['option']['sort'] == 'v.viewnumber'): ?> selected="selected"<?php endif; ?>>Views</option>
                    <option value="v.fav_num"<?php if ($this->_tpl_vars['option']['sort'] == 'v.fav_num'): ?> selected="selected"<?php endif; ?>>Favorites</option>
                    <option value="v.com_num"<?php if ($this->_tpl_vars['option']['sort'] == 'v.com_num'): ?> selected="selected"<?php endif; ?>>Comments</option>
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
        <?php if ($this->_tpl_vars['total_videos'] >= 1): ?>
        <form name="video_select" method="post" id="video_select" action="">
        <div id="actions">
            <input type="submit" name="delete_selected_videos" value="Delete" class="action_button" onClick="javascript:return confirm('Are you sure you want to delete all selected videos?');">
            <input type="submit" name="suspend_selected_videos" value="Suspend" class="action_button" onClick="javascript:return confirm('Are you sure you want to suspend all selected videos?');">
            <input type="submit" name="approve_selected_videos" value="Approve" class="action_button" onClick="javascript:return confirm('Are you sure you want to approve all selected videos?');">
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
                <td align="center"><b><input name="check_all_videos" type="checkbox" id="video_check_all"></b></td>
                <td align="center"><b>Id</b></td>
                <td align="center"><b>Title</b></td>
                <td align="center"><b>User</b></td>
                <td align="center"><b>Active</b></td>
                <td align="center"><b>Type</b></td>
                <td align="center"><b>Duration</b></td>
                <td align="center"><b>Featured</b></td>
                <td align="center"><b>Date</b></td>
                <td align="center"><b>Actions</b></td>
            </tr>
            <?php if ($this->_tpl_vars['videos']): ?>
            <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['videos']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                <td align="center" width="2%"><input name="video_id_checkbox_<?php echo $this->_tpl_vars['videos'][$this->_sections['i']['index']]['VID']; ?>
" id="video_checkbox_<?php echo $this->_tpl_vars['videos'][$this->_sections['i']['index']]['VID']; ?>
" type="checkbox"></td>
                <td align="center"><?php echo $this->_tpl_vars['videos'][$this->_sections['i']['index']]['VID']; ?>
</td>
                <td align="center"><br>
                    <a href="videos.php?m=view&VID=<?php echo $this->_tpl_vars['videos'][$this->_sections['i']['index']]['VID']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['videos'][$this->_sections['i']['index']]['title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
<br><br>
                    <img src="<?php echo $this->_tpl_vars['tmburl']; ?>
/<?php echo $this->_tpl_vars['videos'][$this->_sections['i']['index']]['VID']; ?>
/<?php echo $this->_tpl_vars['videos'][$this->_sections['i']['index']]['thumb']; ?>
.jpg"></a><br><br>
                </td>
                <td align="center">
                    <a href="users.php?m=view&UID=<?php echo $this->_tpl_vars['videos'][$this->_sections['i']['index']]['UID']; ?>
"><?php echo $this->_tpl_vars['videos'][$this->_sections['i']['index']]['username']; ?>
</a>
                </td>
                <td align="center">
                    <b><?php if ($this->_tpl_vars['videos'][$this->_sections['i']['index']]['active'] == 1): ?>yes<?php else: ?>no<?php endif; ?></b><br>
                    Views: <?php echo $this->_tpl_vars['videos'][$this->_sections['i']['index']]['viewnumber']; ?>
<br>
                    Favorites: <?php echo $this->_tpl_vars['videos'][$this->_sections['i']['index']]['fav_num']; ?>
<br>
                    Comments: <a href="videos.php?m=comments&VID=<?php echo $this->_tpl_vars['videos'][$this->_sections['i']['index']]['VID']; ?>
"><?php echo $this->_tpl_vars['videos'][$this->_sections['i']['index']]['com_num']; ?>
</a><br><br>
                    HD: <?php if ($this->_tpl_vars['videos'][$this->_sections['i']['index']]['hd'] == 1): ?><font color=#009900>Yes</font><?php else: ?><font color="#DB0000">No</font><?php endif; ?><br>
                    Mobile: <?php if ($this->_tpl_vars['videos'][$this->_sections['i']['index']]['iphone'] == 1): ?><font color=#009900>Yes</font><?php else: ?><font color="#DB0000">No</font><?php endif; ?><br>
                </td>
                <td align="center"><?php echo $this->_tpl_vars['videos'][$this->_sections['i']['index']]['type']; ?>
</td>
                <td align="center"><?php echo ((is_array($_tmp=$this->_tpl_vars['videos'][$this->_sections['i']['index']]['duration'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")); ?>
</td>
                <td align="center"><b><?php echo $this->_tpl_vars['videos'][$this->_sections['i']['index']]['featured']; ?>
</b></td>
                <td align="center"><?php echo ((is_array($_tmp=$this->_tpl_vars['videos'][$this->_sections['i']['index']]['adddate'])) ? $this->_run_mod_handler('date_format', true, $_tmp) : smarty_modifier_date_format($_tmp)); ?>
</td>
                <td align="center">
                    <a href="videos.php?m=view&VID=<?php echo $this->_tpl_vars['videos'][$this->_sections['i']['index']]['VID']; ?>
">View</a><br>
                    <a href="videos.php?m=edit&VID=<?php echo $this->_tpl_vars['videos'][$this->_sections['i']['index']]['VID']; ?>
">Edit</a><br>
                    <a href="videos.php?m=<?php echo $this->_tpl_vars['module']; ?>
&a=delete&VID=<?php echo $this->_tpl_vars['videos'][$this->_sections['i']['index']]['VID']; ?>
" onClick="javascript:return confirm('Are you sure you want to delete this video?');">Delete</a><br>
                    <?php if ($this->_tpl_vars['approve'] == '1'): ?>
                    <?php if ($this->_tpl_vars['videos'][$this->_sections['i']['index']]['active'] == '1'): ?>
                    <a href="videos.php?m=<?php echo $this->_tpl_vars['module']; ?>
&a=suspend&VID=<?php echo $this->_tpl_vars['videos'][$this->_sections['i']['index']]['VID']; ?>
" onClick="javascript:return confirm('Are you sure you want to suspend this video?');">Suspend</a>
                    <?php else: ?>
                    <a href="videos.php?m=<?php echo $this->_tpl_vars['module']; ?>
&a=activate&VID=<?php echo $this->_tpl_vars['videos'][$this->_sections['i']['index']]['VID']; ?>
" onClick="javascript:return confirm('Are you sure you want to approve this video?');">Activate</a>
                    <?php endif; ?>
                    <br>
                    <?php endif; ?>
                    <?php if ($this->_tpl_vars['videos'][$this->_sections['i']['index']]['embed_code'] == ''): ?>
                    <a href="videos.php?m=<?php echo $this->_tpl_vars['module']; ?>
&a=regenthumbs&VID=<?php echo $this->_tpl_vars['videos'][$this->_sections['i']['index']]['VID']; ?>
" onClick="javascript:return confirm('Are you sure you want to regenerate thumbs for this video?');">Thumbs</a><br />
                    <a href="videos.php?m=<?php echo $this->_tpl_vars['module']; ?>
&a=duration&VID=<?php echo $this->_tpl_vars['videos'][$this->_sections['i']['index']]['VID']; ?>
" onClick="javascript:return confirm('Are you sure you want to regenerate duration for this video?');">Duration</a>
                    <?php endif; ?>
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
        <?php if ($this->_tpl_vars['total_videos'] >= 1): ?>
        <div id="paging">
            <div class="pagingnav"><?php echo $this->_tpl_vars['paging']; ?>
</div>
        </div>
        <?php endif; ?>
     </div>