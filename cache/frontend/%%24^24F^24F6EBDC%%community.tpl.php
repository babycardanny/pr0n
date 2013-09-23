<?php /* Smarty version 2.6.20, created on 2013-09-23 00:13:15
         compiled from community.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 't', 'community.tpl', 7, false),array('modifier', 'escape', 'community.tpl', 21, false),array('insert', 'adv', 'community.tpl', 154, false),)), $this); ?>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/js/jquery.community-0.1.js"></script>
<div id="content">
    <div class="left span-755">
        <?php if ($this->_tpl_vars['popular_users']): ?>
        <div class="box height-190">
            <div class="btop">
                <div class="btopl"><h2><?php echo smarty_function_t(array('c' => 'community.most_popular'), $this);?>
</h2></div>
                <div id="loader_users_All_popular" class="btopc" style="display: none;"><img src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/images/ajax_loader_bar.gif" alt="Loading..." /></div>
                <div class="btopr">
                    <a href="<?php echo $this->_tpl_vars['relative']; ?>
/users?o=mp"><?php echo smarty_function_t(array('c' => 'global.view_more'), $this);?>
</a>
                </div>
                <div class="clear"></div>
            </div>
            <input name="current_page_popular_All" type="hidden" value="1" id="current_page_popular_All" />
            <div class="bar_space_left">
                <a href="#prev_popular_users" id="prev_users_All_popular" class="prev_bar" style="display: none;"></a>
            </div>
            <div id="users_popular_All">
            <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['popular_users']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['max'] = (int)5;
$this->_sections['i']['show'] = true;
if ($this->_sections['i']['max'] < 0)
    $this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = min(ceil(($this->_sections['i']['step'] > 0 ? $this->_sections['i']['loop'] - $this->_sections['i']['start'] : $this->_sections['i']['start']+1)/abs($this->_sections['i']['step'])), $this->_sections['i']['max']);
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
            <div class="user_box">
                <a href="<?php echo $this->_tpl_vars['relative']; ?>
/user/<?php echo $this->_tpl_vars['popular_users'][$this->_sections['i']['index']]['username']; ?>
"><img src="<?php echo $this->_tpl_vars['relative']; ?>
/media/users/<?php if ($this->_tpl_vars['popular_users'][$this->_sections['i']['index']]['photo'] == ''): ?>nopic-<?php echo $this->_tpl_vars['popular_users'][$this->_sections['i']['index']]['gender']; ?>
.gif<?php else: ?><?php echo $this->_tpl_vars['popular_users'][$this->_sections['i']['index']]['photo']; ?>
<?php endif; ?>" width="100" height="120" alt="<?php echo $this->_tpl_vars['popular_users'][$this->_sections['i']['index']]['username']; ?>
's avatar" /><br /><span class="font-12"><?php echo ((is_array($_tmp=$this->_tpl_vars['popular_users'][$this->_sections['i']['index']]['username'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</span></a><br />
            </div>
            <?php endfor; endif; ?>
            </div>
            <?php if ($this->_tpl_vars['total_pusers'] > 5): ?>
            <div class="bar_space_right">
                <a href="#next_popular_users" id="next_users_All_popular" class="next_bar"></a>
            </div>
            <?php endif; ?>
            <div class="clear"></div>            
        </div>
        <?php endif; ?>
        <?php if ($this->_tpl_vars['female_users']): ?>
        <div class="box height-190">
            <div class="btop">
                <div class="btopl"><h2><?php echo smarty_function_t(array('c' => 'community.new_female'), $this);?>
</h2></div>
                <div id="loader_users_Female_new" class="btopc" style="display: none;"><img src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/images/ajax_loader_bar.gif" alt="Loading..." /></div>
                <div class="btopr">
                    <a href="<?php echo $this->_tpl_vars['relative']; ?>
/users?o=mr&amp;g=Female"><?php echo smarty_function_t(array('c' => 'global.view_more'), $this);?>
</a>
                </div>
                <div class="clear"></div>
            </div>
            <input name="current_page_new_Female" type="hidden" value="1" id="current_page_new_Female" />
            <div class="bar_space_left">
                <a href="#prev_female_users" id="prev_users_Female_new" class="prev_bar" style="display: none;"></a>
            </div>
            <div id="users_new_Female">
            <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['female_users']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['max'] = (int)5;
$this->_sections['i']['show'] = true;
if ($this->_sections['i']['max'] < 0)
    $this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = min(ceil(($this->_sections['i']['step'] > 0 ? $this->_sections['i']['loop'] - $this->_sections['i']['start'] : $this->_sections['i']['start']+1)/abs($this->_sections['i']['step'])), $this->_sections['i']['max']);
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
            <div class="user_box">
                <a href="<?php echo $this->_tpl_vars['relative']; ?>
/user/<?php echo $this->_tpl_vars['female_users'][$this->_sections['i']['index']]['username']; ?>
"><img src="<?php echo $this->_tpl_vars['relative']; ?>
/media/users/<?php if ($this->_tpl_vars['female_users'][$this->_sections['i']['index']]['photo'] == ''): ?>nopic-Female.gif<?php else: ?><?php echo $this->_tpl_vars['female_users'][$this->_sections['i']['index']]['photo']; ?>
<?php endif; ?>" width="100" height="120" alt="<?php echo $this->_tpl_vars['female_users'][$this->_sections['i']['index']]['username']; ?>
's avatar" /><br /><span class="font-12"><?php echo ((is_array($_tmp=$this->_tpl_vars['female_users'][$this->_sections['i']['index']]['username'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</span></a><br />
            </div>
            <?php endfor; endif; ?>
            </div>
            <?php if ($this->_tpl_vars['total_fusers'] > 5): ?>
            <div class="bar_space_right">
                <a href="#next_female_users" id="next_users_Female_new" class="next_bar"></a>
            </div>
            <?php endif; ?>
            <div class="clear_left"></div>
        </div>
        <?php endif; ?>
        <?php if ($this->_tpl_vars['male_users']): ?>
        <div class="box height-190">
            <div class="btop">
                <div class="btopl"><h2><?php echo smarty_function_t(array('c' => 'community.new_male'), $this);?>
</h2></div>
                <div id="loader_users_Male_new" class="btopc" style="display: none;"><img src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/images/ajax_loader_bar.gif" alt="Loading..." /></div>
                <div class="btopr">
                    <a href="<?php echo $this->_tpl_vars['relative']; ?>
/users?o=mr&amp;g=Male"><?php echo smarty_function_t(array('c' => 'global.view_more'), $this);?>
</a>
                </div>
                <div class="clear"></div>
            </div>
            <input name="current_page_new_Male" type="hidden" value="1" id="current_page_new_Male" />
            <div class="bar_space_left">
                <a href="#prev_male_users" id="prev_users_Male_new" class="prev_bar" style="display: none;"></a>
            </div>
            <div id="users_new_Male">
            <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['male_users']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['max'] = (int)5;
$this->_sections['i']['show'] = true;
if ($this->_sections['i']['max'] < 0)
    $this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = min(ceil(($this->_sections['i']['step'] > 0 ? $this->_sections['i']['loop'] - $this->_sections['i']['start'] : $this->_sections['i']['start']+1)/abs($this->_sections['i']['step'])), $this->_sections['i']['max']);
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
            <div class="user_box">
                <a href="<?php echo $this->_tpl_vars['relative']; ?>
/user/<?php echo $this->_tpl_vars['male_users'][$this->_sections['i']['index']]['username']; ?>
"><img src="<?php echo $this->_tpl_vars['relative']; ?>
/media/users/<?php if ($this->_tpl_vars['male_users'][$this->_sections['i']['index']]['photo'] == ''): ?>nopic-Male.gif<?php else: ?><?php echo $this->_tpl_vars['male_users'][$this->_sections['i']['index']]['photo']; ?>
<?php endif; ?>" width="100" height="120" alt="<?php echo $this->_tpl_vars['male_users'][$this->_sections['i']['index']]['username']; ?>
's avatar" /><br /><span class="font-12"><?php echo ((is_array($_tmp=$this->_tpl_vars['male_users'][$this->_sections['i']['index']]['username'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</span></a><br />
            </div>
            <?php endfor; endif; ?>
            </div>
            <?php if ($this->_tpl_vars['total_musers'] > 5): ?>
            <div class="bar_space_right">
                <a href="#next_male_users" id="next_users_Male_new" class="next_bar"></a>
            </div>
            <?php endif; ?>
            <div class="clear"></div>
        </div>
        <?php endif; ?>
        <?php if ($this->_tpl_vars['online_female_users']): ?>
        <div class="box height-190">
            
            <div class="btop">
                <div class="btopl"><h2><?php echo smarty_function_t(array('c' => 'community.online_female'), $this);?>
</h2></div>
                <div id="loader_users_Female_online" class="btopc" style="display: none;"><img src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/images/ajax_loader_bar.gif" alt="Loading" /></div>
                <div class="btopr">
                    <a href="<?php echo $this->_tpl_vars['relative']; ?>
/users?o=on&amp;g=Female"><?php echo smarty_function_t(array('c' => 'global.view_more'), $this);?>
</a>
                </div>
                <div class="clear"></div>
            </div>
            <input name="current_page_online_Female" type="hidden" value="1" id="current_page_online_Female" />
            <div class="bar_space_left">
                <a href="#prev_female_users_online" id="prev_users_Female_online" class="prev_bar" style="display: none;"></a>
            </div>
            <div id="users_online_Female">
            <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['online_female_users']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['max'] = (int)5;
$this->_sections['i']['show'] = true;
if ($this->_sections['i']['max'] < 0)
    $this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = min(ceil(($this->_sections['i']['step'] > 0 ? $this->_sections['i']['loop'] - $this->_sections['i']['start'] : $this->_sections['i']['start']+1)/abs($this->_sections['i']['step'])), $this->_sections['i']['max']);
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
            <div class="user_box">
                <a href="<?php echo $this->_tpl_vars['relative']; ?>
/user/<?php echo $this->_tpl_vars['online_female_users'][$this->_sections['i']['index']]['username']; ?>
"><img src="<?php echo $this->_tpl_vars['relative']; ?>
/media/users/<?php if ($this->_tpl_vars['online_female_users'][$this->_sections['i']['index']]['photo'] == ''): ?>nopic-Female.gif<?php else: ?><?php echo $this->_tpl_vars['online_female_users'][$this->_sections['i']['index']]['photo']; ?>
<?php endif; ?>" width="100" height="120" alt="<?php echo $this->_tpl_vars['online_female_users'][$this->_sections['i']['index']]['username']; ?>
's avatar" /><br /><span class="font-12"><?php echo ((is_array($_tmp=$this->_tpl_vars['online_female_users'][$this->_sections['i']['index']]['username'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</span></a><br />
            </div>
            <?php endfor; endif; ?>
            </div>
            <?php if ($this->_tpl_vars['total_ofusers'] > 5): ?>
            <div class="bar_space_right">
                <a href="#next_female_users_online" id="next_users_Female_online" class="next_bar"></a>
            </div>
            <?php endif; ?>
            <div class="clear_left"></div>
        </div>
        <?php endif; ?>
        <?php if ($this->_tpl_vars['online_male_users']): ?>
        <div class="box height-190">
            
            <div class="btop">
                <div class="btopl"><h2><?php echo smarty_function_t(array('c' => 'community.online_male'), $this);?>
</h2></div>
                <div id="loader_users_Male_online" class="btopc" style="display: none;"><img src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/images/ajax_loader_bar.gif" alt="Loading" /></div>
                <div class="btopr">
                    <a href="<?php echo $this->_tpl_vars['relative']; ?>
/users?o=on&amp;g=Male"><?php echo smarty_function_t(array('c' => 'global.view_more'), $this);?>
</a>
                </div>
                <div class="clear"></div>
            </div>
            <input name="current_page_online_Male" type="hidden" value="1" id="current_page_online_Male" />
            <div class="bar_space_left">
                <a href="#prev_male_users_online" id="prev_users_Male_online" class="prev_bar" style="display: none;"></a>
            </div>            
            <div id="users_online_Male">
            <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['online_male_users']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['max'] = (int)5;
$this->_sections['i']['show'] = true;
if ($this->_sections['i']['max'] < 0)
    $this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = min(ceil(($this->_sections['i']['step'] > 0 ? $this->_sections['i']['loop'] - $this->_sections['i']['start'] : $this->_sections['i']['start']+1)/abs($this->_sections['i']['step'])), $this->_sections['i']['max']);
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
            <div class="user_box">
                <a href="<?php echo $this->_tpl_vars['relative']; ?>
/user/<?php echo $this->_tpl_vars['online_male_users'][$this->_sections['i']['index']]['username']; ?>
"><img src="<?php echo $this->_tpl_vars['relative']; ?>
/media/users/<?php if ($this->_tpl_vars['online_male_users'][$this->_sections['i']['index']]['photo'] == ''): ?>nopic-Male.gif<?php else: ?><?php echo $this->_tpl_vars['online_male_users'][$this->_sections['i']['index']]['photo']; ?>
<?php endif; ?>" width="100" height="120" alt="<?php echo $this->_tpl_vars['online_male_users'][$this->_sections['i']['index']]['username']; ?>
's avatar" /><br /><span class="font-12"><?php echo ((is_array($_tmp=$this->_tpl_vars['online_male_users'][$this->_sections['i']['index']]['username'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</span></a><br />
            </div>
            <?php endfor; endif; ?>
            </div>
            <?php if ($this->_tpl_vars['total_omusers'] > 5): ?>
            <div class="bar_space_right">
                <a href="#next_Male_users_online" id="next_users_Male_online" class="next_bar"></a>
            </div>
            <?php endif; ?>
            <div class="clear_left"></div>
        </div>
        <?php endif; ?>
  
        <div class="box">
            <div class="btitle"><h2><?php echo smarty_function_t(array('c' => 'global.sponsors'), $this);?>
</h2></div>
        <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'adv', 'assign' => 'adv', 'group' => 'community_bottom')), $this); ?>

        <?php if ($this->_tpl_vars['adv']): ?><br /><div class="ads"><?php echo $this->_tpl_vars['adv']; ?>
</div><br /><?php endif; ?>
        </div>
    </div>
    <div class="right span-200">
        <div class="box">
            <div class="btitle"><h2><?php echo smarty_function_t(array('c' => 'global.sponsors'), $this);?>
</h2></div>
            <?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'adv', 'assign' => 'adv', 'group' => 'community_right')), $this); ?>

            <?php if ($this->_tpl_vars['adv']): ?><br /><div class="ads"><?php echo $this->_tpl_vars['adv']; ?>
</div><br /><?php endif; ?>
        </div>
    </div>
    <div class="clear"></div>
</div>
