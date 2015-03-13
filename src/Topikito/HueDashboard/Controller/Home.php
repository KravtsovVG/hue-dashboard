<?php

namespace Topikito\HueDashboard\Controller;

use app\Core;
use Topikito\HueDashboard\Helper\PimpleHelper;
use Topikito\HueDashboard\Plugin\GoogleProvider;
use Silex\Application;

/**
 * Class Home
 *
 * @package Topikito\HueDashboard\Controller
 */
class Home extends Core\BaseController
{
    
    /**
     * @return mixed
     */
    public function index()
    {
        die('YO!');
        return $this->view->render('Home/index.html.twig');
    }

}
