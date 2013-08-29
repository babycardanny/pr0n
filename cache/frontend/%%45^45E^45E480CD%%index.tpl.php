<?php /* Smarty version 2.6.20, created on 2013-08-29 02:01:34
         compiled from index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'index.tpl', 5, false),array('function', 'private', 'index.tpl', 12, false),array('function', 't', 'index.tpl', 23, false),array('modifier', 'clean', 'index.tpl', 12, false),array('modifier', 'escape', 'index.tpl', 12, false),array('modifier', 'truncate', 'index.tpl', 12, false),array('insert', 'duration', 'index.tpl', 14, false),array('insert', 'time_range', 'index.tpl', 16, false),array('insert', 'rating_small', 'index.tpl', 20, false),array('insert', 'adv', 'index.tpl', 67, false),array('insert', 'load_plugin', 'index.tpl', 72, false),)), $this); ?>
<div id="content">
    <div class="left span-755">
        <div class="box">
            <div class="btitle">
                <div class="btitlel"><h2><?php echo smarty_function_translate(array('c' => 'index.videos_being_watched'), $this);?>
</h2></div>
                <div class="btitler"><a href="<?php echo $this->_tpl_vars['relative']; ?>
/videos?o=bw"><?php echo smarty_function_translate(array('c' => 'index.videos_being_watched_more'), $this);?>
</a></div>
                <div class="clear"></div>
            </div>
            <?php if ($this->_tpl_vars['viewed_videos']): ?>
            <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['viewed_videos']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
            <div class="video_box">
                <a href="<?php echo $this->_tpl_vars['relative']; ?>
/video/<?php echo $this->_tpl_vars['viewed_videos'][$this->_sections['i']['index']]['VID']; ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['viewed_videos'][$this->_sections['i']['index']]['title'])) ? $this->_run_mod_handler('clean', true, $_tmp) : smarty_modifier_clean($_tmp)); ?>
"><img src="<?php echo $this->_tpl_vars['relative']; ?>
/media/videos/tmb/<?php echo $this->_tpl_vars['viewed_videos'][$this->_sections['i']['index']]['VID']; ?>
/<?php echo $this->_tpl_vars['viewed_videos'][$this->_sections['i']['index']]['thumb']; ?>
.jpg" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['viewed_videos'][$this->_sections['i']['index']]['title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['viewed_videos'][$this->_sections['i']['index']]['title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" width="160" height="120" id="rotate_<?php echo $this->_tpl_vars['viewed_videos'][$this->_sections['i']['index']]['VID']; ?>
_<?php echo $this->_tpl_vars['viewed_videos'][$this->_sections['i']['index']]['thumbs']; ?>
_viewed" /><br /><span class="font-13 font-bold"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['viewed_videos'][$this->_sections['i']['index']]['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 21, ' ...', true) : smarty_modifier_truncate($_tmp, 21, ' ...', true)))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</span><br /><?php if ($this->_tpl_vars['viewed_videos'][$this->_sections['i']['index']]['type'] == 'private'): ?><img alt="" style="position: absolute; left: 0px; top: 0px; width: 160px; height: 120px;" src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/images/<?php echo smarty_function_private(array('type' => 'video'), $this);?>
" /><?php endif; ?><?php if ($this->_tpl_vars['viewed_videos'][$this->_sections['i']['index']]['hd'] == 1): ?><img alt="" style="position: absolute; right: 6px; top: 8px; border:none; width: 21px; height: 14px;" src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/images/hd.png"/><?php endif; ?></a>
                <div class="box_left">
                    <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'duration', 'assign' => 'duration', 'duration' => $this->_tpl_vars['viewed_videos'][$this->_sections['i']['index']]['duration'])), $this); ?>

                    <?php echo $this->_tpl_vars['duration']; ?>
<br />
                    <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'time_range', 'assign' => 'addtime', 'time' => $this->_tpl_vars['viewed_videos'][$this->_sections['i']['index']]['addtime'])), $this); ?>

                    <?php echo $this->_tpl_vars['addtime']; ?>

                </div>
                <div class="box_right">
                    <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'rating_small', 'assign' => 'video_rating', 'rating' => $this->_tpl_vars['viewed_videos'][$this->_sections['i']['index']]['rate'])), $this); ?>

                    <?php echo $this->_tpl_vars['video_rating']; ?>

                    <div class="clear_right"></div>                                                            
                    <?php echo $this->_tpl_vars['viewed_videos'][$this->_sections['i']['index']]['viewnumber']; ?>
 <?php if ($this->_tpl_vars['viewed_videos'][$this->_sections['i']['index']]['viewnumber'] == '1'): ?><?php echo smarty_function_t(array('c' => 'global.view'), $this);?>
<?php else: ?><?php echo smarty_function_t(array('c' => 'global.views'), $this);?>
<?php endif; ?>
                </div>
                <div class="clear"></div>
            </div>
            <?php endfor; endif; ?>
            <div class="clear_left"></div>
            <?php else: ?>
				<p>&nbsp;&nbsp;&nbsp;<?php echo smarty_function_t(array('c' => 'videos.no_videos_found'), $this);?>
!</p>
            <?php endif; ?>
        </div>
        <div class="box">
            
            <div class="btitle">
                <div class="btitlel"><h2><?php echo smarty_function_translate(array('c' => 'index.most_recent_videos'), $this);?>
</h2></div>
                <div class="btitler"><a href="<?php echo $this->_tpl_vars['relative']; ?>
/videos?o=mr"><?php echo smarty_function_translate(array('c' => 'index.most_recent_videos_more'), $this);?>
</a></div>
                <div class="clear"></div>
            </div>
            <?php if ($this->_tpl_vars['recent_videos']): ?>
            <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['recent_videos']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
            <div class="video_box">
                <a href="<?php echo $this->_tpl_vars['relative']; ?>
/video/<?php echo $this->_tpl_vars['recent_videos'][$this->_sections['i']['index']]['VID']; ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['recent_videos'][$this->_sections['i']['index']]['title'])) ? $this->_run_mod_handler('clean', true, $_tmp) : smarty_modifier_clean($_tmp)); ?>
"><img src="<?php echo $this->_tpl_vars['relative']; ?>
/media/videos/tmb/<?php echo $this->_tpl_vars['recent_videos'][$this->_sections['i']['index']]['VID']; ?>
/<?php echo $this->_tpl_vars['recent_videos'][$this->_sections['i']['index']]['thumb']; ?>
.jpg" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['recent_videos'][$this->_sections['i']['index']]['title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['recent_videos'][$this->_sections['i']['index']]['title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" width="160" height="120" id="rotate_<?php echo $this->_tpl_vars['recent_videos'][$this->_sections['i']['index']]['VID']; ?>
_<?php echo $this->_tpl_vars['recent_videos'][$this->_sections['i']['index']]['thumbs']; ?>
_recent" /><br /><span class="font-13 font-bold"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['recent_videos'][$this->_sections['i']['index']]['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 21, ' ...', true) : smarty_modifier_truncate($_tmp, 21, ' ...', true)))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</span><br /><?php if ($this->_tpl_vars['recent_videos'][$this->_sections['i']['index']]['type'] == 'private'): ?><img alt="" style="position: absolute; left: 0px; top: 0px; width: 160px; height: 120px;" src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/images/<?php echo smarty_function_private(array('type' => 'video'), $this);?>
" /><?php endif; ?><?php if ($this->_tpl_vars['recent_videos'][$this->_sections['i']['index']]['hd'] == 1): ?><img alt="" style="position: absolute; right: 6px; top: 8px; border:none; width: 21px; height: 14px;" src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/images/hd.png"/><?php endif; ?></a>
                <div class="box_left">
                    <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'duration', 'assign' => 'duration', 'duration' => $this->_tpl_vars['recent_videos'][$this->_sections['i']['index']]['duration'])), $this); ?>

                    <?php echo $this->_tpl_vars['duration']; ?>
<br />
                    <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'time_range', 'assign' => 'addtime', 'time' => $this->_tpl_vars['recent_videos'][$this->_sections['i']['index']]['addtime'])), $this); ?>

                    <?php echo $this->_tpl_vars['addtime']; ?>

                </div>
                <div class="box_right">
                    <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'rating_small', 'assign' => 'video_rating', 'rating' => $this->_tpl_vars['recent_videos'][$this->_sections['i']['index']]['rate'])), $this); ?>

                    <?php echo $this->_tpl_vars['video_rating']; ?>

                    <div class="clear_right"></div>                                                            
                    <?php echo $this->_tpl_vars['recent_videos'][$this->_sections['i']['index']]['viewnumber']; ?>
 <?php if ($this->_tpl_vars['recent_videos'][$this->_sections['i']['index']]['viewnumber'] == '1'): ?><?php echo smarty_function_t(array('c' => 'global.view'), $this);?>
<?php else: ?><?php echo smarty_function_t(array('c' => 'global.views'), $this);?>
<?php endif; ?>
                </div>
                <div class="clear"></div>
            </div>
            <?php endfor; endif; ?>
            <div class="clear_left"></div>
            <?php else: ?>
				<p>&nbsp;&nbsp;&nbsp;<?php echo smarty_function_t(array('c' => 'videos.no_videos_found'), $this);?>
!</p>
            <?php endif; ?>            
        </div>
        <div class="box">
	    
	    <div class="btitle"><h2><?php echo smarty_function_t(array('c' => 'global.sponsors'), $this);?>
</h2></div>
    	    <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'adv', 'assign' => 'adv', 'group' => 'index_bottom')), $this); ?>

    	    <?php if ($this->_tpl_vars['adv']): ?><br /><div class="ads"><?php echo $this->_tpl_vars['adv']; ?>
</div><br /><?php endif; ?>
        </div>
    </div>
    <div class="right span-200">
	    <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'load_plugin', 'page' => 'index', 'plugin' => 'login')), $this); ?>

	    <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'load_plugin', 'page' => 'index', 'plugin' => 'statistics')), $this); ?>

        <div class="box">            
            <div class="btitle"><h2><?php echo smarty_function_t(array('c' => 'global.sponsors'), $this);?>
</h2></div>
            <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'adv', 'assign' => 'adv', 'group' => 'index_right')), $this); ?>

            <?php if ($this->_tpl_vars['adv']): ?><br /><div class="ads"><?php echo $this->_tpl_vars['adv']; ?>
</div><br /><?php endif; ?>
        </div>
    </div>
    <div class="clear"></div>
</div>