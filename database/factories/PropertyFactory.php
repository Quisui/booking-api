<?php

namespace Database\Factories;

use App\Models\City;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PropertyFactory extends Factory
{
    public function definition(): array
    {
        return [
            'owner_id' => User::where('role_id', Role::ROLE_OWNER)->value('id'),
            'name' => fake()->text(20),
            'city_id' => City::value('id'),
            'address_street' => fake()->streetAddress(),
            'address_postcode' => fake()->postcode(),
            'lat' => fake()->latitude(),
            'long' => fake()->longitude(),
        ];
    }
}
