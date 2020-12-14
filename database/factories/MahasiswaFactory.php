<?php

namespace Database\Factories;

use App\Models\Mahasiswa;
use Illuminate\Database\Eloquent\Factories\Factory;

class MahasiswaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = mahasiswa::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'NPM' => $this->faker->numberBetween(187006109, 187006999),
            'Name' => $this->faker->Name,
            'Class' => $this->faker->randomElement(['a', 'b', 'c']),
            'Organization' => $this->faker->randomElement(['himpunan', 'BEM FAKULTAS', 'BEM UNIVERSITAS']),
            'Address' => $this->faker->Address,
        ];
    }
}