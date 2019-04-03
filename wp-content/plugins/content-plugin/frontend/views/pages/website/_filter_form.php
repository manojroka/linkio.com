
<div class="lcm_row lcm_box_shadow lcm_padding15">
    
    
    <?php if (isset($filter)) { ?>
        <div class="lcm_search_box">
            <div class="lcm_row">
                <div class="i-btn-center">
                    <div class="lcm_col-md-2 lcm_padding_l18" onclick="open_popup_form('website')">
                        <input type="button" style="font-family:Arial, FontAwesome" placeholder="Add New Item" value="&#xf055 Add New Item">
                    </div>    
                </div>                
            </div>
        </div>
    <?php } ?>
    
    
    
    
    
    
    
    
    <?php if (isset($submit_form)) {
        lcmf_popup_form_open($module_detail); ?>
        <div class="lcm_popup_content lcm_padding_lr25">
            <div class="lcm_flex lcm_row">
                <div class="lcm_col-md-3">
                    <label>Your Name</label>
                </div>
                <div class="lcm_col-md-6">
                    <div class="">
                        <input class="form-control limit_word" type="text" name="name" id="title" required>   
                    </div>
                </div>
            </div>
            <div class="lcm_flex lcm_row">
                <div class="lcm_col-md-3">
                    <label>Your Email</label>
                </div>
                <div class="lcm_col-md-6">
                    <div class="">
                        <input class="form-control" type="email" name="email" required>
                    </div>
                </div>
            </div>
            
            <div class="lcm_flex lcm_row">
                <div class="lcm_col-md-3">
                    <label>Website Name</label>
                </div>
                <div class="lcm_col-md-6">
                    <div class="">
                        <input class="form-control" type="text" name="website_name" required>
                    </div>
                </div>
            </div>
            
            <div class="lcm_flex lcm_row">
                <div class="lcm_col-md-3">
                    <label>Website Url</label>
                </div>
                <div class="lcm_col-md-6">
                    <div class="">
                        <input class="form-control" type="url" name="website_url" required>
                    </div>
                </div>
            </div>
            
            
            <div class="lcm_flex lcm_row">
                <div class="lcm_col-md-3">
                    <label>Website Logo</label>
                </div>
                <div class="lcm_col-md-6">
                    <div class="">
                        <input class="lcm-i-type-file form-control" type="file" name="website_logo" accept="image/*" required>
                        <span class="lcm_popup_info"><i class="fas fa-info-circle"></i>For best preview the logo images should be 180px x 90px</span>
                    </div>
                </div>
            </div>
            
            
            <div>
                <label>Website Description</label>
                <?php lcm_editor("", "website_description", array('textarea_rows' => '12')); ?>
                <span class="lcm_popup_info"><i class="fas fa-info-circle"></i>Some description about what they can enter here, formating, html</span>
            </div>
            
            
        </div>
        <div class="lcm_border_bottom lcm_paddingbuttom_15">&nbsp;</div>
        <?php // _lcm_dropdown_selector('status', NULL, array('Suggested', 'New', 'Published', 'Hidden', 'Spam'), 'Status*') ?>
        <?php // _lcmf_name_email_company_input() ?>
    <?php lcmf_popup_form_closed($module_detail);
} ?>
    
    
    
    
    
    
    
    
    
    
    
</div>



















