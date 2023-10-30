<?php
	#   Author of the script
	#   Name: Ezra Adamu
	#   Email : ezra00100@gmail.com
	#   Date created: 29/06/2022
	#   Date modified: 07/07/2022 

	include_once( 'App.php' );
	include_once( 'Encryption.php' );
	include_once( 'FileUpload.php' );
 
	class Applicant
	{
		// Using Namespaces
		use App, Encryption, FileUpload;

		protected $table = '';
		const DB_TABLE = 'applicants';

		function __construct()
	 	{
	 		$this->table = self::DB_TABLE;
	 	}

		function getLoggedApplicant()
		{
			$app_id = '';
				
			if ( isset( $_COOKIE[ 'app_id' ] ) ) 
			{
				$app_id = $_COOKIE[ 'app_id' ];
			}

			return $app_id;
		}

		function getLogin( array $dt ) 
		{
			$sql = "SELECT * FROM $this->table WHERE app_no = ?";
			$res = $this->fetchData( $sql, $dt );

			if ( $res ) 
			{
				return $res;
			}
		}

		function addNew( array $dt ) 
		{	
			$sql = "INSERT INTO $this->table ( app_no, session_id, first_name, middle_name, last_name, pword, gender, email, phone_no, dept_id, study_mode ) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? )";
			$res = $this->runQuery( $sql, $dt );
			
			// checking result 
			if ( $res ) 
			{
	        	return $res;
	     	}
			  
		}

	   function getById( array $dt )
	   {

			$sql = "SELECT * FROM $this->table WHERE id = ?";
			$res = $this->runQuery_1( $sql, $dt );

			//checking result 
			if ( $res ) 
			{
	        	return $res;
	      }

		}

		function updateById( array $dt ) 
		{	
			$sql = "UPDATE $this->table SET gender = ?, phone_no = ?, marital_status = ?, dob = ?, state_id = ?, lga_id = ?, address = ?, nk_full_name = ?, nk_relationship = ?, nk_email = ?, nk_phone_no = ?, nk_address = ?, dept_id = ?, study_mode = ?, signature = ? WHERE id = ?";
			//$res = $this->runQuery_2( $sql, $dt );
			$res = $this->runQuery( $sql, $dt );

			//checking result 
			if ( $res ) 
			{
	        	return $res;
	      }
		}

		function updateImgById( array $dt ) 
		{	
			$sql = "UPDATE $this->table SET img = ? WHERE id = ?";
			$res = $this->runQuery_2( $sql, $dt );

			//checking result 
			if ( $res ) 
			{
	        	return $res;
	      }
		}

		function getTotalCount( array $dt ) 
		{
			$sql = "SELECT COUNT( id ) AS total FROM $this->table WHERE session_id = ?";
			$res = $this->fetchData( $sql, $dt );

			if ( $res ) 
			{
				return $res['total'];
			}
		}


	   function getByAppNo( array $dt ){

			$sql = "SELECT * FROM $this->table WHERE app_no = ?";
			$res = $this->runQuery_1( $sql, $dt );

			//checking result 
			if ( $res ) 
			{
	        	return $res;
	      }

		}

		function generateAppNo( array $dt )
		{
			$str = $this->getTotalCount( $dt ) + 1;
			$len = 4;
			$str_len = strlen( $str );
			$zeros = '';

			if ( $str_len < $len ) 
			{
				$len = $len - $str_len;

				for ( $i = 1; $i <= $len ; $i++ ) 
				{ 
					$zeros .= '0';
				}
			}

			$app_no = 'CCOHT-';
			$app_no .= date( 'y-' );
			$app_no .= $zeros . $str;

			return $app_no;
		}

		function getPwordReset( array $dt ) 
		{
			$sql = "SELECT * FROM $this->table WHERE app_no = ? OR email = ?";
			$res = $this->fetchData( $sql, $dt );

			if ( $res ) 
			{
				return $res;
			}
		}

		function updatePwordById( array $dt ) 
		{	
			$sql = "UPDATE $this->table SET pword = ? WHERE id = ?";
			$res = $this->runQuery_2( $sql, $dt );

			//checking result 
			if ( $res ) 
			{
	        	return $res;
	      }
		}


	   function getByEmail( array $dt )
	   {

			$sql = "SELECT * FROM $this->table WHERE email = ?";
			$res = $this->runQuery_1( $sql, $dt );

			//checking result 
			if ( $res ) 
			{
	        	return $res;
	      }

		}

	}

?>