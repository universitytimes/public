<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package craftyblog
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-lg-8">
						<?php
						while ( have_posts() ) :
							the_post();

							get_template_part( 'template-parts/content/content', get_post_type() );

							?>
						<div class="d-flex single-post-navigation justify-content-between">
							<?php 
							if (!empty(get_previous_post())) :
							?>
							<div class="previous-post">
								<div class="postarrow">
									<?php
									$prevtext = __('Previous Post', 'craftyblog');
									previous_post_link('%link', sprintf('<div class="previous-post"><i class="fa fa-long-arrow-left"></i> %s</div>', $prevtext));?>
								</div>
								<?php previous_post_link('%link');?>
							</div>
							<?php 
							endif;
							if (!empty(get_next_post())) :
							 ?>
							<div class="next-post">
								<div class="postarrow">
									<?php
									$nexttext = __('Next Post', 'craftyblog');
									next_post_link('%link', sprintf('<div class="previous-post">%s <i class="fa fa-long-arrow-right"></i></div>', $nexttext));
									?>
								</div>
								<?php next_post_link('%link');?>
							</div>
							<?php endif; ?>
						</div>
							<?php

							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

						endwhile; // End of the loop.
						?>
					</div>
					<div class="col-md-4 pl-lg-5">
						<?php get_sidebar(); ?>
					</div>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
