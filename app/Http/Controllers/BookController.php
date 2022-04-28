<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $title = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->nama;
        }
        if (request('author')) {
            $author = Author::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }
        return view('books', [
            "title" => "All Books" . $title,
            "active" => "book",
            "books" => Book::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString()
        ]);
    }

    public function show(Book $book)
    {
        return view('book', [
            "title" => "Single Book",
            "active" => "book",
            "book" => $book,
        ]);
    }
}
