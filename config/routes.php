<?php

use Slim\App;

return function(App $app) {
    $app->get('/', 'HomepageController:index')->setName('homepage');
};