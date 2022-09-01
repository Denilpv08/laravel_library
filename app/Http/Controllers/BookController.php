<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use App\Models\Editorial;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $book = Book::all();
        return view('books.index', compact('book'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $book = Book::all();
        $author = Author::all();
        $editorial = Editorial::all();
        $category = Category::all();
        return view('books.create', compact('book', 'author', 'editorial', 'category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $book = new Book();
        $book->title = $request->post('title');
        $book->id_author = $request->post('author');
        $book->id_editorial = $request->post('editorial');
        $book->id_category = $request->post('category');
        $book->num_page = $request->post('num_page');
        $book->isbn = $request->post('isbn');
        $book->synopsis = $request->post('synopsis');
        $book->save();
        return redirect()->route('books.index')->with('success', 'successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Book::find($id);
        return view('books.delete', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Book::find($id);
        $author = Author::all();
        $editorial = Editorial::all();
        $category = Category::all();
        return view('books.edit', compact('book', 'author', 'editorial', 'category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $book = Book::find($id);
        $book->title = $request->post('title');
        $book->id_author = $request->post('author');
        $book->id_editorial = $request->post('editorial');
        $book->id_category = $request->post('category');
        $book->num_page = $request->post('num_page');
        $book->isbn = $request->post('isbn');
        $book->synopsis = $request->post('synopsis');
        $book->update();
        return redirect()->route('books.index')->with('success', 'successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::find($id);
        $book->delete();
        return redirect()->route('books.index')->with('success', 'successfully deleted');
    }
}
