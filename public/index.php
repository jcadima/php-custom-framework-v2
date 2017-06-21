<?php
require '../init/init.php' ; // session, config/autoloading

$router = new Core\Router();
  
$controller = $router->dispatch();


