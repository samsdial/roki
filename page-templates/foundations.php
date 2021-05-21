<?php
/**
 * Template Name: Fundaciones
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
<!-- ***TITLE END*** -->
<section class="box-intro">
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
	<div class="bgi bgi-intro" style="background-image: url('<?php echo get_template_directory_uri();?>/images/jpg/into-foundation.jpg');">
	</div>
</section>

<!-- ***INTRO BG Site END *** -->

<!-- ***INTRO BG*** -->
<section class="foundation mb-5 pt-5">
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
	<div class="container">
		<div class="row">
			<!-- img left intro -->
			<div class="col-12 col-lg-3">
				<img src="<?php echo get_template_directory_uri();?>/images/jpg/Intro-foundation-left.jpg" alt="" class="img-fluid d-block mx-auto mb-5">
			</div>
			<!-- Content intro -->
			<div class="col ">
				<div class="row">
					<!-- img center intro -->
					<div class="col-12 mb-5">
						<img class="img-fluid w-100" src="<?php echo get_template_directory_uri();?>/images/jpg/intro-foundation-center.jpg" alt="">
					</div>
					<div class="col-12">
						<div class="box-general">
							<div class="title text-center py-5 mx-auto">
								<h2>FUNDACIÓN DEL MES Y <br> REQUISITOS DE ADOPCIÓN</h2>
							</div>
							<div class="paragraf text-justify py-5">
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit deserunt aspernatur nisi explicabo quibusdam illum ex vel, doloribus repudiandae quae provident dolorem consequatur, porro molestias perferendis? Veritatis quasi voluptate earum.</p>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit deserunt aspernatur nisi explicabo quibusdam illum ex vel, doloribus repudiandae quae provident dolorem consequatur, porro molestias perferendis? Veritatis quasi voluptate earum.</p>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit deserunt aspernatur nisi explicabo quibusdam illum ex vel, doloribus repudiandae quae provident dolorem consequatur, porro molestias perferendis? Veritatis quasi voluptate earum.</p>
							</div>
						</div>
					</div>
					<!-- img Marketing intro -->
					<div class="col-12 col-lg-2">

						<div class="medio-marketing mb-lg-5 pb-lg-5 d-block d-lg-none">
							<img src="<?php echo get_template_directory_uri();?>/images/jpg/marketing-horizontak--001.jpg" alt="" class="img-fluid">
						</div>
					</div>
					<div class="col-12">
						<div class="box-general">
							<div class="title cl--second text-center py-5 ">
								<h2>¿CÓMO PUEDES AYUDAR?</h2>
							</div>
							<div class="subtitle cl--tertiary text-center text-uppercase py-5">
								<h2>Donaciones</h2>
							</div>
						</div>
					</div>
					<div class="col-12">
						<div class="box-list text-center">
							<ul class="d-flex flex-column-reverse flex-lg-row">
								<li class="list-inline-item">
									<div>Física</div>
								</li>
								<li class="list-inline-item">
									<div>Monetarias</div>
								</li>
								<li class="list-inline-item">
									<div>Voluntariado</div>
								</li>
							</ul>
							<ul class="d-flex flex-column-reverse flex-lg-row">
								<li class="order-1 order-lg-1 list-inline-item">
									<div>Donaciones fisicas</div>
								</li>
								<li class="order-3 order-lg-2 list-inline-item  bgc--tertiary cl--white">
								<img src="<?php echo get_template_directory_uri();?>/images/png/cart-shop.png" alt="" class="img-fluid">
								</li>
								<li class="order-2 list-inline-item">
									<div>Fechas tipo de Voluntariado</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- img Marketing intro -->
			<div class="col-12 col-lg-2">
				<div class="medio-marketing mb-lg-5 pb-lg-5 d-none d-lg-block">
					<img src="<?php echo get_template_directory_uri();?>/images/jpg/banner-right.jpg" alt="" class="img-fluid">
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ***INTRO BG Site END *** -->

<?php
get_footer();
