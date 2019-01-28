<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *Template Name: Услуга
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

	<section class="pt-3">
		<div class="container">
<h1 class="text-center mb-4"><span><?php the_field('top_title');?></span></h1>

<div class="row">
<?php if (get_field('full_text')) {?>
<div class="col-md-12">
	<?php the_field('full_text');?>
</div>
<?php }?>
<?php if (get_field('title_2')) {?>
<div class="col-md-12 pt-3 pb-2">
	<h2 class="text-center"><?php the_field('title_2');?></h2>
</div>
<?php }?>
	<div class="col pb-3">
<?php the_field('text');?>
<?php
$seo = get_field('seo');
	if ($seo) {?>
		<div class="py-1">
		<?php foreach ($seo as $s) {?>
		<a class="btn btn-info btn-sm pb-1 mb-1 br-1" href="<?php echo $s['url'];?>"><?php echo $s['text'];?></a>
		<?php } ?>
		</div>
	<?php } ?>
	</div>
<?php if (get_field('img')) {?>
	<div class="col-md-4">
	<img src="<?php the_field('img');?>">
	</div>
	<?php }?>
	<div class="col-12">
	
<div class="remont py-5">
<p class="h5 text-center"><?php echo get_the_title(326);?>:</p>
<img src="<?php the_field('img',326);?>">
</div>
	</div>
	</div>
</div>
</section>	
	

<?php
$slider = get_field('slider');
 if ($slider) {?>
<section id="galler">
	<div class="container py-5">
		<div class="row">
			<div class="col-md-12">	
				<p class="h2 pb-3 text-center">Наше портфолио</p>
			</div>
		</div>

	<div class="gall">
			<?php foreach ($slider as $slide) {?>
						<div><a data-fancybox="work" href="<?php echo $slide['url'];?>"><div class="img_obiv" style="background-image:url(<?php echo $slide['sizes']['medium'];?>);"></div></a></div>
			<?php }?>
</div>
<script>
	$(function() {
	$('.gall').slick({
  infinite: true,
  slidesToShow: 4,
  slidesToScroll: 4,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 4,
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    }
  ]
});
	})
</script>
<div class="row">
	<div class="col-md-12 text-center pt-3">	
		<p class="mb-5"><?php the_field('text',69);?></p>

	</div>

</div>
	</div>
</section>
<?php }?>

	
			<?php
$slider = get_field('serts',88);
 if ($slider) {?>
 <section id="serts" class="py-5">
	<div class="container py-3">
	<div class="row">
			<?php foreach ($slider as $slide) {
				?>
						<div class="col text-center"><a data-fancybox="serts" href="<?php echo $slide['url'];?>"><img src="<?php echo $slide['sizes']['medium'];?>"></a></div>
			<?php }?>
</div>

<div class="row">
	<div class="col-md-12 text-center py-3">
		<a href="#" class="btn-max btn-info popmake-284" data-usl="<?php the_title();?>"><i class="fa fa-phone mr-2"></i>Оформить заказ</a>
	</div>
</div>
	</div>
</section>

<?php }?>
	
			
	<?php 
	$usls = get_field('usls');
			$x = 0;
	if ($usls) {
		
			?>
	<section id="podusl">
		<?php foreach ($usls as $usl) {
		$x++;
		?>
			<div class="row mx-0 forvid">
				<div class="col-lg-6 usl media">
					<div class="bg">
						<?php if ($usl['video']) {?>
						<video loop="" muted="" style="margin: auto;    position: absolute;    z-index: -1;    visibility: visible;    height: auto;    width: auto;    box-shadow: 0 0 black;    transform: translate(-50%, -50%);    top: 50%; left: 50%;"><source src="<?php echo $usl['video'];?>" type="video/mp4"></video>
    	<?php }?>
    	<?php if ($usl['img']) {?>
    		<div class="img_bg" style="background-image:url(<?php echo $usl['img'];?>)"></div>
		<?php }?>

					</div>
				</div>
				<div class="col-lg-6 usl btext <?php echo ($x % 2 == 0) ? 'text_left' : '';?>" <?php echo ($usl['bg_text']) ? 'style="background-color:'.$usl['bg_text'].';"' : '';?>>
					<div class="bg">
					<?php if ($usl['video_2']) {?>
						<video  loop="" muted="" style="margin: auto;    position: absolute;    z-index: -1;    visibility: visible;    height: auto;    width: auto;    box-shadow: 0 0 black;    transform: translate(-50%, -50%);    top: 50%; left: 50%;"><source src="<?php echo $usl['video_2'];?>" type="video/mp4"></video>
    	<?php }?>
    	<?php if ($usl['img_2']) {?>
    		<div class="img_bg" style="background-image:url(<?php echo $usl['img_2'];?>)"></div>
		<?php }?>						
					</div>
					<div class="text_block">
					<p class="h4 mb-3"><?php echo $usl['title'];?></p>
					<?php echo $usl['text'];?>
						<?php if ($usl['url']) {?><a href="<?php echo $usl['url'];?>" class="btn btn-md btn-danger mt-3">Подробнее</a><?php }?>
					</div>
				</div>
				
				
			</div>
			<?php if ($usl['text_bottom']) {?>
		<div class="container py-3">
			<div class="row">
		<div class="col-lg-12">
					<?php echo $usl['text_bottom'];?>
				</div>
				</div>
		</div>
		<?php }?>
		<?php }?>
	</section>		
	<?php }?>
			
<script>
	$('.forvid').hover(function() {
			$(this).find('video').get(0).play();
	},function() {
			$(this).find('video').get(0).pause();
	});
</script>


<?php if (!get_field('no_tkani')) {?>
<?php 
	$mats = get_field('text',357);
			$x = 0;
	if ($mats) {
		
			?>
			
	<section id="mats" class="py-5" style="background-image:url(<?php the_field('bg',357);?>)";>
		<div class="shadow"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12"><p class="h4 text-center"><?php echo get_the_title(357);?></p></div>
				<div class="col-md-3"></div>
				<div class="col-md-6 text-center pt-4"><?php the_field('text',357);?></div>
				<div class="col-md-3"></div>
				<div class="col-md-12 text-center">
					<a href="<?php the_field('url',357);?>" class="btn btn-danger mt-2">Показать все коллекции</a>
				</div>
			</div>
		</div>
	</section>		
	<?php }?>
	<?php }?>

		<?php if (!get_field('no_price')) {?>
			<section class="price py-5">
				<div class="container">
					<div class="row">
		<div class="col-12">
<?php 
$table = get_field('price',246);
if ($table) {?>
			<p class="h2 text-center"><?php echo get_the_title(246);?></p>
			<p>Цена зависит от сложности конструкции, размеров изделия и выбранных материалов. Итоговую стоимость можно узнать после приезда замерщика и при индивидуальной консультации.</p>
<div class="table-responsive-lg">
<table class="table my-3 table-striped table-bordered table-md ">
	
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
<?php }?>

<?php 
$osobs = get_field('osob_srvice');
if ($osobs) {?>
<section id="osob" class="pb-5 pt-5">
	<div class="container">
		<div class="row">
			<div class="col-md-12 mb-2">
				<h3 class="text-center"><?php the_field('osob_title');?></h3>
			</div>
			<?php foreach ($osobs as $o) {?>
			<div class="col-md-12 mb-1">
				<div class="row">
					<div class="col-auto pr-1"><i class="fa fa-check text-success"></i></div>
					<div class="col"><?php echo $o['text'];?></div>
				</div>
			</div>
			<?php }?>
			<?php if (get_field('osob_after')) {?>
			<div class="col-md-12 py-2">
				<p><?php echo get_field('osob_after');?></p>
			</div>
			<?php }?>
		</div>
	</div>
</section>
<?php }?>


<?php 
$osobs = get_field('zam_text');
if ($osobs) {?>
<section id="zam" class="py-4" style="background-color:<?php the_field('bg_zam');?>">
	<div class="container">
		<div class="row">
			<div class="col-md-12 mb-2">
				<p><?php the_field('zam_text');?></p>
			</div>
			
	</div>
</section>
<?php }?>


<?php
$prems = get_field('prems',245);
 if ($prems) {?>
<section id="prems">
	<div class="container pt-5 pb-2">
		<div class="row">
			<div class="col-md-12">	
				<p class="h2 pb-5 text-center"><?php echo get_field('step_title') ? get_field('step_title') : get_the_title(245);?></p>
			</div>
		</div>
		<div class="row">
			<?php 
$x = 0;
			foreach ($prems as $prem) {
$x++;
				?>
				<div class="col-md-3 prem pb-3">
					<div class="row align-items-center">
						<div class="col-lg-12 col-md-4 col-2 pb-2"><img width=80 src="<?php echo $prem['img'];?>"></div>
						<div class="col-lg-12  col-md-8 col-10"><p><span class="et mr-2"><?php echo $x;?></span><?php echo $prem['text'];?></p></div>
					</div>
				</div>
			<?php }?>
		</div>
	</div>
</section>
<?php }?>


<?php
$slider = get_field('slider');
 if ($slider) {?>
<section id="galler">
	<div class="container py-5">


<div class="row">
	<div class="col-md-12 text-center pt-3">	
		<?php if (get_field('button_text',69)) {?>
		<a href="<?php the_field('button_url',69);?>" class="btn-max btn-info popmake-284" data-usl="<?php the_title();?>"><i class="fa fa-phone mr-2"></i><?php the_field('button_text',69);?></a>
		<?php }?>
	</div>
	<?php 
			$usls = get_field('uslugi',83);
			if ($usls) {?>
			<div class="col-md-12 text-center">
			<div class="row urls align-items-center pt-4">
				<p class="h5 col-md-12 mt-5 mb-2"><?php echo get_the_title(83);?>:</p>
				<div class="col-md-12">
				<?php foreach ($usls as $usl) {?>
				<a href="<?php echo $usl['url'];?>" class="btn btn-sm mb-1 btn-info"><?php echo $usl[title];?></a>
				<?php }?>
				</div>
			</div>
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