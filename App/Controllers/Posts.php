<?php

namespace App\Controllers;

/**
 * User: nieuk
 * Date: 18.11.2017
 * Time: 18:58
 */
class Posts extends \Core\Controller
{
    public function indexAction()
    {
        echo 'Hello from the index action in the Posts controller';
        echo '<p>Query string parameters: <pre>' .
            htmlspecialchars(print_r($_GET, true)) . '</pre></p>';
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
        echo '(BEFORE)';
    }

    protected function after()
    {
        echo '(AFTER)';
    }

}