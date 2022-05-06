<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('/vcategory', [
            "title" => "Category Books",
            "active" => "categories",
            "categories" => Category::all(),
        ]);
    }

    public function show(Category $category)
    {
        return view('/books', [
            "title" => "Category By : $category->nama",
            "active" => "categories",
            "books" => $category->books->load('user', 'category')
        ]);
    }
}
