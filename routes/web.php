<?php

use App\Http\Controllers\AccountingController;
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

Route::get('/', [AccountingController::class, 'index'])->name('accounting.index');

Route::group([
    'as' => 'accounting.',
    'prefix' => 'accounting',
], function(){
    Route::get('/', [AccountingController::class, 'index'])->name('index');
    Route::get('/products', [AccountingController::class, 'products'])->name('products');
    Route::get('/write-off', [AccountingController::class, 'writeOff'])->name('writeOff');
    Route::get('/sales', [AccountingController::class, 'sales'])->name('sales');
    Route::post('/add-product', [AccountingController::class, 'addProduct'])->name('addProduct');
});


