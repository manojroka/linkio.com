<?php _open_lcm_admin_item_form(); ?>
<table class="form-table">
    <tr>
        <th>
            <label>Website Name*</label>
        </th>
        <td>
            <input class="regular-text limit_title" name="website_name" value="<?= $data->website_name ?>" required>
        </td>
    </tr>
    <tr>
        <th>
            <label>Website URL*</label>
        </th>
        <td>
            <input class="regular-text" type="url" name="website_url" value="<?= $data->website_url ?>" required>
            <input type="checkbox" name="is_weburl_df"  value="dofollow" <?php if($data->is_weburl_df == 'dofollow'){echo 'checked';} ?> > Dofollow
        </td>
    </tr>
    <tr>
        <th>
            <label>Website description*</label>
        </th>
        <td>
            <?php wp_editor("$data->website_description", "website_description", array('textarea_rows' => '7')); ?>
        </td>
    </tr>
    <tr>
        <th>
            <label>Website logo</label>
        </th>
        <td>
            <?php if ($data->website_logo != '') { ?>
            
            
            <div>
                <div id="web-logo-img">
                    <img src="<?= wp_upload_dir()['baseurl'] . $data->website_logo ?>" alt="headshot Image" height="100" width="100">
                    <input type="hidden"  value="<?= $data->website_logo ?>" name="website_logo">
                    <div id="lcm-remove-web-logo" class="lcm-remove-img-btn">Delete</div>
                </div>
            </div>
            
            
            
                
            <?php } ?>
            <input class="regular-text" type="file" name="website_logo" accept="image/*">
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
            <label>Name </label> 
        </th>
        <td>
            <input class="regular-text" type="text" name="name" value="<?= $data->name ?>">
        </td>
    </tr>
    <tr>
        <th>
            <label>Email</label>
        </th>
        <td>					
            <input class="regular-text" type="Email" name="email" value="<?= $data->email ?>">
        </td>
    </tr>
    <tr>
        <th>
            <label>Company </label>
        </th>
        <td>
            <input class="regular-text" type="text" name="company" value="<?= $data->company ?>">
        </td>
    </tr>

</table>
<?php _close_lcm_admin_item_form(); ?>