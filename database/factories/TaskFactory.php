<?php

namespace Database\Factories;

use App\Models\Task;
use App\Models\user;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\App;

class TaskFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Task::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'=>User::inrandomorder()->first()->id,
            'description' => $this->faker->sentence(),
        ];
    }
}
