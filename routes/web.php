<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BuyCart\GarantiaRetornoController;
use App\Http\Controllers\BuyCart\ManejoAduanaController;
use App\Http\Controllers\BuyCart\OrderItemController;
use App\Http\Controllers\BuyCart\OrderController;
use App\Http\Controllers\BuyCart\OrderPaymentController;
use App\Http\Controllers\BuyCart\PrecioPesoController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\SiteMapController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/sitemap.xml', [SiteMapController::class, 'index']);
Route::view('/quienes-somos', 'web/quienes-somos');
// Rutas para Detalle y Categoría utilizando controladores
Route::get('/detalle', [App\Http\Controllers\DetalleController::class, 'detalle']);
Route::get('/categoria', [App\Http\Controllers\CategoriaController::class, 'categoria']);
Route::view('/contactos', 'web/contactos');
Route::view('/politica-de-privacidad', 'web/politica-de-privacidad');
Route::view('/politicas', 'web/politicas');
Route::view('/privacidad', 'web/privacidad');
Route::view('/terminos', 'web/terminos');
Route::view('/cookies', 'web/cookies');
Route::view('/ayuda', 'web/ayuda');
Route::view('productos-busqueda', 'web/productos-busqueda');
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::view('perfil', 'web/perfil');
Route::view('detalle-pedido', 'web/buyCart/detalle_pedido');
Route::view('cart', 'web/buyCart/cart');
Route::view('comprobar-pago', 'web/buyCart/comprobar_pago');
Route::view('categoria-admin', 'web/admin/categoria');
Route::view('categorias-list', 'web/categorias');
Route::view('garantia-retorno-list', 'web/admin/garantiaRetorno');
Route::view('manejo-aduana-list', 'web/admin/manejoAduana');
Route::view('precio-peso-list', 'web/admin/precioPeso');

Route::post('/login-user', [AuthController::class, 'login_user']);




Route::get('calcular-importacion', [OrderItemController::class, 'calcularImportacion']);

Route::post('/login-user', [AuthController::class, 'login_user']);
