<?php
   #   Author of the script
   #   Name: Ayuba Adamu
   #   Email : adamujob71@gmail.com
   #   Date created: 01/09/2023
	#   Date modified: 10/11/2023 

	include_once( 'App.php' );
	include_once( 'Encryption.php' );
	include_once( 'FileUpload.php' );

	class Student
	{

		//using Namespaces
		use Encryption, App {
			App::__construct as private __appConst;
		}

		protected $table = '';
		const DB_TABLE = 'students';
 
		function __construct()
		{
			$this->__appConst();
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
			$res = $this->fetchData( $sql, $dt );

			return $res ?? [];

		}
		function addNew( array $dt ) 
		{	
			$sql = "INSERT INTO $this->table ( email, matric_no, pword, full_name, phone_no ) VALUES ( ?, ?, ?, ?, ? )";
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

		function updateById( array $dt )
	   {
		   $sql = "UPDATE $this->table SET `full_name`= ?, `matric_no`= ?, `phone_no`= ? WHERE id = ?";
		   $res = $this->runQuery_2( $sql, $dt );

		   return $res ?? false;
	   }

	   function updatePasswordById( array $dt )
	   {
		   $sql = "UPDATE $this->table SET  `pword`= ? WHERE id = ?";
		   $res = $this->runQuery_2( $sql, $dt );

		   return $res ?? false;
	   }




	}

?>