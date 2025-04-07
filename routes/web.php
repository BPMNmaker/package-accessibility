<?php

use ProcessMaker\Package\Webentry\Http\Controllers\WebentryController;

Route::group(['middleware' => ['auth']], function () {
    Route::get('admin/webentry', [WebentryController::class, 'index'])->name('package.skeleton.index');
    Route::get('webentry', [WebentryController::class, 'index'])->name('package.skeleton.tab.index');
});
