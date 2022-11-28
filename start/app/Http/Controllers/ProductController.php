<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = [
            [
                'name' => 'Iphone X',
                'price' => 20000,
            ],
            [
                'name' => 'Iphone 13',
                'price' => 30000,
            ],
            [
                'name' => 'Iphone 14',
                'price' => 40000,
            ]
        ];
        $title = 'quan li san pham';
        $params = [
            'title' => $title,
            'products'=> $products
        ];
        // goi view va truyen data
        return view('products.index',$params);

        // return view('products.index')
        //     ->with('title',$title)
        //     ->with('products',$products);

        // return view('products.index', compact(['title', 'products']));
        
        
    }
    public function create(){
        return view('products.create');
    }
    public function store(Request $request){
        echo 'xu ly them';
    }
    public function show($id){
        echo 'xem chi tiết '.$id;
    }
    public function edit($id){
        echo 'trang edit'.$id;
    }
    public function update(Request $request,$id){
        echo 'xu li update'.$id;
    }
    public function delete($id){
        echo 'xu li xoa'.$id;
    }
}
