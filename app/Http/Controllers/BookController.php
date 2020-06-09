<?php

namespace App\Http\Controllers;

use Session;
use App\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'title' => 'required',
            'author' => 'required',
        ]);

        $book = $request->all();
        $book['owner'] = auth()->user()->name;

        Book::create($book);

        Session::flash('flash_message', 'Livro cadastrado com sucesso!');

        return redirect('/books');
    }

    public function index()
    {
        $books = Book::all();
        return view('books.index',compact('books', $books));

    }
}
