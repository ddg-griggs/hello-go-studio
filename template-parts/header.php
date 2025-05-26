<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header class="go-header">
    <div class="go-container">
      <?php if (get_theme_mod('go_logo')) : ?>
        <a href="<?php echo home_url(); ?>">
          <img src="<?php echo get_theme_mod('go_logo'); ?>" alt="<?php bloginfo('name'); ?>" class="go-logo">
        </a>
      <?php endif; ?>
      <nav class="go-navigation">
        <?php wp_nav_menu(['theme_location' => 'primary']); ?>
      </nav>
    </div>
  </header>
