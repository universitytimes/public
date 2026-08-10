<div class="callededitorspicks">



  <?php 
// the query


$args_recent = array(
	
	'relation' => 'OR',
	'post_type' => array('post', 'feature'),
	'posts_per_page' => 10,
	'tax_query' => array(
		
				
				
				array(
					'taxonomy' => 'section',
					'terms' => array('infocus', 'magazine', 'news', 'radius', 'sport', 'freshers'),
					'field' => 'slug',
				)
			),
				'tax_query' => array(
				array(
					'taxonomy' => 'articletype',
					'terms' => array('eagarfhocail'),
					'field' => 'slug',
					'operator' => 'NOT EXISTS',
				)
			),

);


$listofrecentposts = array();





$the_query_recent = new WP_Query( $args_recent ); ?>

<?php if ( $the_query_recent->have_posts() ) : ?>

	<!-- pagination here -->

	<!-- the loop -->
	<?php while ( $the_query_recent->have_posts() ) : $the_query_recent->the_post(); ?>
		<?php
		
		
		
		$listofrecentposts[] = get_the_ID();
		
		
		
		  ?>
	<?php endwhile; ?>
	<!-- end of the loop -->

	<!-- pagination here -->

	<?php wp_reset_postdata(); ?>

<?php else : ?>
	
<?php endif; ?>

                
              
                
                <?php 
	                
	        
$ordered_list = get_option("ut_post_order_list_3");

if (is_array($ordered_list)) {

$utlist = array_filter($ordered_list);

$cleared_listofrecentposts = array_diff($listofrecentposts, $utlist);

$mergelists = array_merge( $utlist, $cleared_listofrecentposts);

if(($key = array_search($currentpostid, $mergelists)) !== false) {
    unset($mergelists[$key]);
}


$finallist = array_filter($mergelists);



	     }
	     
	     
	     else {
		     
		     
		     if(($key = array_search($currentpostid, $listofrecentposts)) !== false) {
    unset($listofrecentposts[$key]);
}
		     
		     $finallist = $listofrecentposts;
		     
	     }
		
		
		
		
		$args = array(
				'post_type' => array('post'),
				'tax_query' => array(
				array(
					'taxonomy' => 'section',
					'terms' => array('infocus', 'magazine', 'news', 'radius', 'sport', 'freshers'),
					'field' => 'slug',
				)
			),


			'orderby' => 'post__in',
			'post_status' => 'publish',
			
			'posts_per_page' => 5,
				
			'post__in' =>  $finallist, );
		
		
		
// the query
$the_query = new WP_Query( $args ); 
?>

       
                
                 <div class="editorspicks">
	                 
	                 				
	                	<h3>Editors' Picks</h3>
	              
						
							
							
			<?php				if ( $the_query->have_posts() ) : ?>
							
							
							
							
<?php $count = 0; ?>



<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>


<?php $count++; ?>



<?php if ($count == 1) : ?>


<?php 
	
	
						$listofthingstoexclude[] = get_the_id();
						
						$utpostimage_id = get_post_meta( $post->ID, "utpostimage_id", true ); 	
						$utpostimage_url = get_post_meta( $post->ID, "utpostimage_url", true ); 	
						$utpostimage_position = get_post_meta( $post->ID, "utpostimage_position", true );
							
						?>
						
						
						<?php if ($utpostimage_url != "") : ?>
							
							
							
							
							
							<a href="<?php echo get_permalink(); ?>" class="pickstory notopmargin">
							
							
							
							<div class="pickcropper"> 
											
												<img src="<?php echo $utpostimage_url ?>" alt="blank" />
												
												  <script type="text/javascript">
											jQuery('.pickcropper').imagefill();
        						</script>
											
									</div>
		              
		            		              
							<h4><?php if (in_category( '1680', $post->ID ) ) {
												
												echo 'Dear Fresher Me: ';
												
											} ?><?php the_title(); ?></h4>
						
		              
						</a>  
						
						
						<?php endif; ?>
						
						
						<?php if ($utpostimage_url == "") : ?>
							
							
							<a href="<?php echo get_permalink(); ?>" class="pickstory notopmargin">
							
							
							<h4 class="picksnoimage"><?php if (in_category( '1680', $post->ID ) ) {
												
												echo 'Dear Fresher Me: ';
												
											} ?><?php the_title(); ?></h4>
							
							
							
							
							<h5 class="pickscaption"><?php 
								
								$old_caption = get_post_meta($post->ID, '_visual-subtitle', true);
								
								
								if ($old_caption !== "" && $old_caption !== false) {
								
								echo get_post_meta($post->ID, '_visual-subtitle', true); 
								
								
								}
								
								else {
									
								if(function_exists("the_subtitle")) {
										
										echo  the_subtitle();
										
										
									}
									
									
								}
								
								
								
								?></h5>
								
														
		              
						</a>  
						
						
						<?php endif; ?>
						
						<?php endif; ?>







					<?php if ($count == 2) : ?>


<?php 
						$listofthingstoexclude[] = get_the_id();
						
						$utpostimage_id = get_post_meta( $post->ID, "utpostimage_id", true ); 	
						$utpostimage_url = get_post_meta( $post->ID, "utpostimage_url", true ); 	
						$utpostimage_position = get_post_meta( $post->ID, "utpostimage_position", true );
							
						?>
						
						
						<?php if ($utpostimage_url != "") : ?>
							
							
							<a href="<?php echo get_permalink(); ?>" class="pickstorymiddle">
							
							
							
							<div class="pickcropper"> 
											
												<img src="<?php echo $utpostimage_url ?>" alt="blank" />
												
												  <script type="text/javascript">
											jQuery('.pickcropper').imagefill();
        						</script>
											
									</div>
		              
		            		              
							<h4><?php if (in_category( '1680', $post->ID ) ) {
												
												echo 'Dear Fresher Me: ';
												
											} ?><?php the_title(); ?></h4>
						
		              
						</a>  
						
						
						<?php endif; ?>
						
						
						<?php if ($utpostimage_url == "") : ?>
							
							
							<a href="<?php echo get_permalink(); ?>" class="pickstorymiddle">
							
							
							<h4 class="picksnoimage"><?php if (in_category( '1680', $post->ID ) ) {
												
												echo 'Dear Fresher Me: ';
												
											} ?><?php the_title(); ?></h4>
							
							<h5 class="pickscaption"><?php 
								
								$old_caption = get_post_meta($post->ID, '_visual-subtitle', true);
								
								
								if ($old_caption !== "" && $old_caption !== false) {
								
								echo get_post_meta($post->ID, '_visual-subtitle', true); 
								
								
								}
								
								else {
									
								if(function_exists("the_subtitle")) {
										
										echo  the_subtitle();
										
										
									}
									
									
								}
								
								
								
								?></h5>
						
		              
						</a>  
						
						
						<?php endif; ?>
						
						
						<?php endif; ?>







					<?php if ($count == 3) : ?>


<?php 
						$listofthingstoexclude[] = get_the_id();
						
						$utpostimage_id = get_post_meta( $post->ID, "utpostimage_id", true ); 	
						$utpostimage_url = get_post_meta( $post->ID, "utpostimage_url", true ); 	
						$utpostimage_position = get_post_meta( $post->ID, "utpostimage_position", true );
							
						?>
						
						
						<?php if ($utpostimage_url != "") : ?>
							
							
							<a href="<?php echo get_permalink(); ?>" class="pickstoryright">
							
							
							
							<div class="pickcropper"> 
											
												<img src="<?php echo $utpostimage_url ?>" alt="blank" />
												
												  <script type="text/javascript">
											jQuery('.pickcropper').imagefill();
        						</script>
											
									</div>
		              
		            		              
							<h4><?php if (in_category( '1680', $post->ID ) ) {
												
												echo 'Dear Fresher Me: ';
												
											} ?><?php the_title(); ?></h4>
						
		              
						</a>  
						
						
						<?php endif; ?>
						
						
						<?php if ($utpostimage_url == "") : ?>
							
							
							<a href="<?php echo get_permalink(); ?>" class="pickstoryright">
							
							
							<h4 class="picksnoimage"><?php if (in_category( '1680', $post->ID ) ) {
												
												echo 'Dear Fresher Me: ';
												
											} ?><?php the_title(); ?></h4>
							
							<h5 class="pickscaption"><?php 
								
								$old_caption = get_post_meta($post->ID, '_visual-subtitle', true);
								
								
								if ($old_caption !== "" && $old_caption !== false) {
								
								echo get_post_meta($post->ID, '_visual-subtitle', true); 
								
								
								}
								
								else {
									
								if(function_exists("the_subtitle")) {
										
										echo  the_subtitle();
										
										
									}
									
									
								}
								
								
								
								?></h5>
						
		              
						</a>  
						
						
						<?php endif; ?>
						
						

						
						
											
						
						
					
						
						
													
						
						 <?php else : ?>
                
                               
                <?php endif; ?>
<?php endwhile; ?>


<?php wp_reset_query(); ?>






<?php endif; ?>

						
							
								
							
							
							


  <?php 
	                

				
		
		
		$args = array(
				'post_type' => array('post'),
				'tax_query' => array(
				array(
					'taxonomy' => 'section',
					'terms' => array('opinion'),
					'field' => 'slug',
				)
			),


			'orderby' => 'date',
			'post_status' => 'publish',
				'posts_per_page' => 2,
				
				
				'post__not_in' => $listofthingstoexclude, );
		
		
		
// the query
$the_query = new WP_Query( $args ); 
?>

                
                
      
	              
												
							
			<?php				if ( $the_query->have_posts() ) : ?>
							
							
							
							
<?php $count = 0; ?>



<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>


<?php $count++; ?>



<?php if ($count == 1) : ?>


<?php 
	
	
						$listofthingstoexclude[] = get_the_id();
						
						$utpostimage_id = get_post_meta( $post->ID, "utpostimage_id", true ); 	
						$utpostimage_url = get_post_meta( $post->ID, "utpostimage_url", true ); 	
						$utpostimage_position = get_post_meta( $post->ID, "utpostimage_position", true );
							
						?>
						
						
						<?php if ($utpostimage_url != "") : ?>
							
							
							<a href="<?php echo get_permalink(); ?>" class="pickstory">
							
							
							
							<div class="pickcropper"> 
											
												<img src="<?php echo $utpostimage_url ?>" alt="blank" />
												
												  <script type="text/javascript">
											jQuery('.pickcropper').imagefill();
        						</script>
											
									</div>
		              
		            		              
							<h4><?php if (in_category( '1680', $post->ID ) ) {
												
												echo 'Dear Fresher Me: ';
												
											} ?><?php the_title(); ?></h4>
						
		              
						</a>  
						
						
						<?php endif; ?>
						
						
						<?php if ($utpostimage_url == "") : ?>
							
							
							<a href="<?php echo get_permalink(); ?>" class="pickstory">
							
							
							<h4 class="picksnoimage"><?php if (in_category( '1680', $post->ID ) ) {
												
												echo 'Dear Fresher Me: ';
												
											} ?><?php the_title(); ?></h4>
							
							<h5 class="pickscaption"><?php 
								
								$old_caption = get_post_meta($post->ID, '_visual-subtitle', true);
								
								
								if ($old_caption !== "" && $old_caption !== false) {
								
								echo get_post_meta($post->ID, '_visual-subtitle', true); 
								
								
								}
								
								else {
									
								if(function_exists("the_subtitle")) {
										
										echo  the_subtitle();
										
										
									}
									
									
								}
								
								
								
								?></h5>
						
		              
						</a>  
						
						
						<?php endif; ?>
						
						<?php endif; ?>







					<?php if ($count == 2) : ?>


<?php 
						$listofthingstoexclude[] = get_the_id();
						
						$utpostimage_id = get_post_meta( $post->ID, "utpostimage_id", true ); 	
						$utpostimage_url = get_post_meta( $post->ID, "utpostimage_url", true ); 	
						$utpostimage_position = get_post_meta( $post->ID, "utpostimage_position", true );
							
						?>
						
						
						<?php if ($utpostimage_url != "") : ?>
							
							
							<a href="<?php echo get_permalink(); ?>" class="pickstorymiddle">
							
							
							
							<div class="pickcropper"> 
											
												<img src="<?php echo $utpostimage_url ?>" alt="blank" />
												
												  <script type="text/javascript">
											jQuery('.pickcropper').imagefill();
        						</script>
											
									</div>
		              
		            		              
							<h4><?php if (in_category( '1680', $post->ID ) ) {
												
												echo 'Dear Fresher Me: ';
												
											} ?><?php the_title(); ?></h4>
						
		              
						</a>  
						
						
						<?php endif; ?>
						
						
						<?php if ($utpostimage_url == "") : ?>
							
							
							<a href="<?php echo get_permalink(); ?>" class="pickstorymiddle">
							
							
							<h4 class="picksnoimage"><?php if (in_category( '1680', $post->ID ) ) {
												
												echo 'Dear Fresher Me: ';
												
											} ?><?php the_title(); ?></h4>
							
							<h5 class="pickscaption"><?php 
								
								$old_caption = get_post_meta($post->ID, '_visual-subtitle', true);
								
								
								if ($old_caption !== "" && $old_caption !== false) {
								
								echo get_post_meta($post->ID, '_visual-subtitle', true); 
								
								
								}
								
								else {
									
								if(function_exists("the_subtitle")) {
										
										echo  the_subtitle();
										
										
									}
									
									
								}
								
								
								
								?></h5>
						
		              
						</a>  
						
						
						<?php endif; ?>
						
						
						

						
						
						
													
						
						 <?php else : ?>
                
                               
                <?php endif; ?>
<?php endwhile; ?>


<?php wp_reset_query(); ?>






<?php endif; ?>






	              
	                <?php 
	                

				
		
		
		$args = array(
				
			
				'post_status' => 'publish',
				'posts_per_page' => 1,
				
				
				'post__in' => $finallist,
				'offset' => 3,
				'orderby' => 'post__in', );
		
		
		
// the query
$the_query = new WP_Query( $args ); 
?>

                
                
      
	              
												
							
			<?php				if ( $the_query->have_posts() ) : ?>
							
							
							
							
<?php $count = 0; ?>



<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>


<?php $count++; ?>



<?php if ($count == 1) : ?>


<?php 
	
	
						$listofthingstoexclude[] = get_the_id();
						
						$utpostimage_id = get_post_meta( $post->ID, "utpostimage_id", true ); 	
						$utpostimage_url = get_post_meta( $post->ID, "utpostimage_url", true ); 	
						$utpostimage_position = get_post_meta( $post->ID, "utpostimage_position", true );
							
						?>
						
						
						<?php if ($utpostimage_url != "") : ?>
							
							
							<a href="<?php echo get_permalink(); ?>" class="pickstoryright">
							
							
							
							<div class="pickcropper"> 
											
												<img src="<?php echo $utpostimage_url ?>" alt="blank" />
												
												  <script type="text/javascript">
											jQuery('.pickcropper').imagefill();
        						</script>
											
									</div>
		              
		            		              
							<h4><?php if (in_category( '1680', $post->ID ) ) {
												
												echo 'Dear Fresher Me: ';
												
											} ?><?php the_title(); ?></h4>
						
		              
						</a>  
						
						
						<?php endif; ?>
						
						
						<?php if ($utpostimage_url == "") : ?>
							
							
							<a href="<?php echo get_permalink(); ?>" class="pickstoryright">
							
							
							<h4 class="picksnoimage"><?php if (in_category( '1680', $post->ID ) ) {
												
												echo 'Dear Fresher Me: ';
												
											} ?><?php the_title(); ?></h4>
							
							<h5 class="pickscaption"><?php 
								
								$old_caption = get_post_meta($post->ID, '_visual-subtitle', true);
								
								
								if ($old_caption !== "" && $old_caption !== false) {
								
								echo get_post_meta($post->ID, '_visual-subtitle', true); 
								
								
								}
								
								else {
									
								if(function_exists("the_subtitle")) {
										
										echo  the_subtitle();
										
										
									}
									
									
								}
								
								
								
								?></h5>
						
		              
						</a>  
						
						
						<?php endif; ?>
						
						
						
						
						

						
						
			
					
						
						
													
						
						 <?php else : ?>
                
                               
                <?php endif; ?>
<?php endwhile; ?>


<?php wp_reset_query(); ?>






<?php endif; ?>
	                
	                
	                
                </div>
                
                
</div>
