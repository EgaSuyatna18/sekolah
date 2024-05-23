<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Siswa>
 */
class SiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'foto' => 'undefined',
            'nama' => fake()->name(),
            'tanggal_lahir' => fake()->dateTime(),
            'alamat' => fake()->words(3, true),
            'nama_orangtua' => fake()->name()
        ];
    }
}
