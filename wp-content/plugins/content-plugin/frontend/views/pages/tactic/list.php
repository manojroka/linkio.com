<div class="lcm_plugin">
    <div class="lcm_tactic_page">
        <input type="hidden" id="lcm_home_url" value="<?= HOME_URL ?>">
        <div class="lcm_left_column">
            <?php include '_filter_form.php'; ?>
        </div>
        <div class="lcm_right_column" id="lcm_list">
            <?php foreach ($data as $value) { ?>
            
            <?php // echo '<pre>'; print_r($value); ?>
            
            <div class="list_lcm_right_background tactic_lists" data-tool_types="<?= $value->tool_types ?>" data-name="<?= $value->name ?>" data-tacticname="<?= $value->tactic_name ?>" data-vote="<?= $value->vote_count ?>" data-tool_include="<?= lcm_tactic_tool_count($value->tool_included) ?>">
                    <div style="clear: both;">
                        <h2 class="title title-text" style="float: left"><strong><?= $value->tactic_name ?></strong></h2>
                        <?php lcm_vote_update($value); ?>
                    </div>
                    <div class="lcm_info">
                        <div>
                            <div class="lcm-company-info-show-hide">
                                <div class="lcm-com-exp-col-bar" data-id="<?=$value->id?>">
                                    <label>Company Info </label>
                                    <i id="cihs-icn-<?=$value->id?>" class="fa fa-arrow-circle-down"></i>
                                </div>
                                <div class="lcm-com-exp-col-desc" id="lcm-cihs-<?=$value->id?>" style="display: none;">
                                    <strong>Company: <?= $value->company ?></strong>
                                    <p>Name: <?= $value->name ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <div class="lcm_two_column">
                                <div class="lcm_column_one"><i class="far fa-list-alt"></i><h6>Selected Categories:</h6>
                                    <?php
                                    if($categories != NULL){ $c = 1;
                                        foreach ($categories as $category) {
                                            if(in_array($category->id, (array)json_decode($value->category))){
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
                                    <?= $value->tool_types ?>
                                </div>
                            </div>
                        </div>   
                        <div>
                            <div>
                                <i class="fas fa-link"></i><h6>Tool Included:</h6>
                            <?php lcm_tool_included($value->tool_included); ?>
                            </div>
                            <div class="lcm-description">
                                <i class="fas fa-pencil-alt"></i><h6>Description:</h6>
                                <?php lcm_show_hide_desc_lmt($value->tactic_description, 150, $value->id, $value->collapse_expand) ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>    
</div>
