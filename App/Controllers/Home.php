<?php
namespace App\Controllers;
use \Core\View;

class Home extends \Core\Controller
{
    protected function before(){
        //echo "(before)";
    }

    protected function after()
    {
        //echo " (after)";
    }

    public function indexAction()
    {
        //echo "index in Home";
        /*View::render('Home/index.php', [
            'name' => 'Dave',
            'colours' => ['red', 'green', 'blue']
        ]);*/
        View::renderTemplate('Home/index.twig', [
            'name' => 'Dave',
            'colours' => ['red', 'green', 'blue']
        ]);
    }
}
