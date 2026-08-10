<?php
/*
Template Name Posts: Dear Fresher Me
*/
?>


<?php get_header(); ?>

			<div id="content">
				
				
				
			
				
				
				<div id="articlecontent">

					

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						
						
						
		
              
                      <header class="article-header">
	              
	            <div class="infogrouping">
	                
	              <?php include(locate_template('post-infogrouping.php'));   // Top of post info, include tags, election headings, and date (post-infogrouping.php) ?>   
								 
	              </div>


                  <h2 class="articleheadline_dearfresherme" itemprop="headline">Dear Fresher Me
	                  
	                  
	                  <span class="dearfresherme_title"><?php the_title(); ?></span></h2>
                  
                  <h3 class="articlesub"><span class="articlesub_black"><strong>ANNA MORAN</strong> photographs six former freshers &ndash; all from varying backgrounds &ndash; and we talk to them about going from the very first week of college to succeeding in their own way.</span></h3>
										
										
										
										
										
									

                 
                 



                  
                </header> <?php // end article header ?>
                
                
                	<?php 
						$utpostimage_id = get_post_meta( $post->ID, "utpostimage_id", true ); 	
						$utpostimage_url = get_post_meta( $post->ID, "utpostimage_url", true ); 	
						$utpostimage_position = get_post_meta( $post->ID, "utpostimage_position", true );
						$featuredimageurl = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
							
						?>
						
						
						


						
						
						
						
					<!--	<div style="background: green; height: 500px; width: 100%;"></div> -->
						
						
						<div style="clear:both"> </div>
                
                
       <div class="utcontentgrouping <?php if ($utpostimage_position == 'landscaperight' && $utpostimage_url != '') { echo "utcontentgroupinglandscape";}
	       									elseif ($utpostimage_position == 'portraitright' && $utpostimage_url != '') { echo "utcontentgroupingportrait";} ?>">
                
                
                 <div class="writershareblock">
                  
                  
                  
									
												
										
						                <?php include(locate_template('post-writerblocks.php'));   // Writer blocks ?> 		
												
														 
														 
									<?php		
													 
													 
											$permalink = get_permalink();		 
													 
								$facebookurl = "http://api.facebook.com/restserver.php?method=links.getStats&urls=" . $permalink;
											
								$facebookurl2 = "http://api.facebook.com/restserver.php?method=links.getStats&urls=" . "http://universitytimes.ie/?p=" . get_the_ID();
								
								$facebookurl3 = "http://api.facebook.com/restserver.php?method=links.getStats&urls=" . "https://www.universitytimes.ie/?p=" . get_the_ID();
											
											
											
											$headline = rawurlencode(get_the_title());
											
											$tweettext = $headline .'%20'.$permalink.'%20via%20%40universitytimes';
											
								$twitterurl = "https://twitter.com/home?status=" . $tweettext;
								
								 
											
											
											$twitterdataurl = "http://cdn.api.twitter.com/1/urls/count.json?url=".$permalink;
											
											$twitterdataurl2 = "http://cdn.api.twitter.com/1/urls/count.json?url=" . "http://universitytimes.ie/?p=" . get_the_ID();
											
											$twitterdataurl3 = "http://cdn.api.twitter.com/1/urls/count.json?url=" . "https://www.universitytimes.ie/?p=" . get_the_ID();
										
											
											$twitterdata = file_get_contents($twitterdataurl);
						// convert the string to a json object
						$decodedtwitter = json_decode($twitterdata);
						// read the title value
						$twitter_total_count = $decodedtwitter->count;
						// copy the posts array to a php var
						
						
						
						
											$twitterdata2 = file_get_contents($twitterdataurl2);
						// convert the string to a json object
						$decodedtwitter2 = json_decode($twitterdata2);
						// read the title value
						$twitter_total_count2 = $decodedtwitter2->count;
						// copy the posts array to a php var
						
											$twitterdata3 = file_get_contents($twitterdataurl3);
						// convert the string to a json object
						$decodedtwitter3 = json_decode($twitterdata2);
						// read the title value
						$twitter_total_count3 = $decodedtwitter3->count;
						// copy the posts array to a php var

						
						
											
							$twitter_total_count = $twitter_total_count + $twitter_total_count2 + $twitter_total_count3;			
																				 
													 
						   $facebookdata = simplexml_load_file($facebookurl);
						
						 $facebook_total_engagement = $facebookdata->link_stat->total_count;
						 
						 
						 $facebookdata2 = simplexml_load_file($facebookurl2);
						
						 $facebook_total_engagement2 = $facebookdata2->link_stat->total_count;
						
						
						
						$facebookdata3 = simplexml_load_file($facebookurl3);
						
						 $facebook_total_engagement3 = $facebookdata3->link_stat->total_count;
						
						$facebook_total_engagement = $facebook_total_engagement + $facebook_total_engagement2 + $facebook_total_engagement3;
						
						
													 							 
													 
													 
													 ?>
													 
													 
													 <script>
														 
														jQuery(document).ready(function($) {
							jQuery('a.popup').live('click', function(){
								newwindow=window.open($(this).attr('href'),'','height=420,width=500');
								if (window.focus) {newwindow.focus()}
								return false;
							});
							
							
			jQuery(function($) {

	jQuery('.sharebuttonsblock').waypoint(function(direction) {
		if (direction == 'up') {
			
			
			if ( jQuery(".sharebuttonsblock").parent().is( ".stuck" ) ) {
 			
			jQuery( ".sharebuttonsblock" ).unwrap(); }
			
			jQuery( ".stuck" ).hide();
		}
		else {
			jQuery( ".sharebuttonsblock" ).wrap( "<div class='stuck'></div>" );
			
			jQuery( ".stuck" ).fadeIn( 300 );
			
		}
	},
	{
		offset: '0%',
	});
	
	
	if ($(window).width() < 584) {
		
		
		
		
		

  var ref1 = document.referrer;
 

var facebook = "facebook";
var twitter = "twitter";
var tco = "t.co";

if (ref1.indexOf(facebook) > -1 || ref1.indexOf(twitter) > -1 || ref1.indexOf(tco) > -1 ) {
	
	
	jQuery('.utpost-content').readmore({
  speed: 75,
  moreLink: '<div class="readmoremobile"><a href="#">Read full article</a></div>',
  lessLink: '',
  collapsedHeight: 600,
  embedCSS: false,
  heightMargin: 100,
  
});
	
	
	}
    
else { }
	
	
	


}
	
	
	

});

	
							
						}); 
						
						
						
						jQuery(window).resize(function() {
console.log(jQuery(window).width());
if (jQuery(window).width() > 584) {
    jQuery('.utpost-content').readmore('destroy');
    
}
else
{
     }
});
jQuery(window).trigger('resize');
						
						
														 
														 
														 </script>
														 
														 
											
											
											<script>
												
												
												  
												  
  
 
 
  
												 
												 
												 											
												
												</script>
											
														 
                 

						<div class="sharebuttonsblock">
				
							<a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" class="facebookshare popup"><?php if($facebook_total_engagement != "0"){ echo $facebook_total_engagement; }?></a>
                  
							<a href="<?php echo $twitterurl; ?>" class="twittershare popup"><?php if($twitter_total_count > 0){echo $twitter_total_count;} ?></a>
                  
							<a href="mailto:?subject=The University Times &ndash; <?php echo get_the_title(); ?>&amp;body=<?php if(function_exists("the_subtitle")) {
										
												echo  the_subtitle();
												
												
												
							} ?>%0D%0A%0D%0A<?php echo get_the_permalink();?>%0D%0A%0D%0A%0D%0A%0D%0A" class="emailshare"></a>
                  
                  
                  
						</div>

					
						<div style="clear: both"></div>

                  </div>
                  
                  
                  <div class="dearfresherme">
                  						<div class="imageadgroup <?php if ($utpostimage_url == '' && $featuredimageurl == '') { echo "noimageright";} 
	                  						
		                  												elseif ($utpostimage_position == 'landscaperight' && $utpostimage_url != '') { echo "landscaperight";}
			                  												
			                  												elseif ($utpostimage_position == 'portraitright' && $utpostimage_url != '') { echo "portraitright";}
			                  						
				                  																							?>">
						
						
							<?php if ($utpostimage_url != '' && ($utpostimage_position == 'landscaperight' || $utpostimage_position == 'landscapeabove' || $utpostimage_position == 'portraitright') ) : ?>
								
								
					
								
								<div class="articleimage">
							
												<img class="landscapeabove" src="<?php echo $utpostimage_url ?>" alt="blank" />
											
									
									<?php if(get_post_meta( $post->ID, "utpostimage_caption", true ) != "") : ?>
									
									
									
									
										<div class="oneimageactualcaption"><?php echo get_post_meta( $post->ID, "utpostimage_caption", true ); ?>
									
											<div class="oneimagecaption"><?php echo get_post_meta( $post->ID, "utpostimage_credit", true ); ?></div>
									
										</div>
									
									
									<?php else : ?>
									
									
										<div class="oneimagecaption"><?php echo get_post_meta( $post->ID, "utpostimage_credit", true ); ?></div>
									
									
									<?php endif; ?>

								</div>
								
								
								
						<?php		elseif ($featuredimageurl != "") : ?>
								
								<div class="articleimage">
							
												<img class="landscapeabove" src="<?php echo $featuredimageurl ?>" alt="blank" />
											
									
									

								</div>
								
								
								
								
								
							<?php endif; ?>
							
							
							
										
										
										
								<div class="articlead">
									
									<?php include(locate_template('adurlandimage.php'));   // Top of post info, include tags, election headings, and date (post-infogrouping.php) ?> 									
								</div>		


								<div style="clear:both"> </div>


						</div> 
                



                <section class="utpost-content cf" itemprop="articleBody">
	                
	                
	                
	                
	                
	                
                  <?php
                    // the content (pretty self explanatory huh)
                    the_content();

                    /*
                     * Link Pages is used in case you have posts that are set to break into
                     * multiple pages. You can remove this if you don't plan on doing that.
                     *
                     * Also, breaking content up into multiple pages is a horrible experience,
                     * so don't do it. While there are SOME edge cases where this is useful, it's
                     * mostly used for people to get more ad views. It's up to you but if you want
                     * to do it, you're wrong and I hate you. (Ok, I still love you but just not as much)
                     *
                     * http://gizmodo.com/5841121/google-wants-to-help-you-avoid-stupid-annoying-multiple-page-articles
                     *
                    */
                    wp_link_pages( array(
                      'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'bonestheme' ) . '</span>',
                      'after'       => '</div>',
                      'link_before' => '<span>',
                      'link_after'  => '</span>',
                    ) );
                    
                    $currentpostid = get_the_ID();
                    
                    
                    
                    
                    
                  ?>
                  
                  
                   
                  
                  
                  <?php wp_reset_postdata(); ?>
                  
                  
                  <div style="clear:both"> </div>
                  
                </section> <?php // end article section ?>
                
                
</div>
                
                 <div style="clear:both"> </div>
                 
   		
							
							
       <?php
	       
	       
	       $args = array(
	'post__not_in' => array($currentpostid),	       
	'post_type' => 'post',
	'category_name' => 'dearfresherme',
	'orderby' => 'rand',
	'posts_per_page' => 6,
	
	
	
);


$fresherquery = new WP_Query( $args );


?>
                
                
                
                
                  <div class="editorspicks">
	                 
	                 				
	                	<h3>More From Dear Fresher Me</h3>
	              
						
							
							
										
							
							
							


<?php				if ( $fresherquery->have_posts() ) : ?>
							
							
							
							
<?php $count = 0; ?>



<?php while ( $fresherquery->have_posts() ) : $fresherquery->the_post(); ?>


<?php $count++; ?>



<?php if ($count == 1) : ?>


<a href="<?php the_permalink(); ?>" class="pickstory notopmargin">
							
							
							<?php 
						$utpostimage_id = get_post_meta( $post->ID, "utpostimage_id", true ); 	
						$utpostimage_url = get_post_meta( $post->ID, "utpostimage_url", true ); 	
						$utpostimage_position = get_post_meta( $post->ID, "utpostimage_position", true );
						$featuredimageurl = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
							
						?>
							
							
							<div class="pickcropper"> 
											
												<img src="<?php echo $utpostimage_url;?>" alt="blank" />
												
												  <script type="text/javascript">
											jQuery('.pickcropper').imagefill();
        						</script>
											
									</div>
		              
		            		              
							<h4 class="dearfreshermetitles"><?php the_title(); ?></h4>
						
		              
						</a>  

<?php endif; ?>



<?php if ($count == 2) : ?>


<a href="<?php the_permalink(); ?>" class="pickstorymiddle">
							
							
							
								<?php 
						$utpostimage_id = get_post_meta( $post->ID, "utpostimage_id", true ); 	
						$utpostimage_url = get_post_meta( $post->ID, "utpostimage_url", true ); 	
						$utpostimage_position = get_post_meta( $post->ID, "utpostimage_position", true );
						$featuredimageurl = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
							
						?>
							
							
							<div class="pickcropper"> 
											
												<img src="<?php echo $utpostimage_url;?>" alt="blank" />
												
												  <script type="text/javascript">
											jQuery('.pickcropper').imagefill();
        						</script>
											
									</div>
		              
		            		              
							<h4 class="dearfreshermetitles"><?php the_title(); ?></h4>
						
		              
						</a>  


<?php endif; ?>

<?php if ($count == 3) : ?>

	
							<a href="<?php the_permalink(); ?>" class="pickstoryright" style="border: 0px !important;">
							
							
							
								<?php 
						$utpostimage_id = get_post_meta( $post->ID, "utpostimage_id", true ); 	
						$utpostimage_url = get_post_meta( $post->ID, "utpostimage_url", true ); 	
						$utpostimage_position = get_post_meta( $post->ID, "utpostimage_position", true );
						$featuredimageurl = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
							
						?>
							
							
							<div class="pickcropper"> 
											
												<img src="<?php echo $utpostimage_url;?>" alt="blank" />
												
												  <script type="text/javascript">
											jQuery('.pickcropper').imagefill();
        						</script>
											
									</div>
		              
		            		              
							<h4 class="dearfreshermetitles"><?php the_title(); ?></h4>
						
		              
						</a>  


<?php endif; ?>


		
                
                               
                
<?php endwhile; ?>


 <?php else : ?>






<?php endif; ?>



<?php wp_reset_query(); ?>


                  </div>

						
						
											
							
													
						
												
						
												
						






					






					                
                               
                











					

						
						
													
							
													
						
												
						
												
						
						






					                
                               
                











					






					

						
						
													
						
						
						
						
                
                
                
                
                
                
                
                <?php 
// the query


$args_recent = array(
	'post_type' => array('post', 'feature'),
	'posts_per_page' => 10,
	'tax_query' => array(
				array(
					'taxonomy' => 'section',
					'terms' => array('infocus', 'magazine', 'news', 'radius', 'sport'),
					'field' => 'slug',
				)
			),

);


$listofrecentposts = array();

$listofthingstoexclude = array();

$listofthingstoexclude[] = $currentpostid;

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
					'terms' => array('infocus', 'magazine', 'news', 'radius', 'sport'),
					'field' => 'slug',
				)
			),


			'orderby' => 'post__in',
			'post_status' => 'publish',
				'posts_per_page' => 3,
				
				'post__in' =>  $finallist,
				'post__not_in' => $currentpostid, );
		
		
		
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
		              
		            		              
							<h4><?php the_title(); ?></h4>
						
		              
						</a>  
						
						
						<?php endif; ?>
						
						
						<?php if ($utpostimage_url == "") : ?>
							
							
							<a href="<?php echo get_permalink(); ?>" class="pickstory notopmargin">
							
							
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
		              
		            		              
							<h4><?php the_title(); ?></h4>
						
		              
						</a>  
						
						
						<?php endif; ?>
						
						
						<?php if ($utpostimage_url == "") : ?>
							
							
							<a href="<?php echo get_permalink(); ?>" class="pickstorymiddle">
							
							
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
		              
		            		              
							<h4><?php the_title(); ?></h4>
						
		              
						</a>  
						
						
						<?php endif; ?>
						
						
						<?php if ($utpostimage_url == "") : ?>
							
							
							<a href="<?php echo get_permalink(); ?>" class="pickstoryright">
							
							
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
		              
		            		              
							<h4><?php the_title(); ?></h4>
						
		              
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
		              
		            		              
							<h4><?php the_title(); ?></h4>
						
		              
						</a>  
						
						
						<?php endif; ?>
						
						
						<?php if ($utpostimage_url == "") : ?>
							
							
							<a href="<?php echo get_permalink(); ?>" class="pickstorymiddle">
							
							
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
					'terms' => array('infocus', 'magazine', 'news', 'radius', 'sport'),
					'field' => 'slug',
				)
			),


			'orderby' => 'date',
			'post_status' => 'publish',
				'posts_per_page' => 1,
				
				
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
							
							
							<a href="<?php echo get_permalink(); ?>" class="pickstoryright">
							
							
							
							<div class="pickcropper"> 
											
												<img src="<?php echo $utpostimage_url ?>" alt="blank" />
												
												  <script type="text/javascript">
											jQuery('.pickcropper').imagefill();
        						</script>
											
									</div>
		              
		            		              
							<h4><?php the_title(); ?></h4>
						
		              
						</a>  
						
						
						<?php endif; ?>
						
						
						<?php if ($utpostimage_url == "") : ?>
							
							
							<a href="<?php echo get_permalink(); ?>" class="pickstoryright">
							
							
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
						
						
						
						
						

						
						
			
					
						
						
													
						
						 <?php else : ?>
                
                               
                <?php endif; ?>
<?php endwhile; ?>


<?php wp_reset_query(); ?>






<?php endif; ?>
	                
	                
	                
                </div>

              
                
                
                </div>
                
                               

             



				<div class="commentblock">

                
                
                <div style="clear:both"> </div>
                
				</div>

          
						<?php endwhile; ?>

						<?php else : ?>

							<article id="post-not-found" class="hentry cf">
									<header class="article-header">
										<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
									</header>
									<section class="entry-content">
										<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
									</section>
									<footer class="article-footer">
											<p><?php _e( 'This is the error message in the single.php template.', 'bonestheme' ); ?></p>
									</footer>
							</article>

						<?php endif; ?>

					

					

				</div>

			</div>

<?php get_footer(); ?>
