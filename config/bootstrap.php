<?php

use DI\Container;
use Dotenv\Dotenv;
use Slim\Factory\AppFactory;
use Slim\Http\ServerRequest;
use Slim\Psr7\Factory\ServerRequestFactory;

require __DIR__ . '/../vendor/autoload.php';

/**
 * Crea el Contenedor de Dependencias usando PHP-DI {{@link http://php-di.org/doc/getting-started.html}}
 *
 * Véase la documentación de PHP-DI para integrar el contenedor utilizando Slim Framework:
 * @link http://php-di.org/doc/frameworks/slim.html
 */
$container = new Container(); // @see\DI\Container

AppFactory::setContainer($container);

$app = AppFactory::create();

$request = new ServerRequest(ServerRequestFactory::createFromGlobals());

/*
 * Guarda el directorio root de la aplicación.
 */
const APP_ROOT = __DIR__ . '/..';

/**
 * Carga todos las Variables de Entorno configuradas en ".env" para que puedan ser obtenidas
 * mediante el métodod mágico de PHP "getenv()" o la variable global $_ENV.
 */
$envVar = Dotenv::create(APP_ROOT);
$envVar->load();

$settings = require __DIR__ . '/settings.php';
$settings($app);

$dependencies = require __DIR__ . '/dependencies.php';
$dependencies($app, $request);

$controllers = require __DIR__ . '/controllers.php';
$controllers($app);

$middleware = require __DIR__ . '/middleware.php';
$middleware($app);

$routes = require __DIR__ . '/routes.php';
$routes($app);

$app->run($request);
