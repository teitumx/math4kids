<?php

namespace Database\Factories;

use App\Models\question;
use Illuminate\Database\Eloquent\Factories\Factory;

class QuestionsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = question::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
        ];
    }
}