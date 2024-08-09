<?php
// Template Name: News Archive Template
$context = Timber::context();
$post = Timber::get_post();
$context['post'] = $post;

$context['news'] = Timber::get_posts([
    'post_type'      => 'news',
    'posts_per_page' => -1,
    'order'          => 'DESC',
    'orderby'        => 'date',
    'facetwp'        => true
]);

$templates = ['pages/news.twig'];
Timber::render( $templates, $context );
