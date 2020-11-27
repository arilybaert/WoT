<?php

namespace Database\Factories;

use App\Models\Classrooms_Students;
use Illuminate\Database\Eloquent\Factories\Factory;

class Classrooms_StudentsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Classrooms_Students::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'scan_date' => $this->faker->date($startDate = '2020-09-14', $endDate = 'now'),
            'scan_time' => $this->faker->time($format = 'H:i:s', $max = '16:45:00', $min = '08:00:00'),
            'classroom_id' => $this->faker->numberBetween($min = 1, $max = 7),
            'student_id' => $this->faker->numberBetween($min = 1, $max = 44),
        ];
    }
}
