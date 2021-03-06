<?php

namespace app\core\providers;

use Pi;
use app\core\router\Router;
use app\core\base\AbstractProvider;

class RouterProvider extends AbstractProvider
{

    /**
     * @var string
     */
    public $name = 'router';

    /**
     * @return Router|mixed
     */
    public function init()
    {
        return new Router(Pi::$app->baseUrl);
    }
}