<?php /* Smarty version 2.6.20, created on 2013-08-29 02:01:34
         compiled from header.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'header.tpl', 4, false),array('function', 't', 'header.tpl', 19, false),array('function', 'translate', 'header.tpl', 46, false),array('insert', 'language', 'header.tpl', 38, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title><?php if (isset ( $this->_tpl_vars['self_title'] ) && $this->_tpl_vars['self_title'] != ''): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['self_title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
<?php else: ?><?php echo $this->_tpl_vars['site_name']; ?>
<?php endif; ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="robots" content="index, follow" />
    <meta name="revisit-after" content="1 days" />
    <meta name="keywords" content="<?php if (isset ( $this->_tpl_vars['self_keywords'] ) && $this->_tpl_vars['self_keywords'] != ''): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['self_keywords'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
<?php else: ?><?php echo $this->_tpl_vars['meta_keywords']; ?>
<?php endif; ?>" />
    <meta name="description" content="<?php if (isset ( $this->_tpl_vars['self_description'] ) && $this->_tpl_vars['self_description'] != ''): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['self_description'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
<?php else: ?><?php echo $this->_tpl_vars['meta_description']; ?>
<?php endif; ?>" />
    <link rel = "stylesheet" href = "<?php echo $this->_tpl_vars['relative_tpl']; ?>
/css/style.css" type = "text/css" />
    <link rel = "stylesheet" href = "<?php echo $this->_tpl_vars['relative_tpl']; ?>
/css/style_menu.css" type = "text/css" />
	<link rel="Shortcut Icon" type="image/ico" href="/favicon.ico" />
    <!--[if IE 7]><link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/css/style_ie7.css" /><![endif]-->
    <!--[if IE 6]><link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/css/style_ie6.css" /><![endif]-->
    <script type="text/javascript">
    var base_url = "<?php echo $this->_tpl_vars['baseurl']; ?>
";
    var tpl_url = "<?php echo $this->_tpl_vars['relative_tpl']; ?>
";
	<?php if (isset ( $this->_tpl_vars['video']['VID'] )): ?>var video_id = "<?php echo $this->_tpl_vars['video']['VID']; ?>
";<?php endif; ?>
	var lang_deleting = "<?php echo smarty_function_t(array('c' => 'global.deleting'), $this);?>
";
	var lang_flaging = "<?php echo smarty_function_t(array('c' => 'global.flaging'), $this);?>
";
	var lang_loading = "<?php echo smarty_function_t(array('c' => 'global.loading'), $this);?>
";
	var lang_sending = "<?php echo smarty_function_t(array('c' => 'global.sending'), $this);?>
";
	var lang_share_name_empty = "<?php echo smarty_function_t(array('c' => 'share.name_empty'), $this);?>
";
	var lang_share_rec_empty = "<?php echo smarty_function_t(array('c' => 'share.recipient'), $this);?>
";
</script>
    <script type="text/javascript" src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/js/jquery-1.2.6.pack.js"></script>
    <script type="text/javascript" src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/js/jquery.livequery.pack.js"></script>
    <script type="text/javascript" src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/js/jquery.rotator-0.2.js"></script>
    <script type="text/javascript" src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/js/jquery.avs-0.2.js"></script>
    <?php if ($this->_tpl_vars['submenu_tag_scroller'] == '1'): ?><script type="text/javascript" src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/js/jscroller2-1.5.js"></script><?php endif; ?>
</head>
<body>
<div id="container">
    <div id="header">
        <div id="logo">
           <a href="<?php echo $this->_tpl_vars['baseurl']; ?>
" title="<?php echo $this->_tpl_vars['site_name']; ?>
"><img src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/images/logo.png" alt="<?php echo $this->_tpl_vars['site_name']; ?>
 Logo" /></a>
        </div>
		<?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'language', 'assign' => 'flag')), $this); ?>

        <div id="right">
            <?php if (isset ( $_SESSION['uid'] )): ?>
			<?php if ($this->_tpl_vars['multi_language']): ?>
				<a href="#" id="select_language" class="languageselector" title="Select Language"><div><img src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/images/flags/<?php echo $this->_tpl_vars['flag']; ?>
" id="select_language" alt="<?php echo $this->_tpl_vars['flag']; ?>
" /><img src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/images/arrowdown.gif"></div></a>
			<?php endif; ?>
            <div id="userlinks">
            <ul>
                <li><a href="<?php echo $this->_tpl_vars['relative']; ?>
/logout"><?php echo smarty_function_translate(array('c' => 'global.sign_out'), $this);?>
</a></li>
                <li id="my_feeds"><a href="<?php echo $this->_tpl_vars['relative']; ?>
/feeds" class="icon"><?php echo smarty_function_translate(array('c' => 'global.my_feeds'), $this);?>
</a></li>
                <li id="new_requests"><a href="<?php echo $this->_tpl_vars['relative']; ?>
/requests" class="icon"><?php echo smarty_function_translate(array('c' => 'global.requests'), $this);?>
 (<?php echo $this->_tpl_vars['requests_count']; ?>
)</a></li>
                <li id="new_mail"><a href="<?php echo $this->_tpl_vars['relative']; ?>
/mail/inbox" class="icon"><?php echo smarty_function_translate(array('c' => 'global.inbox'), $this);?>
 (<?php echo $this->_tpl_vars['mails_count']; ?>
)</a></li>
                <li>Welcome: <a href="<?php echo $this->_tpl_vars['relative']; ?>
/user"><?php echo $_SESSION['username']; ?>
</a>!</li>
            </ul>
            </div>
            <div class="clear_right"></div>
            <?php else: ?>
			<?php if ($this->_tpl_vars['multi_language']): ?>
				<a href="#" id="select_language" class="languageselector" title="Select Language"><div><img src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/images/flags/<?php echo $this->_tpl_vars['flag']; ?>
" id="select_language" alt="<?php echo $this->_tpl_vars['flag']; ?>
" /><img src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/images/arrowdown.gif"></div></a>
			<?php endif; ?>
            <div id="nologinlinks">
                <a href="<?php echo $this->_tpl_vars['relative']; ?>
/signup" rel="nofollow">&nbsp;<?php echo smarty_function_translate(array('c' => 'global.sign_up'), $this);?>
</a> <strong>&middot;</strong>
                <a href="<?php echo $this->_tpl_vars['relative']; ?>
/login" rel = "nofollow"><?php echo smarty_function_translate(array('c' => 'global.login'), $this);?>
</a>
            </div>
			<div class="clear_right"></div>
            <?php endif; ?>
            <div id="toplinks" class="grey small">
                <a href="<?php echo $this->_tpl_vars['relative']; ?>
/invite" rel="nofollow"><?php echo smarty_function_translate(array('c' => 'global.invite_friends'), $this);?>
</a> <strong>&middot;</strong> 
                <a href="<?php echo $this->_tpl_vars['relative']; ?>
/feedback" rel="nofollow"><?php echo smarty_function_translate(array('c' => 'global.support_feedback'), $this);?>
</a> <strong>&middot;</strong> 
                <a href="<?php echo $this->_tpl_vars['relative']; ?>
/notices"><?php echo $this->_tpl_vars['site_name']; ?>
 <?php echo smarty_function_translate(array('c' => 'global.notice'), $this);?>
</a>
            </div>
			<div id="slidetabsmenu">
			<ul>
                <li<?php if ($this->_tpl_vars['menu'] == 'community'): ?> id="current"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['relative']; ?>
/community"><span><?php echo smarty_function_translate(array('c' => 'menu.community'), $this);?>
</span></a></li>
                <li<?php if ($this->_tpl_vars['menu'] == 'categories'): ?> id="current"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['relative']; ?>
/categories"><span><?php echo smarty_function_translate(array('c' => 'menu.categories'), $this);?>
</span></a></li>
                <?php if ($this->_tpl_vars['blog_module'] == '1'): ?><li<?php if ($this->_tpl_vars['menu'] == 'blogs'): ?> id="current"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['relative']; ?>
/blogs"><span><?php echo smarty_function_translate(array('c' => 'menu.blogs'), $this);?>
</span></a></li><?php endif; ?>
                <?php if ($this->_tpl_vars['game_module'] == '1'): ?><li<?php if ($this->_tpl_vars['menu'] == 'games'): ?> id="current"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['relative']; ?>
/games"><span><?php echo smarty_function_translate(array('c' => 'menu.games'), $this);?>
</span></a></li><?php endif; ?>
                <?php if ($this->_tpl_vars['photo_module'] == '1'): ?><li<?php if ($this->_tpl_vars['menu'] == 'albums'): ?> id="current"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['relative']; ?>
/albums"><span><?php echo smarty_function_translate(array('c' => 'menu.photos'), $this);?>
</span></a></li><?php endif; ?>
                <li<?php if ($this->_tpl_vars['menu'] == 'videos'): ?> id="current"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['relative']; ?>
/videos"><span><?php echo smarty_function_translate(array('c' => 'menu.videos'), $this);?>
</span></a></li>
                <li<?php if ($this->_tpl_vars['menu'] == 'home'): ?> id="current"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['relative']; ?>
/"><span><?php echo smarty_function_translate(array('c' => 'menu.home'), $this);?>
</span></a></li>				
			</ul>
			</div>
			<div class="clear_left"></div>
        </div>
        <div class="clear"></div>
        <div id="submenu">
            <div id="upload">
                <a href="<?php echo $this->_tpl_vars['relative']; ?>
/upload"><?php echo smarty_function_translate(array('c' => 'menu.upload'), $this);?>
</a>
            </div>
            <div id="search">
                <form name="search" id="search_form" method="get" action="<?php echo $this->_tpl_vars['relative']; ?>
/search">
                    <input name="search_query" type="text" id="search_query" value="<?php if (isset ( $this->_tpl_vars['search_query'] )): ?><?php echo $this->_tpl_vars['search_query']; ?>
<?php endif; ?>" />
                    <select class="searchselect" name="search_type" id="search_type">
                        <option value="videos"<?php if (isset ( $this->_tpl_vars['search_type'] ) && $this->_tpl_vars['search_type'] == 'videos'): ?> selected="yes"<?php endif; ?>><?php echo smarty_function_translate(array('c' => 'global.videos'), $this);?>
</option>
                        <?php if ($this->_tpl_vars['photo_module'] == '1'): ?><option value="photos"<?php if (isset ( $this->_tpl_vars['search_type'] ) && $this->_tpl_vars['search_type'] == 'photos'): ?> selected="yes"<?php endif; ?>><?php echo smarty_function_translate(array('c' => 'global.photos'), $this);?>
</option><?php endif; ?>
                        <?php if ($this->_tpl_vars['game_module'] == '1'): ?><option value="games"<?php if (isset ( $this->_tpl_vars['search_type'] ) && $this->_tpl_vars['search_type'] == 'games'): ?> selected="yes"<?php endif; ?>><?php echo smarty_function_translate(array('c' => 'global.games'), $this);?>
</option><?php endif; ?>
                        <option value="users"<?php if (isset ( $this->_tpl_vars['search_type'] ) && $this->_tpl_vars['search_type'] == 'users'): ?> selected="yes"<?php endif; ?>><?php echo smarty_function_translate(array('c' => 'global.users'), $this);?>
</option>
                    </select>
                    <input type="submit" value="<?php echo smarty_function_t(array('c' => 'ajax.search'), $this);?>
" class="searchbutton" maxlength="50" />
                    <span class="span_search">[ <a href="<?php echo $this->_tpl_vars['relative']; ?>
/search" rel="nofollow" id="advanced_search" class="submenulink"><?php echo smarty_function_translate(array('c' => 'menu.advanced'), $this);?>
</a> ]</span>
                </form>
            </div>
            <?php if ($this->_tpl_vars['submenu_tag_scroller'] == '1'): ?>
            <div id="scroller">
                <div id="scroller_title">
                <?php echo smarty_function_translate(array('c' => 'menu.tags'), $this);?>
:
                </div>
                <div id="scroller_container">
                    <div class="jscroller2_left" style="font-size: 13px; line-height:15px; white-space:nowrap; margin: 0;">
                    <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['scroller_content']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                        <a class="submenulink" href="<?php echo $this->_tpl_vars['relative']; ?>
/search?search_query=<?php echo $this->_tpl_vars['scroller_content'][$this->_sections['i']['index']]; ?>
&amp;search_type=videos"><?php echo ((is_array($_tmp=$this->_tpl_vars['scroller_content'][$this->_sections['i']['index']])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</a>
                    <?php endfor; endif; ?>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <?php endif; ?>
            <div class="clear"></div>
        </div>
		<div id="language_select" style="margin-top: 5px; display: none;">
			<div class="box" id="language_container"></div>
		</div>
        <div id="loading_advanced_search" class="response_full" style="display: none;">Loading...</div>
        <div id="search_advanced" style="margin-top: 5px; display: none;">
            <div class="box" id="advanced_search_container"></div>
        </div>
    </div>
                  <!-- end of header -->