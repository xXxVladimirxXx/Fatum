<?php

add_action ('wp_enqueue_scripts', 'fatum_scripts_and_style');
function fatum_scripts_and_style() {

	//Подключаем скрипты	
	wp_enqueue_script('active', get_template_directory_uri() . '/js/active.js');
	wp_enqueue_script('bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js');
	wp_enqueue_script('jquery.countdown.min', get_template_directory_uri() . '/js/jquery.countdown.min.js');
	wp_enqueue_script('jquery.magnific-popup.min', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js');
	wp_enqueue_script('jquery.slicknav.min', get_template_directory_uri() . '/js/jquery.slicknav.min.js');
	wp_enqueue_script('jquery-1.11.3.min', get_template_directory_uri() . '/js/jquery-1.11.3.min.js');
	wp_enqueue_script('jquery-perfect-scrollbar.min', get_template_directory_uri() . '/js/jquery-perfect-scrollbar.min.js');
	wp_enqueue_script('owl.carousel.min', get_template_directory_uri() . '/js/owl.carousel.min.js');
	wp_enqueue_script('parallax.min', get_template_directory_uri() . '/js/parallax.min.js');
	wp_enqueue_script('wow-1.3.0.min', get_template_directory_uri() . '/js/wow-1.3.0.min.js');
	
	//Подключаем стили
	wp_enqueue_style('fatum-style', get_stylesheet_uri());
	wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css');
	wp_enqueue_style('animate.min', get_template_directory_uri() . '/css/animate.min.css');
	wp_enqueue_style('bootstrap.min', get_template_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_style('font-awesome.min', get_template_directory_uri() . '/css/font-awesome.min.css');
	wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/css/magnific-popup.css');
	wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/css/owl.carousel.css');
	wp_enqueue_style('perfect-scrollbar.min', get_template_directory_uri() . '/css/perfect-scrollbar.min.css');
	wp_enqueue_style('responsive', get_template_directory_uri() . '/css/responsive.css');
	wp_enqueue_style('slicknav.min', get_template_directory_uri() . '/css/slicknav.min.css');
}

add_action ('after_setup_theme', 'fatum_theme_seting');
function fatum_theme_seting() {
	
	//Миниатюра
	add_theme_support('post-thumbnails');
	
	//Меню
	register_nav_menu('menu', 'Меню в шапке');
}

add_action('init', 'register_post_types');

function register_post_types(){

	include ( get_template_directory() . '/layouts/employe.php');
	
	include ( get_template_directory() . '/layouts/case.php');
	
	include ( get_template_directory() . '/layouts/service.php');
	
}

function wp_corenavi() {
  global $wp_query;
  $pages = '';
  $max = $wp_query->max_num_pages;
  if (!$current = get_query_var('paged')) $current = 1;
  $a['base'] = str_replace(999999999, '%#%', get_pagenum_link(999999999));
  $a['total'] = $max;
  $a['current'] = $current;

  $total = 0; //1 - выводить текст "Страница N из N", 0 - не выводить
  $a['mid_size'] = 3; //сколько ссылок показывать слева и справа от текущей
  $a['end_size'] = 1; //сколько ссылок показывать в начале и в конце
  $a['prev_text'] = '«'; //текст ссылки "Предыдущая страница"
  $a['next_text'] = '»'; //текст ссылки "Следующая страница"

  if ( $max > 1 ) {
    echo '<li>';
  }
  if ( $current == 1 && $max >= 2 ) {
    echo '<span class="disabled">«</span>';
  }
  echo $pages . paginate_links($a);
  if ( $max > 1 ) {
  echo ' </li>';
  }
}


add_action('admin_menu', function(){
	add_menu_page( 'Дополнительные настройки сайта', 'Доп. настройки', 'manage_options', 'add-my-setting.php', 'save_setting', '', 79); 
} );

// функция отвечает за вывод страницы настроек
// подробнее смотрите API Настроек: http://wp-kama.ru/id_3773/api-optsiy-nastroek.html
include ( get_template_directory() . '/layouts/add-my-setting.php');

function my_acf_google_map_api( $api ){
	
	$api['key'] = 'AIzaSyC49SAzpTOuUhPV7FprNKXEUJqcaoRmsu0';
	
	return $api;
	
}

add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');