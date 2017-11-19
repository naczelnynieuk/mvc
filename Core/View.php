<?php
/**
 * User: nieuk
 * Date: 19.11.2017
 * Time: 12:50
 */

namespace Core;


class View
{
    public static function render($view, $args =[])
    {
        extract($args, EXTR_SKIP);
        $file = "../App/Views/$view";

        if (is_readable($file)) {
            require $file;
        } else {
            echo "$file not found.";
        }
    }
}