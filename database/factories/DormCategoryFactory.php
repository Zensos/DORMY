<?php

namespace Database\Factories;

use App\Models\DormitoryCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class DormitoryCategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DormitoryCategory::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->words(3, true), // Generates a random title
            'description' => $this->faker->sentence(), // Generates a random description
            'image' => $this->faker->imageUrl(640, 480, 'dormitory', true), // Generates a random image URL
        ];
    }
}
