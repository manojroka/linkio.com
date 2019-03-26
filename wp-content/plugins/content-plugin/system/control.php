<?php
function lcm_on_activate() {
include LCM_PLUGIN_DIR. '/system/db/install-db.php';
}
register_activation_hook(LCM_PLUGIN, 'lcm_on_activate');

function lcm_on_uninstall() {
include LCM_PLUGIN_DIR. '/system/db/uninstall-db.php';
}
register_uninstall_hook(LCM_PLUGIN, 'lcm_on_uninstall');