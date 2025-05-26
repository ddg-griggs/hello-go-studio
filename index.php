<?php
/**
 * Основной шаблон темы.
 * Если используется Elementor, он переопределит этот файл.
 */

get_header(); // Подключаем header.php
?>

<main class="go-main">
  <?php
  if (have_posts()) :
    while (have_posts()) : the_post();
      the_content();
    endwhile;
  endif;
  ?>
</main>

<?php
get_footer(); // Подключаем footer.php
?>