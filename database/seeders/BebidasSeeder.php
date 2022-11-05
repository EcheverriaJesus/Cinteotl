<?php

namespace Database\Seeders;

use App\Models\Bebidas;
use Illuminate\Database\Seeder;

class BebidasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bebidas::factory()->count(5)->create();
    }
}
