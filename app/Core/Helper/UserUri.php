<?php

namespace Topikito\HueDashboard\Helper;

/**
 * Class UserUri
 *
 * @package Topikito\HueDashboard\Helper
 */
class UserUri
{
    const URI_TEMPLATE = '/users/{{slug}}/';
    const URI_USER_TEMPLATE = '{{slug}}';

    /**
     * @param $user
     *
     * @return mixed
     */
    static public function getUserUri($user) {
        return str_replace(self::URI_USER_TEMPLATE, $user['uid'], self::URI_TEMPLATE);
    }

}