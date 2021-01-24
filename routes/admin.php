<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('admin.layouts.main');
});

Route::get('danh-muc', [CategoryController::class, 'index'])->name('cate.index');
Route::get('danh-muc/{id}/remove', [CategoryController::class, 'remove'])->name('cate.remove');
Route::get('danh-muc/add', [CategoryController::class, 'add'])->name('cate.add');
Route::post('danh-muc/add', [CategoryController::class, 'saveAdd']);
Route::get('danh-muc/{id}/edit', [CategoryController::class, 'edit'])->name('cate.edit');
Route::post('danh-muc/{id}/edit', [CategoryController::class, 'saveEdit']);



Route::get('san-pham', [ProductController::class, 'index'])->name('pro.index');
Route::get('san-pham/{id}/remove', [ProductController::class, 'remove'])->name('pro.remove');
Route::get('san-pham/add', [ProductController::class, 'add'])->name('pro.add');
Route::post('san-pham/add', [ProductController::class, 'saveAdd']);

?>