<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Pasien;
use App\Models\Golongan;
use App\Models\Book;
use App\Models\Category;
use App\Models\Author;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();

        // User::create([
        //     'name' => 'Julia',
        //     'email' => 'eka47577@gmail.com',
        //     'password' => bcrypt('9090')
        // ]);

        // Golongan::create([
        //     'nama' => 'Tunai'
        // ]);
        // Golongan::create([
        //     'nama' => 'BPJS Umum'
        // ]);
        // Golongan::create([
        //     'nama' => 'BPJS Perusahaan'
        // ]);

        // Category::create([
        //     'nama' => 'Fiksi',
        //     'slug' => 00001
        // ]);
        // Category::create([
        //     'nama' => 'Filosifi',
        //     'slug' => 00002
        // ]);
        // Category::create([
        //     'nama' => 'Komik',
        //     'slug' => 00003
        // ]);

        // Pasien::factory(5)->create();
        Book::factory(2000)->create();
        // Author::factory(5)->create();
    }
}
