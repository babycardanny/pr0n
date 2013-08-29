<?php /* Smarty version 2.6.20, created on 2013-08-29 02:04:16
         compiled from header.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <title>AVS Admin Control Panel</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <link href="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/css/style_admin.css" type="text/css" rel="stylesheet">
    <script type="text/javascript">
    var base_url = '<?php echo $this->_tpl_vars['baseurl']; ?>
';
    </script>
    <script type="text/javascript" src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/js/jquery-1.2.6.pack.js"></script>
    <script type="text/javascript" src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/js/jquery.corner.js"></script>
    <script type="text/javascript" src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/js/jquery.livequery.pack.js"></script>
    <?php if (isset ( $this->_tpl_vars['crop'] )): ?><script type="text/javascript" src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/js/jquery.album-0.1.js"></script>
    <script type="text/javascript" src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/js/jquery.imgareaselect-0.6.1.min.js"></script>
    <?php endif; ?>
    <?php if (isset ( $this->_tpl_vars['editor'] )): ?>
    <script type="text/javascript" src="<?php echo $this->_tpl_vars['baseurl']; ?>
/addons/markitup/jquery.markitup.js"></script>
    <script type="text/javascript" src="<?php echo $this->_tpl_vars['baseurl']; ?>
/addons/markitup/sets/<?php echo $this->_tpl_vars['editor_set']; ?>
/set.js"></script>    
    <link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/addons/markitup/skins/<?php echo $this->_tpl_vars['editor_skin']; ?>
/style.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['baseurl']; ?>
/addons/markitup/sets/<?php echo $this->_tpl_vars['editor_set']; ?>
/style.css" />
    <?php endif; ?>
    <script type="text/javascript" src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/js/jquery.admin-0.1.js"></script>

</head>
<div id="container">
    <div id="header">
        <img src="<?php echo $this->_tpl_vars['relative_tpl']; ?>
/images/avs_admin_logo.gif" style="margin-left: 15px;">
        <div id="menu">
        <ul>
			<?php if ($this->_tpl_vars['multi_server'] == '1'): ?>
            <li><?php if ($this->_tpl_vars['active_menu'] == 'servers'): ?><span>Servers</span><?php else: ?><a href="servers.php">Servers</a><?php endif; ?></li>
			<?php endif; ?>
            <li><?php if ($this->_tpl_vars['active_menu'] == 'notice'): ?><span>Notices</span><?php else: ?><a href="notices.php">Notices</a><?php endif; ?></li>
            <li><?php if ($this->_tpl_vars['active_menu'] == 'channels'): ?><span>Categories</span><?php else: ?><a href="channels.php">Categories</a><?php endif; ?></li>
            <li><?php if ($this->_tpl_vars['active_menu'] == 'users'): ?><span>Users</span><?php else: ?><a href="users.php">Users</a><?php endif; ?></li>
            <li><?php if ($this->_tpl_vars['active_menu'] == 'games'): ?><span>Games</span><?php else: ?><a href="games.php">Games</a><?php endif; ?></li>
            <li><?php if ($this->_tpl_vars['active_menu'] == 'blogs'): ?><span>Blogs</span><?php else: ?><a href="blogs.php">Blogs</a><?php endif; ?></li>
            <li><?php if ($this->_tpl_vars['active_menu'] == 'albums'): ?><span>Albums</span><?php else: ?><a href="albums.php">Albums</a><?php endif; ?></li>
            <li><?php if ($this->_tpl_vars['active_menu'] == 'videos'): ?><span>Videos</span><?php else: ?><a href="videos.php">Videos</a><?php endif; ?></li>
            <li><?php if ($this->_tpl_vars['active_menu'] == 'index'): ?><span>Settings</span><?php else: ?><a href="index.php">Settings</a><?php endif; ?></li>
        </ul>
        </div>
    </div>
    <div id="content">