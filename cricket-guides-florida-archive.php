<?php
// Template Name: CG Archive - Florida
$context = Timber::get_context();
$post = Timber::get_post();
$context['post'] = $post;

// main 6-post cricket guides (Florida)
$context['florida_guides_archive'] = Timber::get_posts([
    'post_type'      => 'cricket-guide',
    'posts_per_page' => -1,
    'post_status'    => 'publish',
    'order'          => 'DESC',
    'orderby'        => 'date',
    'tax_query'      => [[
        'taxonomy' => 'cricket-guide-tax',
        'field'    => 'slug',
        'terms'    => ['florida']
    ]]
]);

$templates = ['pages/cricket-guide-archives/florida-archive.twig'];
Timber::render( $templates, $context );
