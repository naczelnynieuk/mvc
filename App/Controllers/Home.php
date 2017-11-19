<?php
/**
 * User: nieuk
 * Date: 18.11.2017
 * Time: 19:21
 */

namespace App\Controllers;

use \Core\View;

class Home extends \Core\Controller
{
    public function indexAction() {
        View::renderTemplate('Home/index.html', [
            'name' => 'Robert',
            'colours' => ['red', 'green', 'blue']
        ]);
//        View::render('Home/index.php', [
//            'name' => 'Robert',
//            'colours' => ['red', 'green', 'blue']
//        ]);
    }
}