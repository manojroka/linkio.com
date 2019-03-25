<?php
/**
* Anchor Text Analysis page template
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
<title>Anchor Text Analysis Tool | Calculate Ratios | Linkio</title>
<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?><link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"><?php endif; ?>
<?php // wp_head(); ?>

<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" text="txt/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" text="txt/css" href="https://cdnjs.cloudflare.com/ajax/libs/genericons/3.1/genericons.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<?php
	$current_theme_uri = get_template_directory_uri();
	
	$current_theme_path = get_template_directory();
	$current_atc_path 	= $current_theme_path 	. '/atc-tool';
	$current_style_path	= $current_atc_path 	. '/css/style.css';
?>

<link rel="stylesheet" type="text/css" href="<?php echo $current_theme_uri ?>/atc-tool/css/fonts.css?201">
<link rel="stylesheet" type="text/css" href="<?php echo $current_theme_uri ?>/atc-tool/css/style.css?<?php echo filemtime( $current_style_path ); ?>">
<link href="<?php echo get_template_directory_uri(); ?>/tools-common/header.css?<?php echo mt_rand(1,1000000); ?>" rel="stylesheet">

<link rel="icon" href="https://www.linkio.com/wp-content/uploads/2017/09/cropped-Favicon-32x32.png" sizes="32x32" />
<link rel="icon" href="https://www.linkio.com/wp-content/uploads/2017/09/cropped-Favicon-192x192.png" sizes="192x192" />
<link rel="apple-touch-icon-precomposed" href="https://www.linkio.com/wp-content/uploads/2017/09/cropped-Favicon-180x180.png" />
<meta name="msapplication-TileImage" content="https://www.linkio.com/wp-content/uploads/2017/09/cropped-Favicon-270x270.png" />

<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '551581141702482');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=551581141702482&ev=PageView&noscript=1"/></noscript>
<!-- End Facebook Pixel Code -->

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-54SPHK9');</script>
<!-- End Google Tag Manager -->
<meta name="google-site-verification" content="WTP2jGGDz5T09aMwnXUldJ1daIKUBPJwtg7S4-vgjyc" />

</head>

<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-54SPHK9" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<?php
	// Main PHP logic
	$theme_path = dirname(__FILE__);
    $theme_uri 	= $current_theme_uri;
	
	$toolCode 	= 'atc';
	$atc		= true;
	
	// Assume Mouseflow should be active
	$allowMouseflow = true;
	
	$ip	= $_SERVER['REMOTE_ADDR'];
	if($ip == '95.87.220.53')
		$allowMouseflow = false;

	$host = $_SERVER['HTTP_HOST'];
	if( in_array($host, array('atc.ex', 'atc.exigio.com')) )
		$allowMouseflow = false;
?>

<?php
	// Anchor Text Categorizer Tool
	require_once('atc-tool/atc-tool.php');
?>

<script>//
//window.intercomSettings = {
//	app_id: "ncstqpja"
//};
//</script>
<script>//(function(){var w=window;var ic=w.Intercom;if(typeof ic==="function"){ic('reattach_activator');ic('update',intercomSettings);}else{var d=document;var i=function(){i.c(arguments)};i.q=[];i.c=function(args){i.q.push(args)};w.Intercom=i;function l(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://widget.intercom.io/widget/ncstqpja';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);}if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})()</script>

<?php if($allowMouseflow) { ?>
<script type="text/javascript">
window._mfq = window._mfq || [];
(function() {
   var mf = document.createElement("script");
   mf.type = "text/javascript"; mf.async = true;
   mf.src = "//cdn.mouseflow.com/projects/edb364a5-4b7c-49c1-aefa-3fdf8c564938.js";
   document.getElementsByTagName("head")[0].appendChild(mf);
})();
</script>
<?php } ?>

<script src="<?php echo get_template_directory_uri(); ?>/tools-common/common.js?<?php // echo mt_rand(1,1000000); ?>"></script>

</body>
</html>