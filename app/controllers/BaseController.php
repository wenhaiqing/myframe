<?php
namespace controllers;
use services\View;
/**
 * Created by PhpStorm.
 * User: zhiduoxin6
 * Date: 2016/12/6
 * Time: 17:21
 */
class BaseController
{
    protected $view;

    public function __construct()
    {
        
    }

    public function __destruct()

    {

        $view = $this->view;

        if ( $view instanceof View ) {

            extract($view->data);

            require $view->view;

        }

    }

}