<?php

namespace Database\Factories;

use App\Models\Model;
use App\Models\Productos;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductosFactory extends Factory
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

            'nombre'       => $this->faker->word,
            'cantidad'     => $this->faker->text(800),
            'descripcion'  => $this->faker->text(800),
            'precio'       => $this->faker->number(100),
            'descripcion'  => $this->faker->text(800),
            'imagen'       => $this->faker->imageUrl(1280,720),
            //declaramos la llaves foraneas
            'id_status'     => rand(1,100),
            'id_categoria'   => rand(1,100),
            'users_id'   => rand(1,100),
            'id_cliente'   => rand(1,100),
            'id_venta'   => rand(1,100),
        ];
    }
}
