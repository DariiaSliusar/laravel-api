<?php

namespace Database\Factories;

use App\Models\Desk;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DeskList>
 */
class DeskListFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $deskIds = Desk::all()->pluck('id')->toArray();
        return [
            'name' => fake()->name(),
            'desk_id' => Arr::random($deskIds),
        ];
    }
}
