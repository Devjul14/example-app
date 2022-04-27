<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        return view('books', [
            "title" => "Author",
            "active" => "author",
            "authors" => Author::all()
        ]);
    }

    public function show(Author $author)
    {
        return view('books', [
            "title" => "Author By : $author->name",
            "active" => "author",
            "books" => $author->books->load('category', 'author'),
        ]);
    }
}
