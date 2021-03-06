<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\People;
use App\Models\RevenueType;

class RevenueFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'idpeo' => People::all()->random()->idpeo,
            'revenue_type_id' => RevenueType::all()->random()->id,
            'value' => $this->faker->randomDigit(),
            'fees' => $this->faker->randomNumber(),
            'revenue_date' => $this->faker->date(),
            'reference_date' => $this->faker->date()
        ];
    }
}
