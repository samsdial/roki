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
				<?php if ( get_field( 'imagen_vertical' ) ) : ?>
					<img src="<?php the_field( 'imagen_vertical' ); ?>" alt="Fundaciones Doki" class="img-fluid d-block mx-auto mb-5" />
				<?php endif ?>
			</div>
			<!-- Content intro -->
			<div class="col ">
				<div class="row">
					<!-- img center intro -->
					<div class="col-12 mb-5">
						<?php if ( get_field( 'imagen_horizontal' ) ) : ?>
							<img src="<?php the_field( 'imagen_horizontal' ); ?>" class="img-fluid w-100" alt="Fundaciones Doki" />
						<?php endif ?>
					</div>
					<div class="col-12">
						<div class="box-general">
							<div class="title text-center py-5 mx-auto">
								<h2>
									<?php the_field( 'title_fundation' ); ?>
								</h2>
							</div>
							<div class="paragraf text-justify py-5">
								<?php the_field( 'description_foundation' ); ?>
							</div>
						</div>
					</div>
					<!-- img Marketing intro -->
					<div class="col-12 col-lg-2">

						<div class="medio-marketing mb-lg-5 pb-lg-5 d-block d-lg-none">
							<?php if ( get_field( 'marketing_img_mobile' ) ) : ?>
								<img src="<?php the_field( 'marketing_img_mobile' ); ?>" alt="Publicidad destock" class="img-fluid" />
							<?php endif ?>
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
									<button data-toggle="modal" data-target="#physical-donations">
										Donaciones fisicas
									</button>
								</li>
								<li class="order-3 order-lg-2 list-inline-item  bgc--tertiary cl--white">
									<button class="w-100 py-3" data-toggle="modal" data-target="#monetary-donations">
										<img src="<?php echo get_template_directory_uri();?>/images/png/cart-shop.png" alt="" class="img-fluid">
									</button>
								</li>
								<li class="order-2 list-inline-item">
									<button data-toggle="modal" data-target="#voluntary-donations">
										Fechas tipo de Voluntariado
									</button>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- img Marketing intro -->
			<div class="col-12 col-lg-2">
				<div class="medio-marketing mb-lg-5 pb-lg-5 d-none d-lg-block">
					<?php if ( get_field( 'marketing_img' ) ) : ?>
						<img src="<?php the_field( 'marketing_img' ); ?>" alt="Publicidad" class="img-fluid" />
					<?php endif ?>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ***INTRO BG Site END *** -->

<!-- Modal Donaciones Fisicas -->
<div class="modal fade" id="physical-donations" tabindex="-1" aria-labelledby="physical-donations" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="physical-donations">Donaciones Fisicas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non quam explicabo, amet quis quaerat a ratione rem quisquam veritatis ipsum praesentium unde voluptates molestias consequuntur perferendis reprehenderit nihil voluptate maiores.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn cl--second" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal Monetarias  -->
<div class="modal fade" id="monetary-donations" tabindex="-1" aria-labelledby="monetary-donations" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="monetary-donations">Donaciones Monetarias</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non quam explicabo, amet quis quaerat a ratione rem quisquam veritatis ipsum praesentium unde voluptates molestias consequuntur perferendis reprehenderit nihil voluptate maiores.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn cl--second" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal Voluntarias  -->
<div class="modal fade" id="voluntary-donations" tabindex="-1" aria-labelledby="voluntary-donations" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="voluntary-donations">Donaciones Voluntarias</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non quam explicabo, amet quis quaerat a ratione rem quisquam veritatis ipsum praesentium unde voluptates molestias consequuntur perferendis reprehenderit nihil voluptate maiores.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn cl--second" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<?php
get_footer();
