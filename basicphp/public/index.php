<?php 
// $GLOBALS

require "../wpa25/functions.php";
require "../app/controller/controllers.php";

if (isset($_GET['page'])) {
	$page = $_GET['page'];
} else {
	$page = "home";
}
$controller = ucfirst($page) . "Controller"; //ucfirst = function for converting uppercase letter of first word.

if(function_exists($controller)) {
	$controller();	
} else {
	echo "404";
}


// $data = [
// 	'title'	=> 'Myanmar Links'
// ];
// get_view($page, $data);



 ?>