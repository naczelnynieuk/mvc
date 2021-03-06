<?php

namespace App\Controllers;

/**
 * User: nieuk
 * Date: 18.11.2017
 * Time: 18:58
 */

use \Core\View;

class Posts extends \Core\Controller
{
    public function indexAction()
    {
        $posts = \App\Models\Post::getAll();
        View::renderTemplate('Posts/index.html', array(
            'posts'=>$posts
        ));
    }

    public function addNewAction()
    {
        echo 'Hello from the addNew action in the Posts Controller!';
        echo '<p>Query string parameters: <pre>' .
            htmlspecialchars(print_r($_GET, true)) . '</pre></p>';
    }

    public function editAction()
    {
        echo 'Hello from the other edit action in the Posts controller!';
        echo '<p>Route parameters: <pre>'.
            htmlspecialchars(print_r($this->route_params, true)) . '</pre></p>';
    }

    protected  function before()
    {
    }

    protected function after()
    {
    }

}