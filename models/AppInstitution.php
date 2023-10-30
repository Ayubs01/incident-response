<?php
	#   Author of the script
	#   Name: Ezra Adamu
	#   Email : ezra00100@gmail.com
	#   Date created: 11/07/2022
	#   Date modified: 11/07/2022 

	include_once( 'App.php' );
 
	class AppInstitution
	{
		// Using Namespaces
		use App;

		protected $table = '';
		const DB_TABLE = 'applicant_institutions';

		function __construct()
	 	{
	 		$this->table = self::DB_TABLE;
	 	}

		function addNew( array $dt ) 
		{	
			$sql = "INSERT INTO $this->table ( app_id, institution_name, ordering, from_year, to_year ) VALUES ( ?, ?, ?, ?, ? )";
			$res = $this->runQuery( $sql, $dt );
			
			// checking result 
			if ( $res ) 
			{
	        	return $res;
	     	}
			  
		}

	   function getByAppId( array $dt )
	   {

			$sql = "SELECT * FROM $this->table WHERE app_id = ? ORDER BY ordering ASC";
			$res = $this->fetchAllData( $sql, $dt );

			//checking result 
			if ( $res ) 
			{
	        	return $res;
	      }

		}

		function getByAppIdAndOrder( array $dt )
	   {

			$sql = "SELECT * FROM $this->table WHERE app_id = ? AND ordering = ?";
			$res = $this->fetchData( $sql, $dt );

			//checking result 
			if ( $res ) 
			{
	        	return $res;
	      }

		}

		function updateByAppId( array $dt ) 
		{	
			$sql = "UPDATE $this->table SET institution_name = ?, from_year = ?, to_year = ? WHERE app_id = ? AND ordering = ? ";
			$res = $this->runQuery_2( $sql, $dt );

			//checking result 
			if ( $res ) 
			{
	        	return $res;
	      }
		}

	}

?>