<?php
    global $wpdb;
    $charset_collate = $wpdb->get_charset_collate();
    
    $wpdb->query( sprintf( "DROP TABLE IF EXISTS %s",
            $wpdb->prefix . 'lcm_modules' ) );
    
    // === create module_table ===========
    $sql_module_table = "CREATE TABLE IF NOT EXISTS `{$wpdb->prefix}lcm_modules` (
                            `id` int(11) NOT NULL,
                            `name` varchar(255) NOT NULL,
                            `slug` varchar(255) NOT NULL
                        ); 
                        INSERT INTO `{$wpdb->prefix}lcm_modules` (`id`, `name`, `slug`) VALUES
                            (1, 'Quote', 'quote'),
                            (2, 'Tactic', 'tactic'),
                            (3, 'Website', 'website'),
                            (4, 'Tool', 'tool');".$charset_collate;
    // === end create module_table ===========
    
    // === start create module_templates ===========
    $sql_module_templates_table = "CREATE TABLE IF NOT EXISTS `{$wpdb->prefix}lcm_module_templates` (
                                    `id` int(11) NOT NULL AUTO_INCREMENT,
                                    `template_name` varchar(255) NOT NULL,
                                    `module_id` int(11) NOT NULL,
                                    `item_count` int(11) NOT NULL,
                                    PRIMARY KEY (`id`)
                                );".$charset_collate;
    // === end create module_templates ===========
    
    // === start create quote table ===========
    $sql_template_quote_table = "CREATE TABLE IF NOT EXISTS `{$wpdb->prefix}lcm_template_quotes` (
                                    `id` int(11) NOT NULL AUTO_INCREMENT,
                                    `title` varchar(155) NOT NULL,
                                    `quote_description` text NOT NULL,
                                    `status` enum('Suggested','New','Published','Hidden','Spam') DEFAULT NULL,
                                    `headshot` varchar(255) DEFAULT NULL,
                                    `name` varchar(255) NOT NULL,
                                    `email` varchar(255) NOT NULL,
                                    `company` varchar(255) NOT NULL,
                                    `company_website` varchar(255) NOT NULL,
                                    `job_position` VARCHAR(155) NULL,
                                    `is_cooke` enum('on') DEFAULT NULL,
                                    `is_weburl_df` enum('dofollow','nofollow') NOT NULL DEFAULT 'nofollow',
                                    `vote_count` int(11) NOT NULL DEFAULT '0',
                                    `template_id` int(11) NOT NULL,
                                    `module_id` int(11) NOT NULL,
                                    FULLTEXT (`title`), 
                                    FULLTEXT (`quote_description`), 
                                    PRIMARY KEY (`id`)
                                );".$charset_collate;
    // === end create quote table ===========
    
    // === start create tactic table ===========
    $sql_template_tactic_table = "CREATE TABLE IF NOT EXISTS `{$wpdb->prefix}lcm_template_tactics` (
                                    `id` int(11) NOT NULL AUTO_INCREMENT,
                                    `tactic_name` varchar(155) NOT NULL,
                                    `tactic_description` text NOT NULL,
                                    `status` enum('Suggested','New','Published','Hidden','Spam') DEFAULT NULL,
                                    `name` varchar(255) NOT NULL,
                                    `email` varchar(255) NOT NULL,
                                    `company` varchar(255) NOT NULL,
                                    `company_url` varchar(155) NULL,
                                    `job_position` VARCHAR(155) NULL,
                                    `collapse_expand` text NOT NULL,
                                    `tool_included` text,
                                    `tool_types` enum('Free','Paid') DEFAULT NULL,
                                    `category` text,
                                    `is_cooke` enum('on') DEFAULT NULL,
                                    `vote_count` int(11) NOT NULL DEFAULT '0',
                                    `template_id` int(11) NOT NULL, 
                                    `module_id` int(11) NOT NULL, 
                                    FULLTEXT (`tactic_name`), 
                                    FULLTEXT (`tactic_description`), 
                                    PRIMARY KEY (`id`)
                                );".$charset_collate;
    // === end create tactic table ===========
    
    // === start create tool table ===========
    $sql_template_tool_table = "CREATE TABLE IF NOT EXISTS `{$wpdb->prefix}lcm_template_tools` (
                                    `id` int(11) NOT NULL AUTO_INCREMENT,
                                    `tool_name` varchar(155) NOT NULL,
                                    `home_page_url` varchar(155) NOT NULL,
                                    `summary` text NOT NULL,
                                    `description` text NOT NULL,
                                    `status` enum('Suggested','New','Published','Hidden','Spam') DEFAULT NULL,
                                    `additional_links` varchar(255) DEFAULT NULL,
                                    `name` varchar(255) NOT NULL,
                                    `email` varchar(255) NOT NULL,
                                    `company` varchar(255) NOT NULL,
                                    `images` text,
                                    `videos` text,
                                    `collapse_expand` text,
                                    `type` text,
                                    `price` enum('Free','Paid','Freemium') DEFAULT NULL,
                                    `is_cooke` enum('on') DEFAULT NULL,
                                    `vote_count` int(11) NOT NULL DEFAULT '0',
                                    `template_id` int(11) NOT NULL, 
                                    `module_id` int(11) NOT NULL, 
                                    FULLTEXT (`tool_name`), 
                                    FULLTEXT (`description`), 
                                    PRIMARY KEY (`id`)
                                );".$charset_collate;
    // === end create tool table ===========
    
    // === start create websites table ===========
    $sql_template_website_table = "CREATE TABLE IF NOT EXISTS `{$wpdb->prefix}lcm_template_websites` (
                                    `id` int(11) NOT NULL AUTO_INCREMENT,
                                    `website_name` varchar(155) NOT NULL,
                                    `website_url` varchar(155) NOT NULL,
                                    `website_description` text NOT NULL,
                                    `website_logo` varchar(155) NOT NULL,
                                    `status` enum('Suggested','New','Published','Hidden','Spam') DEFAULT NULL,
                                    `name` varchar(255) NOT NULL,
                                    `email` varchar(255) NOT NULL,
                                    `company` varchar(255) NOT NULL,
                                    `is_cooke` enum('on') DEFAULT NULL,
                                    `is_weburl_df` enum('dofollow','nofollow') NOT NULL DEFAULT 'nofollow',
                                    `vote_count` int(11) NOT NULL DEFAULT '0',
                                    `template_id` int(11) NOT NULL,
                                    `module_id` int(11) NOT NULL,
                                    FULLTEXT (`website_name`), 
                                    FULLTEXT (`website_description`), 
                                    PRIMARY KEY (`id`)
                                );".$charset_collate;
    // === end create websites table ===========
    
    // === start create $sql_clients_ip_records_table ===========
    $sql_clients_ip_records_table = "CREATE TABLE IF NOT EXISTS `{$wpdb->prefix}lcm_clients_ip_records` (
                                    `id` int(11) NOT NULL AUTO_INCREMENT,
                                    `item_id` int(11) NOT NULL,
                                    `template_id` int(11) NOT NULL,
                                    `module_id` int(11) NOT NULL,
                                    `clients_ip` varchar(100) NOT NULL,
                                    `record_date` varchar(100) NULL,
                                    `record_for` enum('vote','cookie') DEFAULT NULL,
                                    PRIMARY KEY (`id`)
                                );".$charset_collate;
    // === end create $sql_clients_ip_records_table ===========
    
    // === start create tactic categories table ===========
    $sql_tactic_categories_table = "CREATE TABLE IF NOT EXISTS `{$wpdb->prefix}lcm_template_tactics_categories` (
                                    `id` int(11) NOT NULL AUTO_INCREMENT,
                                    `name` varchar(255) NOT NULL,
                                    `tactic_id` int(11) DEFAULT NULL,
                                    `template_id` int(11) DEFAULT NULL,
                                    PRIMARY KEY (`id`)
                                );".$charset_collate;
    // === end create tactic categories table ===========
    
    // === start create tool types table ===========
    $sql_tool_types_table = "CREATE TABLE IF NOT EXISTS `{$wpdb->prefix}lcm_template_tools_types` (
                                    `id` int(11) NOT NULL AUTO_INCREMENT,
                                    `name` varchar(255) NOT NULL,
                                    `tool_id` int(11) DEFAULT NULL,
                                    `template_id` int(11) DEFAULT NULL,
                                    PRIMARY KEY (`id`)
                                );".$charset_collate;
    // === end create tool types table ===========
    
    
    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta($sql_module_table);
    dbDelta($sql_module_templates_table);
    dbDelta($sql_template_quote_table);
    dbDelta($sql_template_tactic_table);
    dbDelta($sql_template_tool_table);
    dbDelta($sql_template_website_table);
    dbDelta($sql_voted_clients_table);
    dbDelta($sql_tactic_categories_table);
    dbDelta($sql_tool_types_table);
    dbDelta($sql_clients_ip_records_table);