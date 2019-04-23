<?php
/**
 * Template Name: SEO Tools Template
 *
 * @package WordPress
 * @subpackage Outreach mama
 * @since Outreach mama 1.0
 */
// Init
$debugMode = true;
$loadAll = true; // Load index.php & json

$is_bot = '';
if (strpos($_SERVER['REQUEST_URI'], "seo-tools-bot") !== false) {
   $is_bot = '-bot';
global $wp_query;
  $wp_query->set_404();
  status_header( 404 );
  get_template_part( 404 ); exit();
}else{

// For debugging
// if($debugMode && ($_SERVER['REMOTE_ADDR'] == '95.87.220.53'))
// $loadAll = false;

$theme_path = dirname(__FILE__);
$theme_uri = '';

$theme_uri = get_template_directory_uri();
$toolCode = 'seo-tools';

function fixUrl($url) {
    if (substr($url, 0, 3) === "www")
        $url = 'http://' . $url;
    return $url;
}

// USEFUL: Reset/delete transient
// delete_transient( 'tools' );
// $tools = get_transient( 'tools' );
// if ( false === $tools ) { // Transient missing or expired ...
global $wpdb;

// ORDER BY votes ASC
$tools = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}seo_tools_list WHERE status = 'Published' ORDER BY votes DESC LIMIT 5", OBJECT); // Might also try with OBJECT_K
$tools_noscript = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}seo_tools_list WHERE status = 'Published' ORDER BY votes DESC LIMIT 200 OFFSET 5", OBJECT);
$tools_count = $wpdb->get_row("SELECT COUNT(id) AS count FROM {$wpdb->prefix}seo_tools_list WHERE status = 'Published'")->count;

// }
// Fix tools list
foreach ($tools as &$tool) {
    $tool->homepage_url = fixUrl($tool->homepage_url);

    $tool->name = str_replace(array("\\", "\'"), array("", "'"), $tool->name);
    $tool->summary = str_replace(array("\\", "\'", "\r\n"), array("", "'", "<br>"), $tool->summary);
    $tool->description = str_replace(array("\\", "\'", "\r\n"), array("", "'", "<br>"), $tool->description);
}
unset($tool); // Fixes the reference ugly scope-bug
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        
        <title>The Definitive SEO Tools and Software List (2018 Update) | Linkio</title>
        <meta name="description" content="">
        <meta name="robots" content="index, follow" />

        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=1">

        <meta http-equiv="x-dns-prefetch-control" content="off" />
        

        <!--<link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,700" rel="stylesheet">-->
        <!--<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">-->
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <!--<link href="<?php echo get_template_directory_uri(); ?>/seo-tools/fonts/fonts.css?2" rel="stylesheet">-->
        <?php
        $current_theme_uri = get_template_directory_uri();

        $current_theme_path = get_template_directory();
        $current_tools_path = $current_theme_path . '/seo-tools';
        $current_style_path = $current_tools_path . '/css/styles.css';
        $current_all_style_path = $current_tools_path . '/css/all_styles.css';
        $current_js_path = $current_tools_path . '/js/main.js';
        ?>
        <!--<link rel="stylesheet" text="txt/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
        <!--<link rel="stylesheet" text="txt/css" href="https://cdnjs.cloudflare.com/ajax/libs/genericons/3.1/genericons.css">-->

        <link rel="stylesheet" text="txt/css" href="<?php echo get_template_directory_uri(); ?>/seo-tools/css/all_styles.css?<?php echo filemtime($current_all_style_path); ?>" rel="stylesheet">
        <!--<link href="<?php echo get_template_directory_uri(); ?>/tools-common/header.css?<?php echo mt_rand(1, 1000000); ?>" rel="stylesheet">-->
        
        <link rel="icon" href="https://www.linkio.com/wp-content/uploads/2017/09/cropped-Favicon-32x32.png" sizes="32x32" />
        <link rel="icon" href="https://www.linkio.com/wp-content/uploads/2017/09/cropped-Favicon-192x192.png" sizes="192x192" />
        <link rel="apple-touch-icon-precomposed" href="https://www.linkio.com/wp-content/uploads/2017/09/cropped-Favicon-180x180.png" />
        <meta name="msapplication-TileImage" content="https://www.linkio.com/wp-content/uploads/2017/09/cropped-Favicon-270x270.png" />
        
        <script src="<?php echo get_template_directory_uri(); ?>/seo-tools<?= $is_bot ?>/js/combined.js?<?php echo mt_rand(1, 1000000); ?>"></script>

        <?php if ($loadAll) require_once( $theme_path . '/seo-tools' . $is_bot . '/seo-tools-json.php'); ?>
        <script defer="defer" src="<?php echo get_template_directory_uri(); ?>/seo-tools<?= $is_bot ?>/js/main.js?<?php echo filemtime($current_js_path); ?>"></script>
        <script defer="defer" src="<?php echo get_template_directory_uri(); ?>/tools-common/common.js?<?php echo mt_rand(1, 1000000); ?>"></script>
        <!-- End Google Tag Manager -->
        <meta name="google-site-verification" content="WTP2jGGDz5T09aMwnXUldJ1daIKUBPJwtg7S4-vgjyc" />
    </head>
    <body>

        <?php require_once( $theme_path . '/tools-common/header.php' ); ?>
        <?php require_once( $theme_path . '/seo-tools' . $is_bot . '/modal-add-new-tool.php'); ?>

        <?php if ($loadAll) require_once( $theme_path . '/seo-tools' . $is_bot . '/index.php'); ?>

        <?php require_once( $theme_path . '/tools-common/footer.php'); ?>
    </body>
</html>
<?php } ?>