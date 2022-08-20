<?php

namespace App\Http\Controllers;

use App\Mail\Notif;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function notif()
    {
        Mail::to('eka47577@gmail.com')->send(new Notif());
    }
}
