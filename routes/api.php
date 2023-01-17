<?php

use App\Http\Controllers\Api\MenuController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\AddressController;
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

// Route::middleware('auth:sanctum')->get('/menus', 'MenusController@index');

Route::get('/menus', [MenuController::class, 'index']);
Route::get('/menus/{id}', [MenuController::class, 'show']);
Route::get('/user', [UserController::class, 'index']);
Route::get('/user/{id}', [UserController::class, 'show']);
Route::get('/address', [AddressController::class, 'index']);
Route::get('/address/{id}', [AddressController::class, 'show']);
Route::get('/address_pivot', [AddressPivotController::class, 'index']);
Route::get('/address_pivot/{id}', [AddressPivotController::class, 'show']);
Route::get('/transaction', [TransactionController::class, 'index']);
Route::get('/transaction/{id}', [TransactionController::class, 'show']);
Route::get('/transaction_items', [TransactionItemsController::class, 'index']);
Route::get('/transaction_items/{id}', [TransactionItemsController::class, 'show']);
Route::get('/invoice', [InvoiceController::class, 'index']);
Route::get('/invoice/{id}', [InvoiceController::class, 'show']);
Route::get('/queue', [QueueController::class, 'index']);
Route::get('/queue/{id}', [QueueController::class, 'show']);
Route::post('/menus', [MenuController::class, 'store']);
Route::put('/menus/{id}', [MenuController::class, 'update']);
Route::delete('/menus/{id}', [MenuController::class, 'delete']);
Route::post('/user', [UserController::class, 'store']);
Route::put('/user/{id}', [UserController::class, 'update']);