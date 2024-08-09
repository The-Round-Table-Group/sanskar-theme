<?php
// Template Name: Contact Us Template
$context = Timber::context();
$post = Timber::get_post();
$context['post'] = $post;

// all sidebar contests
$context['sidebar_contests'] = Timber::get_posts([
    'post_type'      => 'contest',
    'posts_per_page' => 6,
    'meta_key'       => 'show_in_sidebar',
    'meta_value'     => true,
    'order'          => 'DESC',
    'orderby'        => 'date'
]);

$templates = ['pages/contact.twig'];
Timber::render( $templates, $context );
