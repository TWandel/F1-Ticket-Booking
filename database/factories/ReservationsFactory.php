<?php

namespace Database\Factories;

use App\Models\Reservations;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class ReservationsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Reservations::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween($min = 780, $max = 50781),
            'race_id' => $this->faker->numberBetween($min = 1, $max = 3),
            'category_id' => $this->faker->numberBetween($min = 1, $max = 3),
            'type_id' => $this->faker->numberBetween($min = 1, $max = 2),
            'count' => $this->faker->numberBetween($min = 1, $max = 10),
            'price' => $this->faker->numberBetween($min = 20, $max = 600),
            'updated_at' => now(),
            'created_at' => now(),
        ];
    }
}
