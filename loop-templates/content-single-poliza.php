<?php
/**
 * Post rendering content according to caller of get_template_part
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<div class="box-sidebar-poliza mb-5">
	<div class="row">
		<div class="col-12 text-center">
			<div class="title text-uppercase mb-5">
				<h2>
					<?php
						the_title();
					?>
				</h2>
			</div><!-- Sidebar title -->
			<figure class="img text-right">
				<img src="<?php echo get_the_post_thumbnail_url( $post->ID, 'full' ); ?>" alt="pliza" class="img-fluid max mb-2">
			</figure><!-- Sidebar image -->
		</div>
	</div>
</div>
<div class="container">

<div class="row">
	<div class="col">
		<article class="box-mascotas-list mr-4 mb-5" <?php post_class(); ?> id="post-<?php the_ID(); ?>">

			<div class="entry-content mb-5">

				<?php if( have_rows('galeria_img') ): ?>
					<div class="d-flex flex-column flex-md-row justify-content-center mb-3">
					<?php while( have_rows('galeria_img') ): the_row();?>
						<div class="p-3 box-gallery-poliza">
							<img src="<?php the_sub_field('images'); ?>" alt="poliza" class="img-fluid">
						</div>
					<?php endwhile; ?>
					</div>
				<?php endif; ?>
				<header class="title text-center text-uppercase mb-5">
					<h2>Descripción</h2>
				</header><!-- .entry-header -->
				<?php the_content( ); ?>
			</div><!-- .entry-content -->

			<div class="sub-title mb-2">
				<h2><?php the_field( 'titulo_cotizador' ); ?></h2>
			</div>
			<div class="entry-iframe mb-3">
				<!-- 21:9 aspect ratio -->
				<div class="embed-responsive embed-responsive-21by9">
					<iframe class="embed-responsive-item" src="<?php the_field( 'iframe_url' ); ?>" allowfullscreen></iframe>
				</div>
			</div>
		</article><!-- #post-## -->
	</div>
</div>
</div>

