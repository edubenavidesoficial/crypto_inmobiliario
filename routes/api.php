<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BuyCart\GarantiaRetornoController;
use App\Http\Controllers\BuyCart\ManejoAduanaController;
use App\Http\Controllers\BuyCart\OrderController;
use App\Http\Controllers\BuyCart\OrderItemController;
use App\Http\Controllers\BuyCart\OrderPaymentController;
use App\Http\Controllers\BuyCart\PrecioPesoController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClienteController;
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
