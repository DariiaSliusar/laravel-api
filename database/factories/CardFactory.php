<?php

namespace Database\Factories;

use App\Models\DeskList;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Card>
 */
class CardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $deskListIds = DeskList::all()->pluck('id')->toArray();
        return [
            'name' => fake()->name(),
            'desk_list_id' => Arr::random($deskListIds),
        ];
    }
}
