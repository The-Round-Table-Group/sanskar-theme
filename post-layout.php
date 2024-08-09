<?php
// Template Name: Post Layout Template
$context = Timber::context();
$post = Timber::get_post();
$context['post'] = $post;
$templates = ['pages/post-layout.twig'];
Timber::render( $templates, $context );
