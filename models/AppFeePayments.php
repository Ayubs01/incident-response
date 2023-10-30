<?php
	#   Author of the script
	#   Name: Ezra Adamu
	#   Email : ezra00100@gmail.com
	#   Date created: 29/06/2022
	#   Date modified: 11/07/2022 

	include_once( 'App.php' );
 
	class AppFeePayment
	{
		// Using Namespaces
		use App;

		protected $table = '';
		const DB_TABLE = 'app_fees_payments';

		function __construct()
	 	{
	 		$this->table = self::DB_TABLE;
	 	}

		function addNew( array $dt ) 
		{	
			$sql = "INSERT INTO $this->table ( app_id, session_id, invoice_id, amount, description ) VALUES ( ?, ?, ?, ?, ? )";
			$res = $this->runQuery( $sql, $dt );
			
			// checking result 
			if ( $res ) 
			{
	        	return $res;
	     	}
			  
		}

	   function getByAppId( array $dt)
	   {

			$sql = "SELECT * FROM $this->table WHERE app_id = ?";
			$res = $this->runQuery_1( $sql, $dt );

			//checking result 
			if ( $res ) 
			{
	        	return $res;
	      }

		}

	}

?>