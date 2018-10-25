<?php

namespace Dusta\Blog;

use Dframe\Modules\ManagerModule;

/**
 * Class Module
 *
 * @package Dusta\Blog
 */
class Module extends ManagerModule
{

    public function boot()
    {
        $this->loadModels([__DIR__ . DIRECTORY_SEPARATOR . 'Model' . DIRECTORY_SEPARATOR]);
        $this->loadControllers([__DIR__ . DIRECTORY_SEPARATOR . 'Controller' . DIRECTORY_SEPARATOR]);
        $this->loadRoutes(__DIR__ . DIRECTORY_SEPARATOR . 'Config' . DIRECTORY_SEPARATOR . 'router.php');
    }


    public function register()
    {

    }

}
