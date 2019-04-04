<div class="lcm_ContentPlugin">
    <div class="lcm_container lcm_col-md-10 lcm_margin_auto">
        <input type="hidden" id="lcm_home_url" value="<?= HOME_URL ?>">
        <div class="lcm_box_shadow lcm_paddinglr10300030" id="lcm_list">
            <?php foreach ($data as $value) { ?>
                <div class="">
                    <div class="lcm_flex lcm_row lcm_paddingbuttom_25">
                        <div class="lcm_col-md-10">
                            <a class="lcm_h2" href="<?= $value->website_url ?>" target="_blank"><u><?= $value->website_name ?></u></a>
                            <br>
                            <div class="lcm_vote lcm_margin_t10 lcm_border_around lcm_float_left">
                                <?php lcm_vote_update($value); ?>
                            </div>
                        </div>
                        <div class="lcm_col-md-10">
                            <div class="lcm_i_logo lcm_float_right">
                                <?php if ($value->website_logo != '') { ?>
                                    <img src='<?= LCM_PLUGIN_IMG_UPLOAD_BASE_DIR . $value->website_logo ?>' alt='web logo'>                
                                <?php } ?>
                            </div>
                        </div>
                    </div>      
                    <div class="lcm_desc lcm_paddingbuttom_25">
                        <?php echo $value->website_description ?>
                    </div>
                    <div class="lcm_row">
                        <div class="lcm_clear_both lcm_border_bottom">&nbsp;</div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <?php include '_filter_form.php'; ?>
    </div>
</div>