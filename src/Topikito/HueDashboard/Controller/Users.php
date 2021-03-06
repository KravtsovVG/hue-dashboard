<?php

namespace Topikito\HueDashboard\Controller;

use app\Core;
use Topikito\HueDashboard\Config\Base\HTMLController;
use Silex\Application;
use Topikito\HueDashboard\Helper\PhueConverter;
use Topikito\HueDashboard\Plugin\HueMaster;

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
        $hueMaster = new HueMaster($this->_app);
        $users = $hueMaster->getUsers();

        foreach ($users as &$user) {
            $user = PhueConverter::getUserAsArray($user);
        }

        $parameters = [
            'users' => $users
        ];

        return $this->view->render('Users/index.html.twig', $parameters);
    }

}
