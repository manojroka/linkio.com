<div class="lcm_ContentPlugin">
    <div class="lcm_container lcm_col-md-10 lcm_margin_auto">
        <input type="hidden" id="lcm_home_url" value="<?= HOME_URL ?>">
        
        <?php include '_filter_form.php'; ?>
        
        <div class="lcm_box_shadow lcm_paddinglr10300030" id="lcm_list">
            <?php foreach ($data as $value) { ?>
            
            <?php // echo '<pre>'; print_r($value); ?>
            
            <div class="lcm-i-lists" data-id="<?=$value->id?>">
                
                <div class="lcm_flex lcm_row lcm_paddingbuttom_25 lcm_mobile_inline_block">
                    <div class="lcm_col-md-10">
                        <div class="lcm_h2 lcm_mobile_padding_top"><?= $value->tactic_name ?></div>
                    </div>
                    <div class="lcm_col-md-2 lcm_mobile_padding_top">
                        <div class="lcm_vote lcm_border_around lcm_float_right lcm_mobile_clear_both_float_left">
                            <?php lcm_vote_update($value); ?>
                        </div>
                    </div>
                </div>
                
                <div class="lcm_desc lcm_paddingbuttom_25">
                    <?php echo $value->tactic_description ?>
                </div>
                
                    <div class="lcm_row">
                        <div class="lcm_clear_both lcm_float_right">
                            by <strong><?=$value->name?></strong>, <?=$value->job_position?> at 
                            <a href="<?= $value->company_url ?>" target="_blank"><u><?= $value->company ?></u></a>
                        </div>
                        <div class="lcm_clear_both lcm_border_bottom">&nbsp;</div>
                    </div>
                
                </div>
            <?php } ?>
        </div>
    </div>    
</div>
