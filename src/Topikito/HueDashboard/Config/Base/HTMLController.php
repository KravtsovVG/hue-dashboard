<?php

namespace Topikito\HueDashboard\Config\Base;

use app\Core\BaseController;
use app\Core\BaseView;
use Topikito\HueDashboard\Helper;
use Silex\Application;

class HTMLController extends BaseController
{

    public function __construct(Application $app)
    {
        parent::__construct($app);
        $this->initView();
    }

    /**
     * @param array $params
     *
     * @return bool
     */
    public function initView($params = [])
    {
        $this->view = new BaseView($this->_app, $params);

        $this->view->setParams($params);
        return true;
    }

}
