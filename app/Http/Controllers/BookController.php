<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        return view('books', [
            "title" => "All Books",
            "books" => Book::with(['author', 'category'])->latest()->get(),
        ]);
    }

    public function show(Book $book)
    {
        return view('book', [
            "title" => "Single Book",
            "book" => $book,
        ]);
    }
}
