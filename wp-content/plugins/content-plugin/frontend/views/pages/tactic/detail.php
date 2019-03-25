<div class="lcm_plugin" class="lcm_plugin">
    <input type="hidden" id="lcm_home_url" value="<?= HOME_URL ?>">
    <div id="lcm_list" class="detail_lcm_right_background">
        <div class="lcm_clear_both">
            <h2 class="title title-text" style="float: left"><strong><?= $detail->tactic_name ?></strong></h2>
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
                        <div class="lcm_column_one"><i class="far fa-list-alt"></i><h6>Selected Categories:</h6>
                            <?php
                            if($categories != NULL){ $c = 1;
                                foreach ($categories as $category) {
                                    if(in_array($category->id, (array)json_decode($detail->category))){
                                        echo '<h5 style="font-weight: 200;">'.$c++.') '.$category->name.'</h5>';
                                    }
                                }
                            }
                            ?>
                        </div>
                    </div>
                    
                    <div class="lcm_two_column">    
                        <div class="lcm_column_two">
                            <i class="fas fa-dollar-sign"></i><h6>Tool Types:</h6>
                            <?= $detail->tool_types ?>
                        </div>
                    </div>
                </div>   
                <div>
                    <div>
                        <i class="fas fa-link"></i><h6>Tool Included:</h6>
                        <?php lcm_tool_included($detail->tool_included); ?>
                    </div>
                    <div class="lcm-description">
                        <i class="fas fa-pencil-alt"></i><h6>Description:</h6>
                        <?php lcm_show_hide_desc_lmt($detail->tactic_description, 150, $detail->id, $detail->collapse_expand) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>