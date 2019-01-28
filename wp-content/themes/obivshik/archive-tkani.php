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



				<div class="row justify-content-center">	

</div>

<form action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" method="POST" id="filter">
	<?php
		if( $terms = get_terms( array( 'taxonomy' => 'category', 'orderby' => 'name', 'post_type' => 'tkani') ) ) : 
			echo '<div class="categ col-sm-3 col-lg-3 mecat">';
			echo '<p class="CaptionCont SlectBox"><span class="placeholder">Все категории</span></p><div class="content">';
			foreach ( $terms as $term ) :
			echo '<label class="checkbox" for="'. $term->term_id .'">';
			echo '<input type="checkbox" name="categoryfilter['. $term->term_id .']" value="'. $term->term_id .'" id="'. $term->term_id .'"/>';
			echo '<div class="checkbox__text">' . $term->name . '</div>';
			echo '</label>';
			endforeach;
			echo '</div></div>';
		endif;
	?>
<div class="cvet col-sm-3 col-lg-3 mecat">
<p class="CaptionCont SlectBox"><span class="placeholder">Все цвета</span></p><div class="content">
<label class="checkbox" for="red">
  <input type="checkbox" name="tsvetovaya_gruppa[red]" value="red" id="red"/>
  <div class="checkbox__text">Красный,Бордовый,Розовый.</div>
</label>
<label class="checkbox" for="orang">
  <input type="checkbox" name="tsvetovaya_gruppa[orang]" value="orang" id="orang"/>
  <div class="checkbox__text">Оранжевый,Терракотовый.</div>
</label>
<label class="checkbox" for="grin">
  <input type="checkbox" name="tsvetovaya_gruppa[grin]" value="grin" id="grin"/>
  <div class="checkbox__text">Зелёный,бирюза</div>
</label>
<label class="checkbox" for="blue">
  <input type="checkbox" name="tsvetovaya_gruppa[blue]" value="blue" id="blue"/>
  <div class="checkbox__text">Синий,Голубой</div>
</label>
<label class="checkbox" for="fiolet">
  <input type="checkbox" name="tsvetovaya_gruppa[fiolet]" value="fiolet" id="fiolet"/>
  <div class="checkbox__text">Фиолетовый,Сиреневый,Лиловый</div>
</label>
<label class="checkbox" for="beliy">
  <input type="checkbox" name="tsvetovaya_gruppa[beliy]" value="beliy" id="beliy"/>
  <div class="checkbox__text">Белый,Бежевый,Нейтральный</div>
</label>
<label class="checkbox" for="seriy">
  <input type="checkbox" name="tsvetovaya_gruppa[seriy]" value="seriy" id="seriy"/>
  <div class="checkbox__text">Серый,Чёрный</div>
</label>
<label class="checkbox" for="serebro">
  <input type="checkbox" name="tsvetovaya_gruppa[serebro]" value="serebro" id="serebro"/>
  <div class="checkbox__text">Серебро. Металлик</div>
</label>
<label class="checkbox" for="zoloto">
  <input type="checkbox" name="tsvetovaya_gruppa[zoloto]" value="zoloto" id="zoloto"/>
  <div class="checkbox__text">Золото,Жёлтый,Коричневый</div>
</label>
</div> 
</div>

<div class="uzor col-sm-3 col-lg-3 mecat">
<p class="CaptionCont SlectBox"><span class="placeholder">Все типы</span></p><div class="content">
<label class="checkbox" for="Solid">
  <input type="checkbox" name="dizayn_i_risunok[Solid]" value="Solid" id="Solid"/>
  <div class="checkbox__text">Однотонный</div>
</label>
<label class="checkbox" for="Classic">
  <input type="checkbox" name="dizayn_i_risunok[Classic]" value="Classic" id="Classic"/>
  <div class="checkbox__text">Классика,Вензель,Цветы</div>
</label>
<label class="checkbox" for="rogojka">
  <input type="checkbox" name="dizayn_i_risunok[rogojka]" value="rogojka" id="rogojka"/>
  <div class="checkbox__text">Рогожка</div>
</label>
<label class="checkbox" for="rombi">
  <input type="checkbox" name="dizayn_i_risunok[rombi]" value="rombi" id="rombi"/>
  <div class="checkbox__text">Ромбы, Мозаика</div>
</label>
<label class="checkbox" for="polosa">
  <input type="checkbox" name="dizayn_i_risunok[polosa]" value="polosa" id="polosa"/>
  <div class="checkbox__text">Полоса</div>
</label>
<label class="checkbox" for="kletka">
  <input type="checkbox" name="dizayn_i_risunok[kletka]" value="kletka" id="kletka"/>
  <div class="checkbox__text">Клетка</div>
</label>
<label class="checkbox" for="geometriya">
  <input type="checkbox" name="dizayn_i_risunok[geometriya]" value="geometriya" id="geometriya"/>
  <div class="checkbox__text">Геометрия,Абстракция</div>
</label>
<label class="checkbox"  for="facturniy">
  <input type="checkbox" name="dizayn_i_risunok[facturniy]" value="facturniy" id="facturniy"/>
  <div class="checkbox__text">Фактурный</div>
</label>
<label class="checkbox" for="vostochniy">
  <input type="checkbox" name="dizayn_i_risunok[vostochniy]" value="vostochniy" id="vostochniy"/>
  <div class="checkbox__text">Восточный орнамент,пейсли,огурцы</div>
</label>
</div>
</div>
	<input type="hidden" name="action" value="myfilter">
</form>
<div class="res">
<div id="msg">
</div>
<div class="clear"><div id="naid">Найдено: <span><span id="kol"> </span> артикулов</span></div></div>
<div>
	<div class="resfil">
		<label class="checkbox" id="re">
			<input type="checkbox" name="categoryfilter" value=""/>
			<div class="checkbox__text"><span class="myresf">
				<i class="fa fa-refresh" aria-hidden="true"></i>Сбросить фильтр<span>
			</div>
		</label>
	</div>
</div>
<div id="response">
<?php if (function_exists('wp_corenavi')) wp_corenavi(); ?>
</div>

<script>
jQuery(function($){
	$('.resfil, .categ input[type="checkbox"], .uzor input[type="checkbox"], .cvet input[type="checkbox"]').change(function(){
		var filter = $('#filter');
		$.ajax({
			url:filter.attr('action'),
			data:filter.serialize(), // form data
			type:filter.attr('method'), // POST
			beforeSend:function(xhr){
				filter.find('button').text('Processing...'); // changing the button label
			},
			success:function(data){
				filter.find('button').text('Apply filter'); // changing the button label back
				$('#response').html(data); // insert data
			}
		});
		return false;
	});
$(".mecat").click(function() {
	$(".mecat").children('.content').removeClass('op');
  $(this).children('.content').addClass('op');
});
	$(document).mouseup(function (e){ // событие клика по веб-документу
		var div = $(".mecat"); // тут указываем ID элемента
		if (!div.is(e.target) // если клик был не по нашему блоку
		    && div.has(e.target).length === 0) { // и не по его дочерним элементам
			$(".mecat").children('.content').removeClass('op'); // скрываем его
		}
	});

   $('#msg').hide();
   $('#naid').hide();
var label = $('label'),
  checkbox = $(' :checkbox').on('change', function() {
    var checked = checkbox.filter(':checked');
	$('#kol').html(checked.length);
    var labelText = checked.map(function(i , el) {
      return '<label class="vibor" for="' + el.id + '">' + label.filter('[for="' + el.id + '"]').text() +'</label>';
    }).get().join(',');
   $('#msg').html(labelText);
    $('#msg').show();
   $('#naid').show();
   if($('#msg').html() == ''){
   $('#msg').hide();
   $('#naid').hide();
   };
  });
 
$(".res").click(function() {
	$('input[type="checkbox"]').prop('checked', false);
	$('div#msg').html();
	$('#msg').hide();
	$('#naid').hide();
});
 
});

</script>












	</div>

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
