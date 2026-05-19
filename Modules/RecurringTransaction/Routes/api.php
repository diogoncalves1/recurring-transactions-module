<?php

use Illuminate\Support\Facades\Route;
use Modules\RecurringTransaction\Http\Controllers\RecurringTransactionController;

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('recurringtransactions', RecurringTransactionController::class)->names('recurringtransaction');
});
