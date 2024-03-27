<?php

return [
    'name' => '#[plugin-name]',
    'slug' => '#[plugin-slug]',
    'prefix' => '#[plugin-prefix]',
    'rest_api_namespace' => '#[rest-namespace]',
    'version' => '0.0.1',

    'initial_handlers' => [
        'activated' => \App\Handlers\PluginActivatedHandler::class,
        'deactivated' => null,
        'uninstalled' => null,
    ],

    'providers' => [
        \WPDrill\Providers\DBServiceProvider::class,
        \WPDrill\Providers\RequestServiceProvider::class,
        \WPDrill\Providers\MenuServiceProvider::class,
        \WPDrill\Providers\ViewServiceProvider::class,
        \WPDrill\Providers\ConfigServiceProvider::class,
        \WPDrill\Providers\EnqueueServiceProvider::class,
        \WPDrill\Providers\RoutingServiceProvider::class,
        \WPDrill\Providers\MigrationServiceProvider::class,


        \App\Providers\PluginServiceProvider::class,
    ],
];
