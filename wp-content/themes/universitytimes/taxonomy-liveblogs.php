<?php
/*
 * CUSTOM POST TYPE TAXONOMY TEMPLATE
 *
 * This is the custom post type taxonomy template. If you edit the custom taxonomy name,
 * you've got to change the name of this template to reflect that name change.
 *
 * For Example, if your custom taxonomy is called "register_taxonomy('shoes')",
 * then your template name should be taxonomy-shoes.php
 *
 * For more info: http://codex.wordpress.org/Post_Type_Templates#Displaying_Custom_Taxonomies
*/
?>

<?php get_header(); ?>

			<div id="content">

				<div id="liveblogwidth">
					
					 <div class="infogrouping">
		              
		              
		              
		             <a class="tagspush" href="http://universitytimes.ie/category/tcdsu/elections2016/"><span class="ballotboxicon"></span><span class="articlesectiontag tcdsuelectionstag">TCDSU Elections</span></a> <div style="clear: both; height: 0px;"></div>
		             
		             <div style="clear: both"></div>
		             
		             
					 </div>		              
		              

					
					
					

						

							<h3 class="liveblogtitle"><strong>Live Blog:</strong> TCDSU Elections Count 2016</h3>
							
							
							<div class="livebloginfo">Follow updates from The University Times live, right from the count centre.</div>
							
							
							
							
							
							<?php 
// the query


$argspull = array(
	'post_type' => array('post', 'ut_liveblog_posts'),
	'posts_per_page' => -1,
	'tax_query' => array(
				array(
					'taxonomy' => 'liveblogs',
					'terms' => array('elections2016'),
					'field' => 'slug',
				)
			),

);



$the_querypull = new WP_Query( $argspull ); ?>

<?php if ( $the_querypull->have_posts() ) : ?>

	<!-- pagination here -->

	<!-- the loop -->
	<?php while ( $the_querypull->have_posts() ) : $the_querypull->the_post(); ?>
		
		
		
							
								<header class="article-header">
									
									

									<h3 class="h4">Testing: <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
									<p class="byline vcard"><?php
										printf(__('Posted <time class="updated" datetime="%1$s" pubdate>%2$s</time> by <span class="author">%3$s</span> <span class="amp">&</span> filed under %4$s.', 'bonestheme'), get_the_time('Y-m-j'), get_the_time(__('F jS, Y', 'bonestheme')), bones_get_the_author_posts_link(), get_the_term_list( get_the_ID(), 'custom_cat', "", ", ", "" ));
									?></p>

								</header>

								<section class="entry-content">
									<?php the_excerpt( '<span class="read-more">' . __( 'Read More &raquo;', 'bonestheme' ) . '</span>' ); ?>

								</section>

							
							
								
								
								
								
							

								
							
		
		
		
		
	<?php endwhile; ?>
	<!-- end of the loop -->

	<!-- pagination here -->

<?php else : ?>
	
<?php endif; ?>
							
							
							
							
							

														
							<div style="clear: both"></div>

						</div>
<div style="clear: both"></div>
						

				


<div style="clear: both"></div>

			</div>

<?php get_footer(); ?>
