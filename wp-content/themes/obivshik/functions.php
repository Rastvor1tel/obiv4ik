<?php
/**
 * obivshik functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package obivshik
 */



if ( ! function_exists( 'obivshik_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function obivshik_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on obivshik, use a find and replace
		 * to change 'obivshik' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'obivshik', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'obivshik' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'obivshik_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'obivshik_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function obivshik_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'obivshik_content_width', 640 );
}
add_action( 'after_setup_theme', 'obivshik_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function obivshik_widgets_init() {
	register_sidebar( array(
		'name'          => 'Верх (слева)',
		'id'            => 'top-left',
		'description'   => esc_html__( 'Add widgets here.', 'obivshik' ),
		'before_widget' => '<div class="top-left">',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	) );

	register_sidebar( array(
		'name'          => 'Верх (справа)',
		'id'            => 'top-right',
		'description'   => esc_html__( 'Add widgets here.', 'obivshik' ),
		'before_widget' => '<div class="top-right">',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	) );

	register_sidebar( array(
		'name'          => 'Футер 1',
		'id'            => 'footer-1',
		'description'   => '',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
	register_sidebar( array(
		'name'          => 'Футер 2',
		'id'            => 'footer-2',
		'description'   => '',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
	register_sidebar( array(
		'name'          => 'Футер 3',
		'id'            => 'footer-3',
		'description'   => '',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
	register_sidebar( array(
		'name'          => 'Футер 4',
		'id'            => 'footer-4',
		'description'   => '',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
	register_sidebar( array(
		'name'          => 'Футер 5',
		'id'            => 'footer-5',
		'description'   => '',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
	register_sidebar( array(
		'name'          => 'Футер копирайт',
		'id'            => 'footer-copy',
		'description'   => '',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );

}
add_action( 'widgets_init', 'obivshik_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function obivshik_scripts() {
	wp_enqueue_style( 'obivshik-bootstrap', get_template_directory_uri().'/css/bootstrap.min.css');
	wp_enqueue_style( 'obivshik-style', get_stylesheet_uri() );
	wp_enqueue_style( 'obivshik-animate', get_template_directory_uri().'/css/animate.css');
	wp_enqueue_style( 'obivshik-owl.carousel.min', get_template_directory_uri().'/css/owl.carousel.min.css');
	// wp_enqueue_style( 'obivshik-app.min', get_template_directory_uri().'/css/app.min.css');
	wp_enqueue_style( 'obivshik-jquery.fancybox_3.1.25.min', get_template_directory_uri().'/css/jquery.fancybox_3.1.25.min.css');
	
	wp_enqueue_style( 'obivshik-slick', get_template_directory_uri().'/slick/slick.css');
	wp_enqueue_style( 'obivshik-slick-theme', get_template_directory_uri().'/slick/slick-theme.css');

wp_enqueue_script( 'obivshik-jquery', get_template_directory_uri() . '/js/jquery.js', array(), '', false );
wp_enqueue_script( 'obivshik-jquery-migrate-3.0.0.min.js', get_template_directory_uri() . '/js/jquery-migrate-3.0.0.min.js', array(), '', false );
wp_enqueue_script( 'obivshik-slick-js', get_template_directory_uri() . '/slick/slick.min.js', array(), '', true );
wp_enqueue_script( 'obivshik-jquery.fancybox_3.1.25.min', get_template_directory_uri() . '/js/jquery.fancybox_3.1.25.min.js', array(), '', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'obivshik_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

function my_myme_types($mime_types){
    $mime_types['svg'] = 'image/svg+xml'; // поддержка SVG
    return $mime_types;
}
add_filter('upload_mimes', 'my_myme_types', 1, 1);

if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page();
    
}

/*------Калькулятор------*/

function show_calc(){
    $htmlCalculatorContent = '
        <link rel=\'stylesheet\' id=\'obivshik-slick-css\'  href=\'/wp-content/themes/obivshik/css/ourCalc.css\' type=\'text/css\' media=\'all\' />
        <script src="/wp-content/themes/obivshik/js/ourCalc.js"></script>
        <div class="ourCalc">
            <div data-wow-duration="1s" data-wow-delay=".5s" class="wrapper-ourCalc wow rollIn" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: rollIn;">
                <div class="black-bg">
                    <p class="title">Расчет стоимости</p>
                    <div class="furChoose" style="display: block;">
                        <p class="choose">Выберите тип мебели</p>
                        <div data-wow-duration="1s" data-wow-delay="1s" class="red-line wow fadeInLeft" style="visibility: visible; animation-duration: 1s; animation-delay: 1s; animation-name: fadeInLeft;"></div>
                    </div>
                    <ul class="ourCalc__nav" style="display: none;">
                        <li class="ourCalc__navTab">Тип мебели</li>
                        <li class="ourCalc__navTab">Объем работы</li>
                        <li class="ourCalc__navTab">Материал</li>
                        <li class="ourCalc__navTab" onclick="recalcPrice();">Стоимость</li>
                        <li class="ourCalc__navTab is-active">Доставка</li>
                    </ul>
                    <form class="inputs" id="calc_form" method="post">
                        <div class="ourCalc__1step js-calcStep" style="display: block;">
                            <div data-wow-duration=".5s" data-wow-delay=".5s" class="wow fadeIn" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.5s; animation-name: fadeIn;">
                                <input type="radio" name="calc-group-input" id="calc-1" value="sofa" class="calc-input">
                                <label for="calc-1" class="calc-label">Диван
                                    <div class="img">
                                        <img src="/wp-content/themes/obivshik/img/pict/ca-sofa.png">
                                    </div>
                                </label>
                            </div>
                            <div data-wow-duration=".5s" data-wow-delay=".5s" class="wow fadeIn" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.5s; animation-name: fadeIn;">
                                <input type="radio" name="calc-group-input" id="calc-2" value="bed_head" class="calc-input">
                                <label for="calc-2" class="calc-label">Изголовье кровати
                                    <div class="img">
                                        <img src="/wp-content/themes/obivshik/img/pict/ca-bed.png">
                                    </div>
                                </label>
                            </div>
                            <div data-wow-duration=".5s" data-wow-delay=".5s" class="wow fadeIn" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.5s; animation-name: fadeIn;">
                                <input type="radio" name="calc-group-input" id="calc-3" value="armchair" class="calc-input">
                                <label for="calc-3" class="calc-label">Кресло
                                    <div class="img">
                                        <img src="/wp-content/themes/obivshik/img/pict/ca-arm.png">
                                    </div>
                                </label>
                            </div>
                            <div data-wow-duration=".5s" data-wow-delay=".5s" class="wow fadeIn" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.5s; animation-name: fadeIn;">
                                <input type="radio" name="calc-group-input" id="calc-4" value="banket" class="calc-input">
                                <label for="calc-4" class="calc-label">Банкетка
                                    <div class="img">
                                        <img src="/wp-content/themes/obivshik/img/pict/ca-bank.png">
                                    </div>
                                </label>
                            </div>
                            <div data-wow-duration=".5s" data-wow-delay=".5s" class="wow fadeIn" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.5s; animation-name: fadeIn;">
                                <input type="radio" name="calc-group-input" id="calc-5" value="chair" class="calc-input">
                                <label for="calc-5" class="calc-label">Стул
                                    <div class="img">
                                        <img src="/wp-content/themes/obivshik/img/pict/ca-chair.png">
                                    </div>
                                </label>
                            </div>
                            <div data-wow-duration=".5s" data-wow-delay=".5s" class="wow fadeIn" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.5s; animation-name: fadeIn;">
                                <input type="radio" name="calc-group-input" id="calc-6" value="dental_chair" class="calc-input">
                                <label for="calc-6" class="calc-label">Стоматологическое кресло
                                    <div class="img">
                                        <img src="/wp-content/themes/obivshik/img/pict/ca-dent.png">
                                    </div>
                                </label>
                            </div>
                            <div data-wow-duration=".5s" data-wow-delay=".5s" class="wow fadeIn" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.5s; animation-name: fadeIn;">
                                <input type="radio" name="calc-group-input" id="calc-7" value="kitchen" class="calc-input">
                                <label for="calc-7" class="calc-label">Кухонный уголок
                                    <div class="img">
                                        <img src="/wp-content/themes/obivshik/img/pict/ca-angle.png">
                                    </div>
                                </label>
                            </div>
                            <div data-wow-duration=".5s" data-wow-delay=".5s" class="wow fadeIn" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.5s; animation-name: fadeIn;">
                                <input type="radio" name="calc-group-input" id="calc-8" value="officechair" class="calc-input">
                                <label for="calc-8" class="calc-label">Офисное кресло
                                    <div class="img">
                                        <img src="/wp-content/themes/obivshik/img/pict/ca-off.png">
                                    </div>
                                </label>
                            </div>
                            <div data-wow-duration=".5s" data-wow-delay=".5s" class="wow fadeIn" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.5s; animation-name: fadeIn;">
                                <input type="radio" name="calc-group-input" id="calc-9" value="puf" class="calc-input">
                                <label for="calc-9" class="calc-label">Пуф
                                    <div class="img">
                                        <img src="/wp-content/themes/obivshik/img/pict/ca-puf.png">
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
                                    <input type="radio" name="calc-3step-1" id="calc-3step-1-2" value="size_m">
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
                        <div class="ourCalc__4step js-calcStep" style="display: none;">
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
                                                <img src="/wp-content/themes/obivshik/img/pict/step4-1.jpg" alt="">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="item-img">
                                        <input id="calc-4step-2-2" type="checkbox" name="calc-4step-2[]" value="decor_kant">
                                        <div class="border">
                                            <label for="calc-4step-2-2">
                                                <p class="text">Декоративный кант</p>
                                                <img src="/wp-content/themes/obivshik/img/pict/step4-1.jpg" alt="">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="item-img">
                                        <input id="calc-4step-2-3" type="checkbox" name="calc-4step-2[]" value="decor_sborki">
                                        <div class="border">
                                            <label for="calc-4step-2-3">
                                                <p class="text">Сборки</p>
                                                <img src="/wp-content/themes/obivshik/img/pict/step4-1.jpg" alt="">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="item-img">
                                        <input id="calc-4step-2-4" type="checkbox" name="calc-4step-2[]" value="decor_karetnaya">
                                        <div class="border">
                                            <label for="calc-4step-2-4">
                                                <p class="text">Каретная стяжка</p>
                                                <img src="/wp-content/themes/obivshik/img/pict/step4-1.jpg" alt="">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="item-img">
                                        <input id="calc-4step-2-5" type="checkbox" name="calc-4step-2[]" value="decor_tesma">
                                        <div class="border">
                                            <label for="calc-4step-2-5">
                                                <p class="text">Тесьма</p>
                                                <img src="/wp-content/themes/obivshik/img/pict/step4-1.jpg" alt="">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="item-img">
                                        <input id="calc-4step-2-6" type="checkbox" name="calc-4step-2[]" value="decor_pugovitsy">
                                        <div class="border">
                                            <label for="calc-4step-2-6">
                                                <p class="text">Мебельные пуговицы</p>
                                                <img src="/wp-content/themes/obivshik/img/pict/step4-1.jpg" alt="">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="item-img">
                                        <input id="calc-4step-2-7" type="checkbox" name="calc-4step-2[]" value="decor_utjazhka">
                                        <div class="border">
                                            <label for="calc-4step-2-7">
                                                <p class="text">Утяжка</p>
                                                <img src="/wp-content/themes/obivshik/img/pict/step4-1.jpg" alt="">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="item-img">
                                        <input id="calc-4step-2-8" type="checkbox" name="calc-4step-2[]" value="decor_gvozdiki">
                                        <div class="border">
                                            <label for="calc-4step-2-8">
                                                <p class="text"> Гвоздики</p>
                                                <img src="/wp-content/themes/obivshik/img/pict/step4-1.jpg" alt="">
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
                                    <div class="price" id="work_price">0<span>руб.</span></div>
                                </div>
                                <div class="line"></div>
                                <div class="column">
                                    <div class="title">Материалы</div>
                                    <div class="price" id="materials_price">0<span>руб.</span></div>
                                </div>
                            </div>
                            <div class="bottom">
                                <div class="title">Итоговая сумма</div>
                                <div class="price" id="total_price">0<span>руб.</span></div>
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
                                        <input type="radio" name="deliveryTab" id="deliveryTab-1" checked="checked" value="deliveryMoscow" onchange="recalcPrice()">
                                        <label for="deliveryTab-1" class="square-label">Москва</label>
                                    </div>
                                    <div class="item">
                                        <input type="radio" name="deliveryTab" id="deliveryTab-2" value="deliveryRegion" onchange="recalcPrice()">
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
                            <a href="#order"><div class="order-btn btn-max btn-info popmake-284 pum-trigger">Заказать</div></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    ';
    return $htmlCalculatorContent;
}

add_shortcode( 'calculator', 'show_calc' );

add_action('wp_ajax_get_price', 'get_price_callback');
add_action('wp_ajax_nopriv_get_price', 'get_price_callback');
function get_price_callback(){
    $calcArray = $_REQUEST;
    $calcPost = get_page_by_path($calcArray['calc-group-input'], '', 'calculator');
    $calcProps = get_post_meta($calcPost->ID);
    $arPrice = [
        'work' => 0,
        'material' => 0,
        'delivery' => 0
    ];
    foreach ($calcArray as $key => $calcItem) {
        if ($key == 'calc-4step-2') {
            foreach ($calcItem as $decorItem) {
                if ($calcProps[$decorItem . '_work'])
                    $arPrice['work'] += $calcProps[$decorItem . '_work'][0];
                if ($calcProps[$decorItem . '_material'])
                    $arPrice['material'] += $calcProps[$decorItem . '_material'][0];
            }
        } else {
            if ($calcProps[$calcItem . '_work'])
                $arPrice['work'] += $calcProps[$calcItem . '_work'][0];
            if ($calcProps[$calcItem . '_material'])
                $arPrice['material'] += $calcProps[$calcItem . '_material'][0];
        }
    }
    $deliveryPost = get_page_by_path('delivery', '', 'calculator');
    $deliveryProps = get_post_meta($deliveryPost->ID);
    $arPrice['delivery'] += $deliveryProps[$calcArray['deliveryTab']][0];
    if($calcArray['deliveryTab'] != 'deliveryMoscow')
        $arPrice['delivery'] += $deliveryProps[$calcArray['deliverySelect']][0]*$calcArray['calcDistance'];
    $arPrice['delivery'] += $deliveryProps[$calcArray['calcLift']][0]*$calcArray['calcFloor']*$calcArray['calcFurnitureCount'];
    echo json_encode($arPrice);
    wp_die();
}

//Добавление нового типа записей
//functions.php
add_action( 'init', 'tpl_tkani' );
function tpl_tkani() {
	register_post_type( 'tkani', array(
		'public' => true,
		'labels' => array(
			'name' => 'Ткани',
			'all_items' => 'Все ткани',
			'add_new' => 'Добавить ткань ',
			),
		'supports' => array( 'title', 'thumbnail' ),
		'taxonomies' => array('category'),
		'has_archive' => true,
		'query_var' => true,
		)
	);
};



//Навигация 
function wp_corenavi() {
  global $wp_query;
  $pages = '';
  $max = $wp_query->max_num_pages;
  if (!$current = get_query_var('paged')) $current = 1;
  $a['base'] = str_replace(999999999, '%#%', get_pagenum_link(999999999));
  $a['total'] = $max;
  $a['current'] = $current;

  $total = 1; //1 - выводить текст "Страница N из N", 0 - не выводить
  $a['mid_size'] = 3; //сколько ссылок показывать слева и справа от текущей
  $a['end_size'] = 1; //сколько ссылок показывать в начале и в конце
  $a['prev_text'] = '&laquo;'; //текст ссылки "Предыдущая страница"
  $a['next_text'] = '&raquo;'; //текст ссылки "Следующая страница"

  if ($max > 1) echo '<div class="navigation">';
  if ($total == 1 && $max > 1) $pages = '<span class="pages">Страница ' . $current . ' из ' . $max . '</span>'."\r\n";
  echo $pages . paginate_links($a);
  if ($max > 1) echo '</div>';
}
// Фильтр
add_action('wp_ajax_myfilter', 'misha_filter_function'); // wp_ajax_{ACTION HERE} 
add_action('wp_ajax_nopriv_myfilter', 'misha_filter_function');
 
function misha_filter_function(){
global $query;
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	$args = array(
		'post_type' => 'tkani',
		'posts_per_page' => 12,
		'paged' => $paged,
		'offset'=> 1
	);
 
	// for taxonomies / categories
	if( isset( $_POST['categoryfilter'] ) ){
		$args['tax_query'] = array(
			array(
				'taxonomy' => 'category',
				'field' => 'id',
				'terms' => $_POST['categoryfilter'],
				'relation'=>'AND'
			)
		);
	}else{
		$args['tax_query'] = array(
			array(
				'taxonomy' => 'category',
				'field' => 'id',
				'terms' => 'all',
				'relation'=>'AND',
				'paged' => get_query_var('paged') ?: 1
			)
		);		
	}

	if( isset( $_POST['tsvetovaya_gruppa'] )){
		$args['meta_query'] = array( 'relation'=>'AND' ); // AND means that all conditions of meta_query should be true
	};


	if( isset( $_POST['tsvetovaya_gruppa'] )) {

		$args['meta_query'][] = array ( 
			'post_type' => 'tkani',
			'key' => 'tsvetovaya_gruppa' ,
			'value'=>$_POST['tsvetovaya_gruppa'],
		) ;		     
};

if( isset( $_POST['dizayn_i_risunok'] )) {	
		$args['meta_query'][] = array ( 
			'post_type' => 'tkani',
			'key' => 'dizayn_i_risunok' ,
			'value'=> $_POST['dizayn_i_risunok'],			
		) ;		     
};

	$query = new WP_Query( $args );
	if( $query->have_posts() ) :
		while( $query->have_posts() ): $query->the_post();
			echo '<div class="col-sm-3 col-lg-3"><div class="tkancontent">';
			$thumb_id = get_post_thumbnail_id($query->post);
			$thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
			echo '<div class="img" style="background: url(' . $thumb_url[0] . ');" ><h2>' . $query->post->post_title . '</h2></div>';
			echo '<div class="inf">' . get_field('dizayn_i_risunok', $query->post) . '</div>';
			echo '</div>';			
			echo '</div>';
		endwhile;
if (function_exists('wp_corenavi')) wp_corenavi(); 
		wp_reset_postdata();
	else :
		echo 'No posts found';
	endif;
	
	die();
}
