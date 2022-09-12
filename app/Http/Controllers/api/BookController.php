<?php

namespace App\Http\Controllers\api;


use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

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
            'category_id' => 'required',
            'user_id' => 'required',
            'title' => 'required',
            'slug' => 'required',
            'excerpt' => 'required',
            'sinopsis' => 'required',
            'image' => 'required'
        ]);
        if ($books) {
            $create_book = Book::create($books);
            return response()->json([
                "success" => true,
                "message" => "Book created successfully.",
                "data" => $create_book
            ]);
        }
    }

    public function show($id)
    {
        $book = Book::find($id);
        if (is_null($book)) {
            return response()->json([
                "success" => false,
                "message" => "book not found."
            ]);
        }
        return response()->json([
            "success" => true,
            "message" => "book retrieved successfully.",
            "data" => $book
        ]);
    }

    public function update(Request $request, Book $book)
    {
        // //define validation rules
        // $validator = Validator::make($request->all(), [
        //     'category_id' => 'required',
        //     'user_id' => 'required',
        //     'title' => 'required',
        //     'slug' => 'required',
        //     'excerpt' => 'required',
        //     'sinopsis' => 'required',
        //     'image' => 'required'
        // ]);

        // //check if validation fails
        // if ($validator->fails()) {
        //     return response()->json($validator->errors(), 422);
        // }

        // //update post without image
        // $book->update([
        //     'category_id'     => $request->category_id,
        //     'user_id'     => $request->user_id,
        //     'title'     => $request->title,
        //     'slug'     => $request->slug,
        //     'excerpt'     => $request->excerpt,
        //     'sinopsis'     => $request->sinopsis,
        //     'image'   => $request->image,
        // ]);

        // return response()->json([
        //     // "success" => true,
        //     "message" => "book updated successfully.",
        //     // "data" => $book
        // ]);
        return 'hai';
    }

    public function destroy(Book $Book)
    {

        $Book->delete();
        return response()->json([
            "success" => true,
            "message" => "Book deleted successfully.",
            "data" => $Book
        ]);
    }
}
