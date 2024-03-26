<?php
// Template Name: Home Template
$context = Timber::get_context();
$post = Timber::get_post();
$context['post'] = $post;

// homepage - featured article
$context['featured_news'] = Timber::get_posts([
    'post_type'      => 'news',
    'posts_per_page' => 1,
    'tax_query'      => [[
        'taxonomy' => 'news-tax',
        'field'    => 'slug',
        'terms'    => 'main-feature',
    ]]
]);

// homepage - featured world cup articles
$context['world_cup_news'] = Timber::get_posts([
    'post_type'      => 'news',
    'posts_per_page' => 3,
    'tax_query'      => [[
        'taxonomy' => 'news-tax',
        'field'    => 'slug',
        'terms'    => 'world-cup',
    ]]
]);

$templates = ['pages/home.twig'];
Timber::render( $templates, $context );
