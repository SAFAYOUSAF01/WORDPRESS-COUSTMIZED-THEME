
<?php print_r(get_template_directory_uri());
get_header();
?>
   <body class="size-1520 primary-color-red background-dark">
      <!-- HEADER -->
      <header class="grid">
        <!-- Top Navigation -->
        <nav class="s-12 grid background-none background-primary-hightlight">
           <!-- logo -->
           <a href="<?php echo esc_url(home_url('/')); ?>" class="m-12 l-3 padding-2x logo">
  <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/logo.svg'); ?>" alt="Logo">
</a>

           <div class="top-nav s-12 l-9"> 
              <ul class="top-ul right chevron">
                <li><a href="index.php">Home</a></li>
                <li><a href="about-us.php">About Us</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="contact.php">Contact</a></li>
              </ul>
           </div>
        </nav>
      </header>
      
      <!-- MAIN -->
      <main role="main">
        <!-- TOP SECTION -->
        <section class="grid">
          <!-- Main Carousel -->
          <div class="s-12 margin-bottom carousel-fade-transition owl-carousel carousel-main carousel-nav-white carousel-hide-arrows background-dark">
            
  <?php
    $image_ids = [123, 124, 125]; 

    $texts = [
      [
        'heading' => 'We are Web design Heroes',
        'subheading' => 'Con nonummy sem integer interdum volutpat dis eget eligendi aliquip dolorum magnam.'
      ],
      [
        'heading' => 'Inspired by Technologies',
        'subheading' => 'Con nonummy sem integer interdum volutpat dis eget eligendi aliquip dolorum magnam.'
      ],
      [
        'heading' => 'CSS and HTML is our Playground',
        'subheading' => 'Con nonummy sem integer interdum volutpat dis eget eligendi aliquip dolorum magnam.'
      ]
    ];

    // Loop through the images and texts
    foreach ($image_ids as $index => $image_id) {
      $image_url = wp_get_attachment_image_url($image_id, 'full');
      if (!$image_url) {
        $image_url = get_template_directory_uri() . '/assets/img/carousel-0' . ($index + 1) . '.jpg';
      }
  ?>
    <div class="item background-image" style="background-image:url('<?php echo esc_url($image_url); ?>')">
      <p class="text-padding text-strong text-white text-s-size-30 text-size-60 text-uppercase background-primary"><?php echo esc_html($texts[$index]['heading']); ?></p>
      <p class="text-padding text-size-20 text-dark text-uppercase background-white"><?php echo esc_html($texts[$index]['subheading']); ?></p>
    </div>
  <?php
    }
  ?>
</div>

        </section>
        
        <!-- SECTION 1 --> 
        <section class="grid margin text-center">
          <a href="/" class="s-12 m-6 l-3 padding-2x vertical-center margin-bottom background-red">
            <i class="icon-sli-equalizer text-size-60 text-white center margin-bottom-15"></i>
            <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-30 text-uppercase">Unlimited Color Variants</h3>
          </a>
          <a href="/" class="s-12 m-6 l-3 padding-2x vertical-center margin-bottom background-blue">
            <i class="icon-sli-layers text-size-60 text-white center margin-bottom-15"></i>
            <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-30 text-uppercase">Many Reusable Elements</h3>
          </a>
          
          <!-- Image-->
          <img class="m-12 l-6 l-row-2 margin-bottom" src="<?php echo get_template_directory_uri().'/assets/img/img-06.jpg';?>" alt=""/>
          
          <a href="/" class="s-12 m-6 l-3 padding-2x vertical-center margin-bottom background-orange">
            <i class="icon-sli-diamond text-size-60 text-white center margin-bottom-15"></i>
            <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-30 text-uppercase">Responsive Layoute</h3>
          </a>
          <a href="/" class="s-12 m-6 l-3 padding-2x vertical-center margin-bottom background-aqua">
            <i class="icon-sli-share text-size-60 text-white center margin-bottom-15"></i>
            <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-30 text-uppercase">Clean Modern Code</h3>
          </a>
        </section>
        
        <!-- SECTION 2 -->
        <section class="grid section margin-bottom background-dark">
          <h2 class="s-12 l-6 center text-thin text-size-30 text-white text-uppercase margin-bottom-30">Responsive <b>Parallax Background</b></h2>
          <p class="s-12 l-6 center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
        </section>
        
        <!-- SECTION 3 --> 
        <section class="grid margin">
          <!-- Image-->
          <img class="s-12 m-6 margin-bottom" src="<?php echo get_template_directory_uri(). '/assets/img/img-01.jpg';?>" alt=""/>
        
          <div class="s-12 m-6 padding-2x margin-bottom background-blue">
            <h2 class="text-strong text-size-50 text-line-height-1">Nonummy nibh euismod tincidunt ut laoreet<br> massa nec orci accusamus auctor aute</h2>
            <ul>
              <li>Sed diam nonummy nibh euismod tincidunt ut laoreet</li> 
              <li>Dolore magna aliquam erat volutpat</li>
              <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</li>
              <li>Sed diam nonummy nibh euismod tincidunt ut laoreet</li>
              <li>Dolore magna aliquam erat volutpat</li>
            </ul>
          </div>
        </section>
        
        <!-- SECTION 4 -->
        <h2 class="s-12 text-white text-thin text-size-30 text-white text-uppercase margin-top-bottom-40 center text-center">Top <b>References</b></h2>
        <section class="grid margin">
          <a class="s-12 m-6 margin-bottom" href="gallery.html">
            <img class="full-img" src="<?php echo get_template_directory_uri(). '/assets/img/portfolio/thumb-01.jpg';?>" alt=""/>
          </a>	
          <a class="s-12 m-6 margin-bottom" href="gallery.html">
            <img class="full-img" src="<?php echo get_template_directory_uri(). '/assets/img/portfolio/thumb-02.jpg';?>" alt=""/>
          </a>	
          <a class="s-12 m-6 margin-bottom" href="gallery.html">
            <img class="full-img" src="<?php echo get_template_directory_uri(). '/assets/img/portfolio/thumb-03.jpg';?>" alt=""/>
          </a>	
          <a class="s-12 m-6 margin-bottom" href="gallery.html">
            <img class="full-img" src="<?php echo get_template_directory_uri(). '/assets/img/portfolio/thumb-04.jpg';?>" alt=""/>
          </a>	
        </section>
        
        <!-- SECTION 5 -->
        <section class="grid margin text-center">
          <div class="m-12 l-4 padding-2x background-dark margin-bottom text-right">
            <h3 class="text-strong text-size-25 text-uppercase margin-bottom-10">Let's keep in touch</h3>
            <p>Deleniti pertinacia eu est, te his soluta quaestio pericula illum vulputate lobortis facilisis.</p>
          </div>
          <a href="/" class="s-12 m-6 l-2 padding vertical-center margin-bottom facebook hover-zoom">
             <i class="icon-sli-social-facebook text-size-60 text-white center"></i>
          </a>
          <a href="/" class="s-12 m-6 l-2 padding vertical-center margin-bottom twitter hover-zoom">
            <i class="icon-sli-social-twitter text-size-60 text-white center"></i>
          </a>
          <a href="/" class="s-12 m-6 l-2 padding vertical-center margin-bottom youtube hover-zoom">
            <i class="icon-sli-social-youtube text-size-60 text-white center"></i>
          </a>
          <a href="/" class="s-12 m-6 l-2 padding vertical-center margin-bottom linkedin hover-zoom">
            <i class="icon-sli-social-linkedin text-size-60 text-white center"></i>
          </a>
        </section>
                
      </main>
      
       
      <!-- FOOTER -->
      <footer class="grid">
        <!-- Footer - top -->
        <!-- Image-->
        <img class="s-12 l-3 m-row-3 margin-bottom background-image" src="<?php echo get_template_directory_uri() . '/assets/img/img-04.jpg' ;?>" alt=""></img>

<div class="s-12 m-9 l-3 padding-2x margin-bottom background-dark">

           <h2 class="text-strong text-uppercase">Who We Are?</h2>
           <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
        </div>
        
        <div class="s-12 m-9 l-3 padding-2x margin-bottom background-dark">
           <h2 class="text-strong text-uppercase">Where We Are?</h2>
           <img class="full-img" src="<?php echo get_template_directory_uri(). '/assets/img/map.svg';?>" alt=""/>
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
      <script type="text/javascript" src="/assets/js/responsee.js"></script>
      <script type="text/javascript" src="/assets/owl-carousel/owl.carousel.js"></script>
      <script type="text/javascript" src="/assets/js/template-scripts.js"></script>

      <?php get_footer(); ?>