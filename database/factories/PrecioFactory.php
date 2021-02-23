<?php

namespace Database\Factories;

use App\Models\Precio;
use Illuminate\Database\Eloquent\Factories\Factory;

class PrecioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Precio::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cod_art' => $this->faker->numberBetween(1,100),
            'cod_lista' => $this->faker->numberBetween(1,20)
        ];
    }
}
