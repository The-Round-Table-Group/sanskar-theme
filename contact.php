<?php
// Template Name: Contact Us Template
$context = Timber::get_context();
$post = Timber::get_post();
$context['post'] = $post;

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

$templates = ['pages/contact.twig'];
Timber::render( $templates, $context );
