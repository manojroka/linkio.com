
function lcm_admin_delete(url = null) {
    if (url != null) {
        var delete_conform = confirm("Are you sure? you want to delete ?");
        if (delete_conform == true) {
            window.location = url;
        } else {
            return false;
            //event.preventDefault();
        }
    }
}
//--------- append images to tool form ---------------
jQuery(document).ready(function () {
    var max_fields = 10;
    var add_new_tool_img = jQuery(".add_new_tool_img");
    var add_button = jQuery(".add_form_field");
    var x = 1;
    jQuery(add_button).click(function (e) {
        e.preventDefault();
        if (x < max_fields) {
            x++;
            jQuery(add_new_tool_img).append('<div><!--<input name="img_caption[]" class="regular-text" type="text" placeholder=""/>--><input type="file" name="img_path[]" accept="image/*" /> <a href="#" class="delete">Delete</a></div>'); //add input box
        } else
        {
            alert('You Reached the limits');
        }
    });
    jQuery(add_new_tool_img).on("click", ".delete", function (e) {
        e.preventDefault();
        jQuery(this).parent('div').remove();
        x--;
    });
});
jQuery(document).on("click", ".lcm_tool_img_delete", function () {
    jQuery(this).parent('div').remove();
});

jQuery(document).on("click", ".delete_video_url", function () {
    jQuery(this).parent('div').remove();
});

//----------- timit word count start-----------------
jQuery(document).on("keypress", ".limit_title", function () {
    var limit_count = 15;
    var content = jQuery(this).val(); //content is now the value of the text box
    var words = content.split(/\s+/); //words is an array of words, split by space
    var num_words = words.length; //num_words is the number of words in the array
    var max_limit = limit_count;
    if (num_words > max_limit) {
        event.preventDefault();
        alert("Maximum Limit is "+limit_count+" word.");
        return false;
    }
});
//----------- timit word count end-----------------
//--------- append tactic tools_included to tactic form ---------------
jQuery(document).ready(function () {
    var max_fields = 15;
    var add_new_tactic = jQuery(".add_new_tactic");
    var add_button = jQuery(".add_tactic_field");
    var x = 1;
    jQuery(add_button).click(function (e) {
        e.preventDefault();
        if (x < max_fields) {
            x++;
            jQuery(add_new_tactic).append('<div><input class="regular-text" type="text" name="tool_included_name[]" required>\n\
                                                <input class="regular-text" type="url" name="tool_included_url[]" required>\n\
                                                <input type="hidden" value="0" name="tool_included_df[]">\n\
                                                <input class="regular-text" type="checkbox" name="tool_included_df[]">DF \n\
                                                <a href="#" class="delete">Delete</a>\n\
                                            </div>'); //add input box
        } else {
            alert('You Reached the limits');
        }
    });
    jQuery(add_new_tactic).on("click", ".delete", function (e) {
        e.preventDefault();
        jQuery(this).parent('div').remove();
        x--;
    });
});
jQuery(document).on("click", ".tool_include_delete", function () {
    jQuery(this).parent('div').remove();
});
jQuery(document).on("click", ".delete_link", function () {
    jQuery(this).parent('div').remove();
});


jQuery(document).ready(function () {
    var max_fields = 15;
    var add_new_tool_link = jQuery(".new_link_field");
    var add_button = jQuery("#add_link_btn");
    var x = 1;
    jQuery(add_button).click(function (e) {
        e.preventDefault();
        if (x < max_fields) {
            x++;
            jQuery(add_new_tool_link).append('<div><input class="regular-text" type="text" name="link_name[]">\n\
                                                <input class="regular-text" type="url" name="link_url[]">\n\
                                                <input type="hidden" value="0" name="link_df[]">\n\
                                                <input class="regular-text" type="checkbox" name="link_df[]">DF\n\
                                                <textarea name="link_desc[]" class="addnal-link-desc"></textarea>\n\
                                                <div class="lcm-remove-btn-sm delete">Delete<span>-</span></div>\n\
                                            </div>'); //add input box
        } else {
            alert('You Reached the limits');
        }
    });
    jQuery(add_new_tool_link).on("click", ".delete", function (e) {
        e.preventDefault();
        jQuery(this).parent('div').remove();
        x--;
    });
});

jQuery(document).on("click", "#add_new_category", function () {
    var lcm_home_url = document.getElementById("lcm_home_url").value;
    var module = document.getElementById("module").value;
    var new_category_name = document.getElementById("cat_name").value;
    if(new_category_name == ''){
        alert('This field can not be null.');
        return false;
    }
    //jQuery('#categories_list').hide();
    jQuery.ajax({
        url: lcm_home_url+'/wp-admin/admin-ajax.php',
        type: 'post',
        data: {
           'action':'lcm_tactic_category',
           'perform_action':'_category_add',
           'category_name':new_category_name,
           'module':module,
           },
        success: function (data) {
            var result = JSON.parse(data);
            if(result.status == true){
                //console.log(result.categories);
                var option_html = '';
                jQuery("#categories_list").html('');
                jQuery.each(result.categories, function(i, categories){
                    //console.log(result.categories[i].id);
                    option_html += '<option class="regular-text" value="'+result.categories[i].id+'">' + result.categories[i].name + '</option>';
                });
                alert('Successfully added.');
                var select_html = '<select multiple="" name="category[]" id="lcm-selected-category">'
                                        +option_html+
                                    '</select>\n\
                                    <div class="button button-delete" id="lcm-delete-category">Delete Category<span> -</span></div>';
                
                jQuery("#categories_list").html(select_html);
                document.getElementById("cat_name").value = '';
                //location.reload(true);
            }else{
                alert('Something is going to wrong. Please try latter.');
            }
        }
    });
});

jQuery(document).on("click", "#lcm-delete-category", function () {
    var lcm_home_url = document.getElementById("lcm_home_url").value;
    var module = document.getElementById("module").value;
    var selected_ids = [];
    jQuery('#lcm-selected-category :selected').each(function(){
        selected_ids[jQuery(this).val()]=$(this).val();
    });
    if(selected_ids.length == 0){
        alert('Please Select The Category First.');
        return false;
    }
    jQuery.ajax({
        url: lcm_home_url+'/wp-admin/admin-ajax.php',
        type: 'post',
        data: {
           'action':'lcm_tactic_category',
           'perform_action':'_category_remove',
           'selected_ids':selected_ids,
           'module':module,
           },
        success: function (data) {
            var result = JSON.parse(data);
            if(result.status == true){
                console.log(result.categories);
                var option_html = '';
                jQuery("#categories_list").html('');
                if(result.categories.length > 0){
                    jQuery.each(result.categories, function(i, categories){
                        //console.log(result.categories[i].id);
                        option_html += '<option class="regular-text" value="'+result.categories[i].id+'">' + result.categories[i].name + '</option>';
                    });
                    alert('Successfully Removed.');
                    var select_html = '<select multiple="" name="category[]" id="lcm-selected-category">'
                                            +option_html+
                                        '</select>\n\
                                        <div class="button button-delete" id="lcm-delete-category">Delete Category<span> -</span></div>';
                    jQuery("#categories_list").html(select_html);
                    document.getElementById("cat_name").value = '';
                    //location.reload(true);   
                }else{
                    alert('Successfully Removed.');
                    jQuery("#categories_list").html('');
                }
            }else{
                alert('Something is going to wrong. Please try latter.');
            }
        }
    });
    
});

jQuery(document).on("click", "#add_new_type", function () {
    var lcm_home_url = document.getElementById("lcm_home_url").value;
    var module = document.getElementById("module").value;
    var new_type_name = document.getElementById("typ_name").value;
    if(new_type_name == ''){
        alert('This field can not be null.');
        return false;
    }
    //jQuery('#categories_list').hide();
    jQuery.ajax({
        url: lcm_home_url+'/wp-admin/admin-ajax.php',
        type: 'post',
        data: {
           'action':'lcm_tool_type',
           'perform_action':'_type_add',
           'type_name':new_type_name,
           'module':module,
           },
        success: function (data) {
            var result = JSON.parse(data);
            if(result.status == true){
                //console.log(result);
                var option_html = '';
                jQuery("#types_list").html('');
                jQuery.each(result.types, function(i, types){
                    //console.log(result.types[i].id);
                    option_html += '<option class="regular-text" value="'+result.types[i].id+'">' + result.types[i].name + '</option>';
                });
                alert('Successfully added.');
                var select_html = '<select multiple="" name="type[]" id="lcm-selected-type" required>'
                                        +option_html+
                                    '</select>\n\
                                    <div class="button button-delete" id="lcm-delete-type">Remove<span> -</span></div>';
                jQuery("#types_list").html(select_html);
                document.getElementById("typ_name").value = '';
                //location.reload(true);
            }else{
                alert('Something is going to wrong. Please try latter.');
            }
        }
    });
});

jQuery(document).on("click", "#lcm-delete-type", function () {
    var lcm_home_url = document.getElementById("lcm_home_url").value;
    var module = document.getElementById("module").value;
    var selected_ids = [];
    jQuery('#lcm-selected-type :selected').each(function(){
        selected_ids[jQuery(this).val()]=$(this).val();
    });
    if(selected_ids.length == 0){
        alert('Please Select The Type First.');
        return false;
    }
    jQuery.ajax({
        url: lcm_home_url+'/wp-admin/admin-ajax.php',
        type: 'post',
        data: {
           'action':'lcm_tool_type',
           'perform_action':'_type_remove',
           'selected_ids':selected_ids,
           'module':module,
           },
        success: function (data) {
            var result = JSON.parse(data);
            if(result.status == true){
                //console.log(result.types);
                var option_html = '';
                jQuery("#types_list").html('');

                if(result.types.length > 0){
                    jQuery.each(result.types, function(i, types){
                        //console.log(result.categories[i].id);
                        option_html += '<option class="regular-text" value="'+result.types[i].id+'">' + result.types[i].name + '</option>';
                    });
                    alert('Successfully Removed.');
                    var select_html = '<select multiple="" name="type[]" id="lcm-selected-type" required>'
                                            +option_html+
                                        '</select>\n\
                                        <div class="button button-delete" id="lcm-delete-type">Remove<span> -</span></div>';
                    jQuery("#types_list").html(select_html);
                    document.getElementById("typ_name").value = '';
                    //location.reload(true);   
                }else{
                    alert('Successfully Removed.');
                    jQuery("#types_list").html('');
                }
            }else{
                alert('Something is going to wrong. Please try latter.');
            }
        }
    }); 
});

jQuery(document).ready(function () {
    var max_fields = 10;
    var add_new_tool_img = jQuery(".add_new_tool_vid_link");
    var add_button = jQuery(".add_form_field_vid");
    var x = 1;
    jQuery(add_button).click(function (e) {
        e.preventDefault();
        if (x < max_fields) {
            x++;
            jQuery(add_new_tool_img).append('<div><input class="regular-text" type="text" name="videos[]" placeholder="Give vimeo or youtube links"/> <a href="#" class="delete">Delete</a></div>'); //add input box
        } else
        {
            alert('You Reached the limits');
        }
    });
    jQuery(add_new_tool_img).on("click", ".delete", function (e) {
        e.preventDefault();
        jQuery(this).parent('div').remove();
        x--;
    });
});
jQuery(document).on("click", ".lcm_tool_img_delete", function () {
    jQuery(this).parent('div').remove();
});

jQuery(document).on("click", "#lcm-remove-quote-headshot", function () {
    jQuery('#quote-headshot-img').empty();
    jQuery('#quote-headshot-img').html('<input type="hidden" name="headshot">');
});

jQuery(document).on("click", "#lcm-remove-web-logo", function () {
    jQuery('#web-logo-img').empty();
    jQuery('#web-logo-img').html('<input type="hidden" name="website_logo">');
});


