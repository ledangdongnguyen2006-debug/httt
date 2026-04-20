<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    // Thêm đoạn này vào để khai báo mối quan hệ
    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}