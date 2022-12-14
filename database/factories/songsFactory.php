<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\songs;

class songsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = songs::class;

    public function definition()
    {
        return [
            "genreId" => $this->faker->numberBetween(1, 5),
            "songName" => $this->faker->colorName(),
            "artist" => $this->faker->name(),
            "duration" => $this->faker->randomFloat(2, 1, 10)
        ];
    }
}
