<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package obivshik
 */

?>

	</div><!-- #content -->

<div class="leftpla fdesc" style="display: block;">
    <a style="float:left;margin-right:15px;cursor: pointer;" id="lviber" onclick="$('.popover-viber').fadeIn(300);$('.popover-whatsapp').fadeOut(300);"><img src="<?php echo get_template_directory_uri();?>/img/vib.png"></a>
    <a style="float:left;cursor: pointer;" id="lwhatsapp" onclick="$('.popover-whatsapp').fadeIn(300);$('.popover-viber').fadeOut(300);"><img src="<?php echo get_template_directory_uri();?>/img/wha.png"></a>

    <div class="panel-popover popover-whatsapp">
        <div class="close-popover">×</div>
        <ul>
            <li>
                <div class="img-wrap"><img width="35" src="<?php echo get_template_directory_uri();?>/img/hand_icon.png"></div>
                <div class="txt"><p><span class="b">Шаг 1</span></p>
                    <p>Внесите этот номер в адресную книгу своего телефона:</p>
                    <div class="phone-wrap"><span class="b"> <a href="whatsapp://send?phone=<?php echo str_replace(array('-',' ',')','('),'',get_field('soc2','option'));?>"><?php echo get_field('soc2','option');?></a> </span> <br> «Обивщик»</div>
                </div>
            </li>
            <li>
                <div class="img-wrap img-whatsapp"></div>
                <div class="txt"><p><span class="b">Шаг 2</span></p>
                    <p>Откройте <span class="b">WhatsApp</span>, найдите созданный контакт и напишите нам.</p>
                    <div class="note"> Если у вас на компьютере установлено приложение WhatsApp, то просто перейдите по этой <a href="whatsapp://send?phone=<?php echo str_replace(array('-',' ',')','('),'',get_field('soc2','option'));?>" class="link">ссылке</a></div>
                </div>
            </li>
        </ul>
    </div>

    <div class="panel-popover popover-viber">
        <div class="close-popover">×</div>
        <ul>
            <li>
                <div class="img-wrap"><img width="35" src="<?php echo get_template_directory_uri();?>/img/hand_icon.png"></div>
                <div class="txt"><p><span style="font-weight:bold;">Шаг 1</span></p>
                    <p>Внесите этот номер в адресную книгу своего телефона:</p>
                    <div class="phone-wrap"><span style="font-weight:bold;"> <a href="viber://chat?number=<?php echo str_replace(array('-',' ',')','('),'',get_field('soc1','option'));?>"><?php echo get_field('soc1','option');?></a> </span> <br> «Обивщик»</div>
                </div>
            </li>
            <li>
                <div class="img-wrap img-viber"></div>
                <div class="txt"><p><span style="font-weight:bold;">Шаг 2</span></p>
                    <p>Откройте <span style="font-weight:bold;">Viber</span>, найдите созданный контакт и напишите нам.</p>
                    <div class="note"> Если у вас на компьютере установлено приложение Viber, то просто перейдите по этой <a href="viber://chat?number=<?php echo str_replace(array('-',' ',')','('),'',get_field('soc1','option'));?>" class="link">ссылке</a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>

<script>
	$('.close-popover').click(function() {
		$(this).parent().fadeOut(300)
	})
</script>

<?php
$slider = get_field('slider',63);
 if ($slider) {?>
<section id="dover" <?php echo (get_field('bg',63) ? 'style="background-color:'.get_field('bg',63).';"' : '');?>>
	<div class="container py-5">
		<div class="row">
			<div class="col-md-12">	
				<p class="h2 pb-3 text-center"><?php echo get_the_title(63);?></p>
			</div>
		</div>

	<div class="dov-slick">
			<?php foreach ($slider as $slide) {?>
						<div><img src="<?php echo $slide['sizes']['thumbnail'];?>"></div>
			<?php }?>
</div>
<script>
	$(function() {
	$('.dov-slick').slick({
  infinite: true,
  slidesToShow: 6,
  slidesToScroll: 6,
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
		<p class="mb-5"><?php the_field('text',63);?></p>
		<?php if (get_field('button_text',63)) {?>
		<a href="<?php the_field('button_url',63);?>" class="btn-max btn-info popmake-284" data-usl="<?php echo get_the_title($post->ID);?>"><i class="fa fa-phone mr-2"></i><?php the_field('button_text',63);?></a>
		<?php }?>
	</div>
</div>
	</div>
</section>
<?php }?>


<?php
$rewievs = get_field('rewievs',76);
 if ($rewievs) {?>
<section id="rewievs" <?php echo (get_field('bg',76) ? 'style="background-color:'.get_field('bg',76).';"' : '');?>>
	<div class="container py-5">
		<div class="row">
			<div class="col-md-12">	
				<p class="h2 pb-5 text-center"><?php echo get_the_title(76);?></p>
			</div>
		</div>
		<div class="vid">
			<?php foreach ($rewievs as $rew) {?>
				<div class="text-center">
						<?php echo $rew['video'];?>
				
				</div>
			<?php }?>
		</div>
		<script>
	$(function() {
	$('.vid').slick({
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 3,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
      }
    },
    {
      breakpoint: 720,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    
  ]
});
	})
</script>
	</div>
</section>
<?php }?>

<?php the_field('html',78);?>
	<footer id="colophon" class="site-footer pt-5 pb-5">
		<div class="container w1500">
			<div class="row">
				<div class="col-xl-7">
					<div class="row">
						<div class="col-xl-4 pb-3"><?php dynamic_sidebar('footer-1');?></div>
						<div class="col-xl-4 pb-3"><?php dynamic_sidebar('footer-2');?></div>
						<div class="col-xl-4 pb-3"><?php dynamic_sidebar('footer-3');?></div>
					</div>
				</div>
				<div class="col-xl-5">
					<div class="row">
						<div class="col-xl-6 pb-3"><?php dynamic_sidebar('footer-4');?></div>
						<div class="col-xl-6 pb-3"><?php dynamic_sidebar('footer-5');?></div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-12 text-center">
					<?php dynamic_sidebar('footer-copy');?>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<!--CoMagic-->
<script type="text/javascript">
var __cs = __cs || [];
__cs.push(["setCsAccount", "NtYWnwWK0GDtZTPapnewNMKAT4RVg2w3"]);
</script>
<script type="text/javascript" async src="/wp-content/themes/obivshik/js/cs.min.js"></script>
<!--End CoMagic-->

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter20833363 = new Ya.Metrika({
                    id:20833363,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "/wp-content/themes/obivshik/js/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<!-- /Yandex.Metrika counter -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-39787073-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-39787073-1');

	$('.menuTwo').click(function() {
		$(this).toggleClass("clickMenuTow");
		$('#primary-menu').toggleClass('show');
	});

	$("#mogu .h5").click(function() {
		$("#mogu .dn").stop().slideUp();
		$(this).next().stop().slideDown();
	})

	$(function() {
		$(window).scroll(function() {
			if (document.body.offsetWidth >= 1200) {
			if (($(this).scrollTop() >= 100)) {
				$('body').addClass('fix_menu');
			} else {
				$('body').removeClass('fix_menu');
			}
			}
		})

		 
		  $('*[data-usl]').click(function() {
		  	$('form .data-usl').val($(this).attr('data-usl'));
		  })

	})
</script>
<!--LiveInternet counter--><script type="text/javascript">
document.write("<a href='//www.liveinternet.ru/click' "+
"target=_blank><img style='display: none;' src='//counter.yadro.ru/hit?t52.6;r"+
escape(document.referrer)+((typeof(screen)=="undefined")?"":
";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
";h"+escape(document.title.substring(0,150))+";"+Math.random()+
"' alt='' title='LiveInternet: показано число просмотров и"+
" посетителей за 24 часа' "+
"border='0' width='88' height='31'><\/a>")
</script><!--/LiveInternet-->
<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
(function(){ var widget_id = 'pPJJKFjakV';var d=document;var w=window;function l(){
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>
<!-- {/literal} END JIVOSITE CODE -->
</body>
</html>
