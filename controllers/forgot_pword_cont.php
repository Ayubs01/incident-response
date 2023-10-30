<?php 
	#   Author of the script
   #   Name: Ezra Adamu
   #   Email : ezra00100@gmail.com
   #   Date created: 12/07/2022
   #   Date modified: 12/07/2022 
	
	$msg = '';

	include_once( 'models/Applicant.php' );
	// Creating applicant instances
	$app = new Applicant(); 

	if ( isset( $_POST[ 'reset_btn' ] ) ) 
	{
		// Getting user input
		$app_no = $_POST[ 'app_no' ];

		// Validating input
		if ( $app_no ) 
		{
			exit();
			$dt_01 = [ $app_no, $app_no ];
			$app_dt = $app->getPwordReset( $dt_01 );
			
			if ( $app_dt )
			{
				$id = $app_dt[ 'id' ];

				// Encrypt applicant password
				$pword = 1;	
				$enc_pword = $app->encPword( $pword );

				// Collect data into array respectively to db fields
				$dt_02 = [ $enc_pword, $id ];
				// Update applicant 
			   $res_02 = $app->updatePwordById( $dt_02 );

	        	if ( $res_02 ) 
	        	{
	      		$msg = $web_app->showAlertMsg( 'success', 'Applicant Update Successful!' );
	        	} 
	        	else 
	        	{	
	      		$msg = $web_app->showAlertMsg( 'danger', 'Sorry, Applicant Update Failed!' );
	        	}
			}
		}
		else 
		{  
			$msg = $web_app->showAlertMsg( 'info', 'Please, Enter App Number/E-mail.' ); 	
		}
	}

	//Forgot Password interface
	include_once( 'views/forgot_pword.php' );

 ?>