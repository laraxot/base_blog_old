<?php
return array(
    'pub_theme' => 'amp_simpleblog',
    'adm_theme' => 'adminlte',
    'model' => array(
        'article' => 'XRA\Blog\Models\Article',
        'articleCat' => 'XRA\Blog\Models\ArticleCat',
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
    //  'frontend',
        'backend',
        'lu',
        'blog',
        'extend',
        'xra',
        'settings',
    ),
    'primary_lang' => 'it',
    'related' => array(
        'articleCat' => array(
            0 => 'article',
        ),
        'article' => array(),
    ),
);
