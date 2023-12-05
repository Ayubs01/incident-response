<?php
   #   Author of the script
   #   Name: Ayuba Adamu
   #   Email : adamujob71@gmail.com
   #   Date created: 01/09/2023
	#   Date modified: 10/11/2023 

	include_once( 'App.php' );
	include_once( 'FileUpload.php' );

	class Incident
	{

		//using Namespaces
		use FileUpload, App {
			App::__construct as private __appConst;
		}

		protected $table = '';
		const DB_TABLE = 'incidents';
		const DB_TABLE_STUDENT = 'students';
 
		function __construct()
		{
			$this->__appConst();
			$this->table = self::DB_TABLE;
			$this->table_student = self::DB_TABLE_STUDENT;
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
			$sql = "INSERT INTO $this->table ( student_id, inc_type, inc_date, description, image ) VALUES ( ?, ?, ?, ?, ? )";
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
			$sql = "SELECT incident.*, student.full_name FROM $this->table incident INNER JOIN $this->table_student student ON incident.student_id = student.id";
			$res = $this->fetchAllData( $sql, $dt );

			return $res ?? [];
		}

		function getCount( array $dt ) 
		{
			$sql = "SELECT COUNT( * ) AS total FROM $this->table WHERE time_count > ?";
			$res = $this->fetchData( $sql, $dt );

			return $res['total'] ?? 0;
		}

		function getCount2( array $dt )
	   {
			$sql = "SELECT COUNT( id ) AS total FROM $this->table WHERE created_at LIKE ?";
			$res = $this->fetchData( $sql, $dt );

			return $res[ 'total' ] ?? 0;
	   }

	   

	}

?>