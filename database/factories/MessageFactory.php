<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Conversation;
use App\Models\User;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Message>
 */
class MessageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           //'conversation_id' => Conversation::inRandomOrder()->first()->id,
            'sender_id' => User::inRandomOrder()->first()->id,
            'content' => fake()->sentence(),
            'sent_at' => fake()->dateTimeThisYear(),
            'is_read' => fake()->boolean(),
        ];
    }
}
