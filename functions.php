<?php
require_once(get_theme_file_path('/inc/kirki-customizer.php'));
function  stack_setup_theme()
{
    load_theme_textdomain('stack', get_template_directory_uri() . '/languages');

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails', array('post', 'page'));

    register_nav_menus(array(
        'main-menu' => __('Main Menu', 'stack'),

    ));
}
add_action('after_setup_theme', 'stack_setup_theme');

function stack_scripts()
{
    wp_enqueue_style('stylesheet', get_stylesheet_uri());
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style('fonts', get_template_directory_uri() . '/assets/fonts/line-icons.css');
    // wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css');
    wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css');

    wp_enqueue_style('slicknav', get_template_directory_uri() . '/assets/css/slicknav.css');
    wp_enqueue_style('carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css');
    wp_enqueue_style('owl-theme', get_template_directory_uri() . '/assets/css/owl.theme.css');
    wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css');
    wp_enqueue_style('nivo-lightbo', get_template_directory_uri() . '/assets/css/nivo-lightbox.css');
    wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.css');
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css');
    wp_enqueue_style('responsive', get_template_directory_uri() . '/assets/css/responsive.css');
    // js 
    wp_enqueue_script('jquery-min', get_template_directory_uri() . '/assets/js/jquery-min.js', array('jquery'), '', true);
    wp_enqueue_script('popper', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery'), '', true);
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '', true);
    wp_enqueue_script('carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '', true);
    wp_enqueue_script('mixitup', get_template_directory_uri() . '/assets/js/jquery.mixitup.js', array('jquery'), '', true);
    wp_enqueue_script('wow', get_template_directory_uri() . '/assets/js/wow.js', array('jquery'), '', true);
    wp_enqueue_script('jquery-nav', get_template_directory_uri() . '/assets/js/jquery.nav.js', array('jquery'), '', true);
    wp_enqueue_script('scrolling-nav', get_template_directory_uri() . '/assets/js/scrolling-nav.js', array('jquery'), '', true);
    wp_enqueue_script('easing', get_template_directory_uri() . '/assets/js/jquery.easing.min.js', array('jquery'), '', true);
    wp_enqueue_script('counterup', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array('jquery'), '', true);
    wp_enqueue_script('nivo-lightbox', get_template_directory_uri() . '/assets/js/nivo-lightbox.js', array('jquery'), '', true);
    wp_enqueue_script('magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array('jquery'), '', true);
    wp_enqueue_script('waypoints', get_template_directory_uri() . '/assets/js/waypoints.min.js', array('jquery'), '', true);
    wp_enqueue_script('slicknav', get_template_directory_uri() . '/assets/js/jquery.slicknav.js', array('jquery'), '', true);
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '', true);
}
add_action('wp_enqueue_scripts', 'stack_scripts');

// ======================= Comment form rearrange ====================
function move_comment_field($fields)
{

    $comment_field = $fields['comment'];
    unset($fields['comment']);
    $fields['comment'] = $comment_field;

    $comment_field = $fields['cookies'];
    unset($fields['cookies']);
    $fields['cookies'] = $comment_field;
    return $fields;
}
add_filter('comment_form_fields', 'move_comment_field');

// Change default fields, add "placeholder" and change type attributes.
function Halim_comment_placeholders($fields)
{
    $fields['author'] = str_replace(
        '<input',
        '<input placeholder="'
            . _x(
                'Name',
                'halim'
            )
            . '"',
        $fields['author']
    );
    $fields['email'] = str_replace(
        '<input id="email" name="email" type="text"',
        /* We use a proper type attribute to make use of the browser’s
         * validation, and to get the matching keyboard on smartphones.
         */
        '<input type="email" placeholder="Email"  id="email" name="email"',
        $fields['email']
    );
    $fields['url'] = str_replace(
        '<input id="url" name="url" type="text"',
        // Again: a better 'type' attribute value.
        '<input placeholder="Website" id="url" name="url" type="url"',
        $fields['url']
    );


    return $fields;
}
add_filter('comment_form_default_fields', 'Halim_comment_placeholders');

//  add placeholder text to comment field
function placeholder_comment_form_field($fields)
{
    $replace_comment = __('Your Comment', 'halim');

    $fields['comment_field'] = '<p class="comment-form-comment"><label for="comment">' . _x('Comment', 'noun') .
        '</label><textarea id="comment" name="comment" cols="45" rows="6" placeholder="' . $replace_comment . '" aria-required="true"></textarea></p>';

    return $fields;
}
add_filter('comment_form_defaults', 'placeholder_comment_form_field', 20);

function stack_theme_widget_init()
{
    // Right sidebar
    register_sidebar(array(
        'name'           => __('Right sidebar', 'textdomain'),
        'id'             => 'right-sidebar',
        'description'    => __('Widgets in this area will be shown on the right side', 'halim'),
        'before_widget'  => '<div class="widgets">',
        'after_widget'   => '</div>',
        'before_title'   => '<h4>',
        'after_title'    => '</h4>',
    ));
}

add_action('widgets_init', 'stack_theme_widget_init');
