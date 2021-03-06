<?php

use \Phalcon\Di\FactoryDefault,
    \Phalcon\Loader;

$di = new FactoryDefault();

define('BP',dirname(__DIR__));
define('DS','/');
define('CODE',BP.DS.'app'.DS.'code');
// define('VAR',BP.DS.'var');
define('HOST','https://apps.cedcommerce.com');
require BP.DS.'vendor'.DS.'autoload.php';

/**Register loader for modules**/
$di->set(
    'loader',
    function () {
        $loader = new Loader();
        return $loader;
    }
);

$loader = $di['loader'];
$loader->registerNamespaces(
    [
        'Phalcon' => BP.DS.'vendor'.DS.'phalcon'.DS.'incubator'.DS.'Phalcon'.DS,
        'App\Core'   => CODE.DS.'core',
        'App\Core\Middlewares'   => CODE.DS.'core'.DS.'Middlewares'.DS,
        'App\Core\Traits' => CODE.DS.'core'. DS . 'Traits' . DS
    ]
);

$loader->register();

// Create an application
$application = new \App\Core\Application($di);

return $application;