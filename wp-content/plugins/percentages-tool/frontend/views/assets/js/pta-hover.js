/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



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

        var top_div_height = null;
        var pop_div_height = null;
        var top_plus_popup = null;
        if(document.getElementById('tip-table-hover-' + pta_tbl_sn) != null ){
            var top_div_height = parseInt( document.getElementById('tip-table-hover-' + pta_tbl_sn).getBoundingClientRect().top );
            var pop_div_height = parseInt( document.getElementById('tip-table-hover-' + pta_tbl_sn).offsetHeight );
            var top_plus_popup = parseInt( document.getElementById('tip-table-hover-' + pta_tbl_sn).getBoundingClientRect().bottom );
        }

        var is_btn_top_crossed = parseInt( document.getElementById('idl-prcnt-' + pta_tbl_sn).getBoundingClientRect().top );
        var is_btn_btm_crossed = browser_height - parseInt( document.getElementById('idl-prcnt-' + pta_tbl_sn).getBoundingClientRect().bottom );
        var is_pop_crssoed_btm = top_plus_popup - browser_height;

        if( browser_height > top_plus_popup ){
            if(document.getElementById('tip-table-hover-' + pta_tbl_sn) != null ){
                document.getElementById('tip-table-hover-' + pta_tbl_sn).style.removeProperty('bottom');
                if(is_btn_top_crossed < 1){
                    document.getElementById('tip-table-hover-' + pta_tbl_sn).style.top = 5 + ( Math.abs(is_btn_top_crossed) )+'px';
                }else{
                    document.getElementById('tip-table-hover-' + pta_tbl_sn).style.top = '5px';
                }
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
            if(document.getElementById('tip-table-hover-' + pta_tbl_sn) != null){
                document.getElementById('tip-table-hover-' + pta_tbl_sn).style.removeProperty('top');
                document.getElementById('tip-table-hover-' + pta_tbl_sn).style.removeProperty('bottom');
                jQuery('#tip-table-hover-' + pta_tbl_sn).hide();
            }
        }
    );
    
    jQuery(".page_subtype").change(function () {
        var selected_id = jQuery('option:selected',this).attr('value');
        var pta_sn = jQuery(this).data('sn');
        on_change_page_subtype(pta_sn, selected_id);
    });

