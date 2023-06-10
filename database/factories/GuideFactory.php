<?php

namespace Database\Factories;

use App\Models\Guide;
use Illuminate\Database\Eloquent\Factories\Factory;

class GuideFactory extends Factory
{

    protected $model = Guide::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence(6, true);

        return [
            'title' => $title,
            'description' => $this->faker->paragraph(5, true),
            'created_at' => $this->faker->dateTimeBetween('-1 years'),
        ];
    }
}
