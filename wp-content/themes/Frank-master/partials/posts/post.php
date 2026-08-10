<article itemscope itemtype="http://schema.org/BlogPosting" <?php post_class('leftaside'); ?>>
	<header class="post-header">
		<h1 class="post-title">
            <?php the_category(''); ?>
            <a href="<?php the_permalink() ?>">
                <div class="crop">
    		    	<?php# the_post_thumbnail( 'medium-thumbnail' ); ?>  <!-- Uncomment to allow wordpress-defined image sizes -->
    		    	<?php the_post_thumbnail( ); ?>
                </div>
                <div class="postlisttitle">
                    <?php the_title(); ?>
                    
                    
                    <h4 style="font-family: 'Open Sans', sans-serif; font-size: 0.56em; color: #777468; margin: 10px 0px 12px 0px; padding: 0px 0px 0px 0px;">
				
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
                    
                    
                    
                </div>
            </a>
                    <footer class="post-info">
			            <?php get_template_part('partials/post-metadata-home'); ?>
		            </footer>
		</h1>
	</header>
	<div class="row">
		<section class="post-content">
            <?php #the_content(__('Read On&hellip;', 'frank_theme')); ?>
		</section>
			</div>
</article>
