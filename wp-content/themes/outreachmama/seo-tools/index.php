<!-- Header - New -->
<div id="seo-tools-header-new">
    <div class="container">
        <h1 id="seo-titles-new">
            <strong>Best SEO tools</strong>
            <div id="gray-title">The Complete List</div>
            <div id="blue-title">2018 Update</div>
        </h1>
    </div>
</div>
<!-- Intro -->
<div class="seo-tools-description">
    <div class="container">
        <p>This SEO tools guide has EVERYTHING you need to pick the perfect SEO software.</p>
        <p>We personally reviewed <span id="green-description"><?= $tools_count; ?> free and paid tools</span>.</p>
        <p>So read the summaries, check out screenshots, watch videos, upvote your favorites, filter by categories and check out the user reviews.</p>
        <p>Finding your perfect search engine optimization tool is just a click away!</p>
    </div>
</div>

<div class="seo-tools">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div id="seo-tools-sidebar">
                    <div class="seo-tools-search">
                        <div class="box-title">
                            <h5>Find the best SEO tool</h5>
                            <img src="<?php echo get_template_directory_uri(); ?>/seo-tools/images/icon-clear-filters.png" id="clear-filters"  data-toggle="tooltip" data-placement="top" title="Click to clear all filters" />
                        </div>
                        <div id="tooltip-results"></div>
                        <form id="search-form">
                            <div class="form-group">
                                <label class="input-labels" for="search">Search:</label>
                                <input type="text" id="search" placeholder="Find your SEO tool" />
                            </div>
                            <label class="input-labels" for="type">Filter by type:</label>						
                            <div id="type">
                                <div class="checkbox">								
                                    <input id="one" type="checkbox" class="filter-type" value="Link_Building" />
                                    <label for="one"><span>Link Building</span></label>														
                                </div>
                                <div class="checkbox">								
                                    <input id="two" type="checkbox" class="filter-type" value="Technical_SEO" />
                                    <label for="two"><span>Technical SEO</span></label>
                                </div>
                                <div class="checkbox">
                                    <input id="three" type="checkbox" class="filter-type" value="Rank_Tracking" />
                                    <label for="three"><span>Rank Tracking</span></label>															
                                </div>
                                <div class="checkbox">						
                                    <input id="four" type="checkbox" class="filter-type" value="Content_Optimization" />
                                    <label for="four"><span>Content Optimization</span></label>
                                </div>
                                <div class="checkbox">						
                                    <input id="five" type="checkbox" class="filter-type" value="Keyword_Research" />
                                    <label for="five"><span>Keyword Research</span></label>
                                </div>
                                <div class="checkbox">							
                                    <input id="six" type="checkbox" class="filter-type" value="Backlink_Analysis" />
                                    <label for="six"><span>Backlink Analysis</span></label>
                                </div>
                            </div>
                            <label class="input-labels" for="price">Filter by price:</label>
                            <div id="price">
                                <button id="Free" type="button" class="btn btn-default filter-price">Free</button>
                                <button id="Paid" type="button" class="btn btn-default filter-price">Paid</button>
                                <button id="Freemium" type="button" class="btn btn-default filter-price">Freemium</button>
                            </div>
                            <label class="input-labels" for="sort">Sort:</label>
                            <select id="sort" class="form-control">
                                <option value="votes:desc" selected>By rating &#x25BC;</option>
                                <option value="votes:asc">By rating &#x25B2;</option>
                                <option value="name:asc">Tool name A-Z</option>
                                <option value="name:desc">Tool name Z-A</option>
                            </select>
                            <hr>
                            <div class="add-btn">
                                <button id="add-new" type="button" class="btn btn-default" data-target="#modal-add-new-tool" data-toggle="modal" role="button"><i class="fa fa-plus-circle"></i>Add new tool</button>
                            </div>
                        </form>					
                    </div>
                </div>
            </div>
            <div class="col-md-9" id="seo-tools-results-wrapper">
                <div id="seo-tools-results">
                    <?php $initialId = 'disqus_thread'; // Quick Hack - add disqus_thread id to 1st tool only ?>
                    <?php $j = 1; $hidden = '';
                    foreach ($tools as $tool) {
                        if ($j > 5){ $hidden = ''; } ?>
                        <div class="seo-tool <?php echo $hidden; ?>" id="tool<?php echo $tool->id; ?>">
                            <h2><a class="toggle-info"><i class="fa fa-caret-right"></i><?php echo $tool->name; ?></a></h2>
                            <div class="voting">
                                <a href="#" class="upvote" data-tool-id="<?php echo $tool->id; ?>" data-toggle="tooltip" data-placement="top" title="Click to vote +1">
                                    <i class="fa fa-caret-up"></i>
                                    <span class="num-vote"><?php echo $tool->votes; ?></span>
                                </a>
                            </div>
                            <div class="meta">
                                <h5><?php echo str_replace(array(',', '_'), array(', ', ' '), $tool->type); ?></h5>
                                <h5><?php echo $tool->price; ?><h5>
                            </div>
                            <p><?php $toolSummary = $tool->summary;
                                    if (isset($_REQUEST['simplify']))
                                        $toolSummary = ''; echo $toolSummary; ?>
                            </p>
                            <div class="quick-links">
                                <h3>Quick Links</h3>
                                <?php
                                /* Tool's Links */
                                $link1 = fixUrl($tool->link1);
                                $link2 = fixUrl($tool->link2);
                                $link3 = fixUrl($tool->link3);
                                $link4 = fixUrl($tool->link4);
                                $link5 = fixUrl($tool->link5);
                                $homeFollow = ($tool->home_dofollow ? '' : 'rel="nofollow"');
                                $doFollow1 = ($tool->link1_dofollow ? '' : 'rel="nofollow"');
                                $doFollow2 = ($tool->link2_dofollow ? '' : 'rel="nofollow"');
                                $doFollow3 = ($tool->link3_dofollow ? '' : 'rel="nofollow"');
                                $doFollow4 = ($tool->link4_dofollow ? '' : 'rel="nofollow"');
                                $doFollow5 = ($tool->link5_dofollow ? '' : 'rel="nofollow"');
                                ?>
                                <?php if ($tool->homepage_url != '') echo "<h6><a href='{$tool->homepage_url}' {$homeFollow} target='_blank'>Homepage<i class='fa fa-external-link'></i></a></h6>"; ?>
                                <?php if ($link1 != '') echo "<h6><a href='{$link1}' {$doFollow1} target='_blank'>{$tool->link1_text}<i class='fa fa-external-link'></i></a></h6>"; ?>
                                <?php if ($link2 != '') echo "<h6><a href='{$link2}' {$doFollow2} target='_blank'>{$tool->link2_text}<i class='fa fa-external-link'></i></a></h6>"; ?>
                                <?php if ($link3 != '') echo "<h6><a href='{$link3}' {$doFollow3} target='_blank'>{$tool->link3_text}<i class='fa fa-external-link'></i></a></h6>"; ?>
                                <?php if ($link4 != '') echo "<h6><a href='{$link4}' {$doFollow4} target='_blank'>{$tool->link4_text}<i class='fa fa-external-link'></i></a></h6>"; ?>
                                <?php if ($link5 != '') echo "<h6><a href='{$link5}' {$doFollow5} target='_blank'>{$tool->link5_text}<i class='fa fa-external-link'></i></a></h6>"; ?>
                            </div>
                            <p class="detailed-desc"><?php
                                $toolDesc = $tool->description;
                                if (isset($_REQUEST['simplify']))
                                    $toolDesc = '';
                                echo $toolDesc; ?>
                            </p>
                            <?php if ($tool->img1 != '') { // We have at least 1 image ...  ?>
                            <div class="tool-images">
                                <h3><?php echo $tool->name; ?> images</h3>
                                    <?php for ($i = 1; $i <= 5; $i++) { ?>
                                    <?php $img = "img" . $i;
                                    $imgText = $img . '_text';
                                    if (isset($tool->$img) && ($tool->$img != '')) { ?>
                                        <img data-src="<?php echo $tool->$img; ?>" alt="<?php echo strtolower($imgText); ?>" title="<?php echo $imgText; ?>" />
                                    <?php } } ?>
                            </div>
                            <?php } ?>
                            <?php if ($tool->video1 != '') { // We have at least 1 video ...  ?>
                            <div class="tool-videos">
                                <h3><?php echo $tool->name; ?> videos</h3>
                                <?php for ($i = 1; $i <= 3; $i++) { ?>
                                <?php $video = "video" . $i;
                                if (isset($tool->$video) && ($tool->$video != '')) { ?>
                                    <iframe width="720" height="405" data-src="<?php echo str_replace('/watch?v=', '/embed/', $tool->$video); ?>" frameborder="0" allowfullscreen></iframe>
                                <?php } } ?>
                            </div>
                            <?php } ?>
                            

                            <?php if ($initialId == 'disqus_thread') $initialId = ''; // Reset initial id after 1st loop  ?>
                        </div>
                        <?php $j++; } ?>
                    </div>
                    <div class="seo-tool-ajax-loding" id="loding">
                        <div class="seo-tool-ajax-loader">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End SEO Tools Content aaa -->
    <div id="go-to-top" title="Go to top"><i class="fa fa-angle-up"></i></div>
    <input type="hidden" value="<?= get_home_url() ?>" id="st_home_url">

<?php  
echo '<noscript>';
foreach ($tools_noscript as $too) { ?>
                <div>
                    <h2><a><?php echo $too->name; ?></a></h2>
                    <div>
                        <h5><?php echo str_replace(array(',', '_'), array(', ', ' '), $too->type); ?></h5>
                        <h5><?php echo $too->price; ?></h5>
                    </div>
                    <p><?php echo $too->summary; ?></p>
                </div>
<?php }
echo '</noscript>';
?>

<script type="text/javascript">
    var loading = false;
    var seo_tools_contents_page = 1;
    jQuery(window).scroll(function () {
        // console.log(seoTools.length);
        var home_url = document.getElementById("st_home_url").value;
        var total_count = '<?= $tools_count ?>';
        if (seoTools.length >= total_count) {
            return false;
        }
        if (jQuery(window).scrollTop() + jQuery(window).height() > jQuery(document).height() - 800) { // Used to be -100 - near rock bottom
            if (loading == false) {
                jQuery('.seo-tool-ajax-loding').css("display", "block");
                loading = true;
                var seo_tools_contents_offset = (5) * (seo_tools_contents_page);
                jQuery.ajax({
                    url: home_url + '/wp-admin/admin-ajax.php',
                    type: 'POST',
                    data: {
                        action: 'load_more_seo_tools_contents',
                        seo_tools_contents_offset: seo_tools_contents_offset,
                    },
                    dataType: 'html',
                    success: function (data) {
                        //console.log(data);
                        if (data != 'null') {
                            jQuery('#seo-tools-results').append(data);
                            jQuery('.seo-tool-ajax-loding').css("display", "none");
                            loading = false;
                            seo_tools_contents_page++;
                        } else {
                            jQuery('.seo-tool-ajax-loding').css("display", "none");
                        }
                    },
                });
            }
        }
    });
    var call_seo_tools_ajax = false;
    jQuery(document).ready(function () {
        jQuery(document).on('click', '#search , #type input, #price button', function () {
            call_seo_tools_ajax_func();
        });
        jQuery('#sort').change(function () {
            call_seo_tools_ajax_func();
        });
        function call_seo_tools_ajax_func() {
            var home_url = document.getElementById("st_home_url").value;
            if (call_seo_tools_ajax == false) {
                jQuery.ajax({
                    url: home_url + '/wp-admin/admin-ajax.php',
                    type: 'POST',
                    data: {
                        action: 'load_all_seo_tools_contents',
                    },
                    dataType: 'html',
                    success: function (data) {
                        seoTools = JSON.parse(data);
                    },
                });
            } else {
                //console.log('already called');
                call_seo_tools_ajax = true;
            }
        }
    });
</script>
