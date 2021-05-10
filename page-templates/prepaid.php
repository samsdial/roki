<?php
/**
 * Template Name: Prepagada
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
	<div class="bgi bgi-intro" style="background-image: url('<?php echo get_template_directory_uri();?>/images/jpg/intro-prepagada-001.jpg');">
	</div>
</section>
<!-- ***INTRO BG Site END *** -->

<!-- ***PREPAGADA  BG*** -->
<section class="prepaid pt-5 mb-5">
		<div class="container">
			<div class="row">
                <div class="col-12 col-lg-3 pt-5 mt-5 mb-5">
                    <div class="box-menu-right">
                        <div class="title">
                            <h3>
                                Filtro tipo de mascotas
                            </h3>
                        </div>
                        <div class="list mb-5 mt-5 pb-5">
                            <ul class="list-group menu">
                                <li class="list-group-item">
                                    <div class="subtitle">
                                        <h3>
                                            Opción 2
                                        </h3>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <figure>
                                        <img src="<?php echo get_template_directory_uri();?>/images/jpg/logo-prepagada-002.jpg" alt="" class="img-fluid">
                                    </figure>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
				<div class="col-12 col-lg-7">
					<div class="row">
						<div class="col-12 col-lg-12">
							<div class="box-foundation mb-5">
								<div class="title cl--second mb-5">
									<h2>Descripción y costo</h2>
								</div>
								<div class="paragraf text-justify">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque, possimus veniam. Amet numquam soluta repellat error nobis animi reiciendis aliquam dolorum? Sequi consectetur eaque quas ipsam iste fugiat unde reprehenderit.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque, possimus veniam. Amet numquam soluta repellat error nobis animi reiciendis aliquam dolorum? Sequi consectetur eaque quas ipsam iste fugiat unde reprehenderit.</p>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-12">
							<div class="box-plan mb-5">
								<div class="title cl--second mb-5">
									<h2>Plan</h2>
								</div>
							</div>
							<div class="row align-items-end">
								<div class="col-6">
									<div class="box-plan-list">
										<ul class="list-group">
											<li class="list-group-item">
												<a href="#" class="btn btn-sub-menu">
													Plan complentario
												</a>
											</li>
											<li class="list-group-item">
												<a href="#" class="btn btn-sub-menu">
													Plan Tradiccional
												</a>
											</li>
											<li class="list-group-item">
												<a href="#" class="btn btn-sub-menu">
													Plan Cat
												</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="col-6">
									<div class="d-flex flex-row align-items-center">
										<div class="flex-fill text-right mr-1">
											<i class="ion-plus-circled cl--tertiary"></i>
										</div>
										<div class="flex-fill mx-1">
											<p>Coberturas</p>
										</div>
										<div class="flex-fill ml-1">
											<a class="btn-card-tertiary">
												<img src="<?php echo get_template_directory_uri();?>/images/png/cart-shop.png" alt="" class="img-fluid">
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-lg-2">
					<div class="medio-marketing mb-5 pb-5">
						<img src="<?php echo get_template_directory_uri();?>/images/jpg/banner-right.jpg" alt="" class="img-fluid">
					</div>
				</div>
			</div>
		</div>
</section>
<!-- ***PREPAGADA END *** -->
<!-- ***Marketing BG*** -->
<section class="about mb-5">

</section>
<!-- ***Marketing BG Site END *** -->


<?php
get_footer();
