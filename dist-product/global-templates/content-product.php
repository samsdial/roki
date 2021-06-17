
<?php
/**
 * Right sidebar check
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<div class="bgi mb-5 w-100" >
</div>
<div class="d-block w-100 mb-5" >
	<div class="row">
		<div class="col-12 col-md-6">
			<div class="box-description-product">
				<div class="title">
					<h2>Acerca de este producto</h2>
				</div>
				<div class="paragraph">
					<?php the_field( 'articulo_descripcion' ); ?>
				</div>
			</div>
		</div>
		<div class="col-12 col-md-6">
			<div class="box-data-detail-product">
				<?php the_field( 'articulo_detail' ); ?>
			</div>
		</div>
	</div>
</div>
