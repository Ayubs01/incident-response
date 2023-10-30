<?php
   #   Author of the script
   #   Name: Ayuba Adamu
   #   Email : adamujob71@gmail.com
   #   Date created: 01/09/2023
   #   Date modified: 26/10/2023 
	include_once( 'App.php' );
	include_once( 'Encryption.php' );
	include_once( 'FileUpload.php' );

	class Student
	{
			// Using Namespaces
		use App, Encryption, FileUpload;

		protected $table = '';
		const DB_TABLE = 'students';

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
			$sql = "SELECT * FROM $this->table WHERE email = ?";
			$res = $this->fetchData( $sql, $dt );

			return $res ?? [];
		}

		function getById( array $dt )
		{

			$sql = "SELECT * FROM $this->table WHERE id = ?";
			$res = $this->runQuery_1( $sql, $dt );

			return $res ?? false;

		}
		function addNew( array $dt ) 
		{	
			$sql = "INSERT INTO $this->table ( email, matric_no, pword, full_name, phone_no, image ) VALUES ( ?, ?, ?, ?, ?, ? )";
			$res = $this->runQuery( $sql, $dt );
			
			return $res ?? false;	  
		}

		function getByEmail( array $dt ) 
		{
			$sql = "SELECT * FROM $this->table WHERE email = ? ";
			$res = $this->fetchData( $sql, $dt );

			return $res ?? [];
		}
																																																					
		function getAll( array $dt ) 
		{
			$sql = "SELECT * FROM $this->table ORDER BY id";
			$res = $this->fetchAllData( $sql, $dt );

			return $res ?? [];
		}


	}

?>