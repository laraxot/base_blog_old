<?php
<<<<<<< HEAD
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
=======

return [
	'pub_theme'=>'minimal_blog',
    'adm_theme'=>'adminlte',
	'model' => [
        //'blog'          => \XRA\Blog\Models\Post::class,  //-------- TEST
        'post'          => \XRA\Blog\Models\Post::class,  //-------- TEST
        'postCat' 		=> \XRA\Blog\Models\PostCat::class,
		'home'          => \XRA\Blog\Models\Post::class,  //-------- TEST
		'page'          => \XRA\Blog\Models\Page::class,
		'feed'          => \XRA\Blog\Models\Feed::class,
        'sitemap'       => \XRA\Blog\Models\Sitemap::class,
	],
	'migrate_packs'=>['xra','blog','lu','backend'],
	'enable_packs'=>['frontend','backend','lu','blog','extend','xra','settings'],
	/*
	'post'=>[
		'type'=>[
				'home'=>'home',
				'blog'=>'blog',
				'page'=>'page',
				'restaurant'=>'restaurant',
				'recipe'=>'recipe',
				'news'=>'news',
				'photo'=>'photo',
				'cuisine'=>'cuisine',
				'cuisineCat'=>'cuisineCat',
				'ingredient' => 'ingredient',
				'ingredientCat' => 'ingredientCat',
				'location' => 'location',
				'profile'=>'profile',
				],
	],
	*/
	'primary_lang' => 'it',
];
>>>>>>> dcabf772b180ecbf653241e4ec86424ef9f7f9a6
