<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TFare>
 */
class TFareFactory extends Factory
{
    public function definition(): array
    {
        return [
            'vcMNEMONIC' => strtoupper($this->faker->lexify('???')) . $this->faker->randomNumber(3),
            'inZONE_ID' => $this->faker->numberBetween(1, 5),
            'inSERVICE_TYPE' => $this->faker->randomElement([1, 2, 3, 4]), // Budget, Premier, Family, Luxury
            'inDIRECTION' => $this->faker->randomElement([1, 2, 3]), // Outbound, Inbound, Return
        ];
    }
}
