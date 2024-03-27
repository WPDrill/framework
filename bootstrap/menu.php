<?php

use WPDrill\Facades\Menu;
use WPDrill\Plugin;

return function(Plugin $plugin) {
    Menu::add('WPDrill',  [\App\Handlers\WPDrillMenuHandler::class, '__invoke'], 'manage_options')
        ->icon('dashicons-smiley')
        ->position(3);

//    Menu::remove('upload.php');

};
