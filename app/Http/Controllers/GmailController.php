<?php

namespace App\Http\Controllers;

use App\Mail\GmailTest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class GmailController extends Controller
{
    public function sendEmail()
    {
        $content = [
            'title' => 'test gmail from eka47577',
            'body' => 'test send email from laravel via gmail'
        ];

        Mail::to('eka47577@gmail.com')->send(new GmailTest($content));
        return 'Berhasil';
    }
}
