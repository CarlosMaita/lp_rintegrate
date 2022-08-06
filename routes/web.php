<?php

use App\Http\Controllers\LeadController;
use App\Http\Controllers\ProductController;
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
    return redirect('https://rintegrate.com');
});

// Route::get("/ciclismo/linterna-led-para-bicicleta", function(){
//     return view('lp-product');
// });

Route::post('lead/store',  [LeadController::class, 'store'])->name('lead.store');

Route::get('/{interest}/{product}', [ProductController::class, 'index'])
    ->where('interest', '[a-zA-Z0-9\-]+')
    ->where('product', '[a-zA-Z0-9\-]+')
    ->name('product.index');
    

Route::get('/{interest}/{product}/gracias', [ProductController::class, 'gracias'])
    ->where('interest', '[a-zA-Z0-9\-]+')
    ->where('product', '[a-zA-Z0-9\-]+')
    ->name('product.gracias');
