<?php foreach ($data as $value) { ?>
    <div class="lcm-i-lists" data-id="<?= $value->id ?>" data-rating="<?= $value->vote_count ?>" data-i-title="<?= $value->tactic_name ?>">
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
        <div class="lcm_row lcm-list-i-foter">
            <div class="lcm_clear_both lcm_float_right">
                by <strong><?= $value->name ?></strong>, <?= $value->job_position ?> at 
                <a href="<?= $value->company_url ?>" target="_blank"><u><?= $value->company ?></u></a>
            </div>
            <div class="lcm_clear_both lcm_border_bottom">&nbsp;</div>
        </div>
    </div>
<?php } ?>