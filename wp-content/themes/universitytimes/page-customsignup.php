<?php
/*
 Template Name: Actual Get Involved Template
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

									<h2 class="pagetitle"><?php the_title(); ?></h2>

								
								</header> <?php // end article header ?>

								<section class="pagebody" itemprop="articleBody">
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
									
									
									
									
										
										
										
										
										
										<script type="text/javascript">var submitted=false;</script>
<iframe name="hidden_iframe" id="hidden_iframe"
style="display:none;" onload="if(submitted)
{window.location='http://universitytimes.ie/getinvolved/thankyou';}"></iframe>
<form action="https://docs.google.com/forms/d/1mZGpvz0DqbhCDHuRmAR-rLKWjyKHbtJBJSfh5Gzgxfo/formResponse" method="post"
target="hidden_iframe" onsubmit="submitted=true;">
										
										
										
										<ol role="list" class="ss-question-list" style="padding-left: 0">
<div class="ss-form-question errorbox-good" role="listitem">
<div dir="auto" class="ss-item  ss-text"><div class="ss-form-entry">
<label class="ss-q-item-label" for="entry_416915345"><div class="ss-q-title" style="margin-bottom: 8px;"><strong>Your name:</strong>
</div>
<div class="ss-q-help ss-secondary-text" dir="auto"></div></label>
<input type="text" name="entry.416915345" value="" class="ss-q-short" id="entry_416915345" dir="auto" aria-label="Your Name  " title="">
<div class="error-message" id="1988251887_errorMessage"></div>

</div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
<div dir="auto" class="ss-item  ss-text"><div class="ss-form-entry">
<label class="ss-q-item-label" for="entry_1495835119"><div class="ss-q-title" style="margin-bottom: 8px;"><strong>Email address:</strong>
</div>
<div class="ss-q-help ss-secondary-text" dir="auto"></div></label>
<input type="text" name="entry.1495835119" value="" class="ss-q-short" id="entry_1495835119" dir="auto" aria-label="Email address:  " title="">
<div class="error-message" id="1458775476_errorMessage"></div>

</div></div></div> <div class="ss-form-question errorbox-good" role="listitem">
<div dir="auto" class="ss-item  ss-checkbox"><div class="ss-form-entry">
<label class="ss-q-item-label" for="entry_967566297"><div class="ss-q-title"><strong>Which areas of The University Times are you interested in getting involved in?</strong>
</div>
<div class="ss-q-help ss-secondary-text" dir="auto"></div></label>

<ul class="ss-choices" role="group" aria-label="Which areas of The University Times are you interested in getting involved in?  "><li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="checkbox" name="entry.830460880" value="Layout &amp; Design (layout and design of broadsheet, magazine and Radius &ndash; experience with Adobe Creative Suite beneficial)" id="group_830460880_1" role="checkbox" class="ss-q-checkbox"></span>
<span class="ss-choice-label">Layout &amp; Design (layout and design of broadsheet, magazine and Radius – experience with Adobe Creative Suite beneficial)</span>
</label></li> <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="checkbox" name="entry.830460880" value="Illustrations (hand-drawn and digital illustrations to accompany pieces in all sections of the paper)" id="group_830460880_2" role="checkbox" class="ss-q-checkbox"></span>
<span class="ss-choice-label">Illustrations (hand-drawn and digital illustrations to accompany pieces in all sections of the paper)</span>
</label></li> <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="checkbox" name="entry.830460880" value="Coding/online work (Knowledge of HTML, CSS. Wordpress and PHP a plus)" id="group_830460880_3" role="checkbox" class="ss-q-checkbox"></span>
<span class="ss-choice-label">Coding/online work (Knowledge of HTML, CSS. Wordpress and PHP a plus)</span>
</label></li> <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="checkbox" name="entry.830460880" value="News writing (focus on Trinity, College politics, bureaucracy, students&#39; union politics, student and higher education issues)" id="group_830460880_4" role="checkbox" class="ss-q-checkbox"></span>
<span class="ss-choice-label">News writing (focus on Trinity, College politics, bureaucracy, students&#39; union politics, student and higher education issues)</span>
</label></li> <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="checkbox" name="entry.830460880" value="Broadsheet features writing&nbsp;(focus on Trinity, College politics, bureaucracy, students&#39; union politics, student and higher education issues)" id="group_830460880_5" role="checkbox" class="ss-q-checkbox"></span>
<span class="ss-choice-label">Broadsheet features writing (focus on Trinity, College politics, bureaucracy, students&#39; union politics, student and higher education issues)</span>
</label></li> <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="checkbox" name="entry.830460880" value="Broadsheet opinion writing&nbsp;(focus on Trinity, College politics, bureaucracy, students&#39; union politics, student and higher education issues)" id="group_830460880_6" role="checkbox" class="ss-q-checkbox"></span>
<span class="ss-choice-label">Broadsheet opinion writing (focus on Trinity, College politics, bureaucracy, students&#39; union politics, student and higher education issues)</span>
</label></li> <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="checkbox" name="entry.830460880" value="Sports writing (focus on College sports primarily, covering College sports events)" id="group_830460880_7" role="checkbox" class="ss-q-checkbox"></span>
<span class="ss-choice-label">Sports writing (focus on College sports primarily, covering College sports events)</span>
</label></li> <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="checkbox" name="entry.830460880" value="Magazine feature writing (focus on national political, social and cultural issues from an investigative and in-depth perspective, as well as some international culture coverage)" id="group_830460880_8" role="checkbox" class="ss-q-checkbox"></span>
<span class="ss-choice-label">Magazine feature writing (focus on national political, social and cultural issues from an investigative and in-depth perspective, as well as some international culture coverage)</span>
</label></li> <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="checkbox" name="entry.830460880" value="Photography (photos to accompany pieces in all sections of the paper, and photo projects)" id="group_830460880_9" role="checkbox" class="ss-q-checkbox"></span>
<span class="ss-choice-label">Photography (photos to accompany pieces in all sections of the paper, and photo projects)</span>
</label></li> <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="checkbox" name="entry.830460880" value="Fashion (coverage of Dublin and Trinity fashion scene for Radius, and international trends for magazine)" id="group_830460880_10" role="checkbox" class="ss-q-checkbox"></span>
<span class="ss-choice-label">Fashion (coverage of Dublin and Trinity fashion scene for Radius, and international trends for magazine)</span>
</label></li> <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="checkbox" name="entry.830460880" value="Film &amp; TV (coverage of Dublin and Trinity film scene for Radius and international/national film and TV for magazine)" id="group_830460880_11" role="checkbox" class="ss-q-checkbox"></span>
<span class="ss-choice-label">Film &amp; TV (coverage of Dublin and Trinity film scene for Radius and international/national film and TV for magazine)</span>
</label></li> <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="checkbox" name="entry.830460880" value="Food &amp; Drink (coverage of Dublin food and drink scene and recipes and food tips in magazine)" id="group_830460880_12" role="checkbox" class="ss-q-checkbox"></span>
<span class="ss-choice-label">Food &amp; Drink (coverage of Dublin food and drink scene and recipes and food tips in magazine)</span>
</label></li> <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="checkbox" name="entry.830460880" value="Theatre (coverage of Dublin and Trinity&#39;s theatre scene)" id="group_830460880_13" role="checkbox" class="ss-q-checkbox"></span>
<span class="ss-choice-label">Theatre (coverage of Dublin and Trinity&#39;s theatre scene)</span>
</label></li> <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="checkbox" name="entry.830460880" value="Music (coverage of Dublin and Trinity&#39;s music scene for Radius and international and national music trends in magazine)" id="group_830460880_14" role="checkbox" class="ss-q-checkbox"></span>
<span class="ss-choice-label">Music (coverage of Dublin and Trinity&#39;s music scene for Radius and international and national music trends in magazine)</span>
</label></li> <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="checkbox" name="entry.830460880" value="Literature (coverage of Dublin and Trinity&#39;s literary scene, and international and national literature)" id="group_830460880_15" role="checkbox" class="ss-q-checkbox"></span>
<span class="ss-choice-label">Literature (coverage of Dublin and Trinity&#39;s literary scene, and international and national literature)</span>
</label></li> <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="checkbox" name="entry.830460880" value="Art (coverage of Dublin and Trinity&#39;s arts scene for Radius)" id="group_830460880_16" role="checkbox" class="ss-q-checkbox"></span>
<span class="ss-choice-label">Art (coverage of Dublin and Trinity&#39;s arts scene for Radius)</span>
</label></li> <li class="ss-choice-item"><label><span class="ss-choice-item-control goog-inline-block"><input type="checkbox" name="entry.830460880" value="Irish language writing (news, opinion and feature writing in Irish)" id="group_830460880_17" role="checkbox" class="ss-q-checkbox"></span>
<span class="ss-choice-label">Irish language writing (news, opinion and feature writing in Irish)</span>
</label></li></ul>
<div class="error-message" id="967566297_errorMessage"></div>
</div></div></div>
<input type="hidden" name="draftResponse" value="[,,&quot;-4178384964386484880&quot;]
">
<input type="hidden" name="pageHistory" value="0">

<input type="hidden" name="fvv" value="0">


<input type="hidden" name="fbzx" value="-4178384964386484880">

<div class="ss-item ss-navigate"><table id="navigation-table"><tbody><tr><td class="ss-form-entry goog-inline-block" id="navigation-buttons" dir="ltr">
<input type="submit" name="submit" value="Submit" id="ss-submit" class="jfk-button jfk-button-action ">
</td>
</tr></tbody></table></div></ol></form>
									
									
									
									
								</section> <?php // end article section ?>

							

							</article>

							<?php endwhile; else : ?>
									

							<?php endif; ?>

					

						</div>

				</div>

			</div>

<?php get_footer(); ?>
