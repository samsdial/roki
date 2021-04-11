<?php
/**
 * Partial template for content in alternative.php
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<div class="title mb-4 cl-primary">
		<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
	</div>
	<div class="paragraf mb-5">
		<?php the_content(); ?>
	</div>
	<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

</div><!-- #post-## -->
