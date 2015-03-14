<?php

namespace Topikito\HueDashboard\Helper;

use Phue;

/**
 * Class PhueConverter
 *
 * @package Topikito\HueDashboard\Helper
 */
class PhueConverter
{

    /**
     * @param Phue\User $user
     *
     * @return array
     */
    static public function getUserAsArray(Phue\User $user)
    {
        $structuredData = [
            'username' => $user->getUsername(),
            'create_date' => $user->getCreateDate(),
            'device_type' => $user->getDeviceType(),
            'last_use_date' => $user->getLastUseDate(),
        ];

        return $structuredData;
    }

    /**
     * @param Phue\Light $light
     *
     * @return array
     */
    static public function getLightAsArray(Phue\Light $light)
    {
        $structuredData = [
            'alert' => $light->getAlert(),
            'brightness' => $light->getBrightness(),
            'color_mode' => $light->getColorMode(),
            'color_temp' => $light->getColorTemp(),
            'effect' => $light->getEffect(),
            'hue' => $light->getHue(),
            'id' => $light->getId(),
            'model' => $light->getModel(),
            'model_id' => $light->getModelId(),
            'name' => $light->getName(),
            'saturation' => $light->getSaturation(),
            'software_version' => $light->getSoftwareVersion(),
            'type' => $light->getType(),
            'unique_id' => $light->getUniqueId(),
            'xy' => $light->getXY(),
            'is_on' => $light->isOn()
        ];

        return $structuredData;
    }

}
