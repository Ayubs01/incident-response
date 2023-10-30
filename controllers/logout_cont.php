<?php 
   #   Author of the script
   #   Name: Ayuba Adamu
   #   Email : adamujob71@gmail.com
   #   Date created: 01/09/2023
   #   Date modified: 26/10/2023 

	// clearing all 
	$_SESSION = [];
	$_COOKIE = [];
	session_destroy();
	
	setcookie( 'app_id','',( time() - 3500 ) );
	
	header( "Location: ./login", true, 301 );
   exit();

?>