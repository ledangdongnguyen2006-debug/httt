<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    public function books() {
    return $this->hasMany(Book::class); // 1 Tác giả có nhiều Sách
}
}
