<div class="lcm_plugin">
    <div class="lcm_websile_page">
        <input type="hidden" id="lcm_home_url" value="<?= HOME_URL ?>">
        <div class="lcm_left_column">
            <?php include '_filter_form.php'; ?>
        </div>
        <div class="lcm_right_column" id="lcm_list">
            <?php foreach ($data as $value) { ?>
                <div class="list_lcm_right_background">
                    <div style="clear: both;">
                        <h2 class="title title-text" style="float: left"><strong><?= $value->website_name ?></strong></h2>
                        <?php lcm_vote_update($value); ?>
                    </div>
                    <div style="clear: both;">
                        <div class="lcm_info">
                            
                                <?php if ($value->website_logo != '') { ?>
                                <div>
                                    <label>Logo:</label>
                                    <img class="lcm_logo" src="<?= LCM_PLUGIN_IMG_UPLOAD_BASE_DIR . $value->website_logo ?>" alt="Web Logo Image">
                                </div>
                                <?php } ?>
                            
                            <div class="">
                                <div class="lcm_two_column">
                                    <div class="lcm_column_one">
                                        <i class="fas fa-external-link-alt"></i><h6>Company Website:</h6>
                                        <a class="noDecoration" href="<?= $value->website_url ?>" target="_blank" rel="<?= $value->is_weburl_df ?>" ><?= $value->website_url ?></a>
                                    </div>
                                </div>
                            </div>
<!--                            <div class="">
                                <div class="lcm_two_column">    
                                    <div class="lcm_column_two">
                                        <i class="far fa-check-circle"></i><h6>Status:</h6>
                                        <?= $value->status ?>
                                    </div>
                                </div>
                            </div>-->
                            <div class="lcm-description">
                                <i class="fas fa-pencil-alt"></i><h6>Description:</h6>
                                <p><?= $value->website_description ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>