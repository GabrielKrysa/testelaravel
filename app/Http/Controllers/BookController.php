<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
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

        $book = $validateData;
        $book['owner'] = Auth::user()->name;

        Book::create($book);

        Session::flash('flash_message', 'Livro cadastrado com sucesso!');

        return redirect('/books');
    }

    public function index()
    {
        $books = Book::all();
        return view('books.index',compact('books', $books));

    }

    public function show($book)
    {
        $book = Book::findOrFail($book);

        return view('books.show', compact('book', $book));
    }

    public function edit($book)
    {
        $book = Book::findOrFail($book);

        return view('books.edit', compact('book', $book));
    }

    public function update($book, Request $request)
    {
        $book = Book::findOrFail($book);

        $validateData = $request->validate([
            'title' => 'required',
            'author' => 'required',
        ]);

        $input = $validateData;
        $book->fill($input)->save();

        Session::flash('flash_message', 'Livro editado com sucesso!');

        return redirect('/books');
    }

    public function destroy($book)
    {
        $book = Book::findOrFail($book);

        $book->delete();

        Session::flash('flash_message', 'Livro excluído com sucesso!');

        return redirect('/books');
    }

    public function indexByUser()
    {
        $books = User::find(Auth::user()->id)->books;

        return view('books.indexByUser', compact('books', $books));
    }
}
