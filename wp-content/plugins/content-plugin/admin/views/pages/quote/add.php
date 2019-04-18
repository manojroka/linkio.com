<?php _open_lcm_admin_item_form(); ?>
<table class="form-table">
    <tr>
        <th>
            <label>Title*</label>
        </th>
        <td>
            <input class="regular-text limit_title" value="<?= $this->flash_notice->form_value('title') ?>" type="text" name="title" required>
        </td>
    </tr>
    <tr>
        <th>
            <label>Quote* </label>
        </th>
        <td>
            <?php wp_editor($this->flash_notice->form_value('quote_description'), "quote_description", array('textarea_rows' => '7')); ?>
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
            <input class="regular-text" type="text" value="<?= $this->flash_notice->form_value('name') ?>" name="name">
        </td>
    </tr>
    <tr>
        <th>
            <label>Email  </label>
        </th>
        <td>					
            <input class="regular-text" type="email" value="<?= $this->flash_notice->form_value('email') ?>" name="email">
        </td>
    </tr>
    <tr>
        <th>
            <label>Company </label>
        </th>
        <td>
            <input class="regular-text" type="text" value="<?= $this->flash_notice->form_value('company') ?>" name="company">
        </td>
    </tr>
    <tr>
        <th>
            <label>Job Position </label>
        </th>
        <td>
            <input class="regular-text" type="text" value="<?= $this->flash_notice->form_value('job_position') ?>" name="job_position">
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
