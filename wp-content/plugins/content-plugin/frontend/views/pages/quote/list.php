<div class="lcm_plugin">
    <div class="lcm_quote_page">
        <input type="hidden" id="lcm_home_url" value="<?= HOME_URL ?>">
        <div class="lcm_left_column">
            <?php include '_filter_form.php'; ?>
        </div>
        <div class="lcm_right_column" id="lcm_list">
            <?php foreach ($data as $value) { ?>
                <div class="list_lcm_right_background">
                    <div class="lcm-list-title">
                        <h2><?= $value->title ?></h2>
                        <?php lcm_vote_update($value); ?>
                    </div>
                    <div style="clear: both;">
                        <div class="lcm_info">
                            <div>
                                
                                <div style="width:100%; text-align: right;margin-bottom: 0em;">
                                    <i class="fas fa-external-link-alt"></i><h6>Company:</h6>
                                    
                                    <?php if($value->company_website == ''){ ?>
                                    <?= $value->company ?>
                                    <?php }else{ ?>
                                    <a href="<?= $value->company_website ?>" target="_blank" rel="<?= $value->is_weburl_df ?>" ><u><?= $value->company ?></u></a>
                                    <?php } ?>
                                    
                                    
                                </div>
                                
                                <div>
                                    <?php if ($value->headshot != '') { ?>
                                        <img class="lcm_logo" src='<?= LCM_PLUGIN_IMG_UPLOAD_BASE_DIR . $value->headshot ?>' alt='headshot image'>                
                                    <?php } ?>
                                </div>
                            </div>
                            
                            <div class="">
                                <div class="lcm-description">
                                    <!--<i class="fas fa-pencil-alt"></i><h6>Quote:</h6>-->
                                    <p><?php // echo $value->quote_description ?></p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
