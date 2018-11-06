<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylor@laravel.com>
 */

define('LARAVEL_START', microtime(true));
define('LARAVEL_DIR', realpath(__DIR__.'/../laravel'));

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our application. We just need to utilize it! We'll simply require it
| into the script here so that we don't have to worry about manual
| loading any of our classes later on. It feels great to relax.
|
*/

$autoload=LARAVEL_DIR.'/vendor/autoload.php';
if(!file_exists($autoload)){
	die('not exists ['.$autoload.'] Run composer update from bash from laravel folder');
}
require $autoload;

$bc=__DIR__.'/bc';
if (!is_dir($bc)) {
	die('not exists ['.$bc.'] Run bower update --save from bash from laravel folder');
}

/*
|--------------------------------------------------------------------------
| Turn On The Lights
|--------------------------------------------------------------------------
|
| We need to illuminate PHP development, so let us turn on the lights.
| This bootstraps the framework and gets it ready for use, then it
| will load up this application so that we can run it and send
| the responses back to the browser and delight our users.
|
*/

$app = require_once LARAVEL_DIR.'/bootstrap/app.php';

// set the public path to this directory
$app->bind('path.public', function () {
    return __DIR__;
});

/*
|--------------------------------------------------------------------------
| Run The Application 
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request
| through the kernel, and send the associated response back to
| the client's browser allowing them to enjoy the creative
| and wonderful application we have prepared for them.
|
*/

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);
