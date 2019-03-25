<?php
/**
* Anchor Text Generator page template
 *
 *
 * @package WordPress
 * @subpackage Outreach mama
 * @since Outreach mama 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">
<title>Anchor Text Generator</title>

<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php endif; ?>

<?php // wp_head(); ?>
<?php /*
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/software.css" rel="stylesheet" type="text/css" />
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/master.css" rel="stylesheet" type="text/css" />
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/master2.css" rel="stylesheet" type="text/css" />
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/media-all-in-one.css" rel="stylesheet" type="text/css" />
<!--<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/media768.css" rel="stylesheet" type="text/css" />
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/media480.css" rel="stylesheet" type="text/css" />
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/media320.css" rel="stylesheet" type="text/css" />-->
*/ ?>
	
<!-- <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet"> -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:500" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" text="txt/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<?php $current_theme_uri = get_template_directory_uri(); ?>

<link rel="stylesheet" type="text/css" href="<?php echo $current_theme_uri ?>/k-tool/css/fonts.css?125">
<link rel="stylesheet" type="text/css" href="<?php echo $current_theme_uri ?>/k-tool/css/style.css?125">
	
<!-- Facebook Pixel Code -->
<?php /*
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '551581141702482');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" src="https://www.facebook.com/tr?id=551581141702482&ev=PageView &noscript=1"/></noscript>
*/ ?>
<!-- End Facebook Pixel Code -->

<link rel="icon" href="https://www.linkio.com/wp-content/uploads/2017/09/cropped-Favicon-32x32.png" sizes="32x32" />
<link rel="icon" href="https://www.linkio.com/wp-content/uploads/2017/09/cropped-Favicon-192x192.png" sizes="192x192" />
<link rel="apple-touch-icon-precomposed" href="https://www.linkio.com/wp-content/uploads/2017/09/cropped-Favicon-180x180.png" />
<meta name="msapplication-TileImage" content="https://www.linkio.com/wp-content/uploads/2017/09/cropped-Favicon-270x270.png" />

</head>

<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M5B7SMB" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<?php
	// Anchors / Keywords Generator Tool
	require_once('k-tool/k-tool.php');
?>

<?php // get_footer(); ?>

<script type='text/javascript'>
window.__lo_site_id = 95788;

(function() {
	var wa = document.createElement('script'); wa.type = 'text/javascript'; wa.async = true;
	wa.src = 'https://d10lpsik1i8c69.cloudfront.net/w.js';
	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(wa, s);
 })();
</script>

</body>
</html>