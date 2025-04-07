<?php

use ProcessMaker\Package\WebEntry\Http\Controllers\WebEntryController;

Route::group(['middleware' => ['auth:api', 'bindings']], function () {
    Route::get('admin/webentry/fetch', [WebEntryController::class, 'fetch'])->name('package.webentry.fetch');
    Route::apiResource('admin/webentry', WebEntryController::class);
});
