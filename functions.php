<?php
// ScholarPath India — Child Theme Functions

// 1. Enqueue child theme styles
add_action('wp_enqueue_scripts', 'scholarpath_child_enqueue');
function scholarpath_child_enqueue() {
    wp_enqueue_style(
        'child-style',
        get_stylesheet_uri(),
        array('generate-style'),
        wp_get_theme()->get('Version')
    );
}

// 2. Remove sidebar completely on front page
add_action('get_header', 'sp_remove_sidebar_front');
function sp_remove_sidebar_front() {
    if (is_front_page()) {
        remove_action('generate_after_primary_content_area', 'generate_construct_sidebars');
        add_filter('generate_sidebar_layout', function() { return 'no-sidebar'; }, 999);
        add_filter('generate_do_sidebar', '__return_false', 999);
    }
}

// 3. Remove page title on front page
add_filter('generate_show_title', function($show) {
    if (is_front_page()) return false;
    return $show;
}, 999);

// 4. Full width content on front page
add_filter('body_class', function($classes) {
    if (is_front_page()) {
        $classes[] = 'sp-front-page';
    }
    return $classes;
});