<?php
/**
 * Post rendering content according to caller of get_template_part
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article class="box-hotels-list mr-4 mb-5" <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<header class="title text-uppercase mb-5">
		<?php
		the_title(
			sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
			'</a></h2>'
		);
		?>
	</header><!-- .entry-header -->
	<figure class="img text-center">
		<img src="<?php echo get_the_post_thumbnail_url( $post->ID, 'full' ); ?>" alt="" class="img-fluid mb-2">
	</figure>

	<div class="entry-content">

		<?php the_excerpt(); ?>

		<?php
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
				'after'  => '</div>',
			)
		);
		?>

	</div><!-- .entry-content -->
</article><!-- #post-## -->
