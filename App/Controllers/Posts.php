<?php
namespace App\Controllers;

class Posts extends \Core\Controller
{
    public function indexAction()
    {
        echo "Index<br>";
        echo '<p> Query string parameters:<pre>'. htmlspecialchars(print_r($_GET, true)) . '</pre></p>';


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
