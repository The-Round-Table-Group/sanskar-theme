<?php
// Template Name: Press Releases Archive Template
$context = Timber::get_context();
$post = Timber::get_post();
$context['post'] = $post;

$context['press_releases'] = Timber::get_posts([
    'post_type'      => 'press-release',
    'posts_per_page' => -1,
    'order'          => 'DESC',
    'orderby'        => 'date'
]);

$templates = ['pages/press-releases.twig'];
Timber::render( $templates, $context );
