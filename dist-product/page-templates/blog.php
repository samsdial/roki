<?php
/**
 * Template Name: Blog
 *
 * This template can be used to override the default template and sidebar setup
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>
<div class="wrapper" id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">
		<div class="row">
			<div class="col py-5">
				<div class="title-intro py-5 mt-3">
					<h2>Bitacora De viaje webcam</h2>
				</div>
				<div class="paragraf py-5 mt-3">
					<p class="">
						Acá encuentras información, noticias y experiencias que te guiaran en tu proceso personal y profesional
					</p>
				</div>
			</div>
		</div>
		<div class="row">

		<main class="site-main" id="main">

				<?php
				if ( have_posts() ) {
					// Start the Loop.
					while ( have_posts() ) {
						the_post();

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'loop-templates/content', get_post_format() );
					}
				} else {
					get_template_part( 'loop-templates/content', 'none' );
				}
				?>

			</main><!-- #main -->
				<div class="row">
				<div class="col py-5">
					<div class="title-intro py-5 mt-3">
						<h2>Bitacora De viaje webcam</h2>
					</div>
					<div class="paragraf py-5 mt-3">
						<p class="">
							Acá encuentras información, noticias y experiencias que te guiaran en tu proceso personal y profesional
						</p>
					</div>
				</div>
			</div>
			<div class="<?php echo is_active_sidebar( 'right-sidebar' ) ? 'col-md-8' : 'col-md-12'; ?> content-area" id="primary">

				<main class="site-main" id="main" role="main">

					<?php
					while ( have_posts() ) {
						the_post();

						get_template_part( 'loop-templates/content', 'page' );

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) {
							comments_template();
						}
					}
					?>

				</main><!-- #main -->

			</div><!-- #primary -->

			<?php get_template_part( 'sidebar-templates/sidebar', 'right' ); ?>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php
get_footer();
