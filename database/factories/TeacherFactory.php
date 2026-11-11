<?php

namespace Database\Factories;

use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Teacher>
 */
class TeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nip' => fake()->unique()->numerify('198#########'),
            'name' => fake()->name(),
            'gender' => fake()->randomElement(['Laki-Laki', 'Perempuan']),
            'subject' => fake()->randomElement(['Akuntansi Dasar', 'Jaringan Komputer']),
            'phone_number' => fake()->numerify('08##########'),
            'status' => 'Aktif',
        ];
    }
}
