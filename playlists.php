<?php
// Template Name: Playlists Archive Template
$context = Timber::get_context();
$post = Timber::get_post();
$context['post'] = $post;

$context['playlists'] = Timber::get_posts([
    'post_type'      => 'playlist',
    'posts_per_page' => -1,
    'order'          => 'DESC',
    'orderby'        => 'date',
    'facetwp'        => true
]);

$templates = ['pages/playlists.twig'];
Timber::render( $templates, $context );
