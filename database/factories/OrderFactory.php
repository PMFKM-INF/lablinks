<?php

namespace Database\Factories;
use App\Models\Order;

use App\Models\Subscribers;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Order::class;

    public function definition()
    {

        return [
            'name' => $this->faker->name,
            'description' => $this->faker->text,
            'email' =>$this->faker->unique()->safeEmail(),
        ];
    }
}
