<?php

namespace Topikito\HueDashboard\Controller;

use app\Core;
use Topikito\HueDashboard\Config\Base\HTMLController;
use Silex\Application;

/**
 * Class Users
 *
 * @package Topikito\HueDashboard\Controller
 */
class Users extends HTMLController
{

    /**
     * @return mixed
     */
    public function index()
    {
        return $this->view->render('Users/index.html.twig');
    }

}
