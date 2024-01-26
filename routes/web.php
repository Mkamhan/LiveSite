<?php

use App\Http\Controllers\WebController;
use App\Models\Categorie;
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

// Route::get('/', function () {
//     return view('site.index',['categories'=>Categorie::tree()]);
// });
// Route::get('/1', function () {
//     return view('welcome',['categories'=>Categorie::tree()]);
// });
// Route::get('/game', function () {
//     return view('site.pages.game',['categories'=>Categorie::isChild1(1)]);
// });
// Route::get('/chat', function () {
//     return view('site.pages.chat',['categories'=>Categorie::isChild1(2)]);
// });
// Route::get('/card', function () {
//     return view('site.pages.card',['categories'=>Categorie::isChild1(3)]);
// });
// Route::view('/xx', 'login');

// Route::view('/x', 'home');
// Route::view('/home', 'back.pages.home')->name('home');

Route::get('/',[WebController::class,'index'])->name('home');
Route::get('/card',[WebController::class,'siteCard'])->name('card');
Route::get('/chat',[WebController::class,'siteChat'])->name('chat');
Route::get('/game',[WebController::class,'siteGame'])->name('game');
Route::get('/sin',[WebController::class,'sitesin'])->name('sin');
Route::get('/game-singel/{game}',[WebController::class,'sitesins'])->name('game-singel');
Route::get('/game/{game}',[WebController::class,'sitesins'])->name('game-singel');
Route::get('/category/{category}/secion',[WebController::class,'siteCategory'])->name('category');
Route::get('/category/category-singel/{id}',[WebController::class,'siteCategorySingel'])->name('category-singel');

// Route::view('/privacy-policy','site.pages.privacy-policy',compact('title'))->name('privacy-policy');
// Route::view('/contact','site.pages.contact',compact('title'))->name('contact');
// Route::view('/about','site.pages.about',compact('title','من نحن'))->name('about');

Route::get('/privacy-policy', function () {
    $title='السياسة والخصوصية';
        return view('site.pages.privacy-policy',compact('title'));
    })->name('privacy-policy');
 Route::get('/contact', function () {
        $title='تواصل معنا';
            return view('site.pages.contact',compact('title'));
        })->name('contact');

 Route::get('/about', function () {
            $title='من نحن';
                return view('site.pages.about',compact('title'));
            })->name('about');

