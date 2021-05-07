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
	<div class="bgi bgi-intro" style="background-image: url('<?php echo get_template_directory_uri();?>/images/jpg/intro-hotels.jpg');">
	</div>
</section>
<!-- ***INTRO BG Site END *** -->


<!-- ***Hotels BG*** -->
<section class="hotels mb-5">
		<div class="pets pets-left--child pets-top">
			<div class="pets--child pets--child-top">
				<img src="<?php echo get_template_directory_uri();?>/images/png/legs-left2.png" alt="" class="img-fluid">
			</div>
		</div>
		<div class="container">
			<div class="row">
					<!-- <i class="ion ion-alert"></i> -->
				<div class="col-12 col-lg-3 mb-5">
					<!-- <img src="<?php // echo get_template_directory_uri();?>/images/jpg/ark-003.jpg" alt="" class="img-fluid mb-2"> -->
					<ul class="js-hotels-slider slider-hotels">
						<li>
							<img src="<?php echo get_template_directory_uri();?>/images/jpg/ark-003.jpg" alt="" class="img-fluid mb-2">
						</li>
						<li>
							<img src="<?php echo get_template_directory_uri();?>/images/jpg/ark-002.jpg" alt="" class="img-fluid mb-2">
						</li>
						<li>
							<img src="<?php echo get_template_directory_uri();?>/images/jpg/ark-001.jpg" alt="" class="img-fluid mb-2">
						</li>
						<li>
							<img src="<?php echo get_template_directory_uri();?>/images/jpg/ark-003.jpg" alt="" class="img-fluid mb-2">
						</li>
						<li>
							<img src="<?php echo get_template_directory_uri();?>/images/jpg/ark-002.jpg" alt="" class="img-fluid mb-2">
						</li>
						<li>
							<img src="<?php echo get_template_directory_uri();?>/images/jpg/ark-001.jpg" alt="" class="img-fluid mb-2">
						</li>
					</ul>
				</div>
				<div class="col-12 col-lg-5">
					<div class="box-hotels">
						<div class="title mb-5">
							<h2>
								Title club 001
							</h2>
						</div>
						<div class="paragraf mb-5">
							<p>
								Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptas veniam explicabo obcaecati itaque mollitia repellendus, maiores necessitatibus, expedita saepe sequi sed reprehenderit repellat dolorem. Consectetur ad veniam reprehenderit aperiam dolorum!
							</p>
						</div>
						<div class="title mb-5">
							<h2>
								Nuestros planes incluyen:
							</h2>
						</div>
						<div class="paragraf mb-5">
							<p>
								Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptas veniam explicabo obcaecati itaque mollitia repellendus, maiores necessitatibus, expedita saepe sequi sed reprehenderit repellat dolorem. Consectetur ad veniam reprehenderit aperiam dolorum!
							</p>
						</div>
						<div class="title mb-5">
							<h2>
								Requisitos para el ingreso a la guardería:
							</h2>
						</div>
						<div class="paragraf mb-5">
							<p>
								1. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptas veniam explicabo obcaecati itaque mollitia repellendus, maiores necessitatibus, expedita saepe sequi sed reprehenderit repellat dolorem. Consectetur ad veniam reprehenderit aperiam dolorum!
							</p>
							<br>
							<p>
								2. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptas veniam explicabo obcaecati itaque mollitia repellendus, maiores necessitatibus, expedita saepe sequi sed reprehenderit repellat dolorem. Consectetur ad veniam reprehenderit aperiam dolorum!
							</p>
							<br>
							<p>
								3. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptas veniam explicabo obcaecati itaque mollitia repellendus, maiores necessitatibus, expedita saepe sequi sed reprehenderit repellat dolorem. Consectetur ad veniam reprehenderit aperiam dolorum!
							</p>
							<br>
							<p>
								4. A Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptas veniam explicabo obcaecati itaque mollitia repellendus, maiores necessitatibus, expedita saepe sequi sed reprehenderit repellat dolorem. Consectetur ad veniam reprehenderit aperiam dolorum!
							</p>
						</div>
					</div>
				</div>
				<div class="col-12 col-lg-4">
					<div class="box-form-quote">
						<div class="title cl--tertiary text-uppercase mb-4">
							<h2>
								Solicita una Cotización
							</h2>
						</div>
						<div class="paragraf cl--second mb-4">
							<p>
								Los campos marcados con * son necesarios para poder generar una cotización del servicio del colegio.
							</p>
						</div>
						<div class="paragraf cl--tertiary mb-4">
							<p>
								¿Donde podemos comunicarte con tigo?
							</p>
						</div>
						<div class="form">
							<?php the_field( 'forms_contact' ); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
</section>
<!-- ***INTRO BG Site END *** -->

<?php
get_footer();
