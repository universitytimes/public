<?php
/*
Template Name Posts: Boo
*/
?>
<?php get_header(); ?>
<div id="content" class="single <?php $cat = get_the_category(get_query_var('cat')); $cat_name = $cat[0]->name; echo $cat_name ?>">
    	<div class="row">
       
            </div>   
            

		    <main id="content-primary" role="main">
			    <?php while(have_posts()) : the_post(); ?>
			    <article itemscope itemtype="http://schema.org/BlogPosting" class="post leftaside">
				
				   <div class="fullwidth2">
				   
				   
			    <header class="post-header">
					    <?php# the_post_thumbnail( 'default-thumbnail' ); ?>
                  
					    <h1 class="post-title"><?php the_title(); ?></h1>
				    </header>

				    <?php if($post->post_excerpt) : ?>
					    <div id='excerpt' style="margin-bottom: 10px;"><?php the_excerpt(); ?></div>
				    <?php endif; ?>
				    
				    <div class="slideshow2" class='row'>
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
				    
				    <div class="slideshowright" >
			    
				    <div class="insideright"><h4><span style="display: block; color: #8f2065;">Related Coverage</span></h3><a class="linkinside" href="http://universitytimes.ie/?p=27017"><span style="display: block; line-height: 140%;">Front Gate to be Reinstated This Week</span></a></div>
				    
				    </div>
				    
				    
				    <div style="clear:both"></div>
				    
				    <?php if (is_active_sidebar("widget-postfooter")) : ?>
				    <footer id="post-footer" class='row'>				
					    <?php if ( !dynamic_sidebar('Post Footer') ) : ?>
					    <?php endif; ?>
				    </footer>
				    <?php endif; ?>	
			    </article>
			    
			    
			    
			    <?php endwhile; ?>
			    
			    
			    
        	   <div style="background: none; width: 75%; margin: 25px auto 0px auto;"> <?php comments_template(); ?> </div>
        	    
        	   </div>
                
		</main>
         
		<?php# get_template_part('partials/sidebars/sidebar', 'single'); ?>
	</div>
</div>
<?php get_footer(); ?>
