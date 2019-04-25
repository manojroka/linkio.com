<?php


function pta_on_activate() {
    include PTA_PLUGIN_DIR. '/system/db/install-db.php';
}
register_activation_hook(PTA_PLUGIN, 'pta_on_activate');

function pta_on_uninstall() {
    include PTA_PLUGIN_DIR. '/system/db/uninstall-db.php';
}
register_uninstall_hook(PTA_PLUGIN, 'pta_on_uninstall');

require_once PTA_PLUGIN_DIR. '/system/load/init.php';
require_once PTA_PLUGIN_DIR. '/system/load/assets.php';
require_once PTA_PLUGIN_DIR. '/frontend/short_codes.php';
require_once PTA_PLUGIN_DIR. '/frontend/ajax_handler.php';

