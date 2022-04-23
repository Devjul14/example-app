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
            "authors" => Author::all()
        ]);
    }

    public function show(Author $author)
    {
        return view('books', [
            "title" => "Author By : $author->name",
            "books" => $author->books->load('category', 'author'),
        ]);
    }
}
