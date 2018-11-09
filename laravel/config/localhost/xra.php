<?php

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
