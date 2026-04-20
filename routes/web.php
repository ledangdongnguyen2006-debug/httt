<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ReportController;


//tổng quan 
Route::get('/reports/overview', [ReportController::class, 'overview'])->name('reports.overview');
Route::get('/orders/create', function () {
    return view('orders.create');
})->name('orders.create');

///////////////////////////////////////////////////////////////////////////////////////////
//LOGIN
// Vào web hiện Login ngay
Route::get('/', function () {
    return view('login');
});

// Trang chính sau khi đăng nhập
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard')->middleware('auth');

// Trang danh sách sách (Sửa lỗi image_ff5dc2.png)
Route::get('/books', [BookController::class, 'index'])->name('books.index');


///////////////////////////////////////////////////////////////////////////////////////////
// Nút Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Nhóm Quản lý Sách
Route::get('/books', [BookController::class, 'index'])->name('books.index');
Route::get('/books/create', function () {
    return view('books_create'); // Bạn cần tạo file này sau
})->name('books.create');

// Nút Đơn hàng
Route::get('/orders', function () {
    return view('orders'); // Bạn cần tạo file orders.blade.php
})->name('orders.index');

// Nút Tác giả
Route::get('/authors', function () {
    return view('authors'); // Bạn cần tạo file authors.blade.php
})->name('authors.index');

// Nút Cài đặt
Route::get('/settings', function () {
    return view('settings');
})->name('settings');

// Hiển thị form thêm sách
Route::get('/books/create', function () {
    return view('books_create');
})->name('books.create');

// Xử lý khi bấm nút "Lưu"
Route::post('/books', [BookController::class, 'store'])->name('books.store');
