<?php
   #   Author of the script
   #   Name: Ayuba Adamu
   #   Email : adamujob71@gmail.com
   #   Date created: 01/09/2023
   #   Date modified: 26/10/2023
	
	trait Encryption 
    {
        // Encryption Function
        function encPword( $data )
        {
            return password_hash( ( $data ), PASSWORD_DEFAULT );
        }

        // Decryption Function
        function decPword( $p, $hashed )
        {
            return password_verify( $p, $hashed );
        }

        // encrypt password with md5
        function encryptMd5( $pword ) 
        {
            $enc = md5( $pword );
            return $enc;
        }
        
    }
?>