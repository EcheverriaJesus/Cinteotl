<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\bebidas;

class BebidasFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Bebidas::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombrebebida' => $this->faker->word,
            'detallebebida' => $this->faker->word,
            'precio' => $this->faker->word,
            'detallereceta' => $this->faker->word,
        ];
    }
}
