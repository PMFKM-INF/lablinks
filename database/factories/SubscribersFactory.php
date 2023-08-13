<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Subscribers;



/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subscribers>
 */
class SubscribersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Subscribers::class;

    public function definition()
    {

        return [
            'email' =>$this->faker->unique()->safeEmail(),
        ];
    }
}
