<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        // 1. Tạo đơn hàng mới
        $order = Order::create([
            'user_id' => $request->user()->id, // Lấy từ user đang đăng nhập
            'total_price' => $request->total_price,
            'status' => 'pending'
        ]);

        // 2. Lưu chi tiết từng cuốn sách trong đơn
        foreach ($request->items as $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'book_id' => $item['book_id'],
                'quantity' => $item['quantity'],
                'price_at_purchase' => $item['price']
            ]);
        }

        return response()->json(['message' => 'Đặt hàng thành công!', 'order_id' => $order->id], 201);
    }
}