<?php wp_reset_postdata(); ?>			
			
			<div id="content">
				
				
				<a class="homepagebanner" href="http://www.universitytimes.ie/freshers/" style="position: relative;">
					
					
					
					<h5 class="homepagefreshersbanner"><span class="homepagefreshersicon"></span>YOUR ESSENTIAL COLLEGE GUIDE<span style="font-size: 9px; color: black;" class="blackarrowhome oi searchicon" data-glyph="caret-right" title="caret right" aria-hidden="true"></span></h5>
					
					
					<span class="seefullraceanalysis" style="font-weight: 800; right: 15px; top: 13px; position: absolute;" >READ <span style="font-size: 9px;" class="oi searchicon" data-glyph="caret-right" title="caret right" aria-hidden="true"></span></span>
					
					
				</a>
				
				
		<?php 
// the query


$args = array(
	'post_type' => array('post', 'feature'),
	'posts_per_page' => 25,
	'tax_query' => array(
				array(
					'taxonomy' => 'section',
					'terms' => array('infocus', 'magazine', 'news', 'radius', 'sport', 'freshers'),
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
						

				<div id="inner-content" class="wrap cf">
				
				
				
				
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



<div class="numberonebig <?php if (has_tag( '2265', $post->ID ) ) {
												
												echo 'numberonebig-trinitytwenty';
												
											} ?>">
						
						
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
							
							 
							 
							 
							 							 
							 
							 
							 <?php
											 
											 
											 
	  
	  $date_u = current_time('timestamp');
	  
	  $post_time = get_post_time('U');
	  
	  $post_age = $date_u - $post_time; 
	
      $post_age_in_hours = $post_age/3600;
      
      $post_age_in_minutes = $post_age/60;	
      
      $hours = 10;



if($hours > $post_age_in_hours ) {
	
	
	
	if ($post_age_in_hours > 1) {
	
	echo '<span class="onebigdate">'.get_the_time().'</span>' ;
	
	
	}
	
	
	
	
	elseif(1 > $post_age_in_hours) {


 
	
	
	$minutes = round($post_age_in_minutes);
	
	
	if ($minutes == 1) {
	
	
	echo '<span class="onebigdate">'.$minutes.' minute ago</span>' ;
	
	
	
	
	
	}
	
	
	
	
	else {
	
	
	echo '<span class="onebigdate">'.$minutes.' minutes ago</span>' ;
	
	}
	
	
	
	
}

	
	
	
	
}







else {
	
	
	
}


?>
 </div>
					
					
					
							</div> <!-- End of wrapper for post data -->
					
					
					</div>  <!-- end of postlink -->
					
					
							
							</div>
							
							
							
							
							
							<div style="clear: both;"></div>
							
												
						
						
						
						

						
						
						</div>

							
							
							
					<?php elseif ($count == 2) : ?>




<div class="numberone">
						
						<div class="postlink">
						
						
						<?php 
							$utpostimage_id = get_post_meta( $post->ID, "utpostimage_id", true ); 
							$utpostimage_url = get_post_meta( $post->ID, "utpostimage_url", true ); 
							$utpostimage_position = get_post_meta( $post->ID, "utpostimage_position", true ); ?>

						
						<?php if ($utpostimage_url != '' && ($utpostimage_position == 'landscaperight' || $utpostimage_position == 'landscapeabove' || $utpostimage_position == 'portraitright' || $utpostimage_position == 'smallportraitleft' || $utpostimage_position == 'bigportraitleft' )) : ?>
								
							<div class="oneright">
								
				
								<a class="" href="<?php echo get_permalink(); ?>">

									
									<div class="one2cropper"> 
											<img src="<?php echo $utpostimage_url ?>" alt="blank" />
									</div>
									
									
									<script type="text/javascript">
											jQuery('.one2cropper').imagefill();
        						</script>
        						
									
								
									
									
									
									
									
									
								
								
								<div class="oneimagecaption"><?php echo get_post_meta( $post->ID, "utpostimage_credit", true );  ?></div>
								
								
								
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
							
							 
							  <?php
											 
											 
											 
	  
	  $date_u = current_time('timestamp');
	  
	  $post_time = get_post_time('U');
	  
	  $post_age = $date_u - $post_time; 
	
      $post_age_in_hours = $post_age/3600;
      
      $post_age_in_minutes = $post_age/60;	
      
      $hours = 10;



if($hours > $post_age_in_hours ) {
	
	
	
	if ($post_age_in_hours > 1) {
	
	echo '<span class="onebigdate">'.get_the_time().'</span>' ;
	
	
	}
	
	
	
	
	elseif(1 > $post_age_in_hours) {


 
	
	
	$minutes = round($post_age_in_minutes);
	
	
	if ($minutes == 1) {
	
	
	echo '<span class="onebigdate">'.$minutes.' minute ago</span>' ;
	
	
	
	
	
	}
	
	
	
	
	else {
	
	
	echo '<span class="onebigdate">'.$minutes.' minutes ago</span>' ;
	
	}
	
	
	
	
}

	
	
	
	
}







else {
	
	
	
}


?>
 </div>
							
							</div>

							
							
								
								
							</div> <!-- end of oneleft -->
							
							
							
							
						
						
						
						<div style="clear: both;"></div>
	
							
							
							
</div> <!-- end of postlink -->
							
							
								
																
							
							
							
							
							
													

						
						
						</div>
							
							
							
							
							
							<div <?php if ($layoutoffirstarticle == 'portrait') echo "class='smallerlistborder'";?>>
							
							
							
							<ul class="smallerstufflist">
							
							
							
							<?php elseif ($count == 3) : ?>
							
							
							<li class="smallerstuff">
						
						<h3><a href="<?php echo get_permalink(); ?>">
							<?php if (in_category( '1680', $post->ID ) ) {
												
												echo 'Dear Fresher Me: ';
												
											} ?>
							
							<?php the_title(); ?></a>
						
						 <?php
											 
											 
											 
	  
	  $date_u = current_time('timestamp');
	  
	  $post_time = get_post_time('U');
	  
	  $post_age = $date_u - $post_time; 
	
      $post_age_in_hours = $post_age/3600;
      
      $post_age_in_minutes = $post_age/60;	
      
      $hours = 10;



if($hours > $post_age_in_hours ) {
	
	
	
	if ($post_age_in_hours > 1) {
	
	echo '<span class="onebigdate">'.get_the_time().'</span>' ;
	
	
	}
	
	
	
	
	elseif(1 > $post_age_in_hours) {
	
	$minutes = round($post_age_in_minutes);
	
	
	if ($minutes == 1) {
	
	
	echo '<span class="onebigdate">'.$minutes.' minute ago</span>' ;
	
	
	
	
	
	}
	
	
	
	
	else {
	
	
	echo '<span class="onebigdate">'.$minutes.' minutes ago</span>' ;
	
	}
	
	
	
	
}

	
	
	
	
}







else {
	
	
	
}


?>

						
						</h3>   							
							
														
							
							
							
							
							
							

						</li>

							

							
							<?php elseif ($count == 4) : ?>


<li class="smallerstuff">
						
						<h3><a href="<?php echo get_permalink(); ?>">
							
							
							<?php if (in_category( '1680', $post->ID ) ) {
												
												echo 'Dear Fresher Me: ';
												
											} ?>
							
							<?php the_title(); ?></a>
						
						
						
						
						 <?php
											 
											 
											 
	  
	  $date_u = current_time('timestamp');
	  
	  $post_time = get_post_time('U');
	  
	  $post_age = $date_u - $post_time; 
	
      $post_age_in_hours = $post_age/3600;
      
      $post_age_in_minutes = $post_age/60;	
      
      $hours = 10;



if($hours > $post_age_in_hours ) {
	
	
	
	if ($post_age_in_hours > 1) {
	
	echo '<span class="onebigdate">'.get_the_time().'</span>' ;
	
	
	}
	
	
	
	
	elseif(1 > $post_age_in_hours) {


 
	
	
	$minutes = round($post_age_in_minutes);
	
	
	if ($minutes == 1) {
	
	
	echo '<span class="onebigdate">'.$minutes.' minute ago</span>' ;
	
	
	
	
	
	}
	
	
	
	
	else {
	
	
	echo '<span class="onebigdate">'.$minutes.' minutes ago</span>' ;
	
	}
	
	
	
	
}

	
	
	
	
}







else {
	
	
	
}


?>

						
						
						</h3>


							
						
							
							
														
							
							
							
							
							
							

						</li>
						
						
						
						<?php elseif ($count == 5) : ?>


<li class="smallerstuff">
						
						<h3><a href="<?php echo get_permalink(); ?>">
							
							<?php if (in_category( '1680', $post->ID ) ) {
												
												echo 'Dear Fresher Me: ';
												
											} ?>
							
							<?php the_title(); ?></a>
						
						
						
						 <?php
											 
											 
											 
	  
	  $date_u = current_time('timestamp');
	  
	  $post_time = get_post_time('U');
	  
	  $post_age = $date_u - $post_time; 
	
      $post_age_in_hours = $post_age/3600;
      
      $post_age_in_minutes = $post_age/60;	
      
      $hours = 10;



if($hours > $post_age_in_hours ) {
	
	
	
	if ($post_age_in_hours > 1) {
	
	echo '<span class="onebigdate">'.get_the_time().'</span>' ;
	
	
	}
	
	
	
	
	elseif(1 > $post_age_in_hours) {


 
	
	
	$minutes = round($post_age_in_minutes);
	
	
	if ($minutes == 1) {
	
	
	echo '<span class="onebigdate">'.$minutes.' minute ago</span>' ;
	
	
	
	
	
	}
	
	
	
	
	else {
	
	
	echo '<span class="onebigdate">'.$minutes.' minutes ago</span>' ;
	
	}
	
	
	
	
}

	
	
	
	
}







else {
	
	
	
}


?>

						
						
						
						</h3>


							
						
							
							
														
							
							
							
							
							
							

						</li>

						
						
						
						</ul>
						
						
							</div> <!-- end of smallerlistborder -->
						
						
						
						
						</div>




							
							



<div id="rightofit">
						<?php elseif ($count == 6) : ?>
						
						<div id="leftonright">
						
						
							<div class="numbertwobig">
						
						
						<div class="postlink">
						
								<h3 class="twobigheadline <?php if ($layoutoffirstarticle == 'portrait') echo "smallertwobigheadline";?>"><a href="<?php echo get_permalink(); ?>">
									
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
							
							
							if ($writername5 == "" and $writername4 == "" and $writername3 == "" and $writername2 == "" and $writername !== "") {
							
							 echo '<span class="onebigauthorname">By <span class="authoruppercase">'.get_post_meta( get_the_ID(), '_writer_name', true ).'</span></span>'; 
							 
							 
							 }
							 
							 
							 elseif ($writername5 == "" and $writername4 == "" and $writername3 == "" and $writername2 !== "") {
								 
								 
								echo '<span class="onebigauthorname">By <span class="authoruppercase">'.get_post_meta( get_the_ID(), '_writer_name', true ).'</span> and <span class="authoruppercase">'.get_post_meta( get_the_ID(), '_writer_name_two', true ).'</span></span>'; 
								 
								 
							 }
							 
							 
							 
							 
							 ?>
							
												
												
												
									 <?php
											 
											 
											 
	  
	  $date_u = current_time('timestamp');
	  
	  $post_time = get_post_time('U');
	  
	  $post_age = $date_u - $post_time; 
	
      $post_age_in_hours = $post_age/3600;
      
      $post_age_in_minutes = $post_age/60;	
      
      $hours = 10;



if($hours > $post_age_in_hours ) {
	
	
	
	if ($post_age_in_hours > 1) {
	
	echo '<span class="onebigdate">'.get_the_time().'</span>' ;
	
	
	}
	
	
	
	
	elseif(1 > $post_age_in_hours) {


 
	
	
	$minutes = round($post_age_in_minutes);
	
	
	if ($minutes == 1) {
	
	
	echo '<span class="onebigdate">'.$minutes.' minute ago</span>' ;
	
	
	
	
	
	}
	
	
	
	
	else {
	
	
	echo '<span class="onebigdate">'.$minutes.' minutes ago</span>' ;
	
	}
	
	
	
	
}

	
	
	
	
}







else {
	
	
	
}


?>
 </div>
									
									
											
										</div>
							
						
							</div>




	
							
							<?php elseif ($count == 7) : ?>

<div class="newsletterhomepage">
	
		<div class="emailnewslettershomepageicon">
		</div>
		
		<a href="http://universitytimes.ie/newsletters" class="newsletterhomepage">Sign Up to Our Newsletters</a>
		
		<div style="clear:both;"></div>
	
	
	
</div>




<div class="numbertwobig">
							
							<div class="postlink">

						
								<h3 class="threebigheadline"><a href="<?php echo get_permalink(); ?>">
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
							
							
							if ($writername5 == "" and $writername4 == "" and $writername3 == "" and $writername2 == "" and $writername !== "") {
							
							 echo '<span class="onebigauthorname">By <span class="authoruppercase">'.get_post_meta( get_the_ID(), '_writer_name', true ).'</span></span>'; 
							 
							 
							 }
							 
							 
							 elseif ($writername5 == "" and $writername4 == "" and $writername3 == "" and $writername2 !== "") {
								 
								 
								echo '<span class="onebigauthorname">By <span class="authoruppercase">'.get_post_meta( get_the_ID(), '_writer_name', true ).'</span> and <span class="authoruppercase">'.get_post_meta( get_the_ID(), '_writer_name_two', true ).'</span></span>'; 
								 
								 
							 }
							 
							 
							 
							 
							 ?>
							
												
												
											 <?php
											 
											 
											 
	  
	  $date_u = current_time('timestamp');
	  
	  $post_time = get_post_time('U');
	  
	  $post_age = $date_u - $post_time; 
	
      $post_age_in_hours = $post_age/3600;
      
      $post_age_in_minutes = $post_age/60;	
      
      $hours = 10;



if($hours > $post_age_in_hours ) {
	
	
	
	if ($post_age_in_hours > 1) {
	
	echo '<span class="onebigdate">'.get_the_time().'</span>' ;
	
	
	}
	
	
	
	
	elseif(1 > $post_age_in_hours) {


 
	
	
	$minutes = round($post_age_in_minutes);
	
	
	if ($minutes == 1) {
	
	
	echo '<span class="onebigdate">'.$minutes.' minute ago</span>' ;
	
	
	
	
	
	}
	
	
	
	
	else {
	
	
	echo '<span class="onebigdate">'.$minutes.' minutes ago</span>' ;
	
	}
	
	
	
	
}

	
	
	
	
}







else {
	
	
	
}


?>
 </div>
									
									
											
										</div>
							
						
							</div>




							
							<?php elseif ($count == 8) : ?>


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
																			
												
											 <?php
											 
											 
											 
	  
	  $date_u = current_time('timestamp');
	  
	  $post_time = get_post_time('U');
	  
	  $post_age = $date_u - $post_time; 
	
      $post_age_in_hours = $post_age/3600;
      
      $post_age_in_minutes = $post_age/60;	
      
      $hours = 10;



if($hours > $post_age_in_hours ) {
	
	
	
	if ($post_age_in_hours > 1) {
	
	echo '<span class="onebigdate">'.get_the_time().'</span>' ;
	
	
	}
	
	
	
	
	elseif(1 > $post_age_in_hours) {


 
	
	
	$minutes = round($post_age_in_minutes);
	
	
	if ($minutes == 1) {
	
	
	echo '<span class="onebigdate">'.$minutes.' minute ago</span>' ;
	
	
	
	
	
	}
	
	
	
	
	else {
	
	
	echo '<span class="onebigdate">'.$minutes.' minutes ago</span>' ;
	
	}
	
	
	
	
}

	
	
	
	
}







else {
	
	
	
}


?>
 </div>
									
									
											
										</div>
							
						
							</div>

							
							
							
							
							

						
						</div>
							
													
							
							
							
							
							<?php else : ?>
							
								
							
							
							

<?php endif; ?>
<?php endwhile; ?>


<?php wp_reset_query(); ?>






<?php endif; ?>
						
						
						
						
						<div id="rightonright">
						
						<?php $running_opinion_total = 0; ?>
						
						
						<h3 class="opinionheading"><a href="<?php echo home_url(); ?>/opinion" class="opiniontag">Comment &amp; Analysis</a></h3>
						
						
						
						
														
														<?php		
														
														
														 $ids_to_exclude =	array(); 
														
														
														$argsforopinion = array(
										'post_type' => array('post'),
										'tax_query' => array(
											array(
												'taxonomy' => 'section',
												'terms' => array('opinion'),
												'field' => 'slug'
												),
											array(
												'taxonomy' => 'articletype',
												'terms' => array('profile'),
												'field' => 'slug'
												)
											),
										'orderby' => 'date',
										'post_status' => 'publish',
										'posts_per_page' => 1,
										'paged' => 1,
										'post__not_in' => $ids_to_exclude,
										);
											
									$the_query = new WP_Query( $argsforopinion ); 
									
								
									if ( $the_query->have_posts() ) : 
									
										while ( $the_query->have_posts() ) : $the_query->the_post(); 
											
										 $ids_to_exclude[] = get_the_id();
										 
										 
										  $date_u = current_time('timestamp');
																	  
																	  $post_time = get_post_time('U');
																	  
																	  $post_age = $date_u - $post_time; 
																	
																      $post_age_in_hours = $post_age/3600;
																      
																      $post_age_in_minutes = $post_age/60;	
																      
																      $profilehours = 28;
																
																
																
																if($profilehours > $post_age_in_hours ) {
																	
																	
															$running_opinion_total++;		
										 
										
										?>
		
		
		<div class="postlink profilepostlink">
						
						<h5 class="editorialminiheading">Profile</h5>
						
						
						<?php 
						$utpostimage_id = get_post_meta( $post->ID, "utpostimage_id", true ); 	
						$utpostimage_url = get_post_meta( $post->ID, "utpostimage_url", true ); 	
						$utpostimage_position = get_post_meta( $post->ID, "utpostimage_position", true );
							
						?>
						
						
						<?php if ($utpostimage_url != '' || $utpostimage_id != '') : ?>

						
						
						<a class="profileimage" href="<?php echo get_permalink(); ?>">


									<div class="profilecropper" style="">
										
										<img src="<?php echo $utpostimage_url; ?>" />
									
									</div>
						
						</a>	
						
						<script type="text/javascript">
											jQuery('.profilecropper').imagefill();
        						</script>
        						
        						
					
						
						
						<?php endif; ?>
							
							
							
							
							
						
						
						<h4 class="editorialheadline"><a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?> </a></h4>
						
						
							<a href="<?php echo get_the_permalink(); ?>" class="onebigcaption">
								
								<?php
									
								 if(function_exists("the_subtitle")) {
										
								 	echo get_the_subtitle();
										
										
								}		?>
								
								
							</a>
								
								

								
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
						
						
						<div style="clear:both"></div>
						
						</div> <!-- End of postlink -->
			
		
		
					
					
					
					<?php } ?>
					
					
		<?php endwhile; ?>
		
		<!-- end of the loop -->
	
		<!-- pagination here -->
	
		<?php wp_reset_postdata(); ?>
	
	<?php else : ?>
		
		
	<?php endif; 	
		
		wp_reset_postdata();
	
		
							
							?>

						
						
						

						
							
							
							<?php
								
							
 
 // current page number
$paged_l = 1;
// number of posts per page
$posts_per_page_l = 25;
// starting position
$offset = ( $paged_l - 1 ) * $posts_per_page_l;
// extract page of IDs




  
    $my_query = new WP_Query( array('post_type' => array( 'post', 'feature' ),
    													 'post_status' => 'publish',
    													 
    													 
    													 'posts_per_page' => 3,
    													 
    													 
	  													
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


<?php $count++; ?>



			<?php if ($count == 1) : ?>






								<?php
																			 
													
									 $editorial_one_the_title = get_the_title();	
									 
									 $editorial_one_get_permalink = get_permalink();	
									 
									 if(function_exists("the_subtitle")) {
																		
										$editorial_one_the_subtitle = get_the_subtitle();
																		
																		
										}									 
																			 
									  
									  $date_u = current_time('timestamp');
									  
									  $post_time = get_post_time('U');
									  
									  $post_age = $date_u - $post_time; 
									
								      $post_age_in_hours = $post_age/3600;
								      
								      $post_age_in_minutes = $post_age/60;	
								      
								      $editorialhours = 30;
								
								
								
								if($editorialhours > $post_age_in_hours ) {
									
									
									
									
									
								$editorial_one = 1;
								
								$potentialid_one = get_the_id();
											
									
									
								}
								
									
									
								
								
								
								
								
								
								
								else {
									
									
									$editorial_one = 0;
									
									
									
								}
								
								
								?>






					<?php endif; ?>



<?php if ($count == 2) : ?>


<?php
											 
											 
		 $editorial_two_the_title = get_the_title();	
	 
	 $editorial_two_get_permalink = get_permalink();	
	 
	 if(function_exists("the_subtitle")) {
										
		$editorial_two_the_subtitle = get_the_subtitle();
										
										
		}										 
	  
	  $date_u = current_time('timestamp');
	  
	  $post_time = get_post_time('U');
	  
	  $post_age = $date_u - $post_time; 
	
      $post_age_in_hours = $post_age/3600;
      
      $post_age_in_minutes = $post_age/60;	
      
      $editorialhours = 30;



if($editorialhours > $post_age_in_hours ) {
	
	
	
	
	
$editorial_two = 1;

$potentialid_two = get_the_id();
			
	
	
}

	
	
	
	







else {
	
	
	$editorial_two = 0;
	
	
	
}


?>			

<?php endif; ?>	
						
						
<?php if ($count == 3) : ?>







<?php
											 
			 $editorial_three_the_title = get_the_title();	
	 
	 $editorial_three_get_permalink = get_permalink();	
	 
	 if(function_exists("the_subtitle")) {
										
		$editorial_three_the_subtitle = get_the_subtitle();
										
										
		}									 
											 
	  
	  $date_u = current_time('timestamp');
	  
	  $post_time = get_post_time('U');
	  
	  $post_age = $date_u - $post_time; 
	
      $post_age_in_hours = $post_age/3600;
      
      $post_age_in_minutes = $post_age/60;	
      
      $editorialhours = 30;



if($editorialhours > $post_age_in_hours ) {
	
	
	
	
	
$editorial_three = 1;

$potentialid_three = get_the_id();
			
	
	
}

	
	
	
	







else {
	
	
	$editorial_three = 0;
	
	
	
}


?>



			
						
						
						
						
							
								
							
							
							

<?php endif; ?>
<?php endwhile; ?>


<?php wp_reset_query(); ?>






<?php endif; ?>

					
						
						
					<?php if ($editorial_one + $editorial_two + $editorial_three == 1) : ?>
					
					<?php $ids_to_exclude[] = $potentialid_one;
						
							$one_editorial_printed = "yes";

								$running_opinion_total++;
						
						 ?> 
					
					<div class="editorialbanner">
						
						
												
						
						
						
						
						<div class="postlink">
						
									<h5 class="editorialminiheading">EDITORIAL</h5>
									
									<h4 class="editorialheadline"><a href="<?php echo $editorial_one_get_permalink; ?>"><?php echo $editorial_one_the_title; ?></a></h4>
									
									
										<a href="<?php echo $editorial_one_get_permalink; ?>" class="onebigcaption">
											
											
											<?php echo $editorial_one_the_subtitle; ?>
											
											
										</a>
											
									
									
									<span class="onebigauthorname">By <strong>The Editorial Board</strong></span>
						
						
						</div> <!-- End of postlink -->
						
						
						</div> <!-- End of editorialbanner -->

					
					
					
					
						<?php endif; ?>
							
							
							<?php if ($editorial_one + $editorial_two + $editorial_three == 2) : ?>
							
							<?php $ids_to_exclude[] = $potentialid_one; 
								  $ids_to_exclude[] = $potentialid_two;
								  
								  
								  $running_opinion_total = $running_opinion_total + 2;
							?>
							
							
							
							<div class="editorialbanner">
						
						
								<div class="postlink">
								
								<h5 class="editorialminiheading">EDITORIALS</h5>
								
								<h4 class="editorialheadline"><a href="<?php echo $editorial_one_get_permalink; ?>"><?php echo $editorial_one_the_title; ?></a></h4>
								
								
									<a href="<?php echo $editorial_one_get_permalink ?>" class="onebigcaption">
										
										
										<?php echo $editorial_one_the_subtitle; ?>
										
										
									</a>
										
										
		
										
								
								
								
								
								
								</div> <!-- End of postlink -->
						
						
						
						
						
						<div class="postlink">
						
						
						
								<h4 class="editorialheadline"><a href="<?php echo $editorial_two_get_permalink; ?>"><?php echo $editorial_two_the_title; ?></a></h4>
								
								
									<a href="<?php echo $editorial_two_get_permalink; ?>" class="onebigcaption">
										
										
										<?php echo $editorial_two_the_subtitle; ?>
										
										
									</a>
								
						
						
						<span class="onebigauthorname">By <strong>The Editorial Board</span>
						
						
						</div> <!-- End of postlink -->
						
						
						</div> <!-- End of editorialbanner 2 -->
							
							
							<?php endif; ?>
							
							
						
							
													
						<?php if ($editorial_one + $editorial_two + $editorial_three == 3) : ?>
						
						<?php $ids_to_exclude[] = $potentialid_one; 
								  $ids_to_exclude[] = $potentialid_two;
								  $ids_to_exclude[] = $potentialid_three;
								  
								 $running_opinion_total = $running_opinion_total + 3;
							?>
								
							
							<div class="editorialbanner">
						
						
						<div class="postlink">
						
						<h5 class="editorialminiheading">EDITORIALS</h5>
						
						<h4 class="editorialheadline"><a href="<?php echo $editorial_one_get_permalink; ?>"><?php echo $editorial_one_the_title; ?></a></h4>
						
						
							<a href="<?php echo $editorial_one_get_permalink ?>" class="onebigcaption">
								
								
								<?php echo $editorial_one_the_subtitle; ?>
								
								
							</a>
								
								

								
						
						
						
						
						
						</div> <!-- End of postlink -->
						
						
						
						
						
						<div class="postlink lefteditorialthree">
						
						
						
						<h4 class="editorialheadlinethree"><a href="<?php echo $editorial_two_get_permalink; ?>"><?php echo $editorial_two_the_title; ?></a></h4>
						
						
							<a href="<?php echo $editorial_two_get_permalink; ?>" class="onebigcaption">
								
								
								<?php echo $editorial_two_the_subtitle; ?>
								
								
							</a>
								
						</div> <!-- End of postlink -->
						
						
						<div class="postlink righteditorialthree">
						
						
						
						<h4 class="editorialheadlinethree"><a href="<?php echo $editorial_three_get_permalink; ?>"><?php echo $editorial_three_the_title; ?></a></h4>
						
						
							<a href="<?php echo $editorial_three_get_permalink; ?>" class="onebigcaption">
								
								
								<?php echo $editorial_three_the_subtitle; ?>
								
								
							</a>
								
						</div> <!-- End of postlink -->
						
						
						
							<div style="clear: both;"></div>
						
						<span class="onebigauthorname">By <strong>The Editorial Board</span>
						
						
						
						
						
						</div> <!-- End of editorialbanner 2 -->
							
							
							
							
							<?php endif; ?>
							
							
							
							
							
							
							
							
							
							<?php
								
							
 
								// current page number
										$paged_l = 1;
										// number of posts per page
										$posts_per_page_l = 25;
										// starting position
										$offset = ( $paged_l - 1 ) * $posts_per_page_l;
										// extract page of IDs
										



  
								    $my_query = new WP_Query( array('post_type' => array( 'post', 'feature' ),
								    													 'post_status' => 'publish',
								    													 
								    													 
								    													 'posts_per_page' => 1,
								    													 
								    													 
									  													
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
									  													'terms' => 'columns',
									  													'field' => 'slug',
									  													)
									  													),
								    													 
								    													 
								    													 
								    													 ) );
								 
								 
								
								 
if ( $my_query->have_posts() ) : ?>
							
							
							
							
									<?php $count = 0; ?>
									
									
									
					<?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
					<?php $columncontinue = 'yes'; ?>
									
									
									<?php $count++; ?>



							<?php if ($count == 1) : ?>


								<?php
																
																	  $date_u = current_time('timestamp');
																	  
																	  $post_time = get_post_time('U');
																	  
																	  $post_age = $date_u - $post_time; 
																	
																      $post_age_in_hours = $post_age/3600;
																      
																      $post_age_in_minutes = $post_age/60;	
																      
																      $columnhours = 48;
																      
																      $layouttype = '';
													
						
						
										  			if($columnhours > $post_age_in_hours ) {
							
										  					$ids_to_exclude[] = get_the_ID();
										  					
										  					$running_opinion_total++;
									
															$writername = get_post_meta( get_the_ID(), '_writer_name', true );
															$writername2 = get_post_meta( get_the_ID(), '_writer_name_two', true );
															$writername3 = get_post_meta( get_the_ID(), '_writer_name_three', true );
															$writername4 = get_post_meta( get_the_ID(), '_writer_name_four', true );
															$writername5 = get_post_meta( get_the_ID(), '_writer_name_five', true );
													
													
															if ($writername5 == "" and $writername4 == "" and $writername3 == "" and $writername2 == "" and $writername !== "") {
															
															
															
															$writerpage = get_page_by_title( $writername, "OBJECT", 'staff' );
															
															$status = get_post_status( $writerpage );
															
															$writerpage_ID = $writerpage->ID;
																
															$getcolumnheadshot_url = get_post_meta( $writerpage_ID, 'normalheadshot_url', true );
														
														
													
													if ( 'publish' == $status && $getcolumnheadshot_url != '') {
														
														
														
														
														
														
															
															
															$layouttype = "headshot";
															
															
															
															
															
															
															
															
															
															
															
											
															
															
															
														}
														
														
														else {
															
															
															$layouttype = "noheadshot";
															
															
														}
														
														
													
													
													 
													 
													 }
													 
													 
													 else {
														 
														$columncontinue = 'no';  
																						 
														 
													 }
						
									
							
							
														}
														
															
															
														
														
														
														
														
														
														
														else {
															
															
															$columncontinue = 'no';
															
															
															
														}
														
														
														
														?>


											<?php if ($layouttype == "headshot" && $columncontinue != 'no' ) : ?>
											
													<div class="columnisttop">
														
														
													
													<div class="postlink">
														
														<div class="leftheadshot">
																				
																				<img class="columnistimage" src="<?php echo $getcolumnheadshot_url ?>" />
																				
																				<h4 class="columnistnamein"><a href="<?php echo get_permalink(); ?>"><?php echo $writername; ?></a></h4>
													
																				<h5 class="editorialminiheading"><a href="<?php echo get_permalink(); ?>">COLUMN</a></h5>
																				
																			</div>
													
													
													
																			<div class="insidepostlink">
																				
																				
																			
																					<h3 class="threebigheadline"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?> </a></h3>
																					
																					
																					
																				
																					
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
																					
																					
																			</div>
																			
																			
																									
																			
																			<div style="clear: both;"></div>
																			
																					
																				</div> <!-- end of postlink -->
													
													
													</div>
											
											
											
											<?php endif; ?>
				
				
											<?php if ($layouttype == "noheadshot" && $columncontinue != 'no' ) : ?>
											
													<div class="columnisttop">
														
														
													
													<div class="postlink">
														
													
													
													
													
																			
																				
																				<span class="columnistnamein_noheadshot"><a href="<?php echo get_permalink(); ?>"><?php echo $writername; ?></a></span>
													
																				<span class="editorialminiheading_noheadshot"><a href="<?php echo get_permalink(); ?>">COLUMN</a></span>
													
																				
																			
																					<h3 class="threebigheadline"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?> </a></h3>
																					
																					
																					
																				
																					
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
													
													
													</div>
											
											
											
											<?php endif; ?>
				
				
				
				
											<?php else : ?>
							
								
							
							
							

							<?php endif; ?>



					<?php endwhile; ?>


			<?php wp_reset_query(); ?>






<?php endif; ?>


							
						
						
						
						
						
						
						
						
						<?php
								
							
 
 // current page number
$paged_l = 1;
// number of posts per page
$posts_per_page_l = 25;
// starting position
$offset = ( $paged_l - 1 ) * $posts_per_page_l;
// extract page of IDs




  
    $my_query = new WP_Query( array('post_type' => array( 'post', 'feature' ),
    													 'post_status' => 'publish',
    													 
    													 
    													 'posts_per_page' => 1,
    													 
    													 
	  													
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
	  													'terms' => 'op-ed',
	  													'field' => 'slug',
	  													)
	  													),
    													 
    													 
    													 
    													 ) );
 
 

 
if ( $my_query->have_posts() ) : ?>
							
							
							
										
									<?php $count = 0; ?>



			<?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
			<?php $opedcontinue = 'yes'; ?>


									<?php $count++; ?>



					<?php if ($count == 1) : ?>




<?php
																				 
									  
									  $date_u = current_time('timestamp');
									  
									  $post_time = get_post_time('U');
									  
									  $post_age = $date_u - $post_time; 
									
								      $post_age_in_hours = $post_age/3600;
								      
								      $post_age_in_minutes = $post_age/60;	
								      
								      $opedhours = 48;
								      
								      $layouttype = '';
								      
								      $writerno = 0;
								
								
								
								if($opedhours > $post_age_in_hours ) {
									
									$ids_to_exclude[] = get_the_ID();
									
									$running_opinion_total++;
									
															$writername = get_post_meta( get_the_ID(), '_writer_name', true );
															$writername2 = get_post_meta( get_the_ID(), '_writer_name_two', true );
															$writername3 = get_post_meta( get_the_ID(), '_writer_name_three', true );
															$writername4 = get_post_meta( get_the_ID(), '_writer_name_four', true );
															$writername5 = get_post_meta( get_the_ID(), '_writer_name_five', true );
															
															
														if ($writername5 == "" and $writername4 == "" and $writername3 == "" and $writername2 == "" and $writername !== "") {
															
															$writerno = 1;
															
															$writerpage = get_page_by_title( $writername, "OBJECT", 'staff' );
															
															$status = get_post_status( $writerpage );
															
															$writerpage_ID = $writerpage->ID;
																
															$getopedheadshot_url = get_post_meta( $writerpage_ID, 'normalheadshot_url', true );
																
																
															
															if ( 'publish' == $status && $getopedheadshot_url != '') {
																
																
																
																
																
																
																	
																	
																	$layouttype = "headshot";
																	
																	
																	
																	
								
																	
																	
																}
																
																
																else {
																	
																	
																	$layouttype = "noheadshot";
																	
																	
																}
																
																
															
															
															 
															 
															 }
															 
															 
															 
																 elseif ($writername5 == "" and $writername4 == "" and $writername3 == "" and $writername2 !== "" and $writername !== "") {
																 
																 $writerno = 2;
																 
																 
																 
																 
																 }
																 
																 elseif ($writername5 == "" and $writername4 == "" and $writername3 !== "" and $writername2 !== "" and $writername !== "") {
																 
																 $writerno = 3;
																 
																 
																 
																 
																 }
																 
																  elseif ($writername5 == "" and $writername4 !== "" and $writername3 !== "" and $writername2 !== "" and $writername !== "") {
																 
																 $writerno = 4;
																 
																 
																 
																 
																 }
																 
																 
																 elseif ($writername5 !== "" and $writername4 !== "" and $writername3 !== "" and $writername2 !== "" and $writername !== "") {
																 
																 $writerno = 5;
																 
																 
																 
																 
																 }
															 
															 
															 
															 
															 
																 else {
																	 
																	
																 		$opedcontinue = 'no';  
																									 
																	 
																 }
								
											
									
									
								}
								
									
									
								
								
								
								
								
								
								
								else {
									
									
									$opedcontinue = 'no';
									
									
									
								}
								
								
								
								?>


							<?php if ($writerno == 1 && $layouttype == "headshot" && $opedcontinue != 'no' ) : ?>
							
									<div class="columnisttop">
										
										
									
									<div class="postlink">
										
										<div class="leftheadshot">
																
																<img class="columnistimage" src="<?php echo $getcolumnheadshot_url ?>" />
																
																<h4 class="columnistnamein"><a href="<?php echo get_permalink(); ?>"><?php echo $writername; ?></a></h4>
									
																<h5 class="editorialminiheading"><a href="<?php echo get_permalink(); ?>">OP-ED</a></h5>
																
															</div>
									
									
									
															<div class="insidepostlink">
																
																
															
																	<h3 class="threebigheadline"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?> </a></h3>
																	
																	
																	
																
																	
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
																	
																	
															</div>
															
															
																					
															
															<div style="clear:both"></div>
															
																	
																</div> <!-- end of postlink -->
									
									
									</div>
							
							
							<?php endif; ?>


							<?php if ($writerno == 1 && $layouttype == "noheadshot" && $opedcontinue != 'no' ) : ?>
							
									<div class="columnisttop">
										
										
									
									<div class="postlink">
										
									
									
									
									
															
																
																<span class="columnistnamein_noheadshot"><a href="<?php echo get_permalink(); ?>"><?php echo $writername; ?></a></span>
									
																<span class="editorialminiheading_noheadshot"><a href="<?php echo get_permalink(); ?>">OP-ED</a></span>
									
																
															
																	<h3 class="threebigheadline"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?> </a></h3>
																	
																	
																	
																
																	
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
									
									
									</div>
							
							
							
							<?php endif; ?>






							<?php if ($writerno > 1 && $opedcontinue != 'no' ) : ?>
							
							<div class="columnisttop">
								
								
							
							<div class="postlink">
								
							
							
							
														<div class="nametaggrouping">
													
														
														<div class="columnistnamein_noheadshot">
														<a href="<?php echo get_permalink(); ?>"><?php if ($writerno == 2) {
																
																echo $writername;
																echo ' <span class="nobold">and</span> ';
																echo $writername2;
																
															}
															
															 elseif ($writerno == 3) {
																
																echo $writername;
																echo '<span class="nobold">,</span> ';
																echo $writername2;
																echo ' <span class="nobold">and</span> ';
																echo $writername3;
															}
															
															 elseif ($writerno == 4) {
																
																echo $writername;
																echo '<span class="nobold">,</span> ';
																echo $writername2;
																echo '<span class="nobold">,</span> ';
																echo $writername3;
																echo ' <span class="nobold">and</span> ';
																echo $writername4;
															}
															
															 elseif ($writerno == 5) {
																
																echo $writername;
																echo '<span class="nobold">,</span> ';
																echo $writername2;
																echo '<span class="nobold">,</span> ';
																echo $writername3;
																echo '<span class="nobold">,</span> ';
																echo $writername4;
							
																echo ' <span class="nobold">and</span> ';
																echo $writername5;
															}
															
															?></a></div><span class="editorialminiheading_noheadshot"><a href="<?php echo get_permalink(); ?>">OP-ED</a></span> </div>
							
														
													
															<h3 class="threebigheadline"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?> </a></h3>
															
															
															
														
															
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
							
							
							</div>
							
							
							
							<?php endif; ?>








							<?php else : ?>
							
								
							
							
							

					<?php endif; ?>
						
						
			<?php endwhile; ?>


<?php wp_reset_query(); ?>






<?php endif; ?>
	
							
							
							
						
										
						<div style="clear:both"></div>
						
						
						
						
						
						<div class="loveinteresthomepageblock">

<div class="loveinteresthomepageicon">
	
	<span class="love">Love</span>
	<span class="interest">Interest</span>
	
</div>



<a href="http://universitytimes.ie/loveinterest" class="loveinteresthomepage">Submit Your Stories</a>
<div style="clear:both;"></div>
</div>
						
						
						
						
						<?php
							
							
						
				if ($running_opinion_total == 4) { $no_posts = 1; }	
				
				elseif ($running_opinion_total == 3) {$no_posts = 2;}
				
				elseif ($running_opinion_total == 2) {$no_posts = 3;}
				
				elseif ($running_opinion_total == 1) {$no_posts = 4;}
				
				elseif ($running_opinion_total == 0) {$no_posts = 5;}
				
				elseif ($running_opinion_total >= 5) {$no_posts = 0;}
							
							
							
						
						$args = array(
		'post_type' => array('post'),
		'tax_query' => array(
			array(
				'taxonomy' => 'section',
				'terms' => array('opinion'),
				'field' => 'slug'
				)
			),
		'orderby' => 'date',
		'post_status' => 'publish',
		'posts_per_page' => $no_posts,
		'paged' => 1,
		'post__not_in' =>  $ids_to_exclude
		);
			
	$the_query = new WP_Query( $args ); 
	
	
	 $postcount = 0; 
	
	

	if ( $the_query->have_posts() ) : 
	
		while ( $the_query->have_posts() ) : $the_query->the_post(); 
			
		
		
		?>
		
		
		<?php 
			
			   $postcount++; ?>
		
		
		
		<div class="postlink  <?php if($postcount == $no_posts) {echo "lastopinionpiece";}
			
				
									else {echo "opinionright";} ?>">
	
						
						

						
		<h5 class="editorialminiheading">    <?php
										if ( is_object_in_term( $post->ID, 'articletype', 'columns' ) ) :
										echo 'Column';
	
	
										elseif ( is_object_in_term( $post->ID, 'articletype', 'op-ed' ) ) :
										echo 'Op-ed';
	
										elseif ( is_object_in_term( $post->ID, 'articletype', 'editorials' ) ) :
										echo 'Editorial';
	
										elseif ( is_object_in_term( $post->ID, 'articletype', 'analysis-2' ) ) :
										echo 'Analysis';
	
										elseif ( is_object_in_term( $post->ID, 'articletype', 'opinioncontrib' ) ) :
										echo 'Opinion Contribution';
										
										elseif ( is_object_in_term( $post->ID, 'articletype', 'editorialnotebook' ) ) :
										echo 'Editorial Notebook';
										
										





										else :
											
											endif;
								?>
</h5>

						
								<h3 class="fourbigheadline"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>
								
								<a href="<?php echo get_permalink(); ?>" class="onebigcaption"><?php 
								
								$old_caption = get_post_meta($post->ID, '_visual-subtitle', true);
								
								
								if ($old_caption !== "" && $old_caption !== false) {
								
								echo get_post_meta($post->ID, '_visual-subtitle', true); 
								
								
								}
								
								
								elseif ( is_object_in_term( $post->ID, 'articletype', 'editorialnotebook' ) ) {
										
										
										echo 'Some brief views on the developments of the week.';
									
									
								}
								
								else {
									
								if(function_exists("the_subtitle")) {
										
										echo  the_subtitle();
										
										
									}
									
									
								}
								
								
								
								?></a>
								
								
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
								
							</div> <!-- end of postlink -->
		
		
		
					
						
		<?php endwhile; ?>
		
		<!-- end of the loop -->
	
		<!-- pagination here -->
	
		<?php wp_reset_postdata(); ?>
	
	<?php else : ?>
	
		
	<?php endif; 	
		
		wp_reset_postdata();
	
		
	

						
						
						?>
						
						
						
						</div> <!-- End of rightonright -->
						
						
						
						
						
						
						<div style="clear:both"></div>
						
						
						
					</div>
					
					
					<div style="clear:both"></div>
				

				</div>
				
				<div style="clear:both"></div>
				
				
				</div> <!-- end of topblocks -->
				
				
				
				

			</div>


