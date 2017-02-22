<?php 

// видаляємо непотрібні штуки
remove_action ('wp_head', 'rsd_link');
remove_theme_support ('automatic-feed-links');
remove_action ('wp_head', 'wlwmanifest_link');
remove_action ('wp_head', 'wp_generator');
show_admin_bar(false);

// підклчаємо стилі та Jquery
function theme_name_scripts() {
	wp_enqueue_script('script', get_template_directory_uri() . '/JS/script.js');
	wp_enqueue_style('style', get_stylesheet_uri());
}
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

//мініатюра в пости
add_theme_support('post-thumbnails'); 

// Header menu
register_nav_menu( 'menu', 'Header menu' );

// vidgext
$args = array(
	'name'          => 'Віджет sidebar',
	'id'            => 'sidebar',
	'description'   => 'Сюди добавляємо віджети сайдбару',
	'before_widget' => '<li id="%1" class="widget %2">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>'
	);
register_sidebar( $args );


