<?php _open_lcm_admin_item_form(); ?>
<table class="form-table">
    <tr>
        <th>
            <label>Tactic name*</label>
        </th>
        <td>
            <input class="regular-text limit_title" type="text" value="<?= $this->flash_notice->form_value('tactic_name') ?>" name="tactic_name" required>
        </td>
    </tr>
    <tr>
        <th>
            <label>Tactic Description* </label>
        </th>
        <td>
            <?php wp_editor($this->flash_notice->form_value('tactic_description'), "tactic_description", array('textarea_rows' => '8')); ?>
        </td>
    </tr>
    <tr>
        <th>
            <label>Status*:</label>
        </th>
        <td>					
            <?php lcm_admin_dropdown_selector('status', NULL, array('Suggested', 'New', 'Published', 'Hidden', 'Spam')) ?>
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
            <label>Company Url </label>
        </th>
        <td>
            <input class="regular-text" type="url" value="<?= $this->flash_notice->form_value('company_url') ?>" name="company_url">
        </td>
    </tr>
    <tr>
        <th>
            <label>Job Position </label>
        </th>
        <td>
            <input class="regular-text" type="text" value="<?= $this->flash_notice->form_value('job_position') ?>" name="job_position">
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
                    <input name="lcm_btn_expand" type="text" value="Show more...">
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
            <label>Tools included</label> 
        </th>
        <td>
            <div>
                <input class="regular-text" type="text" name="tool_included_name[]">
                <input class="regular-text" type="url" name="tool_included_url[]">
                <input type="hidden" value="0" name="tool_included_df[]">
                <input class="regular-text" type="checkbox" name="tool_included_df[]">DF
                <button class="add_tactic_field">Add New<span>+ </span></button>
            </div>
            <div class="add_new_tactic"></div>
        </td>
    </tr>
    <tr>
        <th>
            <label>Types of tools used</label> 
        </th>
        <td>		
            <?php lcm_admin_dropdown_selector('tool_types', NULL, array('Free', 'Paid')) ?>
        </td>
    </tr>
    <tr>
        <th>
            <label>Category </label> 
        </th>
        <td>
            <div id="categories_list">
                <?php if (count((array) $data['categories']) > 0) { ?>
                    <select multiple="" name="category[]" id="lcm-selected-category">
                        <?php foreach ($data['categories'] as $category) { ?>
                            <option class="regular-text" value="<?= $category->id ?>"><?= $category->name ?></option>
                        <?php } ?>
                    </select>
                <div class="button button-delete" id="lcm-delete-category">Delete Category<span> -</span></div>
                <?php } ?>
            </div>
            <input type="hidden" id="lcm_home_url" value="<?= HOME_URL ?>">
            <input type="hidden" id="module" value="<?= $_GET['module'] ?>">
            <input class="regular-text" type="text" id="cat_name">
            <div class="button button-primary" id="add_new_category">Add New<span>+ </span></div>
        </td>
    </tr>
</table>
<?php _close_lcm_admin_item_form(); ?>
