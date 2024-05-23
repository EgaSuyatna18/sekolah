<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\MataPelajaran;
use App\Models\Pendidik;
use App\Models\Berita;
use App\Models\Siswa;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'role' => 'admin',
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('123')
        ]);

        User::factory()->create([
            'role' => 'siswa',
            'name' => 'Siswa Test',
            'email' => 'siswa@gmail.com',
            'password' => Hash::make('123')
        ]);

        MataPelajaran::factory()->create([
            'kelas' => 'Kelas 1',
            'mapel1' => 'Bahasa Indonesia',
            'mapel2' => 'Matematika',
            'mapel3' => 'IPA/Sains',
            'mapel4' => 'Istirahat',
            'mapel5' => 'Seni Budaya',
            'mapel6' => 'PJOK (JUMAT SAJA)',
            'mapel7' => 'Bahasa Inggris',
            'mapel8' => 'Agama',
            'mapel9' => 'Bahasa Indonesia',
            'mapel10' => 'Istirahat',
            'mapel11' => 'Evaluasi Minggu Ini',
        ]);

        MataPelajaran::factory()->create([
            'kelas' => 'Kelas 2',
            'mapel1' => 'Bahasa Indonesia',
            'mapel2' => 'Matematika',
            'mapel3' => 'IPA/Sains',
            'mapel4' => 'Istirahat',
            'mapel5' => 'Seni Budaya',
            'mapel6' => 'PJOK (JUMAT SAJA)',
            'mapel7' => 'Bahasa Inggris',
            'mapel8' => 'Agama',
            'mapel9' => 'Bahasa Indonesia',
            'mapel10' => 'Istirahat',
            'mapel11' => 'Evaluasi Minggu Ini',
        ]);

        MataPelajaran::factory()->create([
            'kelas' => 'Kelas 3',
            'mapel1' => 'Bahasa Indonesia',
            'mapel2' => 'Matematika',
            'mapel3' => 'IPA/Sains',
            'mapel4' => 'Istirahat',
            'mapel5' => 'Seni Budaya',
            'mapel6' => 'PJOK (JUMAT SAJA)',
            'mapel7' => 'Bahasa Inggris',
            'mapel8' => 'Agama',
            'mapel9' => 'Bahasa Indonesia',
            'mapel10' => 'Istirahat',
            'mapel11' => 'Evaluasi Minggu Ini',
        ]);

        MataPelajaran::factory()->create([
            'kelas' => 'Kelas 4',
            'mapel1' => 'Bahasa Indonesia (Membaca dan menulis kalimat)',
            'mapel2' => 'Matematika (Operasi hitung lanjutan)',
            'mapel3' => 'IPA/Sains (Pengenalan tumbuhan dan hewan)',
            'mapel4' => 'Istirahat',
            'mapel5' => 'IPS (Pengenalan sejarah dan geografi)',
            'mapel6' => 'Seni Budaya (Musik dan bernyanyi)',
            'mapel7' => 'Bahasa Inggris',
            'mapel8' => 'Agama',
            'mapel9' => 'Bahasa Indonesia',
            'mapel10' => 'Istirahat',
            'mapel11' => 'Evaluasi Minggu Ini',
        ]);

        MataPelajaran::factory()->create([
            'kelas' => 'Kelas 5',
            'mapel1' => 'Bahasa Indonesia (Membaca dan menulis kalimat)',
            'mapel2' => 'Matematika (Operasi hitung lanjutan)',
            'mapel3' => 'IPA/Sains (Pengenalan tumbuhan dan hewan)',
            'mapel4' => 'Istirahat',
            'mapel5' => 'IPS (Pengenalan sejarah dan geografi)',
            'mapel6' => 'Seni Budaya (Musik dan bernyanyi)',
            'mapel7' => 'Bahasa Inggris',
            'mapel8' => 'Agama',
            'mapel9' => 'Bahasa Indonesia',
            'mapel10' => 'Istirahat',
            'mapel11' => 'Evaluasi Minggu Ini',
        ]);

        MataPelajaran::factory()->create([
            'kelas' => 'Kelas 6',
            'mapel1' => 'Bahasa Indonesia (Membaca dan menulis kalimat)',
            'mapel2' => 'Matematika (Operasi hitung lanjutan)',
            'mapel3' => 'IPA/Sains (Pengenalan tumbuhan dan hewan)',
            'mapel4' => 'Istirahat',
            'mapel5' => 'IPS (Pengenalan sejarah dan geografi)',
            'mapel6' => 'Seni Budaya (Musik dan bernyanyi)',
            'mapel7' => 'Bahasa Inggris',
            'mapel8' => 'Agama',
            'mapel9' => 'Bahasa Indonesia',
            'mapel10' => 'Istirahat',
            'mapel11' => 'Evaluasi Minggu Ini',
        ]);

        Pendidik::factory(10)->create();
        Berita::factory(10)->create();
        Siswa::factory(10)->create();

    }
}
