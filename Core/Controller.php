<?php
/**
 * User: nieuk
 * Date: 18.11.2017
 * Time: 20:14
 */

namespace Core;


abstract class Controller
{


    protected $route_params = array();


    public function __call($name, $args)
    {
        $method = $name. 'Action';
        if (method_exists($this, $method)) {
            if ($this->before() !== false) {
                call_user_func([$this, $method], $args);
                $this->after();
            }
        } else {
            echo "Method $method not found in controller " . get_class($this);
        }

    }


    protected function before()
    {

    }

    protected function after() {

    }


    public function __construct($route_params)
    {
        $this->route_params = $route_params;
    }
}