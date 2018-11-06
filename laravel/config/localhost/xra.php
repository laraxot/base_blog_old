<?php

return [
	'pub_theme'=>'land-see',

	'model' => [
		'blog'          => \XRA\Blog\Models\Post::class,  //-------- TEST
		'home'          => \XRA\Blog\Models\Post::class,  //-------- TEST
		'page'          => \XRA\Blog\Models\Page::class,
		'feed'          => \XRA\Blog\Models\Feed::class,
		'sitemap'       => \XRA\Blog\Models\Sitemap::class,
		'restaurant'    => \XRA\Food\Models\Restaurant::class,
		'restaurant_owner' => \XRA\Food\Models\RestaurantOwner::class,
		'recipe'        => \XRA\Food\Models\Recipe::class,
		'news'          => \XRA\Food\Models\News::class,
		'photo'         => \XRA\Food\Models\Photo::class,
		'cuisine'       => \XRA\Food\Models\Cuisine::class,
		'cuisineCat'    => \XRA\Food\Models\CuisineCat::class,  // incerto se cuisineCat o cuisine_cat
		'ingredient'    => \XRA\Food\Models\Ingredient::class,
		'ingredientCat' => \XRA\Food\Models\IngredientCat::class,
		'location'      => \XRA\Food\Models\Location::class,
		'profile'       => \XRA\Food\Models\Profile::class,
		'cart'          => \XRA\Blog\Models\CartItem::class,
	],
	'migrate_packs'=>['xra','blog','lu','import','food','seo','backend'],
	'enable_packs'=>['frontend','backend','lu','blog','extend','import','food','seo','xra','settings'],
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
