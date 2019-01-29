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
