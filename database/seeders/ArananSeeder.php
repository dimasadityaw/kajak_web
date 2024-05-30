<?php

namespace Database\Seeders;

use App\Models\Aranan;
use Illuminate\Database\Seeder;

class ArananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Aranan::create([
            'javanese' => 'Anak Kewan',
            'indonesian' => 'Anak Hewan',
            'type' => 1,
        ]);
    }
}
