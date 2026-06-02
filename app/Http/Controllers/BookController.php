<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = auth()->user()->books;
        return view('books.index', compact('books'));
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'  => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'genre'  => 'nullable|string|max:255',
            'status' => 'required|in:Want To Read,Currently Reading,Finished',
            'rating' => 'nullable|integer|min:1|max:10',
            'review' => 'nullable|string',
        ]);

        $validated['user_id'] = auth()->id();
        Book::create($validated);

        return redirect()->route('books.index')->with('success', 'Book added!');
    }

    public function edit(Book $book)
    {
        $this->authorize('update', $book);
        return view('books.edit', compact('book'));
    }

    public function update(Request $request, Book $book)
    {
        $this->authorize('update', $book);

        $validated = $request->validate([
            'title'  => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'genre'  => 'nullable|string|max:255',
            'status' => 'required|in:Want To Read,Currently Reading,Finished',
            'rating' => 'nullable|integer|min:1|max:10',
            'review' => 'nullable|string',
        ]);

        $book->update($validated);

        return redirect()->route('books.index')->with('success', 'Book updated!');
    }

    public function destroy(Book $book)
    {
        $this->authorize('delete', $book);
        $book->delete();

        return redirect()->route('books.index')->with('success', 'Book deleted!');
    }
}
