<?php

use App\Controllers\HomepageController;
use DI\Container;
use Psr\Container\ContainerInterface;
use Slim\App;


return function(App $app) {
    $container = $app->getContainer();

    $container->set('HomepageController', function(ContainerInterface $container) : HomepageController {
        return new HomepageController($container);
    });
};