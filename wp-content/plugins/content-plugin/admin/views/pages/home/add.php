<div class="wrap" style="background-color:#fff; padding:10px; border-radius: 10px;">
    <h1>Create New Content Template</h1>
    <form action="admin.php?page=lcms&action=create_new" method="post">
        <table class="form-table">
            <tr>
                <th>
                    <label>Template</label> 
                </th>
                <td>
                    <select name="module_id">
                        <?php foreach ($data['modules'] as $templates) { ?>
                            <option value="<?= $templates->id ?>"><?= $templates->name ?></option>
                        <?php } ?>
                    </select>
                </td>
            </tr> 
            <tr>
                <th>
                    <label>Content Template Label</label>
                </th>
                <td>
                    <input name="template_name" type="text" class="regular-text">
                </td>
            </tr>
        </table>
        <p class="submit">
            <input class="button button-primary" type="submit" name="submit" value="Create New List">
        </p>
    </form>
</div>