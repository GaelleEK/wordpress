<?php
/**
 * Plugin Name: Demo plugin
 */
//Prectection du chemien dans le navigateur
defined('ABSPATH') or die('rien à voir');

register_activation_hook(__FILE__, function () {
    touch(__DIR__ . '/demo');
});

register_deactivation_hook(__FILE__, function () {
    unlink(__DIR__ . '/demo');
});

add_action('init', function () {
    register_post_type('bien', [
        'label' => 'Bien',
        'public' => true,
        'menu_position' => 3,
        'menu_icon' => 'dashicons-building',
        'supports' => ['title', 'editor', 'thumbnail'],
        'show_in-rest' => true,
        'has_archive' => true
    ]);
});
