<div class="lcm_ContentPlugin">
    <div class="lcm_container">
        <input type="hidden" id="lcm_home_url" value="<?= HOME_URL ?>">
        <div class="lcm_row lcm_border_around">
                <div class="lcm_col-md-7">
                    
                </div>
                <div class="lcm_col-md-2">
                    
                </div>
                <div class="lcm_col-md-1">
                    <P>OR</p>
                </div>
                <div class="lcm_col-md-2">
                    <div class="">
                        <?php include '_filter_form.php'; ?>
                    </div>
                </div>
        </div>
        
        
        
        
        <div class="" id="lcm_list">
            <?php foreach ($data as $value) { ?>
                <div>
                    <div>
                        <h2><?= $value->title ?></h2>
                        <?php lcm_vote_update($value); ?>
                    </div>
                    <div>
                        <div>
                            <div>
                                <div>
                                    <i class="fas fa-external-link-alt"></i><h6>Company:</h6>
                                    <?php if($value->company_website == ''){ ?>
                                    <?= $value->company ?>
                                    <?php }else{ ?>
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
                    </div>
                </div>
            <?php } ?>
        </div>
        
    </div>
</div>
