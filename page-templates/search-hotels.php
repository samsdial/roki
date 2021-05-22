<?php
/**
 * Template Name: Search Hotels
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

<!-- ***INTRO BG*** -->
<section class="about mb-5">

</section>
<!-- ***INTRO BG Site END *** -->
<!-- ***ABOUT*** -->
<section class="intro mb-5">
	<?php
		while ( have_posts() ) {
			the_post();
			get_template_part( 'loop-templates/content', 'title' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}
		}
	?>
</section>
<!-- ***ABOUT END*** -->
<!-- ***SEARCH COLEGIOS BG*** -->
<section class="Search mb-5">
	<div class="pets pets-left--child pets-top">
		<div class="pets--child pets--child-top">
			<img src="<?php echo get_template_directory_uri();?>/images/png/legs-left2.png" alt="" class="img-fluid">
		</div>
	</div>
	<div class="pets pets-right--child pets-bottom pets--child-bottom">
		<div class="pets--child">
			<img src="<?php echo get_template_directory_uri();?>/images/png/legs-right.png" alt="" class="img-fluid">
		</div>
	</div>
	<div class="container-fluid mb-5">
		<div class="row mb-5">
			<div class="col-12 mb-5">
				<div class="box-list-search form-min-search mb-2">
					<form action="">
					<ul class="list list-inline-grid w-100 ">
						<li class="list-inline-item">
							<div class="title">
								<h2> Ciudad </h2>
							</div>
							<div class="box box-select">
								<select name="select">
									<option value="value1" selected> Seleccionar</option>
									<option value="value2">Value 2</option>
									<option value="value3">Value 3</option>
								</select>
							</div>
						</li>
						<li class="list-inline-item">
							<div class="title">
								<h2> Tipo de Servicio </h2>
							</div>
							<div class="box box-select">
								<select name="select">
									<option value="value1" selected> Seleccionar</option>
									<option value="value2">Value 2</option>
									<option value="value3">Value 3</option>
								</select>
							</div>
						</li>
						<li class="list-inline-item">
							<div class="title">
								<h2> Fecha de llegada </h2>
							</div>
							<div class="box">
								<input type="text" placeholder="00/00/0000" class="w-100">
							</div>
						</li>
						<li class="list-inline-item ">
							<div class="title">
								<h2> Fecha de salida </h2>
							</div>
							<div class="box">
								<input type="text" placeholder="00/00/0000" class="w-100">
							</div>
						</li>
						<li class="list-inline-item">
							<div class="title">
								<h2> Huespedes </h2>
							</div>
							<div class="box">
								<input type="number" value="1" class="w-100">
							</div>
						</li>
						<li class="list-inline-item">
							<div class="title">
								<h2> Buscar</h2>
							</div>
							<div class="box">
								<input type="text" placeholder="Buscar" class="w-100">
							</div>
						</li>
					</ul>
					<div class="col-12 text-center py-3">
						<button class="btn btn-primary" type="submit">Buscar</button>
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ***SEARCH COLEGIOS END *** -->



<?php
get_footer();
