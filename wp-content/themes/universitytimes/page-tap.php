<?php
/*
 Template Name: TAP Programme Page
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
			
		
		
		
		<?php 
						$utpostimage_id = get_post_meta( $post->ID, "utpostimage_id", true ); 	
						$utpostimage_url = get_post_meta( $post->ID, "utpostimage_url", true ); 	
						$utpostimage_position = get_post_meta( $post->ID, "utpostimage_position", true );
						$featuredimageurl = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
							
						?>
					
					
					
					
					
					<div class="magazineabove">
						
						
						<img src="<?php echo $utpostimage_url ?>" alt="blank" />    
						
						
						<div class="magazineheadergrouping tapheadergrouping">
							
							
							<div class="magazineheaderinside tapheaderinside">
								
								
								<div class="magazineheaderdeepinside tapheaderdeepinside">
							
							  <div class="infogrouping">
	                
	                <?php
										if ( is_object_in_term( $post->ID, 'section', 'news' ) && is_object_in_term( $post->ID, 'articletype', 'newsarticle' ) ) :
										echo '<a href="'.home_url().'/news" class="articlesectiontag newstag">News</a>';
										
										elseif ( is_object_in_term( $post->ID, 'section', 'news' ) && is_object_in_term( $post->ID, 'articletype', 'newsfeature' ) ) :
										echo '<a href="'.home_url().'/news" class="articlesectiontag newstag">News Focus</a>';
	
	
										elseif ( is_object_in_term( $post->ID, 'section', 'infocus' ) ) :
										echo '<a href="'.home_url().'/infocus" class="articlesectiontag infocustag">In Focus</a>';
	
										elseif ( is_object_in_term( $post->ID, 'section', 'sportcat' ) ) :
										echo '<a href="'.home_url().'/sport" class="articlesectiontag sporttag">Sport</a>';
	
										elseif ( is_object_in_term( $post->ID, 'section', 'magazine' ) ) :
										echo '<a href="'.home_url().'/magazine" class="articlesectiontag magazinetag">Magazine</a>';
	
										elseif ( is_object_in_term( $post->ID, 'section', 'radius' ) ) :
										echo '<a href="'.home_url().'/radius" class="articlesectiontag radiustag">Radius</a>';
										
										elseif ( is_object_in_term( $post->ID, 'section', 'opinion' ) ) :
										echo '<a href="'.home_url().'/opinion" class="articlesectiontag opinionposttag">Comment & Analysis</a>';





										else :
											
											endif;
								?>
								
								
								<?php if ( is_object_in_term( $post->ID, 'section', 'opinion' ) && is_object_in_term( $post->ID, 'articletype', 'profile' ) ) :
										echo '<div class="profiletag">Profile</div>'; 
										
										
										
										else :
											
											endif;?>
								
								 <div class="dateright"><?php the_date('M j, Y'); ?></div>
								 
								 
								 
								 
								 
								 <div style="clear: both;"></div>
								 
	              </div>


                  <h2 class="articleheadline taparticleheadline" itemprop="headline"><?php the_title(); ?></h2>
                  
                  <h3 class="articlesub"><?php 
	                  
	                  if(function_exists("the_subtitle")) {	 $new_caption = get_the_subtitle();  }

	                  
	                  $old_caption = get_post_meta($post->ID, '_visual-subtitle', true);
	                  
	                  
	                  if ($new_caption != "") {
		                  
		                  echo $new_caption;
		                  
	                  }
	                  
			
					  elseif ($old_caption !== "" && $old_caption !== false) {	echo get_post_meta($post->ID, '_visual-subtitle', true); 	}	?></h3>
								
								
								
								</div>
								
								
								</div>		

							
						</div>
						
						
													
						
						
					</div>
					
					
												  <script type="text/javascript">
											jQuery('.magazineabove').imagefill();
        						</script>
	   
                     
                      
                              <div class="magazineaboveshadow">
						
						
					</div>     
                	
												
						


						
						
						
						
					<!--	<div style="background: green; height: 500px; width: 100%;"></div> -->
						
						
						<div style="clear:both"> </div>
                
                
       <div class="utcontentgrouping magazinecontentgrouping">
	       
	       
						<?php if(get_post_meta( $post->ID, "utpostimage_caption", true ) != "") : ?>
									
								<div class="magazinecaptionblock captionpushfloat">	
									
									
										<div class="magazineimageactualcaption"><?php echo get_post_meta( $post->ID, "utpostimage_caption", true ); ?>
									
											<div class="magazineimagecaption"><?php echo get_post_meta( $post->ID, "utpostimage_credit", true ); ?></div>
									
										</div>
										
										
								</div>
									
									
									<?php else : ?>
									
									<div class="magazinecaptionblock nocaptionpushfloat">
										<div class="magazineimagecaption"><?php echo get_post_meta( $post->ID, "utpostimage_credit", true ); ?></div>
									</div>
									
									<?php endif; ?>


	       
                
                
                 <div class="writershareblock <?php if(get_post_meta( $post->ID, "utpostimage_caption", true ) != ""){ echo "withcaptionpush"; } else { echo "nocaptionpush"; } ?>">
                  
                  
                  
						                  <?php
													
																$writername = get_post_meta( get_the_ID(), '_writer_name', true );
																$positionname = get_post_meta( get_the_ID(), '_position_name', true );
																$writername2 = get_post_meta( get_the_ID(), '_writer_name_two', true );
																$writername3 = get_post_meta( get_the_ID(), '_writer_name_three', true );
																$writername4 = get_post_meta( get_the_ID(), '_writer_name_four', true );
																$writername5 = get_post_meta( get_the_ID(), '_writer_name_five', true );
																
																
																
																
															$writer1page = get_page_by_title( $writername, "OBJECT", 'staff' );
															$writer1pagestatus = get_post_status( $writer1page );
															$writer1page_ID = $writer1page->ID;
															$getwriterpage1url = get_post_permalink( $writer1page_ID );
															
															$writer2page = get_page_by_title( $writername2, "OBJECT", 'staff' );
															$writer2pagestatus = get_post_status( $writer2page );
															$writer2page_ID = $writer2page->ID;
															$getwriterpage2url = get_post_permalink( $writer2page_ID );
															
															$writer3page = get_page_by_title( $writername3, "OBJECT", 'staff' );
															$writer3pagestatus = get_post_status( $writer3page );
															$writer3page_ID = $writer3page->ID;
															$getwriterpage3url = get_post_permalink( $writer3page_ID );
															
															$writer4page = get_page_by_title( $writername4, "OBJECT", 'staff' );
															$writer4pagestatus = get_post_status( $writer4page );
															$writer4page_ID = $writer4page->ID;
															$getwriterpage4url = get_post_permalink( $writer4page_ID );
															
															$writer5page = get_page_by_title( $writername5, "OBJECT", 'staff' );
															$writer5pagestatus = get_post_status( $writer5page );
															$writer5page_ID = $writer1page->ID;
															$getwriterpage5url = get_post_permalink( $writer1page_ID );
															
															
															
												if ($writer1pagestatus !== "publish" || $writer1page == null) {
													
													$getwriterpage1url = "";
													
												}
												
												if ($writer2pagestatus !== "publish" || $writer2page == null) {
													
													$getwriterpage2url = "";
													
												}
												
												if ($writer3pagestatus !== "publish" || $writer3page == null) {
													
													$getwriterpage3url = "";
													
												}
												
												if ($writer4pagestatus !== "publish" || $writer4page == null) {
													
													$getwriterpage4url = "";
													
												}
												
												
												if ($writer5pagestatus !== "publish" || $writer5page == null) {
													
													$getwriterpage5url = "";
													
												}			
																
																
																
																
													
													
							if ($writername5 == "" and $writername4 == "" and $writername3 == "" and $writername2 == "" and $writername !== "") {
							
							
													
							echo '<span class="onebigauthorname">';
							
							
								if($getwriterpage1url !== "") {
									
								echo '<span class="authoruppercase"><a href="'.$getwriterpage1url.'">'.get_post_meta( get_the_ID(), '_writer_name', true ).'</a></span>';
									
								}
								
								
								else {
									
								echo '<span class="authoruppercase">'.get_post_meta( get_the_ID(), '_writer_name', true ).'</span>';	
								
								}
									
									 
							echo '<span class="positionname">'.$positionname.'</span></span>'; 
													 
													 
							}
													 
													 
							elseif ($writername5 == "" and $writername4 == "" and $writername3 == "" and $writername2 !== "" and $writername !== "") { ?>
														 
														 
						<span class="onebigauthorname">
						
						<span class="authoruppercase">
						
						<?php if($getwriterpage1url !== "") { echo '<a href="'.$getwriterpage1url.'">'.$writername.'</a>'; } 
						
							else {
								
								echo $writername;
								
							}
						
						
						?>

					

												
						</span> and 
						
						
						<span class="authoruppercase">
						
						
						<?php if($getwriterpage2url !== "") { echo '<a href="'.$getwriterpage2url.'">'.$writername2.'</a>'; } 
						
							else {
								
								echo $writername2;
								
							}
						
						
						?>
						
						
						
						</span>
						
						
						</span>
						
						
						
														 
														 
						<?			 }
													 
													 
													  elseif ($writername5 == "" and $writername4 == "" and $writername3 !== "" and $writername2 !== "" and $writername !== "") { ?>
														 
													<span class="onebigauthorname">
						
						<span class="authoruppercase">
						
						<?php if($getwriterpage1url !== "") { echo '<a href="'.$getwriterpage1url.'">'.$writername.'</a>,'; } 
						
							else {
								
								echo $writername.',';
								
							}
						
						
						?>

					

												
						</span>
						
						
						<span class="authoruppercase">
						
						
						<?php if($getwriterpage2url !== "") { echo '<a href="'.$getwriterpage2url.'">'.$writername2.'</a>'; } 
						
							else {
								
								echo $writername2;
								
							}
						
						
						?>
						
						
						
						</span>and
						
						<span class="authoruppercase">
						
						
						<?php if($getwriterpage3url !== "") { echo '<a href="'.$getwriterpage3url.'">'.$writername3.'</a>'; } 
						
							else {
								
								echo $writername3;
								
							}
						
						
						?>
						
						
						
						</span>
						
						
						</span>

														 
														 
											<?php		 }
													 
													 elseif ($writername5 == "" and $writername4 !== "" and $writername3 !== "" and $writername2 !== "" and $writername !== "") { ?>
														 
														 
											<span class="onebigauthorname">
						
						<span class="authoruppercase">
						
						<?php if($getwriterpage1url !== "") { echo '<a href="'.$getwriterpage1url.'">'.$writername.'</a>,'; } 
						
							else {
								
								echo $writername;
								
							}
						
						
						?>

					

												
						</span>
						
						
						<span class="authoruppercase">
						
						
						<?php if($getwriterpage2url !== "") { echo '<a href="'.$getwriterpage2url.'">'.$writername2.'</a>,'; } 
						
							else {
								
								echo $writername2;
								
							}
						
						
						?>
						
						
						
						</span>
						
						<span class="authoruppercase">
						
						
						<?php if($getwriterpage3url !== "") { echo '<a href="'.$getwriterpage3url.'">'.$writername3.'</a>'; } 
						
							else {
								
								echo $writername3;
								
							}
						
						
						?>
						
						
						
						</span> and
						
						<span class="authoruppercase">
						
						
						<?php if($getwriterpage4url !== "") { echo '<a href="'.$getwriterpage4url.'">'.$writername4.'</a>'; } 
						
							else {
								
								echo $writername4;
								
							}
						
						
						?>
						
						
						
						</span>
						
						
						</span>				
														
														
														
														
														
														
														 
														 
										<?php			 }     
													 
													 
													 elseif ($writername5 !== "" and $writername4 !== "" and $writername3 !== "" and $writername2 !== "" and $writername !== "") {  ?>
												
												
														<span class="onebigauthorname">
						
						<span class="authoruppercase">
						
						<?php if($getwriterpage1url !== "") { echo '<a href="'.$getwriterpage1url.'">'.$writername.'</a>,'; } 
						
							else {
								
								echo $writername;
								
							}
						
						
						?>

					

												
						</span>
						
						
						<span class="authoruppercase">
						
						
						<?php if($getwriterpage2url !== "") { echo '<a href="'.$getwriterpage2url.'">'.$writername2.'</a>,'; } 
						
							else {
								
								echo $writername2;
								
							}
						
						
						?>
						
						
						
						</span>
						
						<span class="authoruppercase">
						
						
						<?php if($getwriterpage3url !== "") { echo '<a href="'.$getwriterpage3url.'">'.$writername3.'</a>,'; } 
						
							else {
								
								echo $writername3;
								
							}
						
						
						?>
						
						
						
						</span>
						
						<span class="authoruppercase">
						
						
						<?php if($getwriterpage4url !== "") { echo '<a href="'.$getwriterpage4url.'">'.$writername4.'</a> and'; } 
						
							else {
								
								echo $writername4;
								
							}
						
						
						?>
						
						
						<?php if($getwriterpage5url !== "") { echo '<a href="'.$getwriterpage5url.'">'.$writername5.'</a>'; } 
						
							else {
								
								echo $writername5;
								
							}
						
						
						?>
						
						
						
						</span>
						
						
						</span>				
									
												
												
												
														 
														 
									<?php				 }
													 
													 
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
                  
                  
                  
                  						<div class="imageadgroup noimageright">
						
						
							
							
							
							
										
										
										
								<div class="articlead">
									
									<?php include(locate_template('adurlandimage.php'));   // Top of post info, include tags, election headings, and date (post-infogrouping.php) ?> 									
								</div>		


								<div style="clear:both"> </div>


						</div> 
                

                <section class="utpost-content magazinepost-content cf" itemprop="articleBody">
	                
	                
	                
	                
	           
	                
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
                
                 <div style="clear:both"> </div>
                 
                
                
                
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

                
                
                <?php include(locate_template('bottomemailsignup.php'));   // Email Sign Up (bottomemailsignup.php) ?>
              
                <?php get_template_part( 'editorspicks' );  // Editors' Picks (editorspicks.php) ?>
              
                
                
                </div>
                
                               

             



				<div class="commentblock">

                
                
                <div style="clear:both"> </div>
                
				</div>
				
				
				
							</div>

			</div>



<?php get_footer(); ?>
