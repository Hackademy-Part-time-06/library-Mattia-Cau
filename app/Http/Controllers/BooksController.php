<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BooksController extends Controller
{

    public function index(){

        $books= Book::all();
        return view('index', ['books'=>$books]);
    }


    public function store(Request $request){

        // $book =new Book();
        // $book->name= 'esempio';
        // $book->pages=111 ;
        // $book->year=2022 ;
        // $book->author='esempio ';
        // $book->save();
        // dd('crea');

        Book::create([
            'name'=>$request->name,
            'author'=>$request->author,
            'year'=>$request->year,
            'pages'=>$request->pages
        ]);

        return redirect()->route('books.index');
    }


    public function create(){
        return view('create');
    }
    public function show($book){

        // $mybook=Book::find($book);
        // if(is_null($mybook)){
        //     abort(404);
        // }

        $mybook=Book::findOrFail($book);
        

        return view('show',['book'=>$mybook]);
    }

}
