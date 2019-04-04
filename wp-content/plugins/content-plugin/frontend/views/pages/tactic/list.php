<div class="lcm_ContentPlugin">
    <div class="lcm_container lcm_col-md-10 lcm_margin_auto">
        <input type="hidden" id="lcm_home_url" value="<?= HOME_URL ?>">
        
        <?php include '_filter_form.php'; ?>
        
        <div class="lcm_box_shadow lcm_paddinglr10300030" id="lcm_list">
            <?php foreach ($data as $value) { ?>
            
            <?php // echo '<pre>'; print_r($value); ?>
            
            <div class="tactic_lists" data-id="<?= $value->id ?>" data-tool_name="<?= $value->tool_name ?>" data-vote="<?= $value->vote_count ?>">
                
                <div class="lcm_flex lcm_row lcm_paddingbuttom_25">
                    <div class="lcm_col-md-10">
                        <div class="lcm_h2"><?= $value->tactic_name ?></div>
                    </div>
                    <div class="lcm_col-md-2">
                        <div class="lcm_vote lcm_border_around lcm_float_right">
                            <a href="javascript:void(0)" class="update_vote" data-vote_count= "'<?=$value->vote_count?>'" data-id="'<?=$value->id?>'" data-template_id="'<?=$value->template_id?>'" data-module="tactic" data-module_id="'<?=$value->module_id?>'">
                            <i class="fa fa-caret-up"></i>
                            <span class="num-vote">Votes: <?=$value->vote_count?></span>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="lcm_desc lcm_paddingbuttom_25">
                    <?php echo $value->tactic_description ?>
                </div>
                
                    <div class="lcm_row">
                        <div class="lcm_clear_both lcm_float_right">
                            by <strong><?=$value->name?></strong>, CTO at 
                            <a href="javascript:void(0)"><u><?= $value->company ?></u></a>
                        </div>
                        <div class="lcm_clear_both lcm_border_bottom">&nbsp;</div>
                    </div>
                
                </div>
            <?php } ?>
        </div>
    </div>    
</div>
