<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    // API lấy danh sách tất cả sách
    public function index()
    {
        // Lấy tất cả sách kèm thông tin tác giả
        $books = Book::with('author')->get();
        return response()->json($books);
    }
}