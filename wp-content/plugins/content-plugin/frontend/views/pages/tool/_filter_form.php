<div class="lcm_row lcm_box_shadow lcm_padding15">
    <?php if (isset($filter)) { ?>
        <div class="lcm_search_box">
            <div class="lcm_row">
                <div class="lcm_col-md-7">
                    <input type="text" id="lcm-search-query" data-template_id="<?=$module_detail->id?>" data-module="<?=$module_detail->module?>" placeholder="&#xf002 Search">
                </div>
                    <div class="lcm_col-md-2">
                        <div class="lcm_padding_lr18_22">
                            <input type="submit" class="lcm-s-a-btn" id="lcm-do-search" style="font-family:Arial, FontAwesome" value="&#xf002 Search">
                        </div>
                    </div>
                    <div class="lcm_col-md-1 lcm_display_none">
                        <P>OR</p>
                    </div>
                    <div class="lcm_col-md-2 lcm_padding_l18 lcm_float_right lcm_mobile_clear_both_float_left" onclick="open_popup_form('tool')">
                        <input type="button" class="lcm-s-a-btn" style="font-family:Arial, FontAwesome" placeholder="Add New Item" value="&#xf055 Add New Item">
                    </div>
            </div>
            <div class="lcm_row lcm_mobile_clear_both">
                <div class="lcm_clear_both lcm_padding_t8 lcm_flex">
                    <span class="lcm_search_text">Sort by:</span>
                    <div class="lcm_select-wrapper">
                        <select id="lcm-i-sort">
                            <option value="name_asc">Name Asc</option>
                            <option value="name_desc">Name Desc</option>
                            <option value="rating_asc">Rating Asc</option>
                            <option value="rating_desc">Rating Desc</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
    
    <?php if (isset($submit_form)) { lcmf_popup_form_open($module_detail); ?>
        <div class="lcm_popup_content lcm_padding_lr25">
            <div class="lcm_flex lcm_row">
                <div class="lcm_col-md-3">
                    <label>Tool name</label>
                </div>
                <div class="lcm_col-md-6">
                    <div class="">
                        <input class="form-control limit_word" type="text" name="tool_name" required>
                    </div>
                </div>
            </div>
            <div class="lcm_flex lcm_row">
                <div class="lcm_col-md-3">
                    <label>Tool URL</label>
                </div>
                <div class="lcm_col-md-6">
                    <div class="">
                        <input class="form-control" type="url" name="home_page_url" value="" required>
                    </div>
                </div>
            </div>
            <div class="lcm_flex lcm_row">
                <div class="lcm_col-md-3">
                    <label class="lcm_mobile_line_height">Website Logo</label>
                </div>
                <div class="lcm_col-md-6">
                    <div class="">
                        <input class="lcm-i-type-file form-control" type="file" name="img_path[]" accept="image/*" value="Upload">
                        <span class="lcm_popup_info"><i class="fas fa-info-circle"></i>For best preview the logo images should be 180px x 90px</span>
                    </div>
                </div>
            </div>
            <div class="lcm_flex lcm_row">
                <div class="lcm_col-md-3">
                    <label class="lcm_mobile_line_height">Add Video Url</label>
                </div>
                <div class="lcm_col-md-6">
                    <div class="">
                        <input class="form-control" name="videos[]" type="url" placeholder="Give vimeo or youtube links">
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
                <label>Content</label>
                <?php lcm_editor('', 'description', array('textarea_rows' => 15)); ?>
                <span class="lcm_popup_info"><i class="fas fa-info-circle"></i>Some description about what they can enter here, formating, html...???</span>
            </div>
            <?php _lcmf_term_and_conditions_chkbox($module_detail) ?>
        </div>
        <div class="lcm_border_bottom">&nbsp;</div>
    <?php
        //_lcm_dropdown_selector('price', NULL, array('Free', 'Paid', 'Premium'), 'Price');
        lcmf_popup_form_closed($module_detail); } ?>
</div>


