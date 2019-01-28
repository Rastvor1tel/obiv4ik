<?php
/*
Template Name: Шаблон отзывы
*/

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
<div class="container">
<ul class="otzivi">
  <?php while ( have_rows('otzivi') ) : the_row();
    if(get_row_layout() == "otziv"): ?>
    <li>
	<span><b>Имя:</b>
      <?php echo the_sub_field('fiootz'); ?>
	  </span>
	  <span><b>Текст отзыва:</b>
      <?php echo the_sub_field('text'); ?>
	  </span>
	  	  	<span><b>Изображение:</b>
		<a data-fancybox="serts" href="<?php echo the_sub_field('img'); ?>"><img src="<?php echo the_sub_field('img'); ?>"></a>
       
	  </span>
	  	  <span><b>Дата:</b>
      <?php echo the_sub_field('date'); ?>
	  </span>
    </li>
  <? endif; endwhile; ?>
</ul>
		<?php
	//	while ( have_posts() ) :
	//		the_post();

	//		get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
	//		if ( comments_open() || get_comments_number() ) :
	//			comments_template();
	//		endif;

	//	endwhile; // End of the loop.
		?>
</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
