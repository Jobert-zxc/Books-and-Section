<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Section;
use Illuminate\Http\Request;


class BookController extends Controller
{
    public function index()
    {
        $books = Book::with('section')->paginate(15);
        return view('books.index', compact('books'));
    }


    public function create()
    {
        $sections = Section::all();
        return view('books.create', compact('sections'));
    }


    public function store(Request $request)
    {
        $request->validate([
        'title' => 'required|string|max:255',
        'author' => 'required|string|max:255',
        'section_id' => 'required|exists:sections,id',
        'published_year' => 'nullable|digits:4|integer|min:1000|max:9999',
    ]);


        Book::create($request->only(['title','author','published_year','section_id']));
        return redirect()->route('books.index')->with('success', 'Book created.');
    }


    public function edit(Book $book)
    {
        $sections = Section::all();
        return view('books.edit', compact('book','sections'));
    }


    public function update(Request $request, Book $book)
    {
        $request->validate([
        'title' => 'required|string|max:255',
        'author' => 'required|string|max:255',
        'section_id' => 'required|exists:sections,id',
        'published_year' => 'nullable|digits:4|integer|min:1000|max:9999',
    ]);


        $book->update($request->only(['title','author','published_year','section_id']));
        return redirect()->route('books.index')->with('success', 'Book updated.');
    }


    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.index')->with('success', 'Book deleted.');
    }
}
