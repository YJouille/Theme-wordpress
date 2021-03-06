<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
</head>

<body>
    <header>
        <div id="menu-big" class="container-fluid d-flex flex-wrap align-items-center justify-content-around">
            <div id="logo" class="logo">
                <a href="<?php echo get_site_url(); ?>">
                    <img src="<?php echo get_site_icon_url(); ?>" width="79" alt="logo">
                </a>
            </div>
            <div class="flex-wrap">
                <?php

                if (has_nav_menu('header-menu')) :
                    echo wp_nav_menu(array(

                        'theme_location' => 'header-menu',
                        'container'      => 'nav',
                        'menu_class'     => 'menu',
                    ));
                endif;
                ?></div>
            <div class="d-flex flex-nowrap"> <?php
                                                if (has_nav_menu('header-menu-social')) :
                                                    wp_nav_menu(array(

                                                        'theme_location' => 'header-menu-social',
                                                        'container'      => 'nav',
                                                        'menu_class'     => 'menu',
                                                    ));
                                                endif;

                                                ?></div>
            <nav id="menu">
                <?php
                if (has_nav_menu('header-menu')) :
                    echo wp_nav_menu(array(

                        'theme_location' => 'header-menu',
                        'container'      => '',
                        'menu_class'     => 'menu-resp',
                    ));
                endif;
                ?>
            </nav>

            <div id="menu-burger">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>
    </header>