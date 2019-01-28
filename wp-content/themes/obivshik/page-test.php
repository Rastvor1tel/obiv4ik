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
<?php if ( function_exists('yoast_breadcrumb') ) {
    yoast_breadcrumb('<div class="container mt-3"><div id="breadcrumbs">','</div></div>');
} ?>
    <link rel='stylesheet' id='obivshik-slick-css'  href='/wp-content/themes/obivshik/css/ourCalc.css' type='text/css' media='all' />
    <script src="/wp-content/themes/obivshik/js/ourCalc.js"></script>
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="ourCalc">
                <div data-wow-duration="1s" data-wow-delay=".5s" class="wrapper-ourCalc wow rollIn" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: rollIn;">
                    <div class="black-bg">
                        <p class="title">Расчет стоимости</p>
                        <div class="furChoose" style="display: none;">
                            <p class="choose">Выберите тип мебели</p>
                            <div data-wow-duration="1s" data-wow-delay="1s" class="red-line wow fadeInLeft" style="visibility: visible; animation-duration: 1s; animation-delay: 1s; animation-name: fadeInLeft;"></div>
                        </div>
                        <ul class="ourCalc__nav" style="display: block;">
                            <li class="ourCalc__navTab">Тип мебели</li>
                            <li class="ourCalc__navTab">Объем работы</li>
                            <li class="ourCalc__navTab is-active">Материал</li>
                            <li class="ourCalc__navTab" onclick="recalcPrice();">Стоимость</li>
                            <li class="ourCalc__navTab">Доставка</li>
                        </ul>
                        <form class="inputs" id="calc_form" method="post">
                            <div class="ourCalc__1step js-calcStep" style="display: none;">
                                <div data-wow-duration=".5s" data-wow-delay=".5s" class="wow fadeIn" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.5s; animation-name: fadeIn;">
                                    <input type="radio" name="calc-group-input" id="calc-1" value="sofa" class="calc-input">
                                    <label for="calc-1" class="calc-label">Диван
                                        <div class="img">
                                            <img src="pict/ca-sofa.png">
                                        </div>
                                    </label>
                                </div>
                                <div data-wow-duration=".5s" data-wow-delay=".5s" class="wow fadeIn" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.5s; animation-name: fadeIn;">
                                    <input type="radio" name="calc-group-input" id="calc-2" value="bed_head" class="calc-input">
                                    <label for="calc-2" class="calc-label">Изголовье кровати
                                        <div class="img">
                                            <img src="pict/ca-bed.png">
                                        </div>
                                    </label>
                                </div>
                                <div data-wow-duration=".5s" data-wow-delay=".5s" class="wow fadeIn" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.5s; animation-name: fadeIn;">
                                    <input type="radio" name="calc-group-input" id="calc-3" value="armchair" class="calc-input">
                                    <label for="calc-3" class="calc-label">Кресло
                                        <div class="img">
                                            <img src="pict/ca-arm.png">
                                        </div>
                                    </label>
                                </div>
                                <div data-wow-duration=".5s" data-wow-delay=".5s" class="wow fadeIn" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.5s; animation-name: fadeIn;">
                                    <input type="radio" name="calc-group-input" id="calc-4" value="banket" class="calc-input">
                                    <label for="calc-4" class="calc-label">Банкетка
                                        <div class="img">
                                            <img src="pict/ca-bank.png">
                                        </div>
                                    </label>
                                </div>
                                <div data-wow-duration=".5s" data-wow-delay=".5s" class="wow fadeIn" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.5s; animation-name: fadeIn;">
                                    <input type="radio" name="calc-group-input" id="calc-5" value="chair" class="calc-input">
                                    <label for="calc-5" class="calc-label">Стул
                                        <div class="img">
                                            <img src="pict/ca-chair.png">
                                        </div>
                                    </label>
                                </div>
                                <div data-wow-duration=".5s" data-wow-delay=".5s" class="wow fadeIn" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.5s; animation-name: fadeIn;">
                                    <input type="radio" name="calc-group-input" id="calc-6" value="dental_chair" class="calc-input">
                                    <label for="calc-6" class="calc-label">Стоматологическое кресло
                                        <div class="img">
                                            <img src="pict/ca-dent.png">
                                        </div>
                                    </label>
                                </div>
                                <div data-wow-duration=".5s" data-wow-delay=".5s" class="wow fadeIn" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.5s; animation-name: fadeIn;">
                                    <input type="radio" name="calc-group-input" id="calc-7" value="kitchen" class="calc-input">
                                    <label for="calc-7" class="calc-label">Кухонный уголок
                                        <div class="img">
                                            <img src="pict/ca-angle.png">
                                        </div>
                                    </label>
                                </div>
                                <div data-wow-duration=".5s" data-wow-delay=".5s" class="wow fadeIn" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.5s; animation-name: fadeIn;">
                                    <input type="radio" name="calc-group-input" id="calc-8" value="officechair" class="calc-input">
                                    <label for="calc-8" class="calc-label">Офисное кресло
                                        <div class="img">
                                            <img src="pict/ca-off.png">
                                        </div>
                                    </label>
                                </div>
                                <div data-wow-duration=".5s" data-wow-delay=".5s" class="wow fadeIn" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.5s; animation-name: fadeIn;">
                                    <input type="radio" name="calc-group-input" id="calc-9" value="puf" class="calc-input">
                                    <label for="calc-9" class="calc-label">Пуф
                                        <div class="img">
                                            <img src="pict/ca-puf.png">
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class="ourCalc__2step js-calcStep" style="display: none;">
                                <div class="top">
                                    <div class="calc-label">Кресло



                                        <div class="img"><img src="http://obiv.infoinstant.ru/pict/ca-arm.png"></div></div>
                                </div>
                                <div class="bottom">
                                    <div class="option calc-option calc-1" style="display: none;">
                                        <input type="radio" checked="checked" name="calc-2step1" id="calc-2step-1" value="sofa_straight">
                                        <label for="calc-2step-1" class="square-label">Диван прямой </label>
                                    </div>
                                    <div class="option calc-option calc-1" style="display: none;">
                                        <input type="radio" name="calc-2step1" id="calc-2step-2" value="sofa_curly">
                                        <label for="calc-2step-2" class="square-label">Диван угловой </label>
                                    </div>
                                    <div class="option calc-option calc-1" style="display: none;">
                                        <input type="radio" name="calc-2step1" id="calc-2step-3" value="sofa_u_formed">
                                        <label for="calc-2step-3" class="square-label">П-образный </label>
                                    </div>
                                    <div class="option calc-option calc-3 calc-6 calc-8" style="display: block;">
                                        <input type="radio" checked="checked" name="calc-2step2" id="calc-2step-4" value="chair_soft">
                                        <label for="calc-2step-4" class="square-label">Кресло с мягкими подлокотниками </label>
                                    </div>
                                    <div class="option calc-option calc-3 calc-6 calc-8" style="display: block;">
                                        <input type="radio" name="calc-2step2" id="calc-2step-5" value="chair_wood">
                                        <label for="calc-2step-5" class="square-label">Кресло с деревянными подлокотниками </label>
                                    </div>
                                    <div class="option calc-option calc-5" style="display: none;">
                                        <input type="radio" checked="checked" name="calc-2step3" id="calc-2step-6" value="soft_back">
                                        <label for="calc-2step-6" class="square-label">С мягкой спинкой </label>
                                    </div>
                                    <div class="option calc-option calc-5" style="display: none;">
                                        <input type="radio" name="calc-2step3" id="calc-2step-7" value="hard_back">
                                        <label for="calc-2step-7" class="square-label">Без мягкой спинки </label>
                                    </div>
                                </div>
                                <div class="step-buttons">
                                    <div class="step-prev">Назад</div>
                                    <div class="step-next">Продолжить</div>
                                </div>
                            </div>
                            <div class="ourCalc__3step js-calcStep" style="display: none;">
                                <div class="option calc-option calc-1" style="display: none;">
                                    <p class="title">Задайте параметры размера</p>
                                    <div class="item">
                                        <input type="radio" name="calc-3step-1" id="calc-3step-1-1" value="size_s">
                                        <label for="calc-3step-1-1" class="square-label">Маленький </label>
                                    </div>
                                    <div class="item">
                                        <input type="radio" checked="checked" name="calc-3step-1" id="calc-3step-1-2" value="size_m">
                                        <label for="calc-3step-1-2" class="square-label">Средний </label>
                                    </div>
                                    <div class="item">
                                        <input type="radio" name="calc-3step-1" id="calc-3step-1-3" value="size_l">
                                        <label for="calc-3step-1-3" class="square-label">Большой </label>
                                    </div>
                                </div>
                                <div class="calc-option option calc-2 calc-3 calc-4 calc-5 calc-6 calc-7" style="display: block;">
                                    <p class="title">Выберите пышность</p>
                                    <div class="item">
                                        <input type="radio" name="calc-3step-2" id="calc-3step-2-1" value="size_s">
                                        <label for="calc-3step-2-1" class="square-label">Низкая</label>
                                    </div>
                                    <div class="item">
                                        <input type="radio" name="calc-3step-2" id="calc-3step-2-2" value="size_m">
                                        <label for="calc-3step-2-2" class="square-label">Средняя</label>
                                    </div>
                                    <div class="item">
                                        <input type="radio" name="calc-3step-2" id="calc-3step-2-3" value="size_l">
                                        <label for="calc-3step-2-3" class="square-label">Пышная</label>
                                    </div>
                                </div>
                                <div class="option">
                                    <p class="title">Требуется замена наполнителя?</p>
                                    <div class="select">
                                        <select name="calc-3step-3">
                                            <option value="fill_replace_no" selected="selected">Не требуется</option>
                                            <option value="fill_replace_partial">Частичная </option>
                                            <option value="fill_replace_full">Полная</option>
                                        </select>
                                    </div>
                                    <!-- div class="item-sm calc-option calc-1 calc-2 calc-3 calc-5 calc-6 calc-7 calc-8">
                                                    <input type="radio" name="calc-3step-4" id="calc-3step-3-0" value="0" />
                                                    <label for="calc-3step-3-0" class="square-label">Не требуется</label>
                                                </div -->
                                    <div class="item-sm calc-option calc-1 calc-2 calc-3 calc-5 calc-6 calc-7 calc-8" style="display: inline-block;">
                                        <input type="radio" name="calc-3step-4" id="calc-3step-3-1" value="fill_replace_back">
                                        <label for="calc-3step-3-1" class="square-label">Спинка</label>
                                    </div>
                                    <div class="item-sm calc-option calc-1 calc-3 calc-6 calc-7 calc-8" style="display: inline-block;">
                                        <input type="radio" name="calc-3step-4" id="calc-3step-3-2" value="fill_replace_hander">
                                        <label for="calc-3step-3-2" class="square-label">Подлокотники</label>
                                    </div>
                                    <div class="item-sm calc-option calc-1 calc-3 calc-4 calc-5 calc-6 calc-7 calc-8 calc-9" style="display: inline-block;">
                                        <input type="radio" name="calc-3step-4" id="calc-3step-3-3" value="fill_replace_chair">
                                        <label for="calc-3step-3-3" class="square-label">Сиденье</label>
                                    </div>
                                    <div class="item-sm calc-option calc-1" style="display: none;">
                                        <input type="radio" name="calc-3step-4" id="calc-3step-3-4" value="fill_replace_bed">
                                        <label for="calc-3step-3-4" class="square-label">Спальное место</label>
                                    </div>
                                </div>
                                <div class="step-buttons">
                                    <div class="step-prev">Назад</div>
                                    <div class="step-next">Продолжить</div>
                                </div>
                            </div>
                            <div class="ourCalc__4step js-calcStep" style="display: block;">
                                <div class="option">
                                    <p class="title">Ценовые категории:</p>
                                    <div class="item">
                                        <input type="radio" name="calc-4step-1" id="calc-4step-1-1" value="material_category_low">
                                        <label for="calc-4step-1-1" class="square-label">Низшая от 1000 до 1500</label>
                                    </div>
                                    <div class="item">
                                        <input type="radio" name="calc-4step-1" id="calc-4step-1-2" value="material_category_high">
                                        <label for="calc-4step-1-2" class="square-label">Высокая от 2000 до 2500</label>
                                    </div>
                                    <div class="item">
                                        <input type="radio" name="calc-4step-1" id="calc-4step-1-3" value="material_category_normal">
                                        <label for="calc-4step-1-3" class="square-label">Средняя от 1500 до 2000</label>
                                    </div>
                                    <div class="item">
                                        <input type="radio" name="calc-4step-1" id="calc-4step-1-4" value="material_category_luxury">
                                        <label for="calc-4step-1-4" class="square-label">Luxury от 2500 и более</label>
                                    </div>
                                </div>
                                <div class="option">
                                    <p class="title">Элементы декора на выбор:</p>
                                    <div class="imgs-col">
                                        <div class="item-img">
                                            <input id="calc-4step-2-1" type="checkbox" name="calc-4step-2[]" value="decor_otstrochka">
                                            <div class="border">
                                                <label for="calc-4step-2-1">
                                                    <p class="text">Отстрочка</p>
                                                    <img src="pict/step4-1.jpg" alt="">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="item-img">
                                            <input id="calc-4step-2-2" type="checkbox" name="calc-4step-2[]" value="decor_kant">
                                            <div class="border">
                                                <label for="calc-4step-2-2">
                                                    <p class="text">Декоративный кант</p>
                                                    <img src="pict/step4-1.jpg" alt="">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="item-img">
                                            <input id="calc-4step-2-3" type="checkbox" name="calc-4step-2[]" value="decor_sborki">
                                            <div class="border">
                                                <label for="calc-4step-2-3">
                                                    <p class="text">Сборки</p>
                                                    <img src="pict/step4-1.jpg" alt="">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="item-img">
                                            <input id="calc-4step-2-4" type="checkbox" name="calc-4step-2[]" value="decor_karetnaya">
                                            <div class="border">
                                                <label for="calc-4step-2-4">
                                                    <p class="text">Каретная стяжка</p>
                                                    <img src="pict/step4-1.jpg" alt="">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="item-img">
                                            <input id="calc-4step-2-5" type="checkbox" name="calc-4step-2[]" value="decor_tesma">
                                            <div class="border">
                                                <label for="calc-4step-2-5">
                                                    <p class="text">Тесьма</p>
                                                    <img src="pict/step4-1.jpg" alt="">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="item-img">
                                            <input id="calc-4step-2-6" type="checkbox" name="calc-4step-2[]" value="decor_pugovitsy">
                                            <div class="border">
                                                <label for="calc-4step-2-6">
                                                    <p class="text">Мебельные пуговицы</p>
                                                    <img src="pict/step4-1.jpg" alt="">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="item-img">
                                            <input id="calc-4step-2-7" type="checkbox" name="calc-4step-2[]" value="decor_utjazhka">
                                            <div class="border">
                                                <label for="calc-4step-2-7">
                                                    <p class="text">Утяжка</p>
                                                    <img src="pict/step4-1.jpg" alt="">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="item-img">
                                            <input id="calc-4step-2-8" type="checkbox" name="calc-4step-2[]" value="decor_gvozdiki">
                                            <div class="border">
                                                <label for="calc-4step-2-8">
                                                    <p class="text"> Гвоздики</p>
                                                    <img src="pict/step4-1.jpg" alt="">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="step-buttons">
                                    <div class="step-prev">Назад</div>
                                    <div class="step-next" onclick="recalcPrice();">Продолжить</div>
                                </div>
                            </div>
                            <div class="ourCalc__5step js-calcStep" style="display: none;">
                                <div class="top">
                                    <div class="column">
                                        <div class="title">Работа</div>
                                        <div class="price" id="work_price">9000<span>руб.</span></div>
                                    </div>
                                    <div class="line"></div>
                                    <div class="column">
                                        <div class="title">Материалы</div>
                                        <div class="price" id="materials_price">15000<span>руб.</span></div>
                                    </div>
                                </div>
                                <div class="bottom">
                                    <div class="title">Итоговая сумма</div>
                                    <div class="price" id="total_price">24000<span>руб.</span></div>
                                </div>
                                <div class="step-buttons">
                                    <div class="step-prev">Назад</div>
                                    <div class="step-next">Продолжить</div>
                                </div>
                            </div>
                            <div class="ourCalc__6step js-calcStep" style="display: none;">
                                <div class="deliveryTabs">
                                    <div class="option">
                                        <p class="title">Доставка</p>
                                        <div class="item">
                                            <input type="radio" name="deliveryTab" id="deliveryTab-1" checked="checked" value="deliveryMoscow">
                                            <label for="deliveryTab-1" class="square-label">Москва</label>
                                        </div>
                                        <div class="item">
                                            <input type="radio" name="deliveryTab" id="deliveryTab-2" value="deliveryRegion">
                                            <label for="deliveryTab-2" class="square-label">Область </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="deliveryOptions">
                                    <div class="option">
                                        <div class="select">
                                            <select name="deliverySelect" onchange="recalcPrice()">
                                                <option value="there" selected="selected">В один конец</option>
                                                <option value="there_and_back">В точку назначения и обратно </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="option region">
                                        <div class="item-counter">
                                <span class="text small">Koл-во км за МКАД
                                    <br>25 р. км</span>
                                            <div class="counter">
                                    <span class="minus">
                                        </span>
                                                <input type="text" value="1" name="calcDistance" onchange="recalcPrice()">
                                                <span class="plus"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="option">
                                        <div class="item line">
                                            <input type="radio" name="calcLift" id="step6-1-1" value="no_porters" onchange="recalcPrice()">
                                            <label for="step6-1-1" class="square-label">Услуги грузчиков не требуются</label>
                                        </div>
                                        <div class="item line">
                                            <input type="radio" name="calcLift" id="step6-1-2" value="have_lift" onchange="recalcPrice()">
                                            <label for="step6-1-2" class="square-label">Есть грузовой лифт </label>
                                        </div>
                                        <div class="item line">
                                            <input type="radio" name="calcLift" id="step6-1-3" value="no_lift" onchange="recalcPrice()">
                                            <label for="step6-1-3" class="square-label">Нет грузового лифта </label>
                                        </div>
                                    </div>
                                    <div class="option">
                                        <div class="item-counter">
                                            <span class="text">Этаж</span>
                                            <div class="counter">
                                    <span class="minus">
                                        </span>
                                                <input type="text" value="1" name="calcFloor" onchange="recalcPrice()">
                                                <span class="plus"></span>
                                            </div>
                                        </div>
                                        <div class="item-counter">
                                            <span class="text">Количество мебели</span>
                                            <div class="counter">
                                                <span class="minus"></span>
                                                <input type="text" value="1" name="calcFurnitureCount" onchange="recalcPrice()">
                                                <span class="plus"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="option">
                                        <div class="totalPrice">Стоимость доставки и погрузки:
                                            <span class="price" id="delivery_price">1010<span>руб.</span></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="step-buttons">
                                    <div class="step-prev" onclick="recalcPrice();">Назад</div>
                                </div>
                            </div>
                            <div class="ourCalc__totalPrice" style="display: none;">
                                <div class="text">Сумма является
                                    <b>ознакомительной</b>, она может отличаться при точных замерах, как в меньшую, так и в большую сторону</div>
                                <a href="#order"><div class="order-btn">Заказать</div></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </mai