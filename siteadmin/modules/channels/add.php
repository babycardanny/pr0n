<?php
defined('_VALID') or die('Restricted Access!');

Auth::checkAdmin();

$chimg = $config['BASE_DIR']. '/media/categories/video';
if ( !file_exists($chimg) or !is_dir($chimg) or !is_writable($chimg) ) {
    $errors[] = 'Category image directory \'' .$chimg. '\' is not writable!';
}

$channel = array('name' => '', 'desc' => '');
if ( isset($_POST['add_channel']) ) {
    $name   = trim($_POST['name']);
    
    if ( $name == '' ) {
        $errors[] = 'Category name field cannot be blank!';
    } else {
        $sql        = "SELECT CHID FROM channel WHERE name = '" .mysql_real_escape_string($name). "' LIMIT 1";
        $conn->execute($sql);
        if ( $conn->Affected_Rows() > 0 ) {
            $errors[]   = 'Category name \'' .htmlspecialchars($name, ENT_QUOTES, 'UTF-8'). ' is already used. Please choose another name!';
        } else {
            $channel['name'] = $name;
        }
    }
    
    if ( $_FILES['picture']['tmp_name'] == '' )
        $errors[] = 'Please provide a category image!';
    
    if ( !$errors ) {
        $sql = "INSERT INTO channel (name) VALUES ('" .mysql_real_escape_string($name). "')";
        $conn->execute($sql);
        $chid = $conn->Insert_ID();
        require $config['BASE_DIR']. '/classes/image.class.php';
        $image = new VImageConv();
        $image->process($_FILES['picture']['tmp_name'], $chimg. '/' .$chid. '.jpg', 'MAX_WIDTH', 140, 105);
        $image->canvas(140, 105, '000000', true);

        if ( $errors ) {
            $sql = "DELETE FROM channel WHERE CHID = '" .mysql_real_escape_string($chid). "' LIMIT 1";
            $conn->execute($sql);
        }
    }
    
    if ( !$errors ) {
        $msg = 'Category Successfuly added!';
	VRedirect::go('channels.php?msg=' .$msg);
    }
}

$smarty->assign('channel', $channel);
?>
