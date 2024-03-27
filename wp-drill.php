<?php
/**
 * Plugin Name:       WPDrill
 * Plugin URI:        https://wpdrill.com
 * Description:       A plugin development framework for human
 * Version:           1.0.0-alpha
 * Author:            Nahid Bin Azhar
 * Author URI:        https://nahid.im/
 * Text Domain:       wp-drill
 * Domain Path:       /languages
 * @package     WPDrill
 * @author      Nahid Bin Azhar <nahid.dns@gmail.com>
 * @copyright   Copyright (C) 2024 WPDrill. All rights reserved.
 * @license     GPLv3 or later
 * @since       1.0.0
*/

// don't call the file directly
defined( 'ABSPATH' ) || die();

define('WPDRILL_DIR_PATH', plugin_dir_path(__FILE__));
define('WPDRILL_PREFIX', 'rvx_');
define( 'WPDRILL_FILE', __FILE__ );

if (php_sapi_name() === 'cli') {
    return;
}

function rvx_wpdrill_init()
{
    require __DIR__ . '/vendor/autoload.php';

    call_user_func(function($bootstrap) {
        $bootstrap(__FILE__);
    }, require(__DIR__.'/bootstrap/boot.php'));
}

rvx_wpdrill_init();

