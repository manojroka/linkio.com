<div id="lcm_detial" class="lcm_plugin">
    <input type="hidden" id="lcm_home_url" value="<?= HOME_URL ?>">
    <div id="lcm_list" class="detail_lcm_right_background">
        <div class="lcm_clear_both">
            <h2 class="title title-text" style="float: left"><strong><?= $detail->tool_name ?></strong></h2>
            <?php lcm_vote_update($detail); ?>
        </div>
        <div class="lcm_clear_both">
            <div class="lcm_info">
                <div>
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
                            <i class="fas fa-external-link-alt"></i><h6>Homepage Url:</h6>
                            <a class="noDecoration" href="<?= $detail->home_page_url ?>" target="_blank"><?= $detail->home_page_url ?></a>
                        </div>
                    </div>
                    <div class="lcm_two_column">
                        <div class="lcm_column_two">
                            <i class="fas fa-dollar-sign"></i><h6>Price:</h6>
                            <?= $detail->price ?>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="lcm_two_column">
                        <div class="lcm_column_one">
                            <i class="fas fa-list-ul"></i><h6>Types:</h6>
                            <?= $detail->types ?>
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
                    <i class="fas fa-pencil-alt"></i><h6>Summary:</h6><br>
                    <?= $detail->summary; ?>  
                </div>
                <div>
                    <i class="fas fa-link"></i><h6>Additional Links:</h6>
                    <?php lcm_aditional_links($detail->additional_links); ?>
                </div>
                
                <?php $images = (array) json_decode($detail->images);
                    if ( count($images) > 0) {
                        echo '<div><i class="far fa-check-circle"></i><h6>Images:</h6>';
                        foreach ((object)$images as $image) {
                            ?>
                            <div class="">
                                <a href="<?= LCM_PLUGIN_IMG_UPLOAD_BASE_DIR . $image->img_path ?>" target="blank_">
                                    <img class="lcm_tool_img" src="<?= LCM_PLUGIN_IMG_UPLOAD_BASE_DIR . $image->img_path ?>" alt="<?= $image->img_caption ?>" height="100" width="100">
                                    <p class="lcm_tool_img_caption"><?= $image->img_caption ?></p>
                                </a>

                            </div>
                <?php } echo '</div>'; } ?>
                <div>
                    <i class="fas fa-pencil-alt"></i><h6>Description:</h6>
                    <?php lcm_show_hide_desc_lmt($detail->tactic_description, 150, $detail->id, $detail->collapse_expand) ?>
                </div>
                
                <div>
                    <?php
                    if (lcm_video_iframes($detail->videos) != NULL) {
                        echo '<strong>VIDEOS:</strong>';
                        echo lcm_video_iframes($detail->videos);
                    }
                    ?>
                </div>
                
            </div>
        </div>
    </div>
</div>

