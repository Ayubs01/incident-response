<?php 
   #   Author of the script
   #   Name: Ayuba Adamu
   #   Email : adamujob71@gmail.com
   #   Date created: 01/09/2023
   #   Date modified: 26/10/2023  

   //auth
   include_once( 'app_auth.php' );

   //App Functions
   include_once( 'models/Student.php' );
    
   $msg = '';
   //Creating instances;
   $student = new Student();

   //fetch data
   $user_data = $student->getAll( [] );

//    print_r($user_data);
//    exit();

   if ( !$user_data )
   {
       $msg = $web_app->showAlertMsg( 'danger', 'Sorry, No Records!' );
   }

	
	//Incident history interface
	include_once( 'views/incident_history.php' );

 ?>