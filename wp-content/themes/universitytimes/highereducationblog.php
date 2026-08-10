<div class="blogmain">
	

<div class="blogleft">


<div class="blogsheadergrouping">

<h3 class="blogtitle">Higher Education</h3>

<h4 class="blogsubheading">Developments in Higher Education</h3>
	
</div>	





<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							
							
								
										
																		
									 <div class="blogdate"><?php the_date('M j, Y'); ?></div>
									<a class="blogposttitlelink" href="<?php the_permalink(); ?>"><h4 class="blogposttitle"><?php the_title(); ?></h4></a>
									
									
										<?php 
						$utpostimage_id = get_post_meta( $post->ID, "utpostimage_id", true ); 	
						$utpostimage_url = get_post_meta( $post->ID, "utpostimage_url", true ); 	
						$utpostimage_position = get_post_meta( $post->ID, "utpostimage_position", true );
							
						?>
						
						
						
						
								
									
								
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
									

								
						
								
							 	<?php the_excerpt(); ?>
							

							

							<?php endwhile; ?>

									<?php bones_page_navi(); ?>

							<?php else : ?>

									<article id="post-not-found" class="hentry cf">
										<header class="article-header">
											<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
										<section class="entry-content">
											<p><?php _e( 'Uh Oh. Something is missing! Hahaha Try double checking things.', 'bonestheme' ); ?></p>
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

</div>