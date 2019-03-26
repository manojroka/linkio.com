<?php

// Real Membership Name & Text Domain
define('ANCHOR_GENERATOR_NAME', 'Anchor_Generator');
define('ANCHOR_GENERATOR_TEXT_DOMAIN', 'anchor-generator');

// Define root path
define('ANCHOR_GENERATOR_ROOT', plugin_dir_path(__FILE__));

// Utils
define('ANCHOR_GENERATOR_WHITESPACE', ' ');

// Path to where the keywords files reside ..
// Usually in /wp-content/themes/current_theme/ats-tool/keywords/
define("PATH_TO_KEYWORDS", get_template_directory() . DIRECTORY_SEPARATOR . 'ats-tool' . DIRECTORY_SEPARATOR . 'keywords' . DIRECTORY_SEPARATOR);
