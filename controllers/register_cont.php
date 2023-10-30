<?php 
	#   Author of the script
	#   Name: Ayuba Adamu
	#   Email : adamujob71@gmail.com
	#   Date created: 01/09/2023
	#   Date modified: 26/10/2023 

	//App functions
include_once( 'models/Student.php' );
		//Creating instances
$student = new Student();

$msg = '';

	//login button logic
if ( isset( $_POST['reg_btn'] ) ) 
{
	$full_name = $_POST['full_name'];
	$email = $_POST['email'];
	$matric_no = $_POST['matric_no'];
	$phone_no = $_POST['phone_no'];
	$pword = $_POST['pword'];
	$con_pword = $_POST['con_pword'];
		// print_r($_POST);
		// exit();
	$image = $_FILES[ 'img' ];
			//Validating all Data
	if ( $full_name && $matric_no && $email && $phone_no && $pword && $con_pword ) 
	{

		$dt_01 = [$email];
		$user_data = $student->getByEmail( $dt_01 );
		if (!$user_data) 
		{
			//Match password
			if ( $pword == $con_pword ) 
			{
				$check_pword_length =  strlen( $pword);
				if ( $check_pword_length > 8 ) 
				{
					//Hash password
					$hs_pword = $student->encPword( $pword );
					//upload image
					$img_dir = "$upload_dir/students/img";
					$img_upload = $student->imageUpload( $img_dir, $image );

					if ( $img_upload[ 0 ] ) 
					{
						$img_file =  $img_upload[ 1 ];
						//Collect data to array respectively to db fields
						$dt_02 = [ $email, $matric_no, $hs_pword, $full_name, $phone_no, $img_file ];
						$add_student = $student->addNew( $dt_02 );

						if ( $add_student ) 
						{
							$msg = $web_app->showAlertMsg( 'success', 'Student Added Successful!' );
						}
						else
						{
							$msg = $web_app->showAlertMsg( 'danger', 'Sorry, Failed to Add Student!' );
						}

					}
					else
					{
						$msg = $web_app->showAlertMsg( 'danger', $img_upload[ 1 ] );
					}
				}
				else
				{
					$msg = $web_app->showAlertMsg( 'danger', 'Sorry, Your password must be at least 8 characters long, contain at least one number and have a mixture of uppercase and lowercase letters' );

				}

			}
			else
			{
				$msg = $web_app->showAlertMsg( 'danger', 'Sorry, Password Does Not Match!' );
			}

		} 
		else 
		{
			$msg = $web_app->showAlertMsg( 'danger', 'Email Already Exist!' );
		}

	} 
	else 
	{
		$msg = $web_app->showAlertMsg( 'danger', 'Please, Enter Required Data!' );
	}

}

		//Register interface
include_once( 'views/register.php' );


?>