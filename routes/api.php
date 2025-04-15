<?php

use ProcessMaker\Package\Accessibitiy\Http\Controllers\AccessibitiyController;

Route::group(['middleware' => ['auth:api', 'bindings']], function () {
    Route::get('admin/accessibitiy/fetch', [AccessibitiyController::class, 'fetch'])->name('package.accessibitiy.fetch');
    Route::apiResource('admin/accessibitiy', AccessibitiyController::class);
});
