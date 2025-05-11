<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\BlogController;
use App\Http\Controllers\admin\PioneersController;
use App\Http\Controllers\web\HomeController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/admin', function () {
    return view('admin.auth.login');
})->name('login');
Route::post('check_login', [AdminController::class, 'checklogin'])->name('check_login');
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'AdminAuth'], function () {
    // blogs
    Route::prefix('blog')->name('blog.')->group(function () {
        Route::get('/', [BlogController::class, 'index'])->name('index');
        Route::get('/add', [BlogController::class, 'add'])->name('add');
        Route::post('/store', [BlogController::class, 'store'])->name('store');
        Route::get('/edit-{id}', [BlogController::class, 'edit'])->name('edit');
        Route::post('/update-{id}', [BlogController::class, 'update'])->name('update');
        Route::post('/delete', [BlogController::class, 'delete'])->name('delete');
        Route::post('/status', [BlogController::class, 'status'])->name('status');
    });
    
    // pioneers
    Route::prefix('pioneers')->name('pioneers.')->group(function () {
        Route::get('/', [PioneersController::class, 'index'])->name('index');
        Route::get('/add', [PioneersController::class, 'add'])->name('add');
        Route::post('/store', [PioneersController::class, 'store'])->name('store');
        Route::get('/edit-{id}', [PioneersController::class, 'edit'])->name('edit');
        Route::post('/update-{id}', [PioneersController::class, 'update'])->name('update');
        Route::post('/delete', [PioneersController::class, 'delete'])->name('delete');
        Route::post('/status', [PioneersController::class, 'status'])->name('status');
    });
    // clear-cache
    Route::get('clear-cache', function () {
        Artisan::call('cache:clear');
        Artisan::call('route:clear');
        Artisan::call('config:clear');
        Artisan::call('view:clear');
        return redirect()->back()->with('success', 'Cache Cleared Successfully');
    })->name('clearcache');
    Route::get('/logout', [AdminController::class, 'logout'])->name('logout');
});
