<?php /* Smarty version 2.6.20, created on 2013-10-01 00:44:22
         compiled from notices.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'notices.tpl', 3, false),array('modifier', 'clean', 'notices.tpl', 6, false),array('modifier', 'date_format', 'notices.tpl', 46, false),array('insert', 'time_range', 'notices.tpl', 9, false),array('function', 't', 'notices.tpl', 13, false),)), $this); ?>
<div id="content">
    <div class="left span-755">
        <h1><?php echo ((is_array($_tmp=$this->_tpl_vars['site_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
 Notice</h1>
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
        <div class="box">            
            <div class="btitle"><h2><a href="<?php echo $this->_tpl_vars['relative']; ?>
/notice/<?php echo $this->_tpl_vars['notices'][$this->_sections['i']['index']]['NID']; ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['notices'][$this->_sections['i']['index']]['title'])) ? $this->_run_mod_handler('clean', true, $_tmp) : smarty_modifier_clean($_tmp)); ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['notices'][$this->_sections['i']['index']]['title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</a></h2></div>
            <div class="notice_info">
                <div class="notice_info_left">
                    <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'time_range', 'assign' => 'addtime', 'time' => $this->_tpl_vars['notices'][$this->_sections['i']['index']]['addtime'])), $this); ?>

                    <?php echo $this->_tpl_vars['addtime']; ?>

                </div>
                <div class="notice_info_right">
                    <?php echo smarty_function_t(array('c' => 'global.by'), $this);?>
: <a href="<?php echo $this->_tpl_vars['relative']; ?>
/user/<?php echo $this->_tpl_vars['notices'][$this->_sections['i']['index']]['username']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['notices'][$this->_sections['i']['index']]['username'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</a>
                </div>
                <div class="clear"></div>
            </div>
            <div class="notice_content">
                <?php echo $this->_tpl_vars['notices'][$this->_sections['i']['index']]['content']; ?>

            </div>
            <div class="clear"></div>
            <div class="notice_footer">
                <a href="<?php echo $this->_tpl_vars['relative']; ?>
/notice/<?php echo $this->_tpl_vars['notices'][$this->_sections['i']['index']]['NID']; ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['notices'][$this->_sections['i']['index']]['title'])) ? $this->_run_mod_handler('clean', true, $_tmp) : smarty_modifier_clean($_tmp)); ?>
"><?php echo smarty_function_t(array('c' => 'notice.comments'), $this);?>
 (<?php echo $this->_tpl_vars['notices'][$this->_sections['i']['index']]['total_comments']; ?>
)</a> <strong>&middot;</strong>
                <a href="<?php echo $this->_tpl_vars['relative']; ?>
/notice/<?php echo $this->_tpl_vars['notices'][$this->_sections['i']['index']]['NID']; ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['notices'][$this->_sections['i']['index']]['title'])) ? $this->_run_mod_handler('clean', true, $_tmp) : smarty_modifier_clean($_tmp)); ?>
"><?php echo smarty_function_t(array('c' => 'notice.add_comment'), $this);?>
</a>
            </div>
        </div>
        <?php endfor; endif; ?>
        <div class="pagination"><ul><?php echo $this->_tpl_vars['page_link']; ?>
</ul></div>
    </div>    
    <div class="right span-200">
        <h1>&nbsp;</h1>
        <div class="box">
            <div class="btitle"><h2><?php echo smarty_function_t(array('c' => 'global.CATEGORIES'), $this);?>
</h2></div>
            <ul class="notice_categories">
                <li><a href="<?php echo $this->_tpl_vars['relative']; ?>
/notices"><?php echo smarty_function_t(array('c' => 'global.all'), $this);?>
</a></li>
                <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['categories']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                <li><a href="<?php echo $this->_tpl_vars['relative']; ?>
/notices?c=<?php echo $this->_tpl_vars['categories'][$this->_sections['i']['index']]['category_id']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['categories'][$this->_sections['i']['index']]['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</a></li>
                <?php endfor; endif; ?>
            </ul>
            <div class="clear_left"></div>
        </div>
        <div class="box">
            <div class="btitle"><h2><?php echo smarty_function_t(array('c' => 'notice.ARCHIVE'), $this);?>
</h2></div>
            <ul class="notice_categories">
                <li><a href="<?php echo $this->_tpl_vars['relative']; ?>
/notices"><?php echo smarty_function_t(array('c' => 'global.all'), $this);?>
</a></li>
                <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['arhive']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                <li><a href="<?php echo $this->_tpl_vars['relative']; ?>
/notices?t=<?php echo $this->_tpl_vars['arhive'][$this->_sections['i']['index']]; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['arhive'][$this->_sections['i']['index']])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%B %Y") : smarty_modifier_date_format($_tmp, "%B %Y")); ?>
</a></li>
                <?php endfor; endif; ?>
            </ul>
            <div class="clear_left"></div>
        </div>
    </div>
    <div class="clear"></div>
</div>