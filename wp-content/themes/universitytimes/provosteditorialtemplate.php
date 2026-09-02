<?php 
						$utpostimage_id = get_post_meta( $post->ID, "utpostimage_id", true ); 	
						$utpostimage_url = get_post_meta( $post->ID, "utpostimage_url", true ); 	
						$utpostimage_position = get_post_meta( $post->ID, "utpostimage_position", true );
						$featuredimageurl = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
							
						?>
					
					
					
					
					
					<div class="magazineabove">
						
						
						<img src="<?php echo $utpostimage_url ?>" alt="blank" />    
						
						
						<div class="magazineheadergrouping">
							
							
							<div class="magazineheaderinside">
								
								
								<div class="magazineheaderdeepinside tapheaderdeepinside">
							
							  <div class="infogrouping"> 
	                
	             
							   <?php
										if ( (is_object_in_term( $post->ID, 'category', 'elections2016' )) && (!is_object_in_term( $post->ID, 'articletype', 'editorials' )) && (!is_object_in_term( $post->ID, 'articletype', 'eagarfhocail' )) ) :
										echo '<a class="tagspush" href="'.home_url().'/category/tcdsu/elections2016/"><span class="ballotboxicon"></span><span class="articlesectiontag tcdsuelectionstag">TCDSU Elections 2016</span></a> <div style="clear: both; height: 32px;"></div>';
										
										elseif ( (is_object_in_term( $post->ID, 'category', 'elections2017' )) && (!is_object_in_term( $post->ID, 'articletype', 'editorials' )) && (!is_object_in_term( $post->ID, 'articletype', 'eagarfhocail' )) ) :
										echo '<a class="tagspush" href="'.home_url().'/category/tcdsu/elections2017/"><span class="ballotboxicon"></span><span class="articlesectiontag tcdsuelectionstag">TCDSU Elections 2017</span></a> <div style="clear: both; height: 32px;"></div>';


									elseif ( (is_object_in_term( $post->ID, 'section', 'freshers' )) ) :
										echo '<a class="tagspush" href="'.home_url().'/freshers/"><span class="postfreshersicon"></span><span class="articlesectiontag fresherstag">Your Essential College Guide</span></a> <div style="clear: both; height: 32px;"></div>';
		

elseif ( (is_object_in_term( $post->ID, 'category', 'patrick-prendergast-legacy' )) ) :
										echo '<a  class="tagspush-longer" style="color: white !important;" href="'.home_url().'/category/patrick-prendergast-legacy/"><span class="post10yearsasprovosticon" style="display: none; height: 0px;"></span><span class="articlesectiontag provostlegacytag" style="color: white !important; margin-bottom: 10px !important; text-shadow: 0px 0px 3px rgba(0, 0, 0, 0.42);">10 Years as Provost<span class="infogrouping-text" style="text-decoration: none; color: white !important; display: none; ">Exploring the legacy of Patrick Prendergast, whose term as Provost concludes this month.</span></span><span style="display:block; clear:both;"></span></a> 
										
										
										 <div style="clear: both; height: 32px;"></div>';
		


																			
										
									elseif ( (is_object_in_term( $post->ID, 'category', 'elections2018' )) && (!is_object_in_term( $post->ID, 'articletype', 'editorials' )) && (!is_object_in_term( $post->ID, 'articletype', 'eagarfhocail' )) ) :
										echo '<a class="tagspush" href="'.home_url().'/category/tcdsu/elections2018/"><span class="ballotboxicon"></span><span class="articlesectiontag tcdsuelectionstag">TCDSU Elections 2018</span></a> <div style="clear: both; height: 32px;"></div>';
										
											elseif ( (is_object_in_term( $post->ID, 'category', 'elections2019' )) && (!is_object_in_term( $post->ID, 'articletype', 'editorials' )) && (!is_object_in_term( $post->ID, 'articletype', 'eagarfhocail' )) ) :
										echo '<a class="tagspush" href="'.home_url().'/category/tcdsu/elections2019/"><span class="ballotboxicon"></span><span class="articlesectiontag tcdsuelectionstag">TCDSU Elections 2019</span></a> <div style="clear: both; height: 32px;"></div>';


elseif ( is_object_in_term( $post->ID, 'category', 'elections2020' ) ) :
										echo '<a class="tagspush" href="'.home_url().'/category/tcdsu/elections2020/"><span class="ballotboxicon"></span><span class="articlesectiontag tcdsuelectionstag">TCDSU Elections 2020</span></a> <div style="clear: both; height: 32px;"></div>';


										elseif ( is_object_in_term( $post->ID, 'category', 'elections2021' ) ) :
										echo '<a class="tagspush" href="'.home_url().'/category/tcdsu/elections2021/"><span class="ballotboxicon"></span><span class="articlesectiontag tcdsuelectionstag">TCDSU Elections 2021</span></a> <div style="clear: both; height: 32px;"></div>';


										elseif ( is_object_in_term( $post->ID, 'category', 'elections2022' ) ) :
										echo '<a class="tagspush" href="'.home_url().'/category/tcdsu/elections2022/"><span class="ballotboxicon"></span><span class="articlesectiontag tcdsuelectionstag">TCDSU Elections 2022</span></a> <div style="clear: both; height: 32px;"></div>';


										elseif ( is_object_in_term( $post->ID, 'category', 'elections2023' ) ) :
										echo '<a class="tagspush" href="'.home_url().'/category/tcdsu/elections2023/"><span class="ballotboxicon"></span><span class="articlesectiontag tcdsuelectionstag">TCDSU Elections 2023</span></a> <div style="clear: both; height: 32px;"></div>';


										elseif ( is_object_in_term( $post->ID, 'category', 'elections2024' ) ) :
										echo '<a class="tagspush" href="'.home_url().'/category/tcdsu/elections2024/"><span class="ballotboxicon"></span><span class="articlesectiontag tcdsuelectionstag">TCDSU Elections 2024</span></a> <div style="clear: both; height: 32px;"></div>';


										elseif ( is_object_in_term( $post->ID, 'category', 'elections2025' ) ) :
										echo '<a class="tagspush" href="'.home_url().'/category/tcdsu/elections2025/"><span class="ballotboxicon"></span><span class="articlesectiontag tcdsuelectionstag">TCDSU Elections 2025</span></a> <div style="clear: both; height: 32px;"></div>';


										elseif ( is_object_in_term( $post->ID, 'category', 'elections2026' ) ) :
										echo '<a class="tagspush" href="'.home_url().'/category/tcdsu/elections2026/"><span class="ballotboxicon"></span><span class="articlesectiontag tcdsuelectionstag">TCDSU Elections 2026</span></a> <div style="clear: both; height: 32px;"></div>';


										elseif ( is_object_in_term( $post->ID, 'category', 'elections2027' ) ) :
										echo '<a class="tagspush" href="'.home_url().'/category/tcdsu/elections2027/"><span class="ballotboxicon"></span><span class="articlesectiontag tcdsuelectionstag">TCDSU Elections 2027</span></a> <div style="clear: both; height: 32px;"></div>';


										elseif ( is_object_in_term( $post->ID, 'category', 'elections2028' ) ) :
										echo '<a class="tagspush" href="'.home_url().'/category/tcdsu/elections2028/"><span class="ballotboxicon"></span><span class="articlesectiontag tcdsuelectionstag">TCDSU Elections 2028</span></a> <div style="clear: both; height: 32px;"></div>';

										
										
										elseif ( (is_object_in_term( $post->ID, 'category', 'generalelection' )) && (!is_object_in_term( $post->ID, 'articletype', 'editorials' )) && (!is_object_in_term( $post->ID, 'articletype', 'eagarfhocail' )) ) :
										echo '<a class="tagspush" href="'.home_url().'/category/generalelection/"><span class="geballoticon"></span><span class="articlesectiontag tcdsuelectionstag">General Election</span></a> <div style="clear: both; height: 32px;"></div>'; 
										
										
										elseif ( (is_object_in_term( $post->ID, 'category', 'collingwoodcup2020' )) && (!is_object_in_term( $post->ID, 'articletype', 'editorials' )) && (!is_object_in_term( $post->ID, 'articletype', 'eagarfhocail' )) ) :
										echo '<a class="tagspush" href="'.home_url().'/category/soccer/collingwoodcup2020"><span class="collingwoodcupicon"></span><span class="articlesectiontag collingwoodcuptag">Collingwood Cup 2020</span></a> <div style="clear: both; height: 32px;"></div>'; 
										
										




										else :
											
											endif;
								?>

		              
		              
		              
	                
	                <?php
										if ( is_object_in_term( $post->ID, 'section', 'news' ) && is_object_in_term( $post->ID, 'articletype', 'newsarticle' ) ) :
										echo '<a href="'.home_url().'/news" class="articlesectiontag newstag">News</a>';
										
										elseif ( is_object_in_term( $post->ID, 'section', 'news' ) && is_object_in_term( $post->ID, 'articletype', 'newsfeature' ) ) :
										echo '<a href="'.home_url().'/news" class="articlesectiontag newstag">News Focus</a>';
										
										elseif ( is_object_in_term( $post->ID, 'section', 'news' ) ) :
										echo '<a href="'.home_url().'/news" class="articlesectiontag newstag">News</a>';
	
	
										elseif ( is_object_in_term( $post->ID, 'section', 'infocus' ) ) :
										echo '<a href="'.home_url().'/infocus" class="articlesectiontag infocustag">In Focus</a>';
	
										elseif ( is_object_in_term( $post->ID, 'section', 'sport' ) ) :
										echo '<a href="'.home_url().'/sport" class="articlesectiontag sporttag">Sport</a>';
	
										elseif ( is_object_in_term( $post->ID, 'section', 'magazine' ) ) :
										echo '<a href="'.home_url().'/magazine" class="articlesectiontag magazinetag">Magazine</a>';
	
										elseif ( is_object_in_term( $post->ID, 'section', 'radius' ) ) :
										echo '<a href="'.home_url().'/radius" class="articlesectiontag radiustag">Radius</a>';
										
										elseif ( is_object_in_term( $post->ID, 'section', 'opinion' ) ) :
										echo '<a href="'.home_url().'/opinion" class="articlesectiontag opinionposttag" style="box-shadow: 0px 0px 3px rgba(0, 0, 0, 0.32);">Comment & Analysis</a>';





										else :
											
											endif;
								?>
								
								
								<?php if ( is_object_in_term( $post->ID, 'section', 'opinion' ) && is_object_in_term( $post->ID, 'articletype', 'profile' ) ) :
										echo '<div class="profiletag">Profile</div>'; 
										
										
										elseif ( is_object_in_term( $post->ID, 'section', 'opinion' ) && is_object_in_term( $post->ID, 'articletype', 'editorials' ) ) :
										echo '<div class="profiletag" style="background: transparent; color: white; text-shadow: 0px 0px 3px rgba(0, 0, 0, 0.42);">Editorial</div>'; 
										
										elseif ( is_object_in_term( $post->ID, 'section', 'opinion' ) && is_object_in_term( $post->ID, 'articletype', 'eagarfhocail' ) ) :
										echo '<div class="profiletag">Eagarfhocal</div>'; 
										
									elseif ( is_object_in_term( $post->ID, 'category', 'campaignnotebook' ) ) :
										echo '<div class="profiletag">Notebook</div>';
										
										 
										
										
										
										else :
											
											endif;?>
											
											
											
											
											
											
											
											
								
								 <div class="dateright" style="text-shadow: 0px 0px 3px rgba(0, 0, 0, 0.42);"><?php the_date('M j, Y'); ?></div>
								 
								 
								 
								 
								 
								 <div style="clear: both;"></div> 
	             
	             
								 
	              </div>


                  <h2 class="articleheadline_provosteditorial" itemprop="headline"><?php the_title(); ?></h2>
                  
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
                  
                  
                  
                   <span class="onebigauthorname">By
						
						<span class="authoruppercase">
						
						<a href="http://universitytimes.ie/editorialboard">The Editorial Board</a>

					

												
						</span></span>

                  
                  
						               
													 
													 
													 
													 <?php 
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
											
														 
                 

						<div class="sharebuttonsblock">
				
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
