<?php
    global $wpdb;
    $pta_db = $wpdb;
    $pta_db->query( sprintf( "DROP TABLE IF EXISTS %s",
            $pta_db->prefix . 'pta_category_sub_type' ) );