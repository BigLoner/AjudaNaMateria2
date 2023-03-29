<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

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
    return view('welcome');
});







Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Auth::routes();
Route::get('Blog', [App\Http\Controllers\BlogController::class, 'Blog'])->name('Blog');
Route::get('Regras', [App\Http\Controllers\AllController::class, 'Regras'])->name('Regras');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');







//Route::middleware(['auth', ''])->group(function () {
   //Route::get('/moderadores/home', [HomeController::class, 'Moderadores'])->name('moderadores.home');
 // });
  //Route::middleware(['auth', ''])->group(function () {

   // Route::get('/', [HomeController::class, 'welcome'])->name('welcome');
 // });

  //Route::middleware(['auth', '  '])->group(function () {

    //  Route::get('/professor/home', [HomeController::class, 'professorhome'])->name('professor.home');

  //});
  Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
  Route::get('/admin/regras', [App\Http\Controllers\HomeController::class, 'adminRegras'])->name('admin.regras')->middleware('is_admin');
  Route::get('/admin/blog', [App\Http\Controllers\HomeController::class, 'adminBlog'])->name('admin.blog')->middleware('is_admin');
  Route::get('/admin/detail/{id}', [App\Http\Controllers\HomeController::class, 'adminDetail'])->name('admin.detail')->middleware('auth');


  Route::get('/user/home', [App\Http\Controllers\HomeController::class, 'userHome'])->name('user.home')->middleware('auth');
  Route::get('/user/regras', [App\Http\Controllers\HomeController::class, 'userRegras'])->name('user.regras')->middleware('auth');
  Route::get('/user/blog', [App\Http\Controllers\HomeController::class, 'userBlog'])->name('user.blog')->middleware('auth');
  Route::get('/user/detail/{id}', [App\Http\Controllers\HomeController::class, 'userDetail'])->name('user.detail')->middleware('auth');
  Route::get('/blog/detail/{id}', [App\Http\Controllers\DetailBlogController::class, 'detailBlog'])->name('detailBlog');


  Route::resource('posts', 'App\Http\Controllers\PostController');

  Route::get('posts', 'App\Http\Controllers\PostController@index')->name('posts')->middleware('auth');

  Route::resource('categorias', 'App\Http\Controllers\CategoriaController');

  Route::get('categorias', 'App\Http\Controllers\CategoriaController@index')->name('categorias')->middleware('auth');
