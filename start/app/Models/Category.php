<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function books(){
        /*
        categories
            id
        books
            category_id
        */
        return $this->hasMany(Book::class,'category_id','id');
    }

    public function book(){
        /*
        categories
            id
        books
            category_id
        */
        return $this->hasOne(Book::class,'category_id','id');
    }
}
