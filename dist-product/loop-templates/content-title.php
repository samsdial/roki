<?php
/**
 * Partial template for content in title.php
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<div class="container">
	<div class="row">
		<div class="col py-5">
			<div class="box-head cl--second text-center text-uppercase">
				<?php the_title( '<h1 class="title">', '</h1>' ); ?>
			</div>
		</div>
	</div>
</div>
