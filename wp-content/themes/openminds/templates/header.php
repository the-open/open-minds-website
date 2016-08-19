<header class="banner">
  <div class="container">
    <a class="sr-only" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
    <a class="logo" href="http://localhost/">
      <img src="/wp-content/themes/openminds/dist/images/open-brand.png">
      <span>Minds&nbsp;e.V.</span>
    </a>

    <nav class="nav-primary">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;
      ?>
    </nav>
  </div>
</header>
