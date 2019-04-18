<div class="lcm_row lcm_box_shadow lcm_padding15">
    
    <?php if (isset($filter)) { _lcm_top_search_box($module_detail); } ?>
    
    <?php if (isset($submit_form)) { lcmf_popup_form_open($module_detail); ?>
        <div class="lcm_flex lcm_row">
            <div class="lcm_col-md-3">
                <label>Tool name*</label>
            </div>
            <div class="lcm_col-md-6">
                <div class="">
                    <input class="form-control limit_word" type="text" name="tool_name" required>
                </div>
            </div>
        </div>
        <div class="lcm_flex lcm_row">
            <div class="lcm_col-md-3">
                <label>Tool URL*</label>
            </div>
            <div class="lcm_col-md-6">
                <div class="">
                    <input class="form-control" type="url" name="home_page_url" value="" required>
                </div>
            </div>
        </div>
        <div class="lcm_flex lcm_row">
            <div class="lcm_col-md-3">
                <label>Email*</label>
            </div>
            <div class="lcm_col-md-6">
                <div class="">
                    <input class="form-control" type="email" name="email" required>
                    <div class="lcm-i-submit-error" id="i-email"></div>
                </div>
            </div>
        </div>
        <div class="lcm_flex lcm_row">
            <div class="lcm_col-md-3">
                <label class="lcm_mobile_line_height">Website Logo*</label>
            </div>
            <div class="lcm_col-md-6">
                <div class="">
                    <input class="lcm-i-type-file form-control" type="file" name="img_path[]" accept="image/*" value="Upload" required>
                    <span class="lcm_popup_info"><i class="fas fa-info-circle"></i>For best preview the logo images should be 180px x 90px or similar ratio.</span>
                </div>
            </div>
        </div>
        <div class="lcm_flex lcm_row">
            <div class="lcm_col-md-3">
                <label class="lcm_mobile_line_height">Add Video Url</label>
            </div>
            <div class="lcm_col-md-6">
                <div class="">
                    <input class="form-control" name="videos[]" type="url" placeholder="Enter vimeo or youtube url">
                </div>
            </div>
        </div>
        <div class="lcm_flex lcm_row">
            <div class="lcm_col-md-3">
                <label>Pricing</label> 
            </div>
            <div class="lcm_col-md-6 lcm_padding_t8">
                <div class="lcm-i-type-radio">
                    <input type="radio" name="price" checked="" value="Free"> <span>Free</span>
                    <input type="radio" name="price" value="Freemium"> <span>Freemium</span>
                    <input type="radio" name="price" value="Paid"> <span>Paid</span>
                </div>
            </div>
        </div>
        <div>
            <label>Content*</label>
            <?php lcm_editor('', 'description', array('textarea_rows' => '15')); ?>
            <div class="lcm-i-submit-error" id="i-content_desc"></div>
            <div class="lcm-i-submit-error" id="i-content_desc_count"></div>
            <span class="lcm_popup_info"><i class="fas fa-info-circle"></i>You can use editor functionality to format the content. Please limit your description to 500 words</span>
        </div>
    <?php lcmf_popup_form_closed($module_detail); } ?>
</div>


