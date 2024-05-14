<?php
// Template Name: Home Template
$context = Timber::get_context();
$post = Timber::get_post();
$context['post'] = $post;

// Featured article
$context['featured_article'] = Timber::get_posts([
    'post_type'      => 'news',
    'posts_per_page' => 1,
    'tax_query'      => [[
        'taxonomy' => 'news-tax',
        'field'    => 'slug',
        'terms'    => 'main-feature',
    ]]
]);

// Featured Contests
$context['featured_contests'] = Timber::get_posts([
    'post_type'      => 'contest',
    'posts_per_page' => 3,
    'post_status'    => 'publish',
    'order'          => 'DESC',
    'orderby'        => 'date',
    'facetwp'        => false,
    'tax_query'      => [[
        'taxonomy' => 'contest-tax',
        'field'    => 'slug',
        'terms'    => 'featured'
    ]]
]);

// 6 featured news articles
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

// Featured Spotify playlists
$context['featured_playlists'] = Timber::get_posts([
    'post_type'      => 'playlist',
    'posts_per_page' => 3,
    'post_status'    => 'publish',
    'order'          => 'DESC',
    'orderby'        => 'date',
    'facetwp'        => false,
    'tax_query'      => [[
        'taxonomy' => 'playlist-tax',
        'field'    => 'slug',
        'terms'    => 'featured'
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

$templates = ['pages/home.twig'];
Timber::render( $templates, $context );
