<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\platillos;

class PlatillosFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Platillos::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombreplatillos' => $this->faker->regexify('[A-Za-z0-9]{100}'),
            'detalleplatillo' => $this->faker->word,
            'precio' => $this->faker->word,
            'detallereceta' => $this->faker->word,
        ];
    }
}
