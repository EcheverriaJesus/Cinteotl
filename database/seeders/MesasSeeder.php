<?php

namespace Database\Seeders;

use App\Models\Mesas;
use Illuminate\Database\Seeder;

class MesasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mesas::factory()->count(5)->create();
    }
}
