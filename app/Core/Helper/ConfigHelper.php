<?php

namespace app\Core\Helper;

/**
 * Class ConfigHelper
 *
 * @package app\Core\Helper
 */
/**
 * Class ConfigHelper
 *
 * @package app\Core\Helper
 */
class ConfigHelper
{
    /**
     * @var array
     */
    private static $_config = [];

    /**
     * @param $key
     * @param $value
     */
    public static function set($key, $value)
    {
        self::$_config[$key] = $value;
    }

    /**
     * @param      $key
     * @param null $default
     *
     * @return null
     */
    public static function get($key, $default = null)
    {
        if(array_key_exists($key, self::$_config)) {
            return self::$_config[$key];
        }

        return $default;
    }

    /**
     * @param array $values
     */
    public static function load($values = [])
    {
        if(is_array($values)) {
            self::$_config = $values;
        }
    }
}
