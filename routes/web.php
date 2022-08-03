<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\HomeSectionController;
use App\Http\Controllers\Admin\AboutSectionController;
use App\Http\Controllers\Admin\SkillSectionController;
use App\Http\Controllers\Admin\ProjectSectionController;
use App\Http\Controllers\Admin\EducationSectionController;
use App\Http\Controllers\Admin\ExperienceSectionController;
use App\Http\Controllers\Admin\HomeSectionSocialController;
use App\Http\Controllers\Admin\ProjectCategorySectionController;

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
    Route::get('/about/edit/{id}', [AboutSectionController::class, 'edit'])->name('admin.about.edit');
    Route::put('/about/edit/{id}', [AboutSectionController::class, 'update'])->name('admin.about.update');
    Route::get('/about/delete/{id}', [AboutSectionController::class, 'destroy'])->name('admin.about.delete');

    Route::get('/skill/show', [SkillSectionController::class, 'index'])->name('admin.skill.show');
    Route::get('/skill/create', [SkillSectionController::class, 'create'])->name('admin.skill.create');
    Route::post('/skill/store', [SkillSectionController::class, 'store'])->name('admin.skill.store');
    Route::get('/skill/edit/{id}', [SkillSectionController::class, 'edit'])->name('admin.skill.edit');
    Route::put('/skill/udpate/{id}', [SkillSectionController::class, 'update'])->name('admin.skill.update');
    Route::get('/skill/delete/{id}', [SkillSectionController::class, 'destroy'])->name('admin.skill.delete');

    Route::get('/education/show', [EducationSectionController::class, 'index'])->name('admin.education.show');
    Route::get('/education/create', [EducationSectionController::class, 'create'])->name('admin.education.create');
    Route::post('/education/store', [EducationSectionController::class, 'store'])->name('admin.education.store');
    Route::get('/education/edit/{id}', [EducationSectionController::class, 'edit'])->name('admin.education.edit');
    Route::put('/education/update/{id}', [EducationSectionController::class, 'update'])->name('admin.education.update');
    Route::get('/education/delete/{id}', [EducationSectionController::class, 'destroy'])->name('admin.education.delete');

    Route::get('/experience/show', [ExperienceSectionController::class, 'index'])->name('admin.experience.show');
    Route::get('/experience/create', [ExperienceSectionController::class, 'create'])->name('admin.experience.create');
    Route::post('/experience/store', [ExperienceSectionController::class, 'store'])->name('admin.experience.store');
    Route::get('/experience/edit/{id}', [ExperienceSectionController::class, 'edit'])->name('admin.experience.edit');
    Route::put('/experience/update/{id}', [ExperienceSectionController::class, 'update'])->name('admin.experience.update');
    Route::get('/experience/delete/{id}', [ExperienceSectionController::class, 'destroy'])->name('admin.experience.delete');

    Route::get('/project/show', [ProjectSectionController::class, 'index'])->name('admin.project.show');
    Route::get('/project/create', [ProjectSectionController::class, 'create'])->name('admin.project.create');
    Route::post('/project/store', [ProjectSectionController::class, 'store'])->name('admin.project.store');
    Route::get('/project/edit/{id}', [ProjectSectionController::class, 'edit'])->name('admin.project.edit');
    Route::get('/project/delete/{id}', [ProjectSectionController::class, 'destroy'])->name('admin.project.delete');
    Route::put('/project/update/{id}', [ProjectSectionController::class, 'update'])->name('admin.project.update');


    Route::get('/category/show', [ProjectCategorySectionController::class, 'index'])->name('admin.category.show');
    Route::get('/category/create', [ProjectCategorySectionController::class, 'create'])->name('admin.category.create');
    Route::post('/category/store', [ProjectCategorySectionController::class, 'store'])->name('admin.category.store');
    Route::get('/category/edit/{id}', [ProjectCategorySectionController::class, 'edit'])->name('admin.category.edit');
    Route::put('/category/edit/{id}', [ProjectCategorySectionController::class, 'update'])->name('admin.category.update');
    Route::get('/category/delete/{id}', [ProjectCategorySectionController::class, 'destroy'])->name('admin.category.delete');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//frontend
Route::get('/', [App\Http\Controllers\FrontendController::class, 'index']);


