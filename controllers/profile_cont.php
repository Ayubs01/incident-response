<?php 
   #   Author of the script
   #   Name: Ayuba Adamu
   #   Email : adamujob71@gmail.com
   #   Date created: 01/09/2023
   #   Date modified: 26/10/2023 

   //auth
	include_once( 'app_auth.php' );

   include_once( 'models/Student.php' );
   //Creating instances
   $student = new Student();

   $msg='';

   $student_data = $student->getById( [ $app_id ] );
   $full_name = $student_data[ 'full_name' ];
   $matric_no = $student_data[ 'matric_no' ];
   $email = $student_data[ 'email' ];
   $phone_no = $student_data[ 'phone_no' ];
    // print_r($full_name);
    // exit();

	// Profile interface
	include_once( 'views/profile.php' );

 ?>