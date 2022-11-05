<?php

namespace Database\Seeders;

use App\Models\Detallebebida;
use Illuminate\Database\Seeder;

class DetallebebidaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Detallebebida::factory()->count(5)->create();
    }
}
