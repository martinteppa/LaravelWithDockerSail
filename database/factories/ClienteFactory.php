<?php

namespace Database\Factories;

use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cliente::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->name(),
            'cuit' => $this->faker->numberBetween(20,21).'-'.$this->faker->numberBetween(14000000,40000000).'-'.$this->faker->numberBetween(0,9),
            'vendedor_id' => $this->faker->numberBetween(1,2)
        ];
    }
}
