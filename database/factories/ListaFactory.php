<?php

namespace Database\Factories;

use App\Models\Lista;
use Illuminate\Database\Eloquent\Factories\Factory;

class ListaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Lista::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cliente_id' => $this->faker->unique()->numberBetween(1,20)
            
        ];
    }
}
