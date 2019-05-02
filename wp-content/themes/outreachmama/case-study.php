<?php
/**
 * Template Name: Case Study Template
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */


get_header(); ?>
<div class="subs-header">
<div class="h1-title"><h1>A Live Over-The-Shoulder SEO Ranking Case Study</h1></div>
<div class="h2-title"><h2>Subscribe Now</h2></div>
<div class="subscribe"><?php if (function_exists('tve_leads_form_display')) { tve_leads_form_display(0, 1684); } ?></div>
</div>

<div class="row-1015 blog">
	<div id="primary" class="content-area">
	<div class="case-study"><p>Want to know what’s working right now to rank sites in Google?<br/><span>Subscribe to our monthly link building case study as we grow OutreachMama.com into a #1 ranked website</span></p></div>
		<main id="main" class="site-main" role="main">

         <?php 

			$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
			
			$custom_args = array(
			  'post_type' => 'post',      
			  'category_name' => 'case-studies-page',    
			  'posts_per_page' => 4,
			  'paged' => $paged
			);
			
			$custom_query = new WP_Query( $custom_args ); ?>
			
			<?php if ( $custom_query->have_posts() ) : ?>
			
			<!-- the loop -->
			<?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
			  <div class="loop blog_template bdp_blog_template box-template active lightbreeze <?php echo $alterclass; ?>">
					<div class="post-image"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a></div>
					<div class="blog_header">
						<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
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
					</div><?php
					if (get_option('display_tag') == 0) {
						$tags_list = get_the_tag_list('', __(', ', 'wp_blog_designer'));
						if ($tags_list):
							?>
							<div class="tags">
								<div class="icon-tags"></div>
								<?php
								printf(__('%2$s', 'wp_blog_designer'), 'entry-utility-prep entry-utility-prep-tag-links', $tags_list);
								$show_sep = true;
								?>
							</div><?php
						endif;
					}
					if ((get_option('facebook_link') == 0) || (get_option('twitter_link') == 0) || (get_option('google_link') == 0) || (get_option('linkedin_link') == 0) || (get_option('instagram_link') == 0) || ( get_option('pinterest_link') == 0 )) {
						?>
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
						</div><?php }
						?>
				   
						
				</div>
			<?php endwhile; ?>
			<!-- end of the loop -->
			
			<!-- pagination here -->
			<?php
			  if (function_exists(custom_pagination)) {
				custom_pagination($custom_query->max_num_pages,"",$paged);
			  }
			?>
			
			<?php wp_reset_postdata(); ?>
			
			<?php else:  ?>
			<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
			

        

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
