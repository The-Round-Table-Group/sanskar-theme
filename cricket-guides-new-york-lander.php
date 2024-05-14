<?php
// Template Name: CG Lander - New York
$context = Timber::get_context();
$post = Timber::get_post();
$context['post'] = $post;

// New York Main Feature
$context['new_york_main_feature'] = Timber::get_posts([
    'post_type'      => 'cricket-guide',
    'posts_per_page' => 1,
    'post_status'    => 'publish',
    'order'          => 'DESC',
    'orderby'        => 'date',
    'tax_query'      => [[
        'taxonomy' => 'cricket-guide-tax',
        'field'    => 'slug',
        'terms'    => ['new-york', 'main-feature']
    ]]
]);

// New York Guides
$context['new_york_guides'] = Timber::get_posts([
    'post_type'      => 'cricket-guide',
    'posts_per_page' => 6,
    'post_status'    => 'publish',
    'order'          => 'DESC',
    'orderby'        => 'date',
    'tax_query'      => [[
        'taxonomy' => 'cricket-guide-tax',
        'field'    => 'slug',
        'terms'    => ['new-york', 'featured']
    ]]
]);

$templates = ['pages/cricket-guide-landers/new-york-guides.twig'];
Timber::render( $templates, $context );
