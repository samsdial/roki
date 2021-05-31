<?php
/**
 * Template Name: Contacto
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
<!-- ***INTRO END*** -->
<!-- ***CONTACT BG*** -->
<section class="Search mb-5">
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
    <div class="bgc--contact">
        <div class="container mb-5">
            <div class="row mb-5">
                <div class="col-12 col-lg-6">
                    <div class="py-5">
                        <div class="title title-sub cl--tertiary mb-3">
                            <h2>Estamos Para Atenderte</h2>
                        </div>
                        <div class="contact-form">
                            <?php the_field( 'form_contact_doki' ); ?>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="py-5">
                        <div class="box-map mt-5">
							<?php the_field( 'mapa_code' ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="dog dog--contact">
		<div class="dog--child">
			<img src="<?php echo get_template_directory_uri();?>/images/png/dog--contact.png" alt="" class="img-fluid">
		</div>
	</div>
</section>
<!-- ***CONTACT END *** -->
<?php
get_footer();
