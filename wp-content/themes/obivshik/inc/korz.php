<?php 
function addkorz($id,$len) { #идентификатор товара, кол-во
	global $_SESSION;
	if (isset($_SESSION[cart])) { #если корзина не пуста
			$kol = 0; #кол-во товаров в корзине
			foreach ($_SESSION[cart] as $key => $prod) {
				
				if ($_SESSION[cart][$key] == $id) { #ecли товар существует в корзине
					$kol++;
					$_SESSION[len][$key] = $_SESSION[len][$key]+$len; #просто добавляем неоьходимое кол-во товара
				} 
				
			}
			if ($kol == 0) { #если нет, то создаём продукт с необходимым кол-вом товара
					$_SESSION[cart][] = $id;
					$_SESSION[len][] = $len;
				}
	} else { #если корзина пуста, то создаём первый товар
		$_SESSION[cart][0] = $id;
		$_SESSION[len][0] = $len;
	}
}
add_action( 'wp_ajax_addkorz', 'addkorz' );

#изменение кол-ва товара
function upkorz($id,$len) {
	global $_SESSION;
	foreach ($_SESSION[cart] as $key => $prod) {
			if ($_SESSION[cart][$key] == $id) { #ищем нужный товар
				$_SESSION[len][$key] = $len; #обновляем до необходимого уровня
			}
		}
}
add_action( 'wp_ajax_upkorz', 'upkorz' );

#удаление товара
function delprod($id) {
	global $_SESSION;
			foreach ($_SESSION[cart] as $key => $prod) {
			$kol++;
			if ($_SESSION[cart][$key] == $id) { #ищем нужный товар
				unset($_SESSION[cart][$key]); #удаляём товар из корзины
				unset($_SESSION[len][$key]);
			}
			}
			if (count($_SESSION[cart]) == 0) { #если корзина опустела, то удаляем сессию
					unset($_SESSION[cart]);
					unset($_SESSION[len]);
				}
		}
add_action( 'wp_ajax_delprod', 'delprod' );
		
function delkorz() {
	global $_SESSION;
				unset($_SESSION[cart]); #удаляём  корзинy
				unset($_SESSION[len]);
		}
add_action( 'wp_ajax_delkorz', 'delkorz' );
		
#сумма всех товаров
function summ() {
	global $_SESSION;
	$summ = 0;

	foreach ($_SESSION[cart] as $key => $prod) {
		$kol = 0;
		$summ += get_field('price',$_SESSION['cart'][$key]) * $_SESSION['len'][$key];
	}
	return $summ;
}
add_action( 'wp_ajax_summ', 'summ' );


#количество товаров в корзине
function kol() {
	global $_SESSION,$bd;
	$kol = 0;
	foreach ($_SESSION[cart] as $key => $prod) {
		$kol += $_SESSION[len][$key];
	}
	return $kol;
}
add_action( 'wp_ajax_kol', 'kol' );

#загрузка корзины
/* function loadkorz() {
		global $_SESSION,$bd;
		$kol = 0;
		$ves = 0;
		$x = array();
		$y = array();
		$z = array();
		$total_summa = 0;
		$total_summa_no_dis = 0;
		
		if (count($_SESSION['cart']) > 0) {
		$table = '<table class="table mid table-striped"><tr><th>Фото</th><th>Название</th><th>Цена</th><th>Количество</th><th class="visible-md">Габариты</th><th nowrap class="visible-md">Вес упаковки</th><th class="visible-md">Сумма</th><th  nowrap>Сумма со скидкой</th><th></th></tr>';
		$summ_no_disc = 0;
		foreach ($_SESSION[cart] as $key => $prod) {
			$kol += $_SESSION[len][$key];
			$summ = 0;
		$carts = mysql_query("SELECT * FROM prods WHERE id={$_SESSION[cart][$key]}",$bd);
		if (mysql_num_rows($carts) >= 1) {
		$cart = mysql_fetch_array($carts);
		
		while ($cart) {
			$razmer = preg_split('/(х|x|×)/',$cart[razmer]);
			
			for ($i=0;$i<$_SESSION[len][$key];$i++) {
				$x[] = floatval(str_replace(',','.',$razmer[0]));
				$y[] = floatval(str_replace(',','.',$razmer[1]));
				$z[] = floatval(str_replace(',','.',$razmer[2]));
			}
			
			
			if ($cart[discount] != 0) {
				$summ += $cart[price]*($_SESSION[len][$key]);
			} else {
				$summ += ($cart[price])*($_SESSION[len][$key]);
			}
			$summ_no_disc = ($_SESSION[len][$key])*($cart[pricenodis]);
$table .= <<<T
<tr><td><a href="" data-toggle="tooltip" data-placement="bottom" title="Перейти к карточке товара"><img src="{$cart[img50]}"></a></td><td><a href="/{$cart[url]}" target="blank" data-toggle="tooltip" data-placement="bottom" title="Перейти к карточке товара">{$cart[title]}</a></td><td nowrap>{$cart[pricenodis]} руб</td><td><input id="spinnerkorz" cart="{$cart[id]}" value="{$_SESSION[len][$key]}" name=""></td><td nowrap class="visible-md">{$cart[razmer]} см</td><td class="visible-md">{$cart[ves]} кг</td><td nowrap class="visible-md">$summ_no_disc руб</td><td class="rd" nowrap>$summ руб</td><td><button class="btn btn-danger" cart="{$cart[id]}" onclick="delprod($(this));"><span class="glyphicon glyphicon-trash nr"></span></button></td></tr>
T;
			$ves += $_SESSION[len][$key]*floatval(str_replace(',','.',$cart[ves]));
			$total_summa += $summ;
			$total_summa_no_dis += $summ_no_disc;
			$cart = mysql_fetch_array($carts);
		}
		}
	}
	$xs = array_sum($x);
	$ys = array_sum($y);
	$zs = array_sum($z);
	$gab = number_format($xs*$ys*$zs/1000000,3);
	$ves = number_format($ves , 3);;
	
	$table .= <<<T
		<tr><th colspan=2></th><th>Итого:</th><th class="gr" nowrap>$kol шт</th><th class="gr visible-md">{$xs}х{$ys}х{$zs}см<br> ($gab м^2)</th><th class="gr visible-md" nowrap>$ves кг</th><th class="gr visible-md" nowrap>$total_summa_no_dis руб</th><th class="rd" nowrap>$total_summa руб</th><th></th></tr>
	</table>
	<script>
	$( "input#spinnerkorz" ).spinner({
		min: 1,
		numberFormat: "n",
		page: 5,
		stop: function(e,ui) {
			var len = $(this).val();
			if (len <= 0) {
				 $(this).val(1)
				 len = 1;
			}
			var id = $(this).attr('cart');
		$.ajax({
			type:'post',
			url:'/ajax/korz.php',
			data: {'function':'upkorz','id':id,'len':len},
			success: function(e) {
				var e = $.parseJSON(e)
				$("#updatekorz span.len").text(e.len)
				$("#updatekorz span.summ").text(e.summ)
				$("button#updatekorz").click()
			}
		})
		}
		})
	</script>
T;
	return $table;
	} else {
		return '<h3 class="text-center text-muted"><span class="glyphicon glyphicon-shopping-cart nr"></span><br>Корзина пуста</h3>';
	}
}
add_action( 'wp_ajax_loadkorz', 'loadkorz' );*/