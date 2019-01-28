<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *Template Name: Услуга дочерняя
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package obivshik
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

	<section class="text-kontakt pt-5">
		<div class="container">
<?php the_title('<h1 class="text-center pb-3">','</h1>');?>
<div class="row">
	<div class="col-12">
<?php the_field('text');?>



<?php 
$table = get_field('price',246);
if ($table) {?>
<div class="table-responsive-lg">
<table class="table my-5 table-striped table-bordered table-md ">
	
	 <thead class="thead-dark"><tr>
		<th class="fw300">Мебель</th>
		<th class="info popmake-255 text-center fw300"><span>Расход материала, м2</span><i class="fa fa-question-circle pl-1"></i></th>
		<th class="info popmake-266 text-center fw300"><span>I категория</span><i class="fa fa-question-circle pl-1"></i></th>
		<th class="info popmake-269 text-center fw300"><span>II категория</span><i class="fa fa-question-circle pl-1"></i></th>
		<th class="info popmake-268 text-center fw300"><span>III категория</span><i class="fa fa-question-circle pl-1"></i></th>
		<th class="info popmake-267 text-center fw300"><span>IV категория</span><i class="fa fa-question-circle pl-1"></i></th>
	</tr>
	  </thead>
	   <tbody>
<?php foreach ($table as $tr) {?>
<tr><td><?php echo $tr['name'];?></td><td class="text-center"><?php echo $tr['rashod'];?></td><td class="text-center"><?php echo $tr['1cat'];?></td><td class="text-center"><?php echo $tr['2cat'];?></td><td class="text-center"><?php echo $tr['3cat'];?></td><td class="text-center"><?php echo $tr['4cat'];?></td></tr>
<?php }?>
</tbody>
</table>
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