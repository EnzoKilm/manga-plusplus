<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BooksController extends Controller
{
    /**
     * Show the books main page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $books = Book::all();
        return view('admin.books', compact('books'));
    }

    /**
     * Show the books add page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function add()
    {
        return view('admin.books.add');
    }

    /**
     * Store the book values in the database.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function store(Request $request)
    {
    	$book = new Book();
    	$book->name = $request->get('name');
    	$book->type = $request->get('type');
    	$book->description = $request->get('description');
    	$book->author = $request->get('author');
    	$book->availability = $request->get('availability');
    	$book->state = $request->get('state');
        $book->price = $request->get('price');
        $book->tags = $request->get('tags');
        $book->picture_src = $request->get('picture_src');
    	$book->save();
    	return redirect()->route('admin.books');
    }

    /**
     * Show the books edit page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function edit($bookId)
    {
        $book = Book::find($bookId);
    	return view('admin.books.edit', compact('book'));
    }

    /**
     * Update the book values in the database.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function update(Request $request, $bookId)
    {
    	$book = Book::find($bookId);
    	$book->name = $request->get('name');
    	$book->type = $request->get('type');
    	$book->description = $request->get('description');
    	$book->author = $request->get('author');
    	$book->availability = $request->get('availability');
    	$book->state = $request->get('state');
        $book->price = $request->get('price');
        $book->tags = $request->get('tags');
        $book->picture_src = $request->get('picture_src');
    	$book->save();
        return redirect()->route('admin.books');
    }

    /**
     * Delete the book
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function delete($bookId)
    {
    	$book = Book::find($bookId);
    	$book->delete();
    	return redirect()->route('admin.books');
    }
}
