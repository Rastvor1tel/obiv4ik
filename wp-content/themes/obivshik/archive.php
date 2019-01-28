<?php
/**
 * The template for displaying archive pages
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
	<section id="usls" class="py-4">
		<div class="container">	

		<?php if ( have_posts() ) : ?>

			<header class="page-header text-center">
				<?php
				 echo '<h1>'.single_term_title('', 0).'</h1>';
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

				<div class="row justify-content-center">	
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;


		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
</div>
	<?php
$args = array();
$cat = get_terms('tkani_cat', $args);
?>


<div class="row pt-5">
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
