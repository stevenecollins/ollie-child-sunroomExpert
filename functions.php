<?php

/**
 * Functions for the Ollie Child Theme
 */

if (! defined('ABSPATH')) {
    exit; // Prevent direct access.
}

/**
 * Enqueue parent and child theme styles.
 */
function ollie_child_enqueue_styles(): void
{

    // 1. Parent theme handle (Ollie uses "ollie-style" internally)
    $parent_handle = 'ollie-style';

    // 2. Load parent stylesheet
    wp_enqueue_style(
        $parent_handle,
        get_template_directory_uri() . '/style.css',
        array(),
        wp_get_theme('ollie')->get('Version')
    );

    // 3. Load child stylesheet
    wp_enqueue_style(
        'ollie-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array($parent_handle), // ensure parent loads first
        wp_get_theme()->get('Version')
    );
}
add_action('wp_enqueue_scripts', 'ollie_child_enqueue_styles');
