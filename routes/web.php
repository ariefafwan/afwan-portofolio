<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\ConfirmPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [UserController::class, 'welcome'])->name('welcome');
Route::get('/contactme', [UserController::class, 'contactme'])->name('contactme');

Route::get('/myproject', [UserController::class, 'project'])->name('myproject');
Route::get('/detailproject/{id}', [UserController::class, 'detailproject'])->name('detailproject');

Route::get('/blog', [UserController::class, 'blog'])->name('blog');

Route::get('afwan-login-auth', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('afwan-login-auth', [LoginController::class, 'login']);

Route::get('password/confirm', [ConfirmPasswordController::class, 'showConfirmForm'])->name('password.confirm');
Route::post('password/confirm', [ConfirmPasswordController::class, 'confirm']);

Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');

Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');

// Auth::routes();
Route::middleware('auth')->group(function () {
    //home
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    //dashboard
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    //project
    Route::get('/projectall', [AdminController::class, 'project'])->name('project.index');
    Route::get('/inputmyproject', [AdminController::class, 'createproject'])->name('project.create');
    Route::post('/inputmyproject', [AdminController::class, 'storeproject'])->name('project.store');
    Route::get('/showmyproject/{id}', [AdminController::class, 'showproject'])->name('project.show');
    Route::get('/editmyproject/{id}', [AdminController::class, 'editproject'])->name('project.edit');
    Route::post('/editmyproject/{id}', [AdminController::class, 'updateproject'])->name('project.update');
    Route::post('/destroymyproject/{id}', [AdminController::class, 'destroyproject'])->name('project.destroy');
    //profile
    Route::get('/myprofile', [AdminController::class, 'profile'])->name('profile.index');
    Route::get('/editmyprofile/{id}', [AdminController::class, 'editprofile'])->name('profile.edit');
    Route::post('.editmyprofile/{id}', [AdminController::class, 'updateprofile'])->name('profile.update');
    //skillkategori
    Route::get('/myskills', [AdminController::class, 'skill'])->name('skill.index');
    Route::post('/cretenewskillkategori', [AdminController::class, 'storeskillkategori'])->name('skillkategori.store');
    // Route::get('/editmyskillkategori/{id}', [AdminController::class, 'editskillkategori'])->name('skillkategori.edit');
    Route::post('/editmyskillkategori/{id}', [AdminController::class, 'updateskillkategori'])->name('skillkategori.update');
    Route::post('/destroyskillkategori/{id}', [AdminController::class, 'destroyskillkategori'])->name('skillkategori.destroy');
    //skills
    Route::post('/cratemynewskills', [AdminController::class, 'storeskill'])->name('skill.store');
    Route::get('/editmyskill/{id}', [AdminController::class, 'editskill'])->name('skill.edit');
    Route::post('/updatemyskill', [AdminController::class, 'updateskill'])->name('skill.update');
    Route::post('/destroyskill/{id}', [AdminController::class, 'destroyskill'])->name('skill.destroy');
    //kategoriblog
    Route::get('/kategoriblog', [BlogController::class, 'kategoriblog'])->name('kategori.index');
    Route::get('/editkategori/{id}', [BlogController::class, 'editkategori'])->name('kategori.edit');
    Route::post('/kategoriblog', [BlogController::class, 'storekategori'])->name('kategori.store');
    Route::post('/updatekategoriblog', [BlogController::class, 'updatekategori'])->name('kategori.update');
    Route::post('/destroykategori/{id}', [BlogController::class, 'destroykategori'])->name('kategori.destroy');
});

Route::post('logout', [LoginController::class, 'logout'])->name('logout');
