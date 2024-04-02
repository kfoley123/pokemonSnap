<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php bloginfo('name'); ?> <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
        <?php wp_head(); ?>
    </head>
    <body>
        <header class="my-logo">
            <h1>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/Images/logo.png" alt="Site Logo" width="60px" height="60px">
                </a>
            </h1>
        </header>
        <?php wp_nav_menu( array( 'header-menu' => 'header-menu' ) ); ?>