<?php

namespace Database\Seeders;

use App\Models\Anggota;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

          Anggota::create([
            'nama' =>'Danu Pangestu',
            'hp' =>'089516281436'
          ]);
          Anggota::create([
            'nama' =>'wahyu',
            'hp' =>'089516281436'
          ]);
          Anggota::create([
            'nama' =>'wahyu',
            'hp' =>'089516281436'
          ]);
          Anggota::create([
            'nama' =>'ajeng',
            'hp' =>'089516281436'
          ]);
    }
}
