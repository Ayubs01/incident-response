<?php 
	 #   Author of the script
	 #   Name: Ezra Adamu
	 #   Email : ezra00100@gmail.com
	 #   Date created: 10/12/2021
	 #   Date modified: 13/12/2021  

	trait App
	{
		private $con;

		// Initializing Database
		public function connect()
		{
			$host = 'localhost';
			$user = 'root';
			$pword = '';
			$db = 'ir_db';
			
			try
			{
				$this->con = new PDO( "mysql:host=$host;dbname=$db", $user, $pword );
				$this->con->setAttribute( PDO::ATTR_EMULATE_PREPARES, false );
	       		$this->con->setAttribute( PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true );
	        	$this->con->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	        	$this->con->setAttribute( PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES utf8" );
				//echo 'connected';
				return $this->con;
			} 
			catch ( PDOException $e )
			{
				echo 'There was an error! unable to connect to DB<br/>';// . $e->getMessage();
				return false;
			}	 
		}

		function runQuery( $sql, $data = [] )
		{
			$query = $this->connect()->prepare( $sql );
			$row = $query->execute( $data );
	    	// checking result 
			if ( $row )
			{
				return true;
			} 
			else 
			{
				return false;
			} 
		}

	  	// run sql query to get row
		function runQuery_1( $sql , $data = [] )
		{
			$query = $this->connect()->prepare( $sql );
			$query->execute( $data );

			if ($row = $query->fetch( PDO::FETCH_ASSOC ) ) 
			{
				return $row;
			} 
			else 
			{
				return false;
			}
		}
	  	
	  	// checking available 
		function runQuery_2( $sql,$data = [] )
		{
			$query = $this->connect()->prepare( $sql );
			$query->execute( $data );
	    	// $row = $query->fetch( PDO::FETCH_ASSOC );
	   		// checking result match
			if ( $query->rowCount() > 0 )
			{
				return true;
			} 
			else 
			{
				return false;
			} 
		}

		public function fetchData( $sql, $data = [] )
		{ 
			$query = $this->connect()->prepare( $sql );
			$row = $query->execute( $data );
			$dt = [];
	    	// checking result 
			while ( $row = $query->fetch( PDO::FETCH_ASSOC ) )
			{
				$dt = $row;
			}

			return $dt;
		}

		public function fetchAllData( $sql, $data = [] )
		{ 
			$query = $this->connect()->prepare( $sql );
			$row = $query->execute( $data );
			$dt = [];
	    	// checking result 
			while ( $row = $query->fetch( PDO::FETCH_ASSOC ) )
			{
				array_push( $dt, $row );
			}

			return $dt;
		}

	}
?>