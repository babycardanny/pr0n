<?php
//die('Only enable this script if you dont have support for MultiViews');
$relative = '';
$loaders  = array(
    'ajax' => 1,
    'album' => 1,
    'albums' => 1,
    'blog' => 1,
    'blogs' => 1,
    'captcha' => 1,
    'categories' => 1,
    'community' => 1,
    'confirm' => 1,
    'error' => 1,
    'feedback' => 1,
    'feeds' => 1,
    'game' => 1,
    'games' => 1,
    'index' => 1,
    'invite' => 1,
    'loader' => 1,
    'login' => 1,
    'logout' => 1,
    'lost' => 1,
    'mail' => 1,
    'notice' => 1,
    'notices' => 1,
    'photo' => 1,
    'requests' => 1,
    'search' => 1,
    'signup' => 1,
    'static' => 1,
    'stream' => 1,
    'upload' => 1,
    'user' => 1,
    'users' => 1,
    'video' => 1,
    'videos' => 1,
	'edit' => 1
);

$query      = ( isset($_SERVER['QUERY_STRING']) ) ? $_SERVER['QUERY_STRING'] : NULL;
$request    = str_replace($relative, '', $_SERVER['REQUEST_URI']);
$request    = str_replace('?' .$query, '', $request);
$request    = explode('/', trim($request, '/'));
echo $request[1] . ' ' . $request[1];
if (isset($request['1'])) {
    $page   = $request['1'];
    echo $page . '.php';

   if (isset($loaders[$page])) {
        require $relative . '/' . $page . '.php';
    } else {
		header('HTTP/1.0 404 Not Found');
  		die();
	}
} else {
	header('HTTP/1.0 404 Not Found');
    die();
}
?>
