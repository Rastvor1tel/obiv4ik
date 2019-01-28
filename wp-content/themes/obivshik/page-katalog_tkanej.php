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
 * @package Tetotume
 */

get_header();

$args = array();
$cat = get_terms('tkani_cat', $args);
?>
<?php if ( function_exists('yoast_breadcrumb') ) {
yoast_breadcrumb('<div class="container mt-3"><div id="breadcrumbs">','</div></div>');
} ?>
<section id="katalog_tkanej" class="py-4">
	<div class="container">
		<div class="row">
		<div class="col">
			<h1 class="text-center mb-2"><span><?php the_title();?></span></h1>
			<div class="mb-5 text-center"><?php the_field('text');?></div>
		</div>
		</div>
		<div class="row justify-content-center">
			<?php 
		foreach ($cat as $c) {
			?>
			<div class="col-lg-2 col-md-3 col-6 pb-4 text-center">
				<p class="h6"><?php echo $c->name;?></p>
				<a href="/tkani_cat/<?php echo $c->slug;?>">
				<img src="<?php echo get_field('img','tkani_cat_'.$c->term_id)['url'];?>">
				<span class="btn btn-danger mt-1 btn-md btn-block" >Подробнее</span>
					</a>
			</div>
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
