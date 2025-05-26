<?php
if (!defined('ABSPATH')) exit;

// Настройки темы
function hello_go_studio_setup() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('html5', ['search-form', 'comment-form', 'gallery', 'caption']);
  add_theme_support('elementor'); // Поддержка Elementor
  add_theme_support('elementor-pro'); // Поддержка Elementor Pro
  load_theme_textdomain('hello-go-studio', get_template_directory() . '/languages');
}
add_action('after_setup_theme', 'hello_go_studio_setup');

// Подключение стилей и скриптов
function hello_go_studio_scripts() {
  // Основной CSS
  wp_enqueue_style('hello-go-studio', get_stylesheet_uri(), [], filemtime(get_template_directory() . '/style.css'));
  
  // Google Fonts (Inter + по желанию)
  wp_enqueue_style('hello-go-studio-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap');
  
  // JS (если нужен)
  wp_enqueue_script('hello-go-studio-js', get_template_directory_uri() . '/assets/js/scripts.js', [], '1.0', true);
}
add_action('wp_enqueue_scripts', 'hello_go_studio_scripts');

// Подключение дополнительных файлов
require_once get_template_directory() . '/inc/customizer.php'; // Настройки Customizer
require_once get_template_directory() . '/inc/elementor.php';  // Интеграция с Elementor

// Подключение CSS и JS
function hello_go_studio_assets() {
  // Основной CSS
  wp_enqueue_style(
    'hello-go-studio-main',
    get_template_directory_uri() . '/assets/css/main.css',
    [],
    filemtime(get_template_directory() . '/assets/css/main.css')
  );

  // Основной JS
  wp_enqueue_script(
    'hello-go-studio-scripts',
    get_template_directory_uri() . '/assets/js/scripts.js',
    [],
    filemtime(get_template_directory() . '/assets/js/scripts.js'),
    true
  );
}
add_action('wp_enqueue_scripts', 'hello_go_studio_assets');
