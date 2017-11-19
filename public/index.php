<?php



spl_autoload_register(function ($class) {
    $root = dirname(__dir__); //get the parent directory
    $file = $root . '/' . str_replace('\\', '/', $class) . '.php';
    if (is_readable($file)) {
        require $root . '/' . str_replace('\\', '/', $class) . '.php';
    }
});


$router = new Core\Router();

//Add the router
$router->add('{controller}/{action}/{userid:\d+}');
$router->add('{controller}/{action}');
$router->add('admin/{controller}/{action}', ['namespace' => 'Admin']);
$router->add('posts', ['controller'=> 'Posts', 'action'=> 'index']);
$router->add('home', ['controller'=> 'Home', 'action'=> 'index']);

$router->add('', ['controller'=> 'Home', 'action'=> 'index']);

$router->dispatch($_SERVER['QUERY_STRING']);
