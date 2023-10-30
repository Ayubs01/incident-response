<?php
	#   Author of the script
	#   Name: Ezra Adamu
	#   Email : ezra00100@gmail.com
	#   Date created: 30/06/2022
	#   Date modified: 30/06/2022 

	include_once( 'App.php' );
 
	class Department
	{
		// Using Namespaces
		use App;

		protected $table = '';
		const DB_TABLE = 'departments';

		function __construct()
	 	{
	 		$this->table = self::DB_TABLE;
	 	}

		function getAll( array $dt ) 
		{
			$sql = "SELECT * FROM $this->table ORDER BY title ASC";
			$res = $this->fetchAllData( $sql, $dt );

			if ( $res ) 
			{
				return $res;
			}
		}

		function loadDepts( array $data, $sel_id = 0 )
		{
			$options = '';

			if ( $data ) 
			{
				foreach ( $data as $dt ) 
				{
					$sel = '';
					$id = $dt['id'];
					$title = $dt['title'];

					if ( $sel_id == $id ) 
					{
						$sel = 'selected';
					}

					$options .= "<option value='$id' $sel >$title</option>";
				}
			}

			return $options;
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
	}

?>