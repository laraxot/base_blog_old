<?php
namespace App;
use Illuminate\Foundation\Application as IlluminateApplication;

/**
 * Class     Application
 *
 * @package  App
 * @author
 */
class Application extends IlluminateApplication{
	/* -----------------------------------------------------------------
    |  Getters & Setters
    | -----------------------------------------------------------------
    */

    /**
     * Get the path to the public / web directory.
     *
     * @return string
     */
    public function publicPath(){
    	$publicPath=realpath($this->basePath . DIRECTORY_SEPARATOR .'..'.DIRECTORY_SEPARATOR. 'public_html');
        return $publicPath;
    }
}
