<?php

namespace Database\Factories;

use App\Models\Fragment;
use Illuminate\Database\Eloquent\Factories\Factory;

class FragmentFactory extends Factory
{
    protected $model = Fragment::class;
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
            'body' => $this->faker->paragraph(5, true),
            'created_at' => $this->faker->dateTimeBetween('-1 years'),
        ];
    }
}
