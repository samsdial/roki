<?php
/**
 * Template Name: Hotel - Colegios
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
<!-- ***INTRO BG*** -->
<section class="intro mb-5">
	<div class="bgi bgi-intro" style="background-image: url('<?php echo get_template_directory_uri();?>/images/jpg/intro-polizas--001.jpg');">
	</div>
</section>
<!-- ***INTRO BG Site END *** -->

<!-- *** BG*** -->
<section class="about mb-5">

</section>
<!-- *** END *** -->



<?php
get_footer();
