<?php 
require DD . "/vendor/autoload.php";

class Log_Mysql implements LogInterface {
	public function __construct() {
		echo "Log MySQL Con! <br />";
	}
	public function write($key , $value) {
		$data =[];
		for($i=0 ; $i<sizeof($key) ; $i++ )
		{
			$data += [ $key[$i] => $value[$i] ] ;
		}
		
		var_dump($data);	
				
		
		DB::table("students")->insert($data);
		}

	
	public function read($key) {
	}
	public function contain($key) {
	}
	public function remove($key) {
	} 
	public function __destruct() {
		echo "Yay! MySQL Gone! <br />";
	}
 }
 ?>