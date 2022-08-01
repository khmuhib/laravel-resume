<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\HomeSectionController;
use App\Http\Controllers\Admin\AboutSectionController;
use App\Http\Controllers\Admin\HomeSectionSocialController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/', function () {
//     return view('frontend.index');
// });

Route::get('/portfolio', function () {
    return view('frontend.portfolio_detail');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/header/show', [HomeSectionController::class, 'index'])->name('admin.header.show');
    Route::get('/header/create', [HomeSectionController::class, 'create'])->name('admin.header.create');
    Route::post('/header/store', [HomeSectionController::class, 'store'])->name('admin.header.store');
    Route::get('/header/edit/{id}', [HomeSectionController::class, 'edit'])->name('admin.header.edit');
    Route::put('/header/edit/{id}', [HomeSectionController::class, 'update'])->name('admin.header.update');
    Route::get('/header/delete/{id}', [HomeSectionController::class, 'destroy'])->name('admin.header.delete');


    Route::get('/header/social/show', [HomeSectionSocialController::class, 'index'])->name('admin.header.social.show');
    Route::get('/header/social/create', [HomeSectionSocialController::class, 'create'])->name('admin.header.social.create');
    Route::post('/header/social/store', [HomeSectionSocialController::class, 'store'])->name('admin.header.social.store');
    Route::get('/header/social/edit/{id}', [HomeSectionSocialController::class, 'edit'])->name('admin.header.social.edit');
    Route::put('/header/social/edit/{id}', [HomeSectionSocialController::class, 'update'])->name('admin.header.social.udpate');

    Route::get('/about/show', [AboutSectionController::class, 'index'])->name('admin.about.show');
    Route::get('/about/create', [AboutSectionController::class, 'create'])->name('admin.about.create');
    Route::post('/about/store', [AboutSectionController::class, 'store'])->name('admin.about.store');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//frontend
Route::get('/', [App\Http\Controllers\FrontendController::class, 'index']);


