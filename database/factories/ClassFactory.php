<?php

namespace Database\Factories;

use App\Models\Major;
use App\Models\SchoolClass;
use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;


 
class SchoolClassFactory extends Factory
{
    protected $model = SchoolClass::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $schoolClasses = [
            '10 AKL',
            '11 AKL',
            '12 AKL',
            '10 TKJ 1',
            '10 TKJ 2',
            '11 TKJ 1',
            '11 TKJ 2',
            '12 TKJ 1',
            '12 TKJ 3',
            '10 BiD 1',
            '10 BiD 2',
            '11 BiD',
            '12 BiD',
        ];

        return [
            'name' => fake()->randomElement($schoolClasses),
            'grade' => fake()->randomElement(['X', 'XI', 'XII']),
            'major_id' => Major::factory(),
            'teacher_id' => Teacher::factory(),
        ];
    }
}
