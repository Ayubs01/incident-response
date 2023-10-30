<?php
	#   Author of the script
	#   Name: Ezra Adamu
	#   Email : ezra00100@gmail.com
	#   Date created: 07/07/2022
	#   Date modified: 07/07/2022 

	include_once( 'App.php' );
 
	class StateLga
	{
		// Using Namespaces
		use App;

		protected $table_state = '';
		protected $table_lga = '';
		const DB_TABLE_STATE = 'states';
		const DB_TABLE_LGA = 'lgas';


		function __construct()
	 	{
	 		$this->table_state = self::DB_TABLE_STATE;
	 		$this->table_lga = self::DB_TABLE_LGA;
	 	}

		function getAllState( array $dt ) 
		{
			$sql = "SELECT * FROM $this->table_state ORDER BY title ASC";
			$res = $this->fetchAllData( $sql, $dt );

			if ( $res ) 
			{
				return $res;
			}
		}

		function getAllLga( array $dt ) 
		{
			$sql = "SELECT * FROM $this->table_lga ORDER BY title ASC";
			$res = $this->fetchAllData( $sql, $dt );

			if ( $res ) 
			{
				return $res;
			}
		}

		function getLgaByStateId( array $dt ) 
		{
			$sql = "SELECT * FROM $this->table_lga WHERE state_id = ? ORDER BY title ASC";
			$res = $this->fetchAllData( $sql, $dt );

			if ( $res ) 
			{
				return $res;
			}
		}

		function getByStateId( array $dt )
	   {

			$sql = "SELECT * FROM $this->table_state WHERE id = ?";
			$res = $this->runQuery_1( $sql, $dt );

			//checking result 
			if ( $res ) 
			{
	        	return $res;
	        }

		}	 	

		function getByLgaId( array $dt )
	   {

			$sql = "SELECT * FROM $this->table_lga WHERE id = ?";
			$res = $this->runQuery_1( $sql, $dt );

			//checking result 
			if ( $res ) 
			{
	        	return $res;
	        }

		}

		function loadData( array $data, $sel_id = 0 )
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



	}

?>