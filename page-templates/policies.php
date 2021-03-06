<?php
/**
 * Template Name: Pólizas
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
</section>
<!-- ***TITLE-intro*** -->

<!-- ***INTRO BG*** -->
<!-- ***INTRO BG Site END *** -->

<!-- ***Fundation BG*** -->
<section class="foundation pt-5 mt-5 mb-5">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="row">
						<div class="col-12 col-lg-6">
							<div class="box-foundation mb-5">
								<div class="title cl--second mb-5">
									<h2>
									<?php the_field( 'titulo_data' ); ?>
									</h2>
								</div>
								<div class="paragraf">
								<?php the_field( 'descripcion_data' ); ?>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-6">
							<div class="box-foundation">
								<div class="title cl--tertiary mb-5">
									<h2><?php the_field( 'titulo_cotizador' ); ?></h2>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
							<div class="col-12">
								<div class="box-foundation mb-5">
									<div class="title cl--second mb-5">
										<h2>Resultados</h2>
									</div>
								</div>
							</div>
							<div class="col-12">
								<div class="box-list-policies text-center">
									<ul class="list-inline-grid w-100">
										<li class="list-inline-item">
											<div class="box-item box-item-max">
												<h2>lorem</h2>
											</div>
											<a class="d-block box-item box-item-min cl--white">
												<img src="<?php echo get_template_directory_uri();?>/images/png/cart-shop.png" alt="" class="img-fluid">
											</a>
										</li>
										<li class="list-inline-item">
											<div class="box-item box-item-max">
												<h2>Lorem</h2>
											</div>
											<a class="d-block box-item box-item-min cl--white">
												<img src="<?php echo get_template_directory_uri();?>/images/png/cart-shop.png" alt="" class="img-fluid">
											</a>
										</li>
										<li class="list-inline-item">
											<div class="box-item box-item-max">
												<h2>lorem</h2>
											</div>
											<a class="d-block box-item box-item-min cl--white">
												<img src="<?php echo get_template_directory_uri();?>/images/png/cart-shop.png" alt="" class="img-fluid">
											</a>
										</li>
										<li class="list-inline-item">
											<div class="box-item box-item-max">
												<h2>lorem</h2>
											</div>
											<a class="d-block box-item box-item-min cl--white">
												<img src="<?php echo get_template_directory_uri();?>/images/png/cart-shop.png" alt="" class="img-fluid">
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
				</div>
				<div class="col-12 col-lg-2">
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
<!-- ***Fundation BG Site END *** -->

<?php
get_footer();
