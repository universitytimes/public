<?php get_header(); ?>

			<div id="content">

				<div id="articlecontent">

					

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						
						
						
		
<?php if ( is_object_in_term( $post->ID, 'section', 'opinion' ) && is_object_in_term( $post->ID, 'articletype', 'editorials' ) ) : ?>
					
                 <?php include(locate_template('post-editorial.php'));   // Editorial Template (post-editorial.php) ?> 
                
                



<?php elseif ( is_object_in_term( $post->ID, 'section', 'opinion' ) && is_object_in_term( $post->ID, 'articletype', 'eagarfhocail' ) ) : ?>
						
				<?php include(locate_template('post-eagarfhocail.php'));   // Irish Editorial Tempate (post-eagarfhocail.php) ?> 
                
                

             
<?php elseif ( is_object_in_term( $post->ID, 'section', 'magazine' ) && is_object_in_term( $post->ID, 'articletype', 'magazinefeature' ) ) : ?>
				
				<?php get_template_part( 'magazinetemplate' );  // Magazine Template (magazinetemplate.php) ?>
						  


		
				
<?php elseif ( is_object_in_term( $post->ID, 'section', 'opinion' ) && is_object_in_term( $post->ID, 'articletype', 'editorialnotebook' ) ) : ?>
				
				<?php get_template_part( 'editorialnotebook' );  // Editorial Notebook (editorialnotebook.php) ?>
						  
						  
						  
						  
						  
<?php elseif ( is_object_in_term( $post->ID, 'section', 'opinion' ) && is_object_in_term( $post->ID, 'articletype', 'loveinterestcolumn' ) ) : ?>
								
				<?php get_template_part( 'loveinterestcolumntemplate' );  // Love Interest Column (loveinterestcolumntemplate.php) ?>



<?php else : ?>
        
              
                      <header class="article-header">
	              
	              <div class="infogrouping">
		              
		              
		         	  <?php include(locate_template('post-infogrouping.php'));   // Top of post info, include tags, election headings, and date (post-infogrouping.php) ?>   
		           								 
	              </div>

				  <?php if ( $image_url = get_post_meta( get_the_ID(), 'columnheadshot_url', true ) ) : ?>
    			  		<img src="<?php echo esc_url( $image_url ); ?>" alt="<?php the_title_attribute(); ?>" style="width: 150px; height: auto;">
				  <?php endif; ?>
						  
                  <h2 class="articleheadline" itemprop="headline">By: <?php the_title(); ?></h2>
                  
                  <h3 class="articlesub"><?php 
	                  
	                  if(function_exists("the_subtitle")) {	 $new_caption = get_the_subtitle();  }

	                  
	                  $old_caption = get_post_meta($post->ID, '_visual-subtitle', true);
	                  
	                  
	                  if ($new_caption != "") {
		                  
		                  echo $new_caption;
		                  
	                  }
	                  
			
					  elseif ($old_caption !== "" && $old_caption !== false) {	echo get_post_meta($post->ID, '_visual-subtitle', true); 	}	?></h3>
										
										
										
								<?php $otherlanguagelink = get_post_meta($post->ID, 'otherlanguagelink', true); 
						
						
						if($otherlanguagelink != "" && is_object_in_term( $post->ID, 'section', 'opinion' ) && is_object_in_term( $post->ID, 'articletype', 'irishopinioncontrib' )) {  ?>
							
							
							<a href="<?php echo $otherlanguagelink ?>" class="readinotherlanguage">Read Article in English (Léigh as Bearla an t-Alt) &#187;</a>	
						
						
						
						<?php 
							
							}
							
							
							elseif ($otherlanguagelink != "") {
								
								?>
								
								<a href="<?php echo $otherlanguagelink ?>" class="readinotherlanguage">Léigh as Gaeilge an t-Alt (Read Article in Irish) &#187;</a>	
								
								
								
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
                
                
       <div class="utcontentgrouping <?php if ($utpostimage_position == 'landscaperight' && $utpostimage_url != '') { echo "utcontentgroupinglandscape";}
	       									elseif ($utpostimage_position == 'portraitright' && $utpostimage_url != '') { echo "utcontentgroupingportrait";} ?>">
                
                
                 <div class="writershareblock">
                  
                  
                  
						                <?php include(locate_template('post-writerblocks.php'));   // Writer blocks ?> 

									
									
									
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
  collapsedHeight: 375,
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
                

                <section class="utpost-content cf single-by-page-content" itemprop="articleBody">
	                
	                
	             <div id="postscrollcontainer">
	                
	                
	                <?php
		                
		                
		       $writerpagetitle = get_the_title();
		       echo "<!-- Writer: " . $writerpagetitle . " -->";
		       $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
		       
					 
   $args = array(
'post_type' => 'post',

'posts_per_page' => 10,
'orderby' => 'post_date',
'order' => 'DESC',
'paged' => $paged,


'meta_query' => array(
		 'relation' => 'OR',
        array(
            'key' => '_writer_name',
            'value' => $writerpagetitle,
            'compare' => 'LIKE'
        ),
         array(
            'key' => '_writer_name_two',
            'value' => $writerpagetitle,
            'compare' => 'LIKE'
        ),
         array(
            'key' => '_writer_name_three',
            'value' => $writerpagetitle,
            'compare' => 'LIKE'
        ),
         array(
            'key' => '_writer_name_four',
            'value' => $writerpagetitle,
            'compare' => 'LIKE'
        ),
        array(
            'key' => '_writer_name_five',
            'value' => $writerpagetitle,
            'compare' => 'LIKE'
        )
));
					 

   $byline_posts = new WP_Query($args);

   if($byline_posts->have_posts()) : 
   
   
      while($byline_posts->have_posts()) :  $byline_posts->the_post();
?>



	<div class="postscroll">
	
        	
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
								
								<script src="http://universitytimes.ie/wp-content/themes/universitytimes/jquery-ias.min.js"></script>
								
								<script type="text/javascript">
											jQuery('.sectionpageimagecropper').imagefill();
        						</script>
							
								<div>
								
										<h5 class="editorialminiheading">
		 
		     <?php
										if ( is_object_in_term( $post->ID, 'articletype', 'editorials' ) ) :
										echo 'Editorial';
										
										
										elseif ( is_object_in_term( $post->ID, 'section', 'news' ) ) :
										echo 'News';
										
										elseif ( is_object_in_term( $post->ID, 'section', 'sport' ) ) :
										echo 'Sport';
										
										elseif ( is_object_in_term( $post->ID, 'section', 'infocus' ) ) :
										echo 'Feature';


										
	
	
										elseif ( is_object_in_term( $post->ID, 'articletype', 'analysis-2' ) ) :
										echo 'Analysis';
	
										elseif ( is_object_in_term( $post->ID, 'articletype', 'columns' ) ) :
										echo 'Column';
	
										elseif ( is_object_in_term( $post->ID, 'articletype', 'opinioncontrib' ) ) :
										echo 'Opinion';
	
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
								
									
							 
							 
							 
									
								</div>
								
							</a>
							
							
	</div>			
																 		
  

<?php
      endwhile;  ?>
      
	             </div>
      
      <script type="text/javascript">
  var ias = jQuery.ias({
    container:  '#postscrollcontainer',
    item:       '.postscroll',
    pagination: '#pagination',
    next:       '#pagination a.next'
  });

  ias.extension(new IASSpinnerExtension());
  ias.extension(new IASTriggerExtension({offset: 2}));
  ias.extension(new IASNoneLeftExtension({text: "You reached the end"}));
  ias.extension(new IASPagingExtension());
  ias.extension(new IASHistoryExtension({prev: '#pagination a.prev'}));
</script>
      
      
      <div id="pagination">
      
      <?php
      
      
      
      
   
        echo paginate_links( array(
            'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
            'total'        => $byline_posts->max_num_pages,
            'current'      => max( 1, get_query_var( 'paged' ) ),
            'format'       => '?paged=%#%',
            'show_all'     => false,
            'type'         => 'plain',
            'end_size'     => 2,
            'mid_size'     => 1,
            'prev_next'    => true,
            'prev_text'    => sprintf( '<i></i> %1$s', __( 'Newer Posts', 'text-domain' ) ),
            'next_text'    => sprintf( '%1$s <i></i>', __( 'Older Posts', 'text-domain' ) ),
            'add_args'     => false,
            'add_fragment' => '',
        ) );
        
        
        
        ?>
        
        
      </div>
        
        <?php
    


      
      
      if($byline_posts->post_count < 10){ ?>
	      
	      
	      
	      
 	<div class="load-more" class="btn secondary-button">no more projects</a></div>
 	
 	<?php
 	
 	
} else {    ?>



	
 	
 	
 	
 	
 	
 	
 	<?php
 	
 	 
 	
 	
 	
 	
}
      
      
      
   else: 
?>

      Oops, there are no posts.

<?php
   endif;
?>
	                
	                
	                
	                
	                
	                
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
