<?php 


define("DD", realpath(__DIR__ . "/.."));

require DD . "/vendor/autoload.php";
require DD . "/app/bootstrap.php";

// URI Formatting
$request_uri = $_SERVER['REQUEST_URI'];
$script_name = $_SERVER['SCRIPT_NAME'];

/*var_dump($request_uri);
var_dump($script_name);
*/

$e_request_uri = explode("/", $request_uri);
$e_script_name = explode("/", $script_name);

/*var_dump($e_request_uri);
var_dump($e_script_name);*/


$request_uri = array_diff($e_request_uri, $e_script_name);
$o_request_uri = array_values($request_uri);

/*//var_dump($request_uri);
var_dump($o_request_uri);
//die();*/

// get controller from uri
if(empty($o_request_uri)) {
	$route = "/";
} 
else {
	$route = $o_request_uri[0];
}

// get route definition
$routes = include DD . "/app/routes.php";

// Route Resolving
if(array_key_exists($route, $routes)) {
	array_shift($o_request_uri); // remove controller
	if(Helper::is_routeWithParameters($routes, $route) == Helper::is_uriWithPareamenters($o_request_uri))
	{
		$e_routes = explode("@", $routes[$route]['controller']);
		call_user_func_array([new $e_routes[0], $e_routes[1]], $o_request_uri);
	} 
	else {
		echo "404";
	}
} 
else {
	echo "404";
}


/*use Wpa25\App\Application;
use Wpa25\App\LogFactory;

$log = new LogFactory();
$logFile = $log->getLog('file', ["test"]);
$logFile->write("test", "Hello World!");
$logMysql = $log->getLog("mysql", ["test"]);
$logMysql->write(['name' , 'address'] , ['Ko Ko','8 miles']);*/
/*$logFile = $log->getLog('file', ["test"]);
$logFile->write("test", "Hello World!");*/

/*$students= DB::table("students")->select("name")->order("name" , "asc")->get();

foreach($students as $student)
{
	echo "<br>";
	echo $student['name'] . "<br>";
	echo "<br>";
}*/
/*$students= DB::table("students")->get();

foreach($students as $student)
{
	echo $student['id'] . "<br>";
	echo $student['name'] . "<br>";
	echo $student['address'] . "<br>";
}*/



/*DB::table("students")->insert([

	'address' => "Myanmar",
	'name' => 'Raveer'	
	
	]);*/

/*DB::table("stocks")->insert([

	'price' => "$5300",
	'name' => "Nitendo 8+"	
	
	]);
*/
/*DB::table("students")->delete([

	'name' => "Sai Soe"

	]);*/
/*DB::table("students")->filter("and")->where([ 'name' => 'Burma', 'id' => '83' ])->update(['address' => "Heldan"]);*/
/*DB::table("students")->where([ 'name' => 'kyaw kyaw'])->update(['address' => "Taungyi"]);
/*DB::table("students")->update([
	'name' => "John",
	'address' => "London"


	]);*/

/*$students= DB::table("students")->select("name","address")->search()->where([ 'address' => 'H'])->get();
foreach($students as $student)
{
	echo "<br>";
	echo $student['name'] . "<br>";
	echo $student['address'] . "<br>";
	echo "<br>";
}*/
	/*$students= DB::table("students")->select("name")->where(["address" => "Heldan"])->order("name" , "asc")->get();
	foreach($students as $student)
	{
		echo "<br>";
		echo $student['name'] . "<br>";
		echo "<br>";
	}*/
/*$students= DB::table("students")->paginate(2,5)->get();
foreach($students as $student)
	{
		echo "<br>";
		echo "<h1>Page 1</h2>";
		echo $student['name'] . "<br>";
		echo $student['address'] . "<br>";
		echo "<br>";
	}*/

/*$students= DB::table("students")->paginate(2)->get();
foreach($students as $student)
	{
		echo "<br>";
		echo "<h1>Page 2</h2>";
		echo $student['name'] . "<br>";
		echo $student['address'] . "<br>";
		echo "<br>";
	}

$students= DB::table("students")->paginate(3)->get();
foreach($students as $student)
	{
		echo "<br>";
		echo "<h1>Page 3</h2>";
		echo $student['name'] . "<br>";
		echo $student['address'] . "<br>";
		echo "<br>";
	}*/
 ?>