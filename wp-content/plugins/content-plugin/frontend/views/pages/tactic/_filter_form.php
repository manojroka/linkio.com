<div class="lcm_row lcm_box_shadow lcm_padding15">
    <?php if (isset($filter)) { ?>
        <div class="lcm_search_box">
            <div class="lcm_row">
                <div class="lcm_col-md-7">
                    <input type="text" id="lcm-search-query" class="fas fa-search" data-template_id="<?=$module_detail->id?>" data-module="<?=$module_detail->module?>" placeholder="&#xf002; Search">
                </div>
                    <div class="lcm_col-md-2">
                        <div class="lcm_padding_lr18_22">
                            <input type="submit" class="lcm-s-a-btn" id="lcm-do-search" style="font-family:Arial, FontAwesome" value="&#xf002 Search">
                        </div>
                    </div>
                    <div class="lcm_col-md-1 lcm_display_none">
                        <P>OR</p>
                    </div>
                    <div class="lcm_col-md-2 lcm_padding_l18 lcm_float_right lcm_mobile_clear_both_float_left" onclick="open_popup_form('tactic')">
                        <input type="button" class="lcm-s-a-btn" style="font-family:Arial, FontAwesome" placeholder="Add New Item" value="&#xf055 Add New Item">
                    </div>
            </div>
            <div class="lcm_row lcm_mobile_clear_both">
                <div class="lcm_clear_both lcm_padding_t8 lcm_flex">
                    <span class="lcm_search_text">Sort by:</span>
                    <div class="lcm_select-wrapper">
                        <select>
                            <option>Name Asc</option>
                            <option>Name Desc</option>
                            <option>Rating Asc</option>
                            <option>Rating Desc</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>

    <?php
    if (isset($submit_form)) { lcmf_popup_form_open($module_detail); ?>
        <div class="lcm_popup_content lcm_padding_lr25 lcm_container ">
            
            <div class="lcm_flex lcm_row">
                <div class="lcm_col-md-3">
                    <label class="lcm_mobile_line_height">Strategy Title</label>
                </div>
                <div class="lcm_col-md-6">
                    <div class="">
                        <input class="form-control limit_word" type="text" name="tactic_name" required>
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
                    <label class="lcm_mobile_line_height">Company Url</label>
                </div>
                <div class="lcm_col-md-6">
                    <div class="">
                        <input class="form-control" name="company_url" type="url">
                    </div>
                </div>
            </div>
            <div class="lcm_flex lcm_row">
                <div class="lcm_col-md-3">
                    <label class="lcm_mobile_line_height">Author Job Position</label>
                </div>
                <div class="lcm_col-md-6">
                    <div class="">
                        <input class="form-control" name="job_position" type="text" required>
                    </div>
                </div>
            </div>
            <!--<div>-->
            <!--<label>Email*</label>-->
            <input class="form-control" type="hidden" name="email" value="test@test.com" required>
            <!--</div>-->
            <div>
                <label class="lcm_mobile_padding_top">Content</label>
                <?php lcm_editor("", "tactic_description", array('textarea_rows' => '12')); ?>
                <span class="lcm_popup_info"><i class="fas fa-info-circle"></i>Some description about what they can enter here, formating, html...???</span>
            </div>
            <?php _lcmf_term_and_conditions_chkbox($module_detail) ?>
        </div>
        <div class="lcm_border_bottom">&nbsp;</div>
    <?php lcmf_popup_form_closed($module_detail); } ?>
</div>

