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

   // Creating student instances
	$incident = new Incident(); 

   if ( isset( $_POST[ 'report_btn' ] ) )
	{
		// Getting user input
		$incident_date = $_POST[ 'inc_date' ];
		$incident_category = $_POST[ 'inc_category' ];
		$description = $_POST[ 'description' ];
		// $lat = $_POST[ 'lat' ];
		// $lng = $_POST[ 'lng' ];
		$image = $_FILES[ 'file' ];
		// Validating input
		if ( $app_id && $incident_category && $description && $incident_date )
		{
			//upload image
			$img_dir = "$upload_dir/students/";
			$img_upload = $incident->imageUpload( $img_dir, $image );

			if ( $img_upload[ 0 ] ) 
			{
				$img_file =  $img_upload[ 1 ];
				
				$curr_date = $curr_year . date('-m-');
				$curr_date .= date("d");
				$dt_01 = [ "%$curr_date%" ];
				
				$check_attempt = $incident->getCount2( $dt_01 );
				
				if ( $check_attempt >= 3 )
				{
					$msg = $web_app->showAlertMsg( 'danger', 'Sorry, Try After 24 Hours!' );
				}
				else
				{
					// Collect data into array respectively to db fields
					$dt_01 = [ $app_id, $incident_category, $incident_date, $description, $img_file ];

					$add_incident = $incident->addNew( $dt_01 );
					if ( $add_incident  ) 
					{
						$clear = true;
						$msg = $web_app->showAlertMsg( 'success', 'Report Added Successful!' );
					}
					else
					{
						$msg = $web_app->showAlertMsg( 'danger', 'Sorry, Failed to Add Report!' );
					}
				}

			}
			else
			{
				$msg = $web_app->showAlertMsg( 'danger', $img_upload[ 1 ] );
			}
							 
		}
		else 
		{
			$msg = $web_app->showAlertMsg( 'danger', 'Please, Enter Required Data!' );
		}
	}
	
	//Incident details interface
	include_once( 'views/incident_details.php' );

 ?>