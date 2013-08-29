<?php /* Smarty version 2.6.20, created on 2013-08-29 02:21:47
         compiled from notices_list.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'notices_list.tpl', 70, false),array('modifier', 'date_format', 'notices_list.tpl', 81, false),)), $this); ?>
     <div id="rightcontent">
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "errmsg.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <div id="searchForm">
            <form name="search_notices" method="POST" action="notices.php?m=list">
            <table width="100%" cellpadding="0" cellspacing="5" border="0">
            <tr>
                <td align="right">Username:</td><td><input type="text" name="username" value="<?php echo $this->_tpl_vars['option']['username']; ?>
"></td>
                <td align="right">Title:</td><td><input type="text" name="title" value="<?php echo $this->_tpl_vars['option']['title']; ?>
"></td>
                <td align="right">Content:</td><td><input type="text" name="content" value="<?php echo $this->_tpl_vars['option']['content']; ?>
"></td>
            </tr>
            <tr>
                <td align="right">Sort</td>
                <td>
                    <select name="sort">
                    <option value="NID"<?php if ($this->_tpl_vars['option']['sort'] == 'NID'): ?> selected="selected"<?php endif; ?>>NID</option>
                    <option value="UID"<?php if ($this->_tpl_vars['option']['sort'] == 'UID'): ?> selected="selected"<?php endif; ?>>UID</option>
                    <option value="title"<?php if ($this->_tpl_vars['option']['sort'] == 'title'): ?> selected="selected"<?php endif; ?>>Title</option>
                    <option value="total_comments"<?php if ($this->_tpl_vars['option']['sort'] == 'total_comments'): ?> selected="selected"<?php endif; ?>>Comments</option>
                    <option value="total_views"<?php if ($this->_tpl_vars['option']['sort'] == 'total_views'): ?> selected="selected"<?php endif; ?>>Views</option>
                    <option value="addtime"<?php if ($this->_tpl_vars['option']['sort'] == 'addtime'): ?> selected="selected"<?php endif; ?>>Date</option>
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
                    <input type="submit" name="search_notices" value=" -- Search -- " class="button">
                    <input type="reset" name="reset_search" value=" -- Clear -- " class="button">
                </td>
            </tr>
            </table>
            </form>
        </div>
        <?php if ($this->_tpl_vars['notices_total'] >= 1): ?>
        <div id="paging">
            <div class="pagingnav"><?php echo $this->_tpl_vars['paging']; ?>
</div>
        </div>
        <div class="pagingnav_clear"></div>
        <?php endif; ?>                                                            
        <div id="right">
            <table width="100%" cellspacing="1" cellpadding="3" border="0">
            <tr>
                <td align="center"><b>Id</b></td>
                <td align="center"><b>Title</b></td>
                <td align="center"><b>Username</b></td>
                <td align="center"><b>Info</b></td>
                <td align="center"><b>Date</b></td>
                <td align="center"><b>Status</b></td>
                <td align="center"><b>Actions</b></td>
            </tr>
            <?php if ($this->_tpl_vars['notices']): ?>
            <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['notices']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                <td align="center"><?php echo $this->_tpl_vars['notices'][$this->_sections['i']['index']]['NID']; ?>
</td>
                <td align="center"><?php echo $this->_tpl_vars['notices'][$this->_sections['i']['index']]['title']; ?>
</td>
                <td align="center">
                    <a href="users.php?m=view&UID=<?php echo $this->_tpl_vars['notices'][$this->_sections['i']['index']]['UID']; ?>
"><?php echo $this->_tpl_vars['notices'][$this->_sections['i']['index']]['username']; ?>
</a>
                </td>
                <td align="center">
                    Comments: <?php echo $this->_tpl_vars['notices'][$this->_sections['i']['index']]['total_comments']; ?>
<br>
                    View: <?php echo $this->_tpl_vars['notices'][$this->_sections['i']['index']]['total_views']; ?>
<br>
                </td>
                <td align="center">
                    <?php echo ((is_array($_tmp=$this->_tpl_vars['notices'][$this->_sections['i']['index']]['addtime'])) ? $this->_run_mod_handler('date_format', true, $_tmp) : smarty_modifier_date_format($_tmp)); ?>
<br>
                </td>
                <td align="center"><b><?php if ($this->_tpl_vars['notices'][$this->_sections['i']['index']]['status'] == '1'): ?>Active<?php else: ?>Suspended<?php endif; ?></b></td>
                <td align="center">
                    <a href="notices.php?m=view&NID=<?php echo $this->_tpl_vars['notices'][$this->_sections['i']['index']]['NID']; ?>
">View</a><br>
                    <a href="notices.php?m=edit&NID=<?php echo $this->_tpl_vars['notices'][$this->_sections['i']['index']]['NID']; ?>
">Edit</a><br>
                    <?php if ($this->_tpl_vars['notices'][$this->_sections['i']['index']]['status'] == '1'): ?>
                    <a href="notices.php?m=list&a=suspend&NID=<?php echo $this->_tpl_vars['notices'][$this->_sections['i']['index']]['NID']; ?>
" onClick="javascript:return confirm('Are you sure you want to suspend this notice?');">Suspend</a>
                    <?php else: ?>
                    <a href="notices.php?m=list&a=activate&NID=<?php echo $this->_tpl_vars['notices'][$this->_sections['i']['index']]['NID']; ?>
" onClick="javascript:return confirm('Are you sure you want to activate this notice?');">Activate</a>
                    <?php endif; ?>
                    <br>
                    <a href="notices.php?m=list&a=delete&NID=<?php echo $this->_tpl_vars['notices'][$this->_sections['i']['index']]['NID']; ?>
" onClick="javascript:return confirm('Are you sure you want to delete this notice?');">Delete</a><br>
                </td>
            </tr>
            <?php endfor; endif; ?>
            <?php else: ?>
            <tr>
                <td colspan="8" align="center"><div class="missing">YOUR SEARCH DID NOT RETURN ANY RESULTS</div></td>
            </tr>
            <?php endif; ?>
            </table>
        </div>
        <?php if ($this->_tpl_vars['total_users'] >= 1): ?>
        <div id="paging">
            <div class="pagingnav"><?php echo $this->_tpl_vars['paging']; ?>
</div>
        </div>
        <div class="pagingnav_clear"></div>
        <?php endif; ?>                                                            
     </div>