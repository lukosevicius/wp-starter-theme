<?php  ?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header>
    <?php
        wp_nav_menu(array(
            'theme_location'         => 'top-menu',
            'container'              => '',
            'menu_class'             => 'menu'
        ));
    ?>
</header>