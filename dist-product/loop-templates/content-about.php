<?php
/**
 * Partial template for content in about.php
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<div class="container">
		<div class="row">
			<div class="col py-5">
				<div class="box-about-intro py-5 cl-primary">
					<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
				</div>
			</div>
		</div>
		<div class="row align-items-start" id="post-<?php the_ID(); ?>">
			<div class="col-12 col-lg-7 pl-3 order-1 order-lg-2 mb-4">
				<figure class="pl-lg-5 ml-lg-5">
					<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
				</figure>
			</div>
			<div class="col-12 col-lg-5 order-2 order-lg-1">
				<div class="box-about">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
</div>
