<?php
// Template Name: Policy Template
$context = Timber::context();
$post = Timber::get_post();
$context['post'] = $post;
$templates = ['pages/policies.twig'];
Timber::render( $templates, $context );
