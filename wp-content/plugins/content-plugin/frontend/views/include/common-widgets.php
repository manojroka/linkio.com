<?php
function _lcm_dropdown_selector($name, $select = NULL, $select_option, $label) {
    $option_li = '';
    foreach ($select_option as $option) {
        $selected = '';
        if($select != NULL){
            if($option == $select){
                $selected = 'selected';
            }
        }
        $option_li .= '<option value="'.$option.'" '.$selected.'>'.$option.'</option>';
    }
    if( $label !='' || $label != NULL ){
        echo '<label>'.$label.'</label>';
    }
    echo '<select name="'.$name.'" id="'.$name.'" class="postform form-control">'.$option_li.'</select>';
}

function lcm_editor($content, $editor_id, $setings = NULL ) {
    
    $editor = array(
        'textarea_name' => $editor_id,
        'media_buttons' => TRUE,
        'textarea_rows' => 4,
        'quicktags'     => true,
        'drag_drop_upload' => true,
        'tinymce'       => array(
            'paste_as_text'                 => true,
            'paste_auto_cleanup_on_paste'   => true,
            'paste_remove_spans'            => true,
            'paste_remove_styles'           => true,
            'paste_remove_styles_if_webkit' => true,
            'paste_strip_class_attributes'  => true,
            'toolbar1'                      => 'bold italic | superscript subscript | bullist numlist | forecolor backcolor | link unlink | image media | visualblocks undo redo code',
            'toolbar2'                      => '',
            'toolbar3'                      => '',
            'toolbar4'                      => ''
            ),
    );
    if(isset($setings['textarea_rows'])){
        $editor['textarea_rows'] = $setings['textarea_rows'];
    }    
    wp_editor($content, $editor_id, $editor);
}

function lcm_vote_update($detail){
    $lcm_vote_html = '';
    if($detail != NULL || $detail != ''){
        switch ($detail->module_id) {
            case "1":
                $module = 'quote';
                break;
            case "2":
                $module = 'tactic';
                break;
            case "3":
                $module = 'website';
                break;
            case "4":
                $module = 'tool';
                break;
            default :
                $module ='';
        }
        if($module != ''){
            $lcm_vote_html = '<div class="lcm_voting">
                                <a href="javascript:void(0)" class="update_vote" data-vote_count= "'.$detail->vote_count.'" data-id="'.$detail->id.'" data-template_id="'.$detail->template_id.'" data-module="'.$module.'" data-module_id="'.$detail->module_id.'">
                                    <i class="fa fa-caret-up"></i>
                                    <span class="num-vote">Vote: '.$detail->vote_count.'</span>
                                </a>
                            </div>';   
        }   
    }
    echo $lcm_vote_html;
}

function _lcmf_term_and_conditions_chkbox($module_detail) {
    $term_condition_html = '<div class="lcm_term_and_condtion">
                                <label class="cb-checkbox">
                                    <input type="hidden" name="is_cooke" value="off">
                                    <input type="checkbox" name="is_cooke" id="is_cooke">I agree to the Terms and Conditions
                                </label>
                            </div>';
    if($module_detail->saved_cookie == 0){
        echo $term_condition_html;
    }
}

function _lcm_item_submit_btn() {
    $submit_button_and_validation_error_html = '<div>
                                                    <div class="lcm-i-submit-error"></div>
                                                    <div class="lcm_text_center">
                                                        <button type="submit" id="lcm_item_submit_btn">Submit</button>
                                                    </div>
                                                </div>';
    echo $submit_button_and_validation_error_html;
}

function _lcmf_item_form_hidden_fields($module_detail) {
    
    $hidden_fields_item_form_html = '<input type="hidden" id="lcm_home_url" value="'.get_home_url().'">
                                    <input type="hidden" id="lcmf_module_name" name="module" value="'.$module_detail->module.'">
                                    <input type="hidden" name="module_id" value="'.$module_detail->module_id.'">
                                    <input type="hidden" name="template_id" value="'.$module_detail->id.'">';
    echo $hidden_fields_item_form_html;
}

function _lcmf_item_form_heading($module_detail) {
    
    $heading_html = '<div>
                        <div class="lcm-i-top-bar">
                            <h3>Add new '.$module_detail->template_name.' 
                                <span class="lcm-i-x"><i class="fa fa-times"></i></span> 
                            </h3>
                        </div>
                        <!--<div class="lcm_title_top">
                            <h4>Want to recommend a '.ucfirst($module_detail->module).' not on the list ?</h4>
                            <p>
                                Make sure to fill in all the fields and be thorough and informational (not promotional!)<br>
                                Your entry will be reviewed before going live.
                            </p>
                        </div>-->
                    </div>';
    echo $heading_html;
}

function _lcmf_name_email_company_input() {
    
    $name_email_company_html = '<label>Name*</label>
                                <input class="form-control" type="text" name="name" required>
                                <label>Email*</label>
                                <input class="form-control" type="Email" name="email" required>
                                <label>Company*</label>
                                <input class="form-control" type="text" name="company" required>';
    echo $name_email_company_html;
}

function _lcmf_add_new_popup_btn($module) {
    echo '<div class="lcm-i-add-btn">
            <button type="button" class="" onclick="open_popup_form('.$module.')">
                <i class="fa fa-plus-circle"></i>Add New Item
            </button>
        </div>';
}

function lcmf_popup_form_open($module_detail) {
    // _lcmf_add_new_popup_btn("'".$module_detail->module."'");
    echo '<div class="lcm-i-popup">
            <div class="lcm-i-form" id="popup_form_'.$module_detail->module.'">
                <form id="lcm-i-ajax-data" method="post" enctype="multipart/form-data">';
    _lcmf_item_form_heading($module_detail);
    _lcmf_item_form_hidden_fields($module_detail);
}

function lcmf_popup_form_closed($module_detail) {
    _lcmf_term_and_conditions_chkbox($module_detail);
    _lcm_item_submit_btn();
    echo '</form>
        </div>
    </div>';
}