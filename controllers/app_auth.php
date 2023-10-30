<?php 
   #   Author of the script
   #   Name: Ayuba Adamu
   #   Email : adamujob71@gmail.com
   #   Date created: 01/09/2023
   #   Date modified: 26/10/2023

   if( session_status() == PHP_SESSION_NONE )
   {
      session_start();    
   }

   include_once( 'models/Student.php' );
   
   // Creating student instances
   $app = new Student(); 
   $app_id = $app->getLoggedApplicant();

   // When not logged in
   if ( !$app_id ) 
   {
      header( "Location: ./", true, 301 );
      exit();
   }

?>