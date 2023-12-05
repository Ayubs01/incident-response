<?php 
   #   Author of the script
   #   Name: Ayuba Adamu
   #   Email : adamujob71@gmail.com
   #   Date created: 01/09/2023
   #   Date modified: 10/11/2023 

   //auth
	include_once( 'app_auth.php' );

   include_once( 'models/Student.php' );
   //Creating instances
   $student = new Student();

   if ( isset( $_POST['edit_btn'] ) ) 
	{
		$full_name = $_POST['full_name'];
		$matric_no = $_POST['matric_no'];
		$phone_no = $_POST['phone_no'];

		if ( $full_name && $matric_no && $phone_no ) 
		{
			$dt_01 = [ $full_name, $matric_no, $phone_no, $app_id ];

			$update_student = $student->updateById( $dt_01 );

			if ( $update_student ) 
			{
				$msg = $web_app->showAlertMsg( 'success', 'Profile Updated' );
			} 
			else 
			{
				$msg = $web_app->showAlertMsg( 'danger', 'Profile Not Updated!' );
			}
			
		} 
		else 
		{
			$msg = $web_app->showAlertMsg( 'danger', 'Please, Enter all Fields!' );
		}
		
	}

	if ( isset( $_POST['change_btn'] ) ) 
	{
		$password = $_POST['new_password'];
		$re_password = $_POST['renew_password'];

		if ( $password && $re_password  ) 
		{
			if ( $password == $re_password ) 
			{
				$password_hash = $student->encPword( $password );

				$dt_01 = [ $password_hash, $app_id ];
				$update_password = $student->updatePasswordById( $dt_01 );

				if ( $update_password ) 
				{
					$msg = $web_app->showAlertMsg( 'success', 'Password Updated' );
					$clear = true;
				} 
				else 
				{
					$msg = $web_app->showAlertMsg( 'danger', 'Password Not Updated!' );
				}
			} 
			else 
			{
				$msg = $web_app->showAlertMsg( 'danger', "Passwords Doesn't Match!" );
			}			
		} 
		else 
		{
			$msg = $web_app->showAlertMsg( 'danger', 'Please, Enter all Fields!' );
		}
		
	}

   $student_data = $student->getById( [ $app_id ] );
   $full_name = $student_data[ 'full_name' ];
   $matric_no = $student_data[ 'matric_no' ];
   $email = $student_data[ 'email' ];
   $phone_no = $student_data[ 'phone_no' ];
 
	// Profile interface
	include_once( 'views/profile.php' );

 ?>