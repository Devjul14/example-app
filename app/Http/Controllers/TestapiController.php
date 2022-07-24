<?php

namespace App\Http\Controllers;

use App\Models\Apitest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Testapicontroller extends Controller
{
    public function index()
    {
        $posts = Http::get('https://jsonplaceholder.typicode.com/posts')->json();
        $collection = collect($posts);
        $uniqueuserId = $collection->unique('userId');
        $uniqueCount = $collection->countBy('userId');
        // dump($uniqueCount);

        return view('dashboard.api.index', [
            'uniqueuserIds' => $uniqueuserId,
            'uniqueCount' => $uniqueCount
        ]);
    }

    public function show($id)
    {
        $posts = Http::get('https://jsonplaceholder.typicode.com/posts')->json();
        $collection = collect($posts)->where('userId', $id);
        // dump($collection);

        return view('dashboard.api.show', [
            'collections' => $collection,
            'id' => $id
        ]);
    }

    public function edit($id)
    {
        return view('dashboard.api.update', [
            'id' => $id
        ]);
    }

    public function update(Request $request)
    {
        // dd($request);
        $title = $request->title;
        $body = $request->body;
        $id = $request->id;

        $response = Http::put('https://jsonplaceholder.typicode.com/posts/' . $id, [
            'title' => $title,
            'body' => $body
        ]);

        return $response->json();
    }
}
