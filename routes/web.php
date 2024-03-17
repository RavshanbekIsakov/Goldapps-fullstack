<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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



Route::get('/', [UserController::class, 'index'])->name('user.index');
Route::get('/read-post/{id}', [UserController::class, 'read'])->name('user.read');
Route::view('news_page', 'user.news_page')->name("user.news_page");

Route::prefix('admin')->group(callback: function () {
    Route::view('/', 'admin.login')->name("admin.login");
    Route::post('/auth', [AdminController::class,'auth'])->name('admin.auth');

    Route::middleware(['adminAuth'])->group(function () {
        Route::get('logout', [AdminController::class, 'logout'])->name('admin.logout');
        Route::view('profile','admin.profile')->name('admin.profile');
        Route::post('profile',[AdminController::class, 'update_password'])->name('admin.password.update');

        Route::get('section/{id}', [AdminController::class, 'section'])->name('admin.view.section');

        Route::get('projects', [AdminController::class, 'projects'])->name('admin.view.projects');
        Route::post('add-project', [AdminController::class, 'add_successfull_project'])->name('admin.add.project');
        Route::delete('delete-project', [AdminController::class, 'delete_successfull_project'])->name('admin.delete.project');

        Route::get('partner-companies', [AdminController::class, 'companies'])->name('admin.view.partner_companies');
        Route::post('add-companies', [AdminController::class, 'add_companies'])->name('admin.add.companies');
        Route::delete('delete-companies', [AdminController::class, 'delete_companies'])->name('admin.delete.companies');

        Route::get('news', [AdminController::class, 'news'])->name('admin.view.news');
        Route::post('add-news', [AdminController::class, 'add_news'])->name('admin.add.news');
        Route::delete('delete-news', [AdminController::class, 'delete_news'])->name('admin.delete.news');

        Route::get('images', [AdminController::class, 'images'])->name('admin.view.images');
        Route::post('add-images', [AdminController::class, 'add_image'])->name('admin.add.image');
        Route::delete('delete-images', [AdminController::class, 'delete_images'])->name('admin.delete.images');

    });
});
