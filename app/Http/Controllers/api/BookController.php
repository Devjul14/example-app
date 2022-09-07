<?php

namespace App\Http\Controllers\api;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Validator;

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

    public function store(Request $request)
    {
        // $input = $request->all();
        $books = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        if ($books) {
            return $this->sendError('Validation Error.');
        }
        $create_book = Book::create($books);
        return response()->json([
            "success" => true,
            "message" => "Book created successfully.",
            "data" => $create_book
        ]);
    }

    public function show($id)
    {
        $book = Book::find($id);
        if (is_null($book)) {
            return $this->sendError('book not found.');
        }
        return response()->json([
            "success" => true,
            "message" => "book retrieved successfully.",
            "data" => $book
        ]);
    }
}
