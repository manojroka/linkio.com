<div class="lcm_row lcm_box_shadow lcm_padding_tb15">
<?php if (isset($filter)) { ?>
    <div class="lcm_row">
        <div class="lcm_col-md-7">
            <input type="text" placeholder="Search">
        </div>
        <div class="lcm_col-md-2">
            <input type="button" placeholder="Search" value="search icon">
        </div>
        <div class="lcm_col-md-1">
            <P>OR</p>
        </div>

        <div class="lcm_col-md-2" onclick="open_popup_form('quote')">
            <input type="button" placeholder="Add New Item" value="Add New Item">
        </div>
    </div>
    <div class="lcm_row">
        <div class="lcm_clear_both lcm_padding_lr15">
            Sort By: Value
        </div>
    </div>
<?php } ?>

<?php
if (isset($submit_form)) { lcmf_popup_form_open($module_detail); ?>
    <label>Title*</label>
    <input class="form-control limit_word" type="text" name="title" id="title" required>
    <label>Quote*</label>
    <?php lcm_editor("", "quote_description", array('textarea_rows' => '8')); ?>
    <?php _lcm_dropdown_selector('status', NULL, array('Suggested', 'New', 'Published', 'Hidden', 'Spam'), 'Status*') ?>
    <label>Headshot*</label>
    <input class="form-control" type="file" name="headshot" accept="image/*" required>
    <?php _lcmf_name_email_company_input() ?>
    <label>Company Website</label>
    <input class="form-control" type="url" name="company_website">
    <?php lcmf_popup_form_closed($module_detail);
} ?>

</div>