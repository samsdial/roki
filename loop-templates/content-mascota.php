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
				<img src="<?php echo get_the_post_thumbnail_url( $post->ID, 'full' ); ?>" alt="poliza" class="img-fluid max mb-2">
			</figure><!-- Sidebar image -->
		</div>
	</div>
</div>
<div class="container">

<div class="row">
	<div class="col">
		<article class="box-mascotas-list mr-4 mb-5" <?php post_class(); ?> id="post-<?php the_ID(); ?>">

			<div class="entry-content mb-5">
				<figure class="img text-center mb-3">
					<img src="<?php the_field( 'imagen_description' ); ?>" alt="" class="img-fluid mb-2">
				</figure>
				<header class="title text-center text-uppercase mb-5">
					<h2>Descripción</h2>
				</header><!-- .entry-header -->
				<?php the_content( ); ?>
			</div><!-- .entry-content -->

			<div class="sub-title mb-2">
				<h2>Cotizador</h2>
			</div>
			<div class="entry-iframe mb-3">
				<!-- 21:9 aspect ratio -->
				<div class="embed-responsive embed-responsive-21by9">
					<iframe class="embed-responsive-item" src="https://www.google.com/search?q=%https://qastack.mx/&btnI=Im+Feeling+Lucky" allowfullscreen></iframe>
				</div>
			</div>
		</article><!-- #post-## -->
	</div>
</div>
</div>

