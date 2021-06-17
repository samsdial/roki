<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>


<div class="container mb-2">
	<div class="row py-4">
		<div class="col-12">
			<ul class="list-group list-group-horizontal list-social justify-content-center">
				<li>
					<a href="#" target="_blank" class="btn_social d-block px-3 px-md-2">
						<svg fill="#000000" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" width="24px" height="24px">    <path d="M17.525,9H14V7c0-1.032,0.084-1.682,1.563-1.682h1.868v-3.18C16.522,2.044,15.608,1.998,14.693,2 C11.98,2,10,3.657,10,6.699V9H7v4l3-0.001V22h4v-9.003l3.066-0.001L17.525,9z"/></svg>
					</a>
				</li>
				<li>
					<a href="#" target="_blank" class="btn_social d-block px-3 px-md-2">
						<svg fill="#000000" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 32 32" width="32px" height="32px"><path d="M 8 5 C 6.355469 5 5 6.355469 5 8 L 5 24 C 5 25.644531 6.355469 27 8 27 L 24 27 C 25.644531 27 27 25.644531 27 24 L 27 8 C 27 6.355469 25.644531 5 24 5 Z M 21 8 L 24 8 L 24 11 L 21 11 Z M 16 12 C 18.222656 12 20 13.777344 20 16 C 20 18.222656 18.222656 20 16 20 C 13.777344 20 12 18.222656 12 16 C 12 13.777344 13.777344 12 16 12 Z M 7 14 L 10.34375 14 C 10.121094 14.625 10 15.300781 10 16 C 10 19.300781 12.699219 22 16 22 C 19.300781 22 22 19.300781 22 16 C 22 15.300781 21.878906 14.625 21.65625 14 L 25 14 L 25 24 C 25 24.566406 24.566406 25 24 25 L 8 25 C 7.433594 25 7 24.566406 7 24 Z"/></svg>
					</a>
				</li>
			</ul>
		</div>
	</div>
</div>
<!-- bgc--second -->
<footer class="py-5 box--footer">
	<div class="container py-5">
		<div class="row">
			<div class="col-6 col-md-4 col-lg-3 mb-4 mb-lg-0 align-self-start">
				<div class="box box-content-footer">
					<div class="list mb-5">

					<?php if( have_rows('list_nav', 'option') ): ?>
					<ul class="list-group">
						<?php while( have_rows('list_nav', 'option') ): the_row();?>
							<li>
								<a href="<?php the_sub_field('link_nav'); ?>" class="d-block link-footer mb-1 cl--white">
									<span class="align-bottom ml-2"><?php the_sub_field('title'); ?></span>
								</a>
							</li>
						<?php endwhile; ?>
					</ul>
					<?php endif; ?>

						<!-- <ul class="list-group">
							<li>
								<a href="#" class="d-block link-footer mb-1 cl--white">
									<span class="align-bottom ml-2">Alimento</span>
								</a>
							</li>
							<li>
								<a href="#" class="d-block link-footer mb-1 cl--white">
									<span class="align-bottom ml-2">Snacks</span>
								</a>
							</li>
							<li>
								<a href="#" class="d-block link-footer mb-1 cl--white">
									<span class="align-bottom ml-2">Medicinas</span>
								</a>
							</li>
							<li>
								<a href="#" class="d-block link-footer mb-1 cl--white">
									<span class="align-bottom ml-2">Accesorios</span>
								</a>
							</li>
						</ul> -->
					</div>
				</div>
			</div>
			<div class="col-6 col-md-4 col-lg-3 mb-4 mb-lg-0">
			 	<div class="box box-content-footer">
					<div class="list d-block">
						<?php if( have_rows('list_nav_second', 'option') ): ?>
						<ul class="list-group">
							<?php while( have_rows('list_nav_second', 'option') ): the_row();?>
								<li>
									<a href="<?php the_sub_field('link_nav'); ?>" class="d-block link-footer mb-1 cl--white">
										<span class="align-bottom ml-2"><?php the_sub_field('title'); ?></span>
									</a>
								</li>
							<?php endwhile; ?>
						</ul>
						<?php endif; ?>

						<!-- <ul class="list-group">
							<li>
								<a href="#" class="d-block link-footer mb-1 cl--white">
									<span class="align-bottom ml-2">Hoteles</span>
								</a>
							</li>
							<li>
								<a href="#" class="d-block link-footer mb-1 cl--white">
									<span class="align-bottom ml-2">Colegios</span>
								</a>
							</li>
							<li>
								<a href="#" class="d-block link-footer mb-1 cl--white">
									<span class="align-bottom ml-2">Prepagada</span>
								</a>
							</li>
							<li>
								<a href="#" class="d-block link-footer mb-1 cl--white">
									<span class="align-bottom ml-2">Polizas</span>
								</a>
							</li>
						</ul> -->
					</div>
				</div>
			</div>
			<div class="col-6 col-md-4 col-lg-4 mb-4 mb-lg-0">
			 	<div class="box box-content-footer">
					<div class="list d-block">
						<ul class="list-group text-center">
							<li>
								<a href="#" class="d-block link-footer mb-1 cl--white">
									<span class="align-bottom ml-2">Acerca de nosotros</span>
								</a>
							</li>
							<li>
								<a href="#" class="d-block link-footer mb-1 cl--white">
									<span class="align-bottom ml-2">Escribenos</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-6 col-md-4 col-lg-2 mb-4 mb-lg-0">
			 	<div class="box box-content-footer">
					<div class="list d-block">
						<ul class="list-group">
							<li>
								<a href="#" class="d-block link-footer mb-1 cl--white">
									<span class="align-bottom ml-2">SOPORTE</span>
								</a>
							</li>
							<li>
								<a href="#" class="d-block link-footer mb-1 cl--white">
									<span class="align-bottom ml-2">FAQ</span>
								</a>
							</li>
							<li>
								<a href="#" class="d-block link-footer mb-1 cl--white">
									<span class="align-bottom ml-2">PQR</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="row d-none">
			<div class="col-12">
				<div class="term">
					<a href="#" class="link-footer underline d-block">
						Términos y condiciones
					</a>
					<a href="#" class="link-footer underline d-block">
						Politica de privacidad
					</a>
				</div>
			</div>
		</div>
	</div>
</footer>
<footer class="py-4 border_top bgc--primary d-none">
	<div class="container">
		<div class="col-12">
			<small class="cl--white box-copy">
				<ul class="list-group list-group-horizontal">
					Copy 2021 @doki
				</ul>
			</small>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

</body>

</html>

