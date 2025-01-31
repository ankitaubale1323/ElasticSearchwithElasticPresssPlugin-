<?php
function uibyperacto_enqueue_styles() {
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'uibyperacto_enqueue_styles');

// Register Custom Navigation Walker
// require_once get_template_directory() . '/wp_bootstrap_navwalker.php'; // Assuming you want to use a custom nav walker for Bootstrap.
function uibyperacto_setup() {
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'uibyperacto'),
    ));
}

add_action('after_setup_theme', 'uibyperacto_setup');

add_filter( 'ep_index_settings', 'custom_ep_index_settings' );

function custom_ep_index_settings( $settings ) {
    $settings['settings']['analysis']['tokenizer']['edge_ngram_tokenizer'] = [
        'type' => 'edge_ngram',
        'min_gram' => 3, // Start matching from 3 characters
        'max_gram' => 25, // Max characters to match
        'token_chars' => ['letter', 'digit']
    ];

    $settings['settings']['analysis']['filter']['lowercase'] = [
        'type' => 'lowercase',
    ];

    $settings['settings']['analysis']['analyzer']['edge_ngram_analyzer'] = [
        'type' => 'custom',
        'tokenizer' => 'edge_ngram_tokenizer',
        'filter' => ['lowercase']
    ];

    return $settings;
}
add_filter( 'ep_post_match_fuzziness', '__return_zero' );