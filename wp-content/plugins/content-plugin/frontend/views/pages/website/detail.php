<div id="lcm_detial" class="lcm_plugin">
    <input type="hidden" id="lcm_home_url" value="<?= HOME_URL ?>">
    <div id="lcm_list" class="detail_lcm_right_background">
        <div style="clear: both;">
            <h2 class="title title-text" style="float: left"><strong><?= $detail->website_name ?></strong></h2>
            <?php lcm_vote_update($detail); ?>
        </div>
        <div class="lcm_clear_both">
            <div class="lcm_info">
                <div>
                    <div>
                        <?php if ($detail->website_logo != '') { ?>
                            <img class="lcm_logo" src="<?= wp_upload_dir()['baseurl'] . $detail->website_logo ?>" alt="Web Logo Image">
                        <?php } ?>
                    </div>
                </div>
                <div class="lcm_two_column">    
                    <div class="lcm_column_two">
                        <i class="far fa-check-circle"></i><h6>Status:</h6>
                        <?= $detail->status ?>
                    </div>
                </div>
                <div class="">
                    <div class="lcm_two_column">
                        <div class="lcm_column_one">
                            <i class="fas fa-external-link-alt"></i><h6>Company Website:</h6>
                            <a class="noDecoration" href="<?= $detail->website_url ?>" target="_blank"><?= $detail->website_url ?></a>
                        </div>
                    </div>
                    <div class="lcm_two_column">    
                        <div class="lcm_column_two">
                            <i class="fas fa-tags"></i><h6>Main Template:</h6>
                            <?= $detail->module_template_name ?>
                        </div>
                    </div>
                </div>
                <div>
                    <i class="fas fa-pencil-alt"></i><h6>Description:</h6>
                    <p><?= ($detail->website_description) ?></p>
                </div>
            </div>
        </div>
    </div>
</div>