<?php 
	#   Author of the script
	#   Name: Ezra Adamu
	#   Email: ezra00100@gmail.com
	#   Date created: 28/05/2023 
	#   Date modified: 10/11/2023 

	const ENVIRONMENT = 'Test';//Test Live

	//DB Config
	const HOST = 'localhost';
	const USER = 'root';
	const PWORD = '';
	const DB = 'ir_db';

	$website_title = 'Incident Response';
	$apply_url = 'http://ir.test';

	const APP_SESS = 'app_id';
	const APP_SESS_TIME = 3500;
	
	//url
   $server_name = ENVIRONMENT == 'Test' ? 'http://' : 'https://';
   $server_name .= $_SERVER['SERVER_NAME'];
   $uri = $_SERVER['REQUEST_URI'];
   $app_url = ( strlen( $uri ) > 1 ) ? "$server_name$uri" : "$server_name";

   //directory
   $root_dir = dirname( __DIR__ );
   $cur_dir = dirname( __FILE__ );
	//echo getcwd();

	$upload_dir = "$cur_dir/uploads";
	//$upload_url = "$server_name/uploads";
	$upload_url = "$apply_url/uploads";

	$test_email = '';
	$msg = '';
	$clear = false;
	$is_admin = false;
	$curr_year = $_SESSION[ 'curr_year' ] ?? date( 'Y' );
?> 