<?php

/**
 * Armadillo  - a simple php microframework Version 2.2
 *
 * @package armadillo_mvc_v2
 * @author JC
 * @link http://phpframework.juancadima.com/
 * @link https://github.com/jcadima/php-custom-framework-v2
 * @license http://opensource.org/licenses/MIT MIT License
 */

require 'init/init.php' ; // session, config/autoloading

$router = new Core\Router();
 
// Add the routes
$router->add("@^$@i") ; // homepage

// matches: controller
$router->add("@^(?P<controller>[a-z-]+)$@i") ;

// matches: controller/action
$router->add("@^(?P<controller>[a-z-]+)/(?P<action>[a-z-]+)$@i") ;

// matches:  users/4/delete
$router->add("@^(?P<controller>[a-z-]+)/(?P<id>\d+)/(?P<action>[a-z-]+)$@i") ;

// matches:  users/edit/3
$router->add("@^(?P<controller>[a-z-]+)/(?P<action>[a-z-]+)/(?P<id>\d+)$@i") ;

// matches: admin/users/index
$router->add("@^admin/(?P<controller>[a-z-]+)/(?P<action>[a-z-]+)$@i") ;

// matches: admin/users/4/edit
$router->add("@^admin/(?P<controller>[a-z-]+)/(?P<id>\d+)/(?P<action>[a-z-]+)$@i") ;

echo '<pre>'; 
print_r($router->getRoutes() ) ;
echo '</pre>';

$controller = $router->dispatch();


