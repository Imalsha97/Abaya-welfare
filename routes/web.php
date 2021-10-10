<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\{PCategoryController, PortfolioController};
use App\Http\Controllers\FrontController;



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
//Home Page
//Route::get('/', 'HomeController@index');
Route::get('/', [FrontController::class, 'home'])->name('homepage');
Route::get('/portfolio/{id}', [FrontController::class, 'portfolio'])->name('portfolio');



Route::post('/contact-form', [FrontController::class, 'storeContactForm'])->name('contact-form.store');


Route::redirect('/home', '/admin/portfolio');
Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
     // Manage Portfolio Categories
     Route::get('portfolio-categories', [PCategoryController::class, 'index'])->name('pcategory');
     Route::post('portfolio-categories', [PCategoryController::class, 'store'])->name('pcategory.store');
     Route::get('Portfolio-categories/edit/{id}', [PCategoryController::class, 'edit'])->name('pcategory.edit');
     Route::post('Portfolio-categories/edit/{id}', [PCategoryController::class, 'update'])->name('pcategory.update');
     Route::delete('Portfolio-categories/destroy/{id}',[PCategoryController::class, 'destroy'])->name('pcategory.destroy');

     // Manage Portfolio
    Route::get('portfolio', [PortfolioController::class, 'index'])->name('portfolio');
    Route::get('portfolio/create', [PortfolioController::class, 'create'])->name('portfolio.create');
    Route::post('portfolio/create', [PortfolioController::class, 'store'])->name('portfolio.store');
    Route::get('portfolio/edit/{id}', [PortfolioController::class, 'edit'])->name('portfolio.edit');
    Route::post('portfolio/edit/{id}', [PortfolioController::class, 'update'])->name('portfolio.update');
    Route::delete('portfolio/destroy/{id}',[PortfolioController::class, 'destroy'])->name('portfolio.destroy');

    });
    Route::get('/link', function () {
        Artisan::call('storage:link');
    });
    Route::get('/optimize', function () {
        Artisan::call('optimize');
    });
