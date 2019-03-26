<div class="lcm_ContentPlugin">
    <div class="lcm_container lcm_col-md-10 lcm_margin_auto">
        <input type="hidden" id="lcm_home_url" value="<?= HOME_URL ?>">

        <?php include '_filter_form.php'; ?>

        <div class="lcm_box_shadow lcm_padding30" id="lcm_list">
            <?php foreach ($data as $value) { ?>
            <div class="lcm_border_bottom">
                    <div>
                        <div>
                            <i class="fas fa-external-link-alt"></i><h6>Company:</h6>
                                <?php if ($value->company_website == '') { ?>
                                    <?= $value->company ?>
                                <?php } else { ?>
                                <a href="<?= $value->company_website ?>" target="_blank" rel="<?= $value->is_weburl_df ?>" ><u><?= $value->company ?></u></a>
                            <?php } ?>
                        </div>
                        <div>
                            <?php if ($value->headshot != '') { ?>
                                <img src='<?= LCM_PLUGIN_IMG_UPLOAD_BASE_DIR . $value->headshot ?>' alt='headshot image'>                
                            <?php } ?>
                        </div>
                    </div>

                    <div>
                        <div>
                            <!--<i class="fas fa-pencil-alt"></i><h6>Quote:</h6>-->
                            <p><?php echo $value->quote_description ?></p>
                        </div>
                    </div>

                </div>
            <?php } ?>
        </div>

    </div>
</div>
