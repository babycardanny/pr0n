<?php /* Smarty version 2.6.20, created on 2013-08-29 02:01:35
         compiled from footer.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'footer.tpl', 2, false),array('insert', 'timer', 'footer.tpl', 12, false),)), $this); ?>
    <div id="footer">
	<?php echo smarty_function_translate(array('c' => 'footer.copyright'), $this);?>
 &#169; 2008-2009 <a href="<?php echo $this->_tpl_vars['baseurl']; ?>
"><?php echo $this->_tpl_vars['site_name']; ?>
</a>. <?php echo smarty_function_translate(array('c' => 'footer.reserved'), $this);?>
.<br/>
        &middot; 
        <a href="<?php echo $this->_tpl_vars['relative']; ?>
/static/faq" rel="nofollow"><?php echo smarty_function_translate(array('c' => 'footer.faq'), $this);?>
</a> &middot; 
        <a href="<?php echo $this->_tpl_vars['relative']; ?>
/static/terms" rel="nofollow"><?php echo smarty_function_translate(array('c' => 'footer.terms'), $this);?>
</a> &middot; 
        <a href="<?php echo $this->_tpl_vars['relative']; ?>
/static/privacy" rel="nofollow"><?php echo smarty_function_translate(array('c' => 'footer.privacy'), $this);?>
</a> &middot; 
        <a href="<?php echo $this->_tpl_vars['relative']; ?>
/static/dmca" rel="nofollow"><?php echo smarty_function_translate(array('c' => 'footer.dmca'), $this);?>
</a> &middot; 
        <a href="<?php echo $this->_tpl_vars['relative']; ?>
/static/_2257" rel="nofollow"><?php echo smarty_function_translate(array('c' => 'footer.2257'), $this);?>
</a> &middot;                          
        <a href="<?php echo $this->_tpl_vars['relative']; ?>
/static/webmasters" rel="nofollow"><?php echo smarty_function_translate(array('c' => 'footer.webmasters'), $this);?>
</a> &middot; 
        <a href="<?php echo $this->_tpl_vars['relative']; ?>
/static/advertise" rel="nofollow"><?php echo smarty_function_translate(array('c' => 'footer.advertise'), $this);?>
</a> &middot;<br />
	Powered by <a target="_blank" href="http://www.adultvideoscript.com">AVS</a><br/>
	<span class="smallest grey"><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'timer', 'magic' => 'main')), $this); ?>
</span>
    </div>    
</div>
</body>
</html>