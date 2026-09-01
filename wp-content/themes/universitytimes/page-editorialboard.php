<?php
/*
 Template Name: Editorial Board Template
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
			
		
		
		
		
		
		
			
			
			
			<?php 
// the query


$args = array(
	'post_type' => array('post', 'feature'),
	'posts_per_page' => 25,
	'tax_query' => array(
				array(
					'taxonomy' => 'section',
					'terms' => array('news'),
					'field' => 'slug',
				)
			),

);

$thisidnow = get_the_ID();

$recentlist = 0;


$listofrecentposts = array();

$the_query = new WP_Query( $args ); ?>

<?php if ( $the_query->have_posts() ) : ?>

	<!-- pagination here -->

	<!-- the loop -->
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
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

$utlist_reordered = array(	$mergelists[0],
							$mergelists[2],
							$mergelists[5],
							$mergelists[6],
							$mergelists[7],
							$mergelists[1],
							$mergelists[3],
							$mergelists[4],
							$mergelists[8],
							$mergelists[9],
							$mergelists[10],
							$mergelists[11],
							$mergelists[12],
							$mergelists[13],
							$mergelists[14],
							$mergelists[15],
							$mergelists[16],
							$mergelists[17],
							$mergelists[18],
							$mergelists[19],
							$mergelists[20],
							$mergelists[21],
							$mergelists[22],
							$mergelists[23],
							$mergelists[24],
							$mergelists[25],
							);

$finalpostlist = array_filter($utlist_reordered);


// print_r($cleared_listofrecentposts);

}

else {
	
	
	$utlist_reordered = array(	$listofrecentposts[0],
							$listofrecentposts[2],
							$listofrecentposts[5],
							$listofrecentposts[6],
							$listofrecentposts[7],
							$listofrecentposts[1],
							$listofrecentposts[3],
							$listofrecentposts[4],
							$listofrecentposts[8],
							$listofrecentposts[9],
							$listofrecentposts[10],
							$listofrecentposts[11],
							$listofrecentposts[12],
							$listofrecentposts[13],
							$listofrecentposts[14],
							$listofrecentposts[15],
							$listofrecentposts[16],
							$listofrecentposts[17],
							$listofrecentposts[18],
							$listofrecentposts[19],
							$listofrecentposts[20],
							$listofrecentposts[21],
							$listofrecentposts[22],
							$listofrecentposts[23],
							$listofrecentposts[24],
							$listofrecentposts[25],
							);

$finalpostlist = array_filter($utlist_reordered);
	
	
	
}






?>



			
			
			
		<!--	<?php print_r ($ut_full_array); ?> -->
						

				<div id="inner-content" class="wrap cf sectionpage edboardpagewrap">
				
				<h2 class="newsectionheaders sectionopinion">EDITORIAL BOARD</h2>
				
				
				<div id="topblocks">

					<div id="leftofit" class="editorialpagesection leftofitedboardpage">

						
														<?php
								
							
 
 // current page number
$paged_l = 1;
// number of posts per page
$posts_per_page_l = 25;
// starting position
$offset = ( $paged_l - 1 ) * $posts_per_page_l;
// extract page of IDs
$ids_to_query_l = array_slice( $finalpostlist, $offset, $posts_per_page_l );



  
    $my_query = new WP_Query( array('post_type' => array( 'post', 'feature' ), 'posts_per_page' => $posts_per_page_l,  'ignore_sticky_posts' => 1, 'post_status' => 'publish', 
    
    
    
    
    
														'tax_query' => array(
	  													array(
	  													'taxonomy' => 'section',
	  													'terms' => 'opinion',
	  													'field' => 'slug',
	  													)
	  													),
    													 
    													 'tax_query' => array(
	  													array(
	  													'taxonomy' => 'articletype',
	  													'terms' => 'editorials',
	  													'field' => 'slug',
	  													)
	  													),

			
			) );
 
 

 
if ( $my_query->have_posts() ) : ?>
							
							
							
							
<?php $count = 0; ?>



<?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
<?php $layoutoffirstarticle = 'landscape'; ?>


<?php $count++; ?>



<?php if ($count == 1) : ?>

<h5 class="editorialminilargerheading">THE LATEST EDITORIALS</h5>

<div class="numberonebig">
						
						
			<div class="postlink">
				
				
				<h3 class="onebigheadline">
								
											<a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
								
										</h3>
										
										
										
										
										<div class="onebiginformationbox editorialinfo">
							
							
							
															
							
							
							
							
							
				
						
						
						<?php 
						$utpostimage_id = get_post_meta( $post->ID, "utpostimage_id", true ); 	
						$utpostimage_url = get_post_meta( $post->ID, "utpostimage_url", true ); 	
						$utpostimage_position = get_post_meta( $post->ID, "utpostimage_position", true );
							
						?>
						
						
						

						
						
						
							<?php if ($utpostimage_url != '' && ($utpostimage_position == 'landscaperight' || $utpostimage_position == 'landscapeabove') ) : ?>
														<?php endif; ?>
						
						
							<?php if ($utpostimage_url != '' && ($utpostimage_position == 'portraitright' || $utpostimage_position == 'smallportraitleft' || $utpostimage_position == 'bigportraitleft' )) : ?>
						
								<?php $layoutoffirstarticle = 'portrait'; ?>
						
								
						
							<?php endif; ?>

								<div <?php if ($layoutoffirstarticle == 'portrait') echo "class='floaterright'";?>>
							
							
								
										
								
										<a href="<?php echo get_permalink(); ?>" class="onebigcaption"><?php 
								
													$old_caption = get_post_meta($post->ID, '_visual-subtitle', true);
								
								
													if ($old_caption !== "" && $old_caption !== false) {
								
													echo get_post_meta($post->ID, '_visual-subtitle', true); 
								
								
											}
								
												else {
									
									
												if(function_exists("the_subtitle")) {
										
												echo  the_subtitle();
										
										
												}
									
									
								
									
									
												}
								
								
								
										?></a>
								
								
							
				
							
							
							<div style="clear: both;"></div>
								
								
											
					
					
							</div> <!-- End of wrapper for post data -->
					
					
					</div>  <!-- end of postlink -->
					
					
							
							</div>
							
							
							
							
							
							<div style="clear: both;"></div>
							
												
						
						
						
						

						
						
						</div>

							
							
							
					<?php elseif ($count == 2) : ?>




<div class="numberonebig">
						
						
			<div class="postlink">
				
				
				<h3 class="onebigheadline">
								
											<a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
								
										</h3>
										
										
										
										
										<div class="onebiginformationbox editorialinfo">
							
							
							
															
							
							
							
							
							
				
						
						
						<?php 
						$utpostimage_id = get_post_meta( $post->ID, "utpostimage_id", true ); 	
						$utpostimage_url = get_post_meta( $post->ID, "utpostimage_url", true ); 	
						$utpostimage_position = get_post_meta( $post->ID, "utpostimage_position", true );
							
						?>
						
						
						

						
						
						
							<?php if ($utpostimage_url != '' && ($utpostimage_position == 'landscaperight' || $utpostimage_position == 'landscapeabove') ) : ?>
														<?php endif; ?>
						
						
							<?php if ($utpostimage_url != '' && ($utpostimage_position == 'portraitright' || $utpostimage_position == 'smallportraitleft' || $utpostimage_position == 'bigportraitleft' )) : ?>
						
								<?php $layoutoffirstarticle = 'portrait'; ?>
						
								
						
							<?php endif; ?>

								<div <?php if ($layoutoffirstarticle == 'portrait') echo "class='floaterright'";?>>
							
							
								
										
								
										<a href="<?php echo get_permalink(); ?>" class="onebigcaption"><?php 
								
													$old_caption = get_post_meta($post->ID, '_visual-subtitle', true);
								
								
													if ($old_caption !== "" && $old_caption !== false) {
								
													echo get_post_meta($post->ID, '_visual-subtitle', true); 
								
								
											}
								
												else {
									
									
												if(function_exists("the_subtitle")) {
										
												echo  the_subtitle();
										
										
												}
									
									
								
									
									
												}
								
								
								
										?></a>
								
								
							
				
							
							
							<div style="clear: both;"></div>
								
								
											
					
					
							</div> <!-- End of wrapper for post data -->
					
					
					</div>  <!-- end of postlink -->
					
					
							
							</div>
							
							
							
							
							
							<div style="clear: both;"></div>
							
												
						
						
						
						

						
						
						</div>							
							
							
							
							
					
							
							
							
							<?php elseif ($count == 3) : ?>
							
						<div class="numberonebig">
						
						
			<div class="postlink">
				
				
				<h3 class="onebigheadline">
								
											<a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
								
										</h3>
										
										
										
										
										<div class="onebiginformationbox editorialinfo">
							
							
							
															
							
							
							
							
							
				
						
						
						<?php 
						$utpostimage_id = get_post_meta( $post->ID, "utpostimage_id", true ); 	
						$utpostimage_url = get_post_meta( $post->ID, "utpostimage_url", true ); 	
						$utpostimage_position = get_post_meta( $post->ID, "utpostimage_position", true );
							
						?>
						
						
						

						
						
						
							<?php if ($utpostimage_url != '' && ($utpostimage_position == 'landscaperight' || $utpostimage_position == 'landscapeabove') ) : ?>
														<?php endif; ?>
						
						
							<?php if ($utpostimage_url != '' && ($utpostimage_position == 'portraitright' || $utpostimage_position == 'smallportraitleft' || $utpostimage_position == 'bigportraitleft' )) : ?>
						
								<?php $layoutoffirstarticle = 'portrait'; ?>
						
								
						
							<?php endif; ?>

								<div <?php if ($layoutoffirstarticle == 'portrait') echo "class='floaterright'";?>>
							
							
								
										
								
										<a href="<?php echo get_permalink(); ?>" class="onebigcaption"><?php 
								
													$old_caption = get_post_meta($post->ID, '_visual-subtitle', true);
								
								
													if ($old_caption !== "" && $old_caption !== false) {
								
													echo get_post_meta($post->ID, '_visual-subtitle', true); 
								
								
											}
								
												else {
									
									
												if(function_exists("the_subtitle")) {
										
												echo  the_subtitle();
										
										
												}
									
									
								
									
									
												}
								
								
								
										?></a>
								
								
							
				
							
							
							<div style="clear: both;"></div>
								
								
											
					
					
							</div> <!-- End of wrapper for post data -->
					
					
					</div>  <!-- end of postlink -->
					
					
							
							</div>
							
							
							
							
							
							<div style="clear: both;"></div>
							
												
						
						
						
						

						
						
						</div>	
							

							
							<?php elseif ($count == 4) : ?>


<div class="numberonebig">
						
						
			<div class="postlink">
				
				
				<h3 class="onebigheadline">
								
											<a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
								
										</h3>
										
										
										
										
										<div class="onebiginformationbox editorialinfo">
							
							
							
															
							
							
							
							
							
				
						
						
						<?php 
						$utpostimage_id = get_post_meta( $post->ID, "utpostimage_id", true ); 	
						$utpostimage_url = get_post_meta( $post->ID, "utpostimage_url", true ); 	
						$utpostimage_position = get_post_meta( $post->ID, "utpostimage_position", true );
							
						?>
						
						
						

						
						
						
							<?php if ($utpostimage_url != '' && ($utpostimage_position == 'landscaperight' || $utpostimage_position == 'landscapeabove') ) : ?>
														<?php endif; ?>
						
						
							<?php if ($utpostimage_url != '' && ($utpostimage_position == 'portraitright' || $utpostimage_position == 'smallportraitleft' || $utpostimage_position == 'bigportraitleft' )) : ?>
						
								<?php $layoutoffirstarticle = 'portrait'; ?>
						
								
						
							<?php endif; ?>

								<div <?php if ($layoutoffirstarticle == 'portrait') echo "class='floaterright'";?>>
							
							
								
										
								
										<a href="<?php echo get_permalink(); ?>" class="onebigcaption"><?php 
								
													$old_caption = get_post_meta($post->ID, '_visual-subtitle', true);
								
								
													if ($old_caption !== "" && $old_caption !== false) {
								
													echo get_post_meta($post->ID, '_visual-subtitle', true); 
								
								
											}
								
												else {
									
									
												if(function_exists("the_subtitle")) {
										
												echo  the_subtitle();
										
										
												}
									
									
								
									
									
												}
								
								
								
										?></a>
								
								
							
				
							
							
							<div style="clear: both;"></div>
								
								
											
					
					
							</div> <!-- End of wrapper for post data -->
					
					
					</div>  <!-- end of postlink -->
					
					
							
							</div>
							
							
							
							
							
							<div style="clear: both;"></div>
							
												
						
						
						
						

						
						
						</div>	



						
						
						
						<?php elseif ($count == 5) : ?>
						
						
						
							<div class="numberonebig lastonebig">
						
						
			<div class="postlink">
				
				
				<h3 class="onebigheadline">
								
											<a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
								
										</h3>
										
										
										
										
										<div class="onebiginformationbox editorialinfo">
							
							
							
															
							
							
							
							
							
				
						
						
						<?php 
						$utpostimage_id = get_post_meta( $post->ID, "utpostimage_id", true ); 	
						$utpostimage_url = get_post_meta( $post->ID, "utpostimage_url", true ); 	
						$utpostimage_position = get_post_meta( $post->ID, "utpostimage_position", true );
							
						?>
						
						
						

						
						
						
							<?php if ($utpostimage_url != '' && ($utpostimage_position == 'landscaperight' || $utpostimage_position == 'landscapeabove') ) : ?>
														<?php endif; ?>
						
						
							<?php if ($utpostimage_url != '' && ($utpostimage_position == 'portraitright' || $utpostimage_position == 'smallportraitleft' || $utpostimage_position == 'bigportraitleft' )) : ?>
						
								<?php $layoutoffirstarticle = 'portrait'; ?>
						
								
						
							<?php endif; ?>

								<div <?php if ($layoutoffirstarticle == 'portrait') echo "class='floaterright'";?>>
							
							
								
										
								
										<a href="<?php echo get_permalink(); ?>" class="onebigcaption"><?php 
								
													$old_caption = get_post_meta($post->ID, '_visual-subtitle', true);
								
								
													if ($old_caption !== "" && $old_caption !== false) {
								
													echo get_post_meta($post->ID, '_visual-subtitle', true); 
								
								
											}
								
												else {
									
									
												if(function_exists("the_subtitle")) {
										
												echo  the_subtitle();
										
										
												}
									
									
								
									
									
												}
								
								
								
										?></a>
								
								
							
				
							
							
							<div style="clear: both;"></div>
								
								
											
					
					
							</div> <!-- End of wrapper for post data -->
					
					
					</div>  <!-- end of postlink -->
					
					
							
							</div>
							
							
							
							
							
							<div style="clear: both;"></div>
							
												
						
						
						
						

						
						
						</div>	




						
						<?php else : ?>
							
								
							
							
							

<?php endif; ?>
<?php endwhile; ?>


<?php wp_reset_query(); ?>






<?php endif; ?>

						
						
						</div>




							
							



<div id="rightofit" class="rightofitedboardpage">
					
					
					
					
					<div class="insiderightofit">
						
						
						<h3 class="pagetitle_editorialboard">The Editorial Board of The University Times</h3>
						
						
						
						<div class="corantosmall" style="margin-bottom: 24px;">The Editorial Board of The University Times is comprised of six journalists. The board’s responsibility lies in writing the unsigned editorials of the newspaper, which appear online bimonthly and in every print issue of The University Times. Editorials represent the board’s collective editorial voice.</div>
						
						
						<h4 class="headings_editorialboard">Noa Shmueli</h4>
						
						<h5 class="minititle">Chair of the Editorial Board</h5>
					
					<div class="corantosmall">Noa Shmueli is the current Chair of the Editorial Board. She has previously served as a Senior Editor at The University Times, and, at Columbia University, as the managing editor of the Columbia Journal of Literary Criticism. She is currently pursuing an MPhil in Irish Writing.
</div>
					
					
					<h4 class="headings_editorialboard">Harper Alderson</h4>
						
						<h5 class="minititle">Editor</h5>
					
					<div class="corantosmall">Harper Alderson is the current Editor of The University Times. She previously served as the Deputy Editor, a Senior Editor and the Crossword Editor. She also has significant legal experience, having previously worked for Weil, Gotshal & Manges LLP, the New York City Bar Association, and the Manhattan District Attorney’s Office.
</div>

					
					

										
					<h4 class="headings_editorialboard">Freja Goldman</h4>
						
						<h5 class="minititle">Deputy Editor</h5>
					
					<div class="corantosmall">Freja Goldman is the Deputy Editor of The University Times. She has previously served as the Climate Crisis Editor, and reported on the TCDSU elections 24/25. She also has experience as an editorial intern at Imagine5, a climate-focused magazine based in Copenhagen, Amsterdam, and San Francisco. She is a final year English student.</div>
					
					
					<h4 class="headings_editorialboard">Ella Chepak</h4>
						
						<h5 class="minititle">Assistant Editor</h5>
					
					<div class="corantosmall">Ella Chepak is an Assistant Editor of The University Times. She has previously served as the Opinions Editor. She also serves on Hist Committee and Trinity Women in Law Committee, and has law experience interning at Kobre and Kim LLP. She is a final year History and English student.</div>
					
					<h4 class="headings_editorialboard">Anna Domownik</h4>
						
						<h5 class="minititle">Assistant Editor</h5>
					
					<div class="corantosmall">Anna Domownik is an Assistant Editor of The University Times. She has previously served as the News Editor and Deputy Radius Editor. She is a final year English student.</div>
					
					
					<h4 class="headings_editorialboard">Fachtna Mac Conghail</h4>
						
						<h5 class="minititle">Irish Language Editor</h5>
					
					<div class="corantosmall">Fachtna Mac Conghail is the current Irish Language Editor of The University Times.</div>
					

					
										
					



					
					
				

						
						
					</div>
					
					
					
																
						
						
					</div>
					
					
					<div style="clear:both"></div>
				

				</div>
				
				<div style="clear:both"></div>
				
				
				</div> <!-- end of topblocks -->
				
				
				
				

			</div>



<?php get_footer(); ?>
