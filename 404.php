<?php
$context = Timber::context();
$post = Timber::get_post();
$context['post'] = $post;
$templates = ['pages/404.twig'];
Timber::render( $templates, $context );
