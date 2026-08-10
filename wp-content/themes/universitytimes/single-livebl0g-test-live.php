<?php
/*
Template Name Posts: Live Test
*/
?>



<?php get_header(); ?>

			<div id="content">

				<div id="articlecontent">

					

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						
						
						
		
		<?php if ( is_object_in_term( $post->ID, 'section', 'opinion' ) && is_object_in_term( $post->ID, 'articletype', 'editorials' ) ) : ?>
						
						
						<header class="article-header">
	              
	              <div class="infogrouping">
	                
	                <?php
										if ( is_object_in_term( $post->ID, 'section', 'news' ) ) :
										echo '<a href="'.home_url().'/news" class="articlesectiontag newstag">News</a>';
	
	
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
								
								
							<div class="profiletag">Editorial</div>
								
								 <div class="dateright"><?php the_date('M j, Y'); ?></div>
								 
								 
								 
								 
								 
								 <div style="clear: both;"></div>
								 
	              </div>


                  <h2 class="articleheadline_editorial" itemprop="headline"><?php the_title(); ?></h2>
                  
                  <h3 class="articlesub"><?php 
	                  
	                  if(function_exists("the_subtitle")) {	 $new_caption = get_the_subtitle();  }

	                  
	                  $old_caption = get_post_meta($post->ID, '_visual-subtitle', true);
	                  
	                  
	                  if ($new_caption != "") {
		                  
		                  echo $new_caption;
		                  
	                  }
	                  
			
					  elseif ($old_caption !== "" && $old_caption !== false) {	echo get_post_meta($post->ID, '_visual-subtitle', true); 	}	?></h3>
										
										
										
										
					<?php $otherlanguagelink = get_post_meta($post->ID, 'otherlanguagelink', true); 
						
						
						if($otherlanguagelink != "") {  ?>
							
							
							<a href="<?php echo $otherlanguagelink ?>" class="readinotherlanguage">Léigh as Gaeilge an t-Eagarfhocal (Read Editorial in Irish) &#187;</a>	
							
							
					<?php		
						}
						
						
					?>					
									

                 
                 



                  
                </header> <?php // end article header ?>
                
                
                	<?php 
						$utpostimage_id = get_post_meta( $post->ID, "utpostimage_id", true ); 	
						$utpostimage_url = get_post_meta( $post->ID, "utpostimage_url", true ); 	
						$utpostimage_position = get_post_meta( $post->ID, "utpostimage_position", true );
						$featuredimageurl = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
							
						?>
						
						
						


						
						
						
						
					<!--	<div style="background: green; height: 500px; width: 100%;"></div> -->
						
						
						<div style="clear:both"> </div>
                
                
       <div class="utcontentgrouping" >
                
                
                 <div class="writershareblock">
                  
                  
                  <span class="onebigauthorname">By
						
						<span class="authoruppercase">
						
						The Editorial Board

					

												
						</span></span>
						          			
									
												
												
												
														 
														 
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
                  
                  
                  
                  						<div class="imageadgroup noimageright">
						
		
										
								<div class="articlead">
									
									<?php include(locate_template('adurlandimage.php'));   // Top of post info, include tags, election headings, and date (post-infogrouping.php) ?> 									
								</div>		


								<div style="clear:both"> </div>


						</div> 
                

                <section class="utlivepost-content cf" itemprop="articleBody">
	                
	                
	                
	                
	                
	                
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
                    
                    
                    				$date_u = current_time('timestamp');
			  
			  
									  
									  $current_post_time = get_post_time('U');
									  
									  $current_post_age = $date_u - $current_post_time; 
									
								      $current_post_age_in_hours = $current_post_age/3600;
                    
                    
                    
    
                 
                    
                    
                  ?>
                  
                  <!-- This is a comment to see if anything is updating -->
                   
                  
                  
                  <?php wp_reset_postdata(); ?>
                  
                   <div style="clear:both"> </div>
                  
                </section> <?php // end article section ?>
                
                
                 <div style="clear:both"> </div>
                
                 <?php 
	                 
	                 
$listofthingstoexclude = array();

$listofthingstoexclude[] = $currentpostid;
	                 
	                 
// the query


$args_editorials = array(
	'post_type' => array('post'),
	'posts_per_page' => 4,
	'orderby' => 'date',
	'post__not_in' => $listofthingstoexclude,
	'tax_query' => array(
				array(
					'taxonomy' => 'section',
					'terms' => array('opinion'),
					'field' => 'slug',
				)
			),
			
	'tax_query' => array(
				array(
					'taxonomy' => 'articletype',
					'terms' => array('editorials'),
					'field' => 'slug',
				)
			),			

);







$the_query_editorials = new WP_Query( $args_editorials ); ?>

<?php if ( $the_query_editorials->have_posts() ) :
	
	$postcounteditorials = 0;
	
	$postcounteditorials_outofdate = 0;
	
	 ?>

	<!-- pagination here -->
	
	

	<!-- the loop -->
	<?php while ( $the_query_editorials->have_posts() ) : $the_query_editorials->the_post(); ?>
		<?php
			
			
			  $date_u = current_time('timestamp');
			  
			  
									  
									  $post_time = get_post_time('U');
									  
									  $post_age = $date_u - $post_time; 
									
								      $post_age_in_hours = $post_age/3600;
								      
								      $post_age_in_minutes = $post_age/60;	
								      
								      $editorialhours = 156;
								
								
								
								if($editorialhours > $post_age_in_hours && $editorialhours > $current_post_age_in_hours ) {
		
										$postcounteditorials++;
		
				
								}		
								
								$listofthingstoexclude[] = get_the_id();
								
								$postcounteditorials_outofdate++;
										
								${"editorialname_$postcounteditorials"} = get_the_title();
								${"editoriallink_$postcounteditorials"} = get_the_permalink();
								${"editorialsub_$postcounteditorials"} = get_the_subtitle();	
		
		
								${"editorialname_$postcounteditorials_outofdate"} = get_the_title();
								${"editoriallink_$postcounteditorials_outofdate"} = get_the_permalink();
								${"editorialsub_$postcounteditorials_outofdate"} = get_the_subtitle();	
		
		
		
		
		
		  ?>
	<?php endwhile; ?>
	<!-- end of the loop -->

	<!-- pagination here -->

	<?php wp_reset_postdata(); ?>

<?php else : ?>
	
<?php endif; 
	
	
	$postcounteditorials = 5;
	
	
?>

                
                <?php if ($postcounteditorials == 1) : ?>
                
                
                 <div class="editorspicks editorialthisweek">
	                 
	                 
	                 
	                 				
	                	<h3>Also in Editorial this Week</h3>
	                	
	                	
	                	<a href="<?php echo $editoriallink_1; ?>">
	                	
	                	
	                	<h4 class="alsoineditorialheadline"><?php echo $editorialname_1; ?></h4>
	                	<h5 class="pickscaption"><?php echo $editorialsub_1; ?></h5>
	                	
	                	
	                 </a>
	                 
	                 <div style="clear:both"> </div>
	                	
                  </div> 
                  
                  
                   <?php elseif ($postcounteditorials == 2) : ?>
                  
                  
                      <div class="editorspicks editorialthisweek">
	                 
	                 				
	                	<h3>Also in Editorial this Week</h3>
	                	
	                	 <a href="<?php echo $editoriallink_1; ?>">
	                	
	                	<h4 class="alsoineditorialheadline"><?php echo $editorialname_1; ?></h4>
	                	
	                	<h5 class="pickscaption"><?php echo $editorialsub_1; ?></h5>
	                	
	                	 </a>
	                	 
	                	 <a href="<?php echo $editoriallink_2; ?>">
	                	
	                	<h4 class="alsoineditorialheadline"><?php echo $editorialname_2; ?></h4>
	                	
	                	<h5 class="pickscaption"><?php echo $editorialsub_2; ?></h5>
	                	
	                	
	                	 </a>
	                	
	                	
	                	
	                	<div style="clear:both"> </div>
	                	
	                	
                  </div> 
                  
                  
                 <div style="clear:both"> </div> 
                 
                 
                 <?php elseif ($postcounteditorials == 0) : ?>
                 
                   <div class="editorspicks editorialthisweek">
	                 
	                 				
	                	<h3>More from the Editorial Board</h3>
	                	
	                		<a href="<?php echo $editoriallink_1; ?>" class="pickstory">
							
							
							<h4 class="picksnoimage"><?php echo $editorialname_1; ?></h4>
							
							<h5 class="pickscaption"><?php echo $editorialsub_1; ?></h5>
						
		              
						</a> 
						
						<a href="<?php echo $editoriallink_2; ?>" class="pickstorymiddle">
							
							
							<h4 class="picksnoimage"><?php echo $editorialname_2; ?></h4>
							
							<h5 class="pickscaption"><?php echo $editorialsub_2; ?></h5>
						
		              
						</a> 
						
						<a href="<?php echo $editoriallink_3; ?>" class="pickstoryright">
							
							
							<h4 class="picksnoimage"><?php echo $editorialname_3; ?></h4>
							
							<h5 class="pickscaption"><?php echo $editorialsub_3; ?></h5>
						
		              
						</a> 
	                	
	                		                	
	                	
	                	
	                	<div style="clear:both"> </div>
	                	
	                	
                  </div> 
                  
                  
                 <div style="clear:both"> </div> 
                 
                 
                  
                  
                  <?php endif; ?>	
                  
                  
                   </div><!-- Closing stupid div -->
                   
                   
                   
              <?php include(locate_template('editorspicks.php'));   // Editors' Picks (editorspicks.php) ?>
                
               
               
                            
              
                
                
                </div>
                
                
                
                
        		<?php elseif ( is_object_in_term( $post->ID, 'section', 'opinion' ) && is_object_in_term( $post->ID, 'articletype', 'eagarfhocail' ) ) : ?>
						
						
						<header class="article-header">
	              
	              <div class="infogrouping">
	                
	                <?php
										if ( is_object_in_term( $post->ID, 'section', 'news' ) ) :
										echo '<a href="'.home_url().'/news" class="articlesectiontag newstag">News</a>';
	
	
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
								
								
							<div class="profiletag">Eagarfhocal</div>
								
								 <div class="dateright"><?php the_date('M j, Y'); ?></div>
								 
								 
								 
								 
								 
								 <div style="clear: both;"></div>
								 
	              </div>


                  <h2 class="articleheadline_editorial" itemprop="headline"><?php the_title(); ?></h2>
                  
                  <h3 class="articlesub"><?php 
	                  
	                  if(function_exists("the_subtitle")) {	 $new_caption = get_the_subtitle();  }

	                  
	                  $old_caption = get_post_meta($post->ID, '_visual-subtitle', true);
	                  
	                  
	                  if ($new_caption != "") {
		                  
		                  echo $new_caption;
		                  
	                  }
	                  
			
					  elseif ($old_caption !== "" && $old_caption !== false) {	echo get_post_meta($post->ID, '_visual-subtitle', true); 	}	?></h3>
										
										
					<?php $otherlanguagelink = get_post_meta($post->ID, 'otherlanguagelink', true); 
						
						
						if($otherlanguagelink != "") {  ?>
							
							
							<a href="<?php echo $otherlanguagelink ?>" class="readinotherlanguage">Read Editorial in English (Léigh as Bearla an t-Eagarfhocal) &#187;</a>	
							
							
					<?php		
						}
						
						
					?>
					
										
										
									
									

                 
                 



                  
                </header> <?php // end article header ?>
                
                
                	<?php 
						$utpostimage_id = get_post_meta( $post->ID, "utpostimage_id", true ); 	
						$utpostimage_url = get_post_meta( $post->ID, "utpostimage_url", true ); 	
						$utpostimage_position = get_post_meta( $post->ID, "utpostimage_position", true );
						$featuredimageurl = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
							
						?>
						
						
						


						
						
						
						
					<!--	<div style="background: green; height: 500px; width: 100%;"></div> -->
						
						
						<div style="clear:both"> </div>
                
                
       <div class="utcontentgrouping">
                
                
                 <div class="writershareblock">
                  
                  
                  <span class="onebigauthorname">Leis an 
						
						<span class="authoruppercase">
						
						mBord Eagarthóireachta

					

												
						</span></span>
						          			
									
												
												
												
														 
														 
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
  moreLink: '<div class="readmoremobile"><a href="#">Léigh an t-alt iomlán</a></div>',
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
                    
                    
                    				$date_u = current_time('timestamp');
			  
			  
									  
									  $current_post_time = get_post_time('U');
									  
									  $current_post_age = $date_u - $current_post_time; 
									
								      $current_post_age_in_hours = $current_post_age/3600;
                    
                    
                    
    
                 
                    
                    
                  ?>
                  
                  <!-- This is a comment to see if anything is updating -->
                   
                  
                  
                  <?php wp_reset_postdata(); ?>
                  
                   <div style="clear:both"> </div>
                  
                </section> <?php // end article section ?>
                
                
                 <div style="clear:both"> </div>
                
                 <?php 
	                 
	                 
$listofthingstoexclude = array();

$listofthingstoexclude[] = $currentpostid;
	                 
	                 
// the query


$args_editorials = array(
	'post_type' => array('post'),
	'posts_per_page' => 4,
	'orderby' => 'date',
	'post__not_in' => $listofthingstoexclude,
	'tax_query' => array(
				array(
					'taxonomy' => 'section',
					'terms' => array('opinion'),
					'field' => 'slug',
				)
			),
			
	'tax_query' => array(
				array(
					'taxonomy' => 'articletype',
					'terms' => array('editorials'),
					'field' => 'slug',
				)
			),			

);







$the_query_editorials = new WP_Query( $args_editorials ); ?>

<?php if ( $the_query_editorials->have_posts() ) :
	
	$postcounteditorials = 0;
	
	$postcounteditorials_outofdate = 0;
	
	 ?>

	<!-- pagination here -->
	
	

	<!-- the loop -->
	<?php while ( $the_query_editorials->have_posts() ) : $the_query_editorials->the_post(); ?>
		<?php
			
			
			  $date_u = current_time('timestamp');
			  
			  
									  
									  $post_time = get_post_time('U');
									  
									  $post_age = $date_u - $post_time; 
									
								      $post_age_in_hours = $post_age/3600;
								      
								      $post_age_in_minutes = $post_age/60;	
								      
								      $editorialhours = 156;
								
								
								
								if($editorialhours > $post_age_in_hours && $editorialhours > $current_post_age_in_hours ) {
		
										$postcounteditorials++;
		
				
								}		
								
								$listofthingstoexclude[] = get_the_id();
								
								$postcounteditorials_outofdate++;
										
								${"editorialname_$postcounteditorials"} = get_the_title();
								${"editoriallink_$postcounteditorials"} = get_the_permalink();
								${"editorialsub_$postcounteditorials"} = get_the_subtitle();	
		
		
								${"editorialname_$postcounteditorials_outofdate"} = get_the_title();
								${"editoriallink_$postcounteditorials_outofdate"} = get_the_permalink();
								${"editorialsub_$postcounteditorials_outofdate"} = get_the_subtitle();	
		
		
		
		
		
		  ?>
	<?php endwhile; ?>
	<!-- end of the loop -->

	<!-- pagination here -->

	<?php wp_reset_postdata(); ?>

<?php else : ?>
	
<?php endif; 
	
	
	$postcounteditorials = 5;
	
	
?>

                
                <?php if ($postcounteditorials == 1) : ?>
                
                
                 <div class="editorspicks editorialthisweek">
	                 
	                 
	                 
	                 				
	                	<h3>Also in Editorial this Week</h3>
	                	
	                	
	                	<a href="<?php echo $editoriallink_1; ?>">
	                	
	                	
	                	<h4 class="alsoineditorialheadline"><?php echo $editorialname_1; ?></h4>
	                	<h5 class="pickscaption"><?php echo $editorialsub_1; ?></h5>
	                	
	                	
	                 </a>
	                 
	                 <div style="clear:both"> </div>
	                	
                  </div> 
                  
                  
                   <?php elseif ($postcounteditorials == 2) : ?>
                  
                  
                      <div class="editorspicks editorialthisweek">
	                 
	                 				
	                	<h3>Also in Editorial this Week</h3>
	                	
	                	 <a href="<?php echo $editoriallink_1; ?>">
	                	
	                	<h4 class="alsoineditorialheadline"><?php echo $editorialname_1; ?></h4>
	                	
	                	<h5 class="pickscaption"><?php echo $editorialsub_1; ?></h5>
	                	
	                	 </a>
	                	 
	                	 <a href="<?php echo $editoriallink_2; ?>">
	                	
	                	<h4 class="alsoineditorialheadline"><?php echo $editorialname_2; ?></h4>
	                	
	                	<h5 class="pickscaption"><?php echo $editorialsub_2; ?></h5>
	                	
	                	
	                	 </a>
	                	
	                	
	                	
	                	<div style="clear:both"> </div>
	                	
	                	
                  </div> 
                  
                  
                 <div style="clear:both"> </div> 
                 
                 
                 <?php elseif ($postcounteditorials == 0) : ?>
                 
                   <div class="editorspicks editorialthisweek">
	                 
	                 				
	                	<h3>More from the Editorial Board</h3>
	                	
	                		<a href="<?php echo $editoriallink_1; ?>" class="pickstory">
							
							
							<h4 class="picksnoimage"><?php echo $editorialname_1; ?></h4>
							
							<h5 class="pickscaption"><?php echo $editorialsub_1; ?></h5>
						
		              
						</a> 
						
						<a href="<?php echo $editoriallink_2; ?>" class="pickstorymiddle">
							
							
							<h4 class="picksnoimage"><?php echo $editorialname_2; ?></h4>
							
							<h5 class="pickscaption"><?php echo $editorialsub_2; ?></h5>
						
		              
						</a> 
						
						<a href="<?php echo $editoriallink_3; ?>" class="pickstoryright">
							
							
							<h4 class="picksnoimage"><?php echo $editorialname_3; ?></h4>
							
							<h5 class="pickscaption"><?php echo $editorialsub_3; ?></h5>
						
		              
						</a> 
	                	
	                		                	
	                	
	                	
	                	<div style="clear:both"> </div>
	                	
	                	
                  </div> 
                  
                  
                 <div style="clear:both"> </div> 
                 
                 
                  
                  
                  <?php endif; ?>	
                
                
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

                
                
                
              
              
               <?php include(locate_template('editorspicks.php'));   // Editors' Picks (editorspicks.php) ?>              
              
              
                
                
                </div>        
                
                               

             
		<?php elseif ( is_object_in_term( $post->ID, 'section', 'magazine' ) && is_object_in_term( $post->ID, 'articletype', 'magazinefeature' ) ) : ?>
			
					
						  <?php get_template_part( 'magazinetemplate' );  // Editors' Picks (magazinetemplate.php) ?>


				

							
        
        <?php else : ?>
        
        
        
        <div class="pagegrouping" style="">
        
              
                      <header class="article-header">
	              
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
										
									elseif ( is_object_in_term( $post->ID, 'category', 'campaignnotebook' ) ) :
										echo '<div class="profiletag">Notebook</div>'; 
										
										
										
										else :
											
											endif;?>
								
								 <div class="dateright paddingmobile"><?php the_date('M j, Y'); ?></div>
								 
								 
								 
								 
								 
								 <div style="clear: both;"></div>
								 
	              </div>


                  <h2 class="liveblogtitle paddingmobile" itemprop="headline" style="font-size: 31px; margin-top: 0px; padding-top: 0px; text-transform: uppercase; letter-spacing: -0.4px;"><strong>Live:</strong> USI's National Demonstration</strong></h2>
                  
                  

										
								
                  		<div class="livebloginfo paddingmobile" style="width: 100%; max-width: 620px; margin-bottom: 15px;"><a href="http://twitter.com/sineadbaker1">Sinéad Baker</a>, Róisín Power and <a href="http://twitter.com/charlottehryan">Charlotte Ryan</a> are providing live updates throughout the course of the day.</div>				
										
										
										
									

                 
                 



                  
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
	       									elseif ($utpostimage_position == 'portraitright' && $utpostimage_url != '') { echo "utcontentgroupingportrait";} ?>" ">
                
                
                 <div class="writershareblock">
                  
                  
                  
						             			
									
												
												
												
														 
														 
									<?php				
													 
													 
											$permalink = get_permalink();		 
													 
								$facebookurl = "http://api.facebook.com/restserver.php?method=links.getStats&urls=" . $permalink;
											
								$facebookurl2 = "http://api.facebook.com/restserver.php?method=links.getStats&urls=" . "http://universitytimes.ie/?p=" . get_the_ID();
								
								$facebookurl3 = "http://api.facebook.com/restserver.php?method=links.getStats&urls=" . "https://www.universitytimes.ie/?p=" . get_the_ID();
									
									
									$facebookurl4 = "http://api.facebook.com/restserver.php?method=links.getStats&urls=http://www.universitytimes.ie/2016/04/live-seanad-tcd-panel-count/";
											
											
											
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
							 
							 $facebookdata4 = simplexml_load_file($facebookurl4);
						
						 $facebook_total_engagement4 = $facebookdata4->link_stat->total_count;
						
						$facebook_total_engagement = $facebook_total_engagement + $facebook_total_engagement2 + $facebook_total_engagement3 + $facebook_total_engagement4;
						
						
													 							 
													 
													 
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
											
														 
                 

						<div class="sharebuttonsblock leftforce" >
				
							<a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" class="facebookshare popup"><?php if($facebook_total_engagement != "0"){ echo $facebook_total_engagement; }?></a>
                  
							<a href="<?php echo $twitterurl; ?>" class="twittershare popup"><?php if($twitter_total_count > 0){echo $twitter_total_count;} ?></a>
                  
							<a href="mailto:?subject=The University Times &ndash; <?php echo get_the_title(); ?>&amp;body=<?php if(function_exists("the_subtitle")) {
										
												echo  the_subtitle();
												
												
												
							} ?>%0D%0A%0D%0A<?php echo get_the_permalink();?>%0D%0A%0D%0A%0D%0A%0D%0A" class="emailshare"></a>
                  
                  
                  
						</div>

					
						<div style="clear: both"></div>

                  </div>
                  
                  
                  										
					
								
                <section class="utlivepost-content cf" itemprop="articleBody">
	                
	                
	                
	                
	                
	                
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
                
              
                 <?php include(locate_template('editorspicks.php'));   // Editors' Picks (editorspicks.php) ?>
              
                
                
                </div>
                
                               

               <div class="rightstuffhere" style="margin-top: 10px; float: right; width: 260px;">
	       
	      <div class="rightgrouping">
						
						
						 						
						
						
						
				
						
							
							
					</div>
	       
       </div>  



				<div class="commentblock">

                
                
                <div style="clear:both"> </div>
                
                
                
				</div>
				
				
				

              <?php endif; ?>

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
