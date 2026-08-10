<?php get_header(); ?>

<div id="categorycontent">

			<div id="inner-content" class="wrap cf">

						<div id="main" role="main">
							
							
							

						    <?php
										
										echo '<h2 class="articlesectiontag categorytag">';
										
										single_cat_title( '', true );
										
										
									
										
										
										echo '</h2>';
	
	
						




								?>


							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							
							<a class="sectionpagearticle" href="<?php the_permalink(); ?>">
								
										<h5 class="editorialminiheading">
		 
		     <?php
										if ( is_object_in_term( $post->ID, 'articletype', 'editorials' ) ) :
										echo 'Editorial';
	
	
										elseif ( is_object_in_term( $post->ID, 'articletype', 'analysis-2' ) ) :
										echo 'Analysis';
	
										elseif ( is_object_in_term( $post->ID, 'articletype', 'columns' ) ) :
										echo 'Column';
	
										elseif ( is_object_in_term( $post->ID, 'articletype', 'opinioncontrib' ) ) :
										echo 'Contribution';
	
										elseif ( is_object_in_term( $post->ID, 'articletype', 'profile' ) ) :
										echo 'Profile';
										
										elseif ( is_object_in_term( $post->ID, 'articletype', 'op-ed' ) ) :
										echo 'Op-Ed';





										else :
											
											endif;
								?>


		 </h5>
								

									<h3 class="sectionpageheader"><?php the_title(); ?></h3>
									
									<div class="onebigcaption"><?php 
								
								$old_caption = get_post_meta($post->ID, '_visual-subtitle', true);
								
								
								if ($old_caption !== "" && $old_caption !== false) {
								
								echo get_post_meta($post->ID, '_visual-subtitle', true); 
								
								
								}
								
								else {
									
								if(function_exists("the_subtitle")) {
										
										echo  the_subtitle();
										
										
									}
									
									
								}
								
								
								
								?></div>
								
									<?php
							
							$writername = get_post_meta( get_the_ID(), '_writer_name', true );
							$writername2 = get_post_meta( get_the_ID(), '_writer_name_two', true );
							$writername3 = get_post_meta( get_the_ID(), '_writer_name_three', true );
							$writername4 = get_post_meta( get_the_ID(), '_writer_name_four', true );
							$writername5 = get_post_meta( get_the_ID(), '_writer_name_five', true );
							
							
							if ($writername5 == "" and $writername4 == "" and $writername3 == "" and $writername2 == "" and $writername !== "") {
							
							 echo '<span class="onebigauthorname">By <span class="authoruppercase">'.get_post_meta( get_the_ID(), '_writer_name', true ).'</span></span>'; 
							 
							 
							 }
							 
							 
							 elseif ($writername5 == "" and $writername4 == "" and $writername3 == "" and $writername2 !== "") {
								 
								 
								echo '<span class="onebigauthorname">By <span class="authoruppercase">'.get_post_meta( get_the_ID(), '_writer_name', true ).'</span> and <span class="authoruppercase">'.get_post_meta( get_the_ID(), '_writer_name_two', true ).'</span></span>'; 
								 
								 
							 }
							 
							 
							 
							 
							 ?>
									

								
							</a>
								

							

							

							<?php endwhile; ?>

									<?php bones_page_navi(); ?>

							<?php else : ?>

									<article id="post-not-found" class="hentry cf">
										<header class="article-header">
											<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
										<section class="entry-content">
											<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the custom post type archive template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>

						</div>

					

				</div>

			</div>
						
						
						
						
						
						
					
						
						
						
				</div>		
						
						
						
						

					

				

			</div>
<?php get_footer(); ?>
