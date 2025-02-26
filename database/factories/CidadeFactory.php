<?php

namespace Database\Factories;

use App\Models\Cidade;
use Illuminate\Database\Eloquent\Factories\Factory;

class CidadeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cidade::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome_da_cidade' => $this->faker->word,
            'latitude' => $this->faker->randomFloat(8, -90, 90),
            'longitude' => $this->faker->randomFloat(8, -180, 180),
        ];
    }
}
