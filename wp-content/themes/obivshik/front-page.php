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

	<div id="primary" class="content-area">
		<main id="main" class="site-main">


<?php if (get_field('usl_title')) {?>
<section id="usls">
	<div class="container pt-5 pb-2">
		<div class="row">
			<div class="col-md-12">	
				<h2 class="h2 mb-4 text-center"><span><?php the_field('usl_title');?></span></h2>
			</div>
		</div>
		<div class="row">
			<?php 
$usls = get_field('usls');
if ($usls) { 
foreach ($usls as $u) {
	$links = $u['links'];
	$odin = (!$links) ? ' odin' : '';
	?>
<div class="col-lg-4 col-md-6 pb-3">
	<div class="usl_block p-3" style="background-image:url('<?php echo $u['img'];?>')">
		<div class="shadow"></div>
		<div class="usl_tit<?php echo $odin;?>"><h3><a href="<?php echo $u['url'];?>"><?php echo $u['title'];?></a></h3></div>
		<div class="cont">	
		<?php 
		
		if ($links) {
			foreach ($links as $l) {?>
					<a href="<?php echo $l['url'];?>"><?php echo $l['usl'];?></a>
		<?php }
			}
		if ($u['text']) {?>
		<p><?php echo $u['text'];?></p>
		<?php }
	
	?>
	</div>
	</div>
</div>

<?php }}
			?>

		</div>
	</div>
</section>
<?php }?>


<?php if (get_field('remont_title')) {?>
<section>
	<div class="container py-5">
		<div class="row">
			<div class="col-md-12">	
				<p class="h2 pb-4 text-center"><?php the_field('remont_title');?></p>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 text-justify pb-2 fw300">
				<?php the_field('remont_text');?>
			</div>
			<div class="col-lg-6 hidden-md">
				<img src="<?php the_field('remont_img');?>">
			</div>
			<?php 
			$usls = get_field('uslugi',83);
			if ($usls) {?>
			<div class="col-md-12">
			<div class="row urls align-items-center pt-4">
				<p class="h5 col-md-auto mb-2"><?php echo get_the_title(83);?>:</p>
				<div class="col-md-auto">
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
$slider = get_field('slider',69);
 if ($slider) {?>
<section id="galler" <?php echo (get_field('bg',69) ? 'style="background-color:'.get_field('bg',69).';"' : '');?>>
	<div class="container py-5">
		<div class="row">
			<div class="col-md-12">	
				<p class="h2 pb-3 text-center"><?php echo get_the_title(69);?></p>
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
		<?php if (get_field('button_text',69)) {?>
		<a href="<?php the_field('button_url',69);?>" class="btn-max btn-info popmake-284"><i class="fa fa-phone mr-2"></i><?php the_field('button_text',69);?></a>
		<?php }?>
	</div>
</div>
	</div>
</section>
<?php }?>

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


<?php if (get_field('year_title')) {?>
<section id="years">
	<div class="container pt-5 pb-3">
		<div class="row">
			<div class="col-md-12">	
				<p class="h2 pb-4 text-center"><?php the_field('year_title');?></p>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 text-justify pb-2 fw300">
				<p><?php the_field('year_text');?></p>
			</div>
		</div>
	</div>
</section>
<?php }?>


<?php if (get_field('mogu_title')) {?>
<section id="mogu" style="background: url(<?php the_field('bg');?>) center top no-repeat;background-size:cover;">
	<div class="shadow_mogu"></div>
	<div class="container py-5">
		<div class="row">
			<div class="col-lg-12">	
				<p class="h2 ttu pb-4 text-center"><?php the_field('mogu_title');?></p>
			</div>
			<div class="col-md-12">	
			<?php 
				$mogus = get_field('mogu');
				foreach ($mogus as $mogu) {?>
					<p class="h5"><i class="fa fa-check text-success pr-2"></i><?php echo $mogu['title'];?></p>
					<div class="dn fw300"><?php echo $mogu['text'];?>
						<div class="clearfix"></div>
					</div>
				<?php }

			?>
			</div>
		</div>
	</div>
</section>
<?php }?>



<?php if (get_field('work_title')) {?>
<section id="works">
	<div class="container pt-5 pb-3">
		<div class="row">
			<div class="col-md-12">	
				<p class="h2 pb-4 text-center"><?php the_field('work_title');?></p>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 text-justify pb-2 fw300">
				<p><?php the_field('work_text');?></p>
			</div>
		</div>
	</div>
</section>
<?php }?>



		<?php
		/*while ( have_posts() ) :
			the_post();
			the_content();
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
		endwhile; */
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
