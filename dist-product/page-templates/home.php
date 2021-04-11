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
			<div class="box-slider-home bgc--tertiary">
				<div class="d-flex justify-content-center align-items-center px-4">
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
						<div class="slider-img pt-5">
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
<section class="slider d-none">
	<div class="w-100">
		<ul class="js-home-slider">
			<li>
				<div class="box-slider-home bgc--tertiary">
					<div class="d-flex justify-content-center align-items-center px-4">
						<div class="d-lg-flex justify-content-center align-items-center">
							<div class="slider-content cl--white text-center">
								<div class="subtitle pt-5 pt-lg-0">
									<h3>¿Tu perro tiene mucha energía?</h3>
								</div>
								<div class="title">
									<h2>¡El bosque canino es su guardería!</h2>
								</div>
								<div class="paragraph  px-5">
									<p>Certificados como Centro Deportivo Canino, el día a día de tu peludo estará lleno de actividad, deporte y socialización.</p>
								</div>
							</div>
							<div class="slider-img pt-5">
								<img src="<?php echo get_template_directory_uri();?>/images/png/pet-dog.png" alt="" class="img-fluid pt-5">
							</div>
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="box-slider-home bgc--primary">
					<div class="d-flex justify-content-center align-items-center px-4">
						<div class="d-lg-flex justify-content-center align-items-center">
							<div class="slider-content cl--white text-center">
								<div class="subtitle pt-5 pt-lg-0">
									<h3>¿Tu perro tiene mucha energía?</h3>
								</div>
								<div class="title">
									<h2>¡El bosque canino es su guardería!</h2>
								</div>
								<div class="paragraph  px-5">
									<p>Certificados como Centro Deportivo Canino, el día a día de tu peludo estará lleno de actividad, deporte y socialización.</p>
								</div>
							</div>
							<div class="slider-img pt-5">
								<img src="<?php echo get_template_directory_uri();?>/images/png/pet-dog.png" alt="" class="img-fluid pt-5">
							</div>
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="box-slider-home bgc--second">
					<div class="d-flex justify-content-center align-items-center px-4">
						<div class="d-lg-flex justify-content-center align-items-center">
							<div class="slider-content cl--white text-center">
								<div class="subtitle pt-5 pt-lg-0">
									<h3>¿Tu perro tiene mucha energía?</h3>
								</div>
								<div class="title">
									<h2>¡El bosque canino es su guardería!</h2>
								</div>
								<div class="paragraph  px-5">
									<p>Certificados como Centro Deportivo Canino, el día a día de tu peludo estará lleno de actividad, deporte y socialización.</p>
								</div>
							</div>
							<div class="slider-img pt-5">
								<img src="<?php echo get_template_directory_uri();?>/images/png/pet-dog.png" alt="" class="img-fluid pt-5">
							</div>
						</div>
					</div>
				</div>
			</li>
		</ul>
	</div>
</section>
<!-- ***SLIDER END*** -->

<!-- ***Menu HELPER*** -->
<section class="nav-helper">
	<div class="element element-left">
		<div class="element-child">
			<img src="<?php echo get_template_directory_uri();?>/images/png/deco-doki-left.png" alt="" class="img-fluid pt-5">
		</div>
	</div>
	<div class="element element-right">
		<div class="element-child">
			<img src="<?php echo get_template_directory_uri();?>/images/png/deco-doki-right.png" alt="" class="img-fluid pt-5">
		</div>
	</div>
	<div class="container py-2">
		<div class="row py-5">
			<div class="col-12 text-center">
			<div class="d-block w-100 mb-5">
					<span class="logo_svg mb-5">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1226 437" width="314">
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

					<div class="w-100 py-3 cl--second">
						<p class="txt_sm mb-2">
							<?php the_field( 'call_to_action_paragrap' ); ?>
						</p>
						<span class="box_call-to-action mb-2 pb-2">
							<h5 class="txt_sm txt_bold--900">
								<?php the_field( 'call_to_action' ); ?>
							</h5>
						</span>
						<h5 class="txt_sm text-uppercase mb-2">
							<?php the_field( 'subtitle_call_to_action' ); ?>
						</h5>
						<h2 class="txt_xl txt_bold--900 text-uppercase mb-2">
							<?php the_field( 'title_call_to_action' ); ?>
						</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="row  mb-5">
			<div class="col-12 mb-5">
				<?php if( have_rows('list_product_menu') ): ?>
					<ul class="list-group flex-column flex-lg-row list-group-horizontal list-social justify-content-center cl--second">
					<?php while( have_rows('list_product_menu') ): the_row();?>
						<li class="p-3">
							<a href="<?php the_sub_field('url'); ?>" class="btn_alt--product">
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

				<ul class="list-group flex-column flex-lg-row list-group-horizontal list-social justify-content-center cl--second d-none">
					<li class="p-3">
						<a href="#" class="btn_alt--product">
							<div class="text-center">
								<span class="circle">
								<svg version="1.1" id="Capa_1" viewBox="0 0 398 280" width="75">
									<g>
										<path d="M373.91,217.11c-0.38-1.2-0.77-2.37-1.12-3.56c-11.2-37.14-22.42-74.27-33.57-111.43c-1.34-4.46-2.63-8.74-8.06-9.36
											c0-0.83-0.01-1.21,0-1.58c0.65-22.03-12.03-38.44-33.42-43.5c-1.19-0.28-2.54-1.8-2.98-3.04C285.11,18,255.22,7.25,230.91,21.87
											c-1.81,1.09-2.91,0.99-4.63-0.1c-28.17-17.89-62.71-12.45-84.43,13.11c-0.91,1.08-2.6,1.97-4,2.09c-16.7,1.4-28.8,9.55-36.59,24.33
											c-0.61,1.16-1.92,2.35-3.15,2.73c-13.95,4.21-23.65,12.97-29.06,26.52c-0.36,0.89-1.25,2.1-2.02,2.21
											c-4.74,0.65-6.55,3.76-7.79,7.94c-7.33,24.63-14.8,49.21-22.23,73.81c-4.28,14.2-8.56,28.39-12.9,42.78c-2.4,0-4.66,0.18-6.88-0.04
											c-4.6-0.45-8,1.22-10.24,5.26c0,13.75,0,27.5,0,41.25c2.24,3.26,5.09,5.05,9.28,5.05c48.99-0.08,97.98-0.04,146.97-0.06
											c5.81,0,9.3-2.89,9.36-7.48c0.06-4.62-3.41-7.44-9.22-7.5c-0.87-0.01-1.75,0-2.62,0c-44.61,0-89.23,0-133.84,0
											c-1.57,0-3.14,0-4.6,0c0-7.51,0-14.43,0-21.27c117.99,0,235.67,0,353.44,0c0,7.12,0,14.03,0,21.27c-1.72,0-3.2,0-4.68,0
											c-44.86,0-89.73,0-134.59,0c-1.5,0-3.01-0.05-4.49,0.11c-3.67,0.41-6.42,3.4-6.59,7.01c-0.16,3.42,2.17,6.64,5.64,7.42
											c1.68,0.38,3.47,0.43,5.21,0.43c47.99,0.02,95.98-0.02,143.97,0.08c4.59,0.01,8.28-1.05,10.78-5.06c0-13.75,0-27.5,0-41.25
											C387.19,215,380,217.95,373.91,217.11z M105.39,77.88c4.21-0.65,6.7-2.64,8.11-6.62C118,58.58,128.68,51.4,142.05,52.1
											c4.05,0.21,6.82-1.2,9.17-4.5c16.98-23.89,48.2-28.3,71.17-10.16c5.29,4.18,7.69,4.05,13.14-0.43c8.43-6.93,17.98-8.62,28.11-4.87
											c10.01,3.71,15.99,11.2,17.89,21.78c1.08,6,3.15,7.89,9.21,8.12c16.01,0.62,27.57,14.56,25.04,30.52c-76.82,0-153.68,0-231.19,0
											C89.51,84.04,96.36,79.26,105.39,77.88z M39.87,217.11c3.36-11.21,6.64-22.19,9.94-33.15c7.26-24.13,14.59-48.23,21.74-72.39
											c0.86-2.89,2.07-3.81,5.15-3.81c81.6,0.1,163.19,0.08,244.79,0.06c2.23,0,3.82,0.03,4.66,2.87c10.43,35.02,21.03,70,31.58,104.99
											c0.1,0.35,0.09,0.73,0.16,1.44C251.83,217.11,146.03,217.11,39.87,217.11z"/>
										<path d="M199.31,253.78c-4.24-0.09-7.76,3.34-7.68,7.5c0.08,4.05,3.44,7.34,7.5,7.34c4.1,0,7.36-3.23,7.42-7.35
											C206.6,257.14,203.45,253.87,199.31,253.78z"/>
										<path d="M263.12,126.04c-12.71-6.38-27.86-1.39-34.49,11.54c-1.1,2.15-2.32,2.73-4.59,2.72c-16.37-0.09-32.74-0.11-49.1,0.01
											c-2.92,0.02-4.54-0.7-6.02-3.51c-6.52-12.38-21.76-17-34.17-10.69c-12.4,6.3-17.62,21.35-11.6,33.91c1.06,2.21,1.14,3.86,0.04,6.13
											c-5.94,12.29-1.1,27.05,10.81,33.6c11.8,6.49,27.04,2.99,33.81-8.69c2.7-4.65,5.64-5.83,10.27-5.22c0.49,0.07,1,0.01,1.5,0.01
											c15.86,0,31.72,0,47.5,0c0.42,0.74,0.74,1.28,1.02,1.83c6.82,13.59,21.62,19,34.69,12.67c13.2-6.39,18.07-21.44,11.6-35.41
											c-0.5-1.08-0.34-2.85,0.19-3.98C280.88,147.7,275.94,132.47,263.12,126.04z M261.07,182.21c-2.12,3.95-6.73,6.31-10.96,5.63
											c-4.63-0.74-8.14-4.12-9.09-8.77c-1.33-6.45-3.41-8.21-9.88-8.22c-21.48-0.01-42.97-0.02-64.45,0c-6.25,0.01-8.46,1.88-9.69,8.02
											c-0.97,4.88-4.52,8.31-9.29,8.99c-4.25,0.61-8.82-1.84-10.87-5.81c-2.1-4.06-1.36-8.86,1.92-12.48c4.6-5.08,4.61-7.88,0.04-12.88
											c-3.2-3.51-4.05-8.1-2.12-12.12c1.98-4.1,5.33-6.12,8.76-6.2c6.36,0.06,10.49,3.59,11.56,8.95c1.26,6.28,3.2,7.9,9.68,7.9
											c21.48,0.01,42.97,0.01,64.45,0c6.74,0,8.55-1.51,9.9-8.09c0.93-4.54,4.43-8,8.75-8.66c4.59-0.7,8.9,1.32,11.14,5.23
											c2.29,3.99,1.77,8.96-1.32,12.55c-5.11,5.93-5.1,7.71,0.02,13.7C262.61,173.48,263.18,178.28,261.07,182.21z"/>
									</g>
								</svg>

								</span>
								<span class="cl--second txt_bold--900">Alimento</span>
							</div>
						</a>
					</li>
					<li class="p-3">
						<a href="#" class="btn_alt--product">
							<div class="text-center">
								<span class="circle">
								<svg version="1.1" id="Capa_1"  x="0px" y="0px" viewBox="0 0 266 404" width="55">
									<g>
										<path d="M242.66,10c-72.86,0-145.72,0-218.57,0c-7.67,3.22-10.26,9.02-10.07,17.24c0.63,27.35,0.43,54.73,1.2,82.08
											c0.92,32.59,2.04,65.19,3.93,97.74c1.79,30.79,4.11,61.57,7.29,92.24c2.8,26.92,7.2,53.67,10.72,80.52
											c0.92,7.01,4.22,11.79,10.87,14.19c56.89,0,113.78,0,170.67,0c6.65-2.41,9.92-7.16,10.87-14.19c1.73-12.86,4.35-25.62,5.83-38.5
											c3.17-27.42,6.27-54.85,8.6-82.35c2.21-26.14,3.77-52.35,4.93-78.56c1.47-33.21,2.27-66.44,3.3-99.67c0.13-4.26-2.23-6.95-5.67-6.9
											c-3.29,0.05-5.36,2.54-5.47,6.68c-0.48,17.62-1.26,35.23-1.25,52.85c0,6.81-1.72,11.15-7.65,15.22
											c-16.36,11.22-28.62,26.6-40.11,42.59c-0.86,1.2-1.78,2.36-3.26,4.31c0-4.82,0.03-8.44-0.01-12.07c-0.07-6.63-3.28-11.53-8.99-13.8
											c-5.82-2.31-11.66-0.85-16.24,4.2c-3.36,3.7-6.5,7.6-9.97,11.18c-0.88,0.91-2.79,1.56-4,1.29c-10.78-2.4-21.49-2.33-32.26,0.03
											c-1.21,0.27-3.12-0.36-4-1.26c-3.39-3.49-6.44-7.3-9.71-10.91c-4.85-5.35-10.54-6.87-16.47-4.54c-5.9,2.32-9.17,7.38-9.1,14.51
											c0.07,7.75,0.26,15.49,0.55,23.23c0.14,3.78-0.14,7.27-1.89,10.84c-1.67,3.41-2.48,7.3-3.29,11.07c-0.86,3.98,0.71,6.63,3.83,7.34
											c3.53,0.81,5.86-1.12,7.08-5.35c1.14-3.93,2.73-7.73,3.94-11.64c0.72-2.32,1.54-4.75,1.54-7.13c-0.03-9.24-0.47-18.49-0.49-27.73
											c0-1.57,1.3-3.14,2-4.71c1.55,0.76,3.47,1.16,4.58,2.34c4.2,4.45,8.2,9.08,12.13,13.77c2.31,2.75,4.85,3.42,8.28,2.29
											c11.48-3.76,23.06-3.77,34.54,0c3.32,1.09,5.75,0.39,7.97-2.2c4.22-4.94,8.46-9.85,12.87-14.62c0.86-0.92,2.9-1.86,3.71-1.44
											c1.09,0.56,2.12,2.41,2.13,3.72c0.07,8.37,0.06,16.75-0.37,25.11c-0.23,4.48,0.32,8.4,2.31,12.58c9.08,19.12,1.56,36.89-18.35,43.8
											c-12.96,4.49-26.38,5.29-39.89,3.75c-13.37-1.53-26.06-4.66-34.37-16.9c-1.64-2.41-4.66-2.36-7.08-0.62
											c-2.43,1.74-3.38,4.49-1.62,6.9c2.69,3.69,5.65,7.36,9.16,10.23c3.67,2.99,8.13,5.02,12.48,7.6c-19.72,9.94-40.41,16.5-62.34,19
											c-0.28-0.75-0.49-1.08-0.52-1.43c-1.78-21.54-3.89-43.06-5.23-64.62c-1.73-27.68-3.32-55.39-4.12-83.12
											c-1.17-40.22-1.55-80.47-2.35-120.7c-0.07-3.31,1.17-4.27,4.39-4.27c69.11,0.07,138.21,0.08,207.32-0.02
											c3.82-0.01,4.65,1.44,4.57,4.85c-0.2,8.62-0.18,17.25-0.16,25.87c0.01,4.33,2.28,6.92,5.74,6.84c3.3-0.07,5.36-2.57,5.4-6.72
											c0.07-8.25-0.25-16.52,0.2-24.74C253.15,19.05,250.37,13.2,242.66,10z M38.53,307.22c10.26-2.3,20.4-4.26,30.36-6.89
											c15.74-4.15,30.51-10.75,44.75-18.64c1.98-1.1,4.71-1.49,7.01-1.29c14.95,1.3,29.67,0.39,43.98-4.37
											c31.2-10.38,33.96-38.33,25.38-58.4c-1.09-2.56-0.96-4.11,0.76-6.27c9.74-12.19,18.99-24.77,29.04-36.69
											c5.33-6.31,11.93-11.55,17.95-17.27c0.37,0.26,0.74,0.52,1.11,0.78c-0.59,12.34-1.02,24.7-1.8,37.03
											c-1.54,24.44-3.01,48.89-4.97,73.3c-2.97,36.86-7.21,73.58-13.6,110.03c-0.55,3.14-1.72,4.31-5.09,4.31
											c-53.4-0.11-106.79-0.09-160.19-0.05c-2.47,0-4.28-0.17-4.71-3.3c-3.3-23.87-6.73-47.72-10.1-71.57
											C38.36,307.59,38.53,307.22,38.53,307.22z"/>
										<path d="M160.37,82.39c0.62,0,1.24-0.11,1.86-0.19c8.57-1.09,15.03-8.2,15.24-16.77c0.21-8.38-5.72-15.79-14.11-17.33
											c-2.55-0.47-5.21-0.53-7.81-0.42c-2.45,0.11-3.64-0.55-4.56-3.08c-2.75-7.49-9.85-12.13-17.68-12.11
											c-7.8,0.02-14.73,4.79-17.7,12.19c-0.37,0.91-0.7,1.84-1.11,2.95c-2.69,0-5.31-0.08-7.92,0.01c-8.03,0.28-14.6,5.34-16.62,12.73
											c-3.03,11.06,4.76,21.77,16.53,21.95C124.45,82.62,142.41,82.41,160.37,82.39z M107.68,71.27c-5.71-0.09-9.17-5.06-6.24-9.14
											c1.18-1.64,3.75-2.87,5.84-3.15c3.8-0.5,7.71-0.1,11.58-0.16c4.72-0.07,6.51-1.84,6.73-6.53c0.25-5.37,3.21-8.6,7.85-8.56
											c4.64,0.04,7.45,3.2,7.71,8.69c0.21,4.44,2.05,6.31,6.5,6.39c3.86,0.07,7.73-0.04,11.59,0.04c4.23,0.08,7.01,2.58,7.03,6.16
											c0.02,3.56-2.72,6.19-6.97,6.25c-8.6,0.11-17.21,0.03-25.81,0.03C124.89,71.31,116.28,71.4,107.68,71.27z"/>
										<path d="M54.78,137.08c1.21,0.21,2.48,0.16,3.72,0.17c17.19,0.01,34.38,0.01,51.57,0c3.24,0,6.49,0.16,9.71-0.09
											c4.2-0.33,6.63-4.12,5.06-7.69c-1.15-2.62-3.36-3.43-6.09-3.41c-10.34,0.04-20.68,0.02-31.02,0.01c-5.85,0-11.71-0.01-17.56,0
											c-4.98,0.01-9.97-0.06-14.95,0.09c-3.23,0.1-5.09,2.05-5.23,5.22C49.87,134.57,51.64,136.53,54.78,137.08z"/>
										<path d="M56.33,116.67c5.97,0.06,11.94,0.02,17.91,0.02c5.85,0,11.69,0.03,17.54-0.01c4.28-0.03,6.56-1.92,6.65-5.35
											c0.09-3.45-2.22-5.68-6.35-5.71c-11.94-0.08-23.88-0.08-35.82,0c-4.06,0.03-6.43,2.37-6.3,5.79
											C50.08,114.65,52.38,116.63,56.33,116.67z"/>
									</g>
									</svg>

								</span>
								<span class="cl--second txt_bold--900">
									Snacks
								</span>
							</div>
						</a>
					</li>
					<li class="p-3">
					<a href="#" class="btn_alt--product">
							<div class="text-center">
								<span class="circle">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 907 506" width="75">
										<g id="correa.svg">
											<path id="&lt;Compound Path&gt;" d="M144.2 215.8L137.3 191.8C220.3 167.9 338.7 153.7 454.2 153.7C575 153.7 690.6 167.6 771.3 191.9L764.1 215.8C685.6 192.2 572.6 178.7 454.1 178.7C341 178.7 225.1 192.5 144.2 215.8L144.2 215.8ZM454.2 403.4C341 403.4 234.4 391.6 154.1 370.1C93.8 354 21.9 325 21.9 278.6L46.9 278.6C46.9 291.8 61.7 303.9 74.1 311.8C93.9 324.3 123.8 336.2 160.6 346C238.9 366.9 343.2 378.5 454.3 378.5C565.4 378.5 669.7 367 748 346C784.8 336.1 814.7 324.3 834.5 311.8C846.9 304 861.7 291.8 861.7 278.6L886.7 278.6C886.7 325 814.8 354 754.5 370.1C674 391.5 567.4 403.4 454.2 403.4L454.2 403.4Z" />
											<path id="&lt;Compound Path&gt;" fill-rule="evenodd" d="M154.1 220.6C93.8 204.5 21.9 175.5 21.9 129.1C21.9 82.7 93.8 53.7 154.1 37.6C234.4 16.1 341 4.3 454.2 4.3C567.4 4.3 674 16.1 754.3 37.6C814.6 53.7 886.5 82.7 886.5 129.1C886.5 175.5 814.6 204.5 754.3 220.6C674 242.1 567.4 253.9 454.2 253.9C341 253.9 234.4 242.1 154.1 220.6ZM454.2 29.2C343.1 29.2 238.8 40.7 160.5 61.7C123.7 71.6 93.8 83.4 74 95.9C61.6 103.7 46.8 115.9 46.8 129.1C46.8 142.3 61.6 154.4 74 162.3C93.8 174.8 123.7 186.7 160.5 196.5C238.8 217.4 343.1 229 454.2 229C565.3 229 669.6 217.5 747.9 196.5C784.7 186.6 814.6 174.8 834.4 162.3C846.8 154.5 861.6 142.3 861.6 129.1C861.6 115.9 846.8 103.8 834.4 95.9C814.6 83.4 784.7 71.5 747.9 61.7C669.6 40.7 565.3 29.2 454.2 29.2Z" />
											<path id="&lt;Compound Path&gt;" fill-rule="evenodd" d="M861.6 278L886.6 278L886.6 128.5L861.6 128.5L861.6 278ZM21.8 278L46.8 278L46.8 128.5L21.8 128.5L21.8 278ZM400.4 310.3C400.4 292.6 385.9 278.1 368.2 278.1C350.5 278.1 336 292.6 336 310.3C336 328 350.4 342.5 368.2 342.5C386 342.5 400.4 328 400.4 310.3ZM385.4 310.2C385.4 319.7 377.7 327.4 368.2 327.4C358.7 327.4 351 319.7 351 310.2C351 300.7 358.7 293 368.2 293C377.7 293 385.4 300.7 385.4 310.2ZM486.4 310.3C486.4 292.6 471.9 278.1 454.2 278.1C436.5 278.1 422 292.6 422 310.3C422 328 436.4 342.5 454.2 342.5C472 342.5 486.4 328 486.4 310.3ZM471.4 310.2C471.4 319.7 463.7 327.4 454.2 327.4C444.7 327.4 437 319.7 437 310.2C437 300.7 444.7 293 454.2 293C463.7 293 471.4 300.7 471.4 310.2ZM572.4 310.3C572.4 292.6 557.9 278.1 540.2 278.1C522.5 278.1 508 292.6 508 310.3C508 328 522.4 342.5 540.2 342.5C558 342.5 572.4 328 572.4 310.3ZM557.4 310.2C557.4 319.7 549.7 327.4 540.2 327.4C530.7 327.4 523 319.7 523 310.2C523 300.7 530.7 293 540.2 293C549.7 293 557.4 300.7 557.4 310.2ZM715.5 375C738 336.4 743 302.3 730.6 273.7C711.3 229.3 657 216.5 654.7 216L649.2 240.4C649.6 240.5 693.4 250.8 707.7 283.7C716.8 304.6 712.1 331.1 693.9 362.4L715.5 375Z" />
											<path id="&lt;Compound Path&gt;" d="M564.4 322C563.6 322 562.7 321.9 561.9 321.6C561.4 321.4 535.3 312.7 504.2 321.6C500.2 322.7 496.1 320.4 494.9 316.4C493.8 312.4 496.1 308.3 500.1 307.1C536.1 296.8 565.6 307 566.9 307.4C570.8 308.8 572.9 313.1 571.5 317C570.4 320.1 567.5 322 564.4 322L564.4 322ZM441.9 390.4L466.9 390.4L466.9 429.4L441.9 429.4L441.9 390.4Z" />
											<path id="&lt;Compound Path&gt;" fill-rule="evenodd" d="M453.5 492.4C427.9 492.4 407 475.9 407 455.7C407 435.5 427.9 419 453.5 419C479.1 419 500 435.5 500 455.7C500 475.9 479.1 492.4 453.5 492.4ZM453.5 433.9C436.4 433.9 422 443.9 422 455.6C422 467.3 436.4 477.3 453.5 477.3C470.6 477.3 485 467.3 485 455.6C485 443.9 470.5 433.9 453.5 433.9Z" />
											<path id="&lt;Path&gt;" d="M449.6 475.3L449.3 475.3C435.2 474.4 429.9 462.4 429 456.2C428.7 454 430.2 452 432.4 451.7C434.6 451.4 436.6 452.9 436.9 455.1C437.1 456.3 438.9 466.5 449.8 467.3C452 467.4 453.7 469.4 453.5 471.6C453.4 473.7 451.7 475.3 449.6 475.3L449.6 475.3Z" />
										</g>
									</svg>
								</span>
								<span class="cl--second txt_bold--900">Accesorios</span>
							</div>
						</a>
					</li>
					<li class="p-3">
					<a href="#" class="btn_alt--product">
							<div class="text-center">
								<span class="circle">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 960 1200" width="75">
									<g id="Layer 1">
										<g id="&lt;Group&gt;">
											<path id="&lt;Compound Path&gt;" fill-rule="evenodd" d="M839.78 373.91C839.81 374.29 840 374.61 840 375C840 375.01 840 825.01 840 825.02C840 833.3 833.28 840 825 840L463.29 840C450.8 861.83 431.72 879.15 408.79 889.48C348.77 916.52 278.2 889.79 251.16 829.77C238.21 836.56 223.79 840.07 209.17 840C159.69 839.77 119.77 799.48 120 750L120 510C120.02 486.18 129.48 463.33 146.31 446.46C181.45 411.24 238.48 411.17 273.71 446.31C290.52 463.25 299.97 486.14 300 510L300 676.19C309.39 670.78 319.49 666.71 330 664.08L330 375C330 374.61 330.19 374.29 330.22 373.91C330.32 372.9 330.52 371.9 330.82 370.93C331.51 368.09 333.12 365.55 335.4 363.71C335.67 363.48 335.81 363.15 336.11 362.93C385.74 327.45 416.13 270.97 418.39 210L405 210C380.16 209.97 360.03 189.84 360 165L360 105C360.03 80.16 380.16 60.03 405 60L765 60C789.84 60.03 809.97 80.16 810 105L810 165C809.97 189.84 789.84 209.97 765 210L751.52 210C753.54 271.06 784.02 327.65 833.89 362.93C834.19 363.15 834.33 363.48 834.6 363.71C836.03 365.05 837.25 366.59 838.23 368.28C838.63 369.13 838.95 370.02 839.18 370.93C839.48 371.9 839.68 372.9 839.78 373.91ZM271.46 765L448.32 765C447.11 756.96 444.69 749.14 441.14 741.83C426.44 710.27 394.81 690.06 360 690C355.91 689.94 351.82 690.25 347.78 690.94L344.22 691.55C342.77 691.75 341.34 692.02 339.92 692.37C323.14 696.21 307.83 704.82 295.83 717.16C282.97 730.22 274.46 746.93 271.46 765ZM810 720L810 390L360 390L360 660C402.66 660.12 442.02 682.99 463.25 720L810 720ZM405 180L765 180C773.28 179.99 779.99 173.28 780 165L780 105C779.99 96.72 773.28 90.01 765 90L405 90C396.72 90.01 390.01 96.72 390 105L390 165C390.01 173.28 396.72 179.99 405 180ZM384.79 360L785.21 360C745.91 319.77 723.19 266.22 721.56 210L448.44 210C446.81 266.22 424.09 319.77 384.79 360ZM150 510L150 600.05L150.25 600L270 600L270 510C269.99 494.09 263.7 478.82 252.5 467.52C241.24 456.24 225.94 449.93 210 450C176.88 450.04 150.04 476.88 150 510ZM241.84 800.92C241.72 800.24 241.77 799.53 241.66 798.85C240.61 792.62 240.05 786.32 240 780C240.02 772.46 240.75 764.94 242.18 757.54C242.64 755.12 243.54 752.85 244.15 750.47C245.27 745.62 246.71 740.84 248.44 736.16C249.5 733.46 250.98 730.97 252.24 728.36C254.13 724.24 256.24 720.23 258.59 716.36C260.24 713.74 262.24 711.36 264.11 708.86C266.1 706.21 267.78 703.37 270 700.87L270 630L150.25 630L150 629.95L150 750C150.04 783.12 176.88 809.96 210 810C221.26 810.06 232.31 806.91 241.84 800.92ZM440.9 818.67C444.55 811.2 447.05 803.22 448.31 795L271.99 795C272.46 797.65 272.35 800.46 273.06 803.03C274.03 807.27 275.49 811.39 277.41 815.3C291.54 848.4 324.02 869.9 360 870C394.63 869.99 426.14 849.99 440.9 818.67ZM810 750L476.19 750C476.36 750.65 476.42 751.34 476.58 752C476.85 753.1 477 754.24 477.23 755.36C480.94 771.67 480.92 788.59 477.18 804.89C476.96 805.91 476.83 806.95 476.59 807.95C476.42 808.62 476.37 809.33 476.19 810L810 810L810 750Z" />
											<path id="&lt;Compound Path&gt;" fill-rule="evenodd" d="M687.31 639.79C690.01 656.21 683.82 672.84 671.03 683.5C666.42 687.72 660.39 690.04 654.14 690L515.86 690C509.61 690.04 503.58 687.72 498.97 683.5C486.19 672.84 479.99 656.21 482.7 639.79C485.79 625.26 496.18 613.37 510.16 608.35L517.4 580.43C522.78 550.03 549.4 528 580.27 528.4C611.3 525.68 638.94 547.95 642.89 578.85L651.86 599.65C653.25 603.49 656.12 606.62 659.82 608.35C673.81 613.36 684.21 625.25 687.31 639.79ZM657.91 645.7C656.89 641.41 653.73 637.95 649.56 636.53C638.02 632.07 628.87 623 624.3 611.51L614.6 589.01C614.08 587.82 613.72 586.56 613.54 585.26C611.47 571.32 606.02 558.4 580.27 558.4C564.09 557.97 549.99 569.36 547 585.26L542.15 612.3C539.8 623.72 531.48 632.99 520.39 636.56C516.23 637.98 513.1 641.43 512.09 645.7C511.56 651.12 513.71 656.46 517.85 660L652.15 660C656.29 656.46 658.44 651.12 657.91 645.7Z" />
											<path id="&lt;Compound Path&gt;" fill-rule="evenodd" d="M476.04 608.38L470.84 608.38C451.06 608.36 435.03 592.33 435 572.55L435 549.46C435.03 529.68 451.06 513.66 470.85 513.63L476.05 513.63C495.83 513.66 511.86 529.68 511.89 549.46L511.89 572.55C511.86 592.33 495.83 608.36 476.04 608.38ZM481.89 549.46C481.88 546.24 479.27 543.63 476.04 543.63L470.84 543.63C467.62 543.63 465 546.24 465 549.46L465 572.55C465 575.77 467.62 578.38 470.85 578.38L476.05 578.38C479.27 578.38 481.89 575.77 481.89 572.55L481.89 549.46Z" />
											<path id="&lt;Compound Path&gt;" fill-rule="evenodd" d="M735 549.46L735 572.55C734.97 592.33 718.94 608.36 699.15 608.38L693.95 608.38C674.17 608.36 658.14 592.33 658.11 572.55L658.11 549.46C658.14 529.68 674.17 513.66 693.96 513.63L699.16 513.63C718.94 513.66 734.97 529.68 735 549.46ZM705 549.46C704.99 546.24 702.38 543.63 699.15 543.63L693.95 543.63C690.73 543.63 688.11 546.24 688.11 549.46L688.11 572.55C688.11 575.77 690.73 578.38 693.96 578.38L699.16 578.38C702.38 578.38 705 575.77 705 572.55L705 549.46Z" />
											<path id="&lt;Compound Path&gt;" fill-rule="evenodd" d="M494.94 479.56L494.94 456.47C494.97 436.69 511 420.67 530.79 420.64L535.99 420.64C555.77 420.67 571.8 436.69 571.83 456.47L571.83 479.56C571.8 499.34 555.77 515.37 535.99 515.39L530.79 515.39C511 515.37 494.97 499.34 494.94 479.56ZM524.94 479.56C524.94 482.78 527.56 485.39 530.78 485.39L535.98 485.39C539.21 485.39 541.82 482.78 541.83 479.56L541.83 456.47C541.82 453.25 539.21 450.64 535.98 450.64L530.78 450.64C527.56 450.64 524.94 453.25 524.94 456.47L524.94 479.56Z" />
											<path id="&lt;Compound Path&gt;" fill-rule="evenodd" d="M588.72 479.56L588.72 456.47C588.74 436.7 604.77 420.67 624.55 420.64L629.77 420.64C649.55 420.67 665.58 436.69 665.61 456.47L665.61 479.56C665.58 499.34 649.55 515.37 629.77 515.39L624.55 515.39C604.77 515.37 588.74 499.34 588.72 479.56ZM618.72 479.56C618.72 482.78 621.33 485.39 624.55 485.39L629.77 485.39C632.99 485.39 635.6 482.78 635.61 479.56L635.61 456.47C635.6 453.25 632.99 450.64 629.77 450.64L624.55 450.64C621.33 450.65 618.72 453.26 618.72 456.47L618.72 479.56Z" />
										</g>
									</g>
								</svg>
								</span>
								<span class="cl--second txt_bold--900">Medicinas</span>
							</div>
						</a>
					</li>
					<li class="p-3">
						<a href="#" class="btn_alt--product">
							<div class="text-center">
								<span class="circle">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 960 1200" width="75">
										<g id="Layer 1">
											<g id="&lt;Group&gt;">
												<path id="&lt;Compound Path&gt;" fill-rule="evenodd" d="M899.96 839.75C899.96 872.86 873.11 899.7 840 899.7C839.97 899.7 119.95 899.7 119.92 899.7C86.81 899.68 59.98 872.82 60 839.71C60.02 806.59 86.89 779.77 120 779.79L180 779.79L180 365.56L116.65 407.92C113.35 410.17 109.28 410.97 105.38 410.16C101.48 409.4 98.04 407.1 95.83 403.79L62.53 354.02C57.94 347.15 59.78 337.84 66.65 333.24L471.65 62.23C476.71 58.86 483.29 58.86 488.35 62.23L893.35 333.24C900.22 337.84 902.06 347.15 897.47 354.02L864.17 403.79C861.96 407.1 858.52 409.4 854.62 410.16C853.66 410.36 852.68 410.46 851.7 410.45C848.73 410.46 845.83 409.57 843.35 407.92L780 365.56L780 779.79L840 779.79C873.11 779.79 899.96 806.63 899.96 839.75ZM210 689.85L300 689.85L300 569.94C300 470.53 380.59 389.94 480 389.94C579.41 389.94 660 470.53 660 569.94L660 689.85L750 689.85L750 360.68L210 360.68L210 689.85ZM471.67 134.48C476.71 131.12 483.29 131.12 488.33 134.48L847.57 374.66L864.2 349.82L480 92.72L95.8 349.82L112.43 374.66L471.67 134.48ZM330 779.79L630 779.79L630 569.94C630 487.09 562.84 419.94 480 419.94C397.16 419.94 330 487.09 330 569.94L330 779.79ZM660 779.79L750 779.79L750 719.83L660 719.83L660 779.79ZM726.97 330.11L480 164.97L233.03 330.11L726.97 330.11ZM210 779.79L300 779.79L300 719.83L210 719.83L210 779.79ZM869.98 839.75C869.98 823.19 856.56 809.77 840 809.77L120 809.77C103.44 809.77 90.02 823.19 90.02 839.75C90.02 856.3 103.44 869.72 120 869.72L840 869.72C856.56 869.72 869.98 856.3 869.98 839.75Z" />
												<path id="&lt;Compound Path&gt;" fill-rule="evenodd" d="M480 210.19C480.01 210.19 480.02 210.19 480.03 210.19C504.88 210.21 525.02 230.37 525 255.22C524.98 280.07 504.82 300.21 479.97 300.19C455.12 300.17 434.98 280.01 435 255.16C435.04 230.33 455.17 210.21 480 210.19ZM480 240.17C480 240.17 479.99 240.17 479.99 240.17C471.71 240.18 464.99 246.9 465 255.18C465.01 263.46 471.73 270.18 480.01 270.17C488.29 270.16 495.01 263.44 495 255.16C494.99 246.88 488.28 240.17 480 240.17Z" />
											</g>
										</g>
									</svg>
								</span>
								<span class="cl--second txt_bold--900">Home/Colegios<br>Prepagada/Polizas</span>
							</div>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<!-- ***MENU HELPER END*** -->
<section class="box--prod slider-prod">
	<div class="pets pets-left--child pets-top">
		<div class="pets--child pets--child-top">
			<img src="<?php echo get_template_directory_uri();?>/images/png/cerdo_pollo.png" alt="" class="img-fluid">
		</div>
	</div>
	<div class="pets pets-right--child pets-bottom pets--child-bottom">
		<div class="pets--child">
			<img src="<?php echo get_template_directory_uri();?>/images/png/perrito_gato.png" alt="" class="img-fluid">
		</div>
	</div>
	<div class="container">
		<ul class="js-prod-slider list-group list-group-horizontal justify-content-end">
			<li>
				<div class="card m-3">
					<img src="https://via.placeholder.com/150x150?text=Plan+Pro+Purina" class="card-img-top" alt="...">
					<div class="card-body text-center">
						<h5 class="card-title">Proplan Cat Kitten Pollo y Arroz - 1KG PROPLAN</h5>
						<h3 class="card-title">$44.000</h3>
						<p class="card-text"><small class="text-muted">Precio por Gramo $44</small></p>
						<button class="btn btn-outline-dark"> Comprar </button>
					</div>
				</div>
			</li>
			<li>
				<div class="card m-3">
					<img src="https://via.placeholder.com/150x150?text=Plan+Pro+Purina" class="card-img-top" alt="...">
					<div class="card-body text-center">
						<h5 class="card-title">Proplan Cat Kitten Pollo y Arroz - 1KG PROPLAN</h5>
						<h3 class="card-title">$44.000</h3>
						<p class="card-text"><small class="text-muted">Precio por Gramo $44</small></p>
						<button class="btn btn-outline-dark"> Comprar </button>
					</div>
				</div>
			</li>
			<li>
				<div class="card m-3">
					<img src="https://via.placeholder.com/150x150?text=Plan+Pro+Purina" class="card-img-top" alt="...">
					<div class="card-body text-center">
						<h5 class="card-title">Proplan Cat Kitten Pollo y Arroz - 1KG PROPLAN</h5>
						<h3 class="card-title">$44.000</h3>
						<p class="card-text"><small class="text-muted">Precio por Gramo $44</small></p>
						<button class="btn btn-outline-dark"> Comprar </button>
					</div>
				</div>
			</li>
			<li>
				<div class="card m-3">
					<img src="https://via.placeholder.com/150x150?text=Plan+Pro+Purina" class="card-img-top" alt="...">
					<div class="card-body text-center">
						<h5 class="card-title">Proplan Cat Kitten Pollo y Arroz - 1KG PROPLAN</h5>
						<h3 class="card-title">$44.000</h3>
						<p class="card-text"><small class="text-muted">Precio por Gramo $44</small></p>
						<button class="btn btn-outline-dark"> Comprar </button>
					</div>
				</div>
			</li>
			<li>
				<div class="card m-3">
					<img src="https://via.placeholder.com/150x150?text=Plan+Pro+Purina" class="card-img-top" alt="...">
					<div class="card-body text-center">
						<h5 class="card-title">Proplan Cat Kitten Pollo y Arroz - 1KG PROPLAN</h5>
						<h3 class="card-title">$44.000</h3>
						<p class="card-text"><small class="text-muted">Precio por Gramo $44</small></p>
						<button class="btn btn-outline-dark"> Comprar </button>
					</div>
				</div>
			</li>
		</ul>
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
			<div class="title w-100 text-center py-3">
				<h2 class="txt_sm text-uppercase txt_bold--900">Aliados<h2>
			</div>
		</div>
		<div class="row">
			<div class="box_slider--partners">
				<?php if( have_rows('list_partner') ): ?>
					<ul class="js-slider-parner list-group list-group-horizontal justify-content-center">
					<?php while( have_rows('list_partner') ): the_row();?>
						<li>
							<!-- <img src="<?php // echo get_template_directory_uri();?>/images/png/pet-dog.png" alt="" class="img-fluid pt-5"> -->
							<a href="<?php the_sub_field( 'url_partner' ); ?>" target="_blank" class="d-inline-block">
								<img src="<?php the_sub_field('image_partner'); ?>" class="img-fluid" alt="partner">
							</a>
						</li>
					<?php endwhile; ?>
					</ul>
				<?php endif; ?>
				<!-- <ul class="js-slider-parner list-group list-group-horizontal justify-content-center">
					<li><img src="https://via.placeholder.com/185x55?text=Purina" alt="" class="img-fluid"></li>
				</ul> -->
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
			<div class="col-12 col-lg-6 mb-3 order-1 order-lg-2">
				<a href="<?php the_field( 'box_marketing_center_url' ); ?>"  target="_blank"  class="d-inline-block">
					<?php if ( get_field( 'box_marketing_center_image' ) ) : ?>
						<img src="<?php the_field( 'box_marketing_center_image' ); ?>"  alt="" class="img-fluid"/>
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
