<?php
/**
 * Created by PhpStorm.
 * User: kalvo19
 * Date: 05/09/2019
 * Time: 10:17
 */

use DI\Container;
use Slim\Middleware\RoutingMiddleware;
use Slim\App;

return function(App $app) {
    $container = $app->getContainer();

    $app->addRoutingMiddleware();

    $app->addErrorMiddleware(
        $container->get('settings')['displayErrorDetails'],
        $container->get('settings')['logErrors'],
        $container->get('settings')['logErrorsDetails']
    );
};

