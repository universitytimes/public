<?php
/*
Template Name Posts: Who's Running for Elections? No Writer Name
*/
?>


<?php get_header(); ?>

			<div id="content">
				
				
				<div id="articlecontentwide">

					

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						
						
						
		
              
                      <header class="article-headerwide">
	              
	              <div class="infogrouping">
		              
		              
		               <?php
										if ( is_object_in_term( $post->ID, 'category', 'elections2016' ) ) :
										echo '<a class="tagspush" href="'.home_url().'/category/tcdsu/elections2016/"><span class="ballotboxicon"></span><span class="articlesectiontag tcdsuelectionstag">TCDSU Elections 2016</span></a> <div style="clear: both; height: 32px;"></div>';
										
										
										elseif ( is_object_in_term( $post->ID, 'category', 'generalelection' ) ) :
										echo '<a class="tagspush" href="'.home_url().'/category/generalelection/"><span class="geballoticon"></span><span class="articlesectiontag tcdsuelectionstag">General Election</span></a> <div style="clear: both; height: 32px;"></div>'; 
										elseif ( is_object_in_term( $post->ID, 'category', 'elections2017' ) ) :
										echo '<a class="tagspush" href="'.home_url().'/category/tcdsu/elections2017/"><span class="ballotboxicon"></span><span class="articlesectiontag tcdsuelectionstag">TCDSU Elections 2017</span></a> <div style="clear: both; height: 32px;"></div>';

										
										




										else :
											
											endif;
								?>

		              
		              
		              
		              
	                
	             
								
								
								
								
								 <div class="dateright" style="width: 80px; margin-right: auto; margin-left: auto; text-align: center;"><?php the_date('M j, Y'); ?></div>
								 
								 
								 
								 
								 
								 <div style="clear: both;"></div>
								 
	              </div>
	              
	              <h2 style="text-align: center; text-transform: uppercase; background: white; color: black; font-size: 37px; font-family: 'lft-etica', sans-serif; margin: 0px auto 30px auto; width: 280px; padding: 0px; font-weight: 800; line-height: 100%;"><?php the_title(); ?></h2>
							


                
                  
                										
										
										
										
										
									

                 
                 



                  
                </header> <?php // end article header ?>
                
                
                	<?php 
						$utpostimage_id = get_post_meta( $post->ID, "utpostimage_id", true ); 	
						$utpostimage_url = get_post_meta( $post->ID, "utpostimage_url", true ); 	
						$utpostimage_position = get_post_meta( $post->ID, "utpostimage_position", true );
						$featuredimageurl = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
							
						?>
						
						
						


						
						
						
						
					<!--	<div style="background: green; height: 500px; width: 100%;"></div> -->
						
						
						<div style="clear:both"> </div>
          
    <div class="anothercontainer">      
                
       <div class="utcontentgrouping groupingwide ensuregroupingwide">
                
                
                 <div class="writershareblock shareblockwide">
                  
                  						
						
						</span>
						
						
						</span>			                  
                  
                  
                                
                
                  
						                <?php   }
													 
													 
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
											
														 
                 

						<div class="sharebuttonsblockcentre">
				
							<a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" class="facebookshare popup"></a>
                  
							<a href="<?php echo $twitterurl; ?>" class="twittershare popup"></a>
                  
							<a href="mailto:?subject=The University Times &ndash; <?php echo get_the_title(); ?>&amp;body=<?php if(function_exists("the_subtitle")) {
										
												echo  the_subtitle();
												
												
												
							} ?>%0D%0A%0D%0A<?php echo get_the_permalink();?>%0D%0A%0D%0A%0D%0A%0D%0A" class="emailshare"></a>
                  
                  
                  
						</div>

					
						<div style="clear: both"></div>

                  </div>
                  
                  
                  
                  						<div class="imageadgroup noimageright">
						
						
														
							
										
										
										
									


								<div style="clear:both"> </div>


						</div> 
                

                <section class="utpost-content contentwide cf" itemprop="articleBody">
	                
	                
	                
	                
	                
	                
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
                 
                
                
                
               	                
	                
	                
                </div>

              
                
                
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

			</div>

<?php get_footer(); ?>
