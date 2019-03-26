<div id="lcm_filter">
    <?php if(isset($submit_form)){
        lcmf_popup_form_open($module_detail); 
    ?>
        <label>Website Name*</label>
        <input class="form-control limit_word" type="text" name="website_name" required>
        <label>Company Website*</label>
        <input class="form-control" type="url" name="website_url" required>
        <label>Website description*</label>
        <?php lcm_editor("", "website_description", array('textarea_rows' => '7')); ?>
        <label>Website Logo</label>
        <input class="form-control" type="file" name="website_logo" accept="image/*">
    <?php
        _lcm_dropdown_selector('status', NULL, array('Suggested', 'New', 'Published', 'Hidden', 'Spam'), 'Status*');
        _lcmf_name_email_company_input();
        lcmf_popup_form_closed($module_detail); } 
    ?>
</div>