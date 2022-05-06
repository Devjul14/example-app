<?php

namespace App\Http\Controllers;

use App\Models\User;
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
        if (request('user')) {
            $user = User::firstWhere('username', request('user'));
            $title = ' by ' . $user->name;
        }
        return view('books', [
            "title" => "All Books" . $title,
            "active" => "book",
            "books" => Book::latest()->filter(request(['search', 'category', 'user']))->paginate(7)->withQueryString()
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
