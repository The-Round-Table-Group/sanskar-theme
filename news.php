<?php
// Template Name: News Archive Template
$context = Timber::get_context();
$post = Timber::get_post();
$context['post'] = $post;
$templates = ['pages/news.twig'];
Timber::render( $templates, $context );
