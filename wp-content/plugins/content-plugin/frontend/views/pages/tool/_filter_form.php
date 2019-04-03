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

                <div class="lcm_col-md-2 lcm_padding_l18" onclick="open_popup_form('tool')">
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


    <?php if (isset($submit_form)) {
        lcmf_popup_form_open($module_detail); ?>


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
                    <label>Website Logo</label>
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
                    <label>Add Video</label>
                </div>
                <div class="lcm_col-md-6">
                    <div class="">
                        <input class="lcm-i-type-file form-control" type="file">
                    </div>
                </div>
            </div>


            <div class="lcm_flex lcm_row">
                <div class="lcm_col-md-3">
                    <label>Pricing</label> 
                </div>
                <div class="lcm_col-md-6">
                    <div class="lcm-i-type-radio">
                        <input type="radio" checked="" value="Free"> <span>Free</span>
                        <input type="radio" value="Premium"> <span>Premium</span>
                        <input type="radio" value="Paid"> <span>Paid</span>
                    </div>
                </div>
            </div>


            <div>
                <label>Content</label>
    <?php lcm_editor('', 'summary', array('textarea_rows' => 12)); ?>
                <span class="lcm_popup_info"><i class="fas fa-info-circle"></i>Some description about what they can enter here, formating, html</span>
            </div>
        </div>
        <?php
        //_lcm_dropdown_selector('price', NULL, array('Free', 'Paid', 'Premium'), 'Price');
        lcmf_popup_form_closed($module_detail);
    }
    ?>
</div>


