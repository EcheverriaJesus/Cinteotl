<?php

namespace Database\Seeders;

use App\Models\Reservar;
use Illuminate\Database\Seeder;

class ReservarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Reservar::factory()->count(5)->create();
    }
}
