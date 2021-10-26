<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create(['name' => 'Manolo Cabrera',
        'email' => 'viprestal@hotmail.com',
        'password' => bcrypt('Manolo'),
        'username' => 'xoox',]);
        \App\Models\User::factory(1000)->create();
    }
}
