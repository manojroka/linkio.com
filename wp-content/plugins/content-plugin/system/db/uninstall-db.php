<?php
    global $wpdb;
    
    $wpdb->query( sprintf( "DROP TABLE IF EXISTS %s",
            $wpdb->prefix . 'lcm_modules' ) );
    
    $wpdb->query( sprintf( "DROP TABLE IF EXISTS %s",
            $wpdb->prefix . 'lcm_module_templates' ) );
    
    $wpdb->query( sprintf( "DROP TABLE IF EXISTS %s",
            $wpdb->prefix . 'lcm_template_quotes' ) );
    
    $wpdb->query( sprintf( "DROP TABLE IF EXISTS %s",
            $wpdb->prefix . 'lcm_template_tactics' ) );
    
    $wpdb->query( sprintf( "DROP TABLE IF EXISTS %s",
            $wpdb->prefix . 'lcm_template_tools' ) );
    
    $wpdb->query( sprintf( "DROP TABLE IF EXISTS %s",
            $wpdb->prefix . 'lcm_template_websites' ) );
    
    $wpdb->query( sprintf( "DROP TABLE IF EXISTS %s",
            $wpdb->prefix . 'lcm_clients_ip_records' ) );
    
    $wpdb->query( sprintf( "DROP TABLE IF EXISTS %s",
            $wpdb->prefix . 'lcm_template_tactics_categories' ) );
    
    $wpdb->query( sprintf( "DROP TABLE IF EXISTS %s",
            $wpdb->prefix . 'lcm_template_tools_types' ) );
