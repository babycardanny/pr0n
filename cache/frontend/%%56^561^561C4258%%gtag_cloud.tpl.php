<?php /* Smarty version 2.6.20, created on 2013-09-23 00:27:10
         compiled from C:%5Cxampp%5Chtdocs%5Cpr0n/plugins/game_gtag_cloud/gtag_cloud.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 't', 'C:\\xampp\\htdocs\\pr0n/plugins/game_gtag_cloud/gtag_cloud.tpl', 2, false),array('modifier', 'escape', 'C:\\xampp\\htdocs\\pr0n/plugins/game_gtag_cloud/gtag_cloud.tpl', 5, false),array('modifier', 'lower', 'C:\\xampp\\htdocs\\pr0n/plugins/game_gtag_cloud/gtag_cloud.tpl', 5, false),)), $this); ?>
<div class="box">
    <div class="btitle"><h2><?php echo smarty_function_t(array('c' => 'global.POPULAR_TAGS'), $this);?>
</h2></div>
	<ul id="cloud">
	<?php $_from = $this->_tpl_vars['tags']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['tag'] => $this->_tpl_vars['count']):
?>
	<li><a href="<?php echo $this->_tpl_vars['relative']; ?>
/search?search_query=<?php echo ((is_array($_tmp=$this->_tpl_vars['tag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
&search_type=games" class="tag<?php echo $this->_tpl_vars['count']; ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tag'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')))) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)); ?>
</a></li>
	<?php endforeach; endif; unset($_from); ?>
    </ul>
</div>