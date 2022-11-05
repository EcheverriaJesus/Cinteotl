<?php

namespace Database\Seeders;

use App\Models\Platillos;
use Illuminate\Database\Seeder;

class PlatillosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Platillos::factory()->count(5)->create();
    }
}
