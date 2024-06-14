<?php

use App\Http\Controllers\CommentsController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/news',[NewsController::class, 'showAll'])->name('news.index');

Route::get('/add', [NewsController::class, 'addGet'])->name('news.add.get')->middleware('auth');
Route::post('/add', [NewsController::class, 'addPost'])->name('news.add.post');
Route::get('/article/{id}', [NewsController::class, 'showItem'])->name('article');
Route::get('/lang/{locale}', [LocalizationController::class, 'changeLocate'])->name('lang.change');
Route::get('/comments/add/{newsId}', [CommentsController::class, 'addGet'])->name('comments.add.get');
Route::post('/comments/add', [CommentsController::class, 'addPost'])->name('comments.add.post');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
