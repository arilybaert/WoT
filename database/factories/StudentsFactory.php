<?php

namespace Database\Factories;

use App\Models\Students;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Students::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'lastname' => $this->faker->name,
            'firstname' => $this->faker->firstNameMale,
            'email' => $this->faker->firstNameMale,
            'phone' => $this->faker->phoneNumber,
            'course' => $this->faker->randomLetter,
        ];
    }
}
