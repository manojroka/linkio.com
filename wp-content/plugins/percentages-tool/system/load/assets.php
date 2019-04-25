<?php

//======= frontend load css and js start===========
function pta_css_and_js() {
    wp_enqueue_style('font-awesome', 'https://use.fontawesome.com/releases/v5.6.3/css/all.css'); 
    wp_enqueue_style( 'pta-style', PTA_PLUGIN_FRONT_DIR_URL . '/views/assets/css/pta-style.css' );
    wp_register_script( 'jQuery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js', null, null, true );
    wp_enqueue_script( 'pta-js', PTA_PLUGIN_FRONT_DIR_URL . '/views/assets/js/pta-js.js', array('jquery'), '', true  );
}
add_action( 'wp_enqueue_scripts', 'pta_css_and_js' );


if (is_admin()) {
    if(isset($_GET['page'])){
        if($_GET['page'] == 'percentages-tool'){
            function pta_admin_bootstrap_css_and_js() {
                wp_enqueue_style('bootstrapcdn-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css');
                wp_enqueue_script( 'bootstrapcdn-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js' );
            }
            add_action( 'admin_enqueue_scripts', 'pta_admin_bootstrap_css_and_js' );
        }
    }
}





