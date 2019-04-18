<?php _open_lcm_admin_item_form(); ?>
<table class="form-table">
    <tr>
        <th>
            <label>Tool name*</label>
        </th>
        <td>
            <input class="regular-text limit_title" type="text" name="tool_name" value="<?= $this->flash_notice->form_value('tool_name') ?>" required>
        </td>
    </tr>
    <tr>
        <th>
            <label>Tool home page URL*</label>
        </th>
        <td>
            <input class="regular-text" type="url" name="home_page_url" value="<?= $this->flash_notice->form_value('home_page_url') ?>" required>
        </td>
    </tr>
    <tr>
        <th>
            <label>Summary</label>
        </th>
        <td>
            <?php wp_editor($this->flash_notice->form_value('summary'), "summary", array('textarea_rows' => '6')); ?>   
        </td>
    </tr>
    <tr>
        <th>
            <label>Description</label>
        </th>
        <td>
            <?php wp_editor($this->flash_notice->form_value('description'), "description", array('textarea_rows' => '8')); ?>
        </td>
    </tr>
    <tr>
        <th>
            <label>Status </label>
        </th>
        <td>					
            <?php lcm_admin_dropdown_selector('status', NULL, array('Suggested', 'New', 'Published', 'Hidden', 'Spam')) ?>
        </td>
    </tr>
    <tr>
        <th>
            <label>Additional links</label>
        </th>
        <td>
            <div>
                <input class="regular-text" type="text" name="link_name[]" placeholder="link name">
                <input class="regular-text" type="url" name="link_url[]" placeholder="link url">
                <input type="hidden" value="0" name="link_df[]">
                <input class="regular-text" type="checkbox" name="link_df[]">DF
                <textarea name="link_desc[]" placeholder="link description" class="addnal-link-desc"></textarea>
                <div class="lcm-add-new-btn-sm" id="add_link_btn">Add New<span> +</span></div>
            </div>
            <div class="new_link_field"></div>
        </td>
    </tr>
    <tr>
        <th>
            <label>Name </label> 
        </th>
        <td>
            <input class="regular-text" type="text" value="<?= $this->flash_notice->form_value('name') ?>" name="name">
        </td>
    </tr>
    <tr>
        <th>
            <label>Email  </label>
        </th>
        <td>					
            <input class="regular-text" type="email" value="<?= $this->flash_notice->form_value('email') ?>" name="email">
        </td>
    </tr>
    <tr>
        <th>
            <label>Company </label>
        </th>
        <td>
            <input class="regular-text" type="text" value="<?= $this->flash_notice->form_value('company') ?>" name="company">
        </td>
    </tr>
    <tr>
        <th>
            <label>Images</label>
        </th>
        <td>
            <div>
                <!--<input class="regular-text" type="text" name="img_caption[]" placeholder="Enter Image Caption Here">-->
                <input class="regular-text" type="file" name="img_path[]" accept="image/*" value="Upload">
                <button class="add_form_field">Add New<span style="font-size:16px; font-weight:bold;">+ </span></button>
            </div>
            <div class="add_new_tool_img"></div>
        </td>
    </tr>
    <tr>
        <th>
            <label>videos</label>
        </th>
        <td>					
            <div class="video-frame">
                <div>
                    <input class="regular-text" type="text" name="videos[]" placeholder="Give either vimeo or youtube links">
                    <button class="add_form_field_vid">Add New<span style="font-size:16px; font-weight:bold;">+ </span></button>
                </div>
                <div class="add_new_tool_vid_link"></div>
            </div>
        </td>
    </tr>
    <tr>
        <th>
            <label>Expand/Collapse Button Label</label>
        </th>
        <td>
            <div>
                <div class="lcm_tool_expnd_btn">
                    <label>Expand:</label>
                    <input name="lcm_btn_expand" type="text" value="Show more…">
                </div>
                <div class="lcm_tool_colsp_btn">
                    <label>Collapse:</label>
                    <input name="lcm_btn_collapse" type="text" value="Show less"><br>
                </div>
                <!--<input class="regular-text" type="text" name="collapse_expand" value="">-->
            </div>
        </td>
    </tr>
    <tr>
        <th>
            <label>Type </label> 
        </th>
        <td>
            
            <div id="types_list">
                <?php if (count((array) $data['types']) > 0) { ?>
                <select multiple="" name="type[]" required id="lcm-selected-type">
                        <?php foreach ($data['types'] as $type) { ?>
                            <option class="regular-text" value="<?= $type->id ?>"><?= $type->name ?></option>
                        <?php } ?>
                </select>
                <div class="button button-delete" id="lcm-delete-type">Remove<span> -</span></div>
                <?php } ?>
            </div>
            <input type="hidden" id="lcm_home_url" value="<?= HOME_URL ?>">
            <input type="hidden" id="module" value="<?= $_GET['module'] ?>">
            <input class="regular-text" type="text" id="typ_name">
            <div class="button button-primary" id="add_new_type">Add New<span>+ </span></div>
            <!--<input class="regular-text" type="text" name="types" value="" required>-->
        </td>
    </tr>
    <tr>
        <th>
            <label>Price</label> 
        </th>
        <td>
            <?php lcm_admin_dropdown_selector('price', NULL, array('Free', 'Paid', 'Premium')) ?>
        </td>
    </tr>
</table>
<?php _close_lcm_admin_item_form(); ?>