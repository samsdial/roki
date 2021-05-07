<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="error-404-wrapper">
	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">
		<div class="row align-items-center">
		<div class="col-md-9 content-area" id="primary">
				<main class="site-main" id="main">
					<section class="error-404 not-found">
						<header class="page-header">
							<h1 class="page-title">
								<?php esc_html_e( '¡Ups! Esa página no se puede encontrar', 'understrap' ); ?>
							</h1>
						</header><!-- .page-header -->
						<div class="page-content">
							<p><?php esc_html_e( 'Parece que no se encontró nada en esta ubicación. ¿Quizás probar uno de los enlaces a continuación o una búsqueda?', 'understrap' ); ?></p>
						</div><!-- .page-content -->

					</section><!-- .error-404 -->

				</main><!-- #main -->

			</div><!-- #primary -->
			<div class="col-md-3">
					<div class="widget widget_search">
						<?php get_search_form(); ?>
					</div>
					<?php if ( understrap_categorized_blog() ) : // Only show the widget if site has multiple categories. ?>
						<div class="widget widget_categories mb-2">
							<h2 class="widget-title"><?php esc_html_e( 'Categorias', 'understrap' ); ?></h2>
							<ul>
								<?php
								wp_list_categories(
									array(
										'orderby'  => 'count',
										'order'    => 'DESC',
										'title_li' => '',
										'number'   => 10,
									)
								);
								?>
							</ul>
						</div><!-- .widget -->
					<?php endif; ?>
					<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

			</div>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #error-404-wrapper -->

<?php
get_footer();
