<?php

namespace Database\Seeders;

use App\Models\Ventas;
use Illuminate\Database\Seeder;

class VentasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ventas::factory()->count(5)->create();
    }
}
