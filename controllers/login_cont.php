<?php 
   #   Author of the script
   #   Name: Ayuba Adamu
   #   Email : adamujob71@gmail.com
   #   Date created: 01/09/2023
   #   Date modified: 26/10/2023 

	$msg = '';

	include_once( 'models/Student.php' );
	// Creating student instances
	$student = new Student(); 

	if ( isset( $_POST[ 'log_btn' ] ) ) 
	{
		// Getting user inputs
		$email = $_POST[ 'email' ];
		$pword = $_POST[ 'pword' ];

		// Validating inputs
		if ( $email && $pword ) 
		{
			$dt_01 = [ $email ];
			$app_dt = $student->getLogin( $dt_01 );
			$pword_x = $app_dt[ 'pword' ];
	
			// Match applicant password
			$match_pword = $student->decPword( $pword, $pword_x );

			if ( $match_pword ) 
			{  
				$id = $app_dt[ 'id' ];
				// Set session and cookie
				$time_out = time() + 3500;
				$_SESSION[ 'app_id' ] = $id;

				// Collect user id
				setcookie( 'app_id', $id ,  $time_out );

				// Redirect to dashboard
				header( "Location: ./incident_details", true, 301 );
				exit();
			} 
			else 
			{
				$msg = $web_app->showAlertMsg( 'danger', 'Sorry, Student Does Not Exist!' ); 
			}

		}
		else 
		{  
			$msg = $web_app->showAlertMsg( 'info', 'Please, Enter Username And Password.' ); 	
		}
	}

	//Login interface
	include_once( 'views/login.php' );

 ?>