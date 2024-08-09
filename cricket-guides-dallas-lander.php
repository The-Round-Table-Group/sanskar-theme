<?php
// Template Name: CG Lander - Dallas
$context = Timber::context();
$post = Timber::get_post();
$context['post'] = $post;

// Dallas Main Feature
$context['dallas_main_feature'] = Timber::get_posts([
    'post_type'      => 'cricket-guide',
    'posts_per_page' => 1,
    'post_status'    => 'publish',
    'order'          => 'DESC',
    'orderby'        => 'date',
    'tax_query'      => [[
        'taxonomy' => 'cricket-guide-tax',
        'field'    => 'slug',
        'terms'    => ['dallas', 'main-feature'],
        'operator' => 'AND',
    ]]
]);

// Dallas Guides
$context['dallas_guides'] = Timber::get_posts([
    'post_type'      => 'cricket-guide',
    'posts_per_page' => 6,
    'post_status'    => 'publish',
    'order'          => 'DESC',
    'orderby'        => 'date',
    'tax_query'      => [[
        'taxonomy' => 'cricket-guide-tax',
        'field'    => 'slug',
        'terms'    => ['dallas', 'featured'],
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

$templates = ['pages/cricket-guide-landers/dallas-guides.twig'];
Timber::render( $templates, $context );
