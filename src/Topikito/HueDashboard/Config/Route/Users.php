<?php

namespace Topikito\HueDashboard\Config\Route;

use app\config\Bridge\Router;
use Silex\Application;
use \Topikito\HueDashboard\Controller;

/**
 * Class Users
 *
 * @package Topikito\HueDashboard\Config\Route
 */
class Users extends Router
{

    public function load()
    {
        $this->_app->match('/users/', function () {
                $controller = new Controller\Users($this->_app);
                return $controller->index();
            });
    }

}
