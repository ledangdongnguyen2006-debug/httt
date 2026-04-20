<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function items() {
    return $this->hasMany(OrderItem::class); // 1 Đơn hàng có nhiều mục chi tiết
}
}
