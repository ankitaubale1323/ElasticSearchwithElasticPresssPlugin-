<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
    <div class="container header-content">
        <!-- Logo -->
        <div class="logo">
            <a href="<?php echo home_url(); ?>">ElasticSearch</a>
        </div>

        <!-- Navigation Menu -->
        <nav>
            <?php 
            wp_nav_menu(array(
                'theme_location' => 'primary', 
                'menu_class' => 'horizontal-menu'
            )); 
            ?>
        </nav>
        <!-- Search Form -->
        <div class="search-bar">
            <?php get_search_form(); ?>
        </div>
    </div>
</header>
