<?php


 
	   

		

require '../../../wp-load.php';

if ( ! is_user_logged_in()
     || ! current_user_can( 'manage_options' )
     || ! isset( $_POST['ut_order_posts_nonce'] )
     || ! wp_verify_nonce( $_POST['ut_order_posts_nonce'], 'ut_order_posts' ) ) {
    wp_die( 'Unauthorized', 'Unauthorized', array( 'response' => 403 ) );
}


													$option = 'post1';
	      
													$new_value = '';
	      
												    update_option( $option, $new_value );
												    
												    
												    $option = 'post2';
	      
													$new_value = '';
	      
												    update_option( $option, $new_value );
												    
												    
												    $option = 'post3';
	      
													$new_value = '';
	      
												    update_option( $option, $new_value );
												    
												    
												    $option = 'post4';
	      
													$new_value = '';
	      
												    update_option( $option, $new_value );
												    
												    
												    $option = 'post5';
	      
													$new_value = '';
	      
												    update_option( $option, $new_value );
												    
												    
												 
												    
												    $option = 'post6';
	      
													$new_value = '';
	      
												    update_option( $option, $new_value );
												    
												    
												    
												    $option = 'post7';
	      
													$new_value = '';
	      
												    update_option( $option, $new_value );
												    
												    
												    
												    $option = 'post8';
	      
													$new_value = '';
	      
												    update_option( $option, $new_value );
												    
												    
												    
												    $option = 'post9';
	      
													$new_value = '';
	      
												    update_option( $option, $new_value );



												    
												    $option = 'post10';
	      
													$new_value = '';
	      
												    update_option( $option, $new_value );
												    
												    
												    
												    
												    $option = 'post11';
	      
													$new_value = '';
	      
												    update_option( $option, $new_value );
												    
												    
												    
												    
												    $option = 'post12';
	      
													$new_value = '';
	      
												    update_option( $option, $new_value );
												    
												    
												    
												    
												    $option = 'post13';
	      
													$new_value = '';
	      
												    update_option( $option, $new_value );
												    
												    
												    
												    
												    $option = 'post14';
	      
													$new_value = '';
	      
												    update_option( $option, $new_value );



												    
												    $option = 'post15';
	      
													$new_value = '';
	      
												    update_option( $option, $new_value );



												    
												    $option = 'post16';
	      
													$new_value = '';
	      
												    update_option( $option, $new_value );



												    
												    $option = 'post17';
	      
													$new_value = '';
	      
												    update_option( $option, $new_value );




												    
												    $option = 'post18';
	      
													$new_value = '';
	      
												    update_option( $option, $new_value );
												    
												    
												    
												    
												    $option = 'post19';
	      
													$new_value = '';
	      
												    update_option( $option, $new_value );



												    
												    $option = 'post20';
	      
													$new_value = '';
	      
												    update_option( $option, $new_value );
												    
												    
												    
												    
												    $option = 'post21';
	      
													$new_value = '';
	      
												    update_option( $option, $new_value );
												    
												    
												    
												    $option = 'post22';
	      
													$new_value = '';
	      
												    update_option( $option, $new_value );
												    
												    
												    
												    
												    $option = 'post23';
	      
													$new_value = '';
	      
												    update_option( $option, $new_value );
												    
												    
												    
												    
												    $option = 'post24';
	      
													$new_value = '';
	      
												    update_option( $option, $new_value );
												    
												    
												    
												    
												    $option = 'post25';
	      
													$new_value = '';
	      
												    update_option( $option, $new_value );
												    
												    
												    
												
												header("Location: http://localhost/wp/wp-admin/admin.php?page=postorderit");
	 
	
	  
	  
	 
	 
	 exit();
												    
												    
												    








?>