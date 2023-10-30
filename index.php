<?php 
   #   Author of the script
   #   Name: Ayuba Adamu
   #   Email : adamujob71@gmail.com
   #   Date created: 01/09/2023
   #   Date modified: 26/10/2023 
   ob_start();
   
   if( session_status() == PHP_SESSION_NONE )
   {
      session_start();    
   }       
   
  //App functions
  include_once( 'config.php' );
  include_once( 'models/WebApp.php' );
   //Creating App instances
   $web_app = new WebApp();

   //url
   $server_name = 'https://' . $_SERVER['SERVER_NAME'];
   $uri = $_SERVER['REQUEST_URI'];
   //$main_url = $server_name;
   $main_url = "$server_name/Ay_2022/ir";
   $app_url = "$server_name$uri/";

   //page name logic
   $uri_arr = explode( '/', $uri );
   $uri_len =  count( $uri_arr );
   $page_starts = $uri_len - 1;
   $page = $uri_arr[ $page_starts ];
 
   $page_arr = explode( '?', $uri_arr[ $page_starts ] );
   $page = $page_arr[0];
   $page = $web_app->fixUrl( $page );

   //$main_url_1 = $main_url . '?tab=';

   //$page = 

   //get url path
   /*$tab = isset( $_GET['tab'] ) ? $_GET['tab']  : '';
   $tab = $web_app->fixUrl();*/

   //setting home as default
   if ( !$page ) 
   {
      $page = 'home';
   }
   
   include_once( 'views/header.php' );

   //directory
   $cur_dir = dirname( __FILE__ );
   $upload_dir = "$cur_dir/uploads";
   $upload_url = "$main_url/uploads";

   $page_x = $page . '_cont.php';
   $file = "$cur_dir/controllers/$page_x";

   //checking and including file
   if ( is_file( $file ) ) 
   {
      include_once( $file );
   }
   else
   {
      header( "Location: $main_url", true, 301 );
      exit();
   }

   include_once( 'views/footer.php' );
   
   ob_end_flush();
?>