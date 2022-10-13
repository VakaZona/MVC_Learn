<?php
namespace App\Controllers;
use \Core\View;
use \App\Models;

class Posts extends \Core\Controller
{
    public function indexAction()
    {
        $posts = Models\Post::getAll();
        //echo '<p> Query string parameters:<pre>'. htmlspecialchars(print_r($_GET, true)) . '</pre></p>';
        View::renderTemplate('Posts/index.twig',['posts' => $posts]);


    }

    public function addNewAction()
    {
        echo "addNew";
    }

    public function editAction()
    {
        echo 'Hello from the edit page in the Posts controller';
        echo '<p>Route parameters : <pre>' . htmlspecialchars(print_r($this->routeParams, true)) . '</pre></p>';
    }
}
