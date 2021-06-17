<?php
/**
 * Template Name: Iniciar Secion
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
<!-- ***INTRO*** -->
<section class="intro mb-5">
	<div class="container">
		<div class="row">
			<div class="col py-5">
				<div class="box-head cl--second text-center text-uppercase">
					<h1 class="title">
						<?php the_field( 'titulo_sesion', 'option'); ?>
					</h1>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ***INTRO END*** -->
<!-- ***SINGLE CONTENT BG*** -->
<section class="d-block bgi mb-5" style="background-image: url('<?php the_field( 'fondo_seccion', 'option'); ?>')">
	<div class="container mb-5">
		<div class="row mb-5">
			<div class="box-sesion col-6 mx-auto my-5 py-5">
                <?php the_content(); ?>
			</div>
		</div>
	</div>
</section>
<!-- ***SINGLE CONTENT END *** -->



<?php
get_footer();
