<?php 
// ($data = null) means if there is no value passing with data null value is used if not data value is used.
function get_view($page, $data = null) {
	$file = "../app/view/" . $page . ".php";
	if(file_exists($file)) {
		
		/* we should use outputbuffering becoz we need to show entire webpage to the user after all content is available. outputbuffering solve this problem. */

		ob_start();    
		if($data != null) {
			extract($data);
		}
		require $file;	
		ob_end_flush();
	} else {
		trigger_error("You need to add view in view folder, Idiot!", E_USER_ERROR);
	}
}

 ?>