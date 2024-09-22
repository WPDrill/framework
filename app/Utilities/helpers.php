<?php

use WPDrill\Response;

if (!function_exists('wpdrill_plugin')) {
    function wpdrill_plugin(): \WPDrill\Plugin
    {
        return \WPDrill\Plugin::getInstance();
    }
}


if (!function_exists('wpdrill_rest')) {
    function wpdrill_rest($data): \WPDrill\Response
    {
        return new Response($data);
    }
}
