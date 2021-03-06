<?php

namespace Topikito\HueDashboard\Controller;

use app\Core;
use Topikito\HueDashboard\Config\Base\HTMLController;
use Silex\Application;

/**
 * Class Home
 *
 * @package Topikito\HueDashboard\Controller
 */
class Home extends HTMLController
{

    /**
     * @return mixed
     */
    public function index()
    {
        return $this->view->render('Home/index.html.twig');
    }

}
