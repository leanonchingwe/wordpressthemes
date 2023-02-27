<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo( 'name' ); ?></title>
  <?php wp_head(); ?>
  <style>
    /* Custom CSS for the header */
    .header {
      background-color: skyblue;
      padding: 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .header-logo {
      max-width: 200px;
    }

    .header-navigation {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .header-navigation li {
      margin: 0 20px;
    }

    .header-navigation li a {
      color: #333;
      text-decoration: none;
      font-family: 'Roboto', sans-serif;
      font-weight: bold;
    }
  </style>
</head>
<body <?php body_class(); ?>>
  <header class="header">
    <div class="header-logo">
      <a href="<?php echo esc_url( home_url() ); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="<?php bloginfo( 'name' ); ?>">
      </a>
    </div>
    <nav class="header-navigation">
      <?php wp_nav_menu( array(
        'theme_location' => 'primary',
        'container' => false,
        'menu_class' => '',
        'fallback_cb' => '__return_false',
        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        'depth' => 2
      ) ); ?>
    </nav>
  </header>
