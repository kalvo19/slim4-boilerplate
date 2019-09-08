<?php

use DI\Container;
use Slim\App;

return function(App $app) {
    $container = $app->getContainer();

    /**
     * Configuración para la aplicación de Slim 4
     */
    $container->set('settings', [
        'displayErrorDetails' => getenv('APP_DEBUG') === 'true',
        'logErrors' => true,
        'logErrorsDetails' => true,

        'app' => [
            'name' => getenv('APP_NAME')
        ],

        /**
         * Configuración para el motor de plantillas Twig.
         */
        'view' => [
            // Directorio donde se almacenan las vistas de la aplicación
            'path' => __DIR__ . '/../views',

            /**
             * Si el valor es false, no se cachearán las vistas de la aplicación. En caso contrario,
             * almacenará las vistas cacheadas en el directorio indicado.
             */
            'cache' => getenv('VIEW_CACHE_DISABLED') === 'true' ? false : __DIR__ . '/../cache/views',

            'public' => __DIR__ . '/../public'
        ]
    ]);
};

