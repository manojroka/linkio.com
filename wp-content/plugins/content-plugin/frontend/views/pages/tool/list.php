<div class="lcm_ContentPlugin">
    <div class="lcm_container lcm_col-md-10 lcm_margin_auto">
        <input type="hidden" id="lcm_home_url" value="<?= HOME_URL ?>">

        <?php include '_filter_form.php'; ?>
        
        <div class="lcm_box_shadow lcm_paddinglr1030" id="lcm_list">
            <?php foreach ($data as $value) { ?>
                <div class="tool_lists" data-id="<?= $value->id ?>" data-tool_name="<?= $value->tool_name ?>" data-vote="<?= $value->vote_count ?>"> 
                    <div class="lcm_flex lcm_row lcm_paddingbuttom_25">
                        <div class="lcm_col-md-10">
                            <a class="lcm_h2" href="<?=$value->home_page_url?>" target="blank_"><u><?= $value->tool_name ?></u></a>
                            <br>
                            <div class="lcm_vote lcm_margin_t10 lcm_border_around lcm_float_left">
                                <a href="javascript:void(0)" class="update_vote" data-vote_count= "'<?=$value->vote_count?>'" data-id="'<?=$value->id?>'" data-template_id="'<?=$value->template_id?>'" data-module="tool" data-module_id="'<?=$value->module_id?>'">
                                    <i class="fa fa-caret-up"></i>
                                    <span class="num-vote">Votes: <?=$value->vote_count?></span>
                                </a>
                            </div>
                            
                            <div class="lcm_margin_t10 lcm_border_around lcm_float_left">
                                <?= $value->price ?>
                            </div>
                            
                            <div class="lcm_margin_t10 lcm_border_around lcm_float_left">
                                some blog name(new field)
                            </div>
                            
                        </div>
                        
                        
                        <div class="lcm_col-md-10">
                            <div class="lcm_i_logo lcm_float_right">
                                <?php $images = (array) json_decode($value->images); ?>
                                <a href="<?= LCM_PLUGIN_IMG_UPLOAD_BASE_DIR . $image->img_path ?>" target="blank_">
                                    <img src="<?= LCM_PLUGIN_IMG_UPLOAD_BASE_DIR . $images[0]->img_path ?>">
                                </a>
                            </div>
                        </div>
                        
                    </div>

                    <div class="lcm_desc lcm_paddingbuttom_25">
                        <?= $value->summary; ?>
                        <!---------- videos section------------>
                        <?php if (lcm_video_iframes($value->videos) != NULL) { ?>
                        
                            <?php echo lcm_video_iframes($value->videos); ?>
                        <?php } ?>
                    </div>
                    
                    <div class="lcm_row">
                        <div class="lcm_clear_both lcm_border_bottom">&nbsp;</div>
                    </div>
                    
                </div>
            <?php } ?>
        </div>
    </div>
</div>

