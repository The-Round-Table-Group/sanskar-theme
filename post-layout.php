<?php
// Template Name: Post Layout Template
$context = Timber::get_context();
$post = Timber::get_post();
$context['post'] = $post;
$templates = ['pages/post-layout.twig'];
Timber::render( $templates, $context );
