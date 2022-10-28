<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\AuthentificationController;
use App\Http\Controllers\BienController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\TypeArticleController;
use App\Http\Controllers\TypeBienController;
use App\Http\Controllers\VisiteController;

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



Route::get('/',[SiteController::class,'accueil'])->name('home');
Route::get('about',[SiteController::class,'about'])->name('about');
Route::get('blog',[SiteController::class,'blog'])->name('blog');
Route::get('biens',[SiteController::class,'bien'])->name('bien');
Route::get('bien/details/{token}',[SiteController::class,'detail_bien'])->name('detail_bien');
Route::get('article/details/{token}',[SiteController::class,'detail_article'])->name('detail_article');
Route::get('type-bien/{type}',[SiteController::class,'bien_par_type'])->name('type-bien');
Route::get('contact',[SiteController::class,'contact'])->name('contact');
Route::post('prendre-rdv',[SiteController::class,'rdv'])->name('rdv');
Route::get('auth',[SiteController::class,'login'])->name('login');
Route::get('admin', [AuthentificationController::class, 'create'])
->name('login');

Route::post('save/message',[SiteController::class,'laisser_message'])->name('laisser_message');
Route::post('auth', [AuthentificationController::class, 'store'])->name('auth');
require __DIR__.'/auth.php';

Route::middleware(['auth'])->prefix('dashboard')->group(function () {

    Route::get('/',[DashboardController::class,'home'])->name('dashboard');
    Route::get('/change-mot-de-passe',[DashboardController::class,'change_password'])->name('change-password');
    Route::post('/change-mot-de-passe',[DashboardController::class,'changed_password'])->name('changed-password');

    Route::prefix('type-bien')->name('type-bien.')->group(function(){
        Route::get('/',[TypeBienController::class,'index'])->name('index');
        Route::get('create',[TypeBienController::class,'create'])->name('create');
        Route::post('store',[TypeBienController::class,'store'])->name('store');
        Route::get('edit/{id}',[TypeBienController::class,'edit'])->name('edit');
        Route::post('update/{id}',[TypeBienController::class,'update'])->name('update');
        Route::get('delete/{id}',[TypeBienController::class,'destroy'])->name('destroy');
    });


    Route::prefix('type-articles')->name('type-article.')->group(function(){
        Route::get('/',[TypeArticleController::class,'index'])->name('index');
        Route::get('create',[TypeArticleController::class,'create'])->name('create');
        Route::post('store',[TypeArticleController::class,'store'])->name('store');
        Route::get('edit/{id}',[TypeArticleController::class,'edit'])->name('edit');
        Route::post('update/{id}',[TypeArticleController::class,'update'])->name('update');
        Route::get('delete/{id}',[TypeArticleController::class,'destroy'])->name('destroy');
    });


    Route::prefix('bien')->name('bien.')->group(function(){
        Route::get('/',[BienController::class,'index'])->name('index');
        Route::get('create',[BienController::class,'create'])->name('create');
        Route::post('store',[BienController::class,'store'])->name('store');
        Route::get('edit/{id}',[BienController::class,'edit'])->name('edit');
        Route::get('show/{token}',[BienController::class,'show'])->name('show');
        Route::get('visite/{token}',[BienController::class,'visite'])->name('visite');
        Route::post('update/{id}',[BienController::class,'update'])->name('update');
        Route::get('delete/{id}',[BienController::class,'destroy'])->name('destroy');
    });


    Route::prefix('article')->name('article.')->group(function(){
        Route::get('/',[ArticleController::class,'index'])->name('index');
        Route::get('create',[ArticleController::class,'create'])->name('create');
        Route::post('store',[ArticleController::class,'store'])->name('store');
        Route::get('edit/{id}',[ArticleController::class,'edit'])->name('edit');
        Route::get('show/{token}',[ArticleController::class,'show'])->name('show');
        Route::post('update/{id}',[ArticleController::class,'update'])->name('update');
        Route::get('delete/{id}',[ArticleController::class,'destroy'])->name('destroy');

    });

    Route::prefix('visites')->name('visite.')->group(function(){
        Route::get('/',[VisiteController::class,'index'])->name('index');
        Route::get('/approuver/{toke}',[VisiteController::class,'valider'])->name('valider');
        Route::get('/refuser/{toke}',[VisiteController::class,'refuser'])->name('refuser');
    });


    Route::prefix('message')->name('message.')->group(function(){
        Route::get('/',[MessageController::class,'index'])->name('index');
    });


    Route::prefix('users')->name('user.')->group(function(){
        Route::get('/',[DashboardController::class,'list_user'])->name('index');
        Route::get('/create',[DashboardController::class,'create_user'])->name('create');
        Route::post('/save',[DashboardController::class,'store_user'])->name('store');
        Route::get('delete/{id}',[DashboardController::class,'destroy'])->name('destroy');

    });
});
