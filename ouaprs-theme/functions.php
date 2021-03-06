<?php
define('WP_DEBUG', true);
require_once __DIR__ . '/vendor/autoload.php';

class mySite extends Timber\Site
{
    public function __construct()
    {
        add_theme_support('post-thumbnails');
        register_nav_menus([
            'main-menu' => 'Navigace',
            'footer-menu' => 'Patička'
        ]);
        add_filter('timber_context', [$this, 'add_to_context']);
        parent::__construct();
    }

    public function add_to_context($context)
    {
        $context['menu'] = new Timber\Menu('main-menu');
        $context['footer'] = new Timber\Menu('footer-menu');
        $context['site'] = $this;
        return $context;
    }
}

new mySite();
