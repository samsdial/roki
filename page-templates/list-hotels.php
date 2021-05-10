<?php
/**
 * Template Name: Lista Hotel - Colegios
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
<section class="intro mb-5 pb-5">
	<div class="bgi bgi-intro" style="background-image: url('<?php echo get_template_directory_uri();?>/images/jpg/intro-list-hotels.jpg');">
	</div>
</section>
<!-- ***INTRO BG Site END *** -->

<!-- *** BG*** -->
<section class="hotels-list mb-5 pt-5">
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
			<div class="col-12 col-lg-3 pt-5 mt-5 mb-5">
				<div class="box-menu-right">
					<div class="title">
						<h3>
							Edad de tu Perro
						</h3>
					</div>
					<div class="list mb-5 pb-5">
						<ul class="list-group menu">
							<li class="list-group-item">
								<a href="">Cachorros (0 - 11 meses)</a>
							</li>
							<li class="list-group-item">
								<a href="#">Adultos</a>
							</li>
							<li class="list-group-item">
								<a href="#">Adultos Mayores</a>
							</li>
						</ul>
					</div>
					<div class="title">
						<h3>
							Nivel de actividad
						</h3>
					</div>
					<div class="list">
						<ul class="list-group menu">
							<li class="list-group-item">
								<a href="">Cachorros (0 - 11 meses)</a>
							</li>
							<li class="list-group-item">
								<a href="">Adultos</a>
							</li>
							<li class="list-group-item">
								<a href="">Adultos Mayores</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-7">
				<div class="box-hotels-list mr-4 mb-5">
					<div class="title text-uppercase mb-5">
						<h2>
							Arkanius Dog
						</h2>
					</div>
					<figure class="img text-right">
						<img src="<?php echo get_template_directory_uri();?>/images/jpg/hotels-school--01.jpg" alt="" class="img-fluid mb-2">
					</figure>
					<div class="paragraf mb-5">
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi illum dignissimos eius officia quia omnis? Quasi minus nam repellendus. Iure sequi quo totam nulla explicabo alias ex facere modi labore!
						</p>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi illum dignissimos eius officia quia omnis? Quasi minus nam repellendus. Iure sequi quo totam nulla explicabo alias ex facere modi labore!. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi illum dignissimos eius officia quia omnis? Quasi minus nam repellendus. Iure sequi quo totam nulla explicabo alias ex facere modi labore!
						</p>
					</div>
					<div class="action text-right mb-5">
					<a href="#" class="btn btn-primary btn-detail">Ver detalle</a>
					</div>
				</div>
				<div class="box-hotels-list mr-4 mb-5">
					<div class="title text-uppercase mb-5">
						<h2>
							Arkanius Dog
						</h2>
					</div>
					<figure class="img text-right">
						<img src="<?php echo get_template_directory_uri();?>/images/jpg/hotels-school--02.jpg" alt="" class="img-fluid mb-2">
					</figure>
					<div class="paragraf mb-5">
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi illum dignissimos eius officia quia omnis? Quasi minus nam repellendus. Iure sequi quo totam nulla explicabo alias ex facere modi labore!
						</p>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi illum dignissimos eius officia quia omnis? Quasi minus nam repellendus. Iure sequi quo totam nulla explicabo alias ex facere modi labore!. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi illum dignissimos eius officia quia omnis? Quasi minus nam repellendus. Iure sequi quo totam nulla explicabo alias ex facere modi labore!
						</p>
					</div>
					<div class="action text-right mb-5">
					<a href="#" class="btn btn-primary btn-detail">Ver detalle</a>
					</div>
				</div>
				<div class="box-hotels-list mr-4 mb-5">
					<div class="title text-uppercase mb-5">
						<h2>
							Arkanius Dog
						</h2>
					</div>
					<figure class="img text-right">
						<img src="<?php echo get_template_directory_uri();?>/images/jpg/hotels-school--03.jpg" alt="" class="img-fluid mb-2">
					</figure>
					<div class="paragraf mb-5">
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi illum dignissimos eius officia quia omnis? Quasi minus nam repellendus. Iure sequi quo totam nulla explicabo alias ex facere modi labore!
						</p>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi illum dignissimos eius officia quia omnis? Quasi minus nam repellendus. Iure sequi quo totam nulla explicabo alias ex facere modi labore!. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi illum dignissimos eius officia quia omnis? Quasi minus nam repellendus. Iure sequi quo totam nulla explicabo alias ex facere modi labore!
						</p>
					</div>
					<div class="action text-right mb-5">
						<a href="#" class="btn btn-primary btn-detail">Ver detalle</a>
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-2">

				<div class="medio-marketing mb-5 pb-5 d-none d-lg-inline-block">
					<img src="<?php echo get_template_directory_uri();?>/images/jpg/banner-right.jpg" alt="" class="img-fluid">
				</div>
				<div class="medio-marketing mb-5 pb-5 d-none d-lg-inline-block">
					<img src="<?php echo get_template_directory_uri();?>/images/jpg/banner-right.jpg" alt="" class="img-fluid">
				</div>
				<div class="medio-marketing mb-5 pb-5 d-inline-block d-lg-none">
					<img src="<?php echo get_template_directory_uri();?>/images/jpg/marketing-horizontak--001.jpg" alt="" class="img-fluid">
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ***INTRO BG Site END *** -->

<?php
get_footer();
