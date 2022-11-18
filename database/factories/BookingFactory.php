<?php

namespace Database\Factories;

use App\Models\Booking;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Booking>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'description' => fake()->jobTitle,
            'date' => (fake()->dateTimeThisYear)->format('Y-m-d'),
            'start' => fake()->time,
            'duration' => (fake()->randomNumber(1)) * 0.5,
            'payment-state' => fake()->randomElement(['pending', 'deposit paid', 'part-paid', 'paid in full', 'refund requested', 'refunded']),
            'booking-state' => fake()->randomElement(['pending', 'confirmed', 'cancelled', 'refused']),
            'user_id' => User::factory()
        ];
    }
}
