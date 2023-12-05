<?php 
   #   Author of the script
   #   Name: Ayuba Adamu
   #   Email : adamujob71@gmail.com
   #   Date created: 01/09/2023
   #   Date modified: 10/11/2023  

   //auth
   include_once( 'app_auth.php' );

   //App Functions
   include_once( 'models/Incident.php' );
   include_once( 'models/Student.php' );

   //Creating instances;
   $incident = new Incident();
   $student = new Student();

   //fetch data
   $incident_arr = $incident->getAll( [] );
//    print_r($incident_arr);
//    exit();

   if ( !$incident_arr )
   {
       $msg = $web_app->showAlertMsg( 'danger', 'Sorry, No Records!' );
   }

	//Incident history interface
	include_once( 'views/incident_history.php' );

 ?>