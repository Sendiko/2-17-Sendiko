<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::paginate(5);
        return view('books/index', compact('books'), [
            'title' => "Books"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/books/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'writer' => 'required|string',
            'publisher' => 'required|string',
            'synopsis' => 'required|string',
            'release' => 'required|numeric',
            'cover' => 'image|file'
        ]);

        $cover = $request->file('cover')->store('cover');
        Book::create([
            'title' => $validated['title'],
            'writer' => $validated['writer'],
            'publisher' => $validated['publisher'],
            'synopsis' => $validated['synopsis'],
            'release' => $validated['release'],
            'cover' => $cover
        ]);

        return redirect()->route('books.admin.index')->with('status', 'Data created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $books = Book::findOrFail($id);
        return view('books/show', [
            'books' => $books,
            'title' => "Books"
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Book::findOrFail($id);
        return view('admin/books/edit', compact('book'));
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
        $book = Book::findOrFail($id);
        $book->update($request->all());
        $book->save();
        return redirect()->route('books.admin.index')->with('status', 'Data updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();
        return redirect()->route('books.admin.index')->with('status', 'Data deleted!');
    }

    public function adminIndex()
    {
        $books = Book::paginate(5);
        return view('admin/books/index', compact('books'), [
            'title' => "Books"
        ]);
    }

    public function adminShow($id)
    {
        $books = Book::findOrFail($id);
        return view('admin/books/show', [
            'books' => $books,
            'title' => "Books"
        ]);
    }

}
