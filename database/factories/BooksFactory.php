<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Books>
 */
class BooksFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'book'=>$this->faker->text(maxNbChars:10),
            'take'=>$this->faker->numberBetween(1,20),
            'back'=>$this->faker->numberBetween(1,20)
        ];
    }
}
