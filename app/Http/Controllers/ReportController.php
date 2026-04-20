<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book; // Đảm bảo dòng này đúng đường dẫn Model của bạn
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function overview()
{
    // Lấy tất cả sách về Collection
    $allBooks = Book::all();

    // Tính tổng giá trị kho ngay trên code PHP (Collection) 
    // Cách này không bao giờ lỗi SQL hay Builder null
    $totalStockValue = $allBooks->sum(function ($book) {
        return $book->price * $book->stock;
    });

    // Lấy top 5 sản phẩm từ Collection đã có
    $topSellers = $allBooks->sortByDesc('price')->take(5);

    return view('reports.overview', [
        'totalStockValue' => $totalStockValue,
        'topSellers' => $topSellers
    ]);
}
}