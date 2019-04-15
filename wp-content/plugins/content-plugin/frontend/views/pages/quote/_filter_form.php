<div class="lcm_row lcm_box_shadow lcm_padding15">
    
    <?php if (isset($filter)) {  _lcm_top_search_box($module_detail); } ?>

    <?php if (isset($submit_form)) { lcmf_popup_form_open($module_detail); ?>
        <div class="lcm_popup_content lcm_padding_lr25">
            <div class="lcm_flex lcm_row">
                <div class="lcm_col-md-3">
                    <label>Quote Title</label>
                </div>
                <div class="lcm_col-md-6">
                    <div class="">
                        <input class="form-control limit_word" type="text" name="title" id="title" required>   
                    </div>
                </div>
            </div>
            <div class="lcm_flex lcm_row">
                <div class="lcm_col-md-3">
                    <label>Author</label>
                </div>
                <div class="lcm_col-md-6">
                    <div class="">
                        <input class="form-control" type="text" name="name" required>
                    </div>
                </div>
            </div>
            <div class="lcm_flex lcm_row">
                <div class="lcm_col-md-3">
                    <label>Email</label>
                </div>
                <div class="lcm_col-md-6">
                    <div class="">
                        <input class="form-control" type="email" name="email" required>
                    </div>
                </div>
            </div>
            <div class="lcm_flex lcm_row">
                <div class="lcm_col-md-3">
                    <label class="lcm_mobile_line_height">Author Picture</label>
                </div>
                <div class="lcm_col-md-6">
                    <div class="">
                        <input class="lcm-i-type-file form-control" type="file" name="headshot" accept="image/*" required>
                        <span class="lcm_popup_info"><i class="fas fa-info-circle"></i><span>For best preview the logo images should be 132px x 132px</span></span>
                    </div>
                </div>
            </div>
            <div class="lcm_flex lcm_row">
                <div class="lcm_col-md-3">
                    <label class="lcm_mobile_line_height">Author's Company</label>
                </div>
                <div class="lcm_col-md-6">
                    <div class="">
                        <input class="form-control" type="text" name="company" required>
                    </div>
                </div>
            </div>
            <div class="lcm_flex lcm_row">
                <div class="lcm_col-md-3">
                    <label>Company Url</label>
                </div>
                <div class="lcm_col-md-6">
                    <div class="lcm_mobile_line_height">
                        <input class="form-control" type="url" name="company_website">
                    </div>
                </div>
            </div>
            <div class="lcm_flex lcm_row">
                <div class="lcm_col-md-3">
                    <label class="lcm_mobile_line_height">Author Job Position</label>
                </div>
                <div class="lcm_col-md-6">
                    <div class="">
                        <input class="form-control limit_word" type="text" name="job_position" required>
                    </div>
                </div>
            </div>
            <!--<div>-->
            <!--<label>Email*</label>-->
            <input class="form-control" type="hidden" name="email" value="test@test.com" required>
            <!--</div>-->
            <div>
                <label class="lcm_mobile_padding_top">Content</label>
                <?php lcm_editor("", "quote_description", array('textarea_rows' => '12')); ?>
                <span class="lcm_popup_info"><i class="fas fa-info-circle"></i>Some description about what they can enter here, formating, html...???</span>
            </div>
            <?php _lcmf_term_and_conditions_chkbox($module_detail) ?>
        </div>
        <div class="lcm_border_bottom">&nbsp;</div>
        <?php // _lcm_dropdown_selector('status', NULL, array('Suggested', 'New', 'Published', 'Hidden', 'Spam'), 'Status*') ?>
        <?php // _lcmf_name_email_company_input() ?>
    <?php lcmf_popup_form_closed($module_detail); } ?>
</div>