<?php
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\WelcomeController;
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
//     return view('welcome');
// });
Route::get('/1', [WelcomeController::class, 'index'])->name('home');
Route::get('/About', [AboutController::class, 'index'])->name('about');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::prefix('post')->group(function () {
    Route::get('/index', [
        'as' => 'post.index',
        'uses' => 'PostController@index'
    ]);
    Route::get('/create', [
        'as' => 'post.create',
        'uses' => 'PostController@create'
    ]);
    });