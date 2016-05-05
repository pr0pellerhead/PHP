<?php 
include 'usercheck.php';

$controller = 'controllers/dashboard.php';
$view = 'views/dashboard.php';

if(isset($_GET['page']) && strlen($_GET['page']) > 0){
	
	$controller = 'controllers/'.$_GET['page'].'.php';
	$view = 'views/'.$_GET['page'].'.php';
}

include 'views/navigation.php';

if(file_exists($controller)){
	include 'db.php';
	include $controller;
}

if(file_exists($view)){
	include $view;
}

?>