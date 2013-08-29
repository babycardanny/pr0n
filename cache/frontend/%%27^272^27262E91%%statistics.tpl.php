<?php /* Smarty version 2.6.20, created on 2013-08-29 02:01:34
         compiled from C:%5Cxampp%5Chtdocs%5Cpr0n/plugins/index_statistics/statistics.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 't', 'C:\\xampp\\htdocs\\pr0n/plugins/index_statistics/statistics.tpl', 2, false),)), $this); ?>
<div class="box">
	<div class="btitle"><h2><?php echo smarty_function_t(array('c' => 'global.STATISTICS'), $this);?>
</h2></div>
	<div class="bcontent">
		<?php echo smarty_function_t(array('c' => 'stats.public_videos'), $this);?>
: &nbsp;<a href="<?php echo $this->_tpl_vars['relative']; ?>
/videos?type=public"><?php echo $this->_tpl_vars['total_public_videos']; ?>
</a><br />
		<?php echo smarty_function_t(array('c' => 'stats.private_videos'), $this);?>
: &nbsp;<a href="<?php echo $this->_tpl_vars['relative']; ?>
/videos?type=private"><?php echo $this->_tpl_vars['total_private_videos']; ?>
</a><br />
		<?php if ($this->_tpl_vars['photo_module'] == '1'): ?>
		<?php echo smarty_function_t(array('c' => 'stats.public_albums'), $this);?>
: &nbsp;<a href="<?php echo $this->_tpl_vars['relative']; ?>
/albums?type=public"><?php echo $this->_tpl_vars['total_public_albums']; ?>
</a><br />
		<?php echo smarty_function_t(array('c' => 'stats.private_albums'), $this);?>
: &nbsp;<a href="<?php echo $this->_tpl_vars['relative']; ?>
/albums?type=private"><?php echo $this->_tpl_vars['total_private_albums']; ?>
</a><br />
		<?php endif; ?>
		<?php if ($this->_tpl_vars['game_module'] == '1'): ?>
		<?php echo smarty_function_t(array('c' => 'stats.public_games'), $this);?>
: &nbsp;<a href="<?php echo $this->_tpl_vars['relative']; ?>
/games?type=public"><?php echo $this->_tpl_vars['total_public_games']; ?>
</a><br />
		<?php echo smarty_function_t(array('c' => 'stats.private_games'), $this);?>
: &nbsp;<a href="<?php echo $this->_tpl_vars['relative']; ?>
/games?type=private"><?php echo $this->_tpl_vars['total_private_games']; ?>
</a><br />
		<?php endif; ?>
		<?php if ($this->_tpl_vars['blog_module'] == '1'): ?>
		<?php echo smarty_function_t(array('c' => 'menu.blogs'), $this);?>
: &nbsp;<a href="<?php echo $this->_tpl_vars['relative']; ?>
/blogs"><?php echo $this->_tpl_vars['total_blogs']; ?>
</a><br />
		<?php endif; ?>
		<?php echo smarty_function_t(array('c' => 'global.users'), $this);?>
: &nbsp;<a href="<?php echo $this->_tpl_vars['relative']; ?>
/community"><?php echo $this->_tpl_vars['total_users']; ?>
</a>
	</div>
</div>