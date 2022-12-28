<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BranchFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'numero' => $this->faker->randomNumber(4),
            'direccion' => $this->faker->address(),
            'ciudad' => $this->faker->city(),
            'email' => $this->faker->unique()->safeEmail(),
            'mantenimiento' =>$this->faker->boolean()
        ];
    }
}
