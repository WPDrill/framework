<?php

use WPDrill\Facades\Route;

Route::get('/wpdrill', \App\Rest\Controllers\WPDrillController::class)->middleware( \App\Rest\Middleware\WPDrillMiddleware::class);



Route::group(['prefix' => '/info', 'middleware' => function () {
    return true;
}], function() {
    Route::get('/about', function () {
        return [
            'title' => 'About WPDrill',
            'content' => 'A WordPress Plugin development framework for humans',
        ];
    });
});
