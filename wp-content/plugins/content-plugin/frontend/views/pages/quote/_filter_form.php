<div class="lcm_row lcm_box_shadow lcm_padding15">

    <?php if (isset($filter)) { _lcm_top_search_box($module_detail); } ?>

    <?php if (isset($submit_form)) { lcmf_popup_form_open($module_detail); ?>
        <div class="lcm_flex lcm_row">
            <div class="lcm_col-md-3">
                <label>Quote Title*</label>
            </div>
            <div class="lcm_col-md-6">
                <div class="">
                    <input class="form-control limit_word" type="text" name="title" id="title" required>
                    <div class="lcm-i-submit-error" id="i-title"></div>
                </div>
            </div>
        </div>
        <div class="lcm_flex lcm_row">
            <div class="lcm_col-md-3">
                <label>Author*</label>
            </div>
            <div class="lcm_col-md-6">
                <div class="">
                    <input class="form-control" type="text" name="name" required>
                    <div class="lcm-i-submit-error" id="i-name"></div>
                </div>
            </div>
        </div>
        <div class="lcm_flex lcm_row">
            <div class="lcm_col-md-3">
                <label>Email*</label>
            </div>
            <div class="lcm_col-md-6">
                <div class="">
                    <input class="form-control" type="email" name="email" required>
                    <div class="lcm-i-submit-error" id="i-email"></div>
                </div>
            </div>
        </div>
        <div class="lcm_flex lcm_row">
            <div class="lcm_col-md-3">
                <label class="lcm_mobile_line_height">Author Picture*</label>
            </div>
            <div class="lcm_col-md-6">
                <div class="">
                    <input class="lcm-i-type-file form-control" type="file" name="headshot" accept="image/*" required>
                    <span class="lcm_popup_info"><i class="fas fa-info-circle"></i><span>For best preview the logo images should be 132px x 132px</span></span>
                </div>
            </div>
        </div>
        <div class="lcm_flex lcm_row">
            <div class="lcm_col-md-3">
                <label class="lcm_mobile_line_height">Author's Company*</label>
            </div>
            <div class="lcm_col-md-6">
                <div class="">
                    <input class="form-control" type="text" name="company" required>
                    <div class="lcm-i-submit-error" id="i-company"></div>
                </div>
            </div>
        </div>
        <div class="lcm_flex lcm_row">
            <div class="lcm_col-md-3">
                <label>Company Url*</label>
            </div>
            <div class="lcm_col-md-6">
                <div class="lcm_mobile_line_height">
                    <input class="form-control" type="url" name="company_website" required>
                </div>
            </div>
        </div>
        <div class="lcm_flex lcm_row">
            <div class="lcm_col-md-3">
                <label class="lcm_mobile_line_height">Author Job Position*</label>
            </div>
            <div class="lcm_col-md-6">
                <div class="">
                    <input class="form-control" type="text" name="job_position" required>
                    <div class="lcm-i-submit-error" id="i-job_position"></div>
                </div>
            </div>
        </div>
        <div>
            <label class="lcm_mobile_padding_top">Content*</label>
            <?php lcm_editor("", "quote_description", array('textarea_rows' => '12')); ?>
            <div class="lcm-i-submit-error" id="i-content_desc"></div>
            <div class="lcm-i-submit-error" id="i-content_desc_count"></div>
            <span class="lcm_popup_info"><i class="fas fa-info-circle"></i>You can use editor functionality to format the content. Please limit your description to 200 words.</span>
        </div>
    <?php lcmf_popup_form_closed($module_detail); } ?>
</div>