<?php
/**
 * Template Name: Undersconstruction
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

?>

<div class="box--construction  bgc bgc--second" >
	<div class="container" >
		<div class="row pt-5">
			<div class="col-md-12 text-center pt-3 pb-5">
				<span class="logo logo_site"></span>
			</div><!-- #col -->
		</div><!-- .row end -->
		<div class="d-flex flex-column flex-lg-row" style="height: 100vh;">
			<div class="align-self-top text-center w-100 w-lg-70 py-5 py-lg-0">
				<h2 class="cl--white txt_size--max pt-5 pb-2 ">
					<?php the_field( 'title' ); ?>
				</h2>
				<p class="cl--black mb-5 txt_size--med">
				<?php the_field( 'subtititle' ); ?>
				</p>
				<div class="w-100 text-center">
					<a href="<?php the_field( 'url_what' ); ?>" target="_blank"><span class="icon icon-whatsapp"></span></a>
				</div>
			</div><!-- #col -->
			<div class="w-100 w-lg-70 position-relative">
				<span class="bgi bgi--pet"></span>
			</div><!-- #col -->
		</div><!-- .row end -->
	</div><!-- #content -->

</div><!-- #full-width-page-wrapper -->

<?php
// get_footer();
