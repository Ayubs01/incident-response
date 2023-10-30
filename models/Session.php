<?php
	#   Author of the script
	#   Name: Ezra Adamu
	#   Email : ezra00100@gmail.com
	#   Date created: 11/07/2022
	#   Date modified: 11/07/2022 

	include_once( 'App.php' );
 
	class Session
	{
		// Using Namespaces
		use App;

		protected $table = '';
		const DB_TABLE = 'sessions';

		function __construct()
	 	{
	 		$this->table = self::DB_TABLE;
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

	   function getByCurrentSession( array $dt )
	   {

			$sql = "SELECT * FROM $this->table WHERE current_session = ?";
			$res = $this->runQuery_1( $sql, $dt );

			//checking result 
			if ( $res ) 
			{
	        	return $res;
	      }

		}

	}

?>