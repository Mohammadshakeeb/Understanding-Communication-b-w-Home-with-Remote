<?php

namespace App\Mymodulewebapi;

use Phalcon\Mvc\View;
use Phalcon\Di\DiInterface;
use Phalcon\Mvc\Dispatcher;
use Phalcon\Mvc\ModuleDefinitionInterface;

class Register implements ModuleDefinitionInterface
{

    /** * Register a specific autoloader for the module */
    public function registerAutoloaders(DiInterface $di = null)
    {
    }

    /** * Register specific services for the module */
    public function registerServices(DiInterface $di)
    {
        // Registering a dispatcher
        $di->set(
            'dispatcher',
            function () {
                $dispatcher = new Dispatcher();
                $dispatcher->setDefaultNamespace('App\Mymodulewebapi\Controllers');
                return $dispatcher;
            }
        );

        // Registering the view component
        $di->set(
            'view',
            function () {
                $view = new View();
                $view->setViewsDir(CODE . '/mymodulewebapi/views/');
                return $view;
            }
        );
    }
}
