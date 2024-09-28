<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Folder;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Folder>
 */
class FolderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Folder::class;


    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'user_id' => \App\Models\User::factory(), // Assuming each folder belongs to a user
        ];
    }
}
