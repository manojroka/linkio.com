<form action="admin.php?page=lcms&module=<?= $_REQUEST['module'] ?>&mid=<?= $_REQUEST['mid'] ?>&templateid=<?= $_REQUEST['templateid'] ?>&action=create_new" method="post">
    <p class="submit">
        <input class="button button-primary" type="submit" value="Create New Item">
    </p>
</form>
<div class="wrap">
    <table class="table wp-list-table widefat fixed striped pages">
        <thead>
            <tr>
                <th>Title</th>
                <th>Name</th> 
                <th>Company</th>
                <th>Shortcodes</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <?php if (count($data['lists']) > 0) { ?>
            <tbody>
                <?php foreach ($data['lists'] as $item) { ?>
                    <tr>
                        <td><?= $item->website_name ?></td>
                        <td><?= $item->name ?></td>
                        <td><?= $item->company ?></td>
                        <td>[<?= 'lcm_content type="item" template="' . $_GET['module'] . '" id="' . $item->id . '"' ?>]</td>
                        <td><?= $item->email ?></td>
                        <td>
                            <a class="dashicons dashicons-edit" href="admin.php?page=lcms&module=<?= $_REQUEST['module'] ?>&mid=<?= $_REQUEST['mid'] ?>&templateid=<?= $_REQUEST['templateid'] ?>&id=<?= $item->id ?>&action=edit"></a>
                            / 
                            <a class="dashicons dashicons-dismiss" href="javascript:lcm_admin_delete('admin.php?page=lcms&module=<?= $_REQUEST['module'] ?>&mid=<?= $_REQUEST['mid'] ?>&templateid=<?= $_REQUEST['templateid'] ?>&id=<?= $item->id ?>&action=delete')"></a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        <?php } ?>
    </table>
</div>
