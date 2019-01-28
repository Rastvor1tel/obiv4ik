<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package obivshik
 */

get_header();
?>

<?php if ( function_exists('yoast_breadcrumb') ) {
yoast_breadcrumb('<div class="container mt-3"><div id="breadcrumbs">','</div></div>');
} ?>
<section class="py-4">	
		<div class="container">	

		<?php
		while ( have_posts() ) :
			the_post();?>
<h1 class="text-center pb-3"><?php the_title();?></h1>
			<?php
$slider = get_field('slider',$post->ID);
			 if ($slider) { ?>
			<div class="row justify-content-center">
			 <?php foreach ($slider as $s) {?>
				<div class="col-md-4 col-2 col-lg-3 pb-4 text-center">
					<a href="<?php echo $s['url'];?>" data-fancybox="tkan">
						<div class="tkan_b" style="background-image: url(<?php echo $s['sizes']['large'];?>);"></div>
					</a>
				</div>
			<?php } ?>
			</div>
			<?php }?>
		<?php endwhile; // End of the loop.
		?>
<?php
$args = array();
$cat = get_terms('tkani_cat', $args);
?>


<div class="row pt-3">
			<?php 
		foreach ($cat as $c) {?>
				<a href="/tkani_cat/<?php echo $c->slug;?>" class="btn btn-sm mb-2 ml-2 btn-info"><?php echo $c->name;?></a>
			<?php }?>
		 </div>

		 <div class="row align-items-center mt-3">
			<div class="col-lg-2 text-center col-lg-2 pb-2"><img src="<?php the_field('img',3841);?>"></div>
			<div class="col-lg-6 pb-2"><p class="h5 pb-1">Нужна помощь?</p><p class="pb-0 mb-0"><?php the_field('text',3841);?></p></div>
			<div class="col-lg-4 pb-2"><a href="#" class="btn btn-info btn-block popmake-276"><i class="fa fa-mouse-pointer pr-2"></i>Оставить заявку</a></div>
		</div>	
		 </div>
		</section>

<?php
get_footer();
