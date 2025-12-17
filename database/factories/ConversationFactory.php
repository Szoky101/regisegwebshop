<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Product;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Conversation>
 */
class ConversationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $buyer = \App\Models\User::inRandomOrder()->first();
        $seller = \App\Models\User::inRandomOrder()->first();
        $product = \App\Models\Product::inRandomOrder()->first();

        return [
            'buyer_id' => $buyer ? $buyer->id : User::factory()->create()->id,
            'seller_id'=> $seller ? $seller->id : User::factory()->create()->id,
            'product_id'=> $product ? $product->id : Product::factory()->create()->id,
        ];
    }
}
