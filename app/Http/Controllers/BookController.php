<?php

namespace App\Http\Controllers;

use App\Models\Book; // Đã đơn giản hóa tên Model
use Illuminate\Http\Request;

class BookController extends Controller
{
    // Hiển thị danh sách sách
    public function index()
    {
        $books = Book::with('author')->get();
        // Trả về view 
        return view('books.index', compact('books'));
    }

    // Lưu sách mới vào database
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
        ]);

        Book::create($request->all());

        // Sau khi lưu xong, quay lại trang danh sách kèm thông báo
        return redirect()->route('books.index')->with('success', 'Thêm sách thành công!');
    }
}