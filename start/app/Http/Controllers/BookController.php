<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $items = Book::all();//Eloquent
        $items = DB::table('books')->get();//Query Builder
        dd( $items->toArray() );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Eloquent
        $book = new Book();
        $book->name = 'Chi Dau';
        $book->category_id = 2;
        $book->price = 2000;
        $book->description = 'Tac pham hay';
        $book->save();

        // Querybuilder
        DB::table('books')->insert([
            'category_id' => 1,
            'name' => 'vo nhat 2',
            'price' => 123333,
            'description' => 'van hoc'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //select * from books where id = $id
        // $item = Book::find($id);//Eloquent
        $item = DB::table('books')
        // ->where('category_id','=',1)
        ->where('id','=',$id)
        ->first();//Query Builder
        dd( $item );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Eloquent
        $book = Book::find($id);
        $book->name = 'Chi Dau 3';
        $book->category_id = 2;
        $book->price = 2000;
        $book->description = 'Tac pham hay';
        $book->save();

        // Query builder
        DB::table('books')
              ->where('id', $id)
              ->update([
                'name' => 'Chi dau 4',
                'price' => 3000
              ]);

        // Xoa
        $book = Book::find($id);
        $book->delete();

        // Querybuilder
        // DB::table('users')->where('id', '=', $id)->delete();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::find($id);
        $book->delete();
    }
}
