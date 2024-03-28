<?php

use WPDrill\Facades\Shortcode;
use WPDrill\Plugin;

return function(Plugin $plugin) {
    Shortcode::add('wpdrill', \App\Shortcodes\WPDrillShortcode::class);
};
