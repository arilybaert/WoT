<?php

namespace Database\Factories;

use App\Models\Classrooms;
use App\Models\Classrooms_Students;
use App\Models\Students;
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
        $dt = $this->faker->dateTimeBetween($startDate = 'now', $endDate = '+1 month');
        $date = $dt->format("Y-m-d");

        $students = Students::all()->pluck('nfc_id')->toArray();
        $classrooms = Classrooms::all()->pluck('id')->toArray();

        return [
            'scan_date' => $date, //$this->faker->date($startDate = '2020-09-14', $endDate = 'now'),
            'scan_time' =>  date('H:i:s', rand(28800, 61200)),
            'classroom_id' => $this->faker->randomElement($classrooms), //$this->faker->numberBetween($min = 1, $max = 7),
            'student_id' => $this->faker->randomElement($students), // $this->faker->numberBetween($min = 1, $max = 44),
            'exam' => 1
        ];
    }
}
