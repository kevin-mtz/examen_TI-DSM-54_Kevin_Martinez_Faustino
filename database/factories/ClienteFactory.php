<?php

namespace Database\Factories;

use App\Models\Model;
use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Model::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //

            'nombre'     => $this->faker->word,
            'direccion'  => $this->faker->text(800),
            'telefono'   => $this->faker->text(800),
            'status'     => $this->faker->text(70),
            'tipo'       => $this->faker->text(100),

        ];
    }
}
