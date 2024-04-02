<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php bloginfo('name'); ?> <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
        <?php wp_head(); ?>
    </head>