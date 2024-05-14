<?php
// Template Name: CG Archive - Dallas
$context = Timber::get_context();
$post = Timber::get_post();
$context['post'] = $post;

// main 6-post cricket guides (Dallas)
$context['dallas_guides_archive'] = Timber::get_posts([
    'post_type'      => 'cricket-guide',
    'posts_per_page' => -1,
    'post_status'    => 'publish',
    'order'          => 'DESC',
    'orderby'        => 'date',
    'tax_query'      => [[
        'taxonomy' => 'cricket-guide-tax',
        'field'    => 'slug',
        'terms'    => ['dallas']
    ]]
]);

$templates = ['pages/cricket-guide-archives/dallas-archive.twig'];
Timber::render( $templates, $context );
