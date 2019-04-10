<div class="lcm_ContentPlugin">
    <div class="lcm_container lcm_col-md-10 lcm_margin_auto">
        <input type="hidden" id="lcm_home_url" value="<?= HOME_URL ?>">
        <?php include '_filter_form.php'; ?>
        <div class="lcm_box_shadow lcm_paddinglr10300030" id="lcm_list">
            <?php foreach ($data as $value) { ?>
            <div class="lcm-i-lists" data-id="<?=$value->id?>" data-rating="<?=$value->vote_count?>" data-i-title="<?= $value->tool_name ?>">
                    <div class="lcm_flex lcm_row lcm_paddingbuttom_25 lcm_mobile_inline_block">
                        <div class="lcm_col-md-10">
                            <a class="lcm_h2" href="<?=$value->home_page_url?>" target="blank_"><u><?= $value->tool_name ?></u></a>
                            <br>
                            <div class="lcm_vote lcm_margin_t10 lcm_border_around lcm_float_left">
                                <?php lcm_vote_update($value); ?>
                            </div>
                            <div class="lcm_margin_t10 lcm_border_around lcm_float_left lcm_margin_l06em">
                                <p><?= $value->price ?></p>
                            </div>
                            <?php lcm_tool_additional_links($value->additional_links); ?>
                        </div>
                        <div class="lcm_col-md-2 lcm_mobile_clear_both_float_left">
                            <div class="lcm_i_logo lcm_float_right lcm_mobile_float_left">
                                <?php $images = (array) json_decode($value->images); ?>
                                <a href="<?= LCM_PLUGIN_IMG_UPLOAD_BASE_DIR . $images[0]->img_path ?>" target="blank_">
                                    <img src="<?= LCM_PLUGIN_IMG_UPLOAD_BASE_DIR . $images[0]->img_path ?>">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="lcm_desc lcm_paddingbuttom_25">
                        <?= $value->description; ?>
                        <div class="lcm_clear_both">&nbsp;</div>
                        <!---------- videos section------------>
                        <div class="lcm_margin_auto">
                        <?php if (lcm_video_iframes($value->videos) != NULL) { ?>
                        
                            <?php echo lcm_video_iframes($value->videos); ?>
                        <?php } ?>
                        </div>
                    </div>
                    <div class="lcm_row">
                        <div class="lcm_clear_both lcm_border_bottom">&nbsp;</div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>

