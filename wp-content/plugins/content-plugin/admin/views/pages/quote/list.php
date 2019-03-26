<form action="admin.php?page=lcms&module=<?=$_GET['module']?>&mid=<?=$_GET['mid']?>&templateid=<?=$_GET['templateid']?>&action=create_new" method="post">
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
                <th>Email</th>
                <th>Shortcodes</th>
                <th>Action</th>
            </tr>
        </thead>
        <?php if (count($data['lists']) > 0) { ?>
            <tbody>
                <?php foreach ($data['lists'] as $item) { ?>
                    <tr>
                        <td><?= $item->title ?></td>
                        <td><?= $item->name ?></td>
                        <td><?= $item->company ?></td>
                        <td><?= $item->email ?></td>
                        <td>[<?= 'lcm_content type="item" template="' . $_GET['module'] . '" id="' . $item->id . '"' ?>]</td>
                        <td>
                            <a class="dashicons dashicons-edit" href="admin.php?page=lcms&module=<?= $_GET['module'] ?>&mid=<?= $_GET['mid'] ?>&templateid=<?= $_GET['templateid'] ?>&id=<?= $item->id ?>&action=edit"></a>
                            / 
                            <a class="dashicons dashicons-dismiss" href="javascript:lcm_admin_delete('admin.php?page=lcms&module=<?= $_GET['module'] ?>&mid=<?= $_GET['mid'] ?>&templateid=<?= $_GET['templateid'] ?>&id=<?= $item->id ?>&action=delete')"></a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        <?php } ?>
    </table>
</div>

