<?php
// Template Name: About Us Template
$context = Timber::get_context();
$post = Timber::get_post();
$context['post'] = $post;

$templates = ['pages/about.twig'];
Timber::render( $templates, $context );
