<?php

use Illuminate\Support\Facades\Route;
use Modules\RecurringTransaction\Http\Controllers\RecurringTransactionController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('recurringtransactions', RecurringTransactionController::class)->names('recurringtransaction');
});
