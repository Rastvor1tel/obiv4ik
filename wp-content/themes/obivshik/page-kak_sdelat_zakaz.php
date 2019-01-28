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

	<section class="text-kontakt py-4">
		<div class="container">
<?php the_title('<h1 class="text-center mb-3"><span>','</span></h1>');?>
<div class="row">
	<div class="col-12">
		<?php the_field('text',$post->ID);?>
	</div>
</div>

</div>
</section>
<?php
$prems = get_field('prems',49);
 if ($prems) {?>
<section id="prems">
	<div class="container pt-5 pb-2">
		<div class="row">
			<div class="col-md-12">	
				<p class="h2 pb-5 text-center"><?php echo get_the_title(49);?></p>
			</div>
		</div>
		<div class="row align-items-center">
			<?php foreach ($prems as $prem) {?>
						<div class="col-lg-3 text-center">
							<img src="<?php echo $prem['img'];?>" width="64" class="pb-1">
							<div class="clearfix"></div>
							<p><?php echo $prem['text'];?></p>
						</div>
			<?php }?>
		</div>
	</div>
</section>
<?php }?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
