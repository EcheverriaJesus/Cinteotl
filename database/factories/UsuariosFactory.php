<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\usuarios;

class UsuariosFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Usuarios::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombreusuario' => $this->faker->word,
            'contraseña' => $this->faker->regexify('[A-Za-z0-9]{500}'),
            'tipo' => $this->faker->regexify('[A-Za-z0-9]{10}'),
        ];
    }
}
