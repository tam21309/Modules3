<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        echo 'Trang danh sách';
    }
    public function create(){
        echo 'Trang thêm mới';
    }
    public function show($id){
        echo 'Trang chi tiết'.$id;
    }
    public function store($id){
        echo 'Trang danh sách'.$id;
    }
    public function edit($id){
        echo 'Trang sửa'.$id;
    }
    public function update(Request $request,$id){
        echo 'Trang cập nhật'.$id;
    }
    public function delete($id){
        echo 'Trang xóa'.$id;
    }
}
