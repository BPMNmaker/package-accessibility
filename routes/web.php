<?php

use ProcessMaker\Package\WebEntry\Http\Controllers\WebEntryController;

Route::group(['middleware' => ['auth']], function () {
    Route::get('admin/webentry', [WebEntryController::class, 'index'])->name('package.webentry.index');
    Route::get('webentry', [WebEntryController::class, 'index'])->name('package.webentry.tab.index');
});
