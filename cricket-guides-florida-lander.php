<?php
// Template Name: CG Lander - Florida
$context = Timber::get_context();
$post = Timber::get_post();
$context['post'] = $post;

// Florida Main Feature
$context['florida_main_feature'] = Timber::get_posts([
    'post_type'      => 'cricket-guide',
    'posts_per_page' => 1,
    'post_status'    => 'publish',
    'order'          => 'DESC',
    'orderby'        => 'date',
    'tax_query'      => [[
        'taxonomy' => 'cricket-guide-tax',
        'field'    => 'slug',
        'terms'    => ['florida', 'main-feature'],
        'operator' => 'AND',
    ]]
]);

// Florida Guides
$context['florida_guides'] = Timber::get_posts([
    'post_type'      => 'cricket-guide',
    'posts_per_page' => 6,
    'post_status'    => 'publish',
    'order'          => 'DESC',
    'orderby'        => 'date',
    'tax_query'      => [[
        'taxonomy' => 'cricket-guide-tax',
        'field'    => 'slug',
        'terms'    => ['florida', 'featured'],
        'operator' => 'AND',
    ]]
]);

// featured world cup articles
$context['world_cup_news'] = Timber::get_posts([
    'post_type'      => 'news',
    'posts_per_page' => 3,
    'tax_query'      => [[
        'taxonomy' => 'news-tax',
        'field'    => 'slug',
        'terms'    => 'world-cup',
    ]]
]);

$templates = ['pages/cricket-guide-landers/florida-guides.twig'];
Timber::render( $templates, $context );
