<?php

use WPDrill\Plugin;

return function (string $file) {
    $plugin = new Plugin($file);

    \WPDrill\Facade::setFacadeApplication($plugin);
    \WPDrill\Models\Model::setFacadeApplication($plugin);

    $fn = null;
    if (php_sapi_name() !== 'cli') {
        $fn = function (\WPDrill\Routing\RouteManager $route) {
            $route->loadRoutes();
        };
    }

    $plugin->make($fn);

};
