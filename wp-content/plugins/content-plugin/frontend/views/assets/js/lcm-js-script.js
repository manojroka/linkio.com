//----------- limit word start-----------------
jQuery(document).on("keypress", ".limit_word", function () {
    var limit_count = 15;
    var content = jQuery(this).val(); //content is now the value of the text box
    var words = content.split(/\s+/); //words is an array of words, split by space
    var num_words = words.length; //num_words is the number of words in the arraydelet
    var max_limit = limit_count;
    if (num_words > max_limit) {
        event.preventDefault();
        alert("Maximum Limit is " + limit_count + " word.");
        return false;
    }
});
//----------- limit word end-----------------

//------- item popup form open ---------
function showPopup(whichpopup) {
    var docHeight = jQuery(document).height();
    var scrollTop = jQuery(window).scrollTop();
    jQuery('.lcm-i-popup').show().css({'height': docHeight});
    jQuery('#' + whichpopup).show();
}

jQuery(document).on('click', '#lcm-open-i-form', function () {
    var module_name = jQuery('#lcm-open-i-form').attr('data-module');
    showPopup('popup_form_' + module_name);
});
jQuery( window ).on( "load", function(){
    if(document.getElementById("new-i-form-popup") != null){
        var module_name = document.getElementById("new-i-form-popup").value;
        showPopup('popup_form_' + module_name);
    }
});
//------- item popup form open end ---------

jQuery('#lcm-i-ajax-data').submit(function (event) {
    var lcm_item_submit_btn = document.getElementById('lcm_item_submit_btn');
    tinyMCE.triggerSave();
    var formData = new FormData(document.getElementById('lcm-i-ajax-data'));
    formData.append("action", "lcm_item_submit");
    if(document.getElementById('lcm-i-url-status') != null){
        formData.append("status", document.getElementById('lcm-i-url-status').value);
    }else{
        formData.append("status", "Published");
    }
    lcm_item_submit_btn.setAttribute('disabled', true);
    jQuery('.lcm-i-submit-error').empty();
    event.preventDefault();
    jQuery.ajax({
        url: document.getElementById("lcm_home_url").value + '/wp-admin/admin-ajax.php',
        type: 'post',
        data: formData,
        cache: false,
        processData: false,
        contentType: false,
        success: function (data) {
            var result = JSON.parse(data);
            if (result.status == true) {
                alert('Your data has been sucessfully added.');
                window.location.href = result.lcm_refferer_url;
            } else if (result.status == false) {
                //jQuery('.lcm-i-submit-error').empty();
                result.last_error.forEach(function(detail) {
                    jQuery('#'+detail.id).append('<p>'+detail.msg+'</p>');
                });
                lcm_item_submit_btn.removeAttribute('disabled');
            } else {
                alert('Something is going to wrong. Please try latter.');
                lcm_item_submit_btn.removeAttribute('disabled');
            }
        }
    });
});

jQuery(document).ready(function () {
    
    //------------ lcm item pupup form open ----------------
    jQuery('.lcm-i-x').click(function (event) {
        event.preventDefault();
        jQuery('.lcm-i-form').hide();
        jQuery('.lcm-i-popup').hide();
    });
    //------------ lcm item pupup form open end ----------------
    
    jQuery(document).on('click', '.update_vote', function () {
        var self = this;
        //jQuery(self).addClass('vote-loading-icon');
        jQuery(self).children('.num-vote').empty();
        jQuery(self).children('.num-vote').append('Voting..');
        jQuery.ajax({
            url: document.getElementById('lcm_home_url').value + '/wp-admin/admin-ajax.php',
            type: 'post',
            data: {
                action: 'update_vote_count',
                item_id: jQuery(this).data('id'),
                template_id: jQuery(this).data('template_id'),
                module_id: jQuery(this).data('module_id'),
                module: jQuery(this).data('module'),
                vote_count: jQuery(this).data('vote_count'),
            },
            success: function (data) {
                if (data.success == true) {
                    //jQuery(self).removeClass('vote-loading-icon');
                    jQuery(self).children('.num-vote').empty();
                    jQuery(self).children('.num-vote').text('Votes: ' + data.data.vote_count);
                } else {
                    alert(data.data.msg);
                    //jQuery(self).removeClass('vote-loading-icon');
                    jQuery(self).children('.num-vote').empty();
                    jQuery(self).children('.num-vote').text('Votes: ' + data.data.vote_count);
                }
            }
        });
    });
});

jQuery(document).on('click','#lcm-do-search', function () {
    var do_srch_btn = document.getElementById('lcm-do-search');
    event.preventDefault();
    do_srch_btn.setAttribute('disabled', true);
    var qry_self = jQuery('#lcm-search-query');
    var qry_string = document.getElementById('lcm-search-query').value;
    jQuery('.tmp-no-match').remove();
    jQuery.ajax({
        url: document.getElementById('lcm_home_url').value + '/wp-admin/admin-ajax.php',
        type: 'post',
        dataType: 'json',
        data: {
            action: 'lcm_get_search_item_ids',
            template_id: qry_self.attr('data-template_id'),
            module: qry_self.attr('data-module'),
            qry_string: qry_string,
        },
        success: function (data) {
            if(data.success == false){
                alert(data.data.msg);
            }else{
                jQuery('#lcm_list').html('');
                jQuery('#lcm_list').html(data.data.msg);
            }
            do_srch_btn.removeAttribute('disabled');
        }
    });
});

jQuery(document).on('change','#lcm-i-sort', function () {
    var sort_by = document.getElementById("lcm-i-sort").value;
    var divList = jQuery(".lcm-i-lists");
    if (sort_by == 'rating_asc') {
        divList.sort(function (a, b) {
            return jQuery(a).data("rating") - jQuery(b).data("rating")
        });
    } else if (sort_by == 'rating_desc') {
        divList.sort(function (a, b) {
            return jQuery(b).data("rating") - jQuery(a).data("rating")
        });
    } else if (sort_by == 'name_asc') {
        divList.sort(function (a, b) {
            return String.prototype.localeCompare.call(jQuery(a).attr('data-i-title').toLowerCase(), jQuery(b).attr('data-i-title').toLowerCase());
        });
    } else if (sort_by == 'name_desc') {
        divList.sort(function (a, b) {
            return String.prototype.localeCompare.call(jQuery(b).attr('data-i-title').toLowerCase(), jQuery(a).attr('data-i-title').toLowerCase());
        });
    }
    jQuery("#lcm_list").empty();
    jQuery("#lcm_list").html(divList);
});