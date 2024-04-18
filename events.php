<?php
// Template Name: Events Archive Template
$context = Timber::get_context();
$post = Timber::get_post();
$context['post'] = $post;

$context['events'] = Timber::get_posts([
    'post_type'      => 'event',
    'posts_per_page' => -1,
    'order'          => 'DESC',
    'orderby'        => 'date',
    'facetwp'        => true,
]);

$templates = ['pages/events.twig'];
Timber::render( $templates, $context );
