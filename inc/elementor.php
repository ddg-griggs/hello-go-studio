<?php
// Включение поддержки всех виджетов Elementor
function hello_go_studio_elementor_support() {
  add_theme_support('elementor');
  add_theme_support('elementor-pro');
  
  // Можно добавить свои кастомные виджеты
}
add_action('after_setup_theme', 'hello_go_studio_elementor_support');
