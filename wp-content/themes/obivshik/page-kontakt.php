<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package obivshik
 */

get_header();
?>
<?php if ( function_exists('yoast_breadcrumb') ) {
yoast_breadcrumb('<div class="container mt-3"><div id="breadcrumbs">','</div></div>');
} ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">

	<section class="text-kontakt pt-4">
		<div class="container">
<?php the_title('<h1 class="text-center pb-3"><span>','</span></h1>');?>
<div class="row">
	<div class="col-lg-6 pb-3">
		<?php the_field('text_left');?>
		<a href="#map" class="btn btn-sm mt-2 btn-info"><i class="fa fa-map-marker pr-2"></i>Мы на карте</a>
		<a href="#" class="btn btn-sm mt-2 btn-danger popmake-276"><i class="fa fa-car pr-2"></i>Выезд мастера</a>
	
	</div>
	<div class="col-lg-6 pb-3">
		<?php the_field('text_right');?>

		<?php
$slider = get_field('serts',88);
 if ($slider) {?>
	<div class="row">
			<?php foreach ($slider as $slide) {
				?>
						<div class="col text-center"><a data-fancybox="serts" href="<?php echo $slide['url'];?>"><img src="<?php echo $slide['sizes']['medium'];?>"></a></div>
			<?php }?>
</div>
<?php }?>

	</div>
</div>

</div>
</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
