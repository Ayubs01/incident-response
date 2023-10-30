<?php
	#   Author of the script
	#   Name: Ezra Adamu
	#   Email : ezra00100@gmail.com
	#   Date created: 29/06/2022
	#   Date modified: 04/07/2022 

	include_once( 'App.php' );
	include_once( 'Encryption.php' );
	include_once( 'FileUpload.php' );
 
	class Document
	{
		// Using Namespaces
		use App, Encryption, FileUpload;

		protected $table = '';
		const DB_TABLE = 'documents';

		function __construct()
	 	{
	 		$this->table = self::DB_TABLE;
	 	}

		function addNew( array $dt ) 
		{	
			$sql = "INSERT INTO $this->table ( app_id, file_name, doc_type ) VALUES ( ?, ?, ? )";
			$res = $this->runQuery( $sql, $dt );
			// checking result 
			if ( $res ) 
			{
	        	return $res;
	     	}	  
		}

		function getByAppId( array $dt )
	   {

			$sql = "SELECT * FROM $this->table WHERE app_id = ? ORDER BY doc_type ASC";
			$res = $this->fetchAllData( $sql, $dt );

			//checking result 
			if ( $res ) 
			{
	        	return $res;
	      }

		}

		function getSingleByAppId( array $dt )
	   {

			$sql = "SELECT * FROM $this->table WHERE app_id = ? LIMIT 1";
			$res = $this->fetchData( $sql, $dt );

			//checking result 
			if ( $res ) 
			{
	        	return $res;
	      }

		}


		function getByAppIdAndDocType( array $dt )
	   {

			$sql = "SELECT * FROM $this->table WHERE app_id = ? AND doc_type = ?";
			$res = $this->fetchData( $sql, $dt );

			//checking result 
			if ( $res ) 
			{
	        	return $res;
	      }

		}

		function updateByAppId( array $dt ) 
		{	
			$sql = "UPDATE $this->table SET file_name = ?, doc_type = ? WHERE app_id = ?";
			$res = $this->runQuery_2( $sql, $dt );

			//checking result 
			if ( $res ) 
			{
	        	return $res;
	      }
		}


	}

?>