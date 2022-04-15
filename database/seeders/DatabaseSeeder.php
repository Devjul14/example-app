<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Pasien;
use App\Models\Golongan;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Julia',
            'email' => 'eka47577@gmail.com',
            'password' => bcrypt('9090')
        ]);

        Golongan::create([
            'nama' => 'Tunai'
        ]);
        Golongan::create([
            'nama' => 'BPJS Umum'
        ]);

        Pasien::create([
            'golongan_id' => 1,
            'user_id' => 1,
            'reg' => '20220415141011',
            'nama' => 'Salmanan',
            'alamat' => 'Bandung',
            'nohp' => '087710085325'
        ]);
        Pasien::create([
            'golongan_id' => 1,
            'user_id' => 1,
            'reg' => '20220415141011',
            'nama' => 'Salmanan',
            'alamat' => 'Bandung',
            'nohp' => '087710085325'
        ]);
        Pasien::create([
            'golongan_id' => 2,
            'user_id' => 1,
            'reg' => '20220415141011',
            'nama' => 'Salmanan',
            'alamat' => 'Bandung',
            'nohp' => '087710085325'
        ]);
    }
}
