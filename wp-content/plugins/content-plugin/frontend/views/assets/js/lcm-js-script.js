jQuery(document).ready(function () {
    (function (b, s, t, u) {
        b.fn.checkBo = function (c) {
            c = b.extend({}, {
                checkAllButton: null,
                checkAllTarget: null,
                checkAllTextDefault: null,
                checkAllTextToggle: null
            }, c);
            return this.each(function () {
                function g(a) {
                    this.input = a
                }
                function k() {
                    var a = b(this).is(":checked");
                    b(this).closest("label").toggleClass("checked", a)
                }
                function l(a, b, c) {
                    a.parent(e).hasClass("checked") ? a.text(c) : a.text(b)
                }
                function m(a) {
                    var c = a.attr("data-show");
                    a = a.attr("data-hide");
                    b(c).removeClass("is-hidden");
                    b(a).addClass("is-hidden")
                }
                var f = b(this),
                        e = f.find(".cb-checkbox"),
                        h = f.find(".cb-radio"),
                        n = e.find("input:checkbox"),
                        p = h.find("input:radio");
                n.wrap('<span class="cb-inner"><i></i></span>');
                p.wrap('<span class="cb-inner"><i></i></span>');
                var q = new g("input:checkbox"),
                        r = new g("input:radio");
                g.prototype.checkbox = function (a) {
                    var b = a.find(this.input).is(":checked");
                    a.find(this.input).prop("checked", !b).trigger("change")
                };
                g.prototype.radiobtn = function (a, c) {
                    var d = b('input:radio[name="' + c + '"]');
                    d.prop("checked", !1);
                    d.closest(d.closest(h)).removeClass("checked");
                    a.addClass("checked");
                    a.find(this.input).get(0).checked = a.hasClass("checked");
                    a.find(this.input).change()
                };
                n.on("change", k);
                p.on("change", k);
                e.find("a").on("click", function (a) {
                    a.stopPropagation()
                });
                e.on("click", function (a) {
                    a.preventDefault();
                    q.checkbox(b(this));
                    a = b(this).attr("data-toggle");
                    b(a).toggleClass("is-hidden");
                    m(b(this))
                });
                h.on("click", function (a) {
                    a.preventDefault();
                    r.radiobtn(b(this), b(this).find("input:radio").attr("name"));
                    m(b(this))
                });
                if (c.checkAllButton && c.checkAllTarget) {
                    var d = b(this);
                    d.find(b(c.checkAllButton)).on("click", function () {
                        d.find(c.checkAllTarget).find("input:checkbox").each(function () {
                            d.find(b(c.checkAllButton)).hasClass("checked") ? d.find(c.checkAllTarget).find("input:checkbox").prop("checked", !0).change() : d.find(c.checkAllTarget).find("input:checkbox").prop("checked", !1).change()
                        });
                        l(d.find(b(c.checkAllButton)).find(".toggle-text"), c.checkAllTextDefault, c.checkAllTextToggle)
                    });
                    d.find(c.checkAllTarget).find(e).on("click", function () {
                        d.find(c.checkAllButton).find("input:checkbox").prop("checked", !1).change().removeClass("checked");
                        l(d.find(b(c.checkAllButton)).find(".toggle-text"), c.checkAllTextDefault, c.checkAllTextToggle)
                    })
                }
                f.find('[checked="checked"]').closest("label").addClass("checked");
                f.find("input").is("input:disabled") && f.find("input:disabled").closest("label").off().addClass("disabled")
            })
        }
    })(jQuery, window, document);
//    jQuery('.lcm_filter_form').checkBo();
    jQuery('.lcm_term_and_condtion').checkBo();
})
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

function open_popup_form(formname) {
    showPopup('popup_form_' + formname);
}
//------- item popup form open end ---------
function onclick_lcm_btn_expand(id) {
    jQuery('.lcm_btn_expand' + id).hide();
    jQuery('#col-exp-full-decs' + id).show();
    jQuery('#col-exp-half-decs' + id).hide();
    jQuery('.lcm_btn_collapse' + id).show();
}

function onclick_lcm_btn_collapse(id) {
    jQuery('.lcm_btn_collapse' + id).hide();
    jQuery('#col-exp-half-decs' + id).show();
    jQuery('#col-exp-full-decs' + id).hide();
    jQuery('.lcm_btn_expand' + id).show();
}
jQuery(document).ready(function () {
    var max_fields = 5;
    var add_new_tactic = jQuery(".add_new_tactic");
    var add_button = jQuery(".lcm_tool_included_add_btn");
    var x = 1;
    jQuery('.lcm_tools_inc').checkBo();
    jQuery(add_button).click(function (e) {
        e.preventDefault();
        if (x < max_fields) {
            x++;
            jQuery(add_new_tactic).append('<div class="lcm_tools_inc new_tools_inc_' + x + '">\n\
                                                <input class="form-control" type="text" name="tool_included_name[]">\n\
                                                <input class="form-control" type="url" name="tool_included_url[]">\n\
                                                <input type="hidden" value="0" name="tool_included_df[]">\n\
                                                <label class="cb-checkbox">\n\
                                                    <input type="checkbox" name="tool_included_df[]">DF\n\
                                                </label>\n\
                                                <a href="#" class="lcm_anchor_cancel-btn lcm_anchor_small-btn delete lcm-add-more-btn">Delete</a>\n\
                                            </div>'); //add input box
            jQuery('.new_tools_inc_' + x).checkBo();
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

jQuery('#lcm-i-ajax-data').submit(function (event) {
    var lcm_item_submit_btn = document.getElementById('lcm_item_submit_btn');
    tinyMCE.triggerSave();
    var formData = new FormData(document.getElementById('lcm-i-ajax-data'));
    formData.append("action", "lcm_item_submit");
    lcm_item_submit_btn.setAttribute('disabled', true);
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
                jQuery('.lcm-i-submit-error').empty();
                jQuery('.lcm-i-submit-error').append(result.last_error);
                lcm_item_submit_btn.removeAttribute('disabled');
            } else {
                alert('Something is going to wrong. Please try latter.');
                lcm_item_submit_btn.removeAttribute('disabled');
            }
        }
    });
});

//function tactic_sort() {
//    var sort_by = document.getElementById("tactic_sort_by").value;
//    var divList = jQuery(".tactic_lists");
//    if (sort_by == 'vote_asc') {
//        divList.sort(function (a, b) {
//            return jQuery(a).data("vote") - jQuery(b).data("vote")
//        });
//    } else if (sort_by == 'vote_desc') {
//        divList.sort(function (a, b) {
//            return jQuery(b).data("vote") - jQuery(a).data("vote")
//        });
//    } else if (sort_by == 'name_asc') {
//        divList.sort(function (a, b) {
//            return String.prototype.localeCompare.call(jQuery(a).attr('data-tacticname').toLowerCase(), jQuery(b).attr('data-tacticname').toLowerCase());
//        });
//    } else if (sort_by == 'name_desc') {
//        divList.sort(function (a, b) {
//            return String.prototype.localeCompare.call(jQuery(b).attr('data-tacticname').toLowerCase(), jQuery(a).attr('data-tacticname').toLowerCase());
//        });
//    }
//    jQuery("#lcm_list").empty();
//    jQuery("#lcm_list").html(divList);
//}

jQuery(document).ready(function () {
    
    //------------ lcm item pupup form open ----------------
    jQuery('.lcm-i-x').click(function (event) {
        event.preventDefault();
        jQuery('.lcm-i-form').hide();
        jQuery('.lcm-i-popup').hide();
    });
    //------------ lcm item pupup form open end ----------------
    
    jQuery('.lcm-com-exp-col-bar').click(function () {
        var id = jQuery(this).data('id');
        if(jQuery('#lcm-cihs-'+id).css('display') == 'none'){
            jQuery( '#cihs-icn-'+id ).removeClass( 'fa-arrow-circle-down' ).addClass( "fa-arrow-circle-up" );
            jQuery('#lcm-cihs-'+id).css("display", "block");
        }else{
            jQuery( '#cihs-icn-'+id ).removeClass( 'fa-arrow-circle-up' ).addClass( "fa-arrow-circle-down" );
            jQuery('#lcm-cihs-'+id).css("display", "none");
        }
    });
    
    jQuery(document).on('change', '#tactic_sort_by', function () {
        var sort_by = document.getElementById("tactic_sort_by").value;
        var divList = jQuery(".tactic_lists");
        if (sort_by == 'vote_asc') {
            divList.sort(function (a, b) {
                return jQuery(a).data("vote") - jQuery(b).data("vote")
            });
        } else if (sort_by == 'vote_desc') {
            divList.sort(function (a, b) {
                return jQuery(b).data("vote") - jQuery(a).data("vote")
            });
        } else if (sort_by == 'name_asc') {
            divList.sort(function (a, b) {
                return String.prototype.localeCompare.call(jQuery(a).attr('data-tacticname').toLowerCase(), jQuery(b).attr('data-tacticname').toLowerCase());
            });
        } else if (sort_by == 'name_desc') {
            divList.sort(function (a, b) {
                return String.prototype.localeCompare.call(jQuery(b).attr('data-tacticname').toLowerCase(), jQuery(a).attr('data-tacticname').toLowerCase());
            });
        }
        jQuery("#lcm_list").empty();
        jQuery("#lcm_list").html(divList);
    });
    
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

jQuery(document).ready(function () {
    var max_fields = 10;
    var add_new_tool_img = jQuery(".add_new_tool_img");
    var add_button = jQuery("#new_tool_img");
    var x = 1;
    jQuery(add_button).click(function (e) {
        e.preventDefault();
        if (x < max_fields) {
            x++;
            var html = '<div class="lcm_tool_img_form_inline">\n\
                            <input class="form-control" type="text" name="img_caption[]">&nbsp;\n\
                            <input class="form-control" type="file" name="img_path[]" accept="image/*" value="Upload">&nbsp;\n\
                            <div class="lcm_anchor_cancel-btn lcm_tool_img_add_btn delete lcm-add-more-btn">Delete</div>\n\
                        </div>';
            jQuery(add_new_tool_img).append(html); //add input box
        } else {
            alert('You Reached the limits');
        }
    });
    jQuery(add_new_tool_img).on("click", ".delete", function (e) {
        e.preventDefault();
        jQuery(this).parent('div').remove();
        x--;
    });
});

jQuery(document).ready(function () {
    var max_fields = 5;
    var add_new_tactic = jQuery(".add_new_link_field");
    var add_button = jQuery("#lcm_add_link_btn");
    var x = 1;
    jQuery(add_button).click(function (e) {
        e.preventDefault();
        if (x < max_fields) {
            x++;
            jQuery(add_new_tactic).append('<div class="lcm_tools_inc new_tools_inc_' + x + '">\n\
                                                <input class="form-control" type="text" name="link_name[]">\n\
                                                <input class="form-control" type="url" name="link_url[]">\n\
                                                <input type="hidden" value="0" name="link_df[]">\n\
                                                <label class="cb-checkbox">\n\
                                                    <input type="checkbox" name="link_df[]">DF\n\
                                                </label>\n\
                                                <textarea name="link_desc[]" placeholder="" class="tool-pop-desc"></textarea>\n\
                                                <a href="#" class="lcm_anchor_cancel-btn lcm_anchor_small-btn lcm-add-more-btn delete">Delete</a>\n\
                                            </div>'); //add input box
            jQuery('.new_tools_inc_' + x).checkBo();
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

jQuery(document).ready(function () {
    var max_fields = 10;
    var add_new_tool_img = jQuery(".add_form_field_vid");
    var add_button = jQuery("#add_new_tool_vid_link");
    var x = 1;
    jQuery(add_button).click(function (e) {
        e.preventDefault();
        if (x < max_fields) {
            x++;
            var html_content = '<div class="lcm_tool_img_form_inline">\n\
                                    <input name="videos[]" class="form-control" type="text" placeholder="Give vimeo or youtube links"/>&nbsp;\n\
                                    <div class="lcm_anchor_cancel-btn lcm_tool_vdo_add_btn lcm-add-more-btn delete">Delete <span>+</span></div>\n\
                                </div>';
            jQuery(add_new_tool_img).append(html_content); //add input box
        } else {
            alert('You Reached the limits');
        }
    });
    jQuery(add_new_tool_img).on("click", ".delete", function (e) {
        e.preventDefault();
        jQuery(this).parent('div').remove();
        x--;
    });
});

function tool_sort() {
    var sort_by = document.getElementById("tool_sort_by").value;
    var divList = jQuery(".tool_lists");
    if (sort_by == 'vote_asc') {
        divList.sort(function (a, b) {
            return jQuery(a).data("vote") - jQuery(b).data("vote")
        });
    } else if (sort_by == 'vote_desc') {
        divList.sort(function (a, b) {
            return jQuery(b).data("vote") - jQuery(a).data("vote")
        });
    } else if (sort_by == 'name_asc') {
        divList.sort(function (a, b) {
            return String.prototype.localeCompare.call(jQuery(a).attr('data-tool_name').toLowerCase(), jQuery(b).attr('data-tool_name').toLowerCase());
        });
    } else if (sort_by == 'name_desc') {
        divList.sort(function (a, b) {
            return String.prototype.localeCompare.call(jQuery(b).attr('data-tool_name').toLowerCase(), jQuery(a).attr('data-tool_name').toLowerCase());
        });
    }
    jQuery("#lcm_list").empty();
    jQuery("#lcm_list").html(divList);
}

function tactic_filter() {
    var tactic_name = '';
    var name = '';
    var tool_types = [];
    name = document.getElementById("name").value;
    tactic_name = document.getElementById("tactic_search_by_tactic_name").value.toLowerCase();
    tool_include = document.getElementById("lcm_is_tool_included").checked;
    tool_types_free = document.getElementById("lcm_tactic_filter_free").checked;
    tool_types_paid = document.getElementById("lcm_tactic_filter_paid").checked;

    if (tool_types_free == true) {
        tool_types.push('Free');
    }
    if (tool_types_paid == true) {
        tool_types.push('Paid');
    }
    jQuery(".tactic_lists").hide();
    jQuery('.tactic_lists').each(function () {
        var string = jQuery(this).data('tacticname').toLowerCase(), substring = tactic_name;
        if (tool_types.length > 0) {
            if (tactic_name != '') {
                if (name != '') {
                    if (tool_include == true) {
                        if ((tool_types.includes(jQuery(this).data('tool_types')) == true) && (jQuery(this).data('name') == name) && (jQuery(this).data('tool_include') > 0)) {
                            if (string.includes(substring)) {
                                jQuery(this).show();
                            }
                        }
                    } else {
                        if ((tool_types.includes(jQuery(this).data('tool_types')) == true) && (jQuery(this).data('name') == name)) {
                            if (string.includes(substring)) {
                                jQuery(this).show();
                            }
                        }
                    }
                } else {
                    if (tool_include == true) {
                        if ((tool_types.includes(jQuery(this).data('tool_types')) == true) && (jQuery(this).data('tool_include') > 0)) {
                            if (string.includes(substring)) {
                                jQuery(this).show();
                            }
                        }
                    } else {
                        if (tool_types.includes(jQuery(this).data('tool_types')) == true) {
                            if (string.includes(substring)) {
                                jQuery(this).show();
                            }
                        }
                    }
                }
            } else {
                if (name != '') {
                    if (tool_include == true) {
                        if ((tool_types.includes(jQuery(this).data('tool_types')) == true) && (jQuery(this).data('name') == name) && (jQuery(this).data('tool_include') > 0)) {
                            jQuery(this).show();
                        }
                    } else {
                        if ((tool_types.includes(jQuery(this).data('tool_types')) == true) && (jQuery(this).data('name') == name)) {
                            jQuery(this).show();
                        }
                    }
                } else {
                    if (tool_include == true) {
                        if ((tool_types.includes(jQuery(this).data('tool_types')) == true) && (jQuery(this).data('tool_include') > 0)) {
                            jQuery(this).show();
                        }
                    } else {
                        if (tool_types.includes(jQuery(this).data('tool_types')) == true) {
                            jQuery(this).show();
                        }
                    }
                }
            }
        } else {
            if (tactic_name != '') {
                if (name != '') {
                    if (tool_include == true) {
                        if (string.includes(substring) && (jQuery(this).data('name') == name) && (jQuery(this).data('tool_include') > 0)) {
                            jQuery(this).show();
                        }
                    } else {
                        if (string.includes(substring) && (jQuery(this).data('name') == name)) {
                            jQuery(this).show();
                        }
                    }
                } else {
                    if (string.includes(substring)) {
                        jQuery(this).show();
                    }
                }
            } else {
                if (name != '') {
                    if (tool_include == true) {
                        if ((jQuery(this).data('name') == name) && (jQuery(this).data('tool_include') > 0)) {
                            jQuery(this).show();
                        }
                    } else {
                        if (jQuery(this).data('name') == name) {
                            jQuery(this).show();
                        }
                    }
                } else {
                    if (tool_include == true) {
                        if ((jQuery(this).data('tool_include') > 0)) {
                            jQuery(this).show();
                        }
                    } else {
                        jQuery(this).show();
                    }
                }
            }
        }
    });
}

jQuery(document).on('click keyup','.lcm-tool-filter', function () {
    
    var filter_tool_lists = document.getElementById('lcm-tool-list-by-id').value;
    filter_tool_lists = JSON.parse(filter_tool_lists);
    
    //----- getting tool search name---------
    var tool_name_seached = document.getElementById("tool_search_by_tool_name").value.toLowerCase();
    
    //------ getting checked type lists-------
    let type_chkd_arr = [];
    $(".tool_filter_by_type input[type=checkbox]").each(function() {
        var is_checked = (this.checked ? $(this).val() : null);
        if(is_checked != null){
            type_chkd_arr.push((this.checked ? $(this).val() : null));
        }
    });
    
    //------ getting checked price lists-------
    let price_chkd_arr = [];
    $(".tool_filter_by_price input[type=checkbox]").each(function() {
        var is_price_checked = (this.checked ? $(this).val() : null);
        if(is_price_checked != null){
            price_chkd_arr.push((this.checked ? $(this).val() : null));
        }
    });
    
    var lcm_tool_ids = [];
    //---- for this id (tool_detail.id)-------
    filter_tool_lists.forEach(function(tool_detail) {
        
        //------- name check ---------
        var name_this = false;
        if(tool_name_seached != ''){
            var string = (tool_detail.tool_name).toLowerCase(), substring = tool_name_seached;
            if (string.includes(substring)) {
                name_this = true;
            }
        }else{
            name_this = true;
        }
        
        //------ type check-------
        var type_this = false;
        if(type_chkd_arr.length > 0){
            var detail_types = JSON.parse(tool_detail.type);
            for (var i = 0; i < detail_types.length; i++) {
                if (type_chkd_arr.indexOf(detail_types[i]) > -1) {
                    type_this = true;
                    break;
                }
            }
        }else{
            type_this = true;
        }
        
        var price_this = false;
        if(price_chkd_arr.length > 0){
            var detail_price = (tool_detail.price);
            price_chkd_arr.forEach(function(checked_price) {
                if (detail_price.includes(checked_price)) { 
                    price_this = true;
                }
            });
        }else{
            price_this = true;
        }
        
        if(name_this == true && price_this == true && type_this == true ){
            lcm_tool_ids.push(tool_detail.id);
            //console.log(tool_detail.id);
        }
    });
    lcm_tool_ids = JSON.stringify(lcm_tool_ids);
    //-- hide all data------
    jQuery('.tool_lists').hide();
    jQuery('.tool_lists').each(function () {
        var lcm_tool_to_show = jQuery(this);
        var this_tool_id = lcm_tool_to_show.data('id');
        if (lcm_tool_ids.includes(this_tool_id) == true) {
            lcm_tool_to_show.show();
        }
    });
});

