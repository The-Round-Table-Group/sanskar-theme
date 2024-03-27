<?php
// Template Name: Home Template
$context = Timber::get_context();
$post = Timber::get_post();
$context['post'] = $post;

// featured article
$context['featured_news'] = Timber::get_posts([
    'post_type'      => 'news',
    'posts_per_page' => 1,
    'tax_query'      => [[
        'taxonomy' => 'news-tax',
        'field'    => 'slug',
        'terms'    => 'main-feature',
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

// all news
$context['news'] = Timber::get_posts([
    'post_type'      => 'news',
    'posts_per_page' => 6,
    'order'          => 'DESC',
    'orderby'        => 'date',
    'facetwp'        => false,
    'tax_query'      => [[
        'taxonomy' => 'news-tax',
        'field'    => 'slug',
        'terms'    => 'featured',
    ]]
]);

// all contests
$context['contests'] = Timber::get_posts([
    'post_type'      => 'contest',
    'posts_per_page' => 3,
    'order'          => 'DESC',
    'orderby'        => 'date',
    'facetwp'        => false,
    'tax_query'      => [[
        'taxonomy' => 'contest-tax',
        'field'    => 'slug',
        'terms'    => 'featured',
    ]]
]);

// all sidebar contests
$context['sidebar_contests'] = Timber::get_posts([
    'post_type'      => 'contest',
    'posts_per_page' => 6,
    'meta_key'       => 'show_in_sidebar',
    'meta_value'     => true,
    'order'          => 'DESC',
    'orderby'        => 'date'
]);

$templates = ['pages/home.twig'];
Timber::render( $templates, $context );
