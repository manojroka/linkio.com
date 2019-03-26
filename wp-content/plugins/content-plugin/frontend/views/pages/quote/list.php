<div class="lcm_ContentPlugin">
    <div class="lcm_container lcm_col-md-10 lcm_margin_auto">
        <input type="hidden" id="lcm_home_url" value="<?= HOME_URL ?>">

        <?php include '_filter_form.php'; ?>

        <div class="lcm_box_shadow lcm_padding30" id="lcm_list">
            <?php foreach ($data as $value) { ?>
            <div class="">
                    <div>
                        <div class="lcm_flex lcm_row">
                            <div class="lcm_col-md-10">
                                <div class="lcm_h2"><?= $value->title ?></div>
                            </div>
                            <div class="lcm_col-md-2">
                                <div class="lcm_vote lcm_border_around lcm_float_right">
                                    <a href="javascript:void(0)" class="update_vote" data-vote_count= "'<?=$value->vote_count?>'" data-id="'<?=$value->id?>'" data-template_id="'<?=$value->template_id?>'" data-module="quote" data-module_id="'<?=$value->module_id?>'">
                                    <i class="fa fa-caret-up"></i>
                                    <span class="num-vote">Votes: <?=$value->vote_count?></span>
                                    </a>
                                </div>
                            </div>
                            
                        </div>
                        
                        <div class="lcm_desc">
                            <?php if ($value->headshot != '') { ?>
                                <img src='<?= LCM_PLUGIN_IMG_UPLOAD_BASE_DIR . $value->headshot ?>' alt='headshot image'>                
                            <?php } ?>
                                
                            <?php echo $value->quote_description ?>
                                
                        </div>
                        <div class="lcm_row">
                        <div class="lcm_clear_both lcm_float_right">
                            by <strong><?=$value->name?></strong>, CTO at 
                            <a href="<?= $value->company_website ?>" target="_blank" rel="<?= $value->is_weburl_df ?>" ><u><?= $value->company ?></u></a>
                            
                        </div>
                            <div class="lcm_clear_both lcm_border_bottom">&nbsp;</div>
                        </div>
                    </div>
                
                </div>
            
            <?php } ?>
        </div>
    </div>
</div>
