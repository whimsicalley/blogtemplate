<!DOCTYPE html>
<html>
<head>
    <title><?php bloginfo(); ?></title>
    <?php wp_head('name'); ?>

    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway:400,600" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="headwrap"> <!-- BEGIN HEADER CONTAINER -->
        <header class="row">
            <div class="twelve columns">
                <h1 class="site-title"><a href="<?php $url = home_url('/'); echo $url; ?>">
                    <?php bloginfo('name'); ?></a></h1>
                <h2 class="sub-title"><?php bloginfo('description'); ?></h2>
            </div>
        </header>
        <!-- NAV MENU CODE BEGINS -->
        <nav class="row">
            <div class="twelve columns">
                <?php
            wp_nav_menu( array (
                'sort_column' => 'menu_order',
                'container_class' => 'blank-menu-header'
            ));
                ?>
            </div>
        </nav>
    </div>
    <!-- MENU CODE ENDS -->
    <div class="container"> <!-- BEGIN BODY CONTAINER -->
