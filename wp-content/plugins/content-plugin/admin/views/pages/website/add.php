<?php _open_lcm_admin_item_form(); ?>
<table class="form-table">
    <tr>
        <th>
            <label>Website Name*</label>
        </th>
        <td>
            <input class="regular-text limit_title" type="text" name="website_name" required>
        </td>
    </tr>
    <tr>
        <th>
            <label>Website URL*</label>
        </th>
        <td>
            <input class="regular-text" type="url" name="website_url" required>&nbsp;
            <input type="checkbox" name="is_weburl_df" value="dofollow"> Dofollow
        </td>
    </tr>
    <tr>
        <th>
            <label>Website description*</label>
        </th>
        <td>
            <?php wp_editor("", "website_description", array('textarea_rows' => '7')); ?>
        </td>
    </tr>
    <tr>
        <th>
            <label>Website logo</label>
        </th>
        <td>
            <input class="regular-text" type="file" name="website_logo" accept="image/*">
        </td>
    </tr>
    <tr>
        <th>
            <label>Status</label>
        </th>
        <td>					
            <?php lcm_admin_dropdown_selector('status', NULL, array('Suggested', 'New', 'Published', 'Hidden', 'Spam')) ?>
        </td>
    </tr>
    <tr>
        <th>
            <label>Name </label> 
        </th>
        <td>
            <input class="regular-text" type="text" name="name" value="">
        </td>
    </tr>
    <tr>
        <th>
            <label>Email </label>
        </th>
        <td>					
            <input class="regular-text" type="Email" name="email" value="">
        </td>
    </tr>
    <tr>
        <th>
            <label>Company </label>
        </th>
        <td>
            <input class="regular-text" type="text" name="company" value="">
        </td>
    </tr>
</table>
<?php _close_lcm_admin_item_form(); ?>