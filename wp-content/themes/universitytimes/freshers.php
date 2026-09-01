<div id="inner-content" class="fresherssection">

						<div id="main" role="main">
							
							
							
							
						<div class="sectionpageleft">	
							
							
							
							
							<h2 style="margin-top: 10px;" class="newsectionheaders sectionfreshers"><span class="freshersicon"></span>YOUR ESSENTIAL COLLEGE GUIDE</h2>
							
							
							
						</div>
							
							
					

						    <?php
										if ( is_object_in_term( $post->ID, 'section', 'news' ) ) :
										echo '<h2 style="margin-top: 10px;" class="newsectionheaders sectionnews">News</h2>';
	
	
										elseif ( is_object_in_term( $post->ID, 'section', 'infocus' ) ) :
										echo '<h2 style="margin-top: 10px;" class="newsectionheaders sectioninfocus">In Focus</h2>';
										
	
										elseif ( is_object_in_term( $post->ID, 'section', 'sport' ) ) :
										echo '<h2 style="margin-top: 10px;" class="newsectionheaders sectionsport">Sport</h2>';
	
										elseif ( is_object_in_term( $post->ID, 'section', 'magazine' ) ) :
										echo '<h2 style="margin-top: 10px;" class="newsectionheaders sectionmagazine">Magazine</h2>';
	
										elseif ( is_object_in_term( $post->ID, 'section', 'radius' ) ) :
										echo '<h3 style="margin: 10px 0px 30px 0px;" class="radiuslogo">Radius</h3>
										
										
								
								
								
								
								
								';
										
										elseif ( is_object_in_term( $post->ID, 'section', 'opinion' ) ) :
										echo '<h2 style="margin-top: 10px;" class="newsectionheaders sectionopinion">Comment & Analysis</h2>';





										else :
											
											endif;
								?>
								
								
								
												<?php  if ( !is_paged() ) {    ?>


		<?php 
// the query


$args = array(
	'post_type' => array('post', 'feature'),
	'posts_per_page' => 25,
	'tax_query' => array(
				array(
					'taxonomy' => 'section',
					'terms' => array('freshers'),
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
		
	
$ordered_list = get_option("ut_post_order_freshers_list_3");



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
							
							

$finalpostlist = array_filter($mergelists);


							
							




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

$finalpostlist = array_filter($listofrecentposts);
	
	
	
}






?>



			
			
			
						

				
				
				
				
				
				<div id="topblocks">

					<div id="leftofit">

						
														<?php
								
							
 


$main_args = array(

				'posts_per_page' => -1,
				'post_status' => 'publish',
				'post__in' =>  $finalpostlist,
				'orderby' => 'post__in',
				
			);


  
    $main_query = new WP_Query( $main_args );
 
 

 
if ( $main_query->have_posts() ) : ?>
							
							
							
							
<?php $count = 0; ?>



<?php while ( $main_query->have_posts() ) : $main_query->the_post(); ?>


<?php $count++; ?>



<?php if ($count == 1) : ?>



<div class="numberonebig">
						
						
			<div class="postlink">
						
						
						<?php 
						$utpostimage_id = get_post_meta( $post->ID, "utpostimage_id", true ); 	
						$utpostimage_url = get_post_meta( $post->ID, "utpostimage_url", true ); 	
						$utpostimage_position = get_post_meta( $post->ID, "utpostimage_position", true );
							
						?>
						
						
						

						
						
						
							<?php if ($utpostimage_url != '' && ($utpostimage_position == 'landscaperight' || $utpostimage_position == 'landscapeabove') ) : ?>
								
								<a class="onebigimage" href="<?php echo get_permalink(); ?>">
									<div class="onecropper"> 
											
												<img src="<?php echo $utpostimage_url ?>" alt="blank" />
											
									</div>
									
									<?php $imagecredit =  get_post_meta( $post->ID, "utpostimage_credit", true ); ?>
									
									<?php if ($imagecredit != "") {   ?>
									
									<div style="margin-bottom: 18px; width: 100%;">
									
									<div class="oneimagecaption"><?php echo $imagecredit ?></div>
									
									
									</div>
									
									<?php } ?>
									
									
								</a>

								<script type="text/javascript">
											jQuery('.onecropper').imagefill();
        						</script>
							<?php endif; ?>
						
						
							<?php $layoutoffirstarticle = 'landscape';
								
								
								if ($utpostimage_url != '' && ($utpostimage_position == 'portraitright' || $utpostimage_position == 'smallportraitleft' || $utpostimage_position == 'bigportraitleft' )) : ?>
						
								<?php $layoutoffirstarticle = 'portrait'; ?>
						
								<a class="onebigimageportrait" href="<?php echo get_permalink(); ?>">		
									<div class="portrait-crop"> 
									
										<?php if ($utpostimage_id != "") { ?>
											<?php print wp_get_attachment_image($utpostimage_id, 'homepage-portrait'); ?>
										<?php } else { ?>z
											<img src="<?php echo $utpostimage_url ?>" alt="blank" />
										<?php } ?>

									</div>
								
									
							
									<div class="oneimagecaption"><?php echo get_post_meta( $post->ID, "utpostimage_credit", true ); ?></div>
								</a>

						
							<?php endif; ?>

								<div <?php if ($layoutoffirstarticle == 'portrait') echo "class='floaterright'";?>>
							
							
								
										<h3 class="onebigheadline">
								
											<a href="<?php echo get_permalink(); ?>">
												
											<?php if (in_category( '1680', $post->ID ) ) {
												
												echo 'Dear Fresher Me: ';
												
											} ?>
												
												
												<?php the_title(); ?></a>
								
										</h3>
								
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
								
								
							<div class="onebiginformationbox">
							
							
							
								<?php
										if ( is_object_in_term( $post->ID, 'section', 'news' ) ) :
										echo '<a href="'.home_url().'/news" class="onebigsectiontag newstag">News</a>';
	
	
										elseif ( is_object_in_term( $post->ID, 'section', 'infocus' ) ) :
										echo '<a href="'.home_url().'/infocus" class="onebigsectiontag infocustag">In Focus</a>';
	
										elseif ( is_object_in_term( $post->ID, 'section', 'sport' ) ) :
										echo '<a href="'.home_url().'/sport" class="onebigsectiontag sporttag">Sport</a>';
	
										elseif ( is_object_in_term( $post->ID, 'section', 'magazine' ) ) :
										echo '<a href="'.home_url().'/magazine" class="onebigsectiontag magazinetag">Magazine</a>';
	
										elseif ( is_object_in_term( $post->ID, 'section', 'radius' ) ) :
										echo '<a href="'.home_url().'/radius" class="onebigsectiontag radiustag">Radius</a>';





										else :
											echo '';
											endif;
								?>
							
							
							
							
							
							<div class="rightinfo"> 
							
							
							
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
							
							 
							 
							 
							 							 
							 
							 
							  </div>
					
					
					
							</div> <!-- End of wrapper for post data -->
					
					
					</div>  <!-- end of postlink -->
					
					
							
							</div>
							
							
							
							
							
							<div style="clear: both;"></div>
							
												
						
						
						
						

						
						
						</div>

							
							
							
				


						
						
						</div>




							
							



<div id="rightofit">
						
						
						<div id="leftonright">
						
						
						



							
							<?php elseif ($count == 2) : ?>


<div class="numbertwobigend">
							
							<div class="postlink">
								
								
								
								<?php 
						$utpostimage_id = get_post_meta( $post->ID, "utpostimage_id", true ); 	
						$utpostimage_url = get_post_meta( $post->ID, "utpostimage_url", true ); 	
						$utpostimage_position = get_post_meta( $post->ID, "utpostimage_position", true );
							
						?>
						
						
						

						
						
						
							<?php if ($utpostimage_url != '' || $utpostimage_id != '') : ?>
								
								
								
							
							<a href="<?php echo get_permalink(); ?>" class="fourbigimage">
								<?php 
								$utpostimage_id = get_post_meta( $post->ID, "utpostimage_id", true ); 	
								$utpostimage_url = get_post_meta( $post->ID, "utpostimage_url", true ); 	
								?>
								<div class="fourcropper"> 
										<img src="<?php echo $utpostimage_url ?>" alt="blank" />
								</div>

								<script type="text/javascript">
											jQuery('.fourcropper').imagefill();
        						</script>
							</a>
							
							<?php endif; ?>

						
								<h3 class="fourbigheadline"><a href="<?php echo get_permalink(); ?>">
									
									
									<?php if (in_category( '1680', $post->ID ) ) {
												
												echo 'Dear Fresher Me:';
												
											} ?>
									
									
									<?php the_title(); ?></a></h3>
								
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
								
							</div> <!-- end of postlink -->
								
								
										<div class="onebiginformationbox">
										
												<?php
if ( is_object_in_term( $post->ID, 'section', 'news' ) ) :
	echo '<a href="'.home_url().'/news" class="onebigsectiontag newstag">News</a>';
	
	
	elseif ( is_object_in_term( $post->ID, 'section', 'infocus' ) ) :
	echo '<a href="'.home_url().'/infocus" class="onebigsectiontag infocustag">In Focus</a>';
	
	elseif ( is_object_in_term( $post->ID, 'section', 'sport' ) ) :
	echo '<a href="'.home_url().'/sport" class="onebigsectiontag sporttag">Sport</a>';
	
	elseif ( is_object_in_term( $post->ID, 'section', 'magazine' ) ) :
	echo '<a href="'.home_url().'/magazine" class="onebigsectiontag magazinetag">Magazine</a>';
	
	elseif ( is_object_in_term( $post->ID, 'section', 'radius' ) ) :
	echo '<a href="'.home_url().'/radius" class="onebigsectiontag radiustag">Radius</a>';





else :
	echo '';
endif;
?>

								
												<div class="rightinfo">
												
												
												<?php
							
							$writername = get_post_meta( get_the_ID(), '_writer_name', true );
							$writername2 = get_post_meta( get_the_ID(), '_writer_name_two', true );
							$writername3 = get_post_meta( get_the_ID(), '_writer_name_three', true );
							$writername4 = get_post_meta( get_the_ID(), '_writer_name_four', true );
							$writername5 = get_post_meta( get_the_ID(), '_writer_name_five', true );
							
							
							
							if ( is_object_in_term( $post->ID, 'articletype', 'editorialnotebook' ) ) {
										
										
										echo '<span class="onebigauthorname">By <span class="authoruppercase">The Editorial Board</span></span>';
									
									
								}
							
							
							elseif ($writername5 == "" and $writername4 == "" and $writername3 == "" and $writername2 == "" and $writername !== "") {
							
							 echo '<span class="onebigauthorname">By <span class="authoruppercase">'.get_post_meta( get_the_ID(), '_writer_name', true ).'</span></span>'; 
							 
							 
							 }
							 
							 
							 elseif ($writername5 == "" and $writername4 == "" and $writername3 == "" and $writername2 !== "") {
								 
								 
								echo '<span class="onebigauthorname">By <span class="authoruppercase">'.get_post_meta( get_the_ID(), '_writer_name', true ).'</span> and <span class="authoruppercase">'.get_post_meta( get_the_ID(), '_writer_name_two', true ).'</span></span>'; 
								 
								 
							 }
							 
							 
							 
							 
							 ?>
																			
												
												</div>									
									
											
										</div>
							
						
							</div>

							
							
							
							
							

						
						</div>
							
													
							
							
							
							
													
						
						
						
						<div id="rightonright">
						
											<?php elseif ($count == 3) : ?>
											
											<div class="numberone">
						
						<div class="postlink">
						
						
						<?php 
							$utpostimage_id = get_post_meta( $post->ID, "utpostimage_id", true ); 
							$utpostimage_url = get_post_meta( $post->ID, "utpostimage_url", true ); 
							$utpostimage_position = get_post_meta( $post->ID, "utpostimage_position", true ); ?>

						
						<?php if ($utpostimage_url != '' && ($utpostimage_position == 'landscaperight' || $utpostimage_position == 'landscapeabove' || $utpostimage_position == 'portraitright' || $utpostimage_position == 'smallportraitleft' || $utpostimage_position == 'bigportraitleft' )) : ?>
								
							<div class="oneright">
								
				
								<a class="elevenbigimage" href="<?php echo get_permalink(); ?>">

									
									<div class="one2cropper"> 
											<img src="<?php echo $utpostimage_url ?>" alt="blank" />
									</div>
									
									
									<script type="text/javascript">
											jQuery('.one2cropper').imagefill();
        						</script>
        						
									
								
									
									
									
									
									
									
								
								
																
								
								
								</div> <!-- end of oneright -->
								
								</a>
						<?php endif; ?>
					
							<div class="oneleft">
							
							
								
								
								<h3 class="oneheadline<?php if ($utpostimage_url == '') { echo '_bigger'; } ?>"><a href="<?php echo get_permalink(); ?>">
									
									<?php if (in_category( '1680', $post->ID ) ) {
												
												echo 'Dear Fresher Me: ';
												
											} ?>
									
									
									<?php the_title(); ?></a></h3>
								
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
								
							
							
							<div class="onebiginformationbox">
							
							<?php
if ( is_object_in_term( $post->ID, 'section', 'news' ) ) :
	echo '<a href="'.home_url().'/news" class="onebigsectiontag newstag">News</a>';
	
	
	elseif ( is_object_in_term( $post->ID, 'section', 'infocus' ) ) :
	echo '<a href="'.home_url().'/infocus" class="onebigsectiontag infocustag">In Focus</a>';
	
	elseif ( is_object_in_term( $post->ID, 'section', 'sport' ) ) :
	echo '<a href="'.home_url().'/sport" class="onebigsectiontag sporttag">Sport</a>';
	
	elseif ( is_object_in_term( $post->ID, 'section', 'magazine' ) ) :
	echo '<a href="'.home_url().'/magazine" class="onebigsectiontag magazinetag">Magazine</a>';
	
	elseif ( is_object_in_term( $post->ID, 'section', 'radius' ) ) :
	echo '<a href="'.home_url().'/radius" class="onebigsectiontag radiustag">Radius</a>';





else :
	echo '';
endif;
?>
							
							
							<div class="rightinfo">
							
							
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
							
							 
							 
 </div>
							
							</div>

							
							
								
								
							</div> <!-- end of oneleft -->
							
							
							
							
						
						
						
						<div style="clear: both;"></div>
	
							
							
							
</div> <!-- end of postlink -->
							
							
								
																
							
							
							
							
							
													

						
						
						</div>
						
						
						
						
						<?php elseif ($count == 4) : ?>
											
											<div class="numberone">
						
						<div class="postlink">
						
						
						<?php 
							$utpostimage_id = get_post_meta( $post->ID, "utpostimage_id", true ); 
							$utpostimage_url = get_post_meta( $post->ID, "utpostimage_url", true ); 
							$utpostimage_position = get_post_meta( $post->ID, "utpostimage_position", true ); ?>

						
						<?php if ($utpostimage_url != '' && ($utpostimage_position == 'landscaperight' || $utpostimage_position == 'landscapeabove' || $utpostimage_position == 'portraitright' || $utpostimage_position == 'smallportraitleft' || $utpostimage_position == 'bigportraitleft' )) : ?>
								
							<div class="oneright">
								
				
								<a class="elevenbigimage" href="<?php echo get_permalink(); ?>">

									
									<div class="one2cropper"> 
											<img src="<?php echo $utpostimage_url ?>" alt="blank" />
									</div>
									
									
									<script type="text/javascript">
											jQuery('.one2cropper').imagefill();
        						</script>
        						
									
								
									
									
									
									
									
									
								
								
																
								
								
								</div> <!-- end of oneright -->
								
								</a>
						<?php endif; ?>
					
							<div class="oneleft">
							
							
								
								
								<h3 class="oneheadline<?php if ($utpostimage_url == '') { echo '_bigger'; } ?>"><a href="<?php echo get_permalink(); ?>">
									
										<?php if (in_category( '1680', $post->ID ) ) {
												
												echo 'Dear Fresher Me: ';
												
											} ?>
									
									<?php the_title(); ?></a></h3>
								
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
								
							
							
							<div class="onebiginformationbox">
							
							<?php
if ( is_object_in_term( $post->ID, 'section', 'news' ) ) :
	echo '<a href="'.home_url().'/news" class="onebigsectiontag newstag">News</a>';
	
	
	elseif ( is_object_in_term( $post->ID, 'section', 'infocus' ) ) :
	echo '<a href="'.home_url().'/infocus" class="onebigsectiontag infocustag">In Focus</a>';
	
	elseif ( is_object_in_term( $post->ID, 'section', 'sport' ) ) :
	echo '<a href="'.home_url().'/sport" class="onebigsectiontag sporttag">Sport</a>';
	
	elseif ( is_object_in_term( $post->ID, 'section', 'magazine' ) ) :
	echo '<a href="'.home_url().'/magazine" class="onebigsectiontag magazinetag">Magazine</a>';
	
	elseif ( is_object_in_term( $post->ID, 'section', 'radius' ) ) :
	echo '<a href="'.home_url().'/radius" class="onebigsectiontag radiustag">Radius</a>';





else :
	echo '';
endif;
?>
							
							
							<div class="rightinfo">
							
							
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
							
							 
							   </div>
							
							</div>

							
							
								
								
							</div> <!-- end of oneleft -->
							
							
							
							
						
						
						
						<div style="clear: both;"></div>
	
							
							
							
</div> <!-- end of postlink -->
							
							
								
																
							
							
							
							
							
													

						
						
						</div>
							
							
							
									<?php elseif ($count == 5) : ?>
											
											<div class="numberone numberonelast">
						
						<div class="postlink">
						
						
						<?php 
							$utpostimage_id = get_post_meta( $post->ID, "utpostimage_id", true ); 
							$utpostimage_url = get_post_meta( $post->ID, "utpostimage_url", true ); 
							$utpostimage_position = get_post_meta( $post->ID, "utpostimage_position", true ); ?>

						
						<?php if ($utpostimage_url != '' && ($utpostimage_position == 'landscaperight' || $utpostimage_position == 'landscapeabove' || $utpostimage_position == 'portraitright' || $utpostimage_position == 'smallportraitleft' || $utpostimage_position == 'bigportraitleft' )) : ?>
								
							<div class="oneright">
								
				
								<a class="elevenbigimage" href="<?php echo get_permalink(); ?>">

									
									<div class="one2cropper"> 
											<img src="<?php echo $utpostimage_url ?>" alt="blank" />
									</div>
									
									
									<script type="text/javascript">
											jQuery('.one2cropper').imagefill();
        						</script>
        						
									
								
									
									
									
									
									
									
								
								
																
								
								
								</div> <!-- end of oneright -->
								
								</a>
						<?php endif; ?>
					
							<div class="oneleft">
							
							
								
								
								<h3 class="oneheadline<?php if ($utpostimage_url == '') { echo '_bigger'; } ?>"><a href="<?php echo get_permalink(); ?>">
										<?php if (in_category( '1680', $post->ID ) ) {
												
												echo 'Dear Fresher Me: ';
												
											} ?>
									
									<?php the_title(); ?></a></h3>
								
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
								
							
							
							<div class="onebiginformationbox">
							
							<?php
if ( is_object_in_term( $post->ID, 'section', 'news' ) ) :
	echo '<a href="'.home_url().'/news" class="onebigsectiontag newstag">News</a>';
	
	
	elseif ( is_object_in_term( $post->ID, 'section', 'infocus' ) ) :
	echo '<a href="'.home_url().'/infocus" class="onebigsectiontag infocustag">In Focus</a>';
	
	elseif ( is_object_in_term( $post->ID, 'section', 'sport' ) ) :
	echo '<a href="'.home_url().'/sport" class="onebigsectiontag sporttag">Sport</a>';
	
	elseif ( is_object_in_term( $post->ID, 'section', 'magazine' ) ) :
	echo '<a href="'.home_url().'/magazine" class="onebigsectiontag magazinetag">Magazine</a>';
	
	elseif ( is_object_in_term( $post->ID, 'section', 'radius' ) ) :
	echo '<a href="'.home_url().'/radius" class="onebigsectiontag radiustag">Radius</a>';





else :
	echo '';
endif;
?>
							
							
							<div class="rightinfo">
							
							
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
							
							 
							   </div>
							
							</div>

							
							
								
								
							</div> <!-- end of oneleft -->
							
							
							
							
						
						
						
						<div style="clear: both;"></div>
	
							
							
							
</div> <!-- end of postlink -->
							
							
								
																
							
							
							
							
							
													

						
						
						</div>
							
	
						
						
						
						
						
						<?php else : ?>
							
								
							
							
							

<?php endif; ?>
<?php endwhile; ?>


<?php wp_reset_query(); wp_reset_postdata()?>






<?php endif; ?>

						
						
						
						</div> <!-- End of rightonright -->
						
						
						
						
						
						
						<div style="clear:both"></div>
						
						
						
					</div>
					
					
					<div style="clear:both"></div>
				

				</div>
				
				<div style="clear:both"></div>
				
				
			 <!-- end of topblocks -->
				
				
				
				<h4 class="section-latest">THE LATEST</h4>

			



<?php 
	  
  }
 ?>	
						<div class="sectionpageleft">		
								


							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							
							
							
							
							
							<a class="sectionpagearticle" href="<?php the_permalink(); ?>" style="min-height: 130px; width: 100%;">
								
								
								<?php 
						$utpostimage_url = get_post_meta( $post->ID, "utpostimage_url", true );	
						$featuredimageurl = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
							
						?>
								
								<div class="sectionpageimagecropper">
									
									
									<?php if ($utpostimage_url != "") : ?>
									
								 		<img src="<?php echo $utpostimage_url ?>" alt="blank" />
								 		
								 		
								 	
								 		
								 		
								 	<?php elseif ($featuredimageurl != "") :  ?>
									
								 		<img src="<?php echo $featuredimageurl ?>" alt="blank" />
								 		
								 		
					
								 		
								 		
								 		
								 		<?php else :    ?>
									
								 		
								 		
								 		<?php endif; ?>
								 	
											
								
									
									
									
								</div>
								
								<script type="text/javascript">
											jQuery('.sectionpageimagecropper').imagefill();
        						</script>
							
								<div>
								
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
										
										elseif ( is_object_in_term( $post->ID, 'articletype', 'editorialnotebook' ) ) :
										echo 'Editorial Notebook';
										
										elseif ( is_object_in_term( $post->ID, 'articletype', 'op-ed' ) ) :
										echo 'Op-Ed';
										
										elseif ( is_object_in_term( $post->ID, 'articletype', 'radiusfeatures' ) ) :
										echo 'Feature';
	
	
										elseif ( is_object_in_term( $post->ID, 'articletype', 'radius5of' ) ) :
										echo 'Five Of The Best';
	
										elseif ( is_object_in_term( $post->ID, 'articletype', 'radiusextract' ) ) :
										echo 'Extract';
	
										elseif ( is_object_in_term( $post->ID, 'articletype', 'radiusobservations' ) ) :
										echo 'Observations';
	
										elseif ( is_object_in_term( $post->ID, 'articletype', 'radiuspreviews' ) ) :
										echo 'Preview';
										
										elseif ( is_object_in_term( $post->ID, 'articletype', 'radiusreviews' ) ) :
										echo 'Review';
										
										elseif ( is_object_in_term( $post->ID, 'articletype', 'radiussnapshot' ) ) :
										echo 'Snapshot';
										
										elseif ( is_object_in_term( $post->ID, 'articletype', 'radiusspeakingwith' ) ) :
										echo 'Speaking with';






										else :
											
											endif;
								?>


		 </h5>
								

									<h3 class="sectionpageheader">
										
										<?php
										
										if ( in_category( '1680', $post->ID ) ) {
										
										echo 'Dear Fresher Me: ';
										
										
										}
										
										?>
										
										
										<?php the_title(); ?></h3>
									
									
										<?php 
						$utpostimage_id = get_post_meta( $post->ID, "utpostimage_id", true ); 	
						$utpostimage_url = get_post_meta( $post->ID, "utpostimage_url", true ); 	
						$utpostimage_position = get_post_meta( $post->ID, "utpostimage_position", true );
							
						?>
						
						
						
						
								
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
							
							
							
							
							
						
								
								
						if ( is_object_in_term( $post->ID, 'articletype', 'editorialnotebook' ) ) {
							
							
							echo '<span class="onebigauthorname">By <span class="authoruppercase">The Editorial Board</span></span>';
															
							}
							
							
							
						elseif ( is_object_in_term( $post->ID, 'articletype', 'editorials' ) ) {
							
							
							echo '<span class="onebigauthorname">By <span class="authoruppercase">The Editorial Board</span></span>';
															
						}
							
							
							elseif ($writername5 == "" and $writername4 == "" and $writername3 == "" and $writername2 == "" and $writername !== "") {
							
							 echo '<span class="onebigauthorname">By <span class="authoruppercase">'.get_post_meta( get_the_ID(), '_writer_name', true ).'</span></span>'; 
							 
							 
							 }
							 
							 
							 elseif ($writername5 == "" and $writername4 == "" and $writername3 == "" and $writername2 !== "") {
								 
								 
								echo '<span class="onebigauthorname">By <span class="authoruppercase">'.get_post_meta( get_the_ID(), '_writer_name', true ).'</span> and <span class="authoruppercase">'.get_post_meta( get_the_ID(), '_writer_name_two', true ).'</span></span>'; 
								 
								 
							 }
							 
							 
							 
							 
							 ?>
							 
							 
							 
									
								</div>
								
							</a>
								

							

							

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
						
						
								<div class="sectionpageright">
			
									
									
									
								</div>	
						
						
							

						</div>

					

				</div>

			</div>
						
						
						
						
						
						
						
