<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Chat>
 */
class ChatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $users = User::all()->count();
        return [
            'sender_id' => (int) rand(1, $users),
            'reciever_id' => (int) rand(1, $users),
            'message' => $this->faker->sentence()
        ];
    }
}