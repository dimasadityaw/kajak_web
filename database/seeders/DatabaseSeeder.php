<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::create([
        //     'name' => 'Admin',
        //     'email' => 'admin@gmail.com',
        //     'password' => Hash::make('sidosermo'),
        //     'role' => 'admin',
        // ]);

        // User::create([
        //     'name' => 'Didan',
        //     'email' => 'didanadha99@gmail.com',
        //     'password' => Hash::make('sidosermo'),
        //     'role' => 'lecturer',
        // ]);

        $this->call(SastraSeed::class);
        $this->call(TembungSeeder::class);
    }
}
