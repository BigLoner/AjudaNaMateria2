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

Route::get('Regras', function () {
    return view('Regras');
});

Route::get('Blog', function () {
    return view('Blog');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('alunos', [App\Http\Controllers\AlunoController::class, 'index']);
require __DIR__.'/auth.php';


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

//Route::middleware(['auth', ''])->group(function () {
   //Route::get('/moderadores/home', [HomeController::class, 'Moderadores'])->name('moderadores.home');
 // });
  //Route::middleware(['auth', ''])->group(function () {

   // Route::get('/', [HomeController::class, 'welcome'])->name('welcome');
 // });

  //Route::middleware(['auth', '  '])->group(function () {

    //  Route::get('/professor/home', [HomeController::class, 'professorhome'])->name('professor.home');
  //});
  Route::get('/admin/regras', [App\Http\Controllers\HomeController::class, 'adminRegras'])->name('admin.regras');
  Route::get('/admin/blog', [App\Http\Controllers\HomeController::class, 'adminBlog'])->name('admin.blog');
  Route::resource('posts', 'App\Http\Controllers\PostController');
  Route::get('posts', 'App\Http\Controllers\PostController@index')->name('posts');
  Route::resource('categorias', CategoriaController::class);
