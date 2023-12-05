<?php
   #   Author of the script
   #   Name: Ayuba Adamu
   #   Email : adamujob71@gmail.com
   #   Date created: 01/09/2023
   #   Date modified: 26/10/2023

	trait FileUpload
	{
		function folderExist( $dir )
		{
			if ( is_dir( $dir ) ) {
				return true;
			}
		}
		function fileExtension( $fname, $type = '' )
		{
		   $get_file_ext = explode( '.', $fname );
			$file_ext = strtolower( $get_file_ext[ 1 ] );

			//Checking Extension
			return $this->extensionExist( $file_ext, $type );
		}

		
		function extensionExist( $fext, $type = '' )
		{
			if ( $type == 'image' ) 
			{
				//for images
				$file_ext = [ 'png', 'jpg', 'jpeg' ];
			}
			else if ( $type == 'audio' ) 
			{
				$file_ext = [ 'mp3' ];
			}
			
			if ( in_array( $fext, $file_ext ) )
			{
				return $fext;
			}
		}


		function fileSizeX( $file_size, $max_size )
		{
		 	//if file is in range
			if ( $file_size <= $max_size )
			{
				return true;
			}
		}

		function uploadFile( $tmpFile, $fileName )
		{

			if ( move_uploaded_file( $tmpFile, $fileName ) )
			{
				return $fileName;
			}
			else
			{
				return false;
			}
		}

		function imageUpload( $dir, $img, $image_name = '' )
      {
        	$res = '';
        	$img_name = $img[ 'name' ];
        	$tmp_img = $img[ 'tmp_name' ];
        	$img_type = $img[ 'type' ];
        	$img_sz = $img[ 'size' ];

        	if ( !$this->folderExist( $dir ) )
        	{
        		$res = [ false, 'Sorry, Invalid Image Folder!' ];

        		return $res;
        	}

        	//validating image
        	if ( isset( $img ) ) 
        	{
        		$img_ext = $this->fileExtension( $img_name, 'image' );

        		//checking extension
        		if ( $img_ext ) 
        		{
        			//1000KB = 1000000B 
	        		$img_size = $this->fileSizeX( $img_sz, $max_size = 1000000 );

        			//checking size
	        		if ( $img_size ) 
	        		{
	        			$img_name = $image_name . $img_ext; 

	        			if ( !$image_name ) 
	        			{
		        			//upload img
		        			$img_name = date( 'Ymd' ) . time( ) . rand( 1000, 10000000 ) . '_image.' . $img_ext;
	        			}

	        			$img_name_1 =  $dir . $img_name;

	        			$img_up =  $this->uploadFile( $tmp_img,$img_name_1 );

	        			if ( !$img_up ) 
	        			{
	        				$res = array( false,'Sorry, Failed to upload Image' );
	        			}
	        			else
	        			{
	        				$res = array( true, $img_name );
	        			}
	        			
	        		}
	        		else
	        		{
	        			$res = array( false, 'Sorry, Image Size is Too Large ( It should not be more than 1 MB )' );
	        		}
        		}
        		else
        		{
        			$res =  array( false,'Sorry, Image Type is Not Supported ( Only png , jpg, jpeg format is allowed )' );
        		}
        	}
        	else
        	{
        		$res =  array( false, 'Please upload an Image' );
        	}

        	return $res;
      }	

      function audioUpload( $dir, $audio )
      {
        	$res = '';
        	$audio_name = $audio[ 'name' ];
        	$tmp_audio = $audio[ 'tmp_name' ];
        	$audio_type = $audio[ 'type' ];
        	$audio_sz = $audio[ 'size' ];
        	
        	if ( !$this->folderExist( $dir ) )
        	{
        		$res = [ false, 'Sorry, Invalid Audio Folder!' ];

        		return $res;
        	}

        	//validating image
        	if ( isset( $audio ) ) 
        	{
        		$audio_ext = $this->fileExtension( $audio_name, 'audio' );
        		
        		//checking extension
        		if ( $audio_ext ) 
        		{
	        		$audio_size = $this->fileSizeX( $audio_sz, $max_size = 1000000 );

        			//checking size
	        		if ( $audio_size ) 
	        		{
	        			//upload img
	        			$audio_name = date( 'Ymd' ) . time( ) . rand( 1000, 10000000 ) . '_audio.' . $audio_ext;
	        			$audio_name_1 =  $dir . $audio_name;
	        			$audio_up =  $this->uploadFile( $tmp_audio, $audio_name_1 );

	        			if ( !$audio_up ) 
	        			{
	        				$res = array( false,'Sorry, Failed to upload Audio' );
	        			}
	        			else
	        			{
	        				$res = array( true, $audio_name );
	        			}
	        			
	        		}
	        		else
	        		{
	        			$res = array( false,'Sorry, Audio Size is Too Large ( It should not be more than 1 MB )' );
	        		}
        		}
        		else
        		{
        			$res =  array( false,'Sorry, Audio Type is Not Supported ( Only mp3 format is allowed )' );
        		}
        	}
        	else
        	{
        		$res =  array( false,'Please upload an Audio' );
        	}

        	return $res;
      }

	
	}
?>