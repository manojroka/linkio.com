<?php foreach ($data as $value) { ?>
    <div class="">
        <div class="lcm_flex lcm_row lcm_paddingbuttom_25 lcm_mobile_inline_block">
            <div class="lcm_col-md-10">
                <a class="lcm_h2" href="<?= $value->website_url ?>" target="_blank"><u><?= $value->website_name ?></u></a>
                <br>
                <div class="lcm_vote lcm_margin_t10 lcm_border_around lcm_float_left">
                    <?php lcm_vote_update($value); ?>
                </div>
            </div>
            <div class="lcm_col-md-2">
                <div class="lcm_i_logo lcm_float_right lcm_mobile_clear_both_float_left">
                    <?php if ($value->website_logo != '') { ?>
                        <img src='<?= lcm_img_src($value->website_logo); ?>' alt='web logo'>
                    <?php } ?>
                </div>
            </div>
        </div>      
        <div class="lcm_desc lcm_paddingbuttom_25">
            <?php echo $value->website_description ?>
        </div>
        <div class="lcm_row">
            <div class="lcm_clear_both lcm_border_bottom">&nbsp;</div>
        </div>
    </div>
<?php } ?>