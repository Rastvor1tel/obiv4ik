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
<h1 class="text-center pb-3"><span><?php the_field('h1');?></span></h1>
<div class="row">
	<div class="col-12">
		<?php the_field('text_h1');?>
		<div class="clearfix pt-3">	</div>
		<a href='#' class="popmake-284" data-usl="<?php the_title();?>"><img src="<?php the_field('img');?>"></a>
	</div>
	<div class="col-12 pt-2">
		<p class="h2 text-center my-3 my-4"><?php the_field('prem_title');?></p>
		<?php
$prems = get_field('prems');;
		 foreach($prems as $prem) { ?>
		<div class="row">
			<div class="col-auto pr-0"><i class="fa fa-check-circle  text-success"></i></div>
			<div class="col"><?php echo $prem['prem'];?></div>
		</div>
		<?php }?>
		<?php 
			$usls = get_field('links');
			if ($usls) {?>
			<div class="row urls align-items-center pt-2">
				<div class="col-md-auto">
				<?php foreach ($usls as $usl) {?>
				<a href="<?php echo $usl[url];?>" class="btn btn-sm mb-1 btn-info"><?php echo $usl[text];?></a>
				<?php }?>
				</div>
			</div>
			<?php }?>
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


<?php
$prems = get_field('prems',49);
 if ($prems) {?>
<section id="prems">
	<div class="container pt-5 pb-3">
		<div class="row">
			<div class="col-md-12">	
				<p class="h2 pb-5 text-center"><?php echo get_the_title(49);?></p>
			</div>
		</div>
		<div class="row align-items-center">
			<?php foreach ($prems as $prem) {?>
						<div class="col-lg-3 pb-3 text-center">
							<img src="<?php echo $prem['img'];?>" width="64" class="pb-1">
							<div class="clearfix"></div>
							<p><?php echo $prem['text'];?></p>
						</div>
			<?php }?>
		</div>
	</div>
</section>
<?php }?>


<?php if (get_field('mogu_title',2)) {?>
<section id="mogu" style="background: url(<?php the_field('bg',2);?>) center top no-repeat;background-size:cover;">
	<div class="shadow_mogu"></div>
	<div class="container py-5">
		<div class="row">
			<div class="col-lg-12">	
				<p class="h2 ttu pb-4 text-center"><?php the_field('mogu_title',2);?></p>
			</div>
			<div class="col-md-12">	
			<?php 
				$mogus = get_field('mogu',2);
				foreach ($mogus as $mogu) {?>
					<p class="h5"><i class="fa fa-check text-success pr-2"></i><?php echo $mogu['title'];?></p>
					<div class="dn fw300"><?php echo $mogu['text'];?></div>
				<?php }

			?>
			</div>
		</div>
	</div>
</section>
<?php }?>



<?php
$prems = get_field('prems',37);
 if ($prems) {?>
<section id="prems">
	<div class="container pt-5 pb-2">
		<div class="row">
			<div class="col-md-12">	
				<p class="h2 pb-5 text-center"><?php echo get_the_title(37);?></p>
			</div>
		</div>
		<div class="row">
			<?php foreach ($prems as $prem) {?>
				<div class="col-md-6 prem pb-3">
					<div class="row align-items-center">
						<div class="col-lg-2 col-md-4 col-2 pb-1"><img src="<?php echo $prem['img'];?>"></div>
						<div class="col-lg-10 col-md-8 col-10"><p><?php echo $prem['text'];?></p></div>
					</div>
				</div>
			<?php }?>
		</div>
	</div>
</section>
<?php }?>

<?php if (get_field('year_title',2)) {?>
<section id="years">
	<div class="container pt-5 pb-3">
		<div class="row">
			<div class="col-md-12">	
				<p class="h2 pb-4 text-center"><?php the_field('year_title',2);?></p>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 text-justify pb-2 fw300">
				<p><?php the_field('year_text',2);?></p>
			</div>
		</div>
	</div>
</section>
<?php }?>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
