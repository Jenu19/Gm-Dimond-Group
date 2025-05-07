<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\ProfileSystemController;
use App\Http\Controllers\web\HomeController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/admin', function () {
    return view('admin.auth.login');
})->name('login');
Route::post('check_login', [AdminController::class, 'checklogin'])->name('check_login');
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'AdminAuth'], function () {
    // profile_system
    Route::prefix('profile_system')->name('profile_system.')->group(function () {
        Route::get('/', [ProfileSystemController::class, 'index'])->name('index');
        Route::get('/add', [ProfileSystemController::class, 'add'])->name('add');
        Route::post('/store', [ProfileSystemController::class, 'store'])->name('store');
        Route::get('/edit-{id}', [ProfileSystemController::class, 'edit'])->name('edit');
        Route::post('/update-{id}', [ProfileSystemController::class, 'update'])->name('update');
        Route::post('/delete', [ProfileSystemController::class, 'delete'])->name('delete');
        Route::post('/status', [ProfileSystemController::class, 'status'])->name('status');
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
