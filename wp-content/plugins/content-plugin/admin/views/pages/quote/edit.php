<?php _open_lcm_admin_item_form(); ?>
<table class="form-table">
    <tr>
        <th>
            <label>Title*</label>
        </th>
        <td>
            <input class="regular-text limit_title"  type="text" name="title" value="<?= $data->title ?>" required>
        </td>
    </tr>
    <tr>
        <th>
            <label>Quote </label>
        </th>
        <td>
            <?php wp_editor($data->quote_description, 'quote_description', array('textarea_rows' => '10')); ?>
        </td>
    </tr>
    <tr>
        <th>
            <label>Status*:</label>
        </th>
        <td>
            <?php lcm_admin_dropdown_selector('status', $data->status, array('Suggested', 'New', 'Published', 'Hidden', 'Spam')) ?>
        </td>
    </tr>
    <tr>
        <th>
            <label>Headshot</label>
        </th>
        <td>
            <?php if ($data->headshot != '') { ?>
            <div>
                <div id="quote-headshot-img">
                    <img src="<?= wp_upload_dir()['baseurl'] . $data->headshot ?>" alt="headshot Image" height="100" width="100">
                    <input type="hidden"  value="<?= $data->headshot ?>" name="headshot">
                    <div id="lcm-remove-quote-headshot" class="lcm-remove-img-btn">Delete</div>
                </div>
            </div>
            <?php } ?>
            <input class="regular-text" type="file" name="headshot" accept="image/*">
        </td>
    </tr>
    <tr>
        <th>
            <label>Name </label> 
        </th>
        <td>
            <input class="regular-text" type="text" name="name" value="<?= $data->name ?>" >
        </td>
    </tr>
    <tr>
        <th>
            <label>Email </label>
        </th>
        <td>					
            <input class="regular-text" type="Email" name="email" value="<?= $data->email ?>" >
        </td>
    </tr>
    <tr>
        <th>
            <label>Company </label>
        </th>
        <td>
            <input class="regular-text" type="text" name="company" value="<?= $data->company ?>" >
        </td>
    </tr>
    <tr>
        <th>
            <label>Job Position </label>
        </th>
        <td>
            <input class="regular-text" type="text" name="job_position" value="<?= $data->job_position ?>" >
        </td>
    </tr>
    <tr>
        <th>
            <label>Company website: </label>
        </th>
        <td>
            <input class="regular-text" type="url" name="company_website" value="<?= $data->company_website ?>">
            <input type="checkbox" name="is_weburl_df"  value="dofollow" <?php if($data->is_weburl_df == 'dofollow'){echo 'checked';} ?> > Dofollow
        </td>
    </tr>
</table>
<?php _close_lcm_admin_item_form(); ?>