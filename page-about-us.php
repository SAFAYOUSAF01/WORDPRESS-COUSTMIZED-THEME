<?php get_header(); ?>

<body <?php body_class('size-1520 primary-color-red background-dark'); ?>>
   <!-- HEADER -->
   <header class="grid">
      <!-- Top Navigation -->
      <nav class="s-12 grid background-none background-primary-hightlight">
         <!-- logo -->
         <a href="<?php echo esc_url(home_url('/')); ?>" class="m-12 l-3 padding-2x logo">
            <img src="<?php echo get_template_directory_uri(). '/assets/img/logo.svg'; ?>" alt="Logo">
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
            <?php
            // Start the loop.
            if ( have_posts() ) :
               while ( have_posts() ) :
                  the_post();
                  ?>
                  <h2 class="text-dark">
                  <?php 
                  if (function_exists('the_field')) {
                     the_field('section_1_title'); 
                  } else {
                     echo 'Default Section 1 Title';
                  }
                  ?>
                  </h2>
                  <p>
                  <?php 
                  if (function_exists('the_field')) {
                     the_field('section_1_content'); 
                  } else {
                     echo 'Default Section 1 Content';
                  }
                  ?>
                  </p>
                  <h2 class="text-dark">
                  <?php 
                  if (function_exists('the_field')) {
                     the_field('section_2_title'); 
                  } else {
                     echo 'Default Section 2 Title';
                  }
                  ?>
                  </h2>
                  <p>
                  <?php 
                  if (function_exists('the_field')) {
                     the_field('section_2_content'); 
                  } else {
                     echo 'Default Section 2 Content';
                  }
                  ?>
                  </p>
                  <?php
               // End the loop.
               endwhile;
            endif;
            ?>
         </div>
      </section>
   </main>

   <!-- Image -->
   <img class="l-6 hide-s hide-m" src="<?php echo get_template_directory_uri(). '/assets/img/img-01.jpg';?>" alt="Image"/>

   <!-- SECTION 2 -->
   <section class="grid margin margin-bottom padding-2x background-primary">
      <div class="s-12 m-6 l-3">
         <span class="timer text-size-50 text-white text-strong"><?php echo get_theme_mod('first_stat_number', '1500'); ?></span>
         <h3 class="text-uppercase text-strong"><?php echo get_theme_mod('first_stat_title', 'Ultricies eros sociis'); ?></h3>
         <p class="text-size-16 margin-m-bottom-20"><?php echo get_theme_mod('first_stat_description', 'Eodem modo typi nonummy maecenas ultricies eros sociis hendrerit dictum.'); ?></p>
      </div>

      <div class="s-12 m-6 l-3">
         <span class="timer text-size-50 text-white text-strong"><?php echo get_theme_mod('second_stat_number', '95'); ?></span> <span class="text-size-50 text-white text-strong">%</span>
         <h3 class="text-uppercase text-strong"><?php echo get_theme_mod('second_stat_title', 'Magna condimentum suspendisse'); ?></h3>
         <p class="text-size-16 margin-m-bottom-20"><?php echo get_theme_mod('second_stat_description', 'Duis autem libero ullam magna condimentum suspendisse pellentesque.'); ?></p>
      </div>

      <div class="s-12 m-6 l-3">
         <span class="timer text-size-50 text-white text-strong"><?php echo get_theme_mod('third_stat_number', '287'); ?></span>
         <h3 class="text-uppercase text-strong"><?php echo get_theme_mod('third_stat_title', 'Consequat phasellus orci'); ?></h3>
         <p class="text-size-16 margin-m-bottom-20"><?php echo get_theme_mod('third_stat_description', 'Mirum est notare dolor consequat phasellus orci pellentesque hendrerit.'); ?></p>
      </div>

      <div class="s-12 m-6 l-3">
         <span class="timer text-size-50 text-white text-strong"><?php echo get_theme_mod('fourth_stat_number', '7'); ?></span> <span class="text-size-50 text-white text-strong">million</span>
         <h3 class="text-uppercase text-strong"><?php echo get_theme_mod('fourth_stat_title', 'Augue et venenatis'); ?></h3>
         <p class="text-size-16 margin-m-bottom-20"><?php echo get_theme_mod('fourth_stat_description', 'Nam liber tempor erat augue et venenatis lorem ipsum dolor si amet.'); ?></p>
      </div>
   </section>

   <!-- SECTION 3 -->
   <section class="grid margin">
      <h2 class="s-12 text-white text-thin text-size-30 text-white text-uppercase margin-top-bottom-20 center text-center"><?php echo get_theme_mod('team_section_title', 'Our <b>Dream Team</b>'); ?></h2>

      <?php
      // Define an array of team members
      $team_members = array(
         array(
            'name' => 'Frank Star',
            'position' => 'Boss',
            'image' => get_template_directory_uri() . '/assets/img/team-01.jpg'
         ),
         array(
            'name' => 'Jane Naismith',
            'position' => 'Graphic Designer',
            'image' => get_template_directory_uri() . '/assets/img/team-02.jpg'
         ),
         array(
            'name' => 'Mark Stoner',
            'position' => 'Web Designer',
            'image' => get_template_directory_uri() . '/assets/img/team-03.jpg'
         ),
         array(
            'name' => 'Steve Carpenter',
            'position' => 'Web Developer',
            'image' => get_template_directory_uri() . '/assets/img/team-04.jpg'
         ),
         array(
            'name' => 'Steff Kingston',
            'position' => 'Account Manager',
            'image' => get_template_directory_uri() . '/assets/img/team-05.jpg'
         ),
         array(
            'name' => 'John Sandman',
            'position' => 'Account Manager',
            'image' => get_template_directory_uri() . '/assets/img/team-06.jpg'
         )
      );

      foreach ($team_members as $member) : ?>
         <div class="s-12 m-6 l-2 margin-bottom">
            <img src="<?php echo esc_url($member['image']); ?>" alt="<?php echo esc_attr($member['name']); ?>"/>
            <h4 class="background-primary padding text-strong"><?php echo esc_html($member['name']); ?></h4>
            <p class="margin-bottom-10 text-primary text-uppercase"><?php echo esc_html($member['position']); ?></p>
         </div>
      <?php endforeach; ?>
   </section>
</main>

<!-- FOOTER -->
<footer class="grid">
   <!-- Footer - top -->
   <!-- Image -->
   <div class="s-12 l-3 m-row-3 margin-bottom background-image" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img/img-04.jpg)"></div>

   <div class="s-12 m-9 l-3 padding-2x margin-bottom background-dark">
      <h2 class="text-strong text-uppercase"><?php echo get_theme_mod('who_we_are_title', 'Who We Are?'); ?></h2>
      <p><?php echo get_theme_mod('who_we_are_description', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.'); ?></p>
   </div>

   <div class="s-12 m-9 l-3 padding-2x margin-bottom background-dark">
      <h2 class="text-strong text-uppercase"><?php echo get_theme_mod('where_we_are_title', 'Where We Are?'); ?></h2>
      <img class="full-img" src="<?php echo get_template_directory_uri(). '/assets/img/map.svg' ;?>" alt="Map"/>
   </div>

   <div class="s-12 m-9 l-3 padding-2x margin-bottom background-dark">
      <!-- Add any other content here -->
   </div>
</footer>
<?php get_footer(); ?>
