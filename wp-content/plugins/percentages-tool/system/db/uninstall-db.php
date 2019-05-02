<?php
    global $wpdb;
    $wpdb->query( sprintf( "DROP TABLE IF EXISTS %s",
            $wpdb->prefix . 'pta_category_sub_type' ) );