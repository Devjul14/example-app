<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelayanan;

class PelayananController extends Controller
{
    public function index()
    {
        return view("layanan", [
            "title" => "Layanan",
            "layanan" => Pelayanan::all()
        ]);
    }
}
