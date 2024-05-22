<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pendidik>
 */
class PendidikFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => fake()->name(),
            'nuptk' => (string)fake()->randomNumber(8, true) . (string)fake()->randomNumber(8, true),
            'jenis_kelamin' => (rand(1,2) == 1) ? 'laki-laki' : 'perempuan',
            'tanggal_lahir' => fake()->dateTime(),
            'nip' => (string)fake()->randomNumber(8, true) . (string)fake()->randomNumber(8, true),
            'status_pegawai' => (rand(1,2) == 1) ? 'honorer' : 'pns',
            'ptk' => 'PTK Diasnogtik',
            'sertifikasi' => 'Sertifikasi Pendidik',
            'tmt' => fake()->dateTime(),
            'mata_pelajaran' => 'Matemetika',
        ];
    }
}
