<?php
// Template Name: Home Template
$context = Timber::get_context();
$post = Timber::get_post();
$context['post'] = $post;

$context['featured_news'] = Timber::get_terms([
    'taxonomy'   => 'news-tax',
    'name'       => 'featured',
    'orderby'    => 'name',
    'order'      => 'ASC',
    'hide_empty' => false
]);

$context['cricket_news_updates'] = Timber::get_posts([
    'post_type'      => 'news',
    'posts_per_page' => 3,
    'tax_query'      => [[
        'taxonomy' => 'news-tax',
        'field'    => 'slug',
        'terms'    => 'cricket-updates',
    ]]
]);

$templates = ['pages/home.twig'];
Timber::render( $templates, $context );
