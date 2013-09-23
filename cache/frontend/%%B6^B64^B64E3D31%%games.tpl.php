<?php /* Smarty version 2.6.20, created on 2013-09-23 00:27:10
         compiled from games.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'upper', 'games.tpl', 5, false),array('modifier', 'escape', 'games.tpl', 28, false),array('modifier', 'clean', 'games.tpl', 66, false),array('modifier', 'truncate', 'games.tpl', 66, false),array('function', 't', 'games.tpl', 5, false),array('function', 'url', 'games.tpl', 37, false),array('function', 'private', 'games.tpl', 66, false),array('insert', 'time_range', 'games.tpl', 68, false),array('insert', 'rating_small', 'games.tpl', 72, false),array('insert', 'adv', 'games.tpl', 89, false),array('insert', 'load_plugin', 'games.tpl', 94, false),)), $this); ?>
<div id="content">
    <div class="left span-755">
        <div class="box">    
            <div class="bmenu">
                <div class="bmenul"><h2><?php echo ((is_array($_tmp=$this->_tpl_vars['title'])) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)); ?>
 <?php echo smarty_function_t(array('c' => 'game.GAMES'), $this);?>
</h2></div>
                <div class="bmenur"><?php echo '
                    <script type="text/javascript">
                        $(document).ready(function(){
                            $("select[id=\'order_type\'], select[id=\'order_category\'], select[id=\'order_timeline\']").change(function() {
                                $(\'#orderGames\').submit();
                            });
                        });
                    </script>
                    '; ?>

                    <div id="order_form">
                    <form name="orderGames" id="orderGames" method="get" action="<?php echo $this->_tpl_vars['relative']; ?>
/games">
                        <input name="o" type="hidden" value="<?php echo $this->_tpl_vars['order']; ?>
" />
                        <span class="mleft"><?php echo smarty_function_t(array('c' => 'global.type'), $this);?>
: </span>
                        <select name="type" id="order_type">
                            <option value=""<?php if ($this->_tpl_vars['type'] == ''): ?> selected="yes"<?php endif; ?>><?php echo smarty_function_t(array('c' => 'global.all'), $this);?>
</option>
                            <option value="public"<?php if ($this->_tpl_vars['type'] == 'public'): ?> selected="yes"<?php endif; ?>><?php echo smarty_function_t(array('c' => 'global.public'), $this);?>
</option>
                            <option value="private"<?php if ($this->_tpl_vars['type'] == 'private'): ?> selected="yes"<?php endif; ?>><?php echo smarty_function_t(array('c' => 'global.private'), $this);?>
</option>
                        </select>
                        <span class="mleft"><?php echo smarty_function_t(array('c' => 'global.category'), $this);?>
:</span>
                        <select name="c" id="order_category">
                            <option value="0"<?php if ($this->_tpl_vars['category'] == '0'): ?> selected="yes"<?php endif; ?>><?php echo smarty_function_t(array('c' => 'global.all'), $this);?>
</option>
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
                            <option value="<?php echo $this->_tpl_vars['categories'][$this->_sections['i']['index']]['category_id']; ?>
"<?php if ($this->_tpl_vars['category'] == $this->_tpl_vars['categories'][$this->_sections['i']['index']]['category_id']): ?> selected="yes"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['categories'][$this->_sections['i']['index']]['category_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</option>
                            <?php endfor; endif; ?>
                        </select>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="bsubmenu">
                <div class="bsubmenul">
                    <?php if ($this->_tpl_vars['order'] == 'bp'): ?><?php echo smarty_function_t(array('c' => 'global.being_played'), $this);?>
<?php else: ?><a href="<?php echo smarty_function_url(array('base' => 'games','strip' => 'o','value' => 'bp'), $this);?>
"><?php echo smarty_function_t(array('c' => 'global.being_played'), $this);?>
</a><?php endif; ?> <strong>&middot;</strong>
                    <?php if ($this->_tpl_vars['order'] == 'mr'): ?><?php echo smarty_function_t(array('c' => 'global.most_recent'), $this);?>
<?php else: ?><a href="<?php echo smarty_function_url(array('base' => 'games','strip' => 'o','value' => 'mr'), $this);?>
"><?php echo smarty_function_t(array('c' => 'global.most_recent'), $this);?>
</a><?php endif; ?> <strong>&middot;</strong>
                    <?php if ($this->_tpl_vars['order'] == 'mp'): ?><?php echo smarty_function_t(array('c' => 'global.most_played'), $this);?>
<?php else: ?><a href="<?php echo smarty_function_url(array('base' => 'games','strip' => 'o','value' => 'mp'), $this);?>
"><?php echo smarty_function_t(array('c' => 'global.most_played'), $this);?>
</a><?php endif; ?> <strong>&middot;</strong>
                    <?php if ($this->_tpl_vars['order'] == 'tr'): ?><?php echo smarty_function_t(array('c' => 'global.top_rated'), $this);?>
<?php else: ?><a href="<?php echo smarty_function_url(array('base' => 'games','strip' => 'o','value' => 'tr'), $this);?>
"><?php echo smarty_function_t(array('c' => 'global.top_rated'), $this);?>
</a><?php endif; ?> <strong>&middot;</strong>
                    <?php if ($this->_tpl_vars['order'] == 'md'): ?><?php echo smarty_function_t(array('c' => 'global.most_commented'), $this);?>
<?php else: ?><a href="<?php echo smarty_function_url(array('base' => 'games','strip' => 'o','value' => 'md'), $this);?>
"><?php echo smarty_function_t(array('c' => 'global.most_commented'), $this);?>
</a><?php endif; ?> <strong>&middot;</strong>
                    <?php if ($this->_tpl_vars['order'] == 'tf'): ?><?php echo smarty_function_t(array('c' => 'global.top_favorites'), $this);?>
<?php else: ?><a href="<?php echo smarty_function_url(array('base' => 'games','strip' => 'o','value' => 'tf'), $this);?>
"><?php echo smarty_function_t(array('c' => 'global.top_favorites'), $this);?>
</a><?php endif; ?>                                                                                                                    
                </div>
                <div class="bsubmenur">
                    <div id="timeline_form">
                        <span><?php echo smarty_function_t(array('c' => 'global.timeline'), $this);?>
: </span>
                        <select name="t" id="order_timeline">
                            <option value="t"<?php if ($this->_tpl_vars['timeframe'] == 't'): ?> selected="yes"<?php endif; ?>><?php echo smarty_function_t(array('c' => 'global.today'), $this);?>
</option>
                            <option value="w"<?php if ($this->_tpl_vars['timeframe'] == 'w'): ?> selected="yes"<?php endif; ?>><?php echo smarty_function_t(array('c' => 'global.this_week'), $this);?>
</option>
                            <option value="m"<?php if ($this->_tpl_vars['timeframe'] == 'm'): ?> selected="yes"<?php endif; ?>><?php echo smarty_function_t(array('c' => 'global.this_month'), $this);?>
</option>
                            <option value="a"<?php if ($this->_tpl_vars['timeframe'] == 'a'): ?> selected="yes"<?php endif; ?>><?php echo smarty_function_t(array('c' => 'global.all'), $this);?>
</option>
                        </select>
                    </div>
                    </form>
                </div>
                <div class="clear"></div>
            </div>
            <div class="blinkp">
                <div class="blinkcl"><?php echo smarty_function_t(array('c' => 'global.showing'), $this);?>
 <span><?php echo $this->_tpl_vars['start_num']; ?>
</span> <?php echo smarty_function_t(array('c' => 'global.to'), $this);?>
 <span><?php echo $this->_tpl_vars['end_num']; ?>
</span> <?php echo smarty_function_t(array('c' => 'global.of'), $this);?>
 <span><?php echo $this->_tpl_vars['games_total']; ?>
</span> <?php echo smarty_function_t(array('c' => 'game.games'), $this);?>
.</div>
                <div class="blinkcr"><a href="<?php echo $this->_tpl_vars['relative']; ?>
/upload/game"><?php echo smarty_function_t(array('c' => 'game.upload_game'), $this);?>
</a></div>
                <div class="clear"></div>
            </div>
            <?php if ($this->_tpl_vars['games']): ?>
            <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['games']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
/game/<?php echo $this->_tpl_vars['games'][$this->_sections['i']['index']]['GID']; ?>
/<?php echo ((is_array($_tmp=$this->_tpl_vars['games'][$this->_sections['i']['index']]['title'])) ? $this->_run_mod_handler('clean', true, $_tmp) : smarty_modifier_clean($_tmp)); ?>
"><img src="<?php echo $this->_tpl_vars['relative']; ?>
/media/games/tmb/<?php echo $this->_tpl_vars['games'][$this->_sections['i']['index']]['GID']; ?>
.jpg" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['games'][$this->_sections['i']['index']]['title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" alt="<?php echo ((is_array($_tmp=$this->_tpl_vars['games'][$this->_sections['i']['index']]['title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" width="160" height="120" /><?php if ($this->_tpl_vars['games'][$this->_sections['i']['index']]['type'] == 'private'): ?><img alt="" style="position: absolute; left: 0px; top: +15px; width: 160px; height: 120px;" src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/images/<?php echo smarty_function_private(array('type' => 'game'), $this);?>
"/><?php endif; ?><br /><span class="font-13 font-bold"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['games'][$this->_sections['i']['index']]['title'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 20, ' ...', true) : smarty_modifier_truncate($_tmp, 20, ' ...', true)))) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</span><br /></a>
                <div class="box_left">
                    <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'time_range', 'assign' => 'addtime', 'time' => $this->_tpl_vars['games'][$this->_sections['i']['index']]['addtime'])), $this); ?>

                    <?php echo $this->_tpl_vars['addtime']; ?>
                                                                                                
                </div>
                <div class="box_right">
                    <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'rating_small', 'assign' => 'video_rating', 'rating' => $this->_tpl_vars['games'][$this->_sections['i']['index']]['rate'])), $this); ?>

                    <?php echo $this->_tpl_vars['video_rating']; ?>

                    <div class="clear_right"></div>
                    <?php echo $this->_tpl_vars['games'][$this->_sections['i']['index']]['total_plays']; ?>
 <?php if ($this->_tpl_vars['games'][$this->_sections['i']['index']]['total_plays'] == '1'): ?><?php echo smarty_function_t(array('c' => 'global.play'), $this);?>
<?php else: ?><?php echo smarty_function_t(array('c' => 'global.plays'), $this);?>
<?php endif; ?>
                </div>
                <div class="clear"></div>
            </div>
            <?php endfor; endif; ?>
            <div class="clear_left"></div>
            <div class="pagination"><ul><?php echo $this->_tpl_vars['page_link']; ?>
</ul></div><br />
            <?php else: ?>
                <p>&nbsp;&nbsp;&nbsp;<?php echo smarty_function_t(array('c' => 'games.none'), $this);?>
</p>
            <?php endif; ?>
			<div class="clear"></div>
        </div>
        <div class="box">
		<div class="btitle"><h2><?php echo smarty_function_t(array('c' => 'global.sponsors'), $this);?>
</h2></div>
        <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'adv', 'assign' => 'adv', 'group' => 'games_bottom')), $this); ?>

        <?php if ($this->_tpl_vars['adv']): ?><br /><div class="ads"><?php echo $this->_tpl_vars['adv']; ?>
</div><br /><?php endif; ?>
        </div>
    </div>
    <div class="right span-200">
	<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'load_plugin', 'page' => 'game', 'plugin' => 'gtag_cloud')), $this); ?>

          <div class="box">
              <div class="btitle"><h2><?php echo smarty_function_t(array('c' => 'global.sponsors'), $this);?>
</h2></div>
              <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'adv', 'assign' => 'adv', 'group' => 'games_right')), $this); ?>

              <?php if ($this->_tpl_vars['adv']): ?><br /><div class="ads"><?php echo $this->_tpl_vars['adv']; ?>
</div><br /><?php endif; ?>
          </div>
    </div>
    <div class="clear"></div>
</div>