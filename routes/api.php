<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\TransactController;

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

Route::post('login', [
    ApiController::class, 'authenticate'
]);

Route::post('register', [
    ApiController::class, 'register'
]);


Route::group(['middleware' => ['jwt.verify']], function() {
    Route::get('logout', [ApiController::class, 'logout']);
    Route::post('transact', [TransactController::class, 'addTransact']);
    Route::get('transact', [TransactController::class, 'reportTransact']);
    Route::get('stok/{kendaraan}', [TransactController::class, 'getStok']);
});
