<?php
/**
 * Post rendering content according to caller of get_template_part PREPAGADA
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
				<img src="<?php echo get_the_post_thumbnail_url( $post->ID, 'full' ); ?>" alt="prepagada" class="img-fluid max mb-2">
			</figure><!-- Sidebar image -->
		</div>
	</div>
</div>
<div class="container">

<div class="row">
	<div class="col">
		<article class="box-mascotas-list mr-md-4 mb-5" <?php post_class(); ?> id="post-<?php the_ID(); ?>">

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
					<h2>Planes</h2>
				</header><!-- .entry-header -->
				<?php // the_content( ); ?>
				<div class="accordion box-accordion" id="accordionExample">
					<?php if( have_rows('lista_de_planes') ): ?>
						<div class="card">
						<?php while( have_rows('lista_de_planes') ): the_row();?>
							<div class="card-header" id="heading-<?php the_sub_field('no_item'); ?>">
								<h2 class="mb-0" data-toggle="collapse" data-target="#collapse-<?php the_sub_field('no_item'); ?>" aria-expanded="false" aria-controls="collapse-<?php the_sub_field('no_item'); ?>">
								<?php the_sub_field('titulo_plan'); ?>
								</h2>
							</div>
							<div id="collapse-<?php the_sub_field('no_item'); ?>" class="collapse" aria-labelledby="heading-<?php the_sub_field('no_item'); ?>" data-parent="#accordionExample">
								<div class="card-body">
									<?php the_sub_field('descripcion_plan'); ?>
									<div class="col-12 col-md-7 mx-auto mt-5">
										<div class="d-flex flex-column flex-md-row align-items-center">
											<div class="flex-fill text-right mr-1">
												<i class="ion-plus-circled cl--tertiary"></i>
											</div>
											<div class="flex-fill mx-1">
												<p>Coberturas</p>
											</div>
											<div class="flex-fill ml-1">
												<a href="<?php the_sub_field( 'link' ); ?>" class="btn-card-new">
													<span>agregar al carrito</span>
													<img src="<?php echo get_template_directory_uri();?>/images/png/cart-shop.png" alt="" class="img-fluid">
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						<?php endwhile; ?>
						</div>
					<?php endif; ?>
				</div>


			</div><!-- .entry-content -->

		</article><!-- #post-## -->
	</div>
</div>
</div>

