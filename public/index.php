<?php

require_once dirname(__DIR__) . '/vendor/autoload.php';



//require "../Core/Router.php";
//require "../App/Controllers/Posts.php";
//echo 'Requested URL = "' . $_SERVER['QUERY_STRING'] . '"';
spl_autoload_register(function ($class){
    $root = dirname(__DIR__);
    $file = $root . '/' . str_replace('\\', '/', $class) . '.php';
    if (is_readable($file)){
        require $root . '/' . str_replace('\\', '/', $class) . '.php';
    }
});
//Routes
$router = new Core\Router();
//add
$router->add('', ['controller' => 'Home', 'action' => 'index']);
//$router->add('posts', ['controller' => 'Posts', 'actions' => 'index']);
//$router->add('posts/new', ['controller' => 'Posts', 'actions' => 'new']);
$router->add('{controller}/{action}');
$router->add('{controller}/{id:\d+}/{action}');
$router->add('admin/{controller}/{action}', ['namespace' => 'Admin']);

//$router->add('admin/{action}/{controller}');


//tests
/*
echo '<pre>';
echo htmlspecialchars(print_r($router->getRoutes(), true));
echo '</pre>';

$url = $_SERVER['QUERY_STRING'];
if ($router->match($url)){
    echo '<pre>';
    echo var_dump($router->getParams());
    echo '</pre>';
} else {
    echo "No route found fo URL";
}
*/

$router->dispath($_SERVER['QUERY_STRING']);
