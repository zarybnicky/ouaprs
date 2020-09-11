<?php

use Timber\Timber;

global $paged;
if (!isset($paged) || !$paged) {
    $paged = 1;
}
$context = Timber::get_context();
$context['posts'] = new \Timber\PostQuery([
    'post_type'      => 'post',
    'posts_per_page' => 10,
    'paged'          => $paged,
]);
Timber::render(['pages/index.twig'], $context);
