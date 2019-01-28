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

	<section class="text-kontakt pt-3">
		<div class="container">
<?php the_title('<h1 class="text-center pb-3"><span>','</span></h1>');?>

<?php 
$opinions = get_field('opinions');
if ($opinions) {
foreach ($opinions as $o) {?>
<div class="row align-items-center">
<div class="col-lg-2 col-md-3 text-center col-12 mb-2"><img src="<?php echo $o['img'];?>">
<p class="h5 pt-2 mb-1"><?php echo $o['fio'];?></p>
<small><?php echo $o['date'];?></small>
</div>
<div class="col-lg-10 col-md-9 col-12 mb-5">
	<div class="row">
		<div class="col-12"><p><?php echo $o['text'];?></p></div>
	</div>	
</div>
</div>
<?php }}?>

<?php if (get_field('form')) {?>
<p class="h4 mt-5">Оставить отзыв</p>
<?php echo do_shortcode(get_field('form'));?>
<?php }?>
</div>
</section>



		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();