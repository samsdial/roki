<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar">
		<div class="bgc--silver py-4">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-6 col-sm-6">
						<!-- Your site title as branding in the menu -->
						<?php if ( ! has_custom_logo() ) { ?>

							<?php if ( is_front_page() && is_home() ) : ?>

								<h1 class="navbar-brand mb-0">
									<a class="align-middle" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url">
										<span class="logo_svg">
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1226 437" width="150">
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
									</a>
								</h1>

							<?php else : ?>

								<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url">
									<span class="logo_svg">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1226 437" width="150">
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
								</a>

							<?php endif; ?>

							<?php
							} else {
							the_custom_logo();
							}
							?>
					</div>
					<div class="col-6 d-inline-block d-md-none text-right">
						<span class="d-inline-block d-md-none">MENÚS</span>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
							<svg viewBox="0 0 100 80" width="25">
								<rect width="100" height="20" rx="8"></rect>
								<rect y="30" width="100" height="20" rx="8"></rect>
								<rect y="60" width="100" height="20" rx="8"></rect>
							</svg>
						</button>
					</div>
					<div class="col-sm-6 d-none d-lg-block">
						<div class="row align-items-center">
							<div class="col">
								<div class="row">
									<div class="input-group custom-file-search-box w-75 ml-auto">
										<div class="custom-file custom-file-search">
										<input type="search" class="custom-file-input" id="validatedInputGroupCustomFile" required>
										<label class="custom-file-label" for="validatedInputGroupCustomFile">Buscar...</label>
										</div>
										<div class="input-group-append">
										<button class="btn btn-search" type="button">
											<svg width="15px" height="15px">
												<path d="M11.618 9.897l4.224 4.212c.092.09.1.23.02.312l-1.464 1.46c-.08.08-.222.072-.314-.02L9.868 11.66M6.486 10.9c-2.42 0-4.38-1.955-4.38-4.367 0-2.413 1.96-4.37 4.38-4.37s4.38 1.957 4.38 4.37c0 2.412-1.96 4.368-4.38 4.368m0-10.834C2.904.066 0 2.96 0 6.533 0 10.105 2.904 13 6.486 13s6.487-2.895 6.487-6.467c0-3.572-2.905-6.467-6.487-6.467 "></path>
											</svg>
										</button>
										</div>
									</div>
								</div>
							</div>
							<div class="pl-4">
								<ul class="list-group list-group-horizontal list-social justify-content-end">
									<li>
										<a href="#" target="_blank" class="cl--white d-block px-3 px-md-2">
											<span class="icon_svg icon_svg--second icon_svg--card">
												<svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><title>Cart</title><circle cx="176" cy="416" r="32"/><circle cx="400" cy="416" r="32"/><path d="M167.78 304h261.34l38.4-192H133.89l-8.47-48H32v32h66.58l48 272H432v-32H173.42l-5.64-32z"/></svg>
											</span>
										</a>
									</li>
									<li>
										<a href="<?php the_field('instagram', 'option'); ?>" target="_blank" class="cl--white d-block px-3 px-md-2">
											<span class="icon_svg icon_svg--second icon_svg--people">
												<svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><title>Person Circle</title><path d="M256 48C141.31 48 48 141.31 48 256s93.31 208 208 208 208-93.31 208-208S370.69 48 256 48zm2 96a72 72 0 11-72 72 72 72 0 0172-72zm-2 288a175.55 175.55 0 01-129.18-56.6C135.66 329.62 215.06 320 256 320s120.34 9.62 129.18 55.39A175.52 175.52 0 01256 432z"/></svg>
											</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<nav id="main-nav" class="navbar navbar-expand-md navbar-site" aria-labelledby="main-nav-label">
		<?php if ( 'container' === $container ) : ?>
			<div class="container">
		<?php endif; ?>
				<div class="col">
					<div class="row">
						<!-- end custom logo -->

						<div class="col-12">
							<!-- The WordPress Menu goes here -->
							<?php
							wp_nav_menu(
								array(
									'theme_location'  => 'primary',
									'container_class' => 'navbar_site collapse show',
									'container_id'    => 'navbarNavDropdown',
									'menu_class'      => 'nav justify-content-center',
									'fallback_cb'     => '',
									'menu_id'         => 'nav-item',
									'depth'           => 2,
									'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
								)
							);
							?>
						</div>
					</div>
				</div>
				<?php if ( 'container' === $container ) : ?>
				</div><!-- .container -->
				<?php endif; ?>
			</nav><!-- .site-navigation -->
		</div>
	</div><!-- #wrapper-navbar end -->
