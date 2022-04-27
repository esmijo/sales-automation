<?php

use App\Http\Controllers\InventoryController;
use App\Http\Controllers\TransactionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//ISMS-BACKUP-DB-ROUTES

Route::get('/transactions', [TransactionController::class, 'index']);
Route::get('/transactions/wb', [TransactionController::class, 'TransactionWithBranch']);
Route::get('/inventory', [InventoryController::class, 'index']);

Route::get('/transactions/sf', [TransactionController::class, 'selected_fields']);
Route::get('/transactions/trans_sum', [TransactionController::class, 'trans_sum']);

Route::get('/transactions/{id}', [TransactionController::class, 'show']);
Route::get('/transactions/search/{customer}', [TransactionController::class, 'search']);