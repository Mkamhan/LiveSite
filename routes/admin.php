<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminControler;
use App\Http\Controllers\CategorieController;
use Illuminate\Support\Facades\Artisan;
use App\Http\Livewire\AdminSettings;

Route::prefix('admin')->name('admin.')->group(function(){

    Route::middleware(['guest:admin','PreventBackHistory'])->group(function () {
        Route::view('/login', 'back.pages.admin.auth.login')->name('login');
        Route::post('/login_handler',[AdminControler::class,'loginHandler'])->name('login_handler');
        Route::view('/forgot-password', 'back.pages.admin.auth.forgot-password')->name('forgot-password');
        Route::post('/send-password-reset-link',[AdminControler::class,'sendPasswordResetLink'])->name('send-password-reset-link');
        Route::get('/password/reset/{token}',[AdminControler::class,'resetPassword'])->name('reset-password');
        Route::post('/reset-password-handler',[AdminControler::class,'resetPasswordHandler'])->name('reset-password-handler');
    });
    Route::middleware(['auth:admin','PreventBackHistory'])->group(function () {
        Route::view('/home', 'back.pages.home')->name('home');
        Route::post('/logout_handler',[AdminControler::class,'logoutHandler'])->name('logout_handler');
        Route::get('/profile',[AdminControler::class,'proFileView'])->name('profile');
        Route::post('/change-profile-picture',[AdminControler::class,'changeProfilePicture'])->name('change-profile-picture');
        Route::view('/settings', 'back.pages.settings')->name('settings');
        Route::post('/change-logo',[AdminControler::class,'changeLogo'])->name('change-logo');
        Route::post('/change-favicon',[AdminControler::class,'changeFavicon'])->name('change-favicon');
        Route::resource('categorie', CategorieController::class);
        // Route::get('/categorie', [CategorieController::class, 'index'])->name('categorie.index');
        // Route::get('/categorie-create', [CategorieController::class, 'create'])->name('categorie.create');
        // Route::post('/categorie-create', [CategorieController::class, 'store'])->name('categorie.create');
        // Route::get('/categorie/{$id}/show', [CategorieController::class, 'show'])->name('categorie.show');
        // Route::get('/categorie/{$id}/edit', [CategorieController::class, 'edit'])->name('categorie.edit');
        //Route::post('/store-catogry', [AdminControler::class, 'storeCatogry'])->name('store-catogry');





















///////////////////////////cashe///////////////////////////////////////
        Route::get('/route-cache',function(){
            Artisan::call('route:cache');
            return  view('admin/home')->with('success','sssssssssssssssss');

        });
        Route::get('/config-cache',function(){
            Artisan::call('config:cache');
            return 'Config cache Cleared';
        });
        Route::get('/clear-cache',function(){
            Artisan::call('cache:clear');
            return 'Application cache Cleared';
        });
        Route::get('/view-cache',function(){
            Artisan::call('view:clear');
            //return 'Config cache Cleared';
            return back()->with('success','success');
        });

        Route::get('/optimize-cache',function(){
            Artisan::call('optimize:clear');

            //return back('admin.home');
            return back()->with('success','success');
        })->name('cache-clear');

    });


});
