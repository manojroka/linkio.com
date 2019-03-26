<?php 

function lcm_admin_dropdown_selector($name, $select = NULL, $select_option) {
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
    echo '<select name="'.$name.'" class="postform regular-text">'.$option_li.'</select>';
}

function lcm_json_convert_to_array_type($json_data) {
    if($json_data == '' || $json_data == NULL){
        return NULL;
    }
    $item_res = NULL;
    $json_in_array = (array)json_decode($json_data);
    if(count($json_in_array) > 0){
        foreach ($json_in_array as $key => $value) {
            $value = (array)$value;
            foreach ($value as $key_id => $value2) {    
                foreach ($json_in_array as $key_r => $value_r) {
                    $value_r = (array)$value_r;
                    $json_in_array_key = (array)$json_in_array[$key_r];
                    $item_res[$key_id][$key_r] = $json_in_array_key[$key_id];         
                }
            }
        }
    }
    return $item_res;
}

function _open_lcm_admin_item_form() {
    
    $form_action = '';
    if(isset($_GET['action'])){
        if($_GET['action'] == 'edit'){
            $form_action = 'admin.php?page=lcms&module='.$_GET['module'].'&mid='.$_GET['mid'].'&templateid='.$_GET['templateid'].'&id='.$_GET['id'].'&action=edit';
        }
    }
    $lcm_admin_html = '<div class="wrap">
                        <form method="post" action="'.$form_action.'" method="post" enctype="multipart/form-data">';
    echo $lcm_admin_html;
}

function _close_lcm_admin_item_form() {
    
    $lcm_admin_html = '<p class="submit">
                            <a class="button button-primary" href="admin.php?page=lcms&module='.$_GET["module"].'&mid='.$_GET["mid"].'&templateid='.$_GET["templateid"].'">Cancel</a>
                            <input class="button button-primary" type="submit" name="submit" value="Submit">
                        </p>
                    </form>
                </div>';
    echo $lcm_admin_html;
}


