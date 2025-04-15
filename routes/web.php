<?php

use ProcessMaker\Package\Accessibitiy\Http\Controllers\AccessibitiyController;

Route::group(['middleware' => ['auth']], function () {
    Route::get('admin/accessibitiy', [AccessibitiyController::class, 'index'])->name('package.accessibitiy.index');
    Route::get('accessibitiy', [AccessibitiyController::class, 'index'])->name('package.accessibitiy.tab.index');
});
