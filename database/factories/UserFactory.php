<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'sede' => $this->faker->city(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            /*'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password*/
            //  'password' =>'2y$10$1fkVLei2o65wJm5NffzAUup0iZ4IvPzcJyffB3JobG2Mx084LqGPK', //Saima91 en vps
             'password' => '$2y$10$TATnstG2MKAV54Zmo6ZRh.UJHl4gsZb3tlBQ.jNunO0EFKltEteIi', //saima91 en local
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
