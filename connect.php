<?php
// Template Name: Link Tree (Connect) Template
$context = Timber::get_context();
$post = Timber::get_post();
$context['post'] = $post;

$templates = ['pages/connect.twig'];
Timber::render( $templates, $context );
