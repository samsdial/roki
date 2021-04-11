<?php
/**
 * Partial template for content in staff.php
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<div class="row">
	<div class="col-12 py-3 pt-lg-5">
		<div class="box-staff-intro py-3 pt-lg-4 cl-primary">
			<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
		</div>
	</div>
	<div class="col-12">
		<div class="box-staff-paragraf">
			<?php the_content(); ?>
		</div>
	</div>
</div>
