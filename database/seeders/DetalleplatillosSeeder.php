<?php

namespace Database\Seeders;

use App\Models\Detalleplatillos;
use Illuminate\Database\Seeder;

class DetalleplatillosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Detalleplatillos::factory()->count(5)->create();
    }
}
