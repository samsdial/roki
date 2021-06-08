<?php
/**
 * Post rendering content according to caller of get_template_part
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<div class="row mb-5 pb-5">
	<div class="col-12 col-md-4">
		<div class="box-sidebar-poliza">
			<div class="title mb-5">
				<h2>
					<?php
						the_title();
					?>
				</h2>
			</div><!-- Sidebar title -->
			<figure class="img text-right">
				<img src="<?php echo get_the_post_thumbnail_url( $post->ID, 'full' ); ?>" alt="" class="img-fluid mb-2">
			</figure><!-- Sidebar image -->
		</div>
	</div>
	<div class="col">

		<article class="box-poliza-list ml-4 mr-4 mb-5" <?php post_class(); ?> id="post-<?php the_ID(); ?>">

			<header class="title text-center text-uppercase mb-5">
				<h2>Descripción</h2>
			</header><!-- .entry-header -->

			<div class="entry-content">
					<?php the_field( 'mini_descripcion' ); ?>

					<figure class="img text-center mb-3">
						<img src="<?php the_field( 'imagen_description' ); ?>" alt="" class="img-fluid mb-2">
					</figure>
					<?php
					the_title(
						sprintf( '<div class="entry-link"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
						'</a></div>'
						);
					?>

				<?php
					wp_link_pages(
						array(
							'before' => '<div class="page-links page-poliza">' . __( 'Pages:', 'understrap' ),
							'after'  => '</div>',
						)
					);
				?>

			</div><!-- .entry-content -->
		</article><!-- #post-## -->
	</div>
</div>

