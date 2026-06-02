<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BookApiController extends Controller
{
    public function index()
    {
        return response()->json(Book::all());
    }

    public function store(Request $request)
    {
        $book = Book::create([
            'title'   => $request->title,
            'author'  => $request->author,
            'genre'   => $request->genre,
            'status'  => $request->status,
            'rating'  => $request->rating,
            'review'  => $request->review,
            'user_id' => 1,
        ]);
        return response()->json($book, 201);
    }

    public function destroy(Book $book)
    {
        $book->delete();
        return response()->json(['message' => 'Deleted']);
    }
}