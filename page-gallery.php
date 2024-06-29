<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class('size-1520 primary-color-red background-dark'); ?>>

    <?php get_header(); ?>

    <!-- HEADER -->
    <header class="grid">
        <!-- Top Navigation -->
        <nav class="s-12 grid background-none background-primary-hightlight">
            <!-- logo -->
            <a href="<?php echo home_url(); ?>" class="m-12 l-3 padding-2x logo">
                <img src="<?php echo get_template_directory_uri(). '/img/logo.svg'; ?>" alt="Logo">
            </a>
            <div class="top-nav s-12 l-9">
                <?php
                wp_nav_menu(array()
                    'theme_location' => 'top-menu',
                    'container' => false,
                    'menu_class' => 'top-ul right chevron'
                );
                ?>
            </div>
        </nav>
    </header>

    <!-- MAIN -->
    <main role="main">
        <!-- TOP SECTION -->
        <header class="grid">
            <div class="s-12 padding-2x">
                <h1 class="text-strong text-white text-center center text-size-60 text-uppercase margin-bottom-20">Our References</h1>
                <p class="text-size-20 text-white text-center center text-uppercase">Con nonummy sem integer interdum volutpat dis eget eligendi aliquip dolorum magnam. Iriure duis autem vel<br> eum dolor in hendrerit in vulputate velit esse molestie consequat.</p>
            </div>
        </header>

        <section class="grid margin">
            <img class="s-12 m-6 margin-bottom" src="<?php echo get_template_directory_uri() . '/assets/img/portfolio/thumb-01.jpg' ;?>" alt="Gallery Image 1">
            <img class="s-12 m-6 margin-bottom" src="<?php echo get_template_directory_uri() . '/assets/img/portfolio/thumb-02.jpg' ;?>" alt="Gallery Image 2">
            <img class="s-12 m-6 margin-bottom" src="<?php echo get_template_directory_uri() . '/assets/img/portfolio/thumb-03.jpg' ;?>" alt="Gallery Image 3">
            <img class="s-12 m-6 margin-bottom" src="<?php echo get_template_directory_uri() . '/assets/img/portfolio/thumb-04.jpg' ;?>" alt="Gallery Image 4">
            <img class="s-12 m-6 margin-bottom" src="<?php echo get_template_directory_uri() . '/assets/img/portfolio/thumb-05.jpg' ;?>" alt="Gallery Image 5">
            <img class="s-12 m-6 margin-bottom" src="<?php echo get_template_directory_uri() . '/assets/img/portfolio/thumb-06.jpg' ;?>" alt="Gallery Image 6">
            <img class="s-12 m-6 margin-bottom" src="<?php echo get_template_directory_uri() . '/assets/img/portfolio/thumb-07.jpg' ;?>" alt="Gallery Image 7">
            <img class="s-12 m-6 margin-bottom" src="<?php echo get_template_directory_uri() . '/assets/img/portfolio/thumb-08.jpg' ;?>" alt="Gallery Image 8">
        </section>

    </main>

    <!-- FOOTER -->
    <footer class="grid footer">
        <!-- Footer - top -->
        <!-- Image-->
        <div class="s-12 l-3 m-row-3 margin-bottom background-image" style="background-image:url(<?php echo get_template_directory_uri(), '/assets/img/img-04.jpg'; ?>"></div>

        <div class="s-12 m-9 l-3 padding-2x margin-bottom background-dark">
            <h2 class="text-strong text-uppercase">Who We Are?</h2>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
        </div>

        <div class="s-12 m-9 l-3 padding-2x margin-bottom background-dark">
            <h2 class="text-strong text-uppercase">Where We Are?</h2>
            <img class="full-img" src="<?php echo get_template_directory_uri()'/img/map.svg';?>" alt="Map">
        </div>

        <div class="s-12 m-9 l-3 padding-2x margin-bottom background-dark">
            <h2 class="text-strong text-uppercase">Contact Us</h2>
            <p><b class="text-primary margin-right-10">P</b> 0800 4521 800 50</p>
            <p><b class="text-primary margin-right-10">M</b> <a class="text-primary-hover" href="mailto:contact@sampledomain.com">contact@sampledomain.com</a></p>
            <p><b class="text-primary margin-right-10">M</b> <a class="text-primary-hover" href="mailto:office@sampledomain.com">office@sampledomain.com</a></p>
        </div>

        <!-- Footer - bottom -->
        <div class="s-12 text-center margin-bottom">
            <p class="text-size-12">&copy; <?php echo date('Y'); ?> Custom Theme. All rights reserved.</p>
            <p class="text-size-12">All images have been purchased from Bigstock. Do not use the images in your website.</p>
            <p><a class="text-size-12 text-primary-hover" href="http://www.myresponsee.com" title="Responsee - lightweight responsive framework">Design and coding by Responsee Team</a></p>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>
