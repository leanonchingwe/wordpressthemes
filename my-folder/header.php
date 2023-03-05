<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo( 'name' ); ?><?php wp_title( '|', true, 'left' ); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="header">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header-top-left">
                            <ul class="list-inline">
                                <li><i class="fa fa-envelope"></i> Email: <?php echo esc_html( get_theme_mod( 'header_email' ) ); ?></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header-top-right">
                            <ul class="list-inline">
                                <li><i class="fa fa-phone"></i> Phone: <?php echo esc_html( get_theme_mod( 'header_phone' ) ); ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class="header-logo">
                            <?php if ( has_custom_logo() ) : ?>
                                <?php the_custom_logo(); ?>
                            <?php else : ?>
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-12">
                        <div class="header-navigation">
                            <?php wp_nav_menu( array(
                                'theme_location' => 'primary',
                                'menu_class' => 'nav navbar-nav',
                                'fallback_cb' => false
                            ) ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
