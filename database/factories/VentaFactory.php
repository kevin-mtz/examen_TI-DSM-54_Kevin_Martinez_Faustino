<?php

namespace Database\Factories;

use App\Models\Model;
use App\Models\Venta;
use Illuminate\Database\Eloquent\Factories\Factory;

class VentaFactory extends Factory
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

            'id_productos'     => rand(1,100),
            'qty'     => $this->faker->text(800),
            'id_cliente'   => rand(1,100),
            'total'     => $this->faker->text(800),
        ];
    }
}
