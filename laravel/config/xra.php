<?php


$default= [
    /*
    |--------------------------------------------------------------------------
    | Laralum settings
    |--------------------------------------------------------------------------
    |
    | This are the base settings for laralum, make sure it's all correct.
    */
    'package_boss' => '\XRA\Fpb\\',
    'adm_theme' => env('ADM_THEME', 'adminlte'), //dopo rimettere sb-admin-2
    //'pub_theme' => env('PUB_THEME', 'testfront'),
    //'pub_theme' => 'foodpicky',
    'pub_theme' => env('PUB_THEME', 'blank'),
    'migrate_packs'=>['blog','lu'],
    'enable_packs'=>['frontend','backend','lu','blog','extend'],
    
    'settings' => [
        'base_url'  => '/admin',
        'api_url'   => '/api',
    ],

    /*
    |--------------------------------------------------------------------------
    | Users settings
    |--------------------------------------------------------------------------
    |
    | This are the base settings for users, make sure it's all correct.
    */
    'superadmins' => [
        'example@email.com',
        'marco.sottana@gmail.com',
    ],

    /*
    |--------------------------------------------------------------------------
    | Languages settings
    |--------------------------------------------------------------------------
    |
    | This are the current languages supported on laralum.
    */
    'languages' => ['en', 'es', 'ca', 'de', 'it'],
    'google'=>['maps'=>['api'=>'AIzaSyAjP50ZhCfZwInhbktFgiCp_Ra86cKwAUI',],],

    /*
    |--------------------------------------------------------------------------
    | Laralum menu injector
    |--------------------------------------------------------------------------
    |
    | This array will be injected into the laralum menu, you can add everything
    | you want on it and it will be available at any page on laralum's menu.
    */
    'menu' => [
        [
            'title' => 'Other',
            'items' => [
                [
                    'text' => 'Homepage',
                    'link' => '/',
                ],
            ],
        ],
    ],

];


/*
if (isset($_SERVER['SERVER_NAME'])) {
    $include_file=str_slug(str_replace('www.', '', $_SERVER['SERVER_NAME'])).'/'.basename(__FILE__);
    //dd($include_file);
    $site=include($include_file);
} else {
    $site=[];
}
$out=array_merge($default, $site);
//echo '<pre>';print_r($out);echo '</pre>';
return $out;
//*/
require_once(base_path('packages/XRA/XRA/src/Helpers/Helper.php'));
$site=getConfig(['file'=>basename(__FILE__)]);
$out=array_merge($default, $site);
//echo '<pre>';print_r($out);echo '</pre>';
return $out;
