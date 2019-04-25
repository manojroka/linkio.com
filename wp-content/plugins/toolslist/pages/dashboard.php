<div class="wrap">
	<?php global $wpdb; ?>
	
	<?php
		// 1. Add tool
		if( isset($_REQUEST['action']) AND ($_REQUEST['action'] == 'add') ) {
			// Include status dropdown
			require_once(TOOLS_LIST_UI_PATH.'class-select-list.php');
			require_once(TOOLS_LIST_UI_PATH.'class-select-list-status.php');

			require_once('add-tool.php');
			return;
		}
	?>

	<?php
		// 2. Edit tool
		if( isset($_REQUEST['action']) AND ($_REQUEST['action'] == 'edit') ) {
			if( isset($_REQUEST['id']) AND ((int)$_REQUEST['id'] > 0) ) {
				// Include status dropdown
				require_once(TOOLS_LIST_UI_PATH.'class-select-list.php');
				require_once(TOOLS_LIST_UI_PATH.'class-select-list-status.php');

				require_once('edit-tool.php');
				return;
			}
		}
	?>	
	
	<?php
		// 3. Delete tool
		if( isset($_REQUEST['action']) AND ($_REQUEST['action'] == 'delete') )
			require_once('delete-tool.php');
	?>

	
	<h1>SEO tools List</h1>
	<br>
	<a href="admin.php?page=tools_list_dashboard&action=add" class="page-title-action">Add tool</a>
	<br><br>
	<hr class="wp-header-end">

	<?php require_once('list-tools.php'); ?>
</div>