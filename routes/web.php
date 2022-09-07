<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\InterestController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StockController;
use Illuminate\Support\Facades\Route;

use App\Models\Lead as Lead;

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
Route::get('/', HomeController::class . '@index')->name('home');
Route::get('/s', function(){ return redirect()->route('home'); });
Route::get('/s/{search}', HomeController::class . '@search')->name('home.search');

Route::get('/admin', function () {
    return view('welcome');
});

Route::prefix('dashboard')->middleware('auth')->group(function () {
    Route::resource('leads', LeadController::class);
    Route::resource('products', ProductController::class);
    Route::resource('interests', InterestController::class);
    Route::get('/', function () {
        $newLeads =  Lead::countNew();
        return view('dashboard' , compact('newLeads'));
    })->name('dashboard');
    Route::get('stock', [StockController::class, 'index'])->name('stock.index');
    Route::get('stock/{id}', [StockController::class, 'edit'])->name('stock.edit');
    Route::put('stock/{id}', [StockController::class, 'update'])->name('stock.update');
});

Route::post('lead/store',  [LeadController::class, 'store'])->name('lead.store');
Route::delete('lead/{id}',  [LeadController::class, 'delete'])->name('lead.delete');
Route::put('lead/contacted/{id}',  [LeadController::class, 'contacted'])->name('lead.contacted');

Route::get('/{interest}/{product}', [ProductController::class, 'lp'])
    ->where('interest', '[a-zA-Z0-9\-]+')
    ->where('product', '[a-zA-Z0-9\-]+')
    ->name('products.lp');
    

Route::get('/{interest}/{product}/gracias', [ProductController::class, 'gracias'])
    ->where('interest', '[a-zA-Z0-9\-]+')
    ->where('product', '[a-zA-Z0-9\-]+')
    ->name('products.gracias');

require __DIR__.'/auth.php';
