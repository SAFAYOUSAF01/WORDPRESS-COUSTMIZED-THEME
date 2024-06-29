<?php
// Theme setup
function theme_setup() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('html5', array('search-form'));

    // Register menus
    register_nav_menus(array(
        'top-menu' => __('Top Menu', 'custom-theme'),
    ));
}
add_action('after_setup_theme', 'theme_setup');

// Enqueue styles and scripts
function enqueue_styles_and_scripts() {
    wp_enqueue_style('main-style', get_stylesheet_uri());
    wp_enqueue_style('components-style', get_template_directory_uri() . '/assets/css/components.css');
    wp_enqueue_style('icons-style', get_template_directory_uri() . '/assets/css/icons.css');
    wp_enqueue_style('responsee-style', get_template_directory_uri() . '/assets/css/responsee.css');
    wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/assets/owl-carousel/owl.carousel.css');
    wp_enqueue_style('owl-theme', get_template_directory_uri() . '/assets/owl-carousel/owl.theme.css');
    wp_enqueue_style('template-style', get_template_directory_uri() . '/assets/css/template-style.css');

    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery-1.8.3.min.js', array(), null, true);
    wp_enqueue_script('jquery-ui', get_template_directory_uri() . '/assets/js/jquery-ui.min.js', array('jquery'), null, true);
    wp_enqueue_script('responsee', get_template_directory_uri() . '/assets/js/responsee.js', array('jquery'), null, true);
    wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/assets/owl-carousel/owl.carousel.js', array('jquery'), 2.1);
    wp_enqueue_script('owl-script', get_template_directory_uri() . '/assets/owl-carousel/owl.carousel.min.js', array('jquery'), 2.1);
    wp_enqueue_script('template-scripts', get_template_directory_uri() . '/assets/js/template-scripts.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_styles_and_scripts');

// Handle contact form submission (if needed)
function handle_contact_form() {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = sanitize_text_field($_POST["name"]);
        $email = sanitize_email($_POST["email"]);
        $message = sanitize_textarea_field($_POST["message"]);

        // Do something with the data, like send an email
        wp_mail('you@example.com', 'Contact Form Submission', $message, "From: $name <$email>");

        wp_redirect(home_url('/thank-you/'));
        exit;
    }
}
add_action('admin_post_nopriv_contact_form', 'handle_contact_form');
add_action('admin_post_contact_form', 'handle_contact_form');

// Add settings to WordPress Customizer for stats section
function theme_customizer_register($wp_customize) {
    // Add Stats Section
    $wp_customize->add_section('stats_section', array(
        'title' => __('Stats Section', 'custom-theme'),
        'description' => __('Modify the stats section', 'custom-theme'),
        'priority' => 30,
    ));

    // First Stat
    $wp_customize->add_setting('first_stat_number', array('default' => '1500'));
    $wp_customize->add_setting('first_stat_title', array('default' => 'Ultricies eros sociis'));
    $wp_customize->add_setting('first_stat_description', array('default' => 'Eodem modo typi nonummy maecenas ultricies eros sociis hendrerit dictum.'));
    $wp_customize->add_control('first_stat_number', array(
        'label' => __('First Stat Number', 'custom-theme'),
        'section' => 'stats_section',
        'type' => 'text',
    ));
    $wp_customize->add_control('first_stat_title', array(
        'label' => __('First Stat Title', 'custom-theme'),
        'section' => 'stats_section',
        'type' => 'text',
    ));
    $wp_customize->add_control('first_stat_description', array(
        'label' => __('First Stat Description', 'custom-theme'),
        'section' => 'stats_section',
        'type' => 'textarea',
    ));

    // Second Stat
    $wp_customize->add_setting('second_stat_number', array('default' => '95'));
    $wp_customize->add_setting('second_stat_title', array('default' => 'Magna condimentum suspendisse'));
    $wp_customize->add_setting('second_stat_description', array('default' => 'Duis autem libero ullam magna condimentum suspendisse pellentesque.'));
    $wp_customize->add_control('second_stat_number', array(
        'label' => __('Second Stat Number', 'custom-theme'),
        'section' => 'stats_section',
        'type' => 'text',
    ));
    $wp_customize->add_control('second_stat_title', array(
        'label' => __('Second Stat Title', 'custom-theme'),
        'section' => 'stats_section',
        'type' => 'text',
    ));
    $wp_customize->add_control('second_stat_description', array(
        'label' => __('Second Stat Description', 'custom-theme'),
        'section' => 'stats_section',
        'type' => 'textarea',
    ));

    // Third Stat
    $wp_customize->add_setting('third_stat_number', array('default' => '287'));
    $wp_customize->add_setting('third_stat_title', array('default' => 'Consequat phasellus orci'));
    $wp_customize->add_setting('third_stat_description', array('default' => 'Mirum est notare dolor consequat phasellus orci pellentesque hendrerit.'));
    $wp_customize->add_control('third_stat_number', array(
        'label' => __('Third Stat Number', 'custom-theme'),
        'section' => 'stats_section',
        'type' => 'text',
    ));
    $wp_customize->add_control('third_stat_title', array(
        'label' => __('Third Stat Title', 'custom-theme'),
        'section' => 'stats_section',
        'type' => 'text',
    ));
    $wp_customize->add_control('third_stat_description', array(
        'label' => __('Third Stat Description', 'custom-theme'),
        'section' => 'stats_section',
        'type' => 'textarea',
    ));

    // Fourth Stat
    $wp_customize->add_setting('fourth_stat_number', array('default' => '7'));
    $wp_customize->add_setting('fourth_stat_title', array('default' => 'Augue et venenatis'));
    $wp_customize->add_setting('fourth_stat_description', array('default' => 'Nam liber tempor erat augue et venenatis lorem ipsum dolor si amet.'));
    $wp_customize->add_control('fourth_stat_number', array(
        'label' => __('Fourth Stat Number', 'custom-theme'),
        'section' => 'stats_section',
        'type' => 'text',
    ));
    $wp_customize->add_control('fourth_stat_title', array(
        'label' => __('Fourth Stat Title', 'custom-theme'),
        'section' => 'stats_section',
        'type' => 'text',
    ));
    $wp_customize->add_control('fourth_stat_description', array(
        'label' => __('Fourth Stat Description', 'custom-theme'),
        'section' => 'stats_section',
        'type' => 'textarea',
    ));

    // Team Section Title
    $wp_customize->add_setting('team_section_title', array('default' => 'Our <b>Dream Team</b>'));
    $wp_customize->add_control('team_section_title', array(
        'label' => __('Team Section Title', 'custom-theme'),
        'section' => 'title_tagline',
        'type' => 'text',
    ));

    // Who We Are Title and Description
    $wp_customize->add_setting('who_we_are_title', array('default' => 'Who We Are?'));
    $wp_customize->add_setting('who_we_are_description', array('default' => 'Lorem ip-sum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.'));
    $wp_customize->add_control('who_we_are_title', array(
        'label' => __('Who We Are Title', 'custom-theme'),
        'section' => 'title_tagline',
        'type' => 'text',
    ));
    $wp_customize->add_control('who_we_are_description', array(
        'label' => __('Who We Are Description', 'custom-theme'),
        'section' => 'title_tagline',
        'type' => 'textarea',
    ));

    // Where We Are Title
    $wp_customize->add_setting('where_we_are_title', array('default' => 'Where We Are?'));
    $wp_customize->add_control('where_we_are_title', array(
        'label' => __('Where We Are Title', 'custom-theme'),
        'section' => 'title_tagline',
        'type' => 'text',
    ));
}

add_action('customize_register', 'theme_customizer_register');
?>
