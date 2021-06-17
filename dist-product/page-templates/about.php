<?php
/**
 * Template Name: Nosotros
 *
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );

if ( is_front_page() ) {
	get_template_part( 'global-templates/hero' );
}
?>

<!-- ***INTRO BG*** -->
<section class="about mb-5">

</section>
<!-- ***INTRO BG Site END *** -->
<!-- ***ABOUT*** -->
<section class="intro mb-5">
	<?php
		while ( have_posts() ) {
			the_post();
			get_template_part( 'loop-templates/content', 'title' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}
		}
	?>
</section>
<!-- ***ABOUT END*** -->

<!-- *** About BG*** -->
<section class="about mb-5">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-12 col-lg-6">
				<div class="box-about">
					<div class="paragraf">
						<?php the_field( 'descripcion' ); ?>
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-6">
				<div class="box">
				<?php if ( get_field( 'imagen_descripcion' ) ) : ?>
					<figure>
						<img src="<?php the_field( 'imagen_descripcion' ); ?>" class="img-fluid" alt="Doki About site">
					</figure>
				<?php endif ?>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- *** END *** -->


<!-- ***Mision vision BG*** -->
<section class="vision mb-5 bgi w-100" style="background-image: url('<?php the_field( 'fondo_nosotros' ); ?>');">
		<!-- valores_empresariales -->
		<div class="container">
			<?php if( have_rows('valores_empresariales') ): ?>
			<div class="row align-items-start">
				<?php while( have_rows('valores_empresariales') ): the_row();?>
				<div class="col-12 col-lg-6">
					<div class="box-about-vision">
						<div class="title">
							<h2><?php the_sub_field('titulo'); ?></h2>
						</div>
						<div class="paragraf">
							<?php the_sub_field('parrafo'); ?>
						</div>
					</div>
				</div>
				<?php endwhile; ?>
			</div>
			<?php endif; ?>
		</div>
</section>
<!-- ***Mision END *** -->

<!-- ***Benefist BG*** -->
<section class="benefist mt-5 mb-5">
	<div class="pets pets-left--child pets-top">
		<div class="pets--child pets--child-top">
			<img src="<?php echo get_template_directory_uri();?>/images/png/legs-left2.png" alt="" class="img-fluid">
		</div>
	</div>
	<div class="pets pets-right--child pets-bottom pets--child-bottom">
		<div class="pets--child">
			<img src="<?php echo get_template_directory_uri();?>/images/png/legs-right.png" alt="" class="img-fluid">
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="box mb-5">
					<div class="title title-header text-center">
						<h2>Benefici<span class="foot-doki"></span>s</h2>
					</div>
				</div>
			</div>
			<div class="col-12">
				<div class="row box-benefist mb-5">
					<div class="col d-none d-lg-inline-block">
						<ul class="list-group">
						<?php if( have_rows('lista_beneficios_izq') ): ?>
							<?php while( have_rows('lista_beneficios_izq') ): the_row();?>
							<li class="list-group-item">
								<a href="#" class="btn_alt--product">
									<div class="text-right">
										<div class="circle right">
											<?php the_sub_field('icon'); ?>
										</div>
										<div class="title d-block">
											<h2><?php the_sub_field('titulo'); ?></h2>
										</div>
										<div class="paragraf d-block">
											<?php the_sub_field('parrafo'); ?>
										</div>
									</div>
								</a>
							</li>
							<?php endwhile; ?>
						<?php endif; ?>
						</ul>
					</div>
					<div class="col-12 col-lg-6">
					<!-- imagen_intro_beneficios -->
					<?php if ( get_field( 'imagen_intro_beneficios' ) ) : ?>
						<img src="<?php the_field( 'imagen_intro_beneficios' ); ?>" class="img-fluid mt-5" alt="">
					<?php endif ?>
					</div>
					<div class="col d-none d-lg-inline-block">
						<ul class="list-group">
							<?php if( have_rows('lista_beneficios_der') ): ?>
								<?php while( have_rows('lista_beneficios_der') ): the_row();?>
								<li class="list-group-item">
									<a href="#" class="btn_alt--product">
										<div class="text-left">
											<div class="circle left">
												<?php the_sub_field('icon'); ?>
											</div>
											<div class="title d-block">
												<h2><?php the_sub_field('titulo'); ?></h2>
											</div>
											<div class="paragraf d-block">
												<?php the_sub_field('parrafo'); ?>
											</div>
										</div>
									</a>
								</li>
								<?php endwhile; ?>
							<?php endif; ?>
						</ul>
					</div>
				</div>
				<div class="row box-benefist">
					<div class="col">
					<div class="col d-lg-none">
						<ul class="js-benefist-min-slider slider-benefist-mobile list-group">

							<?php if( have_rows('lista_beneficios_izq') ): ?>
								<?php while( have_rows('lista_beneficios_izq') ): the_row();?>
								<li class="list-group-item">
									<a href="#" class="btn_alt--product">
										<div class="text-center text-lg-right">
											<div class="circle right">
												<?php the_sub_field('icon'); ?>
											</div>
											<div class="title d-block">
												<h2><?php the_sub_field('titulo'); ?></h2>
											</div>
											<div class="paragraf d-block">
												<?php the_sub_field('parrafo'); ?>
											</div>
										</div>
									</a>
								</li>
								<?php endwhile; ?>
							<?php endif; ?>
							<?php if( have_rows('lista_beneficios_der') ): ?>
								<?php while( have_rows('lista_beneficios_der') ): the_row();?>
								<li class="list-group-item">
									<a href="#" class="btn_alt--product">
									<div class="text-center text-lg-right">
											<div class="circle right">
												<?php the_sub_field('icon'); ?>
											</div>
											<div class="title d-block">
												<h2><?php the_sub_field('titulo'); ?></h2>
											</div>
											<div class="paragraf d-block">
												<?php the_sub_field('parrafo'); ?>
											</div>
										</div>
									</a>
								</li>
								<?php endwhile; ?>
							<?php endif; ?>
						</ul>
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ***Benefist BG Site END *** -->

<!-- ***GALLERY BG*** -->
<section class="gallery mb-5">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="box mb-5">
					<div class="title title-header text-center">
						<h2>
							<?php the_field( 'titulo_galeria' ); ?>
						</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="box mt-5 mb-5">
		<ul class="js-slider-gallery slider-gallery">
			<?php if( have_rows('gallery') ): ?>
				<?php while( have_rows('gallery') ): the_row();?>
				<li>
					<img src="<?php the_sub_field('imagen'); ?>" alt="beneficios" class="img-fluid mx-auto">
				</li>
				<?php endwhile; ?>
			<?php endif; ?>
		</ul>
	</div>
</section>
<!-- ***GALLERY BG Site END *** -->



<?php
get_footer();
