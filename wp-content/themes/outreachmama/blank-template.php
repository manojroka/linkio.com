<?php
/**
 * Template Name: Content Full Width Template
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<?php get_header(); ?>
<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <div class="row-1100">
            <?php  get_template_part('template-parts/content', get_post_format()); ?>
        </div>
    </main><!-- .site-main -->
</div><!-- .content-area -->
<?php get_footer('clean'); ?>