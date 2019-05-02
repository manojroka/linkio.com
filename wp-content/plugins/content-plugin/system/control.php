<?php
function lcm_on_activate() {
include LCM_PLUGIN_DIR. '/system/db/install-db.php';
}
register_activation_hook(LCM_PLUGIN, 'lcm_on_activate');

function lcm_on_uninstall() {
include LCM_PLUGIN_DIR. '/system/db/uninstall-db.php';
}
register_uninstall_hook(LCM_PLUGIN, 'lcm_on_uninstall');

require 'lcm-update/lcm-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'https://www.linkio.com/lcm-update/content-plugin.json',
	LCM_PLUGIN, //Full path to the main plugin file or functions.php.
	'content-templates'
);