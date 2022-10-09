<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Page>
 */
class PageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => 1,
            'note_id' => 3,
            'page_title' => "note1のpage",
            'page_content' => $this->faker->realText(50),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
