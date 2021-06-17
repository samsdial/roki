<?php
/**
 * The template Taxonomy
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<!-- ***TITLE END*** -->
<section class="box-intro">
	<div class="container">
		<div class="row">
			<div class="col py-5">
				<div class="box-head cl--second text-center text-uppercase">
					<!-- <?php // the_title( '<h1 class="title">', '</h1>' ); ?> -->
					<h1 class="title">
						<?php the_field('titulo_establecimiento', 'option'); ?>
					</h1>
				</div>
			</div>
		</div>
	</div>
	<div class="bgi bgi-intro" style="background-image: url('<?php the_field( 'imagen_intro', 'option' ); ?>');">
	</div>
</section>


<div class="wrapper" id="archive-wrapper">
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
	<div class="container" id="content" tabindex="-1">
		<div class="row">

			<!-- Do the left sidebar check -->
			<?php get_template_part( 'global-templates/left-sidebar-create' ); ?>

			<main class="site-main" id="main">

				<?php
				if ( have_posts() ) {
					?>
					<!-- TIPO -->
					<?php
					// Start the loop.
					while ( have_posts() ) {
						the_post();

						/*establecimiento
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'loop-templates/content-tax', get_post_format() );
					}
				} else {
					get_template_part( 'loop-templates/content', 'none' );
				}
				?>

			</main><!-- #main -->

			<?php
				// Display the pagination component.
				understrap_pagination();
				// Do the right sidebar check.
				get_template_part( 'global-templates/right-sidebar-create' );
			?>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #archive-wrapper -->

<?php
get_footer();
