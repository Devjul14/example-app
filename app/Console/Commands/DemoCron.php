<?php

namespace App\Console\Commands;

use Log;
use App\Mail\Notif;
use App\Models\Book;
use App\Models\User;
use App\Mail\GmailTest;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;

class DemoCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'demo:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $content = [
            'title' => 'test gmail from eka47577',
            'body' => 'test send email from laravel via gmail'
        ];

        Mail::to('dhonidoni03@gmail.com')->send(new GmailTest($content));
    }
}
