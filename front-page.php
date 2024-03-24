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

$templates = ['pages/home.twig'];
Timber::render( $templates, $context );
