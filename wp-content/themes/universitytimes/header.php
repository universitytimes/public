<!doctype html>
<!--[if lt IE 7]>
<html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7">
   <![endif]-->
   <!--[if (IE 7)&!(IEMobile)]>
   <html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8">
      <![endif]-->
      <!--[if (IE 8)&!(IEMobile)]>
      <html <?php language_attributes(); ?> class="no-js lt-ie9">
         <![endif]-->
         <!--[if gt IE 8]><!-->
         <html <?php language_attributes(); ?> class="no-js">
            <!--<![endif]-->
            <head>
			<style>
				
				.mobile-menu-container {

    z-index: 1000;
}
				
				.mobile-menu {
    display: none;
    position: absolute; /* Or use another layout method */
    top: 0;
    left: 0;
    background-color: #333; /* Background color of the menu */
    width: 100%;
   
    z-index: 1000;
}

/* When the menu is active, make it visible */
.mobile-menu.active {
    display: block; /* Or use `transform`/`opacity` if needed for animation */
}

#mobile-menu {
    display: none;
    position: absolute;
    top: 50px;
    left: 0;
    width: 100%;
    background: #fff;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

#mobile-menu.active {
    display: block;
}

#mobile-menu ul {
    list-style: none;
    margin: 0;
    padding: 0;
}

#mobile-menu li {
    padding: 10px;
    border-bottom: 1px solid #ddd;
}

#mobile-menu a {
    text-decoration: none;
    color: #333;
    display: block;
}

#mobile-menu-toggle {
    background: none;
    border: none;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 13px;
	margin-left: 10%;
}

.hamburger {
    width: 25px;
    height: 2px;
    background: #333;
    position: relative;
    transition: all 0.3s ease;
}

.hamburger::before,
.hamburger::after {
    content: '';
    width: 25px;
    height: 2px;
    background: #333;
    position: absolute;
    left: 0;
    transition: transform 0.3s ease;
}

.hamburger::before {
    top: -8px;
}

.hamburger::after {
    top: 8px;
}				</style>
               <meta charset="utf-8">
               <script>
                  (function (d) {
                    var config = {
                      kitId: 'sbr1hog',
                      scriptTimeout: 3000,
                      async: false
                    },
                      h = d.documentElement, t = setTimeout(function () { h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive"; }, config.scriptTimeout), tk = d.createElement("script"), f = false, s = d.getElementsByTagName("script")[0], a; h.className += " wf-loading"; tk.src = 'https://use.typekit.net/' + config.kitId + '.js'; tk.async = false; tk.onload = tk.onreadystatechange = function () { a = this.readyState; if (f || a && a != "complete" && a != "loaded") return; f = true; clearTimeout(t); try { Typekit.load(config) } catch (e) { } }; s.parentNode.insertBefore(tk, s)
                  })(document);
				   
				               
				</script>
               <?php // Google Chrome Frame for IE ?>
               <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
               <title>
                  <?php
                     if ( is_single() ) {  
                     
                     
                     the_title();
                     
                     echo " &ndash; The University Times";
                     
                     }
                     
                     
                     elseif ( is_tax() ) {  
                     
                     
                     single_term_title();
                     
                     echo " &ndash; The University Times";
                     
                     }
                     
                     
                     else {
                     
                     wp_title('');
                     
                     }
                     
                     ?>
               </title>
               <?php // mobile meta (hooray!) ?>
               <meta name="HandheldFriendly" content="True">
               <meta name="MobileOptimized" content="320">
               <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
               <!-- TESTING -->
               <?php $definedsocialtitle = htmlspecialchars( get_post_meta($post->ID, 'definedsocialtitle', true), ENT_QUOTES); ?>
               <meta property="og:title" content="<?php
                  if ( ! empty ( $definedsocialtitle ) ) {
                  
                  
                  echo $definedsocialtitle;
                  
                  }
                  
                  
                  elseif ( is_tax('section', 'freshers' )) {
                  
                  echo 'Your Essential College Guide';
                  
                  }
                  
                  
                  elseif ( is_object_in_term( $post->ID, 'section', 'opinion' ) && is_object_in_term( $post->ID, 'articletype', 'editorialnotebook' ) ) {
                  
                  
                  
                  
                  echo 'Editorial Notebook: '.get_the_title( $post->ID );
                  
                  }
                  
                  
                  else {
                  
                  the_title();
                  
                  
                  }
                  
                  
                  ?>" />
               <?php $utpostimage_url_fb = get_post_meta( $post->ID, "utpostimage_url", true );
                  if ( is_page( 62459 ) ) {
                  
                  
                  $utpostimage_url_fb = "https://universitytimes.ie/wp-content/uploads/2017/12/emailnewsletterfbimage.jpg";
                  
                  
                  }
                  
                  
                  
                  
                  
                  
                  elseif ($utpostimage_url_fb == "" || $utpostimage_url_fb == null ){
                  
                  
                  $utpostimage_url_fb = "https://universitytimes.ie/wp-content/uploads/2016/05/utstatement.jpg";
                  
                  }
                  
                  elseif ( is_tax('section', 'freshers' ) ){
                  
                  
                  $utpostimage_url_fb = "https://universitytimes.ie/wp-content/themes/universitytimes/youressentialcollegeguidepromo.jpg";
                  
                  }
                  
                  
                  ?>
               <meta name="twitter:card" content="summary_large_image">
               <meta name="twitter:site" content="@universitytimes">
               <meta name="twitter:title" content="<?php
                  if ( ! empty ( $definedsocialtitle ) ) {
                  
                  
                  echo $definedsocialtitle;
                  
                  }
                  
                  
                  elseif ( is_object_in_term( $post->ID, 'section', 'opinion' ) && is_object_in_term( $post->ID, 'articletype', 'editorialnotebook' ) ) {
                  
                  
                  
                  
                  echo 'Editorial Notebook: '.get_the_title( $post->ID );
                  
                  }
                  
                  
                  elseif ( is_tax('section', 'freshers' )) {
                  
                  echo 'Your Essential College Guide';
                  
                  }
                  
                  
                  
                  else {
                  
                  the_title();
                  
                  
                  }
                  
                  
                  ?>">
               <meta name="twitter:description" content="<?php    $old_caption = get_post_meta($post->ID, '_visual-subtitle', true);
                  if ( is_object_in_term( $post->ID, 'section', 'opinion' ) && is_object_in_term( $post->ID, 'articletype', 'editorialnotebook' ) ) {
                  
                  
                  
                  
                  echo 'Some brief views on the developments of the week.';
                  
                  }
                  
                  
                  
                  elseif ( is_tax('section', 'freshers' )) {
                  
                  echo 'Tick off all Trinity has to offer before you leave.';
                  
                  }
                  
                  
                  
                  
                  elseif(function_exists(" the_subtitle")) { $new_caption=the_subtitle(); echo htmlspecialchars($new_caption); } elseif
                      ($old_caption !=="" && $old_caption !==false) { echo htmlspecialchars($old_caption); } ?>">
               <meta name="twitter:image" content="<?php echo $utpostimage_url_fb; ?>">
               <meta property="og:image" content="<?php echo $utpostimage_url_fb; ?>" />
               <meta property="og:description" content="<?php    $old_caption = get_post_meta($post->ID, '_visual-subtitle', true);
                  if ( is_object_in_term( $post->ID, 'section', 'opinion' ) && is_object_in_term( $post->ID, 'articletype', 'editorialnotebook' ) ) {
                  
                  
                  
                  
                  echo 'Some brief views on the developments of the week.';
                  
                  }
                  
                  elseif ( is_tax('section', 'freshers' )) {
                  
                  echo 'Tick off all Trinity has to offer before you leave.';
                  
                  }
                  
                  
                  
                  elseif(function_exists(" the_subtitle")) { $new_caption=the_subtitle(); echo htmlspecialchars($new_caption); } elseif
                      ($old_caption !=="" && $old_caption !==false) { echo htmlspecialchars($old_caption); } ?>" />
               <?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
               <!--[if IE]>
               <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
               <![endif]-->
               <?php // or, set /favicon.ico for IE10 win ?>
               <link rel="apple-touch-icon" sizes="57x57"
                  href="<?php echo get_template_directory_uri(); ?>/library/favicons/apple-icon-57x57.png">
               <link rel="apple-touch-icon" sizes="60x60"
                  href="<?php echo get_template_directory_uri(); ?>/library/favicons/apple-icon-60x60.png">
               <link rel="apple-touch-icon" sizes="72x72"
                  href="<?php echo get_template_directory_uri(); ?>/library/favicons/apple-icon-72x72.png">
               <link rel="apple-touch-icon" sizes="76x76"
                  href="<?php echo get_template_directory_uri(); ?>/library/favicons/apple-icon-76x76.png">
               <link rel="apple-touch-icon" sizes="114x114"
                  href="<?php echo get_template_directory_uri(); ?>/library/favicons/apple-icon-114x114.png">
               <link rel="apple-touch-icon" sizes="120x120"
                  href="<?php echo get_template_directory_uri(); ?>/library/favicons/apple-icon-120x120.png">
               <link rel="apple-touch-icon" sizes="144x144"
                  href="<?php echo get_template_directory_uri(); ?>/library/favicons/apple-icon-144x144.png">
               <link rel="apple-touch-icon" sizes="152x152"
                  href="<?php echo get_template_directory_uri(); ?>/library/favicons/apple-icon-152x152.png">
               <link rel="apple-touch-icon" sizes="180x180"
                  href="<?php echo get_template_directory_uri(); ?>/library/favicons/apple-icon-180x180.png">
               <link rel="icon" type="image/png" sizes="192x192"
                  href="<?php echo get_template_directory_uri(); ?>/library/favicons/android-icon-192x192.png">
               <link rel="icon" type="image/png" sizes="32x32"
                  href="<?php echo get_template_directory_uri(); ?>/library/favicons/favicon-32x32.png">
               <link rel="icon" type="image/png" sizes="96x96"
                  href="<?php echo get_template_directory_uri(); ?>/library/favicons/favicon-96x96.png">
               <link rel="icon" type="image/png" sizes="16x16"
                  href="<?php echo get_template_directory_uri(); ?>/library/favicons/favicon-16x16.png">
               <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/library/favicons/manifest.json">
               <meta name="msapplication-TileColor" content="#ffffff">
               <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
               <meta name="theme-color" content="#ffffff">
               <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
               <?php // wordpress head functions ?>
               <?php wp_head(); ?>
               <?php // end of wordpress head ?>
               <?php // drop Google Analytics Here ?>
               <?php // end analytics ?>
               <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/themes/smoothness/jquery-ui.css" />
               <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/jquery-ui.min.js"></script>
               <script src="//cdnjs.cloudflare.com/ajax/libs/d3/3.4.11/d3.js"></script>
               <script src="//cdnjs.cloudflare.com/ajax/libs/ember.js/1.6.1/ember.min.js"></script>
               <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/2.1.0/jquery.imagesloaded.min.js"></script>
               <script src="<?php echo home_url(); ?>/wp-content/themes/universitytimes/javascript/jquery-imagefill.js"></script>
               <script src="<?php echo home_url(); ?>/wp-content/themes/universitytimes/javascript/jquery.waypoints.js"></script>
               <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.min.js"></script>
               <script src="<?php echo home_url(); ?>/wp-content/themes/universitytimes/javascript/shortcuts/sticky.min.js"></script>
               <script src="<?php echo home_url(); ?>/wp-content/themes/universitytimes/javascript/readmore.min.js"></script>
               <script src="<?php echo home_url(); ?>/wp-content/themes/universitytimes/library/js/customajax.js"></script>
               <script src="<?php echo home_url(); ?>/wp-content/themes/universitytimes/javascript/jquery.dotdotdot.min.js"></script>
               <script
                  id="mcjs">!function (c, h, i, m, p) { m = c.createElement(h), p = c.getElementsByTagName(h)[0], m.async = 1, m.src = i, p.parentNode.insertBefore(m, p) }(document, "script", "https://chimpstatic.com/mcjs-connected/js/users/aba5afd550bd47bc30b95dab8/34ec0d3a4c4287c0778201fd2.js");</script>
               <link href="https://vjs.zencdn.net/7.8.4/video-js.css" rel="stylesheet" />
               <!-- If you'd like to support IE8 (for Video.js versions prior to v7) -->
               <script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
               <link href="//fonts.googleapis.com/css?family=PT+Serif:400italic,400,700italic,700" rel="stylesheet" type="text/css">
               <link href='http://fonts.googleapis.com/css?family=Alfa+Slab+One' rel='stylesheet' type='text/css'>
               <link href='https://fonts.googleapis.com/css?family=Martel:900' rel='stylesheet' type='text/css'>
            </head>
            <body <?php body_class(); ?>>
               <div id="container">
               <div class="headercontained">
                  <header class="header" role="banner">
                     <?php // to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> ?>
                     <script>
                        jQuery(document).ready(function () {
                        
                        
                        
                          jQuery(".newsfeedlink").mouseover(function () {
                            jQuery("#logo").removeClass("whiteshadow");
                        
                        
                        
                        
                        
                        
                        
                          });
                        
                        
                          jQuery(".newsfeedlink").mouseout(function () {
                        
                        
                            setTimeout(function () { jQuery("#logo").addClass("whiteshadow"); }, 100);
                        
                        
                        
                        
                        
                        
                        
                          });
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        });
                        
                     </script>
                     <h1 id="logo" class="whiteshadow"><a href="<?php echo home_url(); ?>" rel="nofollow">The University Times</a>
                     </h1>
                     <?php // if you'd like to use the site description you can un-comment it below ?>
                     <?php // bloginfo('description'); ?>
                     <div class="heightstop">
                        <div class="navigationtopcontainer">
                           <nav class="toplevel">
                              <div class="greatboom">
                                 <script>
                                    jQuery(function ($) {
                                    
                                    
                                      $.fn.slideFadeToggle = function (speed, easing, callback) {
                                        return this.animate({ opacity: 'toggle', height: 'toggle' }, speed, easing, callback);
                                      };
                                    
                                    
                                    
                                      $(".goddess").click(function () {
                                        $('#boom').slideFadeToggle();
                                      });
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                      $(window).resize(function () {
                                        if ($(window).width() > 710) {
                                    
                                    
                                    
                                          $('#boom').fadeIn();
                                    
                                    
                                    
                                        }
                                    
                                    
                                      });
                                    
                                    
                                      $(window).resize(function () {
                                        if ($(window).width() < 711) {
                                    
                                    
                                    
                                          $('#boom').hide();
                                    
                                    
                                    
                                        }
                                    
                                    
                                      });
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                      $(window).resize(function () {
                                        if ($(window).width() > 972) {
                                    
                                    
                                    
                                          $('.hider').fadeIn();
                                    
                                    
                                    
                                        }
                                    
                                    
                                      });
                                    
                                      $(window).resize(function () {
                                        if ($(window).width() < 973) {
                                    
                                    
                                    
                                          $('.hider').hide();
                                    
                                    
                                    
                                        }
                                    
                                    
                                      });
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    });
                                 </script>
								  
								  <script>
								  	 
								  
								  document.addEventListener('DOMContentLoaded', function () {
    const mobileMenuBreakpoint = 710; // Width below which the mobile menu is added
    const body = document.body;

    // Function to initialize the mobile menu
    function createMobileMenu() {
        // Check if the mobile menu already exists
        if (document.getElementById('mobile-menu')) return;

        // Create the mobile menu container
        const mobileMenuContainer = document.createElement('div');
        mobileMenuContainer.classList.add('mobile-menu-container');

        // Create the hamburger button
        const menuToggle = document.createElement('button');
        menuToggle.id = 'mobile-menu-toggle';
        menuToggle.setAttribute('aria-label', 'Toggle Menu');
        menuToggle.innerHTML = '<span class="hamburger"></span>';

        // Create the mobile menu
        const mobileMenu = document.createElement('nav');
        mobileMenu.id = 'mobile-menu';
        mobileMenu.classList.add('mobile-menu');

        // Add your menu items (customize as needed)
        mobileMenu.innerHTML = `
            <ul>
               <li><a href="<?php echo site_url(); ?>/news">News</a></li>
        <li><a href="<?php echo site_url(); ?>/infocus">In Focus</a></li>
                <li><a href="https://universitytimes.ie/opinion">Opinion</a></li>
 				<li><a href="https://universitytimes.ie/radius">Radius</a></li>
                <li><a href="https://universitytimes.ie/sport">Sport</a></li>
				<li><a href="https://universitytimes.ie/category/as-gaeilge">As Gaeilge</a></li>
                <li><a href="https://universitytimes.ie/puzzles">Puzzles</a></li>
            </ul>
        `;

        // Append elements to the container
        mobileMenuContainer.appendChild(menuToggle);
        mobileMenuContainer.appendChild(mobileMenu);
   //     body.prepend(mobileMenuContainer);
 // Find the .shilly element and insert the mobileMenuContainer right after it
        const shillyElement = document.querySelector('.shilly');
        if (shillyElement) {
            shillyElement.insertAdjacentElement('afterend', mobileMenuContainer);
        }        // Toggle menu visibility on button click
        menuToggle.addEventListener('click', function () {
            mobileMenu.classList.toggle('active');
        });
    }

						


    // Function to remove the mobile menu if no longer needed
    function removeMobileMenu() {
        const mobileMenuContainer = document.querySelector('.mobile-menu-container');
        if (mobileMenuContainer) mobileMenuContainer.remove();
    }

    // Check window size and add/remove mobile menu
    function handleResize() {
        if (window.innerWidth < mobileMenuBreakpoint) {
            createMobileMenu();
        } else {
            removeMobileMenu();
        }
    }

    // Initialize on load and on resize
    handleResize();
    window.addEventListener('resize', handleResize);
});								  </script>								  
								  </script>
								  
								  
								  <label for="show-menu" class="show-menu goddess">All Sections</label>
                                 <input type="checkbox" id="show-menu" role="button" />
                                 <ul id="boom">
                                    <li>
                                       <a href="<?php echo site_url(); ?>/news" class="newsfeedlink">News <span style="font-size: 9px;"
                                          class="oi" data-glyph="caret-bottom" title="caret bottom" aria-hidden="true">
                                       </span>
                                       </a>
                                       <ul class="boomsub">
                                          <h4 class="miniheading">The Latest</h4>
                                          <?php
                                             $query = new WP_Query( array( 'tax_query' => array(
                                                     array(
                                                     'taxonomy' => 'section',
                                                     'field' => 'name',
                                                     'terms' => 'news')
                                                 ), 'homepage2-post-order'=>'disable', 'orderby' => 'date') );
                                              
                                             if ( $query->have_posts() ) : ?>
                                          <?php $count = 0; ?>
                                          <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                                          <?php $count++; ?>
                                          <?php if ($count == 1) : ?>
                                          <li><a class="boomsublink" href="<?php the_permalink() ?>"
                                             title="<?php the_title_attribute(); ?>">
                                             <?php the_title(); ?>
                                             </a>
                                          </li>
                                          <hr />
                                          <?php elseif ($count == 2) : ?>
                                          <li><a class="boomsublink" href="<?php the_permalink() ?>"
                                             title="<?php the_title_attribute(); ?>">
                                             <?php the_title(); ?>
                                             </a>
                                          </li>
                                          <hr />
                                          <?php elseif ($count == 3) : ?>
                                          <li><a class="boomsublink" href="<?php the_permalink() ?>"
                                             title="<?php the_title_attribute(); ?>">
                                             <?php the_title(); ?>
                                             </a>
                                          </li>
                                          <?php else : ?>
                                          <?php endif; ?>
                                          <?php endwhile; ?>
                                          <?php wp_reset_query(); ?>
                                          <?php endif; ?>
                                          <li class="seemore"><a class="moremore" href="<?php echo site_url(); ?>/news">SEE ALL NEWS</a>
                                          </li>
                                       </ul>
                                    </li>
									 
									 
									 
									 <!-- IN FOCUS / FEATURES -->
                                    <li>
                                       <a href="<?php echo site_url(); ?>/infocus" class="infocuslink">In Focus <span
                                          style="font-size: 9px;" class="oi" data-glyph="caret-bottom" title="caret bottom"
                                          aria-hidden="true"></span></a>
                                       <ul class="boomsubfeature clearfix">
                                          <li class="listone">
                                             <ul class="listoneul clearfix">
                                                <?php
                                                   $query = new WP_Query( array( 'tax_query' => array(
                                                           array(
                                                           'taxonomy' => 'section',
                                                           'field' => 'slug',
                                                           'terms' => 'infocus')
                                                       ), 'homepage2-post-order'=>'disable', 'orderby' => 'date', 'post_type' => array('post','feature'), 'posts_per_page' => 2) );
                                                    
                                                   if ( $query->have_posts() ) : ?>
                                                <?php $count = 0; ?>
                                                <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                                                <?php $count++; ?>
                                                <?php if ($count == 1) : ?>
                                                <li class="leftone">
                                                   <a class="" href="<?php the_permalink() ?>">
                                                      <h4 class="miniheading">
                                                         <?php
                                                            //Output the trainer email
                                                             
                                                            echo $content_meta_display;
                                                            
                                                            
                                                            
                                                            ?>
                                                      </h4>
													  <span>
                                                      <?php the_title(); ?>
                                                      </span>
                                                      <!-- Image goes here -->
  
                                                      <script type="text/javascript">
                                                         jQuery('.cropper1').imagefill();
                                                      </script>

                                                </li>
                                                <?php elseif ($count == 2) : ?>
                                                <li class="rightone"><a class="" href="<?php the_permalink() ?>">
                                                <h4 class="miniheading">
                                                <?php
                                                   //Output the trainer email
                                                    
                                                   
                                                   ?>
                                                </h4>
                                                <!-- Image goes here -->
                                                <script type="text/javascript">
                                                   jQuery('.cropper2').imagefill();
                                                </script>
                                                <span>
                                                <?php the_title(); ?>
                                                </span>
                                                </a></li>
                                             </ul>
                                             <!-- End of "List One" <ul> -->
                                          </li>
                                          <!-- End of "List One" <li> -->
                                          <?php else : ?>
                                          <?php endif; ?>
                                          <?php endwhile; ?>
                                          <?php wp_reset_query(); ?>
                                          <?php endif; ?>
                                          <li class="listtwo">
                                             <ul class="listtwoul clearfix">
												 <ul class="lefttwoul">
                                                      <h4 class="miniheading">More Stories</h4>
                                                      <?php
                                                         $query = new WP_Query( array( 'tax_query' => array(
                                                                 array(
                                                                 'taxonomy' => 'section',
                                                                 'field' => 'slug',
                                                                 'terms' => 'infocus')
                                                             ), 'homepage2-post-order'=>'disable', 'orderby' => 'date', 'post_type' => array('post','feature'), 'posts_per_page' => 8) );
                                                          
                                                         if ( $query->have_posts() ) : ?>
                                                      <?php $count = 0; ?>
                                                      <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                                                      <?php $count++; ?>
                                                      <?php if ($count == 3) : ?>
                                                      <li><a class="boomsublink" href="<?php the_permalink() ?>">
                                                         <?php the_title(); ?>
                                                         </a>
                                                      </li>
                                                      <hr />
                                                      <?php elseif ($count == 4) : ?>
                                                      <li><a class="boomsublink" href="<?php the_permalink() ?>"
                                                         title="<?php the_title_attribute(); ?>">
                                                         <?php the_title(); ?>
                                                         </a>
                                                      </li>
                                                      <hr />
                                                      <?php elseif ($count == 5) : ?>
                                                      <li><a class="boomsublink" href="<?php the_permalink() ?>"
                                                         title="<?php the_title_attribute(); ?>">
                                                         <?php the_title(); ?>
                                                         </a>
                                                      </li>
                                                      <?php else : ?>
                                                      <?php endif; ?>
                                                      <?php endwhile; ?>
                                                      <?php wp_reset_query(); ?>
                                                      <?php endif; ?>
                                                      <li class="seemore"><a class="moremore" href="<?php echo site_url(); ?>/infocus">SEE ALL
                                                         IN FOCUS</a>
                                                      </li>
                                                   </ul>
												<!-- <li class="lefttwo"></li> -->
                                                <!-- <li class="righttwo"> -->
                                                <!-- <ul class="righttwoul">  -->
                                                <!-- <h4 class="miniheading">More from In Focus</h4> -->
                                                <!-- li><a href="<?php echo site_url(); ?>/interviews">Interviews</a></li> -->
                                                <!-- </ul> -->
                                                <!-- </li> -->
                                             </ul>
                                          </li>
                                          <div style="clear: both;"></div>
                                       </ul>
                                    </li>
                                    <li>
                                       <a href="<?php echo site_url(); ?>/opinion" class="opinionlink">Opinion <span
                                          style="font-size: 9px;" class="oi" data-glyph="caret-bottom" title="caret bottom"
                                          aria-hidden="true"></span></a>
                                       <ul class="boomsubopinion clearfix">
                                          <li class="listone">
                                             <ul class="listoneul clearfix">
                                                <?php
                                                   $query = new WP_Query( array( 'tax_query' => array(
                                                           array(
                                                           'taxonomy' => 'section',
                                                           'field' => 'slug',
                                                           'terms' => 'opinion')
                                                       ), 'homepage2-post-order'=>'disable', 'orderby' => 'date', 'post_type' => array('post','opinion'), 'posts_per_page' => 2) );
                                                    
                                                   if ( $query->have_posts() ) : ?>
                                                <?php $count = 0; ?>
                                                <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                                                <?php $count++; ?>
                                                <?php if ($count == 1) : ?>
                                                <li class="leftone">
                                                   <a class="" href="<?php the_permalink() ?>">
                                                      <h4 class="miniheading">
                                                         <?php
                                                            //Output the trainer email
                                                             
                                                            echo $content_meta_display;
                                                            ?>
                                                      </h4>
                                                      <!-- Image goes here -->
                                                      <script type="text/javascript">
                                                         jQuery('.cropper3').imagefill();
                                                      </script>
                                                      <span>
                                                      <?php the_title(); ?>
                                                      </span>
                                                </li>
                                                <?php elseif ($count == 2) : ?>
                                                <li class="rightone"><a class="" href="<?php the_permalink() ?>">
                                                <h4 class="miniheading">
                                                <?php
                                                   $content_meta_display = '';
                                                    
                                                   //Output the trainer email
                                                    
                                                   echo $content_meta_display
                                                   ?>
                                                </h4>
                                                <!-- Image goes here -->
                                                <script type="text/javascript">
                                                   jQuery('.cropper4').imagefill();
                                                </script>
                                                <span>
                                                <?php the_title(); ?>
                                                </span>
                                                </a></li>
                                             </ul>
                                             <!-- End of "List One" <ul> -->
                                          </li>
                                          <!-- End of "List One" <li> -->
                                          <?php else : ?>
                                          <?php endif; ?>
                                          <?php endwhile; ?>
                                          <?php wp_reset_query(); ?>
                                          <?php endif; ?>
                                          <li class="listtwo">
                                             <ul class="listtwoul clearfix">
												 <ul class="lefttwoul">
                                                      <h4 class="miniheading">More Opinions</h4>
                                                      <?php
                                                         $query = new WP_Query( array( 'tax_query' => array(
                                                                 array(
                                                                 'taxonomy' => 'section',
                                                                 'field' => 'slug',
                                                                 'terms' => 'opinion')
                                                             ), 'homepage2-post-order'=>'disable', 'orderby' => 'date', 'post_type' => array('post','opinion'), 'posts_per_page' => 8) );
                                                          
                                                         if ( $query->have_posts() ) : ?>
                                                      <?php $count = 0; ?>
                                                      <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                                                      <?php $count++; ?>
                                                      <?php if ($count == 3) : ?>
                                                      <li><a class="boomsublink" href="<?php the_permalink() ?>">
                                                         <?php the_title(); ?>
                                                         </a>
                                                      </li>
                                                      <hr />
                                                      <?php elseif ($count == 4) : ?>
                                                      <li><a class="boomsublink" href="<?php the_permalink() ?>"
                                                         title="<?php the_title_attribute(); ?>">
                                                         <?php the_title(); ?>
                                                         </a>
                                                      </li>
                                                      <hr />
                                                      <?php elseif ($count == 5) : ?>
                                                      <li><a class="boomsublink" href="<?php the_permalink() ?>"
                                                         title="<?php the_title_attribute(); ?>">
                                                         <?php the_title(); ?>
                                                         </a>
                                                      </li>
                                                      <?php else : ?>
                                                      <?php endif; ?>
                                                      <?php endwhile; ?>
                                                      <?php wp_reset_query(); ?>
                                                      <?php endif; ?>
                                                      <li class="seemore"><a class="moremore" href="<?php echo site_url(); ?>/opinion">SEE ALL
                                                         IN OPINION</a>
                                                      </li>
                                                   </ul>
<!--                                                 <li class="lefttwo">
                                                   
                                                </li> -->
<!--                                                 <li class="righttwo">
                                                   <ul class="righttwoulopinion">
                                                      <h4 class="miniheading">More from Opinion</h4>
                                                      <li><a href="<?php echo site_url(); ?>/columns">Columns</a></li>
                                                      <li><a href="<?php echo site_url(); ?>/editorials">Editorials</a></li>
                                                      <li><a href="<?php echo site_url(); ?>/profile/">Profiles</a></li>
                                                      <li><a href="<?php echo site_url(); ?>/op-ed/">Op-Eds</a></li>
                                                      <li><a href="<?php echo site_url(); ?>/loveinterest">Love Interest</a></li>
                                                   </ul>
                                                </li> -->
                                             </ul>
                                          </li>
                                          <div style="clear: both;"></div>
                                       </ul>
                                    </li>
									 
									 
									 
									 
									 
									 <li>
                                       <a href="<?php echo site_url(); ?>/radius" class="radiuslink">Radius <span style="font-size: 9px;"
                                          class="oi" data-glyph="caret-bottom" title="caret bottom" aria-hidden="true"></span></a>
                                       <ul class="boomsubopinion clearfix radius">
                                          <li class="listone">
                                             <ul class="listoneul clearfix">
                                                <?php
                                                   $query = new WP_Query( array( 'tax_query' => array(
                                                           array(
                                                           'taxonomy' => 'section',
                                                           'field' => 'slug',
                                                           'terms' => 'radius')
                                                       ), 'homepage2-post-order'=>'disable', 'orderby' => 'date', 'post_type' => array('post','feature'), 'posts_per_page' => 2) );
                                                    
                                                   if ( $query->have_posts() ) : ?>
                                                <?php $count = 0; ?>
                                                <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                                                <?php $count++; ?>
                                                <?php if ($count == 1) : ?>
                                                <li class="leftone">
                                                   <a class="" href="<?php the_permalink() ?>">
                                                      <h4 class="miniheading">
                                                         <?php
                                                            $content_meta_display = '';
                                                             
                                                            //Output the trainer email
                                                             
                                                            echo $content_meta_display
                                                            ?>
                                                      </h4>
                                                      <!-- Image goes here -->
                                                      <script type="text/javascript">
                                                         jQuery('.cropper7').imagefill();
                                                      </script>
                                                      <span>
                                                      <?php the_title(); ?>
                                                      </span>
                                                </li>
                                                <?php elseif ($count == 2) : ?>
                                                <li class="rightone"><a class="" href="<?php the_permalink() ?>">
                                                <h4 class="miniheading">
                                                <?php
                                                   $content_meta_display = '';
                                                    
                                                   //Output the trainer email
                                                    
                                                   echo $content_meta_display
                                                   ?>
                                                </h4>
                                                <!-- Image goes here -->
                                                <script type="text/javascript">
                                                   jQuery('.cropper8').imagefill();
                                                </script>
                                                <span>
                                                <?php the_title(); ?>
                                                </span>
                                                </a></li>
                                             </ul>
                                             <!-- End of "List One" <ul> -->
                                          </li>
                                          <!-- End of "List One" <li> -->
                                          <?php else : ?>
                                          <?php endif; ?>
                                          <?php endwhile; ?>
                                          <?php wp_reset_query(); ?>
                                          <?php endif; ?>
                                          <li class="listtwo">
                                             <ul class="listtwoul clearfix">
												 <ul class="lefttwoul">
                                                      <h4 class="miniheading">More Radius</h4>
                                                      <?php
                                                         $query = new WP_Query( array( 'tax_query' => array(
                                                                 array(
                                                                 'taxonomy' => 'section',
                                                                 'field' => 'slug',
                                                                 'terms' => 'radius')
                                                             ), 'homepage2-post-order'=>'disable', 'orderby' => 'date', 'post_type' => array('post','feature'), 'posts_per_page' => 8) );
                                                          
                                                         if ( $query->have_posts() ) : ?>
                                                      <?php $count = 0; ?>
                                                      <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                                                      <?php $count++; ?>
                                                      <?php if ($count == 3) : ?>
                                                      <li><a class="boomsublink" href="<?php the_permalink() ?>">
                                                         <?php the_title(); ?>
                                                         </a>
                                                      </li>
                                                      <hr />
                                                      <?php elseif ($count == 4) : ?>
                                                      <li><a class="boomsublink" href="<?php the_permalink() ?>"
                                                         title="<?php the_title_attribute(); ?>">
                                                         <?php the_title(); ?>
                                                         </a>
                                                      </li>
                                                      <hr />
                                                      <?php elseif ($count == 5) : ?>
                                                      <li><a class="boomsublink" href="<?php the_permalink() ?>"
                                                         title="<?php the_title_attribute(); ?>">
                                                         <?php the_title(); ?>
                                                         </a>
                                                      </li>
                                                      <?php else : ?>
                                                      <?php endif; ?>
                                                      <?php endwhile; ?>
                                                      <?php wp_reset_query(); ?>
                                                      <?php endif; ?>
                                                      <li class="seemore"><a class="moremore" href="<?php echo site_url(); ?>/radius">SEE ALL IN
                                                         RADIUS</a>
                                                      </li>
                                                   </ul>
                                             </ul>
                                          </li>
                                          <div style="clear: both;"></div>
                                       </ul>
                                    </li> 
									 
									 
                                    <li>
                                       <a href="<?php echo site_url(); ?>/sport" class="sportlink">Sport <span style="font-size: 9px;"
                                          class="oi" data-glyph="caret-bottom" title="caret bottom" aria-hidden="true"></span></a>
                                       <ul class="boomsubopinion clearfix sport">
                                          <li class="listone">
                                             <ul class="listoneul clearfix">
                                                <?php
                                                   $query = new WP_Query( array( 'tax_query' => array(
                                                           array(
                                                           'taxonomy' => 'section',
                                                           'field' => 'slug',
                                                           'terms' => 'sport')
                                                       ), 'homepage2-post-order'=>'disable', 'orderby' => 'date', 'post_type' => array('post','feature'), 'posts_per_page' => 2) );
                                                    
                                                   if ( $query->have_posts() ) : ?>
                                                <?php $count = 0; ?>
                                                <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                                                <?php $count++; ?>
                                                <?php if ($count == 1) : ?>
                                                <li class="leftone">
                                                   <a class="" href="<?php the_permalink() ?>">
                                                      <h4 class="miniheading">
                                                         <?php
                                                            $content_meta_display = '';
                                                             
                                                            //Output the trainer email
                                                             
                                                            echo $content_meta_display
                                                            ?>
                                                      </h4>
                                                      <!-- Image goes here -->
                                                      <script type="text/javascript">
                                                         jQuery('.cropper5').imagefill();
                                                      </script>
                                                      <span>
                                                      <?php the_title(); ?>
                                                      </span>
                                                </li>
                                                <?php elseif ($count == 2) : ?>
                                                <li class="rightone"><a class="" href="<?php the_permalink() ?>">
                                                <h4 class="miniheading">
                                                <?php
                                                   $content_meta_display = '';
                                                    
                                                   //Output the trainer email
                                                    
                                                   echo $content_meta_display
                                                   ?>
                                                </h4>
                                                <!-- Image goes here -->
                                                <script type="text/javascript">
                                                   jQuery('.cropper6').imagefill();
                                                </script>
                                                <span>
                                                <?php the_title(); ?>
                                                </span>
                                                </a></li>
                                             </ul>
                                             <!-- End of "List One" <ul> -->
                                          </li>
                                          <!-- End of "List One" <li> -->
                                          <?php else : ?>
                                          <?php endif; ?>
                                          <?php endwhile; ?>
                                          <?php wp_reset_query(); ?>
                                          <?php endif; ?>
                                          <li class="listtwo">
                                             <ul class="listtwoul clearfix">
												 <ul class="lefttwoul">
                                                      <h4 class="miniheading">More Sport</h4>
                                                      <?php
                                                         $query = new WP_Query( array( 'tax_query' => array(
                                                                 array(
                                                                 'taxonomy' => 'section',
                                                                 'field' => 'slug',
                                                                 'terms' => 'sport')
                                                             ), 'homepage2-post-order'=>'disable', 'orderby' => 'date', 'post_type' => array('post','feature'), 'posts_per_page' => 8) );
                                                          
                                                         if ( $query->have_posts() ) : ?>
                                                      <?php $count = 0; ?>
                                                      <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                                                      <?php $count++; ?>
                                                      <?php if ($count == 3) : ?>
                                                      <li><a class="boomsublink" href="<?php the_permalink() ?>">
                                                         <?php the_title(); ?>
                                                         </a>
                                                      </li>
                                                      <hr />
                                                      <?php elseif ($count == 4) : ?>
                                                      <li><a class="boomsublink" href="<?php the_permalink() ?>"
                                                         title="<?php the_title_attribute(); ?>">
                                                         <?php the_title(); ?>
                                                         </a>
                                                      </li>
                                                      <hr />
                                                      <?php elseif ($count == 5) : ?>
                                                      <li><a class="boomsublink" href="<?php the_permalink() ?>"
                                                         title="<?php the_title_attribute(); ?>">
                                                         <?php the_title(); ?>
                                                         </a>
                                                      </li>
                                                      <?php else : ?>
                                                      <?php endif; ?>
                                                      <?php endwhile; ?>
                                                      <?php wp_reset_query(); ?>
                                                      <?php endif; ?>
                                                      <li class="seemore"><a class="moremore" href="<?php echo site_url(); ?>/sport">SEE ALL IN
                                                         SPORT</a>
                                                      </li>
                                                   </ul>
<!--                                                 <li class="lefttwo">
                                                   
                                                </li> -->
<!--                                                 <li class="righttwo">
                                                   <ul class="righttwoulopinion">
                                                      <h4 class="miniheading">More from Sport</h4>
                                                      <li><a href="">Rugby</a></li>
                                                      <li><a href="">Soccer</a></li>
                                                      <li><a href="">Rowing</a></li>
                                                      <li><a href="">Fencing</a></li>
                                                   </ul>
                                                </li> -->
                                             </ul>
                                          </li>
                                          <div style="clear: both;"></div>
                                       </ul>
                                    </li>
									 
									 
							 
									 
									 
									 
									 
                                   
                                    <li><a href="<?php echo site_url(); ?>/category/as-gaeilge">As Gaeilge</a></li>
                                    <li><a href="<?php echo site_url(); ?>/puzzles" class="opinionlink">Puzzles</a></li>
                                    <!-- <li><a href="<?php echo site_url(); ?>/blogs" class="blogslink">Blogs <span style="font-size: 9px;" class="oi" data-glyph="caret-bottom" title="caret bottom" aria-hidden="true"></span></a></li> -->
                                 </ul>
                              </div>
                              <!-- End of greatboom -->
                              <script>
                                 jQuery(function ($) {
                                 
                                 
                                 
                                 
                                 
                                 
                                 });
                                 
                                 
                                 
                                 
                                 
                                 
                      
                                 
                                 
                                 
                                 
                              </script>
                              <div class="shilly">
                                 <div class="pusherit">
                                    <div class="hider">
                                       <div class="searchboxd">
                                          <form class="searchformform" style="" method="get" id="searchform"
                                             action="<?php bloginfo('home'); ?>/">
                                             <div><input type="text" name="s" id="s" value="Search"
                                                onfocus="if(this.value==this.defaultValue)this.value='';"
                                                onblur="if(this.value=='')this.value=this.defaultValue;" />
                                                <button type="submit" id="searchsubmit" value="Search" class="btn"><span style=""
                                                   class="oi searchicon" data-glyph="magnifying-glass" title="magnifying glass"
                                                   aria-hidden="true"></span> </button>
                                             </div>
                                          </form>
                                       </div>
                                       <!-- End of searchboxd div -->
                                    </div>
                                    <!-- End of hider -->
                                    <div class="searchpush">
                                       <div id="excontainer">
                                          <a id="ex-icon" class="cheeseit2" href="#" title="Menu">
                                          <span class="line ex-1"></span>
                                          <span class="line ex-2"></span>
                                          </a>
                                       </div>
                                       <div id="searchitcontainer">
                                          <span style="" class="oi searchicon" data-glyph="magnifying-glass" title="magnifying glass"
                                             aria-hidden="true"></span>
                                       </div>
                                    </div>
                                    <div style="clear: both;"></div>
                                 </div>
                                 <!-- End of pusherit -->
                                 <script>
                                    jQuery(function ($) {
                                    
                                    
                                      $(".searchpush").click(function () {
                                    
                                        // Set the effect type
                                        var effect = 'slide';
                                    
                                        // Set the options for the effect type chosen
                                        var options = { direction: 'right' };
                                    
                                        // Set the duration (default: 400 milliseconds)
                                        var duration = 400;
                                    
                                        var delay = 410;
                                    
                                    
                                    
                                        $('.hider').toggle(effect, options, duration, callbackFn);
                                    
                                    
                                        function callbackFn() {
                                    
                                    
                                    
                                          $('.hider').is(":visible") ? $('#s').focus() : $('#s').focusout();
                                    
                                    
                                        }
                                    
                                    
                                    
                                    
                                    
                                    
                                      });
                                    
                                    
                                    
                                    
                                      $("#s").focus(function () {
                                    
                                    
                                    
                                    
                                        $("#searchitcontainer").delay(100).fadeOut(100);
                                    
                                        $("#excontainer").delay(100).fadeIn(220);
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                      });
                                    
                                    
                                      $("#s").focusout(function () {
                                    
                                    
                                    
                                    
                                        $("#searchitcontainer").delay(300).fadeIn(320);
                                    
                                        $("#excontainer").delay(300).fadeOut(200);
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                      });
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                      $(document).mouseup(function (e) {
                                        var container = $(".shilly");
                                    
                                        if (!container.is(e.target) // if the target of the click isn't the container...
                                          && container.has(e.target).length === 0) // ... nor a descendant of the container
                                        {
                                          if ($(window).width() < 981) {
                                    
                                            if ($(this).find('.hider').is(':visible')) {
                                    
                                              // Set the effect type
                                              var effect = 'slide';
                                    
                                              // Set the options for the effect type chosen
                                              var options = { direction: 'right' };
                                    
                                              // Set the duration (default: 400 milliseconds)
                                              var duration = 400;
                                    
                                    
                                    
                                              $('.hider').toggle(effect, options, duration);
                                    
                                            }
                                    
                                          }
                                    
                                        }
                                      });
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    });
                                    
                                    
                                    
                                    
                                 </script>
                              </div>
                              <!-- Close Shilly Container -->
                           </nav>
                        </div>
                        <!-- End of navigationtopcontainer div -->
                     </div>
                  </header>
               </div>
               <!-- End of headercontained div -->