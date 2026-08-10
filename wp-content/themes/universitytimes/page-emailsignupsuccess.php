<?php
/*
 Template Name: Email Newsletter Sign-Up Confirmation
 *
 * This is your custom page template. You can create as many of these as you need.
 * Simply name is "page-whatever.php" and in add the "Template Name" title at the
 * top, the same way it is here.
 *
 * When you create your page, you can just select the template and viola, you have
 * a custom page template to call your very own. Your mother would be so proud.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/

?>


<?php get_header(); ?>

			<div id="content">

					<div id="articlecontent">

							<div class="pagegrouping">

								<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							

								<header class="article-header">

									
									<div class="emailsuccessicon">
										
										
										
										</div>
										
										
										
										<div class="newsletterpageheadertext">
									
										 <h2 class="pagetitle_newsletter"><?php the_title(); ?></h2>


										 <div class="getinyourinbox mobilegetinyourinbox" style="margin-bottom: 25px;">You're almost set to receive our newsletters.</div>
										 
										 
										</div>
								
								
						
								
								
								
								</header> <?php // end article header ?>

								<section class="pagebody" itemprop="articleBody">
									
									
									<?php the_content(); ?>
									
									
																		
									
									
																	</section> <?php // end article section ?>

							

							</article>

							<?php endwhile; else : ?>
									

							<?php endif; ?>

					

						</div>
						
					<div class="rightgrouping">
						
						
						 <div class="editorspicks leftpagepicks">
	                 
	                 				
						 	<h3>Most Popular</h3>
						 	
						 	
						 	
		
 
	                

		<?php
			
		
			
			
			$finalpopularlistarray_option = get_option( 'mostpopulararticles');
		
		
		$args2 = array(
				

			'orderby' => 'post__in',
			'post_status' => 'publish',
				'posts_per_page' => 5,
				
				
				'post__in' => $finalpopularlistarray_option, );
		
		
		
// the query
$the_popular_query = new WP_Query( $args2 ); 
?>

				
				
				
					<?php				if ( $the_popular_query->have_posts() ) : ?>
							
							
							
							
<?php $count = 0; ?>


<?php while ( $the_popular_query->have_posts() ) : $the_popular_query->the_post(); ?>


<?php $count++; ?>






<?php 
	
	
						
						
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
		              
		              <div class="grouping">
		              
		              <h5 class="editorialminiheading">    <?php
										if ( is_object_in_term( $post->ID, 'articletype', 'columns' ) ) :
										echo 'Column';
										
										elseif ( is_object_in_term( $post->ID, 'articletype', 'newsarticle' ) ) :
										echo 'News';
										
											elseif ( is_object_in_term( $post->ID, 'articletype', 'newsfeature' ) ) :
										echo 'News Focus';
										
										elseif ( is_object_in_term( $post->ID, 'section', 'infocus' ) ) :
										echo 'In Focus';
										
										elseif ( is_object_in_term( $post->ID, 'section', 'radius' ) ) :
										echo 'Radius';
										
										elseif ( is_object_in_term( $post->ID, 'section', 'sport' ) ) :
										echo 'Sport';
										
										elseif ( is_object_in_term( $post->ID, 'section', 'magazine' ) ) :
										echo 'Magazine';
										
										
										elseif ( is_object_in_term( $post->ID, 'articletype', 'eagarfhocail' ) ) :
										echo 'Eagarfhocail';
	
	
										elseif ( is_object_in_term( $post->ID, 'articletype', 'op-ed' ) ) :
										echo 'Op-ed';
	
										elseif ( is_object_in_term( $post->ID, 'articletype', 'editorials' ) ) :
										echo 'Editorial';
	
										elseif ( is_object_in_term( $post->ID, 'articletype', 'analysis-2' ) ) :
										echo 'Analysis';
	
										elseif ( is_object_in_term( $post->ID, 'articletype', 'opinioncontrib' ) ) :
										echo 'Opinion Contribution';
										
										





										else :
											
											endif;
								?>
</h5>
		            		              
							<h4><?php the_title(); ?></h4>
							
		              </div>
						
		              
						</a>  
						
						
						<?php endif; ?>
						
						
						<?php if ($utpostimage_url == "") : ?>
							
							
							<a href="<?php echo get_permalink(); ?>" class="pickstory">
							
							
							<h4 class="picksnoimage"><?php the_title(); ?></h4>
							
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
						
					



				
													
						
						 
<?php endwhile; ?>




<?php wp_reset_query(); ?>






<?php endif; ?>


					
				
				
						 	
						 	
	              

						 </div>
						
						
						
						
						 <div class="editorspicks rightpagepicks">
	                 
	                 				
						 	<h3>The Latest</h3>
						 	
						 	
						 	
						 	<?php 
	                

				
		
		
		$args3 = array(
				'post_type' => array('post'),
				'tax_query' => array(
				array(
					'taxonomy' => 'section',
					'terms' => array('opinion', 'blogs', 'infocus', 'magazine', 'news', 'radius', 'sport',),
					'field' => 'slug',
				)
			),


			'orderby' => 'date',
			'post_status' => 'publish',
				'posts_per_page' => 5,
			 );
		
		
		
// the query
$the_latest_query = new WP_Query( $args3 ); 
?>

				
				
				
					<?php				if ( $the_latest_query->have_posts() ) : ?>
							
							
							
							
<?php $count = 0; ?>


<?php while ( $the_latest_query->have_posts() ) : $the_latest_query->the_post(); ?>


<?php $count++; ?>






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
		              
		              <div class="grouping">
		              
		              <h5 class="editorialminiheading">    <?php
										if ( is_object_in_term( $post->ID, 'articletype', 'columns' ) ) :
										echo 'Column';
										
										elseif ( is_object_in_term( $post->ID, 'articletype', 'newsarticle' ) ) :
										echo 'News';
										
											elseif ( is_object_in_term( $post->ID, 'articletype', 'newsfeature' ) ) :
										echo 'News Focus';
										
										elseif ( is_object_in_term( $post->ID, 'section', 'infocus' ) ) :
										echo 'In Focus';
										
										elseif ( is_object_in_term( $post->ID, 'section', 'radius' ) ) :
										echo 'Radius';
										
										elseif ( is_object_in_term( $post->ID, 'section', 'sport' ) ) :
										echo 'Sport';
										
										elseif ( is_object_in_term( $post->ID, 'section', 'magazine' ) ) :
										echo 'Magazine';
										
										
										elseif ( is_object_in_term( $post->ID, 'articletype', 'eagarfhocail' ) ) :
										echo 'Eagarfhocail';
	
	
										elseif ( is_object_in_term( $post->ID, 'articletype', 'op-ed' ) ) :
										echo 'Op-ed';
	
										elseif ( is_object_in_term( $post->ID, 'articletype', 'editorials' ) ) :
										echo 'Editorial';
	
										elseif ( is_object_in_term( $post->ID, 'articletype', 'analysis-2' ) ) :
										echo 'Analysis';
	
										elseif ( is_object_in_term( $post->ID, 'articletype', 'opinioncontrib' ) ) :
										echo 'Opinion Contribution';
										
										





										else :
											
											endif;
								?>
</h5>
		            		              
							<h4><?php the_title(); ?></h4>
							
		              </div>
						
		              
						</a>  
						
						
						<?php endif; ?>
						
						
						<?php if ($utpostimage_url == "") : ?>
							
							
							<a href="<?php echo get_permalink(); ?>" class="pickstory">
							
							
							<h4 class="picksnoimage"><?php the_title(); ?></h4>
							
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
						
					



				
													
						
						 
<?php endwhile; ?>




<?php wp_reset_query(); ?>






<?php endif; ?>


					
				
				
						 	
						 	
	              

						 </div>
						
							
							
					</div>  
						
						<div style="clear:both"></div>	
						

				</div>

			</div>

<?php get_footer(); ?>
