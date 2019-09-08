<?php

use App\Extensions\Twig\Assets;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Container\ContainerInterface;
use Slim\Middleware\RoutingMiddleware;
use Slim\App;
use Slim\Views\Twig;
use Slim\Views\TwigExtension;
use Twig\Extension\DebugExtension;
use Twig\Loader\FilesystemLoader;
use Twig\TwigFunction;
use Twig\Environment;

return function(App $app, ServerRequestInterface $request) {
    $container = $app->getContainer();

    $container->set('router', function() use ($app) {
        return $app->getRouteCollector()->getRouteParser();
    });

    $container->set('request', function() use ($request) {
        return $request;
    });

    $container->set('view', function(ContainerInterface $container) use ($app, $request) {
        $twig = new Twig(
            $container->get('settings')['view']['path'],
            [
                'cache' => $container->get('settings')['view']['cache']
            ]
        );

        $twig->addExtension(new TwigExtension($container->get('router'), $request));
        $loader = new FilesystemLoader($container->get('settings')['view']['public']);
        $twig->addExtension(new Assets($container));
        $twig->addExtension(new DebugExtension());
        return $twig;
    });
};