<?php

namespace Topikito\HueDashboard\Plugin;

use app\Core\Bridge\BasePlugin;
use app\Core\Helper\ConfigHelper;
use Phue;

/**
 * Class HueMaster
 *
 * @package Topikito\HueDashboard\Plugin
 */
class HueMaster extends BasePlugin
{

    /**
     * @var null|Phue\Client
     */
    protected $_hueInterpreter = null;

    /**
     * @return Phue\Client
     */
    protected function _getHueInterpreter()
    {
        if (!$this->_hueInterpreter) {
            $host = ConfigHelper::get('hue.server.host');
            $user = ConfigHelper::get('hue.server.user');
            $this->_hueInterpreter = new Phue\Client($host, $user);
        }

        return $this->_hueInterpreter;
    }

    /**
     * @return Phue\User[]
     */
    public function getUsers()
    {
        $hueInterpreter = $this->_getHueInterpreter();
        $users = $hueInterpreter->getUsers();

        return $users;
    }

    /**
     * @return Phue\Light[]
     */
    public function getLights()
    {
        $hueInterpreter = $this->_getHueInterpreter();
        $lights = $hueInterpreter->getLights();

        return $lights;
    }

}