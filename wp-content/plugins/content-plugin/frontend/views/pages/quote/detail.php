<div id="lcm_detial" class="lcm_plugin">
    <input type="hidden" id="lcm_home_url" value="<?= HOME_URL ?>">
    <div id="lcm_list" class="detail_lcm_right_background">
        <div class="lcm_clear_both">
            <h2 class="title title-text" style="float: left"><strong><?= $detail->title ?></strong></h2>
            <?php lcm_vote_update($detail); ?>
        </div>
        <div class="lcm_clear_both">  
            <div class="lcm_info">
                <div>
                    <div>
                        <?php if ($detail->headshot != '') { ?>
                            <img class="lcm_logo" src='<?= LCM_PLUGIN_IMG_UPLOAD_BASE_DIR . $detail->headshot ?>' alt='headshot image'>                
                        <?php } ?>
                    </div>
                    <h3><strong>Company:</strong></h3>
                    <h3><?= $detail->company ?></h3>
                </div>
                <div>
                    <h3><strong>Name:</strong></h3>
                    <h3><?= $detail->name ?></h3>
                </div>
                <div class="">
                    <div class="lcm_two_column">
                        <div class="lcm_column_one"><i class="far fa-envelope"></i><h6>Email To:</h6>
                            <a class="noDecoration" href="mailto:<?= $detail->email ?>" target="_blank"> <?= $detail->email ?> 
                            </a>
                        </div>
                    </div>
                    <div class="lcm_two_column">    
                        <div class="lcm_column_two">
                            <i class="far fa-check-circle"></i><h6>Status:</h6>
                            <?= $detail->status ?>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="lcm_two_column">
                        <div class="lcm_column_one">
                            <i class="fas fa-external-link-alt"></i><h6>Company Website:</h6>
                            <a class="noDecoration" href="<?= $detail->company_website ?>" target="_blank"><?= $detail->company_website ?></a>
                        </div>
                    </div>
                    <div class="lcm_two_column">    
                        <div class="lcm_column_two">

                        </div>
                    </div>
                </div>
                <div class="lcm-description">
                    <!--<i class="fas fa-pencil-alt"></i><h6>Description:</h6>-->
                    <p><?= $detail->quote_description ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

