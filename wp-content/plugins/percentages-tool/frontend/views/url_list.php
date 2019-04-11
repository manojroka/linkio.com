<div class="pta-content">
    <div>
        <h5>Url Report :</h5>
        <div class="">
            <table class="pta-tbl">
                <thead class="pta-tbl-head">
                    <tr>
                        <th class="th-sn">S.N.</th>
                        <th class="th-page-url">Page Url</th>
                        <th class="th-page-type">Page Type</th>
                        <th class="th-page-subtype">Page Subtype</th>
                        <th class="th-target-i-per">Target Ideal Percentage</th>
                        <th class="th-calc-linkio">Your Current Percentage</th>
                        <th class="th-calc-linkio">Next 10 Anchor To Build</th>
                    </tr>
                </thead>
                <tbody class="pta-tbl-data">
                    <?php $c = 0;
                    foreach ($url_lists as $url_value) {
                        $c++; ?>
                        <tr>
                            <td class="td-sn"><?= $c; ?></td>
                            <td class="td-page-url"><a href="<?= $url_value['url'] ?>" target="_blank"><?= $url_value['url'] ?></a></td>
                            <td style="padding: 0.25em;">
                                <select id="page_type" class="page_type" data-current-page-type="<?= $url_value['page_type'] ?>" data-website_type="<?= $url_value['website_type'] ?>" data-domain_type="<?= $url_value['domain_type'] ?>" data-sn="<?= $c; ?>">
                                    <option <?php if ($url_value['page_type'] == 'home_page') {
                                            echo 'selected';
                                        } ?>>Home Page</option>
                                                    <option <?php if ($url_value['page_type'] == 'commercial_page') {
                                            echo 'selected';
                                        } ?>>Commercial Page</option>
                                                    <option <?php if ($url_value['page_type'] == 'informational_page') {
                                            echo 'selected';
                                        } ?>>Informational Page</option>
                                </select>
                            </td>
                            
                            <td class="page-subtype-name-<?= $c; ?>">
                                <select class="page_subtype" data-sn="<?= $c; ?>">
                                    <?php $subtype = $url_value['page_subtype']; foreach($subtype['list'] as $r){ ?>
                                    <option value="<?=$r->id?>" <?php if($r->id == $subtype['detail']->id) { echo 'selected'; } ?>><?php echo $r->anchor_type; ?></option>
                                    <?php } ?>
                                </select>
                            </td>
                            
                            <td class="tip-hover target-ideal-percent-<?= $c; ?>" id="idl-prcnt-<?= $c; ?>" data-tip-sn="<?= $c; ?>">
                                <div class="pta_btn_icon"><i class="far fa-chart-bar"></i></div>                        
                                <?= _subpage_popup_table($c, $url_value['page_subtype']['detail']) ?>
                            </td>
                            <td class="pta-ext-lnk"><a href="https://app.linkio.com/" target="_blank">Calculate with Linkio</a></td>
                            <td class="pta-ext-lnk"><a href="https://app.linkio.com/" target="_blank">Calculate with Linkio</a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script type="text/javascript">
    jQuery(".page_type").change(function () {
        var page_type = jQuery('option:selected', this).text();
        var pta_sn = jQuery(this).data('sn');
        jQuery('.page-subtype-name-' + pta_sn).empty();
        jQuery('#idl-prcnt-' + pta_sn).empty();
        jQuery.ajax({
            url: document.getElementById("pta_home_url").value + '/wp-admin/admin-ajax.php',
            type: 'post',
            dataType: 'html',
            data: {
                action: 'pta_ajax_page_sub_type_name',
                pta_sn:pta_sn,
                page_type: page_type,
                website_type: jQuery(this).data('website_type'),
                domain_type: jQuery(this).data('domain_type'),
            },
            success: function (data) {
                var data = JSON.parse(data);
                var listitems = '<select class="page_subtype_js" data-sn="'+pta_sn+'">';
                jQuery.each(data.data.sub_page.list, function(key, value){
                    var selected= '';
                    if(data.data.sub_page.detail.id == value.id){
                        var selected= 'selected';
                    }
                    listitems += '<option value="'+value.id+'" '+selected+'>' + value.anchor_type + '</option>';
                });
                listitems += '</select>';
                jQuery('.page-subtype-name-' + pta_sn).html(listitems);
                jQuery('#idl-prcnt-' + pta_sn).html('<div class="pta_btn_icon"><i class="far fa-chart-bar"></i></div>'+data.data.popup);
                jQuery(".page_subtype_js").change(function () {
                    var selected_id = jQuery('option:selected',this).attr('value');
                    on_change_page_subtype(pta_sn, selected_id);
                });
            }
        });
    });
    
    jQuery('.tip-hover').hover(function () {
        var pta_tbl_sn = jQuery(this).data('tip-sn');
        jQuery('#tip-table-hover-' + pta_tbl_sn).show();
        var browser_height = parseInt( window.innerHeight );
        var browser_height_half = Math.round( browser_height / 2 );
        var top_div_height = parseInt( document.getElementById('tip-table-hover-' + pta_tbl_sn).getBoundingClientRect().top );
        var pop_div_height = parseInt( document.getElementById('tip-table-hover-' + pta_tbl_sn).offsetHeight );
        var top_plus_popup = parseInt( document.getElementById('tip-table-hover-' + pta_tbl_sn).getBoundingClientRect().bottom );
//        var top_plus_popup = Math.round( Math.round(top_div_height) + Math.round(pop_div_height) );
        
        var is_btn_top_crossed = parseInt( document.getElementById('idl-prcnt-' + pta_tbl_sn).getBoundingClientRect().top );
        var btn_height = parseInt( document.getElementById('idl-prcnt-' + pta_tbl_sn).offsetHeight );
        var is_btn_btm_crossed = browser_height - parseInt( document.getElementById('idl-prcnt-' + pta_tbl_sn).getBoundingClientRect().bottom );
//        console.log(parseInt( document.getElementById('tip-table-hover-' + pta_tbl_sn).getBoundingClientRect().bottom ));
        
        var is_pop_crssoed_btm = top_plus_popup - browser_height;
        
        if( browser_height > top_plus_popup ){
            document.getElementById('tip-table-hover-' + pta_tbl_sn).style.removeProperty('bottom');
            if(is_btn_top_crossed < 1){
                document.getElementById('tip-table-hover-' + pta_tbl_sn).style.top = 5 + ( Math.abs(is_btn_top_crossed) )+'px';
            }else{
                document.getElementById('tip-table-hover-' + pta_tbl_sn).style.top = '5px';
            }
            
        }else{
            if(browser_height_half > top_div_height ){
                document.getElementById('tip-table-hover-' + pta_tbl_sn).style.removeProperty('bottom');
                if( (pop_div_height - top_div_height -top_div_height) < 1 ){
                    document.getElementById('tip-table-hover-' + pta_tbl_sn).style.top = (pop_div_height - top_div_height -top_div_height) +'px';
                }else{
                    document.getElementById('tip-table-hover-' + pta_tbl_sn).style.top = '5px';
                }
            }else{
                document.getElementById('tip-table-hover-' + pta_tbl_sn).style.removeProperty('top');
                if(is_btn_btm_crossed < 1){
                    document.getElementById('tip-table-hover-' + pta_tbl_sn).style.bottom = 5 + ( Math.abs(is_btn_btm_crossed) )+'px';
                }else{
                    if( (is_pop_crssoed_btm > 1) && (( top_div_height > is_pop_crssoed_btm)) ){       
                        if( (pop_div_height - top_div_height) > 1 ){
                            document.getElementById('tip-table-hover-' + pta_tbl_sn).style.bottom = (top_div_height - pop_div_height) +'px';
                        }else{
                            document.getElementById('tip-table-hover-' + pta_tbl_sn).style.bottom = '5px';
                        }
                    }else{
                        document.getElementById('tip-table-hover-' + pta_tbl_sn).style.bottom = '5px';
                    }
                }
            }
        }
        console.log('browser_: '+browser_height+' browser_2: '+browser_height_half+' top_div_: '+top_div_height+' pop_div_: '+pop_div_height+' top_plus_:'+top_plus_popup);
    },function () {
            var pta_tbl_sn = jQuery(this).data('tip-sn');
            document.getElementById('tip-table-hover-' + pta_tbl_sn).style.removeProperty('top');
            document.getElementById('tip-table-hover-' + pta_tbl_sn).style.removeProperty('bottom');
            jQuery('#tip-table-hover-' + pta_tbl_sn).hide();
        }
    );
    
    jQuery(".page_subtype").change(function () {
        var selected_id = jQuery('option:selected',this).attr('value');
        var pta_sn = jQuery(this).data('sn');
        on_change_page_subtype(pta_sn, selected_id);
    });
    
</script>

