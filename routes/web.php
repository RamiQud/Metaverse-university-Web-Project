<?php

use App\Http\Controllers\AdminaboutController;
use App\Http\Controllers\Adminhome;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\WorkController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManagerController;
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
    return view('index')->name('index');
});

Route::prefix('/')->middleware('auth')->group(function(){
    Route::get('/',[AdminaboutController::class,'index'])->name('admins/index');
    Route::resource('about', AdminaboutController::class);
    Route::resource('index', AdminaboutController::class);   
    Route::resource('categories', CategoryController::class);
    Route::resource('works',WorkController::class);
    Route::resource('posts',PostController::class);
    Route::get('auth/register', [Adminhome::class, 'register'])->name('register');
  
});
Route::get('/', [Adminhome::class, 'index'])->name('index');
Route::get('/Packeges', [Adminhome::class, 'Packeges'])->name('Packeges');
Route::get('/Creat-Avatar', [Adminhome::class, 'CreatAvatar'])->name('Creat-Avatar');
Route::get('/General-Chat', [Adminhome::class, 'GeneralChat'])->name('General-Chat');
Route::get('/Support&Services', [Adminhome::class, 'SupportServices'])->name('Support&Services');
Route::get('/contact', [Adminhome::class, 'contact'])->name('contact');

Route::get('/auth/login', [Adminhome::class, 'login'])->name('login');
Route::get('auth/register', [Adminhome::class, 'register'])->name('register');
Route::get('admins/index', [AdminaboutController::class, 'index'])->name('LoginSup');
Route::get('/', [Adminhome::class, 'logout'])->name('logout');





// route for user login
// Route::get('/auth/UserPasswords/login', [Adminhome::class, 'login'])->name('login');
// Route::post('/auth/UserPasswords/login', [AuthManagerController::class, 'loginPost'])->name('login.post');
// Route::get('/registertion', [AuthManagerController::class, 'registertion'])->name('registertion');
// Route::post('/registertion', [AuthManagerController::class, 'registertionPost'])->name('registertion.post');

Route::get('/stocks/layout', function () {
    return view('stocks.layout');
})->name('stocks.layout');


// Auth::routes();

Route::get('/index', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
