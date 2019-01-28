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
<section>	
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();?>

			
		<?php endwhile; // End of the loop.
		?>

		</main>
	</section>

<?php
get_footer();
