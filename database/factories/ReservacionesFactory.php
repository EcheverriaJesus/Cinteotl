<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\reservaciones;

class ReservacionesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Reservaciones::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fecharegistro' => $this->faker->dateTime(),
            'fechareservada' => $this->faker->dateTime(),
            'usuarios' => $this->faker->word,
            'mesas' => $this->faker->word,
        ];
    }
}
