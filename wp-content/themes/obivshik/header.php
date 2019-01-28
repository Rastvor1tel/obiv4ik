<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package obivshik
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
<meta name="google-site-verification" content="kky5Sq3Bxg1al8OjWE94s1GoLrUlUBsg-hi8cYJKzcQ" />
    <meta name="yandex-verification" content="454aa50099652e99" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="page">




	<header id="masthead" class="site-header pt-3 <?php echo get_field('header_color') ? get_field('header_color') : 'light';?>">

    <div class="bg">
        <?php
$shadow = get_field('shadow');
if ($shadow) {
?>
        <div class="shadow" style="background-color: <?php the_field('shadow_color');?>;"></div>
<?php }?>
        <?php if (get_field('bg_img')) {?>
        <div class="img_bg" style="background-image:url('<?php the_field('bg_img');?>');"></div>
        <? } else if (get_field('bg_video')) {?>
        <div class="img_video">
            <video autoplay="" loop="" muted=""><source src="<?php the_field('bg_video');?>" type="video/mp4"></video>
        </div>
        <? }?>
   
<?php if (get_post_type() == 'katalog_tkanej' OR is_archive()) {?>
<div class="shadow" style="background-color: rgba(0,0,0,.4);"></div>
<div class="img_video">
            <video autoplay="" loop="" muted=""><source src="/wp-content/uploads/2018/06/33.mp4" type="video/mp4"></video>
        </div>
    <?php }?>

     </div>
        <div class="container pb-3">

		<div class="row">
            <div class="col-xl-4 hidden-md topshow pt-3">
                <?php dynamic_sidebar('top-left');?>
            </div>
            <div class="col-lg-4 topfade text-center logo_sect"><?php the_custom_logo(); ?><span><?php bloginfo( 'name' ); ?></span></div>
            <div class="col-md-4 topfade hidden-md text-right pt-3">
                <?php dynamic_sidebar('top-right');?>
            </div>
		</div>
        </div>

<div class="set_pos">
<div class="cont-menu">
<div class="container">
    <div class="row justify-content-start align-items-center">
        <div class="col-xl-1 col-6 col-lg-6 menu_logo">
            <?php the_custom_logo(); ?>
        </div>
        <div class="col-6 text-right toggle">
             <div class="menuTwo">
            <span></span>
            <span></span>
            <span></span>
    </div>
        </div>
		<nav id="site-navigation" class="main-navigation col">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->
        </div>
</div>
</div>
</div>

<div class="container ">
        <div class="conthead text-center pt-5">
            <p class="ttu h1 fw700"><?php echo get_field('title') ? get_field('title')  : 'Более 5000 образцов ткани. 3 года гарантии.<br>  Своя мебельная фабрика';?></p>
            <p class="fw500"><?php the_field('text_bottom');?></p>
            <?php if (get_field('button_text')) {?>
                <a class="btn btn-max btn-danger mt-3 popmake-284" data-usl="<?php the_title();?>" href="<?php the_field('button_url');?>"><?php the_field('button_text');?></a>
            <? } else {?>
                <a class="btn btn-max btn-danger mt-3 popmake-284 pum-trigger" data-usl="<?php the_title();?>" href="#" style="cursor: pointer;">Закажи перетяжку, обивку мебели - получи подарок.</a>
            <?php }?>
        </div>
</div>



	</header><!-- #masthead -->

	


	<div id="content" class="site-content">
