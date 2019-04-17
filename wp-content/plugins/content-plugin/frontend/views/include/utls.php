<?php 
function _lcm_expand_collapse_btns($json_btns, $id) {
    $btn_html = '';
    $btns = json_decode($json_btns);
    if(count((array)$btns)>0){
        $btn_html .= '<div class="lcm_float_right">';
        foreach ($btns as $key => $btn) {
            $onclk_func = "'".$key.$id."'";
            $id_f_value = "'".$id."'";
            $btn_html .= '<button onclick="onclick_'.$key.'('.$id_f_value.')" class="'.$key.' '.$key.$id.'">';
            $btn_html .= $btn;
            $btn_html .= '</button>';
        }
        $btn_html .= '</div>';
    }
    return $btn_html;
}

function lcm_show_hide_desc_lmt($description, $w_count, $id, $btns = NULL) {
    $html_desc = '';
    if (str_word_count($description) > $w_count) {
        $html_desc .= '<div class="col-exp-half-decs" id="col-exp-half-decs' . $id . '">'
                        . '<p>'.implode(' ', array_slice(explode(' ', $description), 0, $w_count)).'...</p>'
                    . '</div>';
        $html_desc .= '<div class="col-exp-full-decs" id="col-exp-full-decs' . $id . '">'
                        . '<p>'.$description.'</p>'
                    . '</div>';
        $html_desc .= _lcm_expand_collapse_btns($btns, $id);
        $html_desc .= '<br>';
    } else {
        $html_desc .= '<p>'.$description.'</p>';
    }
    echo $html_desc;
}

function lcm_tactic_tool_count($json_btns) {
    $btns = json_decode($json_btns);
    if(isset($btns->tool_included_name)){    
        if(count((array)$btns->tool_included_name)>0){
            echo count((array)$btns->tool_included_name);
        } else {
            echo 0;
        }
    }else{
        echo 0;
    }
}

function lcm_video_iframes($json_data) {
    if($json_data == '' || $json_data == NULL){
        return NULL;
    }
    $video_html = NULL;
    $json_in_array = (array)json_decode($json_data);
    if(count($json_in_array) > 0){
        foreach ($json_in_array as $key => $value_url) {
            if (strpos($value_url, 'youtube.com') !== false) {
                $y_vid_src = str_replace("watch?v=", "embed/", preg_replace('/&list.*/', '', $value_url));
                $video_html .= '<div class="lcm_text_center"><iframe src="'.$y_vid_src.'" height="320px" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>';
            } elseif (strpos($value_url, 'vimeo.com') !== false) {
                $v_id = substr($value_url, strrpos($value_url, '/' )+1);
                $video_html .= '<div class="lcm_text_center"><iframe src="https://player.vimeo.com/video/'.$v_id.'" width="70%" height="320px" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>';
            };
        }
    }
    return $video_html;
}

function lcm_tool_included($json_btns) {
    $tool_include_html = '';
    $btns = json_decode($json_btns);
    if(count((array)$btns)>0){
        $c = 0;
        $tool_include_html .= '<table style="font-size: 14px;">';
        $tool_include_html .= '<tr><th>Name</th><th>Url</th></tr>';
        foreach ($btns as $key => $tool_include) {
            
            if(isset($btns->tool_included_name[$c])){                
                $tool_include_html .= '<tr>';
                    $tool_include_html .= '<td>';
                    $tool_include_html .= ($btns->tool_included_name[$c]);
                    $tool_include_html .= '</td>';
                    $df = '';
                    if($btns->tool_included_df[$c] == 'on'){
                        $df = 'rel="nofollow"';
                    }
                    $tool_include_html .= '<td>';
                    $tool_include_html .=  '<a '.$df.' href="'.$btns->tool_included_url[$c].'">'.$btns->tool_included_url[$c].'</a>';
                    $tool_include_html .= '</td>';
                $tool_include_html .= '</tr>';
                $c++;
            }
        }
        $tool_include_html .= '</table>';
    }
    echo  $tool_include_html;
}

function lcm_aditional_links($json_links) {
    $additional_link_html = '';
    $additional = json_decode($json_links);
    if(count((array)$additional)>0){
        $c = 0;
        $additional_link_html .= '<i class="fas fa-link"></i><h6>Additional Links:</h6>';
        $additional_link_html .= '<table>';
        $additional_link_html .= '<tr><th>Name</th><th>Url</th><th>Description</th></tr>';
        foreach ($additional as $key => $tool_include) {
            if(isset($additional->link_name[$c])){                
                $additional_link_html .= '<tr>';
                    $additional_link_html .= '<td>';
                    $additional_link_html .= ($additional->link_name[$c]);
                    $additional_link_html .= '</td>';
                    $df = '';
                    if($additional->link_df[$c] == 'on'){
                        $df = 'rel="nofollow"';
                    }
                    $additional_link_html .= '<td>';
                    $additional_link_html .=  '<a '.$df.' href="'.$additional->link_url[$c].'">'.$additional->link_url[$c].'</a>';
                    $additional_link_html .= '</td>';
                    $additional_link_html .= '<td>';
                    $additional_link_html .= ($additional->link_desc[$c]);
                    $additional_link_html .= '</td>';
                $additional_link_html .= '</tr>';
                $c++;
            }
        }
        $additional_link_html .= '</table>';
    }
    echo  $additional_link_html;
}

//------- open popup form links --------------
if(isset($_GET['newitemform'])){
    $item_module = $_GET['newitemform'];
    if( ($item_module == 'tactic') || ($item_module == 'quote') || ($item_module == 'website') || ($item_module == 'tool') ){
        $module_popup = "'".$item_module."'";
        echo '<body onload="open_popup_form('.$module_popup.')"></body>';
    }
}

