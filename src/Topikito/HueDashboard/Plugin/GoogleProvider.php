<?php

namespace Topikito\HueDashboard\Plugin;

use app\Core\Bridge\BasePlugin;
use Topikito\HueDashboard\Helper\PimpleHelper;

/**
 * Class GoogleProvider
 *
 * @package Topikito\HueDashboard\Plugin
 */
class GoogleProvider extends BasePlugin
{

    const GOOGLE_AUTH_CODE_KEY = 'google_auth_code';

    protected $_clientId;
    protected $_clientSecret;
    protected $_redirectUri;

    /**
     * @param mixed $clientId
     */
    public function setClientId($clientId)
    {
        $this->_clientId = $clientId;
    }

    /**
     * @param mixed $clientSecret
     */
    public function setClientSecret($clientSecret)
    {
        $this->_clientSecret = $clientSecret;
    }

    /**
     * @param mixed $redirectUri
     */
    public function setRedirectUri($redirectUri)
    {
        $this->_redirectUri = $redirectUri;
    }


    /**
     * @param string $service
     *
     * @return \Google_Client
     */
    public function getClientForService($service = 'drive')
    {
        $clientId = $this->_clientId;
        $clientSecret = $this->_clientSecret;
        $redirectUri = $this->_redirectUri;

        $client = new \Google_Client();
        $client->setClientId($clientId);
        $client->setClientSecret($clientSecret);
        $client->setRedirectUri($redirectUri);
        $client->addScope('https://www.googleapis.com/auth/' . $service);

        return $client;
    }


    /**
     * @param \Google_Client $client
     * @param                $serviceName
     *
     * @return \Google_Service_Drive|null
     */
    public function getService(\Google_Client $client, $serviceName)
    {
        $service = null;
        switch ($serviceName) {
            case 'drive':
                $service = new \Google_Service_Drive($client);
                break;
        }

        return $service;
    }

    public function authenticate(\Google_Client $client, $code)
    {
        $client->authenticate($code);
        PimpleHelper::getSession($this->_app)->set(self::GOOGLE_AUTH_CODE_KEY, $client->getAccessToken());

        return $this;
    }

    /**
     * @param \Google_Client $client
     * @param                $code
     *
     * @return $this
     */
    public function setAccessToken(\Google_Client $client, $code)
    {
        $client->setAccessToken($code);
        return $this;
    }

    public function getAccessToken(\Google_Client $client)
    {
        $accessToken = $client->getAccessToken();
        return $accessToken;
    }

    public function getAuthToken()
    {
        $token = PimpleHelper::getSession($this->_app)->get(self::GOOGLE_AUTH_CODE_KEY);
        return $token;
    }

    public function unsetToken()
    {
        $result = PimpleHelper::getSession($this->_app)->remove(self::GOOGLE_AUTH_CODE_KEY);
        return $result;
    }

    /**
     * @param \Google_Client $client
     *
     * @return string
     */
    public function getAuthUrl(\Google_Client $client) {
        $authUrl = $client->createAuthUrl();
        return $authUrl;
    }

}