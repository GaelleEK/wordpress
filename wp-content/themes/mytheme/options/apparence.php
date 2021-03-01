<?php
add_action('customize_register', function (WP_Customize_Manager $manager) {

    $manager->add_section('montheme_apparence', [
        'title' => 'Personnalisation de l\'apparence',
    ]);

    $manager->add_setting('header_background', [
        'default' => '#FF0000',
        'transport' => 'postMessage',
        'sanitize_callback' => 'sanitize_hex_color'
    ]);
    $manager->add_control(new WP_Customize_Color_Control($manager, 'header_background', [
        'section' => 'montheme_apparence',
        'label' => 'Couleur de l\'entête'
    ]));
// plus d'infos voir 'https://codex.wordpress.org/Plugin_API/Action_Reference/customize_register'
    //https://developer.wordpress.org/reference/hooks/customize_register/
    //https://developer.wordpress.org/themes/customize-api/customizer-objects/#controls
});

add_action('customize_preview_init', function () {
    wp_enqueue_script('montheme_apparence', get_template_directory_uri() . '/assets/apparence.js', ['jquery', 'customize_preview'], '', true);
});