<?php
/**
 * Template Name: About
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
<!-- ***ABOUT*** -->
<section class="about mb-5">
	<?php
		while ( have_posts() ) {
			the_post();
			get_template_part( 'loop-templates/content', 'about' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}
		}
	?>
</section>
<!-- ***ABOUT END*** -->
<!-- ***ABOUT-intro*** -->
<section class="about-placeholder bgc--primary">
	<figure class="mb-3 mb-lg-0">
		<?php $intro_image = get_field( 'intro_image' ); ?>
		<?php if ( $intro_image ) : ?>
			<img src="<?php echo esc_url( $intro_image['url'] ); ?>" alt="<?php echo esc_attr( $intro_image['alt'] ); ?>" class="img-fluid w-100" />
		<?php endif; ?>
	</figure>
	<div class="container">
		<div class="row align-items-center">
			<div class="col-12 col-lg-5 py-5">
				<div class="box-about-placeholder">
					<div class="paragraf text-white">
						<?php the_field( 'intro' ); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ***ABOUT-intro END*** -->
<!-- ***beginning*** -->
<section class="beginning">
	<div class="container">
		<div class="row">
			<div class="col py-5">
				<div class="title-intro py-5 mt-3">
					<h2><?php the_field( 'title-begin' ); ?></h2>
				</div>
			</div>
		</div>
		<div class="row">
			<?php if( have_rows('list-begin') ): ?>
				<?php while( have_rows('list-begin') ): the_row();?>
					<div class="col-12 col-lg-4 mb-5 pb-3">
						<div class="box-begin">
							<figure class="mb-5 text-center text-lg-left">
							<img src="<?php the_sub_field('list_begin_image'); ?>" alt="" class="d-inline-block">
							</figure>
							<div class="card-body text-center text-sm-left">
								<div class="title mb-4">
									<h2>
									<?php the_sub_field('title_begin'); ?>
									</h2>
								</div>
								<div class="paragraf mb-5">
									<p>
										<?php the_sub_field('descripion_begin'); ?>
									</p>
								</div>
							</div>
						</div>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
		<div class="row pb-5">
			<div class="col text-center box-about-prefotter pb-5">
				<div class="subtitle mb-5">
					<h2>
					<?php the_field( 'closed_section' ); ?>
					<!-- Conoce nuestros estudios, nuestros equipos <br> y las personas que harán parte de tu nuevo equipo. -->
					</h2>
				</div>
				<div class="action">
					<?php $url_link = get_field( 'url_link' ); ?>
					<?php if ( $url_link ) : ?>
						<a href="<?php echo esc_url( $url_link); ?>" class="link">
								<?php the_field( 'text_link' ); ?>
							<i class="fa fa-angle-right"></i>
						</a>
						<!-- Agenda tu visita  -->
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ***beginning END*** -->
<!-- ***PREFotter*** -->
<section class="w-100 prefotter bgc--primarylight box-shadow-top mb-5">
	<!-- ***CONTAINER*** -->
		<div class="box-prefotter d-lg-flex w-100 w-lg-70">
				<figure class="w-100 w-lg-70">
					<img src="<?php the_field('prefooter_image', 'option'); ?>" class="img-fluid w-100" alt="Atrevete a Soñar">
				</figure>
				<div class="box-prefotter-info text-white align-self-center text-center w-100 w-lg-50 px-5 py-5 py-lg-0">
					<div class="title mb-3">
						<?php the_field('prefooter_titulo', 'option'); ?>
					</div>
					<div class="paragraf mb-5">
						<?php the_field('texto_prefooter', 'option'); ?>
					</div>
					<div class="action mt-2">
						<a href="<?php the_field('prefooter_link', 'option'); ?>" target="_blank"  class="btn btn_primary"><?php the_field('prefooter_text', 'option'); ?></a>
					</div>
				</div>
		</div>
	<!-- ***CONTAINER*** -->
</section>
<!-- ***PREFotter END*** -->
<?php
get_footer();
