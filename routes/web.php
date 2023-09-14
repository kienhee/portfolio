<?php

use App\Http\Controllers\Admin\Auth\AuthController;
use App\Http\Controllers\Admin\Category\CategoryController;
use App\Http\Controllers\Admin\Color\ColorController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\Group\GroupController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\Post\PostController;
use App\Http\Controllers\Admin\Product\ProductController;
use App\Http\Controllers\Admin\Size\SizeController;
use App\Http\Controllers\Admin\Tag\TagController;
use App\Http\Controllers\Admin\User\UserController;
use App\Http\Controllers\Client\ClientController;

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

Route::prefix('/')->name('client.')->group(function () {
    Route::get('/', [ClientController::class, 'index'])->name('index');
    Route::get('about-me', [ClientController::class, 'about'])->name('about');
    Route::get('services', [ClientController::class, 'service'])->name('service');
    Route::get('works', [ClientController::class, 'work'])->name('work');
    Route::get('works/{slug}', [ClientController::class, 'workSingle'])->name('work-single');
    Route::redirect('/blog', 'https://kienhee.com')->name('blog');
    Route::get('contact', [ClientController::class, 'contact'])->name('contact');
});
Route::prefix('/dashboard')->name('dashboard.')->middleware('auth')->group(function () {
    Route::get('/', [DashboardController::class, "dashboard"])->name('index');
    // Quản lý danh mục
    Route::prefix('categories')->name('category.')->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('index');
        Route::get('/add', [categoryController::class, 'add'])->name('add');
        Route::post('/add', [categoryController::class, 'store'])->name('store');
        Route::get('/edit/{category}', [categoryController::class, 'edit'])->name('edit');
        Route::put('/edit/{id}', [categoryController::class, 'update'])->name('update');
        Route::delete('/soft-delete/{id}', [categoryController::class, 'softDelete'])->name('soft-delete');
        Route::delete('/force-delete/{id}', [categoryController::class, 'forceDelete'])->name('force-delete');
        Route::delete('/restore/{id}', [categoryController::class, 'restore'])->name('restore');
    });
    Route::prefix('projects')->name('product.')->group(function () {
        Route::get('/', [ProductController::class, 'index'])->name('index');
        Route::get('/add', [ProductController::class, 'add'])->name('add');
        Route::post('/add', [ProductController::class, 'store'])->name('store');
        Route::get('/edit/{product}', [ProductController::class, 'edit'])->name('edit');
        Route::put('/edit/{id}', [ProductController::class, 'update'])->name('update');
        Route::delete('/soft-delete/{id}', [ProductController::class, 'softDelete'])->name('soft-delete');
        Route::delete('/force-delete/{id}', [ProductController::class, 'forceDelete'])->name('force-delete');
        Route::delete('/restore/{id}', [ProductController::class, 'restore'])->name('restore');
    });

    Route::prefix('technologies')->name('tag.')->group(function () {
        Route::get('/', [TagController::class, 'index'])->name('index');
        Route::get('/add', [TagController::class, 'add'])->name('add');
        Route::post('/add', [TagController::class, 'store'])->name('store');
        Route::get('/edit/{tag}', [TagController::class, 'edit'])->name('edit');
        Route::put('/edit/{id}', [TagController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [TagController::class, 'delete'])->name('delete');
    });

    Route::prefix('users')->name('user.')->group(function () {
        Route::put('/update-info/{id}', [UserController::class, 'update'])->name('update');
        Route::get('/account-setting', [UserController::class, 'AccountSetting'])->name('account-setting');
    });
});
Route::prefix('/auth-dashboard')->name('auth.')->group(function () {
    Route::get('/login', [AuthController::class, 'loginView'])->name('loginView');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
});
//Routes dành cho các mẫu
require __DIR__ . '/template.php';
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
