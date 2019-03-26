<div class="wrap" style="background-color:#fff; padding:10px; border-radius: 10px;">
    <h1>Update Content Template</h1>
<?php // echo '<pre>'; print_r($data); ?>
    <form action="admin.php?page=lcms&action=edit&id=<?=$_REQUEST['id']?>" method="post">
        <table class="form-table">
            <tr>
                <th>
                    <label>Template</label> 
                </th>
                <td>
                    <select disabled="">
                        <?php foreach ($data['modules'] as $templates) { ?>
                            <option <?php if($templates->id == $data['templates']->module_id){echo 'selected';} ?> value="<?= $templates->id ?>"><?= $templates->name ?></option>
                        <?php } ?>
                    </select>
                </td>
            </tr> 
            <tr>
                <th>
                    <label>Content Template Label</label>
                </th>
                <td>
                    <input name="template_name" value="<?= $data['templates']->template_name ?>" type="text" class="regular-text">
                </td>
            </tr>
        </table>
        <p class="submit">
            <input class="button button-primary" type="submit" name="submit" value="Update">
        </p>
    </form>
</div>