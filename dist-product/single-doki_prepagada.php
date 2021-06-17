<?php
/**
 * The template for displaying all single posts
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>
<!-- ***TITLE PREPAGADA *** -->
<section class="box-intro mb-5">
	<div class="container">
		<div class="row">
			<div class="col py-5">
				<div class="box-head cl--second text-center text-uppercase">
					<h1 class="title">
						<?php the_field('titulo_prepagada', 'option'); ?>
					</h1>
				</div>
			</div>
		</div>
	</div>
	<div class="bgi bgi-intro" style="background-image: url('<?php the_field( 'imagen_prepagada', 'option' ); ?>');">
	</div>
</section>
<!-- ***TITLE PREPAGADA END*** -->

<section class="mascotas mb-5">
	<div class="pets pets-left--child pets-top">
		<div class="pets--child pets--child-top">
			<img src="<?php echo get_template_directory_uri();?>/images/png/legs-left2.png" alt="" class="img-fluid">
		</div>
	</div>
	<?php
	while ( have_posts() ) {
		the_post();
		get_template_part( 'loop-templates/content', 'single-prepagada' );

		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) {
			comments_template();
		}
	}
	?>
<section />

<?php
get_footer();
