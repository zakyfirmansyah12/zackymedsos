<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Contoh menggunakan Query Builder
        User::create([
            'name' => 'cristiano',
            'email' => 'ronaldo@gmail.com',
            'password' => bcrypt('cristiano1234567'),
        ]);

        // Atau contoh menggunakan model Eloquent
        User::create([
            'name' => 'ronaldo',
            'email' => 'ronaldo@gmail.com',
            'password' => bcrypt('ronaldo1234567'),
        ]);
    }
}
