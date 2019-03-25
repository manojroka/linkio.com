<?php require_once 'add.php'; ?>
<div class="wrap">
    <h1>Templates</h1>     
    <table class="table wp-list-table widefat fixed striped pages">
        <thead>
            <tr>
                <th>Name</th>
                <th>Template</th>
                <th>Items</th>
                <th>Shortcodes</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php if(count($data['templates']) > 0){ ?>
            <?php foreach($data['templates'] as $t_lists){ ?>
            <tr>
                <td style=""><?= $t_lists->template_name; ?></td>
                <td style=""><?= $t_lists->module_name; ?></td>
                <td style="">
                    <a href="admin.php?page=lcms&module=<?= $t_lists->module_slug ?>&mid=<?= $t_lists->module_id ?>&templateid=<?= $t_lists->id ?>"><span class="dashicons dashicons-visibility"></span>&nbsp;&nbsp;
                        <?= $t_lists->i_count; ?>
                    </a>
                </td>
                <td><?= '[lcm_content type="list" id="'.$t_lists->id.'" filter="y" submit_form="y"]'; ?></td>
                <td style="">
                    <a class="dashicons dashicons-edit" href="admin.php?page=lcms&action=edit&id=<?= $t_lists->id; ?>"> </a>
                    /
                    <a class="dashicons dashicons-dismiss" href="javascript:lcm_admin_delete('admin.php?page=lcms&action=delete&id=<?= $t_lists->id; ?>')"> </a>
                </td>
            </tr>
            <?php } } ?>
        </tbody>
    </table>
</div>
