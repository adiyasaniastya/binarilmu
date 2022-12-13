<?php


?>
<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
    <?php wp_head() ?>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title() ?></title>
</head>

<body <?php body_class(); ?>>
    <header id="header" class="header fixed-top" data-scrollto-offset="0">
        <div class="container-fluid d-flex align-items-center justify-content-between">
            <div id="custom-logo">
                <?php
                $custom_logo_id = get_theme_mod('custom_logo');
                $logo = wp_get_attachment_image_src($custom_logo_id, 'full');

                if (has_custom_logo()) {
                    printf(
                        '<a href="%1$s" ><img src="%2$s"/></a>',
                        esc_url(home_url()),
                        esc_url($logo[0])
                    );
                } else {
                    echo bloginfo('name');
                }

                ?>
            </div>
            <nav id="navbar" class="navbar">
                <?php
                if (has_nav_menu('primary')) :
                    wp_nav_menu([
                        'theme_location' => 'primary',
                        'container'      => false,
                        'menu_class'     => '',
                        'menu_id'        => '',
                        'depth'          => 3
                    ]);
                else :
                    printf(
                        '<a href="%1$s">%2$s</a>',
                        esc_url(admin_url('/nav-menus.php')),
                        esc_html__('Asign a menu', 'sekolah')
                    );
                endif;
                ?>
                <!-- <ul>
                <li><a class="nav-link scrollto" href="index.html#hero">Home</a></li>
                <li><a class="nav-link scrollto" href="index.html#about">About</a></li>
                <li><a class="nav-link scrollto" href="index.html#services">Services</a></li>
                <li><a class="nav-link scrollto" href="index.html#portfolio">Portfolio</a></li>
                <li><a class="nav-link scrollto" href="index.html#team">Team</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                    <li><a href="#">Drop Down 1</a></li>
                    <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                        <ul>
                        <li><a href="#">Deep Drop Down 1</a></li>
                        <li><a href="#">Deep Drop Down 2</a></li>
                        <li><a href="#">Deep Drop Down 3</a></li>
                        <li><a href="#">Deep Drop Down 4</a></li>
                        <li><a href="#">Deep Drop Down 5</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Drop Down 2</a></li>
                    <li><a href="#">Drop Down 3</a></li>
                    <li><a href="#">Drop Down 4</a></li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="index.html#contact">Contact</a></li>
                </ul> -->
                <i class="bi bi-list mobile-nav-toggle d-none"></i>
            </nav><!-- .navbar -->

            <?php
            if (has_nav_menu('header_action')) :
                wp_nav_menu([
                    'theme_location' => 'header_action',
                    'container'      => false,
                    'menu_class'     => 'header_menu_action',
                    'menu_id'        => '',
                    'depth'          => 3
                ]);
            else :
                printf(
                    '<a class="btn-getstarted scrollto" href="%1$s">%2$s</a>',
                    esc_url(admin_url('/nav-menus.php')),
                    esc_html__('Menu', 'sekolah')
                );
            endif;
            ?>

        </div>
    </header>