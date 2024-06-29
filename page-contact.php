<?php get_header(); ?>

<body class="size-1520 primary-color-red background-dark">
    <!-- HEADER -->
    <header class="grid">
        <!-- Top Navigation -->
        <nav class="s-12 grid background-none background-primary-hightlight">
            <!-- logo -->
            <a href="<?php echo home_url(); ?>" class="m-12 l-3 padding-2x logo">
                <img src="<?php echo get_template_directory_uri(). '/assets/img/logo.svg'; ?>" alt="Logo">
            </a>
            <div class="top-nav s-12 l-9">
                <ul class="top-ul right chevron">
                    <li><a href="<?php echo home_url(); ?>">Home</a></li>
                    <li><a href="<?php echo home_url('/about-us'); ?>">About Us</a></li>
                    <li><a href="<?php echo home_url('/services'); ?>">Services</a></li>
                    <li><a href="<?php echo home_url('/gallery'); ?>">Gallery</a></li>
                    <li><a href="<?php echo home_url('/contact'); ?>">Contact</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- MAIN -->
    <main role="main">
        <!-- TOP SECTION -->
        <header class="grid">
            <div class="s-12 padding-2x">
                <h1 class="text-strong text-white text-center center text-size-60 text-uppercase margin-bottom-20">Contact Us</h1>
            </div>
        </header>

        <!-- SECTION 1 -->
        <section class="grid margin-bottom-20">
            <div class="m-12 l-7 center">
                <!-- Contact Information -->
                <div class="s-12 padding-2x background-white text-center">
                    <h2 class="text-size-20 margin-bottom-10 text-strong text-uppercase text-dark">Company Address</h2>
                    <p>Aviation Way 99</p>
                    <p>Los Angeles, USA</p>

                    <h2 class="text-size-20 margin-top-30 margin-bottom-10 text-strong text-uppercase text-dark">E-mail</h2>
                    <p><a class="text-primary-hover" href="mailto:contact@sampledomain.com">contact@sampledomain.com</a></p>
                    <p><a class="text-primary-hover" href="mailto:office@sampledomain.com">office@sampledomain.com</a></p>

                    <h2 class="text-size-20 margin-top-30 margin-bottom-10 text-strong text-uppercase text-dark">Phone Numbers</h2>
                    <p>0800 4521 800 50</p>
                    <p>0450 5896 625 16</p>
                    <p>0798 6546 465</p>
                </div>

                <iframe class="s-12 center" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d408353.5714751251!2d-118.71693940358037!3d33.79914670853249!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2b4655ccd2001%3A0xa7f54b3bb5afde44!2s99+Aviation+Blvd%2C+Manhattan+Beach%2C+CA+90266%2C+Spojen%C3%A9+%C5%A1t%C3%A1ty+americk%C3%A9!5e0!3m2!1ssk!2ssk!4v1558635197012!5m2!1ssk!2ssk" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </section>
    </main>

    <!-- FOOTER -->
    <footer class="grid">
        <!-- Footer - top -->
        <!-- Image -->
        <div class="s-12 l-3 m-row-3 margin-bottom background-image" style="background-image:url(<?php echo get_template_directory_uri(). '/assets/img/img-04.jpg)' ;?>"></div>

        <div class="s-12 m-9 l-3 padding-2x margin-bottom background-dark">
            <h2 class="text-strong text-uppercase">Who We Are?</h2>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
        </div>

        <div class="s-12 m-9 l-3 padding-2x margin-bottom background-dark">
            <h2 class="text-strong text-uppercase">Where We Are?</h2>
            <img class="full-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/map.svg" alt="Map">
        </div>

        <div class="s-12 m-9 l-3 padding-2x margin-bottom background-dark">
            <h2 class="text-strong text-uppercase">Contact Us</h2>
            <p><b class="text-primary margin-right-10">P</b> 0800 4521 800 50</p>
            <p><b class="text-primary margin-right-10">M</b> <a class="text-primary-hover" href="mailto:contact@sampledomain.com">contact@sampledomain.com</a></p>
            <p><b class="text-primary margin-right-10">M</b> <a class="text-primary-hover" href="mailto:office@sampledomain.com">office@sampledomain.com</a></p>
        </div>

        <!-- Footer - bottom -->
        <div class="s-12 text-center margin-bottom">
            <p class="text-size-12">Copyright 2019, Vision Design - graphic zoo</p>
            <p class="text-size-12">All images have been purchased from Bigstock. Do not use the images in your website.</p>
            <p><a class="text-size-12 text-primary-hover" href="http://www.myresponsee.com" title="Responsee - lightweight responsive framework">Design and coding by Responsee Team</a></p>
        </div>
    </footer>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(). '/assets/js/responsee.js' ;?>"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(). '/assets/owl-carousel/owl.carousel.js' ;?>"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(). '/assets/js/template-scripts.js' ;?>"></script>
    <?php get_footer(); ?>
</body>
</html>
