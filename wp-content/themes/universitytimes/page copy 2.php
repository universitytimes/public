<?php
/*
 Template Name: Podcast Page
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

						<div class="pagegrouping">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							

								<header class="article-header">

									<h2 class="articlesectiontag newstag" style="background-color: #8f0f61;"><?php the_title(); ?></h2>

								
								</header> <?php // end article header ?>

								<section class="pagebody" itemprop="articleBody">
									
									The University Times podcast, every two weeks, brings you in-depth stories of Trinity's history, its 	current goings on, and reporting from our podcast team on contemporary social issues. We also discuss some of The University Times's most discussed and most read stories.
									
									<p class="powerpress_links powerpress_subsribe_links"><strong>Subscribe:&nbsp;</strong> <a style="color: #8f0f61;" href="itpc://www.universitytimes.ie/feed/podcast/" class="powerpress_link_subscribe powerpress_link_subscribe_itunes" title="Subscribe on iTunes" rel="nofollow">iTunes</a>
| <a style="color: #8f0f61;" href="http://subscribeonandroid.com/www.universitytimes.ie/feed/podcast/" class="powerpress_link_subscribe powerpress_link_subscribe_android" title="Subscribe on Android" rel="nofollow">Android</a>
| <a style="color: #8f0f61;" href="http://www.universitytimes.ie/feed/podcast/" class="powerpress_link_subscribe powerpress_link_subscribe_rss" title="Subscribe via RSS" rel="nofollow">RSS</a>
</p>
									
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
									?>
								</section> <?php // end article section ?>

							

							</article>

							<?php endwhile; else : ?>
									

							<?php endif; ?>

					

						</div>

				</div>

			</div>

<?php get_footer(); ?>
