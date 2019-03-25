<div id="lcm_filter">
    <?php if(isset($submit_form)){ 
        lcmf_popup_form_open($module_detail); 
    ?>
        <label>Title*</label>
        <input class="form-control limit_word" type="text" name="title" id="title" required>
        <label>Quote*</label>
        <?php lcm_editor("", "quote_description", array('textarea_rows' => '8')); ?>
        <?php _lcm_dropdown_selector('status', NULL, array('Suggested', 'New', 'Published', 'Hidden', 'Spam'), 'Status*' ) ?>
        <label>Headshot*</label>
        <input class="form-control" type="file" name="headshot" accept="image/*" required>
        <?php _lcmf_name_email_company_input()?>
        <label>Company Website</label>
        <input class="form-control" type="url" name="company_website">
    <?php lcmf_popup_form_closed($module_detail); } ?>
</div>
