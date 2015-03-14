<?php

namespace Topikito\HueDashboard\Controller;

use app\Core;
use Topikito\HueDashboard\Config\Base\HTMLController;
use Silex\Application;
use Topikito\HueDashboard\Helper\PhueConverter;
use Topikito\HueDashboard\Plugin\HueMaster;

/**
 * Class Lights
 *
 * @package Topikito\HueDashboard\Controller
 */
class Lights extends HTMLController
{

    /**
     * @return mixed
     */
    public function index()
    {
        $hueMaster = new HueMaster($this->_app);
        $lights = $hueMaster->getLights();

        foreach ($lights as &$light) {
            $light = PhueConverter::getLightAsArray($light);
        }

        $parameters = [
            'lights' => $lights
        ];

        return $this->view->render('Lights/index.html.twig', $parameters);
    }

}
