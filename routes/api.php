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

Route::get('perfil-usuario', [ClienteController::class, 'perfil_usuario']);
Route::get('contar-items', [OrderItemController::class, 'contar_items']);
Route::post('/approve-payment', [OrderPaymentController::class, 'approvePayment']);
Route::post('/logout', [AuthController::class, 'logout']);
Route::get('categorias-public', [CategoryController::class, 'index']);

Route::apiResources(
    [
        'cliente' => ClienteController::class,
        'categorias' => CategoryController::class,
        'order' => OrderController::class,
        'order-item' => OrderItemController::class,
        'garantia-retorno' => GarantiaRetornoController::class,
        'precio-peso' => PrecioPesoController::class,
        'manejo-aduana' => ManejoAduanaController::class,
    ],
    [
        'parameters' => [],
        'middleware' => ['auth:sanctum']
    ]
);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
