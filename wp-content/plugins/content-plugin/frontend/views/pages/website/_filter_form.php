
<div class="lcm_row lcm_box_shadow lcm_padding15">
    
    
    <?php if (isset($filter)) { ?>
        <div class="lcm_search_box">
            <div class="lcm_row">
                <div class="lcm_col-md-7">
                    <input class="lcm_search" type="text" style="font-family:Arial, FontAwesome" value="&#xf002 Search">
                </div>
                <div class="lcm_col-md-2">
                    <div class="lcm_padding_lr18_22">
                        <input type="button" style="font-family:Arial, FontAwesome" value="&#xf002 Search">
                    </div>
                </div>
                <div class="lcm_col-md-1">
                    <P>OR</p>
                </div>

                <div class="lcm_col-md-2 lcm_padding_l18 lcm_float_right" onclick="open_popup_form('website')">
                    <input type="button" style="font-family:Arial, FontAwesome" placeholder="Add New Item" value="&#xf055 Add New Item">
                </div>
            </div>
            <div class="lcm_row">
                <div class="lcm_clear_both lcm_padding_t8 lcm_flex">
                    <span class="lcm_search_text">Sort by:</span>
                    <div class="lcm_select-wrapper">
                        <select>
                            <option>Value</option>
                            <option>Value1</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
    
    
</div>




















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
        lcmf_popup_form_closed($module_detail); 
    } ?>
</div>