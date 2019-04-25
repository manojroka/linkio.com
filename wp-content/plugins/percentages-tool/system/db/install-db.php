<?php
    global $wpdb;
    $charset_collate = $wpdb->get_charset_collate();
    $sql_pta_category_sub_type = "CREATE TABLE IF NOT EXISTS `{$wpdb->prefix}pta_category_sub_type` (
                                    `id` int(11) NOT NULL AUTO_INCREMENT,
                                    `anchor_type` varchar(255) NOT NULL,
                                    `brand_name` float NOT NULL DEFAULT '0',
                                    `website_dot_com` float NOT NULL DEFAULT '0',
                                    `exact_keyword` float NOT NULL DEFAULT '0',
                                    `part_of_keyword` float NOT NULL DEFAULT '0',
                                    `keyword_plus_word` float NOT NULL DEFAULT '0',
                                    `title_tag` float NOT NULL DEFAULT '0',
                                    `brand_plus_keyword` float NOT NULL DEFAULT '0',
                                    `naked_url` float NOT NULL DEFAULT '0',
                                    `naked_url_no_http` float NOT NULL DEFAULT '0',
                                    `home_page_url` float NOT NULL DEFAULT '0',
                                    `just_natural` float NOT NULL DEFAULT '0',
                                    `no_text` float NOT NULL DEFAULT '0',
                                    `totally_random` float NOT NULL DEFAULT '0',
                                    `page_type` enum('home_page','commercial_page','informational_page') NOT NULL,
                                    `domain_type` enum('any','emd','nmd','pmd')  NOT NULL DEFAULT 'any',
                                    `website_type` enum('all','national','local','ecommerce','software') NOT NULL DEFAULT 'all',
                                    PRIMARY KEY (`id`)
                                )$charset_collate;";
    
    $sql_pta_category_sub_type_data = "INSERT INTO `{$wpdb->prefix}pta_category_sub_type` 
                                        (`id`, `anchor_type`, `brand_name`, `website_dot_com`, `exact_keyword`, 
                                            `part_of_keyword`, `keyword_plus_word`, `title_tag`, `brand_plus_keyword`, 
                                            `naked_url`, `naked_url_no_http`, `home_page_url`, `just_natural`, `no_text`, `totally_random`, 
                                            `page_type`, `domain_type`, `website_type`) 
                                        VALUES
                                        (1, 'Local Homepage - Partial Match Domain', 27.62, 8.59, 1.76, 3.56, 3.17, 2.73, 3.29, 19.45, 10.2, 0, 12.39, 7.26, 0, 'home_page', 'pmd', 'local'),
                                        (2, 'Local Homepage - No Keyword in Domain', 38.35, 7.65, 0, 6.95, 0, 3.02, 6.28, 14.96, 11.36, 0, 9.57, 1.86, 0, 'home_page', 'nmd', 'local'),
                                        (3, 'Local Homepage - Exact Match Domain where Brand Name is not a Keyword', 17.59, 2.56, 5.5, 4.83, 1.82, 0, 3.55, 28.54, 10.96, 0, 21.47, 3.17, 0, 'home_page', 'emd', 'local'),
                                        (4, 'Local Homepage - Exact Match Domain where Brand Name is a Keyword', 0, 5.7, 24.76, 17.04, 7.81, 1.35, 0, 14.28, 7.32, 0, 16.84, 4.92, 0, 'home_page', 'emd', 'local'),
                                        (5, 'National Homepage - Exact Match Domain', 0, 39.04, 11.8, 5.62, 4.59, 1.32, 0, 8.81, 9.1, 0, 14.98, 4.75, 0, 'home_page', 'emd', 'all'),
                                        (6, 'National Homepage - Partial Match Domain', 43.28, 15.74, 1.25, 2.82, 2.64, 1.05, 1.32, 11.54, 8.01, 0, 7.97, 4.39, 0, 'home_page', 'pmd', 'all'),
                                        (7, 'National Homepage - No Keyword in Domain', 51.81, 17.5, 0.53, 0.53, 0, 6.05, 2.63, 8.68, 1.58, 0, 8.58, 2.11, 0, 'home_page', 'nmd', 'all'),
                                        (8, 'Local Business Service Page', 16.68, 0, 0, 8.33, 8.33, 0, 8.33, 8.33, 16.67, 8.33, 25, 0, 0, 'commercial_page', 'any', 'local'),
                                        (9, 'Ecommerce Product Page', 47.54, 0.61, 2.73, 5.52, 5.66, 0, 11.67, 5.29, 0, 0, 19.26, 1.72, 0, 'commercial_page', 'any', 'ecommerce'),
                                        (10, 'Service Page', 28.29, 0, 9.21, 16.24, 15.3, 5.38, 1.65, 8.67, 0, 1.65, 12.51, 1.11, 0, 'commercial_page', 'any', 'national'),
                                        (11, 'Features Page', 28.29, 0, 9.21, 16.24, 15.3, 5.38, 1.65, 8.67, 0, 1.65, 12.51, 1.11, 0, 'commercial_page', 'any', 'software'),
                                        (12, 'Content Page', 6.42, 1.03, 14.83, 11.44, 17.1, 17.86, 7.06, 6.1, 0.09, 0.62, 13.31, 3.31, 0, 'informational_page', 'any', 'all')";
    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta($sql_pta_category_sub_type);
    dbDelta($sql_pta_category_sub_type_data);
    
    
