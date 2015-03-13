<?php

namespace Topikito\HueDashboard\Helper;

/**
 * Class ArrayUtil
 *
 * @package Topikito\HueDashboard\Helper
 */
class ArrayUtil
{
    /**
     * @param $arr
     *
     * @return bool
     */
    public static function validArray($arr)
    {
        return (!empty($arr) && is_array($arr));
    }

}
