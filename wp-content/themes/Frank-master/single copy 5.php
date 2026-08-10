<?php
/*
Template Name Posts: Editorial
*/
?>
<?php get_header(); ?>
<div id="content" class="single <?php $cat = get_the_category(get_query_var('cat')); $cat_name = $cat[0]->name; echo $cat_name ?>">
    	<div class="row">
           
            

		    <main id="content-primary" role="main">
			    <?php while(have_posts()) : the_post(); ?>
			    <article itemscope itemtype="http://schema.org/BlogPosting" class="post leftaside">
				
				
				
				
			
				
				
				
				 <h1  class="headerprofile"><?php the_title(); ?></h1>
				 
				 <h4 style="font-family: 'Open Sans', sans-serif; font-size: 19.5px; color: #777468; margin: 10px 0px 12px 0px; padding: 0px 0px 0px 0px;">
				
					<?php    $old_caption = get_post_meta($post->ID, '_visual-subtitle', true);
								
								
								if ($old_caption !== "" && $old_caption !== false) {
								
								echo get_post_meta($post->ID, '_visual-subtitle', true); 
								
								
								}
								
								else {
									
									
									if(function_exists("the_subtitle")) {
										
										echo  the_subtitle();
										
										
									}
									
									
								
									
									
								}
								
								
								?>
								
								
				</h4>
				 
				 
				 
				  <?php if($post->post_excerpt) : ?>
					    <div id='excerpt' style=""><?php the_excerpt(); ?></div>
				    <?php endif; ?>
				
				   
	<a href="http://www.universitytimes.ie/?page_id=28991" style="font-family: 'Museo_Slab_500_2'; font-style: normal; font-size: 12px; line-height: 120%; text-align: center; background: #8F1163; color: white; padding: 4px 4px 4px 4px; margin: 5px 0px 20px 0px; display: inline-block;">From The University Times Editorial Board</a>
				   
				    <div id='content-main' class='row'>
					    <section class='post-content clearfix'>
						    <?php the_content(); ?>
						    <?php wp_link_pages('before=<div class="pagination small"><span class="title">Pages:</span>&after=</div>'); ?>
					    </section>
					    <div class='post-info'>
						
						    <?php if(frank_tweet_post_button()) : ?>
						    <a id="post-tweet" class="button alt small" href="https://twitter.com/share?text=<?php echo rawurlencode(strip_tags(get_the_title())); ?><?php if(frank_tweet_post_attribution()) : ?>&amp;via=<?php echo frank_tweet_post_attribution(); ?>&amp;related=<?php echo frank_tweet_post_attribution(); ?><?php endif; ?>&amp;url=<?php the_permalink(); ?>&amp;counturl=<?php the_permalink(); ?>" target="_blank">
						    <?php _e('Tweet this Post', 'frank_theme'); ?>
						    </a>
						    <?php endif; ?>
					<!--	<div id="prev-post" class="clearfix">
							    <?php previous_post_link('%link', '<nav><span class="arrow">%title</span></nav><p>%title</p>'); ?> 
						    </div> -->
						    <?php if ( !dynamic_sidebar('Post Left Aside') ) : ?>
                            <?php endif; ?> 
					    </div>
				    </div>
				    <?php if (is_active_sidebar("widget-postfooter")) : ?>
				    <footer id="post-footer" class='row'>				
					    <?php if ( !dynamic_sidebar('Post Footer') ) : ?>
					    <?php endif; ?>
				    </footer>
				    <?php endif; ?>	
			    </article>
			    <?php endwhile; ?>
        	    <?php comments_template(); ?> 
                
		</main>
         
		<?php# get_template_part('partials/sidebars/sidebar', 'single'); ?>
	</div>
</div>
<?php get_footer(); ?>
