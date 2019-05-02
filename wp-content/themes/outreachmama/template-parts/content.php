<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php twentysixteen_excerpt(); ?>
	
	<header class="entry-header">
		<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
			<span class="sticky-post"><?php _e( 'Featured', 'twentysixteen' ); ?></span>
		<?php endif; ?>

		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	</header><!-- .entry-header -->

	<?php twentysixteen_post_thumbnail(); ?>

	<div class="entry-content test">
		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),
				get_the_title()
			) );

			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentysixteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
		?>
	</div><!-- .entry-content -->
	
	<header class="entry-header case-study">
		<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
			<span class="sticky-post"><?php _e( 'Featured', 'twentysixteen' ); ?></span>
		<?php endif; ?>

		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	</header><!-- .entry-header -->
	
	<div class="meta_data_box"><?php
                    $display_date = get_option('display_date');
                    $display_author = get_option('display_author');
                    if ($display_author == 0) {
                        ?>
                        <div class="metadate">
                            <i class="fa fa-user"></i><?php _e('Posted by ', 'wp_blog_designer'); ?><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><span><?php the_author(); ?></span></a><br />
                        </div><?php
                    }
                    if ($display_date == 0) {
                        ?>
                        <div class="metauser">
                            <span class="mdate"><i class="fa fa-calendar"></i> <?php the_time(__('F d, Y')); ?></span>
                        </div><?php
                    }
                    if (get_option('display_category') == 0) {
                        ?>
                        <div class="metacats">
                            <div class="icon-cats"></div>
                            <?php
                            $categories_list = get_the_category_list(__(', ', 'wp_blog_designer'));
                            if ($categories_list):
                                printf(__('%2$s', 'wp_blog_designer'), 'entry-utility-prep entry-utility-prep-tag-links', $categories_list);
                                $show_sep = true;
                            endif;
                            ?>
                        </div><?php
                    }
                    if (get_option('display_comment_count') == 0) {
                        ?>
                        <div class="metacomments">
                            <div class="icon-comment"></div>
                            <?php comments_popup_link(__('No Comments', 'wp_blog_designer'), __('1 Comment', 'wp_blog_designer'), __('% Comments', 'wp_blog_designer')); ?>
                        </div><?php }
                        ?>
                </div>
                <div class="social-component">
                    <?php if (get_option('facebook_link') == 0): ?>
                        <a href="<?php echo 'https://www.facebook.com/sharer/sharer.php?u=' . get_the_permalink(); ?>" target= _blank class="facebook-share"><i class="fa fa-facebook"></i></a>
                    <?php endif; ?>
                    <?php if (get_option('twitter_link') == 0): ?>
                        <a href="<?php echo 'http://twitter.com/share?&url=' . get_the_permalink(); ?>" target= _blank class="twitter"><i class="fa fa-twitter"></i></a>
                    <?php endif; ?>
                    <?php if (get_option('google_link') == 0): ?>
                        <a href="<?php echo 'https://plus.google.com/share?url=' . get_the_permalink(); ?>" target= _blank class="google"><i class="fa fa-google-plus"></i></a>
                    <?php endif; ?>
                    <?php if (get_option('linkedin_link') == 0): ?>
                        <a href="<?php echo 'http://www.linkedin.com/shareArticle?url=' . get_the_permalink(); ?>" target= _blank class="linkedin"><i class="fa fa-linkedin"></i></a>
                    <?php endif; ?>
                    <?php if (get_option('instagram_link') == 0): ?>
                        <a href="<?php echo 'mailto:enteryour@addresshere.com?subject=Share and Follow&body=' . get_the_permalink(); ?>" target= _blank class="instagram"><i class="fa fa-envelope-o"></i></a>
                    <?php endif; ?>
                    <?php if (get_option('pinterest_link') == 0): ?>
                        <a href="<?php echo '//pinterest.com/pin/create/button/?url=' . get_the_permalink(); ?>" target= _blank class="pinterest"> <i class="fa fa-pinterest"></i></a>
                    <?php endif; ?>
                </div>
                <div class="post_content"><?php
                if (get_option('rss_use_excerpt') == 0):
                    the_content();
                else:
                    global $post;
                    the_excerpt(__('Continue reading <span class="meta-nav">&rarr;</span>', 'wp_blog_designer'));
                    if (get_option('read_more_text') != '') {
                        echo '<a class="more-tag" href="' . get_permalink($post->ID) . '">' . get_option('read_more_text') . ' </a>';
                    } else {
                        echo ' <a class="more-tag" href="' . get_permalink($post->ID) . '">' . __("Read More", "wp_blog_designer") . '</a>';
                    }
                endif;
                ?>
            </div>

	<footer class="entry-footer">
		<?php twentysixteen_entry_meta(); ?>
		<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
		?>
	</footer><!-- .entry-footer -->
	
</article><!-- #post-## -->
