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

	<section class="text-oplata pt-4">
		<div class="container">
<h1 class="text-center mb-3"><span>	<?php the_field('h1');?></span></h1>
<div class="row">
	
	<div class="col-12 ">
		<?php
$prems = get_field('oplata');
		 foreach($prems as $prem) { ?>
		<div class="row">
			<div class="col-auto pr-0"><i class="fa fa-check-circle  text-success"></i></div>
			<div class="col"><?php echo $prem['prem'];?></div>
		</div>
		<?php }?>
		<p class="h2 text-center pt-4 pb-3"><?php the_field('forms_h1');?></p>
		<?php
$prems = get_field('forms');;
		 foreach($prems as $prem) { ?>
		<div class="row">
			<div class="col-auto pr-0"><i class="fa fa-check-circle  text-success"></i></div>
			<div class="col"><?php echo $prem['prem'];?></div>
		</div>
		<?php }?>
		<p><?php the_field('forms_text');?></p>
		
	</div>
</div>

</div>
</section>



<?php
$slider = get_field('serts',88);
 if ($slider) {?>
 <section id="serts">
	<div class="container py-5">
		<div class="row">
			<div class="col-md-12">	
				<p class="h2 pb-3 text-center"><?php echo get_the_title(88);?></p>
			</div>
		</div>

	<div class="row">
			<?php foreach ($slider as $slide) {
				?>
						<div class="col text-center"><a data-fancybox="serts" href="<?php echo $slide['url'];?>"><img src="<?php echo $slide['sizes']['medium'];?>"></a></div>
			<?php }?>
</div>
<?php if (get_field('button_text',88)) {?>
<div class="row">
	<div class="col-md-12 text-center py-3">
		<a href="<?php the_field('button_url',88);?>" class="btn-max btn-info popmake-284"><i class="fa fa-phone mr-2"></i><?php the_field('button_text',88);?></a>
	</div>
</div>
<?php }?>
	</div>
</section>

<?php }?>




		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
