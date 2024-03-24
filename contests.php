<?php
// Template Name: Contests Archive Template
$context = Timber::get_context();
$post = Timber::get_post();
$context['post'] = $post;

$context['contests'] = Timber::get_posts([
    'post_type' => 'contest',
    'posts_per_page' => -1,
    'order' => 'DESC',
    'orderby' => 'date'
]);

$templates = ['pages/contests.twig'];
Timber::render( $templates, $context );
