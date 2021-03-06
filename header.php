<!doctype html>
<!--[if lt IE 9]>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<![endif]-->
<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

<head>
	<meta charset="utf-8">

	<?php // force Internet Explorer to use the latest rendering engine available ?>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title><?php wp_title(' : '); ?></title>

	<?php // mobile meta (hooray!) ?>
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>

	<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon.png">
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
	<!--[if IE]>
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
	<![endif]-->
	<?php // or, set /favicon.ico for IE10 win ?>
	<meta name="msapplication-TileColor" content="#f01d4f">
	<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
        <meta name="theme-color" content="#121212">

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php // wordpress head functions ?>
	<?php wp_head(); ?>
	<?php // end of wordpress head ?>

	<?php // drop Google Analytics Here ?>
	<?php // end analytics ?>

</head>

<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

	<noscript>
		<style>
			.body-wrapper{
				display : block;
			}
		</style>
	</noscript>
	<div id="responsive-wrapper"></div>
	<div class="body-wrapper">
	<!-- ********************************************************************* -->
	<!--****************** Site header ***************************************-->
	<!-- ********************************************************************* -->

		<header class="site-header" role="banner" itemscope itemtype="http://schema.org/WPHeader">
			<div class="top-bar">
				<section class="layout">

					<?php do_action('icl_language_selector'); ?>

					<div class="header-follow-links">
						
						<ul>

							<li>
								<a href="#">
									<img class="follow-telegram" src="<?php echo get_template_directory_uri();?>/images/icons/telegram.png"/>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-instagram" aria-hidden="true"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-facebook" aria-hidden="true"></i>
								</a>
							</li>
							<li>
								<a href="#">
									<img class="follow-aparat" src="<?php echo get_template_directory_uri();?>/images/icons/aparat-white.png"/>
								</a>
							</li>
						</ul>
					</div>
				</section>
			</div>
			<div class="hero">
				<section class="layout">

					<div class="logo-wrapper">
						<!-- menu-toggler -->
						<a id="menu-toggler" class="menu-toggler" >
							<i class="fa fa-navicon"></i>
						</a>

						<a class="site-link" href="<?php echo get_bloginfo('url'); ?>">
							<img src="<?php echo get_template_directory_uri();?>/images/sana-logo-fa.png" alt="<?php echo get_bloginfo('name'); ?>"/>
						</a>

					</div>


					<nav role="navigation" class="main-menu" itemscope="" itemtype="http://schema.org/SiteNavigationElement">


						<div id="responsive-menu" class="responsive-menu">
							<a id="close-responsive" class="close-responsive">
								<i class="fa fa-close"></i>
							</a>

							<a class="responsive-logo" href="<?php echo get_bloginfo('url'); ?>">
								<img src="<?php echo get_template_directory_uri();?>/images/sana-logo-fa.png" alt="<?php echo get_bloginfo('name'); ?>"/>
							</a>
							<?php //$responsive_walker = new Viradeco_walker_nav_menu; ?>
							<?php wp_nav_menu(array(
				    					         'container' => false,                           // remove nav container
				    					         'container_class' => 'menu cf',                 // class of container (should you choose to use it)
				    					         'menu' => __( 'The Main Menu', 'itstar' ),  // nav name
				    					         'menu_class' => 'nav responsive-nav cf',               // adding custom nav class
				    					         'theme_location' => 'responsive-menu',                 // where it's located in the theme
				    					         //'walker'          =>  $responsive_walker,
				    					         'before' => '',                                 // before the menu
				        			               'after' => '',                                  // after the menu
				        			               'link_before' => '',                            // before each link
				        			               'link_after' => '',                             // after each link
				        			               'depth' => 5,                                   // limit the depth of the nav
				    					        'fallback_cb'     => '',
				    					         
				    					                                    // fallback function (if there is one)
							)); ?>
						</div>

						<?php $walker = new Menu_With_Image; ?>
						<?php wp_nav_menu(array(
    					         'container' => false,                           // remove nav container
    					         'container_class' => 'menu cf',                 // class of container (should you choose to use it)
    					         'menu' => __( 'Main Menu', 'itstar' ),  // nav name
    					         'menu_class' => 'nav main-nav cf', 
//    					         'walker' => $walker,             // adding custom nav class
    					         'theme_location' => 'main-menu',                 // where it's located in the theme
    					         'before' => '',                                 // before the menu
        			               'after' => '',                                  // after the menu
        			               'link_before' => '',                            // before each link
        			               'link_after' => '',                             // after each link
        			               'depth' => 5,                                   // limit the depth of the nav
    					         'fallback_cb' => ''                             // fallback function (if there is one)
						)); ?>



					</nav>

					<a href="#search" id="searchToggler" class="search-toggler" >
						<i class="fa fa-search"></i>
					</a>

					<div class="menu-search-area" id="menuSearchArea">
						<?php echo get_search_form(); ?>
					</div>

				</section>

			</div>
		</header>	

<!-- ********************************************************************* -->
<!--****************** Site Main ******************************************-->
<!-- ********************************************************************* -->

