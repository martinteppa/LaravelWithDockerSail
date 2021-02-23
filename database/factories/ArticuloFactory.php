<?php

namespace Database\Factories;

use App\Models\Articulo;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticuloFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Articulo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'codigo_articulo' => $this->faker->text('5').$this->faker->numberBetween(100,500),
            'nombre' => $this->faker->text(20),
            'Descripcion' => $this->faker->text(25),
            'precio_venta' => $this->faker->numberBetween(1000,100000),
            'stock_status' => $this->faker->randomElement(['disponible','sinStock']),
            'descuento' => $this->faker->randomElement([0.10,0.30]),
            'iva_id'=> $this->faker->numberBetween(1,2),
            'precio_desc'=>$this->faker->numberBetween(1,2)
        ];
    }
}
