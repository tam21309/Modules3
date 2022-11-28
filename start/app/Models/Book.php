<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    // protected $table = 'books';
    // protected $primaryKey = 'id';
    //public $timestamps = true;

    
    public function category(){
        return $this->belongsTo(Category::class,'category_id','id');
    }

    public function orders(){
        /*
            orders
                id
            books
                id
            order_book
                book_id
                order_id
        */
        return $this->belongsToMany(
            Order::class,//ten class
            'order_detail',//ten bang trung gian
            'book_id',//khoa ngoai tham chieu bang hien tai
            'order_id'//khoa ngoai tham chieu bang quan he
        );
    }

}
