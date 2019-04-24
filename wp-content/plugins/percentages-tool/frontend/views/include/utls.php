<?php
function page_type_dropdown($url_value, $sn) {
    
    $page_type = $url_value['page_type'];
    $web_type = $url_value['website_type'];
    $domain_type = $url_value['domain_type'];
    
    $selected_home = '';
    if($page_type == 'home_page'){
        $selected_home = 'selected';
    }
    $selected_commercial = '';
    if($page_type == 'commercial_page'){
        $selected_commercial = 'selected';
    }
    $selected_informational = '';
    if($page_type == 'informational_page'){
        $selected_informational = 'selected';
    }
    echo '<select id="page_type" class="page_type" data-current-page-type="'.$page_type.'" data-website_type="'.$web_type.'" data-domain_type="'.$domain_type.'" data-sn="'.$sn.'">';
        echo '<option '.$selected_home.'>Home Page</option>';
        echo '<option '.$selected_commercial.'>Commercial Page</option>';
        echo '<option '.$selected_informational.'>Informational Page</option>';
    echo '</select>';
}

function page_sub_type_dropdown($subtype, $sn) {
    echo '<select class="page_subtype" data-sn="'.$sn.'">';
    foreach ($subtype['list'] as $r) {
        $selected = '';
        if($r->id == $subtype['detail']->id){
            $selected = 'selected';
        }
        echo '<option value="'.$r->id.'" '.$selected.'>'.$r->anchor_type.'</option>';
    }
    echo '</select>';
}


function _subpage_popup_table($id, $ideal_percent) {
    
    $brand_name_total = (float)$ideal_percent->brand_name+(float)$ideal_percent->website_dot_com;
    $keyword_total = (float)$ideal_percent->exact_keyword+(float)$ideal_percent->part_of_keyword+(float)$ideal_percent->keyword_plus_word;
    $hybrid_total = (float)$ideal_percent->title_tag+(float)$ideal_percent->brand_plus_keyword;
    $url_total = (float)$ideal_percent->naked_url+(float)$ideal_percent->naked_url_no_http+(float)$ideal_percent->home_page_url;
    $natural_total = (float)$ideal_percent->just_natural+(float)$ideal_percent->no_text+(float)$ideal_percent->totally_random;
    
    $html_code = '<div id="tip-table-hover-'.$id.'" class="tip-hoverd-tbl">
                    <div class="tip-table-hover-header">
                        <p>Target Anchor Text Percentages</p>
                        <div><a href="https://app.linkio.com/users/sign_up" target="_blank"><u>Use top ranking competitor data to customize this with Linkio</u></a></div>
                    </div>
                    <table class="tip-hoverd-tbl-element">
                        <thead>
                            <tr>
                                <th class="pta-anchr-title">Anchor</th>
                                <th class="pta-anchr-title pta-anchr-title-category-head">Text Category</th>
                                <th colspan="2" class="txt-center">Percentages</th>
                            </tr>    
                        </thead>
                        <tbody>
                            <tr>
                                <td rowspan="2" class="pta-anchr-title">Branded</td>
                                <td>Brand Name</td>
                                <td>'.$ideal_percent->brand_name.'%</td>
                                <td rowspan="2" class="pta-anchr-title">'.$brand_name_total.'%</td>
                            </tr>
                            <tr>
                                <td>Websitename.com</td>
                                <td>'.$ideal_percent->website_dot_com.'%</td>
                            </tr>
                            <tr>
                                <td rowspan="3" class="pta-anchr-title">Keyword</td>
                                <td>Exact Keyword</td>
                                <td>'.$ideal_percent->exact_keyword.'%</td>
                                <td rowspan="3" class="pta-anchr-title">'.$keyword_total.'%</td>
                            </tr>
                            <tr>
                                <td>Only Part of keyword</td>
                                <td>'.$ideal_percent->part_of_keyword.'%</td>
                            </tr>
                            <tr>
                                <td>Keyword Plus Word</td>
                                <td>'.$ideal_percent->keyword_plus_word.'%</td>
                            </tr>
                            <tr>
                                <td rowspan="2" class="pta-anchr-title">Hybrid</td>
                                <td>Title Tag</td>
                                <td>'.$ideal_percent->title_tag.'%</td>
                                <td rowspan="2" class="pta-anchr-title">'.$hybrid_total.'%</td>
                            </tr>
                            <tr>
                                <td>Brand + Keyword</td>
                                <td>'.$ideal_percent->brand_plus_keyword.'%</td>
                            </tr>
                            <tr>
                                <td rowspan="3" class="pta-anchr-title">Url</td>
                                <td>Naked Url</td>
                                <td>'.$ideal_percent->naked_url.'%</td>
                                <td rowspan="3" class="pta-anchr-title">'.$url_total.'%</td>
                            </tr>
                            <tr>
                                <td>Naked Url Without http://</td>
                                <td>'.$ideal_percent->naked_url_no_http.'%</td>
                            </tr>
                            <tr>
                                <td>Home Page Url</td>
                                <td>'.$ideal_percent->home_page_url.'%</td>
                            </tr>
                            <tr>
                                <td rowspan="3" class="pta-anchr-title">Natural</td>
                                <td>Just Natural</td>
                                <td>'.$ideal_percent->just_natural.'%</td>
                                <td rowspan="3" class="pta-anchr-title">'.$natural_total.'%</td>
                            </tr>
                            <tr>
                                <td>No Text</td>
                                <td>'.$ideal_percent->no_text.'%</td>
                            </tr>
                            <tr>
                                <td>Totally Random</td>
                                <td>'.$ideal_percent->totally_random.'%</td>
                            </tr>
                        </tbody>
                    </table>
                </div>';
    return $html_code;
}

function _load_js_pta_popup_hover() {
    $src = PTA_PLUGIN_FRONT_DIR_URL.'/views/assets/js/pta-hover.js';
    echo "<script type='text/javascript' src='".$src."'></script>";
}