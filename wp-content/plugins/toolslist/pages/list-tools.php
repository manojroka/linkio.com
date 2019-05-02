<?php
	$tools = $wpdb->get_results( "SELECT * FROM {$wpdb->prefix}seo_tools_list ORDER BY name ASC", OBJECT ); // Might also try with OBJECT_K
	// var_dump( $tools ); // For debugging

	// Show success message
	if( isset($_REQUEST['msg']) )
		echo tools_List_Notices::get_notice('success', $_REQUEST['msg']);
?>
<table class="wp-list-table widefat fixed striped pages">
	<thead>
		<tr>
			<th scope="col" class="manage-column column-title" nowrap style="width: 10px;">ID</th>
			<th scope="col" class="manage-column column-title" nowrap style="width: 30px;">Name</th>
			<th scope="col" class="manage-column column-title" nowrap style="width: 30px;">Type</th>
			<th scope="col" class="manage-column column-title" nowrap style="width: 30px;">Price</th>
			<th scope="col" class="manage-column column-title" nowrap style="width: 30px;">Status</th>
			<th scope="col" class="manage-column column-title" nowrap style="width: 30px;">Votes</th>
			<th scope="col" class="manage-column column-title" nowrap style="width: 30px;"></th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($tools as $tool) { ?>
		<tr>
			<td><?php echo $tool->id; ?></td>
			<td class="tool-name"><?php echo $tool->name; ?></td>
			<td><?php echo str_replace(array(',', '_'), array(', ', ' '), $tool->type); ?></td>
			<td><?php echo $tool->price; ?></td>
			<td><?php echo $tool->status; ?></td>
			<td><?php echo $tool->votes; ?></td>
			<td>
				<a href="admin.php?page=tools_list_dashboard&action=edit&id=<?php echo $tool->id; ?>" class="dashicons dashicons-edit" title="Click to edit tool"></a>
				<a href="admin.php?page=tools_list_dashboard&action=delete&id=<?php echo $tool->id; ?>" class="dashicons dashicons-trash" title="Click to delete tool"></a>
				<?php /* <a href="#abc" class="dashicons dashicons-trash" title="Click to delete tool"></a> */ ?>
			</td>
		</tr>
		<?php } ?>
	</tbody>
</table>

<script type="text/javascript">
jQuery(document).ready(function() {
	jQuery('.dashicons-trash').on('click', function(e) {
		e.preventDefault();
		toolName = jQuery(this).parents('tr').find('td.tool-name').text();
			if( !confirm('Are you sure you wish to delete the ' + toolName + ' tool ?') ) {
				return;
		}

		window.location = jQuery(this).attr('href');
	});
});
</script>