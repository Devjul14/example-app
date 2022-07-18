<?php

namespace App\Http\Controllers;

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
        dump($uniqueCount);
        return view('dashboard.api.index', [
            'uniqueuserIds' => $uniqueuserId,
            'uniqueCount' => $uniqueCount
        ]);
    }
}