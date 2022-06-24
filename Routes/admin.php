<?php

use Illuminate\Support\Facades\Route;

/**
 * 'admin' middleware and 'my-customizations' prefix applied to all routes (including names)
 *
 * @see \App\Providers\Route::register
 */

Route::admin('my-customizations', function () {
    Route::get('/', 'Main@index');
});
