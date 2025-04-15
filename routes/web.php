<?php

use ProcessMaker\Package\Accessibility\Http\Controllers\AccessibilityController;

Route::group(['middleware' => ['auth']], function () {
    Route::get('admin/accessibility', [AccessibilityController::class, 'index'])->name('package.accessibility.index');
    Route::get('accessibility', [AccessibilityController::class, 'index'])->name('package.accessibility.tab.index');
});
