<?php get_header(); ?>

			<div id="categorycontent">
			
				
				
				


				<div id="inner-content" class="wrap cf">
					
			
							
					
					
					
					<?php
							if ( is_tax( 'section', 'bladius' ) ) {			?>
										
										
										<h3 class="radiuslogo">Radius</h3>
										
										<h4 class="radiusheading"><span class="radiussub">Dublin and Trinity's Society, Art, Life and Culture Guide</span></h4>
								
								
								<h4 class="radiusheading_mobile"><span class="radiussub subtop">Dublin and Trinity's Society,</span> <span class="radiussub subbottom">Art, Life and Culture Guide</span></h4>
		
										
										
										
										
							
					
					

						<div id="radiusmain" role="main">
							
							
							<div id="radiusleft">
								
								
								<h3 class="radiush3">Latest from Radius</h3>
								
								<?php
								
								
									$args = array(
		'post_type' => array('post'),
		'tax_query' => array(
			array(
				'taxonomy' => 'section',
				'terms' => array('radius'),
				'field' => 'slug'
				)
			),
		'orderby' => 'date',
		'post_status' => 'publish',
		'posts_per_page' => 6,
		'paged' => 1,
		);
			
	$the_query = new WP_Query( $args ); 
	

	if ( $the_query->have_posts() ) : 
	
	
	$radiuslatestpostcount = 0;
	
		while ( $the_query->have_posts() ) : $the_query->the_post(); 
			
		 $radiuslatestpostcount++;
		
		?>
			
			
		
		<a class="latestradiuslink <?php if ($radiuslatestpostcount > 3) {echo "radiuslatest_displaynonemobile";} ?>" href="<?php the_permalink(); ?>">
			
			
			
			
			
			<h5 class="editorialminiheading">
		 
		     <?php
										if ( is_object_in_term( $post->ID, 'articletype', 'radiusfeatures' ) ) :
										echo 'Feature';
	
	
										elseif ( is_object_in_term( $post->ID, 'articletype', 'radius5of' ) ) :
										echo 'Five Of';
	
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

		<?php 
							$utpostimage_id = get_post_meta( $post->ID, "utpostimage_id", true ); 
							$utpostimage_url = get_post_meta( $post->ID, "utpostimage_url", true ); 
							$utpostimage_position = get_post_meta( $post->ID, "utpostimage_position", true ); ?>

						
						<?php if ($utpostimage_url != "" ) {  ?>
						
						
						<div class="latestradiuslinkcropper">
							
							<img src="<?php echo $utpostimage_url; ?>" />
							
							
							
							
						</div>
						
						<script type="text/javascript">
											jQuery('.latestradiuslinkcropper').imagefill();
        						</script>
						
						
						
						<?php } ?>
		
		
		<h4 class="latestradiustitle"><?php the_title(); ?></h4>
		
		<div class="radiussubhead">
						
						
						<?php
							
							if(function_exists("the_subtitle")) {
									
						the_subtitle();
						
						}
														
														
														?>
														
						</div>
						
						
						
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
		
		<!-- end of the loop -->
	
		<!-- pagination here -->
	
		<?php wp_reset_postdata(); ?>
	
	<?php else : ?>
		<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		
	<?php endif; 	
		
		wp_reset_postdata();
	
		?>

								
								
								
								
								
							
							
						</div>
							
							
							<div id="radiusright">
								
								
								<h3 class="radiush3">Our Pick of Events</h3>
				<?php				
								
				$radiusposts = array(); 
								
	$args = array(
		'post_type' => array('ut_radius_event_type'),
		'orderby' => 'date',
		'post_status' => 'publish',
		'posts_per_page' => 100,
		'paged' => 1,
		);
			
	$the_query = new WP_Query( $args ); 
	
	if ( $the_query->have_posts() ) :
	
	
	
		
	
		while ( $the_query->have_posts() ) : $the_query->the_post();  ?>
		
		
			
		<?php
		
		$start_time = intval(get_post_meta( get_the_ID(), 'firstdate_in_string', true ));
		$end_time = intval(get_post_meta( get_the_ID(), 'lastdate_in_string', true ));
		$post_id = get_the_ID();
		$current_time = current_time('timestamp');
		$posttitle = get_the_title();
		
		if ($start_time != "") {				
		
			
			
			
			
			if ($end_time != "" && $end_time != 0 && $current_time > $start_time && $end_time > $current_time) {				
			
				$start_time = ($current_time + (($end_time - $current_time)/4) );
				
				$radiusposts[$start_time] = $post_id;				
			}	
			
			elseif ($end_time != "" && $end_time != 0 && $current_time > $start_time && $end_time < $current_time) {				
			
						
			}	
			
			
			elseif ($end_time != "" && $end_time != 0 && $current_time < $start_time) {				
			
				$radiusposts[$start_time] = $post_id;
						
			}
			
			
			
			elseif (($end_time == "" || $end_time == 0) && $current_time < $start_time) {
							
				$radiusposts[$start_time] = $post_id;
				
			}	

			
		
				
		
		
		}
		
			
	
	endwhile; 
	
	?>
	
	
		
		<!-- end of the loop -->
	
		<!-- pagination here -->
	
		<?php wp_reset_postdata(); ?>
	
	<?php else : ?>
		<p><?php _e( 'Sorry, no posts matched your criteria. GO 1' ); ?></p>
		
	<?php endif; 	
		
		wp_reset_postdata();
	
	
	
	
		ksort($radiusposts); 
		
		$sendtopost = array_values($radiusposts);
		
		?>
		
		
	





<?php
	
	
	$count_previews = 0;
	
	$count_reviews = 0;


$args = array(
		'post_type' => array('ut_radius_event_type'),
		'orderby' => 'post__in',
		'post_status' => 'publish',
		'posts_per_page' => 100,
		'paged' => 1,
		'post__in' =>  $sendtopost,
		);
			
	$the_query = new WP_Query( $args ); 
	
	if ( $the_query->have_posts() ) :
	
		 
	
		while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		
		<?php $eventpostid = get_the_ID(); 
			
			
			global $post; $backup = $post;
		?>
			
		
		
	
									
								
								
								
								
						<?php		
								
								$radiusargs = array(
		'post_type' => array('post'),
		'orderby' => 'date',
		'tax_query' => array(
	  						array(
	  						'taxonomy' => 'section',
	  						'terms' => 'radius',
	  						'field' => 'slug',
	  													)
	  													),
		'post_status' => 'publish',
		'posts_per_page' => 10,
		'paged' => 1,
		'meta_query' => array (
		    array (
			  'key' => 'radiuseventid',
			  'value' => $eventpostid,
              'compare' => 'LIKE'
		    )
		  ),
		);
			
	$inside_query = new WP_Query( $radiusargs ); 
	
	if ( $inside_query->have_posts() ) :
	
	$count_linkedposts = 0;
	
	
		 
	
		while ( $inside_query->have_posts() ) : $inside_query->the_post(); 
		
		$count_linkedposts++;
		
		
		$linkedposts = get_post_meta( $ajax_post_id, 'radiuseventid', false );
		
		$num_of_linkedposts = count($linkedposts);
		
		if ($num_of_linkedposts == 1) {
		
		
				if ( is_object_in_term( $post->ID, 'articletype', 'radiuspreviews' ) ) {
					
					$count_previews++;
					
					$previewtitle = get_the_title();
					
					if(function_exists("the_subtitle")) {
																					
					$previewsub = get_the_subtitle();
																					
																					
														}
														
					$previewurl = get_the_permalink();
					
					$previewimage_url = get_post_meta( $post->ID, "utpostimage_url", true ); 
					
					
					
					}
					
					
				if ( is_object_in_term( $post->ID, 'articletype', 'radiusreviews' ) ) {
					
					$count_reviews++;
					
					
					$reviewtitle = get_the_title();
					
					if(function_exists("the_subtitle")) {
																					
					$reviewsub = get_the_subtitle();
																					
																					
														}
														
					$reviewurl = get_the_permalink();
					
					$reviewimage_url = get_post_meta( $post->ID, "utpostimage_url", true );
					
										
					
					
					
					}
					
					
					
					 if ($count_reviews == 1) {
			
			
			  $changelayout = "yes";
			
			
			
			
				}
				
				
				
				elseif ($count_previews == 1 && $count_reviews != 1) {
			
			
			   $changelayout = "yes";
			
			
			
			
				}
					
					
		
		}
		
		
		
		
		?>
			
		

		
									
								
									
								
		
		
		<?php
		
		endwhile; 
	
	?>
		
		<!-- end of the loop -->
	
		<!-- pagination here -->
	
		<?php wp_reset_postdata(); ?>
	
	<?php else : ?>
		<?php _e( '' ); ?>
		
	<?php endif; 	
		
		
?>
	<?php $articletype = ""; 

	  $post = $backup; 
	
?>


	<?php if ($count_reviews == 1) {
			
			
			  $articletype = "review";
			
			
			
			
				}
				
				
				
				elseif ($count_previews == 1 && $count_reviews != 1) {
			
			
			  $articletype = "preview";
			
			
			
			
				}
				
				
				
				else {
					
					
					
				}
				
				
				$count_previews = 0;
	
	$count_reviews = 0;
	
	
	
	
				
		 ?>


<?php if ($changelayout == "yes" && $articletype == "review")   {   ?>


<div class="largerradiusbox <?php if ($reviewimage_url == "") { echo "radiusboxblacktext";  }?>" href="<?php echo $reviewurl ?>" style="">
		
		
				
	
	<h5 class="editorialminiheading">Review
		
		
		<?php	if(in_category("fashion")) {

echo '<span class="radiuscategorytitle">Fashion</span>';


} 

elseif(in_category("literature")) {

echo '<span class="radiuscategorytitle">Literature</span>';


} 



elseif(in_category("theatre")) {

echo '<span class="radiuscategorytitle">Theatre</span>';


} 

elseif(in_category("film")) {

echo '<span class="radiuscategorytitle">Film</span>';


} 

elseif(in_category("Music")) {

echo '<span class="radiuscategorytitle">Music</span>';


}

elseif(in_category("Food")) {

echo '<span class="radiuscategorytitle">Food &amp; Drink</span>';


}

elseif(in_category("societies")) {

echo '<span class="radiuscategorytitle">Societies</span>';


}

elseif(in_category("college")) {

echo '<span class="radiuscategorytitle">College</span>';


}


?>

		
	</h5>
			
			
		<h4 class="radiuseventheading"><strong><?php	the_title(); ?></strong>	
			
									
						<?php echo $reviewtitle; ?>
						
						

		
		
		</h4>
		
		
		<div class="radiussubhead">
			
			<?php echo $reviewsub; ?>
			
		</div>
		
		
		
		
		
		<?php if ($reviewimage_url != "") { ?>
		
		<div class="radiuscropper"> 
			
			
			<img src="<?php echo $reviewimage_url?>" />
			
			
		</div>
		
		<script type="text/javascript">
											jQuery('.radiuscropper').imagefill();
        						</script>
        						
        						
        						
     	
       
       
      			
			
			
			
	<?php	} ?>



		<div class="radiusdatestuff">
			
			<?php 
				
				$radiusmultiday = get_post_meta( $post->ID, "utradiusdatemultiday", true );
				$firstdate = get_post_meta( $post->ID, "firstdate_in_string", true );
				$lastdate = get_post_meta( $post->ID, "lastdate_in_string", true );
				$utradiusevent_time_description = get_post_meta( $post->ID, "utradiusevent_time_description", true );
				$utradiusevent_tickets_url = get_post_meta( $post->ID, "utradiusevent_tickets_url", true );
				
				
				
				if ($utradiusevent_time_description != "") {
					
					echo $utradiusevent_time_description;
					
				}
				
				elseif ($radiusmultiday == "yes" && $utradiusevent_time_description == "" && $lastdate != "") {
					
					echo "Runs until ".gmdate("D M j", $lastdate);
					
				}
				
				elseif ($radiusmultiday == "" && $utradiusevent_time_description == "" && $firstdate != "") {
					
					echo "On at: ".gmdate("D M j, g:i a", $firstdate);
					
				}
				
				
				
				
			?>
			
			
			
		</div>

		 <a class="radiusread" href="<?php echo $reviewurl; ?>">Read Review</a>
		 
		 
		 		 
		 
		 <?php if($utradiusevent_tickets_url != ""){ ?>
		 
		  <a class="radiustickets" href="<?php echo $utradiusevent_tickets_url; ?>">Tickets</a>
		  
		  <?php } ?>
		
</div>



<?php } ?>


<?php if ($changelayout == "yes" && $articletype == "preview")   {   ?>


<div class="largerradiusbox <?php if ($previewimage_url == "") { echo "radiusboxblacktext";  }?>" href="<?php echo $previewurl ?>" style="">
		
		
				
	
	<h5 class="editorialminiheading">Preview
		
	<?php	if(in_category("fashion")) {

echo '<span class="radiuscategorytitle">Fashion</span>';


} 

elseif(in_category("literature")) {

echo '<span class="radiuscategorytitle">Literature</span>';


} 



elseif(in_category("theatre")) {

echo '<span class="radiuscategorytitle">Theatre</span>';


} 

elseif(in_category("film")) {

echo '<span class="radiuscategorytitle">Film</span>';


} 

elseif(in_category("Music")) {

echo '<span class="radiuscategorytitle">Music</span>';


}

elseif(in_category("Food")) {

echo '<span class="radiuscategorytitle">Food &amp; Drink</span>';


}

elseif(in_category("societies")) {

echo '<span class="radiuscategorytitle">Societies</span>';


}

elseif(in_category("college")) {

echo '<span class="radiuscategorytitle">College</span>';


}
?>		
		
	</h5> 
			
			
		<h4 class="radiuseventheading"><strong><?php	the_title(); ?></strong>	
			
									
						<?php echo $previewtitle; ?>
						
						

		
		
		</h4>
		
		
		<div class="radiussubhead">
			
			<?php echo $previewsub; ?>
			
		</div>
		
		
		
		
		
		<?php if ($previewimage_url != "") { ?>
		
		<div class="radiuscropper"> 
			
			
			<img src="<?php echo $previewimage_url?>" />
			
			
		</div>
		
		<script type="text/javascript">
											jQuery('.radiuscropper').imagefill();
        						</script>
        						
        						
        						
     	
       
       
      			
			
			
			
	<?php	} ?>



		<div class="radiusdatestuff">
			
			<?php 
				
				$radiusmultiday = get_post_meta( $post->ID, "utradiusdatemultiday", true );
				$firstdate = get_post_meta( $post->ID, "firstdate_in_string", true );
				$lastdate = get_post_meta( $post->ID, "lastdate_in_string", true );
				$utradiusevent_time_description = get_post_meta( $post->ID, "utradiusevent_time_description", true );
				$utradiusevent_tickets_url = get_post_meta( $post->ID, "utradiusevent_tickets_url", true );
				
				
				
				if ($utradiusevent_time_description != "") {
					
					echo $utradiusevent_time_description;
					
				}
				
				elseif ($radiusmultiday == "yes" && $utradiusevent_time_description == "" && $lastdate != "") {
					
					echo "Runs until ".gmdate("D M j", $lastdate);
					
				}
				
				elseif ($radiusmultiday == "" && $utradiusevent_time_description == "" && $firstdate != "") {
					
					echo "On at: ".gmdate("D M j, g:i a", $firstdate);
					
				}
				
				
				
				
			?>
			
			
			
		</div>

		 <a class="radiusread" href="<?php echo $previewurl; ?>">Read preview</a>
		 
		 
		 <?php if($utradiusevent_tickets_url != ""){ ?>
		 
		  <a class="radiustickets" href="<?php echo $utradiusevent_tickets_url; ?>">Tickets</a>
		  
		  <?php } ?>
		
</div>




<?php } ?>


<?php if ($changelayout == "" && $articletype == "")   {   ?>


<div class="radiusbox" style="">
		
		
	<h5 class="editorialminiheading">
		
		
		<?php	if(in_category("fashion")) {

echo '<span class="radiuscategorytitle">Fashion</span>';


} 

elseif(in_category("literature")) {

echo '<span class="radiuscategorytitle">Literature</span>';


} 



elseif(in_category("theatre")) {

echo '<span class="radiuscategorytitle">Theatre</span>';


} 

elseif(in_category("film")) {

echo '<span class="radiuscategorytitle">Film</span>';


} 

elseif(in_category("Music")) {

echo '<span class="radiuscategorytitle">Music</span>';


}

elseif(in_category("Food")) {

echo '<span class="radiuscategorytitle">Food &amp; Drink</span>';


}

elseif(in_category("societies")) {

echo '<span class="radiuscategorytitle">Societies</span>';


}

elseif(in_category("college")) {

echo '<span class="radiuscategorytitle">College</span>';


}
?>		

		
	</h5>
	
			
			
	<h4 class="radiuseventheading"><strong><?php	the_title(); ?></strong>	
			
						<div class="radiussubhead">
						<?php
									
						the_content();
														
														
														?>
														
						</div>
						
						
						<div class="radiusdatestuff">
			
			<?php 
				
				$radiusmultiday = get_post_meta( $post->ID, "utradiusdatemultiday", true );
				$firstdate = get_post_meta( $post->ID, "firstdate_in_string", true );
				$lastdate = get_post_meta( $post->ID, "lastdate_in_string", true );
				$utradiusevent_time_description = get_post_meta( $post->ID, "utradiusevent_time_description", true );
				$utradiusevent_tickets_url = get_post_meta( $post->ID, "utradiusevent_tickets_url", true );
				
				
				
				if ($utradiusevent_time_description != "") {
					
					echo $utradiusevent_time_description;
					
				}
				
				elseif ($radiusmultiday == "yes" && $utradiusevent_time_description == "" && $lastdate != "") {
					
					echo "Runs until ".gmdate("D M j", $lastdate);
					
				}
				
				elseif ($radiusmultiday == "" && $utradiusevent_time_description == "" && $firstdate != "") {
					
					echo "On at: ".gmdate("D M j, g:i a", $firstdate);
					
				}
				
				
				
				
			?>
			
			
			
		</div>

		 
		 
		 
		 <?php if($utradiusevent_tickets_url != ""){ ?>
		 
		  <a class="radiustickets" href="<?php echo $utradiusevent_tickets_url; ?>">Tickets</a>
		  
		  <?php } ?>

						

		
		
		</h4>
		
		
</div>



<?php } 


$articletype = "";
$changelayout = "";

?>



		
		
		<?php
		
		endwhile; 
	
	?>
		
		<!-- end of the loop -->
	
		<!-- pagination here -->
	
		<?php wp_reset_postdata(); ?>
	
	<?php else : ?>
		<p><?php _e( 'Sorry, no posts matched your criteria. GO 2' ); ?></p>
		
	<?php endif; 	
		
		wp_reset_postdata();
?>



								
								
								
								
							<div style="clear: both"></div>	
															
							

					

						</div>
						
						
						<div style="clear: both"></div>
						
						
						</div>
						
						
						<?php }		
							
							
							
							
							
							
							
							elseif ( is_tax( 'section', 'highereducation' ) ) {		
								
								
								
								  include(locate_template('highereducationblog.php'));   // Editors' Picks (editorspicks.php) 
								
								
								
								
								}
							
							
							
									elseif ( is_tax( 'section', 'freshers' ) ) {		
								
								
								
								  include(locate_template('freshers.php'));   // Editors' Picks (editorspicks.php) 
								
								
								
								
								}
							
							
							
							
							
							
							
							
							
							
							else {	?>
						
						
						

				<div id="inner-content">

						<div id="main" role="main">
							
							
							
							
						<div class="sectionpageleft">	
							
							

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
								

									<h3 class="sectionpageheader"><?php the_title(); ?></h3>
									
									
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
						
						
						
						
						
						
						<?php } ?>
						
						
						
						
						
						
						
						

					

				

			</div>

<?php get_footer(); ?>
