<div class="lcm_ContentPlugin">
    <div class="lcm_container lcm_col-md-10 lcm_margin_auto">
        <input type="hidden" id="lcm_home_url" value="<?= HOME_URL ?>">
        <?php include '_filter_form.php'; ?>
        <div class="lcm_box_shadow lcm_paddinglr10300030" id="lcm_list">
            <?php foreach ($data as $value) { ?>
                <div class="">
                    <div class="lcm_flex lcm_row lcm_paddingbuttom_25">
                        <div class="lcm_col-md-10">
                            <div class="lcm_h2"><?= $value->title ?></div>
                        </div>
                        <div class="lcm_col-md-2">
                            <div class="lcm_vote lcm_border_around lcm_float_right">
                                <?php lcm_vote_update($value); ?>
                            </div>
                        </div>
                    </div>
                    <div class="lcm_desc lcm_paddingbuttom_25">
                        <?php if ($value->headshot != '') { ?>
                            <img src='<?= LCM_PLUGIN_IMG_UPLOAD_BASE_DIR . $value->headshot ?>' alt='headshot image'>                
                        <?php } ?>
                        <?php echo $value->quote_description ?>
                    </div>
                    <div class="lcm_row">
                        <div class="lcm_clear_both lcm_float_right">
                            by <strong><?=$value->name?></strong>, <?=$value->job_position?> at 
                            <a href="<?= $value->company_website ?>" target="_blank" rel="<?= $value->is_weburl_df ?>" ><u><?= $value->company ?></u></a>
                        </div>
                        <div class="lcm_clear_both lcm_border_bottom">&nbsp;</div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
