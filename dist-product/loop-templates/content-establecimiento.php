<?php
/**
 * Post rendering content according to caller of get_template_part
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<div class="container">
	<div class="row">
			<!-- <i class="ion ion-alert"></i> -->
		<div class="col-12 col-lg-3 mb-5">
				<?php if( have_rows('lista_imagenes') ): ?>
					<ul class="js-hotels-slider slider-hotels">
					<?php while( have_rows('lista_imagenes') ): the_row();?>
						<li>
							<img src="<?php the_sub_field('imagen'); ?>" class="img-fluid" alt="partner">
						</li>
					<?php endwhile; ?>
					</ul>
				<?php endif; ?>
		</div>
		<div class="col-12 col-lg-5">
			<div class="box-hotels">
				<?php the_content(); ?>
			</div>
		</div>
		<div class="col-12 col-lg-4">
			<div class="box-form-quote">
				<div class="title cl--tertiary text-uppercase mb-4">
					<h2>
						<!-- Solicita una Cotización -->
						<?php the_field( 'titulo_formulario' ); ?>
					</h2>
				</div>
				<div class="paragraf cl--second mb-4">
					<p>
						<!-- Los campos marcados con * son necesarios para poder generar una cotización del servicio del colegio. -->
					<?php the_field( 'descripcion_formulario' ); ?>
					</p>
				</div>
				<div class="paragraf cl--tertiary mb-4">
					<p>
						<!-- ¿Donde podemos comunicarte con tigo? -->
						<?php the_field( 'subtitulo_formulario' ); ?>
					</p>
				</div>
				<div class="form">
					<?php the_field( 'forms_contact' ); ?>
				</div>
			</div>
		</div>
	</div>
</div>
