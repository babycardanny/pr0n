<?php
defined('_VALID') or die('Restricted Access!');

require $config['BASE_DIR']. '/classes/filter.class.php';
require $config['BASE_DIR']. '/classes/validation.class.php';
require $config['BASE_DIR']. '/classes/email.class.php';
require $config['BASE_DIR']. '/include/compat/json.php';
require $config['BASE_DIR']. '/include/adodb/adodb.inc.php';
require $config['BASE_DIR']. '/include/dbconn.php';

$data   = array('status' => 0, 'msg' => '', 'debug' => '');
if ( isset($_POST['item_id']) ) {
    $filter     = new VFilter();
    $game_id    = $filter->get('item_id', 'INTEGER');
    $from       = $filter->get('from');
    $to         = $filter->get('to');
    $message    = $filter->get('message');
    
    $from       = ereg_replace('[^ 0-9a-zA-Z,@.]', '', $from);
    $to         = ereg_replace('[^ 0-9a-zA-Z,@.]', '', $to);
    $to         = str_replace(',', ' ', $to);
    $to         = preg_replace('/\s\s+/', ' ', $to);
    $to         = str_replace("\r", '', $to);
    $to         = str_replace("\n", '', $to);
    $to         = explode(' ', $to);
    if ( !$to ) {
        $data['msg']    = $lang['ajax.share_recipient'];
    } else {
        $emails         = array();
        $users          = array();
        $valid          = new VValidation();
        foreach ( $to as $key => $value ) {
            if ( $valid->email($value) ) {
                $emails[]   = $value;
            } elseif ( $valid->usernameExists($value) ) {
                $users[]    = $value;
            }
        }
        
        if ( $users ) {
            $sql_add    = array();
            foreach ( $users as $user ) {
                $sql_add[] = "'" .mysql_real_escape_string($user). "'";
            }
            $sql            = "SELECT email FROM signup WHERE username in (" .implode(',', $sql_add). ")";
            $rs             = $conn->execute($sql);
            $users_emails   = $rs->getrows();
            foreach ( $users_emails as $user ) {
                $emails[] = $user['email'];
            }
        }
        
        if ( !$emails ) {
            $data['msg']    = $lang['ajax.share_recipient_valid'];
        } else {
            $sql                = "SELECT title FROM game WHERE GID = " .$game_id. " LIMIT 1";
            $rs                 = $conn->execute($sql);
            if ( $conn->Affected_Rows() == 1 ) {
                $title          = $rs->fields['title'];
				$url			= '<a href="'.$config['BASE_URL']. '/game/' .$game_id. '/' .prepare_string($title).'">'.$config['BASE_URL']. '/game/' .$game_id. '/' .prepare_string($title).'</a>';
				$search			= array('{$site_name}', '{$site_title}', '{$sender_name}', '{$message}', '{$baseurl}', '{$game_link}');
				$replace		= array($config['site_name'], $config['site_title'], $from, $message, $config['BASE_URL'], $url);
				$mail			= new VMail();
				$mail->sendPredefined($emails, 'share_game', $search, $replace);
                $data['status'] = 1;
                $data['msg']    = $lang['ajax.share_success'];
            } else {
                $data['msg']    = $lang['ajax.share_game_failed'];
            }
        }
    }
}

echo json_encode($data);
die();
?>
