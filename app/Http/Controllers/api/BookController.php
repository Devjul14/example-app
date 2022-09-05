<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {

        $books = Book::all()->toArray();

        return response()->json([
            'success' => true,
            'message' => 'Book List',
            'data' => $books
        ]);
    }
}
