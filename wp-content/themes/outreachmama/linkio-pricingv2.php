<?php
/**
 * Template Name: Linkio Pricing V2
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
get_header();
?>
<div id="primary" class="content-area common-inner">
    <main id="main" class="site-main" role="main">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <div class="section1">
            <div class="row">
                <?php the_field('section_1_title'); ?>
                <div class="tabs-section">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#home">Monthly Billing</a></li>
                        <div class="Switch switch-tabbed-common Round Off">
                            <div class="Toggle"></div>
                        </div>
                        <li><a data-toggle="tab" data-toggle="tooltip" href="#menu1">Annual Billing</a></li>        
                    </ul>
                </div>
                <div class="tab-content">
                    <div id="home" class="tab-pane fade in active">
                        <div class="pricing_repeater">
                            <?php if (have_rows('pricing_repeater')): ?>
                                <ul class="pricing-ul">
                                    <?php while (have_rows('pricing_repeater')): the_row(); ?>
                                        <li class="pricing-li">
                                            <div class="pricing-title">
                                                <?php the_sub_field('pricing_title') ?>
                                            </div>
                                            <div class="pricing-price">
                                                <?php the_sub_field('price') ?>
                                            </div>
                                            <div class="web-count">
                                                <?php the_sub_field('web_count') ?>
                                            </div>
                                            <div class="analyzed-count">
                                                <?php the_sub_field('analyzed_count') ?>
                                            </div>
                                            <div class="automation">
                                                <p><?php the_sub_field('automation') ?></p>
                                            </div>
                                            <div class="users-unlimit">
                                                <?php the_sub_field('users') ?>
                                            </div>
                                            <div class="pricing-btn">
                                                <a href="<?php the_sub_field('button_url') ?>"><?php the_sub_field('button_text') ?></a>
                                            </div>
                                            <div class="pricing-desc">
                                                <?php the_sub_field('short_description') ?>
                                            </div>
                                            <div class="pricing-btn">
                                                <a href="<?php the_sub_field('button_url') ?>"><?php the_sub_field('button_text') ?></a>
                                            </div>
                                        </li>
                                    <?php endwhile; ?>

                                </ul>
                                <p class="price-shown">*Prices shown are billed monthly</p>
                            <?php endif; ?>  
                        </div>
                    </div>
                    <div id="menu1" class="tab-pane fade">
                        <div class="pricing_repeater">
                            <?php if (have_rows('pricing_repeater_annuall')): ?>
                                <ul class="pricing-ul">
                                    <?php while (have_rows('pricing_repeater_annuall')): the_row(); ?>
                                        <li class="pricing-li">
                                            <div class="pricing-title">
                                                <?php the_sub_field('pricing_title_annuall') ?>
                                            </div>
                                            <div class="pricing-price">
                                                <?php the_sub_field('price_annuall') ?>
                                            </div>
                                            <div class="web-count">
                                                <?php the_sub_field('web_count_annuall') ?>
                                            </div>
                                            <div class="analyzed-count">
                                                <?php the_sub_field('analyzed_count_annuall') ?>
                                            </div>
                                            <div class="automation">
                                                <p><?php the_sub_field('automation_annuall') ?></p>
                                            </div>
                                            <div class="users-unlimit">
                                                <?php the_sub_field('users_annuall') ?>
                                            </div>
                                            <div class="pricing-btn">
                                                <a href="<?php the_sub_field('button_url_annuall') ?>"><?php the_sub_field('button_text_annuall') ?></a>
                                            </div>
                                            <div class="pricing-desc">
                                                <?php the_sub_field('short_description_annuall') ?>
                                            </div>
                                            <div class="pricing-btn">
                                                <a href="<?php the_sub_field('button_url_annuall') ?>"><?php the_sub_field('button_text_annuall') ?></a>
                                            </div>
                                        </li>
                                    <?php endwhile; ?>

                                </ul>
                                <p class="price-shown">*Prices shown are billed monthly</p>
                            <?php endif; ?>  
                        </div>
                    </div>    
                </div>
            </div>
        </div>
        <div class="section10 section1">
            <div class="row">
                <h2><?php the_field('section_2_title'); ?></h2>
                <div class="anchor-btn">
                    <a class="anchor-btn-1" href="<?php the_field('section2_button_1_url'); ?>"><?php the_field('section2_button_1_text'); ?></a>
                    <a class="anchor-btn-2" href="<?php the_field('section2_button_2_url'); ?>"><?php the_field('section2_button_2_text'); ?></a>
                </div>
            </div>
        </div>
    </main><!-- .site-main -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script>
        $(document).ready(function () {

            // Switch Click
            $('.Switch').click(function () {

                // Check If Enabled (Has 'On' Class)
                if ($(this).hasClass('On')) {

                    // Try To Find Checkbox Within Parent Div, And Check It
                    $(this).parent().find('input:checkbox').attr('checked', true);

                    // Change Button Style - Remove On Class, Add Off Class
                    $(this).removeClass('On').addClass('Off');
                    $('#menu1').removeClass('active in');
                    $('.nav.nav-tabs li:first-child').addClass('active');
                    $('.nav.nav-tabs li:last-child').removeClass('active');
                    $('#home').addClass('active in');

                } else {// If Button Is Disabled (Has 'Off' Class)

                    // Try To Find Checkbox Within Parent Div, And Uncheck It
                    $(this).parent().find('input:checkbox').attr('checked', false);

                    // Change Button Style - Remove Off Class, Add On Class
                    $(this).removeClass('Off').addClass('On');
                    $('#menu1').addClass('active in');
                    $('#home').removeClass('active in');
                    $('.nav.nav-tabs li:first-child').removeClass('active');
                    $('.nav.nav-tabs li:last-child').addClass('active');

                }

            });

            // Loops Through Each Toggle Switch On Page
            $('.Switch').each(function () {

                // Search of a checkbox within the parent
                if ($(this).parent().find('input:checkbox').length) {

                    // This just hides all Toggle Switch Checkboxs
                    // Uncomment line below to hide all checkbox's after Toggle Switch is Found
                    //$(this).parent().find('input:checkbox').hide();

                    // For Demo, Allow showing of checkbox's with the 'show' class
                    // If checkbox doesnt have the show class then hide it
                    if (!$(this).parent().find('input:checkbox').hasClass("show")) {
                        $(this).parent().find('input:checkbox').hide();
                    }
                    // Comment / Delete out the above line when using this on a real site

                    // Look at the checkbox's checkked state
                    if ($(this).parent().find('input:checkbox').is(':checked')) {

                        // Checkbox is not checked, Remove the 'On' Class and Add the 'Off' Class
                        $(this).removeClass('On').addClass('Off');

                    } else {

                        // Checkbox Is Checked Remove 'Off' Class, and Add the 'On' Class
                        $(this).removeClass('Off').addClass('On');

                    }

                }

            });

        });

    ////////////////////////////////////////////////////////
    // Ignore This Bit - Only To Load Syntax Highlighting //
    ////////////////////////////////////////////////////////

//        $.getScript("https://alexgorbatchev.com/pub/sh/current/scripts/shCore.js", function () {
//            $.getScript("https://alexgorbatchev.com/pub/sh/current/scripts/shBrushJScript.js", function () {
//                $.getScript("https://agorbatchev.typepad.com/pub/sh/3_0_83/scripts/shBrushXml.js", function () {
//                    $.getScript("https://agorbatchev.typepad.com/pub/sh/3_0_83/scripts/shBrushCss.js", function () {
//                        SyntaxHighlighter.all();
//                    });
//                });
//            });
//        });

    // - Ignore End
    //# sourceURL=pen.js
    </script>

    <?php get_sidebar('content-bottom'); ?>
</div><!-- .content-area -->
<?php
get_footer();
