<?php
function hello_go_studio_customizer($wp_customize) {
  // Секция "Go-Studio Settings"
  $wp_customize->add_section('go_studio_settings', [
    'title' => __('Theme Settings', 'hello-go-studio'),
    'priority' => 30,
  ]);

  // Основной цвет
  $wp_customize->add_setting('go_primary_color', [
    'default' => '#3366FF',
    'transport' => 'refresh',
  ]);
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'go_primary_color', [
    'label' => __('Primary Color', 'hello-go-studio'),
    'section' => 'go_studio_settings',
  ]));

  // Логотип
  $wp_customize->add_setting('go_logo');
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'go_logo', [
    'label' => __('Upload Logo', 'hello-go-studio'),
    'section' => 'go_studio_settings',
  ]));
}
add_action('customize_register', 'hello_go_studio_customizer');
