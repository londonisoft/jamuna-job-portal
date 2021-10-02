<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\addPostController;
use App\Http\Controllers\ApprovePostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PendingPostController;
use App\Http\Controllers\PrintAdmit;
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

Route::get('/career', function () {
    return view('career');
});
Route::get('/', function () {
    return view('home');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/application', function () {
    return view('application');
});
Route::post('store-form', [PostController::class, 'store']);
// Route::post('store-form', 'App\Http\Controllers\PostController@store');
// Route::post('store-form', [PostController::class, 'store']);

Auth::routes();

Route::get('/register', function() {
    return redirect('/login');
});

Route::group(['middleware' => ['auth'], 'prefix' => 'admin'], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout']);

    //profile
    Route::get('profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::post('/password/update', [ProfileController::class, 'passwordUpdate'])->name('password.update');
    
    Route::get('setting', [SettingController::class, 'index']);
    Route::post('setting/update', [SettingController::class, 'update'])->name('setting.store');

    //post..
    Route::get('posts/index', [addPostController::class, 'index'])->name('posts.index');
    Route::post('/posts/show', [addPostController::class, 'show'])->name('posts.show');
    Route::post('/posts/create', [addPostController::class, 'create'])->name('posts.create');
    Route::post('/posts/store', [addPostController::class, 'store'])->name('posts.store');
    Route::post('/posts/edit', [addPostController::class, 'edit'])->name('posts.edit');
    Route::post('/posts/update', [addPostController::class, 'update'])->name('posts.update');
    Route::post('/posts/delete', [addPostController::class, 'show_delete'])->name('posts.deleteShow');
    Route::post('posts/destroy', [addPostController::class, 'destroy'])->name('posts.destroy');
    Route::get('posts/fetch_data', [addPostController::class, 'pagination']);
    Route::post('/posts/sub_categories', [addPostController::class, 'subCategories'])->name('posts.sub_categories');
    
    //post..
    Route::get('posts-approve/index', [ApprovePostController::class, 'index'])->name('posts-approve.index');
    Route::get('posts-approve/fetch_data', [ApprovePostController::class, 'pagination']);
    //post..
    Route::get('posts-pending/index', [PendingPostController::class, 'index'])->name('posts-pending.index');
    Route::get('posts-pending/fetch_data', [PendingPostController::class, 'pagination']);
    Route::get('print-admit/index', [PrintAdmit::class, 'index'])->name('print-admit.index');

});