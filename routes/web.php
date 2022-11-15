<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\PersonalDataController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserWishController;
use App\Http\Controllers\UserOrderController;
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

Route::get('/', [\App\Http\Controllers\HomeSiteController::class,'index'])->name('home');
Route::get('/produtos', [ProductController::class,'index'])->name('show-products');
Route::get('/login', [\App\Http\Controllers\LoginController::class,'index'])->name('login');
Route::get('/carrinho', [CartController::class,'index'])->name('cart');
Route::get('/recuperacao-senha', [\App\Http\Controllers\ForgotPasswordController::class,'index'])->name('recupera-senha');
Route::get('/pagamento', [\App\Http\Controllers\PaymentController::class,'index'])->name('method-payment');
Route::get('/admin/login',[ \App\Http\Controllers\LoginController::class,'loginAdmin']);

Route::get('/adicionar/{id}', [CartController::class,'addItemToCart'])->name('adicionar');
Route::get('/detalhes', [ProductController::class,'detailProduct'])->name('detalhes');


Route::get('/meus-dados', [PersonalDataController::class,'allDataPersonalUser'])->name('meus-dados');
Route::post('/meus-dados', [PersonalDataController::class,'saveDataPersonalUser'])->name('meus-dados');

Route::get('/meus-desejos', [UserWishController::class,'allDataWishUser'])->name('meus-desejos');
Route::get('/meus-pedidos', [UserOrderController::class,'allDataOrderUser'])->name('meus-pedidos');

Route::get('/adicionar-item-carrinho',[CartController::class,'addItemToCart']);
Route::get('/remover-item-carrinho',[CartController::class,'removeItemToCart']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
