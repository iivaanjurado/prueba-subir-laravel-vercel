<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class NaturalezaFactorory extends Factory
{



    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $nombres = [
            'Biopsia',
            'Esputo',
            'Citologia Bucal',
            'Muestra de Sangre'
        ];

        return [
            'nombre' => $this->faker->randomElement($nombres),
        ];
    }
}
