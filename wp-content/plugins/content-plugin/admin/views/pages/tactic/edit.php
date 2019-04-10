<?php _open_lcm_admin_item_form(); ?>
<table class="form-table">
    <tr>
    <tr>
        <th>
            <label>Tactic name*</label>
        </th>
        <td>
            <input class="regular-text limit_title" type="text" name="tactic_name" value="<?= $data->tactic_name ?>" required>
        </td>
    </tr>
    <tr>
        <th>
            <label>Tactic Description* </label>
        </th>
        <td>
            <?php wp_editor($data->tactic_description, "tactic_description", array('textarea_rows' => '8')); ?>
        </td>
    </tr>
    <tr>
        <th>
            <label>Status*:</label>
        </th>
        <td>
            <?php lcm_admin_dropdown_selector('status', $data->status, array('Suggested', 'New', 'Published', 'Hidden', 'Spam')) ?>
        </td>
    </tr>
    <tr>
        <th>
            <label>Name </label> 
        </th>
        <td>
            <input class="regular-text" type="text" name="name" value="<?= $data->name ?>">
        </td>
    </tr>
    <tr>
        <th>
            <label>Email  </label>
        </th>
        <td>					
            <input class="regular-text" type="Email" name="email" value="<?= $data->email ?>">
        </td>
    </tr>
    <tr>
        <th>
            <label>Company </label>
        </th>
        <td>
            <input class="regular-text" type="text" name="company" value="<?= $data->company ?>">
        </td>
    </tr>
    <tr>
        <th>
            <label>Company Url </label>
        </th>
        <td>
            <input class="regular-text" type="url" name="company_url" value="<?= $data->company_url ?>">
        </td>
    </tr>
    <tr>
        <th>
            <label>Job Position </label>
        </th>
        <td>
            <input class="regular-text" type="text" name="job_position" value="<?= $data->job_position ?>">
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
                    <input name="lcm_btn_expand" value="<?= json_decode($data->collapse_expand)->lcm_btn_expand ?>" type="text">
                </div>
                <div class="lcm_tool_colsp_btn">
                    <label>Collapse:</label>
                    <input name="lcm_btn_collapse" value="<?= json_decode($data->collapse_expand)->lcm_btn_collapse ?>" type="text"><br>
                </div>
            </div>    
        </td>
    </tr>
    <tr>
        <th>
            <label>Tools included</label> 
        </th>
        <td>
            <?php
            $c = 0;
            foreach (json_decode($data->tool_included)->tool_included_name as $tool_included_name) {
                $checked = '';
                if (json_decode($data->tool_included)->tool_included_df[$c] == 'on') {
                    $checked = 'checked';
                }
                echo '<div>';
                echo '<input class="regular-text" type="text" name="tool_included_name[]" value="' . $tool_included_name . '" required>';
                echo '&nbsp;<input class="regular-text" type="url" name="tool_included_url[]" value="' . json_decode($data->tool_included)->tool_included_url[$c] . '" required>';
                echo '<input type="hidden" value="0" name="tool_included_df[]">';
                echo '&nbsp;<input class="regular-text" ' . $checked . ' type="checkbox" name="tool_included_df[]">DF';
                echo '&nbsp;<span class="tool_include_delete">Delete</span>';
                echo '</div>';
                $c++;
            }
            ?>
            <div>
                <input class="regular-text" type="text" name="tool_included_name[]">
                <input class="regular-text" type="url" name="tool_included_url[]">
                <input type="hidden" value="0" name="tool_included_df[]">
                <input class="regular-text" type="checkbox" name="tool_included_df[]">DF
                <button class="add_tactic_field">Add New<span style="font-size:16px; font-weight:bold;">+ </span></button>
            </div>
            <div class="add_new_tactic"></div>
        </td>
    </tr>
    <tr>
        <th>
            <label>Types of tools used</label> 
        </th>
        <td>
<?php lcm_admin_dropdown_selector('tool_types', $data->tool_types, array('Free', 'Paid')) ?>
        </td>
    </tr>
    <tr>
        <th>
            <label>Category </label> 
        </th>
        <td>
            <div id="categories_list">
                <?php
                if (count((array) $data->categories) > 0) {  ;
                    $selected_category = [];
                    if (json_decode($data->category) != NULL) {
                        $selected_category = json_decode($data->category);
                    }
                    ?>
                <select multiple="" name="category[]" id="lcm-selected-category">
                        <?php foreach ($data->categories as $category) { ?>
                            <option <?php if (in_array($category->id, $selected_category)) {
                                echo 'selected';
                            } ?> class="regular-text" value="<?= $category->id ?>"><?= $category->name ?></option>
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