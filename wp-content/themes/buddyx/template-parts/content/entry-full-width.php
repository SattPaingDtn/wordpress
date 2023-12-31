<?php
/**
 * Template part for displaying a post's content
 *
 * @package buddyx
 */

namespace BuddyX\Buddyx;

?>

<?php do_action( 'buddyx_entry_content_before' ); ?>

<div class="entry-content">
	<?php
	if ( has_post_thumbnail() && ! post_password_required() && is_singular() ) {

		?>

		<figure class="featured-media">

			<div class="featured-media-inner section-inner">

				<?php the_post_thumbnail(); ?>

			</div><!-- .featured-media-inner -->

		</figure><!-- .featured-media -->

		<?php
	}

	the_content(
		sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'buddyx' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		)
	);

	wp_link_pages(
		array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'buddyx' ),
			'after'  => '</div>',
		)
	);
	?>
</div><!-- .entry-content -->

<?php do_action( 'buddyx_entry_content_after' ); ?>
