<?php

use ProcessMaker\Package\Accessibility\Http\Controllers\AccessibilityController;

Route::group(['middleware' => ['auth:api', 'bindings']], function () {
    Route::get('admin/accessibility/fetch', [AccessibilityController::class, 'fetch'])->name('package.accessibility.fetch');
    Route::apiResource('admin/accessibility', AccessibilityController::class);
});
