<?php /* Smarty version 2.6.20, created on 2013-08-29 02:21:51
         compiled from channels.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('insert', 'channel_count', 'channels.tpl', 39, false),array('function', 'cycle', 'channels.tpl', 40, false),)), $this); ?>
     <div id="rightcontent">
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "errmsg.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <div id="searchForm">
            <form name="search_channels" method="POST" action="channels.php">
            <table width="100%" cellpadding="0" cellspacing="5" border="0">
            <tr>
                <td align="right">Sort</td>
                <td>
                    <select name="sort">
                    <option value="CHID"<?php if ($this->_tpl_vars['option']['sort'] == 'CHID'): ?> selected="selected"<?php endif; ?>>ID</option>
                    <option value="name"<?php if ($this->_tpl_vars['option']['sort'] == 'name'): ?> selected="selected"<?php endif; ?>>Name</option>
                    </select>
                </td>
                <td align="right">Order</td>
                <td>
                    <select name="order">
                    <option value="DESC"<?php if ($this->_tpl_vars['option']['order'] == 'DESC'): ?> selected="selected"<?php endif; ?>>DESC</option>
                    <option value="ASC"<?php if ($this->_tpl_vars['option']['order'] == 'ASC'): ?> selected="selected"<?php endif; ?>>ASC</option>
                    </select>
                </td>
                <td colspan="2" align="center">
                    <input type="submit" name="search_channels" value=" -- Search -- " class="button">
                    <input type="reset" name="reset_search" value=" -- Clear -- " class="button">
                </td>
            </tr>
            </table>
            </form>
        </div>
        <div id="right">
            <table width="100%" cellspacing="1" cellpadding="3" border="0">
            <tr>
                <td align="center"><b>Id</b></td>
                <td align="center"><b>Name</b></td>
                <td align="center"><b>Videos</b></td>
                <td align="center"><b>Actions</b></td>
            </tr>
            <?php if ($this->_tpl_vars['channels']): ?>
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
            <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'channel_count', 'assign' => 'count', 'CHID' => $this->_tpl_vars['channels'][$this->_sections['i']['index']]['CHID'])), $this); ?>

            <tr bgcolor="<?php echo smarty_function_cycle(array('values' => "#F8F8F8,#F2F2F2"), $this);?>
">
                <td align="center"><?php echo $this->_tpl_vars['channels'][$this->_sections['i']['index']]['CHID']; ?>
</td>
                <td align="center">
                    <a href="channels.php?m=view&CID=<?php echo $this->_tpl_vars['channels'][$this->_sections['i']['index']]['CHID']; ?>
"><?php echo $this->_tpl_vars['channels'][$this->_sections['i']['index']]['name']; ?>
<br><br>
                    <img src="<?php echo $this->_tpl_vars['baseurl']; ?>
/media/categories/video/<?php echo $this->_tpl_vars['channels'][$this->_sections['i']['index']]['CHID']; ?>
.jpg" width="70"></a>
                    </td>
                <td align="center"><?php if ($this->_tpl_vars['count'] != '0'): ?><a href="videos.php?m=all&CID=<?php echo $this->_tpl_vars['channels'][$this->_sections['i']['index']]['CHID']; ?>
"><?php echo $this->_tpl_vars['count']; ?>
<?php else: ?>0<?php endif; ?></a></td>
                <td align="center">
                    <a href="channels.php?m=view&CID=<?php echo $this->_tpl_vars['channels'][$this->_sections['i']['index']]['CHID']; ?>
">View</a><br>
                    <a href="channels.php?m=edit&CID=<?php echo $this->_tpl_vars['channels'][$this->_sections['i']['index']]['CHID']; ?>
">Edit</a><br>
                    <a href="channels.php?m=list&a=delete&CID=<?php echo $this->_tpl_vars['channels'][$this->_sections['i']['index']]['CHID']; ?>
" onClick="javascript:return confirm('Are you sure you want to delete this channel?');">Delete</a><br>
                </td>
            </tr>
            <?php endfor; endif; ?>
            <?php else: ?>
            <tr>
                <td colspan="8" align="center"><div class="missing">NO CATEGORIES FOUND. CLICK <a href="channels.php?m=add">HERE</a> TO ADD CATEGORIES!</div></td>
            </tr>
            <?php endif; ?>
            </table>
        </div>
     </div>