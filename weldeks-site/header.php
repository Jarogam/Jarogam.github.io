<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weldeks</title>
    <?php wp_head(); ?>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body <?php body_class(); ?>>
    <header id="wdks_header" class="wdks_header absolute w-full top-12 z-20">
        <div class="container mx-auto xl-auto flex ">

            <div id="wdks_header_wrapper" class="wdks_header_wrapper flex justify-between w-full backdrop-blur-md bg-white/30 p-2 rounded-full">

                <div class="logo w-64">
                    <a href="/">
                        <img id="header_logo_img" src="/wp-content/themes/weldeks/assets/img/logo.svg" alt="Logo" class="max-w-[50%] p-2">
                    </a>
                </div>

                <div class="wdks_header_nav_controllers flex justify-between items-center">
                    <nav class="wdks_in_header_menu flex justify-end items-center">
                        <?php
                        $args = array(
                            'theme_location' => 'company-menu',
                            'container' => false,
                            'menu_id' => 'primary-menu',
                            'menu_class' => 'menu-list flex wdks_header_menu',
                            'link_before' => '<span class="menu-link mx-5 text-2xl">',
                            'link_after' => '</span>',
                        );

                        wp_nav_menu($args);
                        ?>
                    </nav>

                    <a href="#" class="menu-link menu-link__portfolio mx-5 mx-2 text-2xl">
                        <img src="/wp-content/themes/weldeks/assets/img/Vector.svg" alt="icon">
                    </a>
                    <div class="burger relative z-10 mr-3">
                        <span></span>
                    </div>
                </div>
            </div>


            <nav class="overlay--open">
                <div class="overlay--open__logo">
                    <a href="#">
                        <img src="/wp-content/themes/weldeks/assets/img/LogoW.svg" alt="Logo">
                    </a>
                </div>
                <div class="overlay--open__links">
                    <h2>Company</h2>

                    <?php wp_nav_menu( array( 'theme_location' => 'company-menu' ) ); ?>
                </div>
                <div class="overlay--open__links">
                    <h2>Careers</h2>
                    
                    <?php wp_nav_menu( array( 'theme_location' => 'careers-menu' ) ); ?>
                </div>
                <div class="overlay--open__links">
                    <h2>Services</h2>
                    
                    <?php wp_nav_menu( array( 'theme_location' => 'services-menu' ) ); ?>
                </div>
                <div class="overlay--open__links">
                    <h2>Register your interest</h2>
                    <a href="#" class="bg-btn">Look to hire</a>
                    <a href="contacts/#form-contact" class="transparent-btn">Register your interest</a>
                </div>


            </nav>
            <div class="overlay"></div>
        </div>
    </header>