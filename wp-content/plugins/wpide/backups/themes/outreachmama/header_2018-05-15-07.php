<?php /* start WPide restore code */
                                    if ($_POST["restorewpnonce"] === "e180d0b304a84fabf1c4649547ddc9c995d1f6689b"){
                                        if ( file_put_contents ( "/home/linkio07/public_html/wp-content/themes/outreachmama/header.php" ,  preg_replace("#<\?php /\* start WPide(.*)end WPide restore code \*/ \?>#s", "", file_get_contents("/home/linkio07/public_html/wp-content/plugins/wpide/backups/themes/outreachmama/header_2018-05-15-07.php") )  ) ){
                                            echo "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file.";
                                        }
                                    }else{
                                        echo "-1";
                                    }
                                    die();
                            /* end WPide restore code */ ?><?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<meta name="google-site-verification" content="5ThVue2MHX5y5ClQwGcJz5sPLXNKFuxZqepXOT0ZSt4" />
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>

	<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/newmaster75.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/software9.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/main-master8.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/master20.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/media-all-in-one80.css" rel="stylesheet" type="text/css" />
	<!--<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/media768.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/media480.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/media320.css" rel="stylesheet" type="text/css" />-->

</head>

<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-54SPHK9"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


<div id="page" class="site">
	<div class="site-inner">
		<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentysixteen' ); ?></a>

		<header id="masthead" class="site-header header-1" role="banner">
			<div class="site-header-main">
				<div class="site-branding">
				<?php twentysixteen_the_custom_logo(); ?>
				<!--<a href="https://www.managebacklinks.io/" class="custom-logo-link" rel="home" itemprop="url">
				<img src="https://www.managebacklinks.io/wp-content/uploads/2017/07/New%20Logo.svg" class="custom-logo" alt="Manage Backlinks" itemprop="logo" srcset="https://www.managebacklinks.io/wp-content/uploads/2017/07/New%20Logo.svg 305w, https://www.managebacklinks.io/wp-content/uploads/2017/07/New%20Logo-300x50.png 300w" sizes="(max-width: 305px) 85vw, 305px" width="305" height="51">
				</a>-->

					<?php if ( is_front_page() && is_home() ) : ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php else : ?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php endif;

					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<p class="site-description"><?php echo $description; ?></p>
					<?php endif; ?>
				</div><!-- .site-branding -->

				<?php if ( has_nav_menu( 'primary' ) || has_nav_menu( 'social' ) ) : ?>
				<a href="https://app.linkio.com/users/sign_up" class="sign-up-btn">Sign Up</a>
					<button id="menu-toggle" class="menu-toggle"><?php _e( 'Menu', 'twentysixteen' ); ?></button>

					<div id="site-header-menu" class="site-header-menu">
						<?php if ( has_nav_menu( 'primary' ) ) : ?>
							<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'twentysixteen' ); ?>">
								<?php
									wp_nav_menu( array(
										'theme_location' => 'primary',
										'menu_class'     => 'primary-menu',
									 ) );
								?>
							</nav><!-- .main-navigation -->
						<?php endif; ?>

						<?php if ( has_nav_menu( 'social' ) ) : ?>
							<nav id="social-navigation" class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Social Links Menu', 'twentysixteen' ); ?>">
								<?php
									wp_nav_menu( array(
										'theme_location' => 'social',
										'menu_class'     => 'social-links-menu',
										'depth'          => 1,
										'link_before'    => '<span class="screen-reader-text">',
										'link_after'     => '</span>',
									) );
								?>
							</nav><!-- .social-navigation -->
						<?php endif; ?>
				        <!--<div class="menu">
					    	<a class="login">Login</a>
					    	<a class="btn-sign-up-nav">Sign Up Free!</a>
						</div>-->

					</div><!-- .site-header-menu -->
				<?php endif; ?>
			</div><!-- .site-header-main -->

			<?php if ( get_header_image() ) : ?>
				<?php
					/**
					 * Filter the default twentysixteen custom header sizes attribute.
					 *
					 * @since Twenty Sixteen 1.0
					 *
					 * @param string $custom_header_sizes sizes attribute
					 * for Custom Header. Default '(max-width: 709px) 85vw,
					 * (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px'.
					 */
					$custom_header_sizes = apply_filters( 'twentysixteen_custom_header_sizes', '(max-width: 709px) 85vw, (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px' );
				?>
				<div class="header-image">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="<?php header_image(); ?>" srcset="<?php echo esc_attr( wp_get_attachment_image_srcset( get_custom_header()->attachment_id ) ); ?>" sizes="<?php echo esc_attr( $custom_header_sizes ); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
					</a>
				</div><!-- .header-image -->
			<?php endif; // End header image check. ?>
		</header><!-- .site-header -->



		<div id="content" class="site-content">
