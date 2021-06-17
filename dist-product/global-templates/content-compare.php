
<?php
/**
 * Compare php
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<div class="container compare-product">
	<div class="line-top d-block pt-4">
		<!-- ***SLIDER*** -->
		<?php if( have_rows('lista_de_productos') ): ?>
			<div class="row">
			<?php while( have_rows('lista_de_productos') ): the_row();?>
				<div class="col-12 col-md-4 col-lg-3 mb-3">
					<div class="box-content-compare d-flex d-flex-row">
						<div class="image flex-fill w-25">
							<div class="image-item d-flex justify-content-center align-items-center">
								<img src="<?php the_sub_field('marca'); ?>" alt="logo">
							</div>
						</div>
						<div class="date flex-fill">
							<div class="image-item d-flex justify-content-center align-items-center">
								<div>
									<h2 class="price">$<?php the_sub_field('precio'); ?></h2>
									<h3 class="info">Cobro Domicilio</h3>
								</div>
							</div>
						</div>
						<div class="box-icon flex-fill w-25">
							<div class="icon-item d-flex justify-content-center align-items-center">
								<i class="ion ion-ios7-cart-outline"></i>
							</div>
						</div>
						<a class="link" href="<?php the_sub_field('link') ?>">
						</a>
					</div>
				</div>
			<?php endwhile; ?>
			</div>
		<?php endif; ?>
		<!-- ***SLIDER END*** -->
	</div>
</div>
