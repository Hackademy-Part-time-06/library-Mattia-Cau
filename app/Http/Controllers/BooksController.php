<?php

namespace App\Http\Controllers;

use App\Http\Requests\Bookrequest;
use App\Models\Book;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    
    public function __construct(){
        // ///////////////////////////////////
        // permette di bloccare le pagine non accesibili ai non loggati
        /////////////////////////////////////
        $this->middleware('auth')->except('index');
        // possiamo permettere o meno tramite only o except
        // $this->middleware('log')->only('index') oppure ->except;
    }
    
    public function index(){
        
        $books= Book::all();
        return view('index', ['books'=>$books]);
    }
    
    
    public function store(Bookrequest $request){
        
        // $book =new Book();
        // $book->name= 'esempio';
        // $book->pages=111 ;
        // $book->year=2022 ;
        // $book->author='esempio ';
        // $book->save();
        
        /////////////////////////////////////
        //verifica inserimento immagini
        //////////////////////////////////////
        //dd($request->hasFile('image'));
        //conrollare se abbiamo inserito l'immagine
        //dd($request->file('image'));
        //controllare se il fail è stato caricato
        //dd($request->file('image')->isValid());
        $path_image='';
        if ($request->hasFile('image') && $request->file('image')->isValid()){
            $path_name = $request->file('image')->getClientOriginalName();
            //$path_extension = $request->file('image')->getClientOriginalExtension();
            $path_image = $request->file('image')->storeAs('public/images' , $path_name);
        }
        
        ////////////////////////////////////
        ////////////////////////////////////
        
        Book::create([
            'name'=>$request->name,
            'author'=>$request->author,
            'year'=>$request->year,
            'pages'=>$request->pages,
            'image'=>$path_image
        ]);
        
        return redirect()->route('books.index');
    }
    
    
    public function create(){
        return view('create');
    }
    public function show(Book $book){
        
        // $mybook=Book::find($book);
        // if(is_null($mybook)){
            //     abort(404);
            // }
            
            //$mybook=Book::findOrFail($book);
            
            return view('show',['book'=>$book]);
        }
        
        public function edit(Book $book){
            
            return view('edit', ['book'=>$book]);
        }
        public function update(Bookrequest $request, Book $book){
            
            $path_image= $book->image;
        if ($request->hasFile('image') && $request->file('image')->isValid()){
            $path_name = $request->file('image')->getClientOriginalName();  
            $path_image = $request->file('image')->storeAs('public/images' , $path_name);
        }
            
        $book->update([
            'name'=>$request->name,
            'author'=>$request->author,
            'year'=>$request->year,
            'pages'=>$request->pages,
            'image'=>$path_image
        ]);
           // dd($book);
            return redirect()->route('books.index');
        }
        public function destroy(Book $book) {
            $book->delete();
            return redirect()->route('books.index');
        }

        
    }
    