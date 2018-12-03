<?php
return [
	'pub_theme'=>'minimal_blog',
    //'pub_theme'=>'amp_simpleblog',
    'adm_theme'=>'adminlte',
	'model' => [
        //'post'          => \XRA\Blog\Models\Post::class,  //-------- TEST
        //'postCat' 		=> \XRA\Blog\Models\PostCat::class,
        'article'       => \XRA\Blog\Models\Article::class,  //-------- TEST
        'articleCat' 	=> \XRA\Blog\Models\ArticleCat::class,
		'home'          => \XRA\Blog\Models\Post::class,  //-------- TEST
		'page'          => \XRA\Blog\Models\Page::class,
		'feed'          => \XRA\Blog\Models\Feed::class,
        'sitemap'       => \XRA\Blog\Models\Sitemap::class,
	],
	'migrate_packs'=>['xra','blog','lu','backend'],
	'enable_packs'=>['frontend','backend','lu','blog','extend','xra','settings'],
	'primary_lang' => 'it',

	'related'=>[
		'articleCat'=>['article'],
		'article' =>[],
	],

];
