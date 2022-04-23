<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('/books', [
            "title" => "Category Books",
            "categories" => Category::all(),
        ]);
    }

    public function show(Category $category)
    {
        return view('/vcategory', [
            "title" => "Category Books",
            "books" => $category->books,
            "category" => $category->nama,
        ]);
    }
}
