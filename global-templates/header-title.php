
<?php
/**
 * Right sidebar check
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<div class="container container-single">
	<div class="row">
		<div class="col py-5">
			<div class="box-head cl--second text-center text-uppercase">
				<h1 class="title">
					<?php the_field( 'titulo_lista_aliado', 'option'); ?>
				</h1>
			</div>
		</div>
	</div>
</div>
<div class="bgi bgi-intro bgi-single-product mb-5" style="background-image: url('<?php the_field( 'imagen_lista_aliado', 'option' ); ?>');">
</div>

<div class="container container-archive">
	<div class="row">
		<div class="col py-5">
			<div class="box-head cl--second text-center text-uppercase">
				<h1 class="title">
					Productos
				</h1>
			</div>
		</div>
	</div>
</div>
<div class="bgi bgi-intro bgi-intro-archive mb-5" style="background-image: url('<?php the_field( 'imagen_lista_aliado', 'option' ); ?>');">
	<img src="" alt="">
</div>
