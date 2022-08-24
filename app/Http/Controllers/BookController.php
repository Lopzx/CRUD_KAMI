<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function createMainPage(){
        return view("create");
    }
    public function addBook(Request $request){
        Book::create([
            "title" => $request->title,
            "author" => $request->author,
            "date" => $request->date,
            "price" => $request->price
        ]);
            return redirect(route('getBooks'));
    }

    public function getBooks(){
        $books = Book::all();
        return view("view",['books' => $books]);
    }

    public function getBookById($Id){
        $book = Book::find($Id);
        return view("update", ["book" => $book]);
    }

    public function updateBook(Request $request, $id){
        $book = Book::find($id);
        $book->title = $request->title;
        $book->author = $request->author;
        $book->date = $request->date;
        $book->price = $request->price;
        $book->save();
        return redirect(route('getBooks'));
    }

    public function deleteBook($id){
        $book = Book::destroy($id);
        return redirect(route("getBooks"));
    }


}
