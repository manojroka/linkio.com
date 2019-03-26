
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

        <div class="lcm_col-md-2" onclick="open_popup_form('tool')">
            <input type="button" placeholder="Add New Item" value="Add New Item">
        </div>
    </div>
    <div class="lcm_row">
        <div class="lcm_clear_both lcm_padding_lr15">
            Sort By: 
            <select>
                <option>value</option>
                <option>value1</option>
            </select>
        </div>
    </div>
<?php } ?>
    
    
    <?php
    if (isset($submit_form)) {
        lcmf_popup_form_open($module_detail);
        ?>
        <label>Tool name*</label>
        <input class="form-control limit_word" type="text" name="tool_name" required>
        <label>Tool home page URL*</label>
        <input class="form-control" type="url" name="home_page_url" value="" required>
        <label>Summary*</label>
        <?php lcm_editor('','summary', array('textarea_rows' => 4)); ?>
        <label>Description*</label>
        <?php lcm_editor('','description', array('textarea_rows' => 6)); ?>
        <?php _lcm_dropdown_selector('status', NULL, array('Suggested', 'New', 'Published', 'Hidden', 'Spam'), 'Status*') ?>
        <label>Additional links</label>
        <div class="lcm_tools_inc">
            <input class="form-control" type="text" name="link_name[]" placeholder="link title">
            <input class="form-control" type="url" name="link_url[]" placeholder="link url">
            <input type="hidden" value="0" name="link_df[]">
            <label class="cb-checkbox">
                <input type="checkbox" name="link_df[]">DF                    
            </label>
            <textarea name="link_desc[]" placeholder="link description" class="tool-pop-desc"></textarea>
            <div class="lcm_anchor-btn lcm_anchor_small-btn lcm-add-more-btn" id="lcm_add_link_btn">Add New</div>
        </div>
        <div class="add_new_link_field"></div>
<?php _lcmf_name_email_company_input(); ?>
        <label>Images</label>
        <div class="lcm_tool_img_form_inline">
            <input class="form-control" type="text" name="img_caption[]">&nbsp;
            <input class="form-control" type="file" name="img_path[]" accept="image/*" value="Upload">&nbsp;
            <div class="lcm_anchor-btn lcm_tool_img_add_btn lcm-add-more-btn" id="new_tool_img">Add New</div>
        </div>
        <div class="add_new_tool_img"></div>

        <label>Videos:</label> 
        <div class="lcm_tool_img_form_inline">
            <input class="form-control" type="text" name="videos[]" placeholder="Give vimeo or youtube links">&nbsp;
            <div class="lcm_anchor-btn lcm_tool_vdo_add_btn lcm-add-more-btn" id="add_new_tool_vid_link">Add New </div>
        </div>
        <div class="add_form_field_vid"></div>

        <div>
            <label>Expand/Collapse Button Label</label>
            <div class="lcm_expand_collapse">
                <div class="lcm_tool_expnd_btn">
                    <label>Expand</label>
                    <input class="form-control" id="tool_btn_expand" name="lcm_btn_expand" type="text" value="Show More...">
                </div>
                <div class="lcm_tool_colsp_btn">
                    <label>Collapse</label>
                    <input class="form-control" id="tool_btn_collapse" name="lcm_btn_collapse" type="text" value="Show Less">
                </div>
            </div>
        </div>

        <?php if(isset($types)){  if(count((array)$types)>0){ ?>
        <label>Type*</label>
        <select class="form-control" multiple name="type[]" style="height: 70px !important;" required>
            <?php foreach ($types as $type) { ?>
            <option value="<?=$type->id?>"><?=$type->name?></option>
            <?php } ?>
        </select>
        <?php } } ?>
        <?php
        _lcm_dropdown_selector('price', NULL, array('Free', 'Paid', 'Premium'), 'Price');
        lcmf_popup_form_closed($module_detail);
    }
    ?>
</div>


