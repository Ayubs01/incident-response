<?php
   #   Author of the script
   #   Name: Ezra Adamu
   #   Email : ezra00100@gmail.com
   #   Date created:	02/05/2022
   #   Date modified: 02/05/2022  

	include_once( 'App.php' );
	include_once( 'Validation.php' );

	class Contact{
		//using App class
		use App, Validation;

		function getContactDataByEmail( array $dt ) 
		{
			$sql = 'SELECT * FROM contacts WHERE email = ?';
			$res = $this->runQuery_1 ( $sql, $dt );
			if ( $res ) 
			{
				return $res;

			}
		}
		
	    function addNew( array $dt ) 
	    {	
			$sql = 'INSERT INTO contacts( name, email, phone_no, subject, msg) VALUES( ?, ?, ?, ?, ? )';
			$res = $this->runQuery( $sql, $dt );
			
			//checking result 
			if ( $res ) 
			{
	        	return $res;
	      }
	  
	    }
			 
	}

?>