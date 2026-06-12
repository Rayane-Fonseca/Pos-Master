<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ManufacturerFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->company(),
            'contact' => $this->faker->boolean(70)
                ? $this->faker->companyEmail()
                : $this->faker->phoneNumber(),
        ];
    }
}