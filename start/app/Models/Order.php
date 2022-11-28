<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public function books(){
        return $this->belongsToMany(
            Book::class,//ten class
            'order_detail',//ten bang trung gian
            'order_id',//khoa ngoai tham chieu bang hien tai
            'book_id'//khoa ngoai tham chieu bang quan he
        );
    }
}
