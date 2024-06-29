<?php
/*
Template Name: Services Page
*/
get_header();
?>
<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title><?php wp_title(''); ?></title>
      <?php wp_head(); ?>
   </head>

   <body <?php body_class('size-1520 primary-color-red background-dark'); ?>>
      <!-- HEADER -->
      <header class="grid">
         <!-- Top Navigation -->
         <nav class="s-12 grid background-none background-primary-hightlight">
            <!-- logo -->
            <a href="<?php echo esc_url(home_url('/')); ?>" class="m-12 l-3 padding-2x logo">
               <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="Logo">
            </a>
            <div class="top-nav s-12 l-9">
               <?php
               // Output the main menu using WordPress menu function
               wp_nav_menu(array(
                  'theme_location' => 'top-menu',
                  'menu_class' => 'top-ul right chevron',
               ));
               ?>
            </div>
         </nav>
      </header>
      
      <!-- MAIN -->
      <main role="main">
         <!-- TOP SECTION -->
         <header class="grid">
            <div class="s-12 padding-2x">
               <h1 class="text-strong text-white text-center center text-size-60 text-uppercase margin-bottom-20"><?php the_title(); ?></h1>
               <p class="text-size-20 text-white text-center center text-uppercase"><?php echo get_the_excerpt(); ?></p>
            </div>
         </header>
  
         <!-- SECTION 1 -->
         <section class="grid">
            <div class="m-12 l-6 padding-2x background-white">
               <p class="text-strong text-size-80 text-red">01</p>
               <h2 class="text-size-50 text-line-height-1 text-dark"><b>Nonummy nibh euismod tincidunt ut laoreet</b></h2>
               <p><?php echo get_post_meta(get_the_ID(), 'section_1_content', true); ?></p>
            </div>
            <!-- Image-->
            <img class="m-12 l-6" src="<?php echo get_template_directory_uri(); ?>/assets/img/img-06.jpg" alt="Image">
         </section>
        
         <!-- SECTION 2 -->
         <section class="grid">
            <!-- Image-->
            <img class="m-12 l-6" src="<?php echo get_template_directory_uri(); ?>/assets/img/img-01.jpg" alt="Image">
            <div class="m-12 l-6 padding-2x background-dark">
               <p class="text-strong text-size-80 text-red">02</p>
               <h2 class="text-size-50 text-line-height-1 margin-bottom-30 text-white"><b>Libero malesuada varius leo mollis tincidunt</b></h2>
               <p><?php echo get_post_meta(get_the_ID(), 'section_2_content', true); ?></p>
            </div>
         </section>
        
         <!-- SECTION 3 -->
         <section class="grid">
            <div class="m-12 l-6 padding-2x background-aqua">
               <p class="text-strong text-size-80 text-white">03</p>
               <h2 class="text-size-50 text-line-height-1 text-white"><b>Morbi hymenaeos rhoncus ridiculus</b></h2>
               <h3>Nonummy nibh euismod tincidunt ut laoreet</h3>
               <p><?php echo get_post_meta(get_the_ID(), 'section_3_content', true); ?></p>
            </div>
            <!-- Image-->
            <img class="m-12 l-6" src="<?php echo get_template_directory_uri(); ?>/assets/img/img-05.jpg" alt="Image">
         </section>
        
         <!-- SECTION 6 -->
         <section class="grid margin-bottom">
            <div class="s-12 padding-2x background-dark">
               <a href="<?php echo esc_url(home_url('/contact')); ?>" class="s-12 m-9 l-3 center button text-size-20 text-white background-red">CONTACT US</a>
            </div>
         </section>
      </main>
      
      <!-- FOOTER -->
      <footer class="grid">
         <!-- Footer - top -->
         <!-- Image-->
         <div class="s-12 l-3 m-row-3 margin-bottom background-image" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img/img-04.jpg)"></div>
        
         <div class="s-12 m-9 l-3 padding-2x margin-bottom background-dark">
            <h2 class="text-strong text-uppercase"><?php echo get_theme_mod('who_we_are_title', 'Who We Are?'); ?></h2>
            <p><?php echo get_theme_mod('who_we_are_description', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.'); ?></p>
         </div>
        
         <div class="s-12 m-9 l-3 padding-2x margin-bottom background-dark">
            <h2 class="text-strong text-uppercase"><?php echo get_theme_mod('where_we_are_title', 'Where We Are?'); ?></h2>
            <img class="full-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/map.svg" alt="Map"/>
         </div>
        
         <div class="s-12 m-9 l-3 padding-2x margin-bottom background-dark">
            <h2 class="text-strong text-uppercase">Contact Us</h2>
            <p><b class="text-primary margin-right-10">P</b> 0800 4521 800 50</p>
            <p><b class="text-primary margin-right-10">M</b> <a class="text-primary-hover" href="mailto:contact@sampledomain.com">contact@sampledomain.com</a></p>
            <p><b class="text-primary margin-right-10">M</b> <a class="text-primary-hover" href="mailto:office@sampledomain.com">office@sampledomain.com</a></p>
         </div>
        
         <!-- Footer - bottom -->
         <div class="s-12 text-center margin-bottom">
            <p class="text-size-12">Copyright <?php echo date('Y'); ?>, Vision Design - graphic zoo</p>
            <p class="text-size-12">All images have been purchased from Bigstock. Do not use the images in your website.</p>
            <p><a class="text-size-12 text-primary-hover" href="http://www.myresponsee.com" title="Responsee - lightweight responsive framework">Design and coding by Responsee Team</a></p>
         </div>
      </footer>

      <?php wp_footer(); ?>
   </body>
</html>
<main role="main" class="grid main-content">
    <h1>Our Services</h1>
    <p>We offer a variety of services to meet your needs.</p>
</main>
<?php get_footer(); ?>
