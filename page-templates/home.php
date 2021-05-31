<?php
/**
 * Template Name: Home
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
<!-- ***SLIDER*** -->
<?php if( have_rows('banner') ): ?>
	<ul class="js-home-slider">
	<?php while( have_rows('banner') ): the_row();?>
		<li>
			<div class="box-slider-home bgc--primary">
				<div class="d-flex justify-content-center slider-height align-items-center px-4">
					<div class="d-lg-flex justify-content-center align-items-center">
						<div class="slider-content cl--white text-center">
							<div class="subtitle pt-5 pt-lg-0">
								<h3><?php the_sub_field('subtitle'); ?></h3>
							</div>
							<div class="title">
								<h2><?php the_sub_field('title'); ?></h2>
							</div>
							<div class="paragraph  px-5">
								<p><?php the_sub_field('paragraf'); ?></p>
							</div>
						</div>
						<div class="slider-img pt-lg-5">
							<!-- <img src="<?php echo get_template_directory_uri();?>/images/png/pet-dog.png" alt="" class="img-fluid pt-5"> -->
							<img src="<?php the_sub_field('image'); ?>" class="img-fluid pt-5" alt="<?php the_sub_field('title'); ?>">
						</div>
					</div>
				</div>
			</div>
		</li>
	<?php endwhile; ?>
	</ul>
<?php endif; ?>
<!-- ***SLIDER END*** -->

<!-- ***BOX TO ACTION*** -->
<section class="box-to-action">
	<div class="element element-left">
		<div class="element-child">
			<img src="<?php echo get_template_directory_uri();?>/images/png/deco-doki-left.png" alt="" class="img-fluid">
		</div>
	</div>

	<div class="container py-lg-2">
		<div class="row">
			<div class="col-12 text-center py-lg-5">
				<div class="d-block w-100">
					<span class="logo_svg logo_svg--to mb-3">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1226 437" >
							<g id="Layer 1">
								<g id="&lt;Group&gt;">
									<g id="&lt;Group&gt;">
										<path id="&lt;Compound Path&gt;" fill-rule="evenodd" d="M727.76 215.28C727.76 327.81 647.9 418.56 549.37 418.56C450.85 418.56 370.99 327.81 370.99 215.28C370.99 103.27 450.85 12 549.37 12C647.9 12 727.76 103.27 727.76 215.28ZM495.45 225.13C495.45 264.02 521.89 295.66 553.52 295.66C585.67 295.66 611.6 264.02 611.6 225.13C611.6 186.24 585.67 154.61 553.52 154.61C521.89 154.61 495.45 186.24 495.45 225.13Z" />
										<path id="&lt;Compound Path&gt;" d="M764.6 16.15C788.97 15.63 828.9 14.59 854.31 14.07C860.02 14.07 865.72 16.15 869.87 20.82C874.02 24.96 876.09 30.15 876.09 36.37L872.98 133.35C872.98 135.42 874.02 136.97 876.09 137.49C877.65 137.49 879.2 136.46 879.72 134.9L914.98 30.15C917.58 21.34 925.87 15.63 934.69 15.63L1020.25 14.59C1028.03 14.07 1034.25 17.7 1038.4 23.41C1042.55 29.63 1043.59 36.37 1041 43.63L980.84 202.83L1052.92 381.22C1055.52 387.96 1055 394.7 1050.85 400.92C1047.22 406.63 1041.51 410.26 1034.25 410.78L947.65 417.52C938.32 418.04 930.02 413.37 926.39 404.55L877.13 290.99C876.61 289.43 875.05 288.4 872.98 288.91C871.42 288.91 870.39 290.47 870.39 292.55L873.5 391.59C874.02 397.81 871.94 403 867.8 407.15C863.64 411.81 858.46 413.89 852.24 413.89L765.64 415.45C759.93 415.45 754.75 413.37 750.08 409.22C745.93 405.07 743.86 399.89 743.86 393.66L743.86 37.93C743.86 26.52 753.19 16.67 764.6 16.15Z" />
										<path id="&lt;Compound Path&gt;" d="M1080.42 26.52C1084.57 22.37 1089.76 20.3 1095.46 20.3L1202.28 21.34C1208.51 21.34 1213.69 23.41 1217.84 27.56C1221.99 31.71 1224.06 36.89 1223.55 43.11L1217.32 392.11C1216.81 403.52 1207.47 413.37 1195.54 413.37L1094.42 413.37C1088.72 413.37 1083.53 410.78 1079.38 406.63C1075.23 402.48 1073.16 397.3 1073.16 391.59L1074.2 42.08C1074.2 35.85 1076.27 30.67 1080.42 26.52Z" />
									</g>
									<g id="&lt;Group&gt;">
										<path id="&lt;Path&gt;" d="M4.38 81.57L4.38 10.35L136.5 10.35C288.01 2.74 360.33 75.77 353.44 229.46C361.05 356.94 291.64 422.36 145.2 425.75L10.36 425.75L58.2 356.87L148.1 356.87C110.97 342.3 91.11 327.24 88.54 311.7C87.83 307.43 92.13 303.78 96.16 305.36C98.57 306.31 101.62 308.29 105.38 312.06C111.79 318.48 118.85 324.18 126.81 328.53C142.07 336.87 166.92 346.95 195.06 344.65C199.09 344.32 202.85 342.47 205.44 339.37C217.5 324.89 251.99 275.59 244.54 223.44L254.54 216.45C273.88 221.85 285.12 215.67 288.26 197.91C290.64 184.45 276.04 173.6 264.31 180.62C263.75 180.96 263.19 181.33 262.62 181.73C253.02 188.58 249.47 201.22 253.12 212.43C253.54 213.71 254.01 215.06 254.55 216.48L244.49 223.48C244.27 206.33 225.06 198.84 186.88 201.01L94.09 201.01C97.47 187.24 92.76 174.67 79.95 163.31C89.62 131.17 105.45 106.77 127.44 90.09C108.35 73.42 82.61 77.65 50.23 102.78C51.44 75.23 54.09 57.47 58.2 49.49C37.66 53.36 19.72 64.05 4.38 81.57Z" />
										<path id="&lt;Path&gt;" d="M62.19 191.77C62.19 199.97 57.97 206.63 52.77 206.63C47.56 206.63 43.34 199.97 43.34 191.77C43.34 183.56 47.56 176.91 52.77 176.91C57.97 176.91 62.19 183.56 62.19 191.77Z" />
									</g>
								</g>
							</g>
						</svg>
					</span>
					<div class="w-100 py-lg-3 cl--second box_call-to-action">
						<p class="paragraf">
							<?php the_field( 'call_to_action_paragrap' ); ?>
						</p>
						<span class="call">
							<h5 class="title">
								<?php the_field( 'call_to_action' ); ?>
							</h5>
						</span>
						<h5 class="subtitle ">
							<?php the_field( 'subtitle_call_to_action' ); ?>
						</h5>
						<h2 class="title ">
							<?php the_field( 'title_call_to_action' ); ?>
						</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="element element-right">
		<div class="element-child">
			<img src="<?php echo get_template_directory_uri();?>/images/png/deco-doki-right.png" alt="" class="img-fluid">
		</div>
	</div>
</section>
<!-- ***BOX TO MENU*** -->
<section class="box-to-menu">
	<div class="container py-2">
		<div class="row  mb-2">
			<div class="col-12 mb-0">
				<?php if( have_rows('list_product_menu') ): ?>
					<ul class="list-group flex-column flex-lg-row list-group-horizontal list-social justify-content-center cl--second" id="myTab" role="tablist">
					<?php while( have_rows('list_product_menu') ): the_row();?>
						<li class="p-3">
							<a class="btn_alt--product" id="path-<?php the_sub_field('path'); ?>-tab" data-toggle="tab" href="#path-<?php the_sub_field('path'); ?>" role="tab" aria-controls="<?php the_sub_field('path'); ?>" aria-selected="false">
								<div class="text-center">
									<span class="circle">
										<?php the_sub_field('icon'); ?>
									</span>
									<span class="cl--second txt_bold--900"><?php the_sub_field('item'); ?></span>
								</div>
							</a>
						</li>
					<?php endwhile; ?>
					</ul>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
<!-- ***MENU HELPER END*** -->
<section class="box--prod slider-prod">
	<div class="pets pets-left--child pets-top">
		<div class="pets--child pets--child-top">
			<img src="<?php echo get_template_directory_uri();?>/images/png/pork-chicken-right.png" alt="" class="img-fluid">
		</div>
	</div>
	<div class="pets pets-right--child pets-bottom pets--child-bottom">
		<div class="pets--child">
			<img src="<?php echo get_template_directory_uri();?>/images/png/dog-cat-right.png" alt="" class="img-fluid">
		</div>
	</div>
	<!-- <div class="tab-content" >
	
	<div class="tab-pane fade" id="path-1" role="tabpanel" aria-labelledby="path-1-tab">Vivi</div>
	<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">Camilo</div>
	<div class="tab-pane fade" id="otro" role="tabpanel" aria-labelledby="contact-tab">Otro</div>
	<div class="tab-pane fade" id="mas" role="tabpanel" aria-labelledby="contact-tab">Mas</div>
	</div> -->
	<div class="box-tap-slider" id="myTabContent">
		<div class="tab-pane fade show active" id="path-1" role="tabpanel" aria-labelledby="path-1-tab">
			<div class="container-fluid">
				<div class="slider-list-prod">
					<div class="title title-header w-100 text-center py-3">
						<h2>Aliment<span class="foot-doki"></span>s<h2>
					</div>
					<ul class="js-prod-slider list-group list-group-horizontal justify-content-end">
						<li>
							<div class="card card-product m-3">
								<figure>
								<img src="https://ci.doki.com.co/wp-content/uploads/2021/04/nutranuggetscatmantencion2736.jpg" class="card-img-top" alt="...">
								</figure>
								<div class="card-body text-center">
									<h5 class="card-title">Proplan Cat Kitten Pollo y Arroz - 1KG PROPLAN</h5>
									<h3 class="card-subtitle">$44.000</h3>
									<p class="card-text"><small class="text-muted">Precio por Gramo $44</small></p>
									<a href="#" class="btn btn-product"> Ver producto </a>
								</div>
							</div>
						</li>
						<li>
							<div class="card card-product m-3">
								<img src="https://ci.doki.com.co/wp-content/uploads/2021/04/nutranuggetscatmantencion2736.jpg" class="card-img-top" alt="...">
								<div class="card-body text-center">
									<h5 class="card-title">Proplan Cat Kitten Pollo y Arroz - 1KG PROPLAN</h5>
									<h3 class="card-subtitle">$44.000</h3>
									<p class="card-text"><small class="text-muted">Precio por Gramo $44</small></p>
									<a href="#" class="btn btn-product"> Ver producto </a>
								</div>
							</div>
						</li>
						<li>
							<div class="card card-product m-3">
								<img src="https://ci.doki.com.co/wp-content/uploads/2021/04/nutranuggetscatmantencion2736.jpg" class="card-img-top" alt="...">
								<div class="card-body text-center">
									<h5 class="card-title">Proplan Cat Kitten Pollo y Arroz - 1KG PROPLAN</h5>
									<h3 class="card-subtitle">$44.000</h3>
									<p class="card-text"><small class="text-muted">Precio por Gramo $44</small></p>
									<a href="#" class="btn btn-product"> Ver producto </a>
								</div>
							</div>
						</li>
						<li>
							<div class="card card-product m-3">
								<img src="https://ci.doki.com.co/wp-content/uploads/2021/04/nutranuggetscatmantencion2736.jpg" class="card-img-top" alt="...">
								<div class="card-body text-center">
									<h5 class="card-title">Proplan Cat Kitten Pollo y Arroz - 1KG PROPLAN</h5>
									<h3 class="card-subtitle">$44.000</h3>
									<p class="card-text"><small class="text-muted">Precio por Gramo $44</small></p>
									<a href="#" class="btn btn-product"> Ver producto </a>
								</div>
							</div>
						</li>
						<li>
							<div class="card card-product m-3">
								<img src="https://ci.doki.com.co/wp-content/uploads/2021/04/nutranuggetscatmantencion2736.jpg" class="card-img-top" alt="...">
								<div class="card-body text-center">
									<h5 class="card-title">Proplan Cat Kitten Pollo y Arroz - 1KG PROPLAN</h5>
									<h3 class="card-subtitle">$44.000</h3>
									<p class="card-text"><small class="text-muted">Precio por Gramo $44</small></p>
									<a href="#" class="btn btn-product"> Ver producto </a>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="tab-pane fade" id="path-2" role="tabpanel" aria-labelledby="path-2-tab">	
			<div class="container-fluid">
				<div class="slider-list-prod">
					<div class="title title-header w-100 text-center py-3">
						<h2>Snacks<h2>
					</div>
					<ul class="js-prod-slider list-group list-group-horizontal justify-content-end">
						<li>
							<div class="card card-product m-3">
								<figure>
								<img src="https://ci.doki.com.co/wp-content/uploads/2021/04/nutranuggetscatmantencion2736.jpg" class="card-img-top" alt="...">
								</figure>
								<div class="card-body text-center">
									<h5 class="card-title">Proplan Pet Kitten Carne y Arroz - 1KG PROPLAN</h5>
									<h3 class="card-subtitle">$44.000</h3>
									<p class="card-text"><small class="text-muted">Precio por Gramo $44</small></p>
									<a href="#" class="btn btn-product"> Ver producto </a>
								</div>
							</div>
						</li>
						<li>
							<div class="card card-product m-3">
								<img src="https://ci.doki.com.co/wp-content/uploads/2021/04/nutranuggetscatmantencion2736.jpg" class="card-img-top" alt="...">
								<div class="card-body text-center">
								<h5 class="card-title">Proplan Pet Kitten Carne y Arroz - 1KG PROPLAN</h5>
									<h3 class="card-subtitle">$44.000</h3>
									<p class="card-text"><small class="text-muted">Precio por Gramo $44</small></p>
									<a href="#" class="btn btn-product"> Ver producto </a>
								</div>
							</div>
						</li>
						<li>
							<div class="card card-product m-3">
								<img src="https://ci.doki.com.co/wp-content/uploads/2021/04/nutranuggetscatmantencion2736.jpg" class="card-img-top" alt="...">
								<div class="card-body text-center">
								<h5 class="card-title">Proplan Pet Kitten Carne y Arroz - 1KG PROPLAN</h5>
									<h3 class="card-subtitle">$44.000</h3>
									<p class="card-text"><small class="text-muted">Precio por Gramo $44</small></p>
									<a href="#" class="btn btn-product"> Ver producto </a>
								</div>
							</div>
						</li>
						<li>
							<div class="card card-product m-3">
								<img src="https://ci.doki.com.co/wp-content/uploads/2021/04/nutranuggetscatmantencion2736.jpg" class="card-img-top" alt="...">
								<div class="card-body text-center">
								<h5 class="card-title">Proplan Pet Kitten Carne y Arroz - 1KG PROPLAN</h5>
									<h3 class="card-subtitle">$44.000</h3>
									<p class="card-text"><small class="text-muted">Precio por Gramo $44</small></p>
									<a href="#" class="btn btn-product"> Ver producto </a>
								</div>
							</div>
						</li>
						<li>
							<div class="card card-product m-3">
								<img src="https://ci.doki.com.co/wp-content/uploads/2021/04/nutranuggetscatmantencion2736.jpg" class="card-img-top" alt="...">
								<div class="card-body text-center">
								<h5 class="card-title">Proplan Pet Kitten Carne y Arroz - 1KG PROPLAN</h5>
									<h3 class="card-subtitle">$44.000</h3>
									<p class="card-text"><small class="text-muted">Precio por Gramo $44</small></p>
									<a href="#" class="btn btn-product"> Ver producto </a>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="tab-pane fade" id="path-3" role="tabpanel" aria-labelledby="path-3-tab">	
			<div class="container-fluid">
				<div class="slider-list-prod">
					<div class="title title-header w-100 text-center py-3">
						<h2>Accesori<span class="foot-doki"></span>s<h2>
					</div>
					<ul class="js-prod-slider list-group list-group-horizontal justify-content-end">
						<li>
							<div class="card card-product m-3">
								<img src="https://ci.doki.com.co/wp-content/uploads/2021/04/nutranuggetscatmantencion2736.jpg" class="card-img-top" alt="...">
								<div class="card-body text-center">
								<h5 class="card-title">Proplan Pet Kitten Carne y Arroz - 1KG PROPLAN</h5>
									<h3 class="card-subtitle">$44.000</h3>
									<p class="card-text"><small class="text-muted">Precio por Gramo $44</small></p>
									<a href="#" class="btn btn-product"> Ver producto </a>
								</div>
							</div>
						</li>
						<li>
							<div class="card card-product m-3">
								<img src="https://ci.doki.com.co/wp-content/uploads/2021/04/nutranuggetscatmantencion2736.jpg" class="card-img-top" alt="...">
								<div class="card-body text-center">
								<h5 class="card-title">Proplan Pet Kitten Carne y Arroz - 1KG PROPLAN</h5>
									<h3 class="card-subtitle">$44.000</h3>
									<p class="card-text"><small class="text-muted">Precio por Gramo $44</small></p>
									<a href="#" class="btn btn-product"> Ver producto </a>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="tab-pane fade" id="path-4" role="tabpanel" aria-labelledby="path-4-tab">	
			<div class="container-fluid">
				<div class="slider-list-prod">
					<div class="title title-header w-100 text-center py-3">
						<h2>Medicinas<h2>
					</div>
					<ul class="js-prod-slider list-group list-group-horizontal justify-content-end">
						<li>
							<div class="card card-product m-3">
								<img src="https://ci.doki.com.co/wp-content/uploads/2021/04/nutranuggetscatmantencion2736.jpg" class="card-img-top" alt="...">
								<div class="card-body text-center">
								<h5 class="card-title">Proplan Pet Kitten Carne y Arroz - 1KG PROPLAN</h5>
									<h3 class="card-subtitle">$44.000</h3>
									<p class="card-text"><small class="text-muted">Precio por Gramo $44</small></p>
									<a href="#" class="btn btn-product"> Ver producto </a>
								</div>
							</div>
						</li>
						<li>
							<div class="card card-product m-3">
								<img src="https://ci.doki.com.co/wp-content/uploads/2021/04/nutranuggetscatmantencion2736.jpg" class="card-img-top" alt="...">
								<div class="card-body text-center">
								<h5 class="card-title">Proplan Pet Kitten Carne y Arroz - 1KG PROPLAN</h5>
									<h3 class="card-subtitle">$44.000</h3>
									<p class="card-text"><small class="text-muted">Precio por Gramo $44</small></p>
									<a href="#" class="btn btn-product"> Ver producto </a>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="tab-pane fade" id="path-5" role="tabpanel" aria-labelledby="path-5-tab">	
			<div class="container-fluid">
				<div class="slider-list-prod">
					<div class="title title-header w-100 text-center py-3">
						<h2>Home/Colegios <br> Prepagada/Polizas<h2>
					</div>
					<ul class="js-prod-slider list-group list-group-horizontal justify-content-end">
						<li>
							<div class="card card-product m-3">
								<img src="https://ci.doki.com.co/wp-content/uploads/2021/04/nutranuggetscatmantencion2736.jpg" class="card-img-top" alt="...">
								<div class="card-body text-center">
								<h5 class="card-title">Proplan Pet Kitten Carne y Arroz - 1KG PROPLAN</h5>
									<h3 class="card-subtitle">$44.000</h3>
									<p class="card-text"><small class="text-muted">Precio por Gramo $44</small></p>
									<a href="#" class="btn btn-product"> Ver producto </a>
								</div>
							</div>
						</li>
						<li>
							<div class="card card-product m-3">
								<img src="https://ci.doki.com.co/wp-content/uploads/2021/04/nutranuggetscatmantencion2736.jpg" class="card-img-top" alt="...">
								<div class="card-body text-center">
								<h5 class="card-title">Proplan Pet Kitten Carne y Arroz - 1KG PROPLAN</h5>
									<h3 class="card-subtitle">$44.000</h3>
									<p class="card-text"><small class="text-muted">Precio por Gramo $44</small></p>
									<a href="#" class="btn btn-product"> Ver producto </a>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="d-none">
<?php $destacados_home = get_field( 'destacados_home' ); ?>
<?php if ( $destacados_home ) : ?>
	<?php foreach ( $destacados_home as $post ) : ?>
		<?php setup_postdata ( $post ); ?>
		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	<?php endforeach; ?>
	<?php wp_reset_postdata(); ?>
<?php endif; ?>
</div>
<!-- ***SLIDER PARTNERS*** -->
<section class="slider-partners py-5">
	<div class="container">
		<div class="row">
			<div class="title title-header w-100 text-center py-3">
				<h2>Aliad<span class="foot-doki"></span>s<h2>
			</div>
		</div>
		<div class="row">
			<div class="box_slider--partners">
				<?php if( have_rows('list_partner') ): ?>
					<ul class="js-slider-parner list-group list-group-horizontal justify-content-center">
					<?php while( have_rows('list_partner') ): the_row();?>
						<li class="box_logo--partners">
							<!-- <img src="<?php // echo get_template_directory_uri();?>/images/png/pet-dog.png" alt="" class="img-fluid pt-5"> -->
							<a href="<?php the_sub_field( 'url_partner' ); ?>" target="_blank" class="d-inline-block">
								<img src="<?php the_sub_field('image_partner'); ?>" class="img-fluid" alt="partner">
							</a>
						</li>
					<?php endwhile; ?>
					</ul>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>


<!-- ***SLIDER PARTNERS END*** -->
<!-- ***MARKETING DIGITAL*** -->
<section class="marketing">
	<div class="container my-3">
		<div class="row">
			<div class="col-6 col-lg-3 order-2 order-lg-3">
				<a href="<?php the_field( 'box_marketing_left_url' ); ?>" target="_blank" class="d-inline-block">
					<!-- <img src="<?php // echo get_template_directory_uri();?>/images/png/promo-02.jpg" alt="" class="img-fluid"> -->
					<?php if ( get_field( 'box_marketing_left_image' ) ) : ?>
						<img src="<?php the_field( 'box_marketing_left_image' ); ?>" alt="" class="img-fluid" />
					<?php endif ?>
				</a>
			</div>
			<div class="col-12 col-lg-6 mb-3 order-1 order-lg-2 p-xl-0">
				<a href="<?php the_field( 'box_marketing_center_url' ); ?>"  target="_blank"  class="d-inline-block">
					<?php if ( get_field( 'box_marketing_center_image' ) ) : ?>
						<img src="<?php the_field( 'box_marketing_center_image' ); ?>"  alt="" class="img-fluid img-max"/>
					<?php endif ?>
					<!-- <img src="<?php // echo get_template_directory_uri();?>/images/png/promo-blog.jpg" alt="" class="img-fluid"> -->
				</a>
			</div>
			<div class="col-6 col-lg-3 order-3 order-lg-1">
				<a href="<?php the_field( 'box_marketing_right_url' ); ?>"  target="_blank"  class="d-inline-block">
					<!-- <img src="<?php // echo get_template_directory_uri();?>/images/png/promo-01.jpg" alt="" class="img-fluid"> -->
					<?php if ( get_field( 'box_marketing_right_image' ) ) : ?>
						<img src="<?php the_field( 'box_marketing_right_image' ); ?>"  alt="" class="img-fluid" />
					<?php endif ?>
				</a>
			</div>
		</div>
	</div>
</section>
<!-- ***OFFER END*** -->
<?php
get_footer();
