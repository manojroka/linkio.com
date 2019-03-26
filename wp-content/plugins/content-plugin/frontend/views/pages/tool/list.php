<div class="lcm_plugin">
    <div class="lcm_tool_page">
        <input type="hidden" id="lcm_home_url" value="<?= HOME_URL ?>">
        <div class="lcm_left_column">
            <?php include '_filter_form.php'; ?>
        </div>
        <div class="lcm_right_column" id="lcm_list">
            <?php foreach ($data as $value) { ?>
            <div class="list_lcm_right_background tool_lists" data-id="<?= $value->id ?>" data-tool_name="<?= $value->tool_name ?>" data-vote="<?= $value->vote_count ?>">
                    <div style="clear: both;">
                        <h2 class="title title-text" style="float: left"><strong><?= $value->tool_name ?></strong></h2>
                        <?php lcm_vote_update($value); ?>
                    </div>                    
                    <div style="clear: both;">
                        <div class="lcm_info">

                            <div>
                                <div class="lcm-company-info-show-hide">
                                    <div class="lcm-com-exp-col-bar" data-id="<?= $value->id ?>">
                                        <label>Company Info </label>
                                        <i id="cihs-icn-<?= $value->id ?>" class="fa fa-arrow-circle-down"></i>
                                    </div>
                                    <div class="lcm-com-exp-col-desc" id="lcm-cihs-<?= $value->id ?>" style="display: none;">
                                        <strong>Company: <?= $value->company ?></strong>
                                        <p>Name: <?= $value->name ?></p>
                                    </div>
                                </div>
                            </div>

                            <div class="">
                                <div class="lcm_two_column">
                                    <div class="lcm_column_one">
                                        <i class="fas fa-external-link-alt"></i><h6>Homepage Url:</h6>
                                        <a class="" href="<?= $value->home_page_url ?>" target="_blank"><?= $value->home_page_url ?></a>
                                    </div>
                                </div>
                                <div class="lcm_two_column">
                                    <div class="lcm_column_two">
                                        <i class="fas fa-dollar-sign"></i><h6>Price:</h6>
                                        <?= $value->price ?>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <!--                                <div class="lcm_two_column">
                                                                    <div class="lcm_column_one">
                                                                        <i class="fas fa-list-ul"></i><h6>Types:</h6>
                                <?= $value->types ?>
                                                                    </div>
                                                                </div>-->

                                <div class="lcm_two_column">
                                    <div class="lcm_column_one"><i class="far fa-list-alt"></i><h6>Types:</h6>
                                        <?php
                                        if ($types != NULL) {
                                            $c = 1;
                                            foreach ($types as $type) {
                                                if (in_array($type->id, (array) json_decode($value->type))) {
                                                    echo '<h5 style="font-weight: 200;">' . $c++ . ') ' . $type->name . '</h5>';
                                                }
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>

                            </div>
                            <div class="lcm-description">
                                <i class="fas fa-pencil-alt"></i><h6>Summary:</h6><br>
                                <p><?= $value->summary; ?><p>  
                            </div>
                            <div class="tool-additional-link-tbl">
                                <?php lcm_aditional_links($value->additional_links); ?>
                            </div>
                            
                            <?php $images = (array) json_decode($value->images);
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
                            <div class="lcm-description">
                                <?php // lcm_show_hide_desc_lmt($value->description, 150, $value->id, $value->collapse_expand) ?>
                            </div>
                            <div>
                                <?php
                                if (lcm_video_iframes($value->videos) != NULL) {
                                    echo '<strong>VIDEOS:</strong>';
                                    echo lcm_video_iframes($value->videos);
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
<?php } ?>
        </div>
    </div>
</div>

