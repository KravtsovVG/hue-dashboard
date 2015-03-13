<?php

namespace Topikito\HueDashboard\Helper;

use Silex\Application;

/**
 * Class PimpleSimplifier
 *
 * @package Circalit\SkillSnap\Plugin
 */
class PimpleHelper
{

    /**
     * @param Application $app
     *
     * @return bool|\Symfony\Component\HttpFoundation\Session\Session
     */
    public static function getSession(Application $app)
    {
        $result = false;
        if (isset($app['session'])) {
            /**
             * @var $result \Symfony\Component\HttpFoundation\Session\Session
             */
            $result = $app['session'];
        }
        return $result;
    }

    /**
     * @param Application $app
     *
     * @return bool|\Monolog\Logger
     */
    public static function getLogger(Application $app)
    {
        $result = false;
        if (isset($app['logger'])) {
            /**
             * @var $result \Monolog\Logger
             */
            $result = $app['logger'];
        }
        return $result;
    }

    /**
     * @param Application $app
     *
     * @return bool|\Symfony\Component\HttpFoundation\Request
     */
    public static function getRequest(Application $app)
    {
        $result = false;
        if (isset($app['request'])) {
            /**
             * @var $result \Symfony\Component\HttpFoundation\Request
             */
            $result = $app['request'];
        }
        return $result;
    }
}
