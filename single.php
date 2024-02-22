<?php
/**
 * Theme Single Post Section for our theme.
 *
 * @package ThemeGrill
 * @subpackage Ample
 * @since Ample 0.1
 */

get_header();

	do_action( 'ample_before_body_content' ); ?>

	<div class="single-page clearfix">
		<div class="inner-wrap">
			<div id="primary">
				<div id="content">

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'content', 'single' ); ?>

						<?php if ( ( ample_option( 'ample_author_bio_setting', 0 ) == 1 ) && ( get_the_author_meta( 'description' ) ) ) { ?>
							<div class="author-box clearfix">
								<div class="author-img"><?php echo get_avatar( get_the_author_meta( 'user_email' ), '100' ); ?></div>
								<div class="author-description-wrapper">
									<h4 class="author-name"><?php the_author_meta( 'display_name' ); ?></h4>

									<p class="author-description"><?php the_author_meta( 'description' ); ?></p>
								</div>
							</div>
						<?php } ?>

						<?php if ( ample_option( 'ample_related_posts_setting', 0 ) == 1 ) {
							get_template_part( 'inc/related-posts' );
						} ?>

						
					<?php endwhile; ?>
				</div>
			</div>

		</div><!-- .inner-wrap -->
	</div><!-- .single-page -->

	<?php do_action( 'ample_after_body_content' );
get_footer(); ?>
