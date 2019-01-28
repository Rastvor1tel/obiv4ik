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
<?php the_title('<h1 class="text-center mb-3"><span>','</span></h1>');?>
<div class="row">
	<div class="col-12">
		<img class="mb-3" src="<?php the_field('img');?>" alt="">
		<div class="text mb-5"><?php the_field('text');?></div>
	</div>

	<div class="col-md-12">
		<?php
$slider = get_field('imgs');
 if ($slider) {?>

		

	<div class="row align-items-center justify-content-center">
			<?php foreach ($slider as $slide) {
				?>
						<div class="col-auto pb-5 text-center"><a data-fancybox="imgs" href="<?php echo $slide['url'];?>"><img style="max-height:180px;" src="<?php echo $slide['sizes']['medium'];?>"></a></div>
			<?php }?>
</div>
<?php }?>

	</div>

	<div class="col-lg-4 pb-3">
		<?php the_field('text_left');?>
		<a href="#" class="btn btn-max  popmake-276 mt-2 btn-danger"><i class="fa fa-car pr-2"></i>Выезд мастера</a>
	
	</div>
	<div class="col-lg-8 pb-3">
		

		<?php
$slider = get_field('serts',88);
 if ($slider) {?>
	<div class="row justify-content-center">
			<?php foreach ($slider as $slide) {
				?>
						<div class="col-auto text-center"><a data-fancybox="serts" href="<?php echo $slide['url'];?>"><img src="<?php echo $slide['sizes']['medium'];?>"></a></div>
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