<?php

use ProcessMaker\Package\Webentry\Http\Controllers\WebentryController;

Route::group(['middleware' => ['auth:api', 'bindings']], function () {
    Route::get('admin/webentry/fetch', [WebentryController::class, 'fetch'])->name('package.skeleton.fetch');
    Route::apiResource('admin/webentry', WebentryController::class);
});
