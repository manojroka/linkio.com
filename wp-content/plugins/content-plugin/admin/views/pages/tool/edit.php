<?php _open_lcm_admin_item_form(); ?>
<table class="form-table">
    <tr>
        <th>
            <label>Tool name*</label>
        </th>
        <td>
            <input class="regular-text limit_title" type="text" name="tool_name" value="<?= $data->tool_name ?>" required="">
        </td>
    </tr>
    <tr>
        <th>
            <label>Tool home page URL*</label>
        </th>
        <td>
            <input class="regular-text" type="url" name="home_page_url" value="<?= $data->home_page_url ?>" required>
        </td>
    </tr>
    <tr>
        <th>
            <label>Summary</label>
        </th>
        <td>
            <?php wp_editor($data->summary, "summary", array('textarea_rows' => '6')); ?>   
        </td>
    </tr>
    <tr>
        <th>
            <label>Description*</label>
        </th>
        <td>
            <?php wp_editor($data->description, "description", array('textarea_rows' => '8')); ?>
        </td>
    </tr>
    <tr>
        <th>
            <label>Status </label>
        </th>
        <td>
            <?php lcm_admin_dropdown_selector('status', $data->status, array('Suggested', 'New', 'Published', 'Hidden', 'Spam')) ?>
        </td>
    </tr>
    <tr>

    <tr>
        <th>
            <label>Additional links</label>
        </th>
        <td>
            <?php
            $additional_link = lcm_json_convert_to_array_type($data->additional_links);
            if($additional_link != NULL){
                foreach ($additional_link as $key => $link) { ?>
                <div>
                    <input class="regular-text" type="text" name="link_name[]" value="<?=$link['link_name']?>" required>
                    <input class="regular-text" type="url" name="link_url[]" value="<?=$link['link_url']?>" required>
                    <input type="hidden" value="0" name="link_df[]">
                    <input class="regular-text" <?php if($link['link_df'] == 'on'){echo 'checked';} ?> type="checkbox" name="link_df[]">DF
                    <textarea name="link_desc[]" class="addnal-link-desc"><?=$link['link_desc']?></textarea>
                    <div class="lcm-remove-btn-sm delete_link">Delete<span>-</span></div>
                </div>
            <?php    }   
            }
            ?>
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
            <input class="regular-text" type="text" name="name" value="<?= $data->name ?>">
        </td>
    </tr>
    <tr>
        <th>
            <label>Email </label>
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
            <label>Images</label>
        </th>
        <td><div>
                <div>
<?php
if ($data->images != '') {
    foreach ((object) json_decode($data->images) as $image) {
        ?>
                            <input type="hidden" name="old_path_img[]" value="<?= $image->img_path ?>">
                            <div class="lcm_tool_imgs">
                                <input type="hidden" name="path_caption[]" value="<?= $image->img_caption ?>">
                                <input type="hidden" name="path_img[]" value="<?= $image->img_path ?>">
                                <p class="lcm_tool_img_caption"><?= $image->img_caption ?></p>
                                <img class="lcm_tool_img" src="<?= LCM_PLUGIN_IMG_UPLOAD_BASE_DIR . $image->img_path ?>" alt="tool Image" height="50" width="50">
                                <div class="lcm_tool_img_delete">delete</div>
                            </div>
    <?php }
} ?>
                </div>
                <!--<input class="regular-text" type="text" name="img_caption[]" placeholder="">-->
                <input class="regular-text" type="file" name="img_path[]" accept="image/*">
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
                <?php if ($data->videos != '' || $data->videos != NULL ) {
                    $videos = json_decode($data->videos);
                    foreach ($videos as $key => $video_url) { ?>
                        <div><input class="regular-text" type="text" name="videos[]" value = "<?=$video_url?>">
                        <a href="javascript:void(0)" class="delete_video_url">Delete</a></div>
                    <?php } } ?>
                    <input class="regular-text" type="text" name="videos[]" placeholder="Give either vimeo or youtube links">
                    <div class="lcm-add-new-btn-sm add_form_field_vid" >Add New<span> +</span></div>
                    <!--<button class="add_form_field_vid lcm-add-new-btn-sm">Add New<span style="font-size:16px; font-weight:bold;">+ </span></button>-->
                </div>
                <div class="add_new_tool_vid_link"></div>
            </div>
            <!--<input class="regular-text" type="file" name="videos" accept="video/*" value="Upload">-->
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
            <label>Type* </label> 
        </th>
        <td>
            
            <div id="types_list">
                <?php
                if (count((array) $data->types) > 0) {
                    $selected_type = [];
                    if (json_decode($data->type) != NULL) {
                        $selected_type = json_decode($data->type);
                    }
                    ?>
                <select multiple="" name="type[]" id="lcm-selected-type">
                        <?php foreach ($data->types as $type) { ?>
                            <option <?php if (in_array($type->id, $selected_type)) {
                                echo 'selected';
                            } ?> class="regular-text" value="<?= $type->id ?>"><?= $type->name ?></option>
                        <?php } ?>
                    </select>
                <div class="button button-delete" id="lcm-delete-type">Remove<span> -</span></div>
                <?php } ?>
            </div>
            <input type="hidden" id="lcm_home_url" value="<?= HOME_URL ?>">
            <input type="hidden" id="module" value="<?= $_GET['module'] ?>">
            <input class="regular-text" type="text" id="typ_name">
            <div class="button button-primary" id="add_new_type">Add New<span>+ </span></div>
        </td>
    </tr>
    <tr>
        <th>
            <label>price</label> 
        </th>
        <td>
            <?php lcm_admin_dropdown_selector('price', $data->price, array('Free', 'Paid', 'Premium')) ?>
        </td>
    </tr>
</table>
<?php _close_lcm_admin_item_form(); ?>