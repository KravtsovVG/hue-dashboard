<?php

namespace Topikito\HueDashboard\Config\Route;

use app\config\Bridge\Router;
use Silex\Application;
use \Topikito\HueDashboard\Controller;

/**
 * Class Home
 *
 * @package Topikito\HueDashboard\Config\Route
 */
class Home extends Router
{

    public function load()
    {
        $this->_app->match('/', function () {
                $controller = new Controller\Home($this->_app);
                return $controller->index();
            });
    }

}
