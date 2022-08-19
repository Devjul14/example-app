<?php

namespace App\Console\Commands;

use Log;
use App\Models\Book;
use App\Models\User;
use Illuminate\Console\Command;
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
        $addUser = User::create([
            'name' => 'test',
            'email' => 'example.test@gmail.com',
            'username' => 'julia-test',
            'password' => 'password'
        ]);
        if ($addUser) {
            $success = "Succes clear chace";
            echo $success;
        }
    }
}
