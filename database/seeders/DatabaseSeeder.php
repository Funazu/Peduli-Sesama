<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

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
            'username' => 'lia',
            'password' => bcrypt('lia'),
            'role' => 'pemerintah'
        ]);

        User::create([
            'username' => 'fauzunnaja',
            'password' => bcrypt('1'),
            'role' => 'warga'
        ]);
    }
}
