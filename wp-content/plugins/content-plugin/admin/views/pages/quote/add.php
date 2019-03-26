<?php _open_lcm_admin_item_form(); ?>
<table class="form-table">
    <tr>
        <th>
            <label>Title*</label>
        </th>
        <td>
            <input class="regular-text limit_title" type="text" name="title" required>
        </td>
    </tr>
    <tr>
        <th>
            <label>Quote* </label>
        </th>
        <td>
            <?php wp_editor('', "quote_description", array('textarea_rows' => '7')); ?>
        </td>
    </tr>
    <tr>
        <th>
            <label>Status*:</label>
        </th>
        <td>	
            <?php lcm_admin_dropdown_selector('status', NULL, array('Suggested', 'New', 'Published', 'Hidden', 'Spam')) ?>
        </td>
    </tr>
    <tr>
        <th>
            <label>Headshot*</label>
        </th>
        <td>					
            <input class="regular-text" type="file" name="headshot" accept="image/*" required="">
        </td>
    </tr>
    <tr>
        <th>
            <label>Name </label> 
        </th>
        <td>
            <input class="regular-text" type="text" name="name">
        </td>
    </tr>
    <tr>
        <th>
            <label>Email  </label>
        </th>
        <td>					
            <input class="regular-text" type="Email" name="email">
        </td>
    </tr>
    <tr>
        <th>
            <label>Company </label>
        </th>
        <td>
            <input class="regular-text" type="text" name="company">
        </td>
    </tr>
    <tr>
        <th>
            <label>Company website </label>
        </th>
        <td>
            <input class="regular-text" type="url" name="company_website">&nbsp;
            <input type="checkbox" name="is_weburl_df" value="dofollow"> Dofollow
        </td>
    </tr>
</table>
<?php _close_lcm_admin_item_form(); ?>
