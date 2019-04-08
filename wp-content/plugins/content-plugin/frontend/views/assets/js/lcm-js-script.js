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

jQuery(document).on('click', '#lcm-open-i-form', function () {
    var module_name = jQuery('#lcm-open-i-form').attr('data-module');
    showPopup('popup_form_' + module_name);
});
//------- item popup form open end ---------

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
    var qry_self = jQuery('#lcm-search-query');
    var qry_string = document.getElementById('lcm-search-query').value;
    if(qry_string == ''){
        jQuery('.lcm-i-lists').each(function () {
            jQuery(this).show();
        });
        return false;
    }else{
        jQuery.ajax({
            url: document.getElementById('lcm_home_url').value + '/wp-admin/admin-ajax.php',
            type: 'post',
            data: {
                action: 'lcm_get_search_item_ids',
                template_id: qry_self.attr('data-template_id'),
                module: qry_self.attr('data-module'),
                qry_string: qry_string,
            },
            success: function (data) {
                if (data.success == true) {
                    var ids = [];
                    data.data.msg.forEach(function(detail) {
                        ids.push(detail.id);
                    });
                    ids = JSON.stringify(ids);
                    jQuery('.lcm-i-lists').hide();
                    jQuery('.lcm-i-lists').each(function () {
                        var this_div = jQuery(this);
                        if( ids.includes(this_div.data('id') ) == true ) {
                            this_div.show();
                        }
                    });
                }else{
                    alert(data.data.msg);
                }
            }
        });
    }
});

jQuery(document).on('click','#lcm-i-sort', function () {
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