<?php
/*
Template Name Posts: Love Interest Submissions
*/
?>



<?php get_header(); ?>

			<div id="content">

				<div id="articlecontent">

					

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						
						
						
	

							
        
              
                      <header class="article-header">
	              
	            
	            
	            <h4 class="loveinterestheading">
		            
		            <span class="love">Love</span>
		            <span class="interest">Interest</span>
		            
		            
	            </h4>
	            

                  <h2 class="articleheadline_loveinterest" itemprop="headline"><?php the_title(); ?></h2>
                  
                  <h3 class="articlesub"></h3>
										
										
										
										
										
									

                 
                 



                  
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
                  
                  
                  
						                  <?php
													
																$writername = get_post_meta( get_the_ID(), '_writer_name', true );
																$positionname = get_post_meta( get_the_ID(), '_position_name', true );
																$writername2 = get_post_meta( get_the_ID(), '_writer_name_two', true );
																$writername3 = get_post_meta( get_the_ID(), '_writer_name_three', true );
																$writername4 = get_post_meta( get_the_ID(), '_writer_name_four', true );
																$writername5 = get_post_meta( get_the_ID(), '_writer_name_five', true );
																
																
																
																
															$writer1page = get_page_by_title( $writername, "OBJECT", 'staff' );
															$writer1page_ID = $writer1page['ID'];
															$writer1pagestatus = get_post_status( $writer1page_ID );
															$getwriterpage1url = get_post_permalink( $writer1page_ID );
															
															$writer2page = get_page_by_title( $writername2, "OBJECT", 'staff' );
															$writer2page_ID = $writer2page['ID'];
															$writer2pagestatus = get_post_status( $writer2page_ID );
															$getwriterpage2url = get_post_permalink( $writer2page_ID );
															
															$writer3page = get_page_by_title( $writername3, "OBJECT", 'staff' );
															$writer3page_ID = $writer3page['ID'];
															$writer3pagestatus = get_post_status( $writer3page_ID );
															$getwriterpage3url = get_post_permalink( $writer3page_ID );
															
															$writer4page = get_page_by_title( $writername4, "OBJECT", 'staff' );
															$writer4page_ID = $writer4page['ID'];
															$writer4pagestatus = get_post_status( $writer4page_ID );
															$getwriterpage4url = get_post_permalink( $writer4page_ID );
															
															$writer5page = get_page_by_title( $writername5, "OBJECT", 'staff' );
															$writer5page_ID = $writer5page['ID'];
															$writer5pagestatus = get_post_status( $writer5page_ID );
															$getwriterpage5url = get_post_permalink( $writer5page_ID );
															
															
															
												if ($writer1pagestatus !== "publish" || $writer1page == null || $writer1pagestatus == "draft" || $writer1pagestatus == "trash") {
													
													$getwriterpage1url = "";
													
												}
												
												if ($writer2pagestatus !== "publish" || $writer2page == null || $writer2pagestatus == "draft" || $writer2pagestatus == "trash") {
													
													$getwriterpage2url = "";
													
												}
												
												if ($writer3pagestatus !== "publish" || $writer3page == null || $writer3pagestatus == "draft" || $writer3pagestatus == "trash") {
													
													$getwriterpage3url = "";
													
												}
												
												if ($writer4pagestatus !== "publish" || $writer4page == null || $writer4pagestatus == "draft" || $writer4pagestatus == "trash") {
													
													$getwriterpage4url = "";
													
												}
												
												
												if ($writer5pagestatus !== "publish" || $writer5page == null || $writer5pagestatus == "draft" || $writer5pagestatus == "trash") {
													
													$getwriterpage5url = "";
													
												}			
																
																
																
																
													
													
							if ($writername5 == "" and $writername4 == "" and $writername3 == "" and $writername2 == "" and $writername !== "") {
							
							
													
							echo '<span class="onebigauthorname">';
							
							
								if($getwriterpage1url !== "") {    ?>
									
								
								<span class="authoruppercase"><a href="<?php echo $getwriterpage1url; ?>"><?php echo $writername; ?></a></span>
									
								
								<?php
								
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
								
								echo $writername.',';
								
							}
						
						
						?>

					

												
						</span>
						
						
						<span class="authoruppercase">
						
						
						<?php if($getwriterpage2url !== "") { echo '<a href="'.$getwriterpage2url.'">'.$writername2.'</a>,'; } 
						
							else {
								
								echo $writername2.',';
								
							}
						
						
						?>
						
						
						
						</span>
						
						<span class="authoruppercase">
						
						
						<?php if($getwriterpage3url !== "") { echo '<a href="'.$getwriterpage3url.'">'.$writername3.'</a>'; } 
						
							else {
								
								echo $writername3.',';
								
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
								
								echo $writername.',';
								
							}
						
						
						?>

					

												
						</span>
						
						
						<span class="authoruppercase">
						
						
						<?php if($getwriterpage2url !== "") { echo '<a href="'.$getwriterpage2url.'">'.$writername2.'</a>,'; } 
						
							else {
								
								echo $writername2.',';
								
							}
						
						
						?>
						
						
						
						</span>
						
						<span class="authoruppercase">
						
						
						<?php if($getwriterpage3url !== "") { echo '<a href="'.$getwriterpage3url.'">'.$writername3.'</a>,'; } 
						
							else {
								
								echo $writername3.',';
								
							}
						
						
						?>
						
						
						
						</span> 
						
						<span class="authoruppercase">
						
						
						<?php if($getwriterpage4url !== "") { echo '<a href="'.$getwriterpage4url.'">'.$writername4.'</a> and'; } 
						
							else {
								
								echo $writername4;
								
							}
						
						
						?></span> and
						
						<span class="authoruppercase">
						
						
						<?php if($getwriterpage5url !== "") { echo '<a href="'.$getwriterpage5url.'">'.$writername5.'</a>'; } 
						
							else {
								
								echo $writername5;
								
							}
						
						
						?>
						
						
						
						</span> 
						
						
						</span>				
									
												
												
												
														 
														 
									<?php				 }
													 
													 
											$permalink = get_permalink();		 
													 
																		
											
											
											$headline = rawurlencode(get_the_title());
											
											$tweettext = $headline .'%20'.$permalink.'%20via%20%40universitytimes';
											
								$twitterurl = "https://twitter.com/home?status=" . $tweettext;
								
								 
											
																					
																					
											
												
																				 
													 
												
						
													 							 
													 
													 
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
											
														 
                 

						<div class="sharebuttonsblock	<?php if ($writername5 == "" and $writername4 == "" and $writername3 == "" and $writername2 == "" and $writername == "")  { 
							
							
													
							echo 'leftforce';
							
							
							 } ?>
							
							
							">
				
							<a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" class="facebookshare popup"></a>
                  
							<a href="<?php echo $twitterurl; ?>" class="twittershare popup"></a>
                  
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
                    // the content (pretty self explanatory huh) done
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
                    
                    
                    
                    
                    
                 $bottomofpost = get_post_meta( $post->ID, 'bottomofpost', true);
                   
                   if ($bottomofpost !== "" && $bottomofpost !== null) {  ?>
            
               
                  
                  <div class="bottomofpost">
<hr>

<?php
	
	echo wptexturize(wpautop($bottomofpost));
	
	
	
	?>




</div>



<?php } ?>

                  
                  
                   
                  
                  
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
                
              
                 <?php include(locate_template('editorspicks.php'));   // Editors' Picks (editorspicks.php) ?>
              
                
                
                </div>
                
                               
				<div style="clear:both"> </div>
             



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
