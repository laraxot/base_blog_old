<?php
return array(
    'pub_theme' => 'minimal_blog',
    'adm_theme' => 'adminlte',
    'model' => array(
        'post' => 'XRA\Blog\Models\Post',
        'postCat' => 'XRA\Blog\Models\PostCat',
        'home' => 'XRA\Blog\Models\Post',
        'page' => 'XRA\Blog\Models\Page',
        'feed' => 'XRA\Blog\Models\Feed',
        'sitemap' => 'XRA\Blog\Models\Sitemap',
    ),
    'migrate_packs' => array(
        0 => 'xra',
        1 => 'blog',
        2 => 'lu',
        3 => 'backend',
    ),
    'enable_packs' => array(
        0 => 'frontend',
        1 => 'backend',
        2 => 'lu',
        3 => 'blog',
        4 => 'extend',
        5 => 'xra',
        6 => 'settings',
    ),
    'primary_lang' => 'it',
);
