/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function on_change_page_subtype(pta_sn, selected_id){
    jQuery('#idl-prcnt-' + pta_sn).empty();
    jQuery.ajax({
        url: document.getElementById("pta_home_url").value + '/wp-admin/admin-ajax.php',
        type: 'post',
        dataType: 'html',
        data: {
            action: 'pta_ajax_get_ideal_percent',
            pta_sn:pta_sn,
            id: selected_id,
        },
        success: function (data) {
            var data = JSON.parse(data);
            jQuery('#idl-prcnt-' + pta_sn).html('<div class="pta_btn_icon"><i class="far fa-chart-bar"></i></div>'+data.data.popup);
        }
    });
}


jQuery('#submit_pta_form_data').submit(function (event) {
    var formData = new FormData(document.getElementById('submit_pta_form_data'));
    jQuery('.add_table').empty();
    jQuery('.add_table').append('<p>Please Wait, We are fetching report...</p>');
    formData.append("action", "pta_generate_url_list");
    document.getElementById('pta_item_submit_btn').setAttribute("disabled", true);
    event.preventDefault();
    jQuery.ajax({
        url: document.getElementById("pta_home_url").value + '/wp-admin/admin-ajax.php',
        type: 'post',
        data: formData,
        cache: false,
        processData: false,
        dataType: 'html',
        contentType: false,
        success: function (data) {
            var result = JSON.parse(data);
            jQuery('.add_table').empty();
            jQuery('.add_table').append(result.data.msg);
            document.getElementById('pta_item_submit_btn').removeAttribute('disabled');
        }
    });
});

