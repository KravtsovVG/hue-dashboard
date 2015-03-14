<?php

namespace Topikito\HueDashboard\Config\Route;

use app\config\Bridge\Router;
use Silex\Application;
use \Topikito\HueDashboard\Controller;

/**
 * Class Lights
 *
 * @package Topikito\HueDashboard\Config\Route
 */
class Lights extends Router
{

    public function load()
    {
        $this->_app->get('/lights/', function () {
                $controller = new Controller\Lights($this->_app);
                return $controller->index();
            });
    }

}
