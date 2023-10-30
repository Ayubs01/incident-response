<?php 
   #   Author of the script
   #   Name: Ayuba Adamu
   #   Email : adamujob71@gmail.com
   #   Date created: 01/09/2023
   #   Date modified: 26/10/2023 

	const ENVIRONMENT = 'Test';//Test Live

   //DB Config
	const HOST = 'localhost';
	const USER = 'root';
	const PWORD = '';
	const DB = 'ir_db';

	$msg = '';
	$clear = false;
	$website_title = 'Incident Response';
	$test_email = 'adamujob71@gmail.com';

	const APP_SESS = 'student_id';
	const APP_SESS_TIME = 3500;
	
	$js_modules = [ 'app' ];

	//url
   $server_name = ENVIRONMENT == 'Test' ? 'http://' : 'https://';
   $server_name .= $_SERVER['SERVER_NAME'];
   $uri = $_SERVER['REQUEST_URI'];
   $app_url = ( strlen( $uri ) > 1 ) ? "$server_name$uri" : "$server_name";

   //directory
   $root_dir = dirname( __DIR__ );
   $cur_dir = dirname( __FILE__ );
   //echo getcwd();

   //$upload_dir = "$cur_dir/uploads";
   //$upload_url = "$server_name/uploads";
   //$server_name_2 = 'http://';
   //$upload_dir = '../uploads';
   //$upload_url = "$server_name_2/uploads";
?> 