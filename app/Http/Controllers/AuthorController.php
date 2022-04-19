<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        return view('author', [
            "title" => "Author",
            "authors" => Author::all()
        ]);
    }

    public function show(Author $author)
    {
        return view('author', [
            "title" => $author->name,
            "books" => $author->books->load(['author', 'category'])
        ]);
    }
}
