<?php
/**
 * Template Name: Staff
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
<!-- EQUIPMENT -->
<section class="staff">
	<div class="container">
		<?php
			while ( have_posts() ) {
				the_post();
				get_template_part( 'loop-templates/content', 'staff' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}
			}
		?>
		<div class="row pt-4">
			<div class="col pt-5">
				<div class="row no-gutters">
				<?php if( have_rows('staff-list') ): ?>
					<?php while( have_rows('staff-list') ): the_row();?>
					<div class="col-12 col-lg-6">
						<div class="box-staff">
							<?php if( have_rows('gallery') ): ?>
							<ul class="js-slider min-slider">
								<?php while( have_rows('gallery') ): the_row();?>
									<li class=""> <figure class="mb-4"><img class="img-fluid" src="<?php the_sub_field('image'); ?>" alt="staff"></figure> </li>
								<?php endwhile; ?>
							</ul>
							<?php endif; ?>
							<div class="card-body">
								<div class="title mb-3">
									<h2>
										<?php the_sub_field('tilte'); ?>
									</h2>
								</div>
								<div class="paragraf mb-5">
									<p>
										<?php the_sub_field('paragraf'); ?>
									</p>
								</div>
							</div>
						</div>
					</div>
					<?php endwhile; ?>
				<?php endif; ?>
				</div>
			</div>
		</div>
		<div class="row py-5">
			<div class="col text-center py-5">
				<div class="subtitle  mb-3">
					<h2 class="txt_size--med">
						<?php the_field( 'closed_section' ); ?>
					<!-- ¿Te interesa ser parte de nuestro gran equipo? -->
					</h2>
				</div>
				<div class="action">
				<?php $url_link = get_field( 'url_link' ); ?>
					<?php if ( $url_link ) : ?>
					<a href="<?php echo esc_url( $url_link); ?>" class="link">
						<?php the_field( 'text_link' ); ?>
						<i class="fa fa-angle-right"></i>
						<!-- Trabaja con nosotros  -->
					</a>
				<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php
get_footer();
